<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

<div id="main-content" class="flex-grow-1 m-3">
    <nav class="navbar navbar-expand-lg sticky-top shadow-sm main-header">
        <div class="container-fluid">
            <button class="btn btn-outline-secondary d-md-none me-2" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#mobileMenu" aria-controls="mobileMenu">
                <i class="fas fa-bars"></i>
            </button>

            <button id="sidebarToggle" class="btn btn-outline-secondary d-none d-md-inline-block me-3">
                <i class="fas fa-bars"></i>
            </button>

            <span class="navbar-brand text-capitalize text-white mb-0 h1 d-none d-sm-inline-block">deposit</span>

            <ul class="navbar-nav ms-auto">
                <li class="nav-item mb-0 dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownUser" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user-circle fa-lg me-1"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownUser">
                        <!--<li><a class="dropdown-item" href="{{ route('user.GenerateTicket') }}"><i-->
                        <!--            class="fas fa-headset fa-fw me-2"></i>Support</a></li>-->
                        <li><a class="dropdown-item" href="{{ route('user.profile') }}"><i
                                    class="fas fa-user-edit fa-fw me-2"></i>Edit Account</a></li>
                        <li><a class="dropdown-item" href="{{ route('user.ChangePass') }}"><i
                                    class="fas fa-shield-alt fa-fw me-2"></i>Security</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        <li><a class="dropdown-item text-danger"
                                href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                    class="fas fa-sign-out-alt fa-fw me-2"></i>Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <!-- <div class="top-video">
            <video class="top" src="video/top.mp4" type="video/mp4" muted autoplay loop plays-inline poster="video/poster.png"></video>
        </div> -->



    <script language="javascript">
        function openCalculator(id) {
            w = 225;
            h = 400;
            t = (screen.height - h - 30) / 2;
            l = (screen.width - w - 30) / 2;
            window.open('?a=calendar&type=' + id, 'calculator' + id, "top=" + t + ",left=" + l + ",width=" + w +
                ",height=" + h + ",resizable=1,scrollbars=0");


            for (i = 0; i < document.spendform.h_id.length; i++) {
                if (document.spendform.h_id[i].value == id) {
                    document.spendform.h_id[i].checked = true;
                }
            }


        }

        function updateCompound() {
            var id = 0;
            var tt = document.spendform.h_id.type;
            if (tt && tt.toLowerCase() == 'hidden') {
                id = document.spendform.h_id.value;
            } else {
                for (i = 0; i < document.spendform.h_id.length; i++) {
                    if (document.spendform.h_id[i].checked) {
                        id = document.spendform.h_id[i].value;
                    }
                }
            }

            var cpObj = document.getElementById('compound_percents');
            if (cpObj) {
                while (cpObj.options.length != 0) {
                    cpObj.options[0] = null;
                }
            }

            if (cps[id] && cps[id].length > 0) {
                document.getElementById('compound_block').style.display = '';
                for (i in cps[id]) {
                    cpObj.options[cpObj.options.length] = new Option(cps[id][i]);
                }
            } else {
                document.getElementById('compound_block').style.display = 'none';
            }
        }

        var cps = {};

        function validateForm() {
            var amount = document.spendform.amount.value;
            if (isNaN(amount) || amount <= 0) {
                alert('Please enter a valid amount to deposit');
                return false;
            }
            return true;
        }
    </script>

        <div class="row mt-3">
            

         @php
    // Get current hour in Indian Standard Time
    $currentHour = now('Asia/Kolkata')->format('H');
    
    $currentHour =10;
@endphp

<div class="col-md-6 mb-3">
    @if ($currentHour >= 6 && $currentHour < 11)
