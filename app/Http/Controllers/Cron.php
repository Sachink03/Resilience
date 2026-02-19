<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Investment;
use App\Models\Compound;
use App\Models\Income;
use App\Models\User;
use App\Models\User_trade;
use App\Models\Reward;
use App\Models\Contract;
use App\Models\Withdraw;
use Illuminate\Support\Facades\URL;
use App\Models\Trade;
use Illuminate\Support\Facades\Http;
use DateTime;
use DateInterval;
use DatePeriod;
use Carbon\Carbon;
use Helper;

use Plisio\PlisioSdkLaravel\Payment;
use Illuminate\Support\Facades\Log;
class Cron extends Controller
{
    
public function __construct()
{
date_default_timezone_set("Asia/Kolkata");   //India time (GMT+5:30)
}
public function tradeAmt()
{
  Income::whereIn('remarks',['Passive Income','Profit Sharing Income'])->update(['credit_type' => 0]);
}



 public function my_level_team_countBusiness($userid){
        $arrin=array($userid);
        $ret=array();

        $i=1;
        while(!empty($arrin)){
            $alldown=User::select('id')->whereIn('sponsor',$arrin)->get()->toArray();    
            $alldown2=User::select('id')->whereIn('sponsor',$arrin)->where('active_status','Active')->get()->toArray(); 
            if(!empty($alldown)){
                $arrin = array_column($alldown,'id');
                $arrin2 = array_column($alldown2,'id');
                   
                $total=Investment::whereIn('user_id',$arrin2)->where('status','Active')->where('active_from','!=','Deposit Bonus')->sum('amount');
                 $this->final_business += $total;
                $ret[$i]=$arrin;
                $i++;
              
            }else{
                $arrin = array();
            } 
        }   
       
        
    }





