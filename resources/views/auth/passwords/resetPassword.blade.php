

<!DOCTYPE html>
<html data-wf-domain="" data-wf-page="687f6ebea30244ec19600249" data-wf-site="687b1e181baaf79fcff18cdc" lang="en">

<head>
    <meta charset="utf-8" />
    <title>Enter New Password</title>
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <link href="css/style%EF%B9%96201.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous" />
    <link href="images/fv.png" rel="shortcut icon" type="image/x-icon" />
</head>
<body class="body color-left">
    <div class="page-wrapper"></div>

    <div class="section" style="background: url('images/rd_1.png') no-repeat center center/cover; 
            min-height: 100vh; 
            display: flex; 
            align-items: center; 
            justify-content: center; 
            padding-top: 20px !important; 
            padding-bottom: 20px !important;">

        <div class="container w-password-page w-form">
            <form action="{{route('submitResetPassword')}}" method="post" id="email-form" name="email-form"
                class="utility-page-form w-password-page"><input type="hidden" id="csrftoken" name="csrftoken" value="NUNZVDZIVzRYVVJEUlM1OEhLRjE3UVBQU0hFMlA4UDU=">
                {{ csrf_field() }}
                <div class="password-icom-wrap">
                    <a href="home.html">
                        <img width="150" src="{{asset('')}}assets\images\unique-world.png" alt="Logo" class="password-icon" />
                    </a>
                </div>
                

                <div class="password-bottom">
                                        <div>
                        <input class="text-field password w-password-page w-input" maxlength="256" name="password"
                            placeholder="Enter New Password" type="password" id="forget_email" required />
                         

                    </div>
                                                            <div style="margin-top:7px">

                       <input class="text-field password w-password-page w-input" maxlength="256" name="password_confirmation"
                            placeholder="Enter Confirm Password" type="password" id="forget_email" required />
</div>
                                        <div style="padding-top: 20px;">
                        <input type="submit" name="button" value="Save" style="width: 100%; cursor: pointer;"
                            class="submit-button " />
                    </div>
                    
                </div>
            </form>
        </div>
    </div>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"version":"2024.11.0","token":"1e9d8afe95c748ecbe8fa121b1ca3021","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}' crossorigin="anonymous"></script>
</body>

</html>