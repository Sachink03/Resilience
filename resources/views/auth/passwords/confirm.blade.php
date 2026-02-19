




<!DOCTYPE html>
<html data-wf-domain="" data-wf-page="687f6ebea30244ec19600249" data-wf-site="687b1e181baaf79fcff18cdc" lang="en">

<head>
    <meta charset="utf-8" />
    <title>Enter Recovery Code</title>
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <link href="css/style%EF%B9%96201.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous" />
    <link href="images/fv.png" rel="shortcut icon" type="image/x-icon" />
</head>
<body class="body color-left">
    <div class="page-wrapper"></div>
<script language="javascript">
                        function checkform() {
                            if (document.forgotform.email.value == '') {
                                alert("Please type your username or email!");
                                document.forgotform.email.focus();
                                return false;
                            }
                            return true;
                        }
                        </script>
    <div class="section" style="background: url('images/rd_1.png') no-repeat center center/cover; 
            min-height: 100vh; 
            display: flex; 
            align-items: center; 
            justify-content: center; 
            padding-top: 20px !important; 
            padding-bottom: 20px !important;">

        <div class="container w-password-page w-form">
            <form action="{{route('verifyCode')}}" method="post" id="email-form"  name="forgotform" onsubmit="return checkform();"
                class="utility-page-form w-password-page">
                {{ csrf_field() }}
                               <input type="hidden" name="form_id" value="17473928934359"><input type="hidden" name="form_token" value="82efdaf5902c747ed5213ab73066543a">
                                    <input type="hidden" name="a" value="forgot_password">
                                    <input type="hidden" name="action" value="forgot_password">
                <div class="password-icom-wrap">
                    <a href="home.html">
                        <img width="150" src="{{asset('')}}assets\images\unique-world.png" alt="Logo" class="password-icon" />
                    </a>
                </div>
                

                <div class="password-bottom">
                                        <div>
                        <input class="text-field password w-password-page w-input" maxlength="256" name="code"
                            placeholder="Recovery Code" type="text" id="forget_email" required />
                    </div>
                                        <div style="padding-top: 20px;">
                        <input type="submit" name="button" value="Send Password" style="width: 100%; cursor: pointer;"
                            class="submit-button " />
                    </div>
                                                        <input type="hidden" value="{{$userID}}" class="form-control" name="userID">

                </div>
            </form>
                @include('partials.notify')

        </div>
    </div>
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
            if (preloaderContainer.style.opacity === '0' || getComputedStyle(preloaderContainer).opacity === '0') {
                 preloaderContainer.style.display = 'none'; // Or preloaderContainer.remove();
            }
        }, { once: true }); // {once: true} ensures the event listener is removed after it fires
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
        if (preloaderContainer.style.opacity === '0' || getComputedStyle(preloaderContainer).opacity === '0') {
            preloaderContainer.style.display = 'none';
        }
        if (content) {
            content.style.display = 'block';
        }
    }
}, 10000); // 10 seconds timeout as an example
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"version":"2024.11.0","token":"1e9d8afe95c748ecbe8fa121b1ca3021","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}' crossorigin="anonymous"></script>
</body>

</html>