 public function globaly_community()
    {  

    $allResult=User::get();
// print_r($allResult);die;
    if ($allResult) 
    {
     foreach ($allResult as $key => $value) 
     {
      
      $user_id=$value->id;
      $username=$value->username;
      
      
      
      
         $direct_list=User::where('sponsor',$user_id)->get(); 
    
	            $vicker_leg=0;
	        $power_leg=0;
	           $arrayabc = array();
	           if($direct_list!="")
	           {
	               foreach($direct_list as $key=>$value)
	               {
	                   $id_value=$value->id;
	                   $user_id_value=$value->username;
	                
	               //   $this->a=0;
	               $this->final_business=0;  
	                 $this->my_level_team_countBusiness($id_value);
	             
	                   $total=Investment::where('user_id',$id_value)->where('status','Active')->where('active_from','!=','Deposit Bonus')->sum('amount');
	                   
	                   
	                  $this->final_business +=$total;
	                 $abc = $this->final_business;  
	               //  echo $abc; die;
	                 $arrayabc[$user_id_value] = $abc;
	                 
	               //  dd($arrayabc);
	                    
	               //  print_r($this->final_business)."<br>".$user_id_value;echo "<br>";
	               }
	             
	               if(!empty($arrayabc))
	              {
	               
	               
	               //  echo "<pre>";
	               ////  print_r($maxValue);
	               //print_r($arrayabc);die;
	               
	               $maxValue = max(@$arrayabc);
                  $maxIndex = array_search(max($arrayabc), $arrayabc);
                   $vicker_leg=array_sum($arrayabc);  
	                 
	       	        $power_leg=$maxValue;
	       $vicker_leg=$vicker_leg-$power_leg;
	       
	              }else
	              {
	                    $vicker_leg=0;
	        $power_leg=0;
	              }
	              
	             
	       //echo $username."<br>";
	       // echo "<pre>";print_r($power_leg)."<br>";
	       // echo "<pre>";print_r($vicker_leg);die;
	  
	    }
	    else
	    {
	        $vicker_leg=0;
	        $power_leg=0;
	       
	    }
	    
             
               echo "<br>";
                 echo "ID : ".$username."<br>";
                 echo "Team A : ".$power_leg."<br>";
             echo "Team B: ".$vicker_leg;
             
        User::where('id', $user_id)
      ->update([
          'teamA' => $power_leg,
          'teamB' => $vicker_leg,
        ]); 
     
     }
    } 
    
    



}



public function generate_roi()
{
    $today = Carbon::today();

    // ❌ No ROI on weekends
    if ($today->isSaturday() || $today->isSunday()) {
        echo "Today is Weekend. ROI not generated.";
        return;
    }

    $investments = Investment::where('status', 'Active')
        ->where('roiCandition', 0)
        ->get();

    $roiPercent = generalDetail()->roiPercentage;

    foreach ($investments as $investment) {
        $user = User::where('id', $investment->user_id)
            ->where('active_status', 'Active')
            ->first();

        if (!$user) continue;

        $userId   = $user->id;
        $username = $user->username;
        $amount   = $investment->amount;

        // Daily ROI
        $dailyRoi = $amount * $roiPercent / 100;

        // 🔥 TOTAL income till now
        $totalEarned = Income::where('user_id', $userId)->where('remarks','!=','Reward Income')->sum('comm') ?? 0;

        // 🔥 2X CAP
        $maxCap = $user->investment->sum('amount') * 2;

        // ❌ If cap already reached
        if ($totalEarned >= $maxCap) {
            Investment::where('id', $investment->id)->update([
                'roiCandition' => 1
            ]);
            continue;
        }

        // 🔥 Remaining earning limit
        $remainingCap = $maxCap - $totalEarned;

        // 🔥 Final ROI for today
        $roi = min($dailyRoi, $remainingCap);

        echo "User: {$username} | ROI Given: {$roi} | Total: {$totalEarned}<br>";

        // Insert income (only if ROI > 0)
        if ($roi > 0) {
            Income::firstOrCreate(
                [
                    'remarks'   => 'Profit Sharing Income',
                    'ttime'     => $today,
                    'user_id'   => $userId,
                    'invest_id' => $investment->id,
                ],
                [
                    'remarks'    => 'Profit Sharing Income',
                    'comm'       => $roi,
                    'amt'        => $amount,
                    'invest_id'  => $investment->id,
                    'level'      => 0,
                    'credit_type'      => 1,
                    'ttime'      => $today,
                    'user_id_fk' => $username,
                    'user_id'    => $userId,
                ]
            );

            // Leadership bonus on actual ROI
            add_leadership_bonus($userId, $roi);
        }


        // 🔒 Close investment if cap reached today
        if (($totalEarned + $roi) >= $maxCap) {
            User::where('id',$userId)->update([
                'active_status' => 'Inactive'
            ]);
        }
    }
}


public function generate_compounded_roi()
{
    $today = date('Y-m-d');
    $compoundings = Compound::where('roiCandition',0)->get();

    foreach ($compoundings as $investment) {
        $user = User::where('id', $investment->user_id)
            ->where('active_status', 'Active')
            ->first();

        if (!$user) continue;

        $planMonths = (int) $investment->plan;
        $startDate = Carbon::parse($investment->sdate);
        $endDate = $startDate->copy()->addMonths($planMonths);

        // Check if today is within ROI period
        if (now()->greaterThanOrEqualTo($endDate)) {
            // Stop ROI
            $investment->update(['roiCandition' => 1]);
            continue;
        }

        // Skip if ROI already given today
        $alreadyGiven = Income::where('user_id', $user->id)
            ->where('invest_id', $investment->id)
            ->where('ttime', $today)
            ->where('remarks', 'Compounding ROI')
            ->exists();

        if ($alreadyGiven) continue;

        // Get yesterday's compound total
        $previousTotal = $investment->amount + $investment->roi_generated;

        // Calculate today's ROI: 1.25% of total (amount + previous ROI)
        $roi = round($previousTotal * 1.25 / 100, 4);

        // Add ROI to `incomes` table
        Income::create([
            'user_id'     => $user->id,
            'user_id_fk'  => $user->username,
            'invest_id'   => $investment->id,
            'amt'         => $investment->amount,
            'comm'        => $roi,
            'level'       => 0,
            'ttime'       => $today,
            'credit_type'       => 1,
            'remarks'     => 'Compounding ROI',
        ]);

        // Update compounding record
        $investment->increment('roi_days');
        $investment->increment('roi_generated', $roi);

     echo "ROI Credited to {$user->username} | ROI: $roi | Day: " . ($investment->roi_days + 1) . "<br>";
    }
}




