<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Investment;
use App\Models\Bank;
use App\Models\Withdraw;
use App\Models\Debit;
use Hexters\CoinPayment\CoinPayment;
use App\Models\CoinpaymentTransaction;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Log;
use Redirect;
use Hash;
use DB;

class WithdrawRequest extends Controller
{
    public function index()
    {
        $user=Auth::user();
        $bank = Bank::where('user_id',$user->id)->orderBy('id','desc')->get();
        $this->data['bank'] = $bank;
        $this->data['page'] = 'user.withdraw.WithdrawRequest';
        return $this->dashboard_layout();
    }


    public function withdrawPrinciple()
    {
        $user=Auth::user();
        $bank = Bank::where('user_id',$user->id)->orderBy('id','desc')->get();
        $this->data['bank'] = $bank;
        $this->data['page'] = 'user.withdraw.withdraw-principle';
        return $this->dashboard_layout();
    }


   public function WithdrawRequest(Request $request)
{
    try {
        $validation = Validator::make($request->all(), [
            'amount' => 'required|numeric|min:5',
            'PSys' => 'required',
            'walletAddress' => 'required',
            'code' => 'required'

        ]);

        if ($validation->fails()) {
            Log::info('Validation failed', ['error' => $validation->getMessageBag()->first()]);
            return Redirect::back()->withErrors($validation->getMessageBag()->first())->withInput();
        }

    $user = Auth::user();

    // Check OTP from password_resets table
    $record = DB::table('password_resets')
        ->where('email', $user->email)
        ->where('token', $request->code)
        ->first();

    if (!$record) {
        return back()->withErrors(['code' => 'Invalid or expired OTP']);
    }

    $balance = round($user->available_balance(),2);
        $account = '';

        if ($request->PSys == "USDT.BEP20") {
            $account = $user->usdtBep20;
            $paymentMode = "USDT_BSC";
        }

        if ($balance >= $request->amount) {
            $todayWithdraw = Withdraw::where('user_id', $user->id)
                ->where('status', '!=', 'Failed')
                ->where('wdate', date('Y-m-d'))
                ->first();

            if ($todayWithdraw) {
                return Redirect::back()->withErrors(['Any Withdraw limit per Id once a day!']);
            }
                
            $existingRequest = Withdraw::where('user_id', $user->id)->where('status', 'Pending')->first();

            if ($existingRequest) {
                return Redirect::back()->withErrors(['Withdraw Request Already Exists!']);
            }
            $withdrawAmount = $request->amount;
            $chargePercent = 5;
            $chargeAmount  = round(($withdrawAmount * $chargePercent) / 100, 2);
            $payableAmount = round($withdrawAmount - $chargeAmount, 2);

            if (!empty($account)) {
                $data = [
                    'txn_id' => md5(time() . rand()),
                    'user_id' => $user->id,
                    'user_id_fk' => $user->username,
                    'amount' => $withdrawAmount,
                    'account' => $account,
                    'payment_mode' => $paymentMode,
                    'status' => 'Pending',
                    'walletType' => 1,
                    'wdate' => date("Y-m-d"),
                ];

                $payment = Withdraw::create($data);
                DB::table('password_resets')->where('email', $user->email)->delete();

                $checkAmount1 = Investment::where('user_id', $user->id)->where('roiCandition', 1)->orderBy('id','DESC')->limit(1)->first();
                $checkAmount = $checkAmount1 ? $checkAmount1->amount : 0;
                if ($request->amount > $checkAmount) {
                    $updateData['isWithdrawn'] = 1;
                    Investment::where('id', $checkAmount1->id)->update($updateData);
                }
              


                 $notify[] = ['success', 'Withdraw Request Submitted successfully'];
                return redirect()->back()->withNotify($notify);

              
            } else {
                return Redirect::back()->withErrors(['Please update your ' . $request->PSys . ' payment address.']);
            }
        } else {
            return Redirect::back()->withErrors(['Insufficient balance in your account.']);
        }
    } catch (\Exception $e) {
        Log::error('WithdrawRequest Exception', ['error' => $e->getMessage()]);
        return redirect()->route('user.WithdrawRequest')->withErrors(['error' => $e->getMessage()])->withInput();
    }
}



   
public function WithdrawPrincipalRequest(Request $request)
{
    try {
        $validation = Validator::make($request->all(), [
            'principal_amount'        => 'required|numeric|min:10',
            'PSys'          => 'required',
            'walletAddress' => 'required',
            'code'          => 'required',
        ]);

        if ($validation->fails()) {
            Log::info('Validation failed', ['error' => $validation->getMessageBag()->first()]);
            return Redirect::back()->withErrors($validation->getMessageBag()->first())->withInput();
        }

        $user = Auth::user();

        // 1) Verify OTP from password_resets table
        $record = DB::table('password_resets')
            ->where('email', $user->email)
            ->where('token', $request->code)
            ->first();

        if (!$record) {
            return back()->withErrors(['code' => 'Invalid or expired OTP']);
        }

        // 2) Payment mode + address
        $account = '';
        $paymentMode = null;
        if ($request->PSys === "USDT.BEP20") {
            $account = $user->usdtBep20;
            $paymentMode = "USDT_BSC";
        }
        if (empty($account)) {
            return Redirect::back()->withErrors(['Please update your ' . $request->PSys . ' payment address.']);
        }

        // 3) Releasable principal calculation (25% before 100d, else 100%), minus already withdrawn
        //    Uses each investment’s own age.
        $investments = $user->investment ?? collect(); // collection of user investments (amount, created_at)
        $totalInvested = $investments->sum('amount');
        $alreadyWithdrawn = $user->withdrawPrinciple(); // YOUR existing helper

        // Allowed by policy up to now
        $policyAllowed = $investments->sum(function ($inv) {
            $days = now()->diffInDays($inv->created_at);
            $rate = $days < 100 ? 0.25 : 1.0;
            return $inv->amount * $rate;
        });

        $policyRoomLeft     = max(0, $policyAllowed - $alreadyWithdrawn);
        $remainingPrincipal = max(0, $totalInvested - $alreadyWithdrawn);
        $releasableNow      = min($policyRoomLeft, $remainingPrincipal);

        $reqAmount = (float) $request->principal_amount;

        if ($releasableNow <= 0) {
            return Redirect::back()->withErrors(['No principal available to withdraw at this time.']);
        }
        if ($reqAmount > $releasableNow) {
            return Redirect::back()->withErrors([
                'You can withdraw up to ' . number_format($releasableNow, 2) . ' USDT from principal at this time.'
            ])->withInput();
        }

        // 4) One request per day (not failed) & no pending
        $todayWithdraw = Withdraw::where('user_id', $user->id)
            ->where('status', '!=', 'Failed')
            ->where('wdate', date('Y-m-d'))
            ->where('type', 'principal') // keep separate from income withdrawals
            ->first();

        if ($todayWithdraw) {
            return Redirect::back()->withErrors(['Any Withdraw limit per Id once a day!']);
        }

        $existingRequest = Withdraw::where('user_id', $user->id)
            ->where('status', 'Pending')
            ->where('type', 'principal')
            ->first();

        if ($existingRequest) {
            return Redirect::back()->withErrors(['Withdraw Request Already Exists!']);
        }

        // 5) Create the withdrawal record (principal)
        $data = [
            'txn_id'      => md5(time() . rand()),
            'user_id'     => $user->id,
            'user_id_fk'  => $user->username,
            'amount'      => $reqAmount,
            'account'     => $account,
            'payment_mode'=> $paymentMode,
            'status'      => 'Pending',
            'walletType'  => 2,               // 2 = principal wallet/type
            'type'        => 'principal',     // mark as principal withdrawal
            'wdate'       => date("Y-m-d"),
        ];

        Withdraw::create($data);

        // Invalidate OTP
        DB::table('password_resets')->where('email', $user->email)->delete();

        $notify[] = ['success', 'Principal Withdraw Request Submitted successfully'];
        return redirect()->back()->withNotify($notify);

    } catch (\Exception $e) {
        Log::error('WithdrawPrincipalRequest Exception', ['error' => $e->getMessage()]);
        return redirect()->route('user.Withdraw')->withErrors(['error' => $e->getMessage()])->withInput();
    }
}