<form method="post" action="{{ route('user.confirmDeposit') }}"
      onsubmit="return validateDepositForm();">
    @csrf

            <div class="card">
                <div class="card-header">
                    <h3>Deposit</h3>
                </div>
                <div class="card-body">

                    <div class="mb-3">
                        <label>Enter Amount</label>
                        <input type="text" name="amount" id="amount" class="form-control"
                               placeholder="Enter Amount">
                        <p id="principal_error" style="color:red"></p>
                    </div>

                    <div class="mb-3">
                        <label>Payment Mode</label>
                        <input type="text" name="paymentMode" value="USDT.BEP20" readonly class="form-control">
                    </div>

                    <!-- <div class="mb-3">
                        <label>Transaction ID</label>
                        <input type="text" name="transaction_id" placeholder="Transaction ID"
                               class="form-control">
                    </div> -->

                    <div class="text-center">
                        <input type="submit" value="Submit" class="sbmt btn btn-primary submit-btn">
                    </div>
                </div>
            </div>
        </form>
    @else
        <div class="alert alert-warning text-center mt-4">
            ⚠️ Deposits are allowed only between <strong>6:00 AM</strong> and <strong>11:00 AM (IST)</strong>.<br>
            Please come back during this time window.
        </div>
    @endif
</div>
        </div>
<script>
function validateDepositForm() {
    const amountInput = document.getElementById('amount');
    const error = document.getElementById('principal_error');

    let value = amountInput.value.replace(/[^0-9]/g, '');
    amountInput.value = value;

    if (value === '') {
        error.innerText = 'Amount is required';
        return false;
    }

    let amount = parseInt(value);

    if (amount < 100) {
        error.innerText = 'Minimum amount is 100';
        return false;
    }

    if (amount % 100 !== 0) {
        error.innerText = 'Amount must be multiple of 100';
        return false;
    }

    error.innerText = '';
    return true; // ✅ POST allowed
}
</script>

    <!-- Copy JS -->
    <script>
        function copyWalletAddress() {
            const text = document.getElementById("walletAddressText").innerText.trim();
            navigator.clipboard.writeText(text).then(() => {
                alert("Wallet address copied!");
            }).catch(() => {
                alert("Failed to copy.");
            });
        }
    </script>

    <!-- JS for Copy Button -->

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            updateCompound();
        });
    </script>


</div>
@include('layouts.upnl.sidebar')

    @include('partials.notify')
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
<script src="{{ asset('') }}assets/js/dash.js"></script>


<script>
    window.addEventListener('load', function() {
        // All resources (images, scripts, stylesheets, etc.) are loaded
        const preloaderContainer = document.querySelector('.preloader-container');
        const content = document.querySelector('.content');

        if (preloaderContainer) {
            // Add the 'hidden' class to trigger the fade-out animation
            preloaderContainer.classList.add('hidden');

            // Optional: If you want to completely remove the preloader from the DOM
            // after the transition, you can listen for the 'transitionend' event.
            preloaderContainer.addEventListener('transitionend', function() {
                if (preloaderContainer.style.opacity === '0' || getComputedStyle(preloaderContainer)
                    .opacity === '0') {
                    preloaderContainer.style.display = 'none'; // Or preloaderContainer.remove();
                }
            }, {
                once: true
            }); // {once: true} ensures the event listener is removed after it fires
        }

        if (content) {
            content.style.display = 'block'; // Or any other display type you need, e.g., 'flex'
            // If you used opacity for content:
            // content.style.opacity = '1';
            // content.style.visibility = 'visible';
        }
    });

    // Fallback in case 'load' event doesn't fire or takes too long (e.g., for broken images)
    // You might want to adjust the timeout duration
    setTimeout(function() {
        const preloaderContainer = document.querySelector('.preloader-container');
        const content = document.querySelector('.content');

        if (preloaderContainer && !preloaderContainer.classList.contains('hidden')) {
            console.warn("Preloader timeout reached. Forcing hide.");
            preloaderContainer.classList.add('hidden');
            if (preloaderContainer.style.opacity === '0' || getComputedStyle(preloaderContainer).opacity ===
                '0') {
                preloaderContainer.style.display = 'none';
            }
            if (content) {
                content.style.display = 'block';
            }
        }
    }, 10000); // 10 seconds timeout as an example
</script>

</body>

</html>