  public function managePayout()

    {  

date_default_timezone_set("Asia/Kolkata"); 
//   User::where('id',20)->update(['name' =>'Rameshk']);
    $allResult=User::where('active_status','Active')->orderBy('id','ASC')->cursor();

    if ($allResult) 
    {
       $counter=1;
     foreach ($allResult as $key => $value) 
     {
      
     $userID=$value->id;
     $userName=$value->username;
     $adate_date =$value->adate;
     $balance=$value->balance;


  
     $income =Income::where('user_id',$userID)->sum('comm');
     $withdraw = Withdraw::where('user_id',$userID)->sum('amount');
     
       $balance = round($income-$withdraw,2);
  
    if($balance>0)
    {
    //   echo 'ID: '. $userName." Balance : ".$balance."<br>";   
        

        
        
    // $amountTotal= 5;
    // $transaction['item'] = 'Add wallet'; // invoice number
    // $transaction['amount'] =$amountTotal;
    // $transaction['currency1'] = 'USD';
    // $transaction['currency2'] = 'BNB.BSC';
    // $transaction['buyer_email'] = $value->email;
    // $transaction['success_url'] = URL::to('/user/invest');
    // $resultAarray = Helper::CreateTransaction($transaction);
       
    //   dd($resultAarray);
                   
    }
    
   
     $counter++;   
     }
    } 
    
    
    

}



public function reward_bonus()
{
    $users = User::where('active_status', 'Active')->where('teamA', '>=', 1000)
        ->where('teamB', '>=', 1000)->get();

    $slabs = [
        ['business' => 1000,   'amount' => 51,    'title' => ''],
        ['business' => 2500,   'amount' => 111,   'title' => ''],
        ['business' => 5000,   'amount' => 251,   'title' => ''],
        ['business' => 10000,  'amount' => 501,   'title' => ''],
        ['business' => 15000,  'amount' => 751,   'title' => 'Mobile'],
        ['business' => 20000,  'amount' => 1100,  'title' => ''],
        ['business' => 30000,  'amount' => 1500,  'title' => 'Tab'],
        ['business' => 40000,  'amount' => 2100,  'title' => ''],
        ['business' => 50000,  'amount' => 3000,  'title' => 'Laptop'],
        ['business' => 75000,  'amount' => 4000,  'title' => ''],
        ['business' => 100000, 'amount' => 7500,  'title' => ''],
        ['business' => 125000, 'amount' => 9000,  'title' => 'Bike'],
        ['business' => 150000, 'amount' => 11000, 'title' => ''],
        ['business' => 175000, 'amount' => 15000, 'title' => ''],
        ['business' => 200000, 'amount' => 21000, 'title' => 'Fully Paid Car'],
    ];

    foreach ($users as $user) {

        $cumulativeBusiness = 0;

        foreach ($slabs as $level => $slab) {

            $cumulativeBusiness += $slab['business'];

            // Already rewarded?
            $alreadyRewarded = Reward::where('user_id', $user->id)
                ->where('level', $level + 1)
                ->exists();

            if ($alreadyRewarded) {
                continue;
            }

            // BOTH legs must satisfy cumulative business
            if (
                $user->teamA >= $cumulativeBusiness &&
                $user->teamB >= $cumulativeBusiness
            ) {

                Reward::create([
                    'user_id'        => $user->id,
                    'user_id_fk'     => $user->username,
                    'level'          => $level + 1,
                    'remarks'        => 'Reward Income',
                    'amount'         => $slab['amount'],
                    'reward_title'   => $slab['title'],
                    'total_business' => $cumulativeBusiness,
                    'tdate'          => date('Y-m-d'),
                    'status'         => 'Approved'
                ]);

                Income::create([
                    'user_id'    => $user->id,
                    'user_id_fk' => $user->username,
                    'level'      => $level + 1,
                    'remarks'    => 'Reward Income',
                    'amt'        => $slab['amount'],
                    'comm'       => $slab['amount'],
                    'ttime'      => date('Y-m-d')
                ]);

                echo "Reward Level ".($level + 1)." given to {$user->username}<br>";
            }
        }
    }
}

public function dailyIncentive()
{


    $allResult=User::where('active_status','Active')->get();
    $todays=Date("Y-m-d");


    if ($allResult)
    {
        foreach ($allResult as $key => $value)
        {
        $userID=$value->id;
        $userName = $value->username;
        $userRank = $value->rank;
        
        $rewardDetail = Reward::where('user_id',$userID)->orderBy('id','DESC')->limit(1)->first();
        
        if($rewardDetail)
        {
           
            $data['remarks'] = 'Royalty Bonus';
            $data['comm'] = $rewardDetail->amount;
            $data['level'] = $rewardDetail->level;
            $data['amt'] = $rewardDetail->amount;
            $data['invest_id']=$rewardDetail->id;
            $data['ttime'] = date("Y-m-d");
            $data['user_id_fk'] = $userName;
            $data['user_id']=$userID; 
          $income = Income::firstOrCreate(['remarks' => 'Royalty Bonus','ttime'=>date("Y-m-d"),'user_id'=>$userID],$data);
           
        }
        
        
   


        }
    }
}





public function dynamicUpiCallback(Request $request)
{
    try {
        $queryData = $request->query();
        Log::info('Incoming callback data: ' . json_encode($queryData));

        // Save raw JSON
        // Activitie::create(['data' => json_encode($queryData)]);

        $validAddresses = [
            "0x027F453fe1025DfD7aB87Dd961118CA44bbc6Bd7",
            "TJPhCR5fbJH9fS7ubEQz59FQ4hLbWd9jAh"
        ];

        if (
            in_array($queryData['address_out'], $validAddresses) &&
            $queryData['result'] === "sent" &&
            in_array($queryData['coin'], ['bep20_usdt', 'trc20_usdt'])
        ) {
            $txnId = $queryData['txid_in'];
            $userName = $queryData['refid'];

            $exists = Investment::where('transaction_id', $txnId)->exists();

            if (!$exists) {
                Log::info("Processing new transaction: {$txnId} for user: {$userName}");

                $amount = number_format((float) $queryData['value_coin'], 2, '.', '');
                $blockchain = $queryData['coin'] === 'bep20_usdt' ? 'USDT_BSC' : 'USDT_TRON';

                $user = User::where('username', $userName)->first();
                if (!$user) {
                    return response()->json([
                        'message' => 'User not found',
                        'status' => false,
                    ]);
                }

                $now = Carbon::now();
                $invoice = rand(1000000, 9999999);

                $users = User::where('id',$user->id)->first();
                if ($users->active_status=="Pending")
                 {
                      
                //   first_deposit_bonus($users->id,$amount);
             
                  $user_update=array('active_status'=>'Active','adate'=>Date("Y-m-d H:i:s"),'package'=>$amount,'booster_adate'=>Date("Y-m-d H:i:s"));
                  User::where('id',$user->id)->update($user_update);
                
                }
                 else
               {
                    if($users->active_status=="Inactive")
                  {
                    User::where('id',$user->id)->update(['booster_adate'=>Date("Y-m-d H:i:s")]);    
                  }
                  
                  
                $total = $users->package+$amount;
                  $user_update=array('package'=>$total,'active_status'=>'Active',);
                User::where('id',$user->id)->update($user_update); 
               }
              

                
                // Insert investment
                Investment::insert([
                    'plan' => 1,
                    'orderId' => $invoice,
                    'transaction_id' => $txnId,
                    'user_id' => $user->id,
                    'user_id_fk' => $user->username,
                    'amount' => $amount,
                    'payment_mode' => $blockchain,
                    'status' => 'Active',
                    'sdate' => $now,
                    'active_from' => $user->username,
                    'created_at' => $now,
                ]);

              

                // Update user balance and status
                $newPackage = $user->package + $amount;

                $updateData = [
                    // 'userbalance' => $newPackage,
                    'active_status' => 'Active',
                ];

                if ($user->active_status === 'Pending') {
                    $updateData['adate'] = $now;
                    $updateData['package'] = $amount;
                } else {
                    $updateData['package'] = $newPackage;
                }

                $user->update($updateData);
                
                
                   if($user->sponsor_detail)
                  {
                  $sponsorId = User::where('id',$user->sponsor_detail->id)->first();
                  
                  if($sponsorId)
                  {
                   $activeDeposit = $sponsorId->investment->where('roiCandition',0)->sum('amount');
                  $pckage = $activeDeposit * 5 ;   
                 $sdate = $sponsorId->booster_adate;
                 $newDate =date('Y-m-d H:i:s', strtotime($sdate. ' + 10 days'));
                
                        $directsIn7DaysSamePkg = User::where('sponsor', $sponsorId->id)
                            ->where('active_status', 'Active')->whereBetween('adate', [$sdate,$newDate])
                            ->sum('package');   
                                
                  $isBooster = ($directsIn7DaysSamePkg >= $pckage) ? true : false;
                  
                  if($isBooster)
                  {
                    $incomeData = [
                        'remarks'    => 'Booster Income',
                        'comm'       => $activeDeposit*2,
                        'amt'        => $activeDeposit,
                        'invest_id'  => 0,
                        'level'      => 0,
                        'ttime'      => date("Y-m-d"),
                        'user_id_fk' => $sponsorId->username,
                        'user_id'    => $sponsorId->id,
                    ];
                    // Create income entry if not already added for today
                    if($activeDeposit>0)
                    {
                         Income::Create($incomeData); 
                    }
                   
                     
                    Investment::where('user_id',$sponsorId->id)->where('roiCandition',0)->update(['roiCandition'=>1]);
                    User::where('id',$sponsorId->id)->update(['active_status'=>'Inactive']);
                    
                     
                                  
                  }
                      
                  }
                  
                  
                  
                      
                  }
                
               
                
                    Log::info("Processing new transaction: {$txnId} for user: {$userName}");
                
              
            }
        }

        return response()->json([
            'message' => 'Callback processed',
            'status' => true,
        ]);
    } catch (\Exception $e) {
        Log::error('UPI Callback Error: ' . $e->getMessage());
        return response()->json([
            'message' => 'Failed',
            'status' => false,
        ]);
    }
}




public function dynamiccompouding(Request $request)
{
    try {
        $queryData = $request->query();
        Log::info('Incoming callback data: ' . json_encode($queryData));

        // Save raw JSON
        // Activitie::create(['data' => json_encode($queryData)]);

        $validAddresses = [
            "0x3D297d99cCC6C872F6770978c5C1E794Da79f735",
            "TJPhCR5fbJH9fS7ubEQz59FQ4hLbWd9jAh"
        ];

        if (
            in_array($queryData['address_out'], $validAddresses) &&
            $queryData['result'] === "sent" &&
            in_array($queryData['coin'], ['bep20_usdt', 'trc20_usdt'])
        ) {
            $txnId = $queryData['txid_in'];
            $userName = $queryData['refid'];
            $duration = $queryData['duration'];

            $exists = Compound::where('transaction_id', $txnId)->exists();

            if (!$exists) {
                Log::info("Processing new transaction: {$txnId} for user: {$userName}");

                $amount = number_format((float) $queryData['value_coin'], 2, '.', '');
                $blockchain = $queryData['coin'] === 'bep20_usdt' ? 'USDT_BSC' : 'USDT_TRON';

                $user = User::where('username', $userName)->first();
                if (!$user) {
                    return response()->json([
                        'message' => 'User not found',
                        'status' => false,
                    ]);
                }

                $now = Carbon::now();
                $invoice = rand(1000000, 9999999);

                $users = User::where('id',$user->id)->first();
                if ($users->active_status=="Pending")
                 {
                      
                  $user_update=array('active_status'=>'Active','adate'=>Date("Y-m-d H:i:s"),'package'=>$amount);
                  User::where('id',$user->id)->update($user_update);
                
                }
                 else
               {
                $total = $users->package+$amount;
                  $user_update=array('package'=>$total,'active_status'=>'Active',);
                User::where('id',$user->id)->update($user_update); 
               }
              
             
                add_direct_income($users->id,$amount,1);  
                
                // Insert investment
                Compound::insert([
                    'plan' => $duration,
                    'orderId' => $invoice,
                    'transaction_id' => $txnId,
                    'user_id' => $user->id,
                    'user_id_fk' => $user->username,
                    'amount' => $amount,
                    'payment_mode' => $blockchain,
                    'status' => 'Active',
                    'sdate' => $now,
                    'active_from' => 'Deposit',
                    'created_at' => $now,
                ]);

             
                // Update user balance and status
                $newPackage = $user->package + $amount;

                $updateData = [
                    // 'userbalance' => $newPackage,
                    'active_status' => 'Active',
                ];

                if ($user->active_status === 'Pending') {
                    $updateData['adate'] = $now;
                    $updateData['package'] = $amount;
                } else {
                    $updateData['package'] = $newPackage;
                }

                $user->update($updateData);
                
               
                
                    Log::info("Processing new transaction: {$txnId} for user: {$userName}");
                
              
            }
        }

        return response()->json([
            'message' => 'Callback processed',
            'status' => true,
        ]);
    } catch (\Exception $e) {
        Log::error('UPI Callback Error: ' . $e->getMessage());
        return response()->json([
            'message' => 'Failed',
            'status' => false,
        ]);
    }
}


function expireOldBonusInvestments()
{
    $sevenDaysAgo = Carbon::now()->subDays(7)->toDateString();

    // Get all active "Deposit Bonus" investments older than 7 days
    $investments = Investment::where('active_from', 'Deposit Bonus')
        ->where('status', 'Active')
        ->whereDate('sdate', '<=', $sevenDaysAgo)
        ->get();

    foreach ($investments as $investment) {
        $investment->status = 'Expired';
        $investment->save();

        // Optional: log the change
        Log::info("Bonus expired for investment ID: {$investment->id}, User ID: {$investment->user_id}");
    }
}
        public  function my_binary($userid){
        $arrin=array($userid);
        $ret=array();
        // print_r($arrin);die();
        while(!empty($arrin)){
         $alldown= User::select('id')->whereIn('Parentid',$arrin)->get()->toArray();
         if(!empty($alldown)){
                $arrin = array_column($alldown,'id');
                $ret[]=$arrin;
              
              
            }else{
                $arrin = array();
            } 
        }
        // continue;    
        $final = array();         
        if(!empty($ret)){
            array_walk_recursive($ret, function($item, $key) use (&$final){
                $final[] = $item;
            });
        }

        return $final;
        
    }  

        public  function team_by_position($userid,$position){
        $ret=array();
        $get_position_user=User::where('Parentid',$userid)->where('position',$position)->first();
        if($get_position_user){
        
            $ret=$this->my_binary($get_position_user->id);
            $ret[]=$get_position_user->id;
        }
       
        return $ret;
    }







   public function my_level_team_count($userid,$level=10){
        $arrin=array($userid);
        $ret=array();

        $i=1;
        while(!empty($arrin)){
            $alldown=User::select('id')->whereIn('sponsor',$arrin)->get()->toArray();
            if(!empty($alldown)){
                $arrin = array_column($alldown,'id');
                $ret[$i]=$arrin;
                $i++;


            }else{
                $arrin = array();
            }
        }

        $final = array();
        if(!empty($ret)){
            array_walk_recursive($ret, function($item, $key) use (&$final){
                $final[] = $item;
            });
        }


        return $final;

    }

}