    public function WithdrawHistory(Request $request){

        $user=Auth::user();
        $limit = $request->limit ? $request->limit : paginationLimit();
         $status = $request->status ? $request->status : null;
         $search = $request->search ? $request->search : null;
         $notes = Withdraw::where('user_id',$user->id)->orderBy('wdate','DESC');
        if($search <> null && $request->reset!="Reset"){
         $notes = $notes->where(function($q) use($search){
            $q->Where('wdate', 'LIKE', '%' . $search . '%')
              ->orWhere('amount', 'LIKE', '%' . $search . '%')
              ->orWhere('status', 'LIKE', '%' . $search . '%')
              ->orWhere('txn_id', 'LIKE', '%' . $search . '%');
         });

        }

         $notes = $notes->paginate($limit)->appends(['limit' => $limit ]);

       $this->data['search'] =$search;
       $this->data['withdraw_report'] =$notes;
       $this->data['page'] = 'user.withdraw.WithdrawHistory';
       return $this->dashboard_layout();
    } 
    
    public function debitReport(Request $request){

        $user=Auth::user();
        $limit = $request->limit ? $request->limit : paginationLimit();
         $status = $request->status ? $request->status : null;
         $search = $request->search ? $request->search : null;
         $notes = Debit::where('user_id',$user->id);
        if($search <> null && $request->reset!="Reset"){
         $notes = $notes->where(function($q) use($search){
            $q->Where('wdate', 'LIKE', '%' . $search . '%')
              ->orWhere('amount', 'LIKE', '%' . $search . '%')
              ->orWhere('status', 'LIKE', '%' . $search . '%')
              ->orWhere('txn_id', 'LIKE', '%' . $search . '%');
         });

        }

         $notes = $notes->paginate($limit)->appends(['limit' => $limit ]);

       $this->data['search'] =$search;
       $this->data['withdraw_report'] =$notes;
       $this->data['page'] = 'user.withdraw.debit';
       return $this->dashboard_layout();
    }
}
