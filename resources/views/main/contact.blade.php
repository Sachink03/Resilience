
<!DOCTYPE html>
<html data-wf-domain="prouple.webflow.io" data-wf-page="62b18b38aba6ac1bfd691624"
    data-wf-site="62a9646d33f56fbab98a976f">

<head>
    <meta charset="utf-8" />
    <title>Contacts - Ocean Funds</title>
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <link href="css/style%EF%B9%96201.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous" />
    <link href="images/fv.png" rel="shortcut icon" type="image/x-icon" />
</head>
<style>:root {
        --primary-green: #00894d;
        --primary-hover: #007a44;
        --dark-bg: #1a1a1a;
        --card-bg: #161616;
        --border-color: #404040;
        --text-muted: #9ca3af;
        --transition: all 0.3s ease;
        --glow: 0 0 20px rgba(0, 137, 77, 0.3);
    }

    .body-dark {
        background: var(--dark-bg);
    }

    .contact-form.wf-section {
        background: var(--dark-bg);
        padding: 80px 0;
        min-height: calc(100vh - 200px);
    }

    .section-inner-gap-100 {
        padding: 40px 0;
        width: 100%;
    }

    .contact-form.wf-section .container {
        max-width: 700px;
        margin: 0 auto;
    }

    .contact-form.wf-section .section-block {
        text-align: center;
    }

    .contact-form.wf-section .section-title {
        font-size: 42px;
        font-weight: 700;
        color: #ffffff;
        margin-bottom: 20px;
        line-height: 1.2;
        text-align: center;
    }

    .margin-bottom-0 {
        margin-bottom: 0;
    }

    .contact-form.wf-section .section-border-image {
        margin-top: 15px;
        margin-bottom: 40px;
        text-align: center;
        display: flex;
        justify-content: center;
    }

    .section-border-image img {
        height: 4px;
        width: 60px;
    }

    .contact-form-block {
        width: 100%;
        max-width: 600px;
        margin: 0 auto;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .from-group-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
        margin-bottom: 20px;
    }

    .default-input {
        width: 100%;
        background: var(--card-bg);
        border: 2px solid var(--border-color);
        border-radius: 12px;
        color: #ffffff;
        padding: 16px 20px;
        font-size: 15px;
        transition: var(--transition);
        outline: none;
    }

    .default-input:focus {
        background: var(--dark-bg);
        border-color: var(--primary-green);
        box-shadow: 0 0 0 0.25rem rgba(0, 137, 77, 0.15), var(--glow);
        transform: translateY(-1px);
    }

    .default-input::placeholder {
        color: var(--text-muted);
    }

    .default-text-area {
        min-height: 150px;
        resize: vertical;
        font-family: inherit;
    }

    .button-default-blue {
        width: 100%;
        background: var(--primary-green);
        color: #ffffff;
        border: none;
        border-radius: 12px;
        padding: 16px 32px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: var(--transition);
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .button-default-blue:hover {
        background: var(--primary-hover);
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(0, 137, 77, 0.4);
    }

    .button-default-blue:active {
        transform: translateY(0);
    }

    .w-form-done {
        background: rgba(16, 185, 129, 0.1);
        border: 2px solid #10b981;
        color: #10b981;
        padding: 16px 20px;
        border-radius: 12px;
        margin-bottom: 20px;
        display: none;
    }

    .w-form-fail {
        background: rgba(239, 68, 68, 0.1);
        border: 2px solid #ef4444;
        color: #ef4444;
        padding: 16px 20px;
        border-radius: 12px;
        margin-bottom: 20px;
        display: none;
    }

    /* Alert Styles */
    .alert {
        padding: 16px 20px;
        border-radius: 12px;
        margin-bottom: 20px;
        font-size: 15px;
    }

    .alert-success {
        background: rgba(16, 185, 129, 0.1);
        border: 2px solid #10b981;
        color: #10b981;
    }

    .alert-danger {
        background: rgba(239, 68, 68, 0.1);
        border: 2px solid #ef4444;
        color: #ef4444;
    }

    .alert-warning {
        background: rgba(245, 158, 11, 0.1);
        border: 2px solid #f59e0b;
        color: #f59e0b;
    }

    .alert-info {
        background: rgba(59, 130, 246, 0.1);
        border: 2px solid #3b82f6;
        color: #3b82f6;
    }

    /* Mobile Responsive */
    @media (max-width: 768px) {
        .contact-form.wf-section {
            padding: 60px 0;
        }

        .section-title {
            font-size: 32px;
        }

        .from-group-grid {
            grid-template-columns: 1fr;
            gap: 20px;
        }

        .default-input {
            padding: 14px 18px;
            font-size: 14px;
        }

        .button-default-blue {
            padding: 14px 28px;
            font-size: 15px;
        }
    }

    @media (max-width: 480px) {
        .section-title {
            font-size: 28px;
        }

        .default-input {
            padding: 12px 16px;
        }

        .button-default-blue {
            padding: 12px 24px;
        }
    }
</style>

<body class="body-dark">
    <div class="page-wrapper">
        <style>.show-sm-only {
        display: flex !important;
        padding-left:15px;
    }
    .show-sm-only .submit-button{
        width:50%;
    }
    @media (min-width: 768px) {
        .show-sm-only {
            display: none !important;
        }
    }
</style>

<div class="gradient-box-wrap">
    <img src="images/rd_1.png" loading="lazy" sizes="(max-width: 943px) 100vw, 943px" srcset="images/rd_1.png" alt=""
        class="gradient" />
</div>
<section class="navbar-section">
    <div class="container">
        <div class="navbar-layout">
            <div class="navbar-left"><a href="{{asset('')}}" aria-current="page"
                    class="navber-logo-box w-inline-block"><img src="{{asset('')}}assets\images\unique-world.png" loading="lazy" alt=""
                        class="dyxor-icon" /></a></div>
            <div id="w-node-d7d145bd-668f-e8aa-3c17-842d5b9f4560-5b9f455b" class="navbar-center">
                <div data-animation="default" data-collapse="medium" data-duration="400" data-easing="ease"
                    data-easing2="ease" role="banner" class="navbar w-nav">
                    <div class="navbar-container w-container">
                        <nav role="navigation" class="nav-menu-wrap w-nav-menu">
                            <a href="{{asset('')}}" aria-current="page" class="menu-link w-nav-link">Home</a>
                            <a href="{{asset('')}}#plans" class="menu-link w-nav-link">Plans</a>
                            <a href="contact.html" class="menu-link w-nav-link">Contact Us</a>
                            <div class="navbar-right show-sm-only">
                <a href="{{route('login')}}" class="submit-button w-button">Login</a>
                 <a href="{{route('register')}}" class="submit-button w-button">Signup</a>
            </div>
                        </nav>
                        <div class="menu-button w-nav-button">
                            <img src="images/menu.png" style="width:25px;" loading="lazy" alt="" class="menu-icon" />
                        </div>
                    </div>
                </div>
            </div>
           <div class="navbar-right tab-hide">
                <a href="{{route('login')}}" class="submit-button w-button">Login</a>
                 <a href="{{route('register')}}" class="submit-button w-button">Signup</a>
            </div>
        </div>
    </div>
</section>
        <div class="contact-form wf-section">
            <div class="section-inner-gap-100">
                <div class="container w-container">
                    <div class="section-block">
                        <div class="scroll-slide-up-animate">
                            <h2 class="section-title margin-bottom-0">Get in touch</h2>
                            <div class="section-border-image">
                                <img src="https://oceanunds.live/images/frontend/underline.svg" alt="underline" />
                            </div>
                        </div>
                    </div>

                    <div class="scroll-slide-up-animate">
                        <div class="contact-form">
                            
                                @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">{{ $errors->first() }}</div>
    @endif

                            
                            <form id="email-form" name="email-form"
      method="POST"
      action="{{ route('contactAdminMail') }}"
      class="contact-form-block">

    @csrf

    <div class="form-group from-group-grid">
        <input type="text" class="default-input w-input" name="name"
            placeholder="Full Name" required />

        <input type="email" class="default-input w-input" name="email"
            placeholder="Email" required />
    </div>

    <div class="form-group">
        <input type="text" class="default-input w-input" name="topic"
            placeholder="Subject" required />
    </div>

    <div class="form-group">
        <textarea placeholder="Message" name="message"
            required class="default-input default-text-area w-input"></textarea>
    </div>

    <div class="form-group">
        <input type="submit" value="Submit"
            class="button-default-blue contact-form-button w-button" />
    </div>
</form>




                            <div class="w-form-done">
                                <div>Thank you! Your submission has been received!</div>
                            </div>
                            <div class="w-form-fail">
                                <div>Oops! Something went wrong while submitting the form.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="section">
    <div class="container">
        <div class="footer-layout">
            <div class="footer-box-wrap">
                <div class="footer-top-wrap">
                    <div class="footer-content-wrap">
                        <div class="footer-link-left-wrap">
                            <div class="footer-typography-wrap">
                                <div class="footer-logo-link-wrap"><a href="{{asset('')}}" aria-current="page"
                                        class="logo-box w-inline-block w--current"><img src="{{asset('')}}assets\images\unique-world.png"
                                            loading="lazy" data-w-id="6e0a4b74-bd89-a600-8f27-bd02127a9302" alt=""
                                            class="footer-logo-image" /></a></div>
                                <div class="typography-text-left">
                                    <div data-w-id="6e0a4b74-bd89-a600-8f27-bd02127a9304"
                                        class="paragraph-large tab-text-center">Subscribe now to receive the
                                        latest blockchain news, product updates, and insights directly to your
                                        inbox.</div>
                                </div>
                            </div>
                            <div data-w-id="6e0a4b74-bd89-a600-8f27-bd02127a9310" class="blockchain-logo-image">
                                <a href="https://t.me/" class="logo-input-fild w-inline-block" target="_blank">
                                    <img src="telegram.png" loading="lazy" alt="" class="linked-in-teg" />
                                </a>
                            </div>
                        </div>
                        <div class="footer-link-right-wrap">
                            <div data-w-id="6e0a4b74-bd89-a600-8f27-bd02127a9318" class="footer-teg-left-wrap">
                                <div class="footer-teg-text"><a href="{{asset('')}}" aria-current="page"
                                        class="footer-menu w--current">Home</a>
                                    <a href="{{asset('')}}#plans" class="footer-menu">Plans</a>
                                    <a href="{{route('contact-us')}}" class="footer-menu">Contact Us</a>
                                </div>
                            </div>
                            <div data-w-id="6e0a4b74-bd89-a600-8f27-bd02127a9326" class="footer-teg-right-wrap">
                                <div class="footer-teg-text">
                                    <a href="{{route('login')}}" class="footer-menu">Login</a>
                                    <a href="{{route('register')}}" class="footer-menu">Signup</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-line"></div>
            </div>
            <p data-w-id="6e0a4b74-bd89-a600-8f27-bd02127a9333" class="paragraph-small text-center">© 2025 All
                Rights Reserved | Ocean Funds
            </p>
        </div>
    </div>
</section>
</div>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"version":"2024.11.0","token":"1e9d8afe95c748ecbe8fa121b1ca3021","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}' crossorigin="anonymous"></script>
</body>

</html>
<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=687b1e181baaf79fcff18cdc"
    type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin="anonymous"></script>
<script src="https://cdn.prod.website-files.com/687b1e181baaf79fcff18cdc/js/webflow.schunk.9b79167770a1f7a0.js"
    type="text/javascript"></script>
<script src="https://cdn.prod.website-files.com/687b1e181baaf79fcff18cdc/js/webflow.schunk.fdd89d1d7616e6e2.js"
    type="text/javascript"></script>
<script src="https://cdn.prod.website-files.com/687b1e181baaf79fcff18cdc/js/webflow.9634d32b.8b5fbd3b109c466a.js"
    type="text/javascript"></script>    </div>
</body>
@include('partials.notify')

</html>