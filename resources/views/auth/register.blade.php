<!DOCTYPE html>
<html data-wf-domain="dyxor.webflow.io" data-wf-page="687f6ebea30244ec19600249" data-wf-site="687b1e181baaf79fcff18cdc"
    lang="en">

<head>
    <meta charset="utf-8" />
    <title>Register - Unique World</title>
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <link href="css/style%EF%B9%96201.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous" />
    <link href="images/fv.png" rel="shortcut icon" type="image/x-icon" />
</head>
<style>
    :root {
        --primary-green: #00894d;
        --primary-hover: #007a44;
        --dark-bg: #1a1a1a;
        --card-bg: #161616;
        --border-color: #404040;
        --text-muted: #9ca3af;
        --success-color: #10b981;
        --warning-color: #f59e0b;
        --danger-color: #ef4444;
        --gradient-primary: linear-gradient(135deg, #00894d, #10b981);
        --shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        --transition: all 0.3s ease;
        --glow: 0 0 20px rgba(0, 137, 77, 0.3);
    }

    /* Enhanced Form Controls */
    .form-control {
        background: var(--section-color);
        border: 2px solid var(--border-color);
        border-radius: 12px;
        color: #ffffff;
        padding: 1rem 1.2rem;
        font-size: 1rem;
        transition: var(--transition);
        height: auto;
    }

    .form-control:focus {
        background: var(--dark-bg);
        border-color: var(--primary-green);
        box-shadow: 0 0 0 0.25rem rgba(0, 137, 77, 0.15), var(--glow);
        color: #ffffff;
        transform: translateY(-1px);
    }

    .form-control::placeholder {
        color: var(--text-muted);
    }

    /* PIN Code Container */
    .pin-code-container {
        display: flex;
        gap: 12px;
        justify-content: center;
        align-items: center;
    }

    .pin-code-input {
        width: 60px;
        height: 60px;
        text-align: center;
        font-size: 24px;
        font-weight: 600;
        background: var(--card-bg);
        border: 2px solid var(--border-color);
        border-radius: 12px;
        color: #ffffff;
        transition: var(--transition);
    }

    .pin-code-input:focus {
        background: var(--dark-bg);
        border-color: var(--primary-green);
        box-shadow: 0 0 0 0.25rem rgba(0, 137, 77, 0.15), var(--glow);
        outline: none;
        transform: scale(1.05);
    }

    .pin-code-input::placeholder {
        color: var(--text-muted);
    }
</style>

<body class="body color-left">
    <div class="page-wrapper"></div>

    <div class="section"
        style="background: url('images/rd_1.png') no-repeat center center/cover; 
            min-height: 100vh; 
            display: flex; 
            align-items: center; 
            justify-content: center; 
            padding-top: 50px !important; 
            padding-bottom: 50px !important;">

        <div class="container w-password-page w-form">
            <form action="{{ route('registers') }}" method="post" id="email-form" name="email-form"
                class="utility-page-form w-password-page">  
                @csrf

               <?php 
                $sponsor = request()->query('ref', '');
                $name = \App\Models\User::where('username', $sponsor)->first();

               ?>

                <div class="password-icom-wrap">
                    <a href="{{asset('')}}">
                        <img style="width:auto;height:80px" src="{{asset('')}}assets\images\unique-world.png" alt="Logo" class="password-icon" />
                    </a>
                </div>
                <div class="password-text-wrap">
                    <h1 class="h3 mobile-text-center">Signup</h1>
                    <label class="paragraph-large text-center w-password-page">
                        Signup Your Account
                    </label>
                </div>
                <div class="password-bottom">
                     <div >
                        <input class="text-field password w-password-page w-input check_sponsor_exist" data-response="usernameExist" maxlength="256" name="sponsor"
                            placeholder="Referral Code" type="text" value="{{$sponsor}}" required />
                    </div>
                    <small id="usernameExist"><?= $name ? $name->name : '' ?></small>
                    <div style="padding-top: 10px;">
                        <input class="text-field password w-password-page w-input" maxlength="256" name="name"
                            placeholder="Full Name" type="text" value="" required />
                    </div>
                   
                    <div style="padding-top: 20px;">
                        <input class="text-field password w-password-page w-input" maxlength="256" name="email"
                            placeholder="Enter your Email" type="email"   id="email" value="" required />
                    </div>
                    
                    <div style="padding-top: 20px;">
    <div style="position: relative;">

        <!-- Verification Code Input -->
        <input
            class="text-field password w-password-page w-input"
            maxlength="6"
            name="code"
            placeholder="Enter Verification Code"
            type="text"
            required
            style="padding-right: 90px;"
        />

        <!-- Send Button inside input -->
        <button
            type="button"
           id="otpBtn" onclick="sendOtp('otpBtn')"
            style="
                position: absolute;
                right: 6px;
                top: 50%;
                transform: translateY(-50%);
                height: 32px;
                padding: 0 14px;
                background-color: #4CAF50;
                color: #fff;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                font-size: 13px;
            "
        >
            Send
        </button>

    </div>
</div>
                    
                    
                                     <div style="padding-top: 20px; position: relative;">
    <span
        style="
            position: absolute;
            left: 12px;
            top: 64%;
            transform: translateY(-50%);
            color: #999;
            font-size: 14px;
        "
    >
        +91
    </span>

    <input
        class="text-field password w-password-page w-input"
        name="phone"
        placeholder="Enter your phone number"
        type="text"
        style="padding-left: 45px;"
        maxlength="10"
        required
        oninput="this.value=this.value.replace(/[^0-9]/g,'').slice(0,10)"
    />
</div>

                    <div style="padding-top: 20px;">
                        <input class="text-field password w-password-page w-input" maxlength="256" name="password"
                            placeholder="Enter your Password" type="password" required />
                    </div>
                    <div style="padding-top: 20px;">
                        <input class="text-field password w-password-page w-input" maxlength="256"
                            name="password_confirmation" placeholder="Confirm your Password" type="password" required />
                    </div>


                    <div style="padding-top: 20px;">
                        <input type="submit" value="Register" style="width: 100%; cursor: pointer;"
                            class="submit-button" name="submit" />
                    </div>
                    <div style="padding-top: 15px; text-align: center; font-size: 14px;">
                        Already have an account?
                        <a href="{{route('login')}}" style="text-decoration: none; color: #00ff8f">Login</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
        integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
        data-cf-beacon='{"version":"2024.11.0","token":"1e9d8afe95c748ecbe8fa121b1ca3021","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}'
        crossorigin="anonymous"></script>
</body>

</html>
    <script src="https://code.jquery.com//jquery-3.3.1.min.js"></script>
    @include('partials.notify')


   <script>
        $('.check_sponsor_exist').keyup(function(e) {
            var ths = $(this);
            var res_area = $(ths).attr('data-response');
            var sponsor = $(this).val();
            // alert(sponsor); 
            $.ajax({
                type: "POST",
                url: "{{ route('getUserName') }}",
                data: {
                    "user_id": sponsor,
                    "_token": "{{ csrf_token() }}",
                },
                success: function(response) {
                    // alert(response);      
                    if (response != 1) {
                        // alert("hh");
                        $(".submit-btn").prop("disabled", false);
                        $('#' + res_area).html(response).css('color', '#fff').css('font-weight', '800')
                            .css('margin-buttom', '10px');
                    } else {
                        // alert("hi");
                        $(".submit-btn").prop("disabled", true);
                        $('#' + res_area).html("Sponsor ID Not exists!").css('color', 'red').css(
                            'margin-buttom', '10px');
                    }
                }
            });
        });
    </script>

<script>
    const inputs = document.querySelectorAll('.pin-code-input');

    inputs.forEach((input, key) => {
        // Focus on first input when clicking on any empty input
        if (key !== 0) {
            input.addEventListener("click", function() {
                if (!inputs[0].value) {
                    inputs[0].focus();
                }
            });
        }

        // Handle keyup event
        input.addEventListener("keyup", function(e) {
            if (input.value) {
                if (key === 3) {
                    // Last input - combine all values
                    const userCode = [...inputs].map((inp) => inp.value).join("");
                    document.getElementById("pin_code").value = userCode;
                    input.blur(); // Remove focus from last input
                } else {
                    // Move to next input
                    inputs[key + 1].focus();
                }
            }
        });

        // Handle backspace
        input.addEventListener("keydown", function(e) {
            if (e.key === "Backspace" && !input.value && key !== 0) {
                inputs[key - 1].focus();
            }
        });

        // Only allow numbers
        input.addEventListener("input", function(e) {
            this.value = this.value.replace(/[^0-9]/g, '');
        });
    });
</script>
<script>
function sendOtp(id) {

    const button = document.getElementById(id);
    const email  = document.getElementById('email').value.trim();

    // Validate email
    if (!email) {
        notify('error', 'Please enter email first');
        return;
    }

    if (!/^\S+@\S+\.\S+$/.test(email)) {
        notify('error', 'Please enter valid email');
        return;
    }

    // Disable button
    button.disabled = true;

    let seconds = 60;
    button.innerText = `${seconds}s`;

    const countdown = setInterval(() => {
        seconds--;
        button.innerText = `${seconds}s`;

        if (seconds <= 0) {
            clearInterval(countdown);
            button.disabled = false;
            button.innerText = 'Resend';
        }
    }, 1000);

    // Send OTP request with email
    fetch("{{ route('sendOtp') }}", {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}',
            'Accept': 'application/json',
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ email: email })
    })
    .then(res => res.json())
    .then(data => {
        if (data.status === 'success') {
            notify('success', data.message || 'OTP sent successfully');
        } else {
            throw new Error(data.message);
        }
    })
    .catch(err => {
        clearInterval(countdown);
        button.disabled = false;
        button.innerText = 'Send';
        notify('error', 'Failed to send OTP');
        console.error(err);
    });
}
</script>
