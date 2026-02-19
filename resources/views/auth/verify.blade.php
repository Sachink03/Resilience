<!DOCTYPE html>
<html data-wf-domain="" data-wf-page="687f6ebea30244ec19600249" data-wf-site="687b1e181baaf79fcff18cdc" lang="en">

<head>
    <meta charset="utf-8" />
    <title>Login - Unique World Funds</title>
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <link href="css/style%EF%B9%96201.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous" />
    <link href="images/fv.png" rel="shortcut icon" type="image/x-icon" />
</head>

<body class="body color-left">
    <div class="page-wrapper"></div>

    <div class="section"
        style="background: url('images/rd_1.png') no-repeat center center/cover; 
            min-height: 100vh; 
            display: flex; 
            align-items: center; 
            justify-content: center; 
            padding-top: 20px !important; 
            padding-bottom:20px !important;">
        <div class="container w-password-page w-form">
            <form action="{{ route('login') }}" method="post" id="email-form" name="email-form"
                class="utility-page-form w-password-page">
                {{ csrf_field() }}
                <div class="password-icom-wrap">
                    <a href="{{ asset('') }}">
                        <img width="250" src="{{asset('')}}assets\images\unique-world.png" alt="Logo" class="password-icon" />
                    </a>
                </div>
                <div class="password-text-wrap">
                    <h1 class="h3 mobile-text-center">Congratulations</h1>
                    <label class="paragraph-large text-center w-password-page">
                   Success! Your account was created successfully.
                    </label>
                </div>
                <div class="password-bottom">

                    @if (session()->has('messages'))
                        @php
                            $user = session()->get('messages');
                        @endphp

                        <h4 style="color: #fff;">
                            Dear <span class="main-color"
                                style="color: #ffc70d; font-weight: 700;">{{ $user->name }}</span>,
                        </h4>
                        <br>
                        <h4 style="color: #fff;">
                            You have been successfully registered! <br>
                            Your User ID is
                            <span class="main-color" style="color: #1885c1; font-weight: 700;">
                                {{ $user->username }}
                            </span>
                            and your Password is
                            <span class="main-color" style="color: #1885c1; font-weight: 700;">
                                {{ $user->PSR }}
                            </span>.
                            Please check your email for more details.
                        </h4>
                    @endif

                    <div style="padding-top: 10px;">

                        <a href="{{ route('login') }}" class="submit-button "
                            style="  color:azure;  text-align: center;">Sign In</a>
                    </div>


                </div>
            </form>
        </div>
    </div>

    @include('partials.notify')
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
        integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
        data-cf-beacon='{"version":"2024.11.0","token":"1e9d8afe95c748ecbe8fa121b1ca3021","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}'
        crossorigin="anonymous"></script>
</body>

</html>
