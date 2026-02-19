<!DOCTYPE html>
<html data-wf-domain="" data-wf-page="687b1e181baaf79fcff18ce2" data-wf-site="687b1e181baaf79fcff18cdc" lang="en">

<head>
    <meta charset="utf-8" />
    <title>Unique World</title>
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <link href="css/style%EF%B9%96201.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous" />
    <link href="images/fv.png" rel="shortcut icon" type="image/x-icon" />
</head>
<style>
    /* Plans Section Styles */
    .plans-layout {
        display: flex;
        flex-direction: column;
        gap: 60px;
    }

    .plans-header {
        text-align: center;
        max-width: 800px;
        margin: 0 auto;
    }

    .center-alling {
        text-align: center;
        margin-top: 16px;
        color: rgba(255, 255, 255, 0.7);
    }

    .plans-content-wrap {
        display: flex;
        flex-direction: column;
        gap: 40px;
        max-width: 900px;
        margin: 0 auto;
        width: 100%;
    }

    /* Investment Packages Section */
    .investment-packages-section {
        background: linear-gradient(135deg, rgba(16, 185, 129, 0.1) 0%, rgba(5, 150, 105, 0.05) 100%);
        border: 1px solid rgba(16, 185, 129, 0.2);
        border-radius: 24px;
        padding: 40px;
    }

    .section-title {
        text-align: center;
        margin-bottom: 30px;
    }

    .section-title .h3 {
        margin-bottom: 8px;
    }

    .packages-list {
        display: flex;
        flex-direction: column;
        gap: 16px;
    }

    .package-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px 24px;
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(16, 185, 129, 0.2);
        border-radius: 12px;
        transition: all 0.3s ease;
    }

    .package-item:hover {
        background: rgba(16, 185, 129, 0.08);
        border-color: rgba(16, 185, 129, 0.4);
        transform: translateX(5px);
    }

    .package-amount {
        font-size: 24px;
        font-weight: 700;
        color: #10b981;
    }

    .package-details {
        display: flex;
        gap: 30px;
        align-items: center;
    }

    .package-roi,
    .package-duration {
        font-size: 16px;
        color: rgba(255, 255, 255, 0.9);
    }

    /* Referral System */
    .referral-system-wrap {
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(16, 185, 129, 0.2);
        border-radius: 24px;
        padding: 40px;
    }

    .referral-header {
        text-align: center;
        margin-bottom: 30px;
    }

    .referral-header .h3 {
        margin-bottom: 8px;
    }

    .referral-list {
        display: flex;
        flex-direction: column;
        gap: 16px;
    }

    .referral-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px 24px;
        background: rgba(16, 185, 129, 0.05);
        border: 1px solid rgba(16, 185, 129, 0.2);
        border-radius: 12px;
        transition: all 0.3s ease;
    }

    .referral-item:hover {
        background: rgba(16, 185, 129, 0.1);
        border-color: rgba(16, 185, 129, 0.4);
    }

    .referral-level-name {
        font-size: 18px;
        font-weight: 600;
        color: rgba(255, 255, 255, 0.9);
    }

    .referral-commission {
        font-size: 20px;
        font-weight: 700;
        color: #10b981;
    }

    /* Transaction Details */
    .transaction-details-wrap {
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(16, 185, 129, 0.2);
        border-radius: 24px;
        padding: 40px;
    }

    .transaction-header {
        text-align: center;
        margin-bottom: 30px;
    }

    .transaction-header .h3 {
        margin-bottom: 8px;
    }

    .transaction-list {
        display: flex;
        flex-direction: column;
        gap: 16px;
    }

    .transaction-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px 24px;
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 12px;
        transition: all 0.3s ease;
    }

    .transaction-item:hover {
        background: rgba(16, 185, 129, 0.08);
        border-color: rgba(16, 185, 129, 0.3);
    }

    .transaction-label {
        font-size: 18px;
        font-weight: 600;
        color: rgba(255, 255, 255, 0.9);
    }

    .transaction-value {
        font-size: 18px;
        font-weight: 700;
        color: #10b981;
    }

    /* Additional Info Box */
    .info-box {
        background: rgba(255, 193, 7, 0.1);
        border: 1px solid rgba(255, 193, 7, 0.3);
        border-radius: 12px;
        padding: 20px 24px;
        margin-top: 20px;
    }

    .info-box .paragraph-large {
        color: rgba(255, 255, 255, 0.9);
        line-height: 1.6;
        margin: 0;
    }

    /* Responsive Styles */
    @media (max-width: 768px) {

        .investment-packages-section,
        .referral-system-wrap,
        .transaction-details-wrap {
            padding: 24px 20px;
        }

        .package-item,
        .referral-item,
        .transaction-item {
            flex-direction: column;
            gap: 12px;
            text-align: center;
            padding: 16px;
        }

        .package-details {
            flex-direction: column;
            gap: 8px;
        }

        .package-amount,
        .referral-level-name,
        .transaction-label {
            font-size: 16px;
        }

        .referral-commission,
        .transaction-value {
            font-size: 18px;
        }
    }

    /* Animations */
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    [data-w-id="plans-tag"] {
        animation: fadeIn 0.6s ease 0.1s forwards;
    }

    [data-w-id="plans-title"] {
        animation: fadeIn 0.6s ease 0.2s forwards;
    }

    [data-w-id="plans-desc"] {
        animation: fadeIn 0.6s ease 0.3s forwards;
    }

    [data-w-id="plans-content"] {
        animation: fadeIn 0.6s ease 0.4s forwards;
    }

    [data-w-id="referral-info"] {
        animation: fadeIn 0.6s ease 0.5s forwards;
    }

    [data-w-id="transaction-info"] {
        animation: fadeIn 0.6s ease 0.6s forwards;
    }
</style>

<body class="body">
    <div class="page-wrapper">
        <style>
            .show-sm-only {
                display: flex !important;
                padding-left: 15px;
            }

            .show-sm-only .submit-button {
                width: 50%;
            }

            @media (min-width: 768px) {
                .show-sm-only {
                    display: none !important;
                }
            }
            .responsive-img {
    width: 173px;      /* Desktop width */
    height: 70px;      /* Aspect ratio safe */
    display: block;
    margin: 0 auto;    /* Center image */
}

/* 📱 Mobile view */
@media (max-width: 768px) {
    .responsive-img {
        width: 120px;  /* Mobile width */
        height:50px
    }
}
        </style>

        <div class="gradient-box-wrap">
            <img src="images/rd_1.png" loading="lazy" sizes="(max-width: 943px) 100vw, 943px" srcset="images/rd_1.png"
                alt="" class="gradient" />
        </div>
        <section class="navbar-section">
            <div class="container">
                <div class="navbar-layout">
                    <div class="navbar-left"><a href="{{asset('')}}" aria-current="page"
                            class="navber-logo-box w-inline-block"><img  src="{{asset('')}}assets\images\unique-world.png" class="responsive-img" loading="lazy"
                                alt="" class="dyxor-icon" /></a></div>
                    <div id="w-node-d7d145bd-668f-e8aa-3c17-842d5b9f4560-5b9f455b" class="navbar-center">
                        <div data-animation="default" data-collapse="medium" data-duration="400" data-easing="ease"
                            data-easing2="ease" role="banner" class="navbar w-nav">
                            <div class="navbar-container w-container">
                                <nav role="navigation" class="nav-menu-wrap w-nav-menu">
                                    <a href="#" aria-current="page" class="menu-link w-nav-link">Home</a>
                                    <a href="#plans" class="menu-link w-nav-link">Plans</a>
                                    <a href="{{route('contact-us')}}" class="menu-link w-nav-link">Contact Us</a>
                                    <div class="navbar-right show-sm-only">
                                        <a href="{{route('login')}}" class="submit-button w-button">Login</a>
                                        <a href="{{route('register')}}" class="submit-button w-button">Signup</a>
                                    </div>
                                </nav>
                                <div class="menu-button w-nav-button">
                                    <img src="images/menu.png" style="width:25px;" loading="lazy" alt=""
                                        class="menu-icon" />
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
        <section class="section">
            <div class="container">
                <div data-w-id="791b368c-f1da-4f8b-9b50-91584cc32244" class="home-hero-layout">
                    <div class="home-hero-left">
                        <div class="home-hero-box-wrap">
                            <div class="home-hero-text-icon-wrap">
                                <div class="home-hero-typography-wrap">
                                    <h1 class="display-text-heading mobile-text-center">UNIQUE WORLD</h1>
                                    <p class="h5 hero-text">Unique World empowers individuals worldwide by offering a structured ecosystem focused on participation-based Daily Income and performance rewards.</p>
                                </div>
                            </div>
                            <div class="hero-statistics-wrap">
                                <div class="statistics-box">
                                    <h2 class="h2 count-text">250K+</h2>
                                    <div class="count-wrap">
                                        <div data-w-id="e3d23278-216b-890d-efd4-d22022d2a001" class="count-box">
                                            <h2 class="h2 mobile-text-center">250K<span class="plus-span">+</span></h2>
                                            <h2 class="h2 mobile-text-center">250K<span class="plus-span">+</span></h2>
                                        </div>
                                    </div>
                                    <p class="paragraph-large mobile-text-center">Active Wallets Monthly</p>
                                </div>
                                <div class="statistics-box">
                                    <div class="count-wrap-box">
                                        <h2 class="h2 count-text">75+</h2>
                                        <div class="count-box-wrap">
                                            <div data-w-id="e166d9e2-ffa0-2742-21cf-fb6721898c71" class="count-box">
                                                <h2 class="h2">4</h2>
                                                <h2 class="h2">2</h2>
                                                <h2 class="h2">3</h2>
                                                <h2 class="h2">1</h2>
                                                <h2 class="h2">5</h2>
                                                <h2 class="h2">6</h2>
                                                <h2 class="h2">7</h2>
                                            </div>
                                            <div data-w-id="8cee6a03-a9ec-75f7-768c-0d9203954bed" class="count-box">
                                                <h2 class="h2">5</h2>
                                                <h2 class="h2">7</h2>
                                                <h2 class="h2">6</h2>
                                                <h2 class="h2">4</h2>
                                                <h2 class="h2">2</h2>
                                                <h2 class="h2">1</h2>
                                                <h2 class="h2">8</h2>
                                            </div>
                                            <div data-w-id="a96ab826-b945-cf19-376f-a4d25cbc2734" class="count-box">
                                                <h2 class="h2 count-title">+</h2>
                                                <h2 class="h2 count-title">+</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="paragraph-large mobile-text-center">Projects Launched</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-w-id="6483ca9e-70ae-c10a-2d39-caa1d67574e4" class="home-hero-right">
                        <div style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0)"
                            class="hero-image-wrap"><img src="images/circle.webp" loading="lazy"
                                sizes="(max-width: 2774px) 100vw, 2774px" srcset="images/circle.webp" alt=""
                                class="hero-image" /></div>
                        <div class="reviewer-box">
                            <div class="reviewr-wrap"><img src="images/mens.webp" loading="lazy"
                                    sizes="(max-width: 593px) 100vw, 593px" srcset="images/mens.webp" alt=""
                                    class="reviewer-image" /></div>
                            <p class="paragraph-large">Trusted by 10.5k user</p>
                        </div>
                        <div class="logo-wrap"><img src="images/logo_1.svg" loading="lazy" alt=""
                                class="logo-image" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        
        
       <div class="box">
    <div class="tradingview-widget-container my-0 py-0" style="background-color:rgb(255 255 255);z-index: 9;">
        <div class="tradingview-widget-container__widget"
            style="background-color: rgb(255 255 255);z-index: 9;"></div>
        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
            {
                "symbols": [{
                        "proName": "BITSTAMP:BTCUSD",
                        "title": "BTC/USD"
                    },
                    {
                        "proName": "BITSTAMP:ETHUSD",
                        "title": "ETH/USD"
                    },
                    {
                        "description": "GBP/USD",
                        "proName": "FX:GBPUSD"
                    },
                    {
                        "description": "EUR/USD",
                        "proName": "EURUSD"
                    },
                    {
                        "description": "USD/CAD",
                        "proName": "FX:USDCAD"
                    },
                    {
                        "description": "AUD/USD",
                        "proName": "FX:AUDUSD"
                    },
                    {
                        "description": "USD/JPY",
                        "proName": "FX:USDJPY"
                    },
                    {
                        "description": "USD/CHF",
                        "proName": "FX:USDCHF"
                    },
                    {
                        "description": "GOLD",
                        "proName": "OANDA:XAUUSD"
                    },
                    {
                        "description": "DOWJONES",
                        "proName": "CURRENCYCOM:US30"
                    },
                    {
                        "description": "UK100",
                        "proName": "OANDA:UK100GBP"
                    },
                    {
                        "description": "DAX INDEX",
                        "proName": "XETR:DAX"
                    }
                ],
                "colorTheme": "light",
                "isTransparent": true,
                "displayMode": "compact",
                "locale": "in"
            }
        </script>
    </div>
</div>
 
        
        
        
        
        
        <section data-w-id="94dcfd8d-2770-03b0-de3f-ae11eea07e5c" class="section technology">
            <div class="container">
                <div class="technology-layout">
                    <div class="technology-title-wrap">
                        <div data-w-id="a656f4da-7594-1630-b31c-11c882d6d257" style="opacity:0" class="tag-icon-box">
                            <div class="tag-icon-wrap"><img src="images/icon_1.svg" loading="lazy" alt=""
                                    class="tag-icon" />
                                <p class="tag-text">TECHNOLOGY</p>
                            </div>
                        </div>
                        <h2 data-w-id="c96c084c-3623-f189-ff9b-176d18e77b74" style="opacity:0"
                            class="h2 text-center">
                           Smart & Secure <span class="title-span">Digital Infrastructure</span></h2>
                    </div>
                    <div data-w-id="c8452e0f-e47c-5fd3-efd0-310e2f5db7f5" style="opacity:0"
                        class="technology-content-wrap">
                        <div class="technology-content-box left-card-box">
                            <div class="technology-text-button-wrap">
                                <p class="paragraph-large mobile-text-center">    Unique World is built on a modern digital framework designed to ensure transparency,
                            automation, and secure participation. Our system removes unnecessary complexity and
                            provides users with a smooth, reliable experience.</p>
                                <div class="primary-button-wrap"><a data-w-id="f8770552-0790-d787-5b09-99bfc1386380"
                                        href="{{route('register')}}" class="primary-button w-inline-block">
                                        <p class="button-text">Explore Technology</p>
                                        <div data-w-id="f8770552-0790-d787-5b09-99bfc1386383"
                                            class="button-icon w-embed"><svg width="20" height="20"
                                                viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.1484 3.43744C12.488 3.70963 12.7898 4.03373 13.0972 4.34094C13.1524 4.39597 13.2077 4.451 13.2629 4.50602C13.4118 4.65441 13.5606 4.80294 13.7093 4.9515C13.8024 5.04443 13.8954 5.13734 13.9885 5.23024C14.2801 5.52129 14.5716 5.81242 14.863 6.10366C15.1987 6.43925 15.5348 6.77457 15.871 7.10968C16.1315 7.36934 16.3918 7.62922 16.6519 7.88927C16.807 8.04436 16.9622 8.19935 17.1177 8.35412C17.2637 8.49949 17.4094 8.64514 17.555 8.791C17.6083 8.84441 17.6618 8.89771 17.7154 8.95091C17.7886 9.02365 17.8615 9.09675 17.9343 9.16994C17.9555 9.19079 17.9766 9.21164 17.9984 9.23313C18.2167 9.45428 18.3482 9.67685 18.3691 9.99018C18.3548 10.5869 17.7312 11.0246 17.3386 11.4175C17.2836 11.4728 17.2286 11.528 17.1736 11.5832C17.0252 11.7321 16.8766 11.8809 16.7281 12.0296C16.6351 12.1227 16.5422 12.2157 16.4493 12.3088C16.1583 12.6004 15.8672 12.8919 15.5759 13.1833C15.2403 13.5191 14.905 13.8551 14.5699 14.1913C14.3102 14.4518 14.0504 14.7121 13.7903 14.9722C13.6352 15.1273 13.4802 15.2825 13.3255 15.438C13.1801 15.584 13.0344 15.7298 12.8886 15.8753C12.8352 15.9287 12.7819 15.9821 12.7287 16.0357C12.6559 16.109 12.5828 16.1818 12.5096 16.2546C12.4784 16.2864 12.4784 16.2864 12.4464 16.3187C12.226 16.5364 11.9896 16.6792 11.6747 16.6943C11.451 16.6902 11.273 16.6165 11.0937 16.4843C10.8997 16.2601 10.8063 16.0535 10.8125 15.7574C10.8553 15.2438 11.36 14.8842 11.7018 14.5436C11.7419 14.5035 11.782 14.4635 11.8221 14.4234C11.9296 14.3158 12.0373 14.2084 12.145 14.1009C12.258 13.9882 12.3709 13.8753 12.4837 13.7625C12.697 13.5494 12.9103 13.3364 13.1237 13.1234C13.3668 12.8807 13.6099 12.6379 13.8529 12.395C14.3523 11.896 14.8519 11.3972 15.3515 10.8984C15.3241 10.8983 15.2967 10.8983 15.2685 10.8983C13.6443 10.896 12.0202 10.8931 10.3961 10.8894C10.2011 10.889 10.0061 10.8886 9.81113 10.8881C9.7529 10.888 9.7529 10.888 9.6935 10.8879C9.06486 10.8865 8.43623 10.8855 7.8076 10.8847C7.1626 10.8838 6.51761 10.8826 5.87262 10.8809C5.4746 10.8798 5.07658 10.8791 4.67855 10.8789C4.40565 10.8787 4.13275 10.878 3.85984 10.8771C3.70237 10.8765 3.5449 10.8762 3.38743 10.8763C3.24318 10.8764 3.09894 10.876 2.9547 10.8752C2.87796 10.8749 2.80122 10.8752 2.72448 10.8755C2.38119 10.8727 2.09047 10.8405 1.83588 10.5859C1.67043 10.3467 1.61108 10.1338 1.64056 9.84369C1.69586 9.6229 1.78697 9.42374 1.97931 9.29072C2.18194 9.16948 2.33335 9.13577 2.56606 9.13515C2.61169 9.13494 2.65731 9.13473 2.70431 9.1345C2.75447 9.13447 2.80463 9.13443 2.85631 9.13439C2.9101 9.13421 2.96388 9.13402 3.01767 9.1338C3.16563 9.13327 3.31359 9.13298 3.46154 9.13273C3.62104 9.13242 3.78054 9.13189 3.94004 9.13138C4.21642 9.13053 4.49281 9.12982 4.7692 9.12921C5.16882 9.12832 5.56843 9.12722 5.96805 9.12607C6.61637 9.12421 7.26469 9.12252 7.91301 9.12093C8.54286 9.1194 9.1727 9.11778 9.80255 9.11605C9.84136 9.11594 9.88017 9.11584 9.92016 9.11573C10.1149 9.11519 10.3096 9.11466 10.5043 9.11412C12.12 9.10967 13.7358 9.1055 15.3515 9.10151C15.3293 9.07941 15.3071 9.05732 15.2842 9.03455C14.7437 8.4966 14.2035 7.95831 13.6636 7.41967C13.4025 7.15919 13.1413 6.89882 12.8799 6.63871C12.6519 6.41196 12.4242 6.18501 12.1968 5.95781C12.0764 5.83755 11.9558 5.71739 11.8351 5.59748C11.7213 5.48452 11.6079 5.37129 11.4946 5.25785C11.4531 5.21635 11.4114 5.17495 11.3697 5.13366C10.8258 4.59534 10.8258 4.59534 10.8056 4.17475C10.8097 3.95093 10.8835 3.77324 11.0156 3.59369C11.3426 3.3062 11.7546 3.21041 12.1484 3.43744Z"
                                                    fill="white" />
                                            </svg></div>
                                    </a></div>
                            </div>
                            <div data-w-id="6c0ee6e3-5156-d204-9a73-d78938227c34" class="technology-card-wrap">
                                <div class="technology-card-box">
                                    <div class="technology-card-icon-wrap"><img src="images/icon_2.svg"
                                            loading="lazy" alt="" class="technology-card-icon" /></div>
                                    <div class="technology-card-text-box">
                                        <h3 class="h4">Automated Transactions</h3>
                                        <p class="paragraph-large"> Our system supports fast, automated, and trackable transactions, ensuring
                                    accuracy and transparency without manual intervention.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="technology-content-box technology-center-box">
                            <div data-w-id="b4037036-638c-f631-fcfa-f43dd3b846bf" class="technology-card-wrap">
                                <div class="technology-card-box technology-center-box">
                                    <div class="technology-card-icon-wrap"><img src="images/icon_3.svg"
                                            loading="lazy" alt="" class="technology-card-icon" /></div>
                                    <div class="technology-card-text-box">
                                        <h3 class="h4">Digital Asset System</h3>
                                        <p class="paragraph-large">  Structured digital units help manage participation records, rewards, and
                                    internal value flow in an organized and scalable way.</p>
                                    </div>
                                </div>
                            </div>
                            <div data-w-id="056778a4-c606-8c3f-a535-fab637a5d00d" class="technology-card-border-box">
                                <div class="technology-card-wrap color-box">
                                    <div class="technology-card-box technology-center-box">
                                        <div class="technology-card-icon-wrap"><img src="images/icon_4.svg"
                                                loading="lazy" alt="" class="technology-card-icon" /></div>
                                        <div class="technology-card-text-box">
                                            <h3 class="h4">User Identity Protection</h3>
                                            <p class="paragraph-large">  Secure identity management ensures that user data, accounts, and activities
                                        remain protected at all times.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="technology-content-box">
                            <div data-w-id="6a511f72-a6d3-d51e-37e7-3629ffec23c7" class="technology-card-wrap">
                                <div class="technology-card-box">
                                    <div class="technology-card-icon-wrap"><img src="images/icon_5.svg"
                                            loading="lazy" alt="" class="technology-card-icon" /></div>
                                    <div class="technology-card-text-box">
                                        <h3 class="h4">System Integration</h3>
                                        <p class="paragraph-large">Our platform is designed to work seamlessly across modules, enabling smooth
                                    data flow, scalability, and future upgrades.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section text-train">
            <div class="container traing">
                <div class="statistic-train-layout">
                    <div class="text-train-back-color">
                        <div data-w-id="94be5a45-247b-b461-c45e-68cfb646bd43"
                            style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-6deg) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-6deg) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-6deg) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-6deg) skew(0, 0)"
                            class="text-train-box-wrap">
                            <div data-w-id="def96bcb-4ffb-df96-34b9-ea075036f0ed"
                                style="-webkit-transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                                class="text-train"><span class="h3 train-span"> 3.2B+</span> <span
                                    class="text-gap">Total Transactions </span> <span
                                    class="h3 train-span">950M+</span>
                                <span class="text-gap">Active Wallets</span> <span class="h3 train-span">480K+</span>
                                <span class="text-gap">Smart Contracts</span> <span
                                    class="h3 train-span">1,200+</span>
                                <span class="text-gap">Supported Assets</span> <span
                                    class="h3 train-span">3.2B+</span>
                                <span class="text-gap">Total Transactions</span>
                            </div>
                            <div data-w-id="a2784ab2-0cc4-4d0e-4fce-124aab574afb"
                                style="-webkit-transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                                class="text-train"><span class="h3 train-span"> 3.2B+</span> <span
                                    class="text-gap">Total Transactions </span> <span
                                    class="h3 train-span">950M+</span>
                                <span class="text-gap">Active Wallets</span> <span class="h3 train-span">480K+</span>
                                <span class="text-gap">Smart Contracts</span> <span
                                    class="h3 train-span">1,200+</span>
                                <span class="text-gap">Supported Assets</span> <span
                                    class="h3 train-span">3.2B+</span>
                                <span class="text-gap">Total Transactions</span>
                            </div>
                            <div data-w-id="ebeff41b-68aa-f3fa-8f0f-19a37c1551e4"
                                style="-webkit-transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                                class="text-train"><span class="h3 train-span"> 3.2B+</span> <span
                                    class="text-gap">Total Transactions </span> <span
                                    class="h3 train-span">950M+</span>
                                <span class="text-gap">Active Wallets</span> <span class="h3 train-span">480K+</span>
                                <span class="text-gap">Smart Contracts</span> <span
                                    class="h3 train-span">1,200+</span>
                                <span class="text-gap">Supported Assets</span> <span
                                    class="h3 train-span">3.2B+</span>
                                <span class="text-gap">Total Transactions</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="container">
                <div class="features-layout">
                    <div data-w-id="97fb7c72-0b32-97fd-6b96-a1a98253e977" class="feature-box-wrap">
                        <div class="feature-box-left">
                            <div class="feature-content-box">
                                <div data-w-id="5c344c89-735d-4b1f-8cae-f16e3394ae76" style="opacity:0"
                                    class="tag-icon-box land-tag-center">
                                    <div class="tag-icon-wrap"><img src="images/icon_6.svg" loading="lazy"
                                            alt="" class="tag-icon" />
                                        <p class="tag-text">INTREGRATION</p>
                                    </div>
                                </div>
                                <div class="features-text-button-wrap">
                                    <div data-w-id="9ea859fe-a108-fa73-45ac-16108fd4f5d1" style="opacity:0"
                                        class="feature-typography-wrap">
                                        <h2 class="h2 land-text-center">Seamless system <span
                                                class="span-text">integration</span></h2>
                                        <p class="paragraph-large land-text-center"> Unique World is designed to integrate smoothly with modern digital systems,
                                    ensuring reliable performance, faster processing, and future-ready scalability.</p>
                                    </div>
                                    <div data-w-id="801c1556-d18d-ad39-d1dc-808acb369ebf" style="opacity:0"
                                        class="primary-button-wrap"><a
                                            data-w-id="f8770552-0790-d787-5b09-99bfc1386380" href="{{route('login')}}"
                                            class="primary-button w-inline-block">
                                            <p class="button-text">Get Started</p>
                                            <div data-w-id="f8770552-0790-d787-5b09-99bfc1386383"
                                                class="button-icon w-embed"><svg width="20" height="20"
                                                    viewBox="0 0 20 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12.1484 3.43744C12.488 3.70963 12.7898 4.03373 13.0972 4.34094C13.1524 4.39597 13.2077 4.451 13.2629 4.50602C13.4118 4.65441 13.5606 4.80294 13.7093 4.9515C13.8024 5.04443 13.8954 5.13734 13.9885 5.23024C14.2801 5.52129 14.5716 5.81242 14.863 6.10366C15.1987 6.43925 15.5348 6.77457 15.871 7.10968C16.1315 7.36934 16.3918 7.62922 16.6519 7.88927C16.807 8.04436 16.9622 8.19935 17.1177 8.35412C17.2637 8.49949 17.4094 8.64514 17.555 8.791C17.6083 8.84441 17.6618 8.89771 17.7154 8.95091C17.7886 9.02365 17.8615 9.09675 17.9343 9.16994C17.9555 9.19079 17.9766 9.21164 17.9984 9.23313C18.2167 9.45428 18.3482 9.67685 18.3691 9.99018C18.3548 10.5869 17.7312 11.0246 17.3386 11.4175C17.2836 11.4728 17.2286 11.528 17.1736 11.5832C17.0252 11.7321 16.8766 11.8809 16.7281 12.0296C16.6351 12.1227 16.5422 12.2157 16.4493 12.3088C16.1583 12.6004 15.8672 12.8919 15.5759 13.1833C15.2403 13.5191 14.905 13.8551 14.5699 14.1913C14.3102 14.4518 14.0504 14.7121 13.7903 14.9722C13.6352 15.1273 13.4802 15.2825 13.3255 15.438C13.1801 15.584 13.0344 15.7298 12.8886 15.8753C12.8352 15.9287 12.7819 15.9821 12.7287 16.0357C12.6559 16.109 12.5828 16.1818 12.5096 16.2546C12.4784 16.2864 12.4784 16.2864 12.4464 16.3187C12.226 16.5364 11.9896 16.6792 11.6747 16.6943C11.451 16.6902 11.273 16.6165 11.0937 16.4843C10.8997 16.2601 10.8063 16.0535 10.8125 15.7574C10.8553 15.2438 11.36 14.8842 11.7018 14.5436C11.7419 14.5035 11.782 14.4635 11.8221 14.4234C11.9296 14.3158 12.0373 14.2084 12.145 14.1009C12.258 13.9882 12.3709 13.8753 12.4837 13.7625C12.697 13.5494 12.9103 13.3364 13.1237 13.1234C13.3668 12.8807 13.6099 12.6379 13.8529 12.395C14.3523 11.896 14.8519 11.3972 15.3515 10.8984C15.3241 10.8983 15.2967 10.8983 15.2685 10.8983C13.6443 10.896 12.0202 10.8931 10.3961 10.8894C10.2011 10.889 10.0061 10.8886 9.81113 10.8881C9.7529 10.888 9.7529 10.888 9.6935 10.8879C9.06486 10.8865 8.43623 10.8855 7.8076 10.8847C7.1626 10.8838 6.51761 10.8826 5.87262 10.8809C5.4746 10.8798 5.07658 10.8791 4.67855 10.8789C4.40565 10.8787 4.13275 10.878 3.85984 10.8771C3.70237 10.8765 3.5449 10.8762 3.38743 10.8763C3.24318 10.8764 3.09894 10.876 2.9547 10.8752C2.87796 10.8749 2.80122 10.8752 2.72448 10.8755C2.38119 10.8727 2.09047 10.8405 1.83588 10.5859C1.67043 10.3467 1.61108 10.1338 1.64056 9.84369C1.69586 9.6229 1.78697 9.42374 1.97931 9.29072C2.18194 9.16948 2.33335 9.13577 2.56606 9.13515C2.61169 9.13494 2.65731 9.13473 2.70431 9.1345C2.75447 9.13447 2.80463 9.13443 2.85631 9.13439C2.9101 9.13421 2.96388 9.13402 3.01767 9.1338C3.16563 9.13327 3.31359 9.13298 3.46154 9.13273C3.62104 9.13242 3.78054 9.13189 3.94004 9.13138C4.21642 9.13053 4.49281 9.12982 4.7692 9.12921C5.16882 9.12832 5.56843 9.12722 5.96805 9.12607C6.61637 9.12421 7.26469 9.12252 7.91301 9.12093C8.54286 9.1194 9.1727 9.11778 9.80255 9.11605C9.84136 9.11594 9.88017 9.11584 9.92016 9.11573C10.1149 9.11519 10.3096 9.11466 10.5043 9.11412C12.12 9.10967 13.7358 9.1055 15.3515 9.10151C15.3293 9.07941 15.3071 9.05732 15.2842 9.03455C14.7437 8.4966 14.2035 7.95831 13.6636 7.41967C13.4025 7.15919 13.1413 6.89882 12.8799 6.63871C12.6519 6.41196 12.4242 6.18501 12.1968 5.95781C12.0764 5.83755 11.9558 5.71739 11.8351 5.59748C11.7213 5.48452 11.6079 5.37129 11.4946 5.25785C11.4531 5.21635 11.4114 5.17495 11.3697 5.13366C10.8258 4.59534 10.8258 4.59534 10.8056 4.17475C10.8097 3.95093 10.8835 3.77324 11.0156 3.59369C11.3426 3.3062 11.7546 3.21041 12.1484 3.43744Z"
                                                        fill="white" />
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="feature-box-right">
                            <div data-w-id="1ae55d48-d228-51e0-17b1-8727d0f037f9" style="opacity:0"
                                class="featuer-box-wrap">
                                <div class="feature-box"><img src="images/rd_2.webp" loading="lazy" sizes="100vw"
                                        srcset="images/rd_2.webp" alt="" class="feature-icon-image" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-w-id="159c9128-3fcd-7856-dc04-543a29b133b3" class="feature-box-wrap">
                        <div class="feature-box-right">
                            <div data-w-id="159c9128-3fcd-7856-dc04-543a29b133c3" style="opacity:0"
                                class="featuer-box-wrap">
                                <div class="feature-box"><img src="images/rd_3.webp" loading="lazy" sizes="100vw"
                                        srcset="images/rd_3.webp" alt="" class="feature-icon-image" /></div>
                            </div>
                        </div>
                        <div class="feature-box-left land-align">
                            <div class="feature-content-box">
                                <div data-w-id="159c9128-3fcd-7856-dc04-543a29b133b6" style="opacity:0"
                                    class="tag-icon-box land-tag-center">
                                    <div class="tag-icon-wrap"><img src="images/icon_8.svg" loading="lazy"
                                            alt="" class="tag-icon" />
                                        <p class="tag-text">DEVELOPMENT</p>
                                    </div>
                                </div>
                                <div class="features-text-button-wrap">
                                    <div data-w-id="159c9128-3fcd-7856-dc04-543a29b133ba" style="opacity:0"
                                        class="feature-typography-wrap">
                                        <h2 class="h2 land-text-center">Smart system for <span
                                                class="span-text">platform growth</span></h2>
                                        <p class="paragraph-large land-text-center"> Our platform leverages smart digital processes to streamline operations,
                                    maintain transparency, and support sustainable growth for all participants.</p>
                                    </div>
                                    <div data-w-id="d794b07d-0312-b61c-1510-8c3492cb293c" style="opacity:0"
                                        class="feature-list-wrap">
                                        <div class="feature-list-box">
                                            <div class="tik-box"><img src="images/icon_9.svg" loading="lazy"
                                                    alt="" class="tik-icon" /></div>
                                            <p class="paragraph-large development-text"> Automated and well-structured workflows</p>
                                        </div>
                                        <div class="feature-list-box">
                                            <div class="tik-box"><img src="images/icon_9.svg" loading="lazy"
                                                    alt="" class="tik-icon" /></div>
                                            <p class="paragraph-large development-text">   Scalable system designed for long-term expansion</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-w-id="922e5f17-7cb4-5af0-6424-cecb2845d4c1" class="feature-box-wrap">
                        <div class="feature-box-left">
                            <div class="feature-content-box">
                                <div data-w-id="922e5f17-7cb4-5af0-6424-cecb2845d4c4" style="opacity:0"
                                    class="tag-icon-box land-tag-center">
                                    <div class="tag-icon-wrap"><img src="images/icon_10.svg" loading="lazy"
                                            alt="" class="tag-icon" />
                                        <p class="tag-text">SECURITY</p>
                                    </div>
                                </div>
                                <div class="features-text-button-wrap">
                                    <div data-w-id="922e5f17-7cb4-5af0-6424-cecb2845d4c8" style="opacity:0"
                                        class="feature-typography-wrap">
                                        <h2 class="h2 land-text-center">Secure & trusted <span
                                                class="span-text">infrastructure</span></h2>
                                        <p class="paragraph-large land-text-center"> Unique World follows strong security practices to protect user data,
                                    transactions, and platform integrity — ensuring a safe and reliable experience.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="feature-box-right">
                            <div class="featuer-box-wrap">
                                <div class="feature-box"><img src="images/rd_4.webp" loading="lazy" sizes="100vw"
                                        srcset="images/rd_4.webp" alt="" class="feature-icon-image" /></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="container">
                <div data-w-id="92d0c528-00cd-f1f3-05e9-42624c4b2b07" class="blockchain-box-layout">
                    <div class="blockchain-content-wrap">
                        <div class="blockchain-box-left tab-hide">
                            <div class="blockchain-image-box blockchain-left">
                                <div class="blockchain-image-wrap"><img src="images/client_1.webp" loading="lazy"
                                        alt="" class="blockchain-image" /><img src="images/client_1.webp"
                                        loading="lazy" alt="" class="blockchain-image" /><img
                                        src="images/client_1.webp" loading="lazy" alt=""
                                        class="blockchain-image" /><img src="images/client_1.webp" loading="lazy"
                                        alt="" class="blockchain-image" /></div>
                                <div class="blockchain-image-wrap"><img src="images/client_1.webp" loading="lazy"
                                        alt="" class="blockchain-image" /><img src="images/client_1.webp"
                                        loading="lazy" alt="" class="blockchain-image" /><img
                                        src="images/client_1.webp" loading="lazy" alt=""
                                        class="blockchain-image" /><img src="images/client_1.webp" loading="lazy"
                                        alt="" class="blockchain-image" /></div>
                                <div class="blockchain-image-wrap"><img src="images/client_1.webp" loading="lazy"
                                        alt="" class="blockchain-image" /><img src="images/client_1.webp"
                                        loading="lazy" alt="" class="blockchain-image" /><img
                                        src="images/client_1.webp" loading="lazy" alt=""
                                        class="blockchain-image" /><img src="images/client_1.webp" loading="lazy"
                                        alt="" class="blockchain-image" /></div>
                            </div>
                            <div class="blockchain-overley"></div>
                        </div>
                        <div class="blockchain-box-wrap">
                            <div data-w-id="92d0c528-00cd-f1f3-05e9-42624c4b2b11" class="blockchain-logo-image-wrap">
                                <img src="images/rd_5.svg" loading="lazy" alt=""
                                    class="blockchain-logo-image" />
                            </div>
                            <div class="blockchain-content-box">
                                <div data-w-id="92d0c528-00cd-f1f3-05e9-42624c4b2b14" class="blockchain-text-wrap">
                                    <h2 class="h2 text-center">  Smart Daily Income & Rewards Powered by<span
                                            class="span-text">Unique World</span></h2>
                                    <p class="paragraph-large center-alling">Unique World is built on a blockchain-enabled digital framework that
    supports structured Daily participation, Daily-based reinvestment growth,
    and performance-driven reward income. Our system ensures transparency,
    automated tracking, and fair distribution across the network.</p>
                                </div>
                                <div data-w-id="92d0c528-00cd-f1f3-05e9-42624c4b2b1b" class="primary-button-wrap">
                                    <a data-w-id="f8770552-0790-d787-5b09-99bfc1386380" href="{{route('login')}}"
                                        class="primary-button w-inline-block">
                                        <p class="button-text">Join Our Community</p>
                                        <div data-w-id="f8770552-0790-d787-5b09-99bfc1386383"
                                            class="button-icon w-embed"><svg width="20" height="20"
                                                viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.1484 3.43744C12.488 3.70963 12.7898 4.03373 13.0972 4.34094C13.1524 4.39597 13.2077 4.451 13.2629 4.50602C13.4118 4.65441 13.5606 4.80294 13.7093 4.9515C13.8024 5.04443 13.8954 5.13734 13.9885 5.23024C14.2801 5.52129 14.5716 5.81242 14.863 6.10366C15.1987 6.43925 15.5348 6.77457 15.871 7.10968C16.1315 7.36934 16.3918 7.62922 16.6519 7.88927C16.807 8.04436 16.9622 8.19935 17.1177 8.35412C17.2637 8.49949 17.4094 8.64514 17.555 8.791C17.6083 8.84441 17.6618 8.89771 17.7154 8.95091C17.7886 9.02365 17.8615 9.09675 17.9343 9.16994C17.9555 9.19079 17.9766 9.21164 17.9984 9.23313C18.2167 9.45428 18.3482 9.67685 18.3691 9.99018C18.3548 10.5869 17.7312 11.0246 17.3386 11.4175C17.2836 11.4728 17.2286 11.528 17.1736 11.5832C17.0252 11.7321 16.8766 11.8809 16.7281 12.0296C16.6351 12.1227 16.5422 12.2157 16.4493 12.3088C16.1583 12.6004 15.8672 12.8919 15.5759 13.1833C15.2403 13.5191 14.905 13.8551 14.5699 14.1913C14.3102 14.4518 14.0504 14.7121 13.7903 14.9722C13.6352 15.1273 13.4802 15.2825 13.3255 15.438C13.1801 15.584 13.0344 15.7298 12.8886 15.8753C12.8352 15.9287 12.7819 15.9821 12.7287 16.0357C12.6559 16.109 12.5828 16.1818 12.5096 16.2546C12.4784 16.2864 12.4784 16.2864 12.4464 16.3187C12.226 16.5364 11.9896 16.6792 11.6747 16.6943C11.451 16.6902 11.273 16.6165 11.0937 16.4843C10.8997 16.2601 10.8063 16.0535 10.8125 15.7574C10.8553 15.2438 11.36 14.8842 11.7018 14.5436C11.7419 14.5035 11.782 14.4635 11.8221 14.4234C11.9296 14.3158 12.0373 14.2084 12.145 14.1009C12.258 13.9882 12.3709 13.8753 12.4837 13.7625C12.697 13.5494 12.9103 13.3364 13.1237 13.1234C13.3668 12.8807 13.6099 12.6379 13.8529 12.395C14.3523 11.896 14.8519 11.3972 15.3515 10.8984C15.3241 10.8983 15.2967 10.8983 15.2685 10.8983C13.6443 10.896 12.0202 10.8931 10.3961 10.8894C10.2011 10.889 10.0061 10.8886 9.81113 10.8881C9.7529 10.888 9.7529 10.888 9.6935 10.8879C9.06486 10.8865 8.43623 10.8855 7.8076 10.8847C7.1626 10.8838 6.51761 10.8826 5.87262 10.8809C5.4746 10.8798 5.07658 10.8791 4.67855 10.8789C4.40565 10.8787 4.13275 10.878 3.85984 10.8771C3.70237 10.8765 3.5449 10.8762 3.38743 10.8763C3.24318 10.8764 3.09894 10.876 2.9547 10.8752C2.87796 10.8749 2.80122 10.8752 2.72448 10.8755C2.38119 10.8727 2.09047 10.8405 1.83588 10.5859C1.67043 10.3467 1.61108 10.1338 1.64056 9.84369C1.69586 9.6229 1.78697 9.42374 1.97931 9.29072C2.18194 9.16948 2.33335 9.13577 2.56606 9.13515C2.61169 9.13494 2.65731 9.13473 2.70431 9.1345C2.75447 9.13447 2.80463 9.13443 2.85631 9.13439C2.9101 9.13421 2.96388 9.13402 3.01767 9.1338C3.16563 9.13327 3.31359 9.13298 3.46154 9.13273C3.62104 9.13242 3.78054 9.13189 3.94004 9.13138C4.21642 9.13053 4.49281 9.12982 4.7692 9.12921C5.16882 9.12832 5.56843 9.12722 5.96805 9.12607C6.61637 9.12421 7.26469 9.12252 7.91301 9.12093C8.54286 9.1194 9.1727 9.11778 9.80255 9.11605C9.84136 9.11594 9.88017 9.11584 9.92016 9.11573C10.1149 9.11519 10.3096 9.11466 10.5043 9.11412C12.12 9.10967 13.7358 9.1055 15.3515 9.10151C15.3293 9.07941 15.3071 9.05732 15.2842 9.03455C14.7437 8.4966 14.2035 7.95831 13.6636 7.41967C13.4025 7.15919 13.1413 6.89882 12.8799 6.63871C12.6519 6.41196 12.4242 6.18501 12.1968 5.95781C12.0764 5.83755 11.9558 5.71739 11.8351 5.59748C11.7213 5.48452 11.6079 5.37129 11.4946 5.25785C11.4531 5.21635 11.4114 5.17495 11.3697 5.13366C10.8258 4.59534 10.8258 4.59534 10.8056 4.17475C10.8097 3.95093 10.8835 3.77324 11.0156 3.59369C11.3426 3.3062 11.7546 3.21041 12.1484 3.43744Z"
                                                    fill="white" />
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="blockchain-box-right tab-hide">
                            <div class="blockchain-box-left tab-hide">
                                <div class="blockchain-image-box">
                                    <div class="blockchain-image-wrap two">
                                        <img src="images/client_2.webp" loading="lazy" alt=""
                                            class="blockchain-image" />
                                        <img src="images/client_2.webp" loading="lazy" alt=""
                                            class="blockchain-image" />
                                        <img src="images/client_2.webp" loading="lazy" alt=""
                                            class="blockchain-image" />
                                        <img src="images/client_2.webp" loading="lazy" alt=""
                                            class="blockchain-image" />
                                    </div>
                                    <div class="blockchain-image-wrap two">
                                        <img src="images/client_2.webp" loading="lazy" alt=""
                                            class="blockchain-image" />
                                        <img src="images/client_2.webp" loading="lazy" alt=""
                                            class="blockchain-image" />
                                        <img src="images/client_2.webp" loading="lazy" alt=""
                                            class="blockchain-image" />
                                        <img src="images/client_2.webp" loading="lazy" alt=""
                                            class="blockchain-image" />
                                    </div>
                                    <div class="blockchain-image-wrap two">
                                        <img src="images/client_2.webp" loading="lazy" alt=""
                                            class="blockchain-image" />
                                        <img src="images/client_2.webp" loading="lazy" alt=""
                                            class="blockchain-image" />
                                        <img src="images/client_2.webp" loading="lazy" alt=""
                                            class="blockchain-image" />
                                        <img src="images/client_2.webp" loading="lazy" alt=""
                                            class="blockchain-image" />
                                    </div>
                                </div>
                                <div class="blockchain-overley"></div>
                            </div>
                            <div class="blockchain-overley tab-hide"></div>
                        </div>
                    </div>
                    <div class="gradient-box"></div>
                </div>
            </div>
        </section>

        <!-- PLANS SECTION START -->
        <!-- PLANS SECTION START -->
        <section id="plans" class="section">
            <div class="container">
                <div class="plans-layout">
                    <div class="plans-header">
                        <div data-w-id="plans-tag" style="opacity:0" class="tag-icon-box">
                            <div class="tag-icon-wrap">
                                <img src="https://uniqueworld.live/images/icon_13.svg" loading="lazy" alt=""
                                    class="tag-icon" />
                                <p class="tag-text">INVESTMENT PLANS</p>
                            </div>
                        </div>
                        <h2 data-w-id="plans-title" style="opacity:0" class="h2 text-center">
                            Choose Your <span class="span-text">Investment Plan</span>
                        </h2>
                        <p data-w-id="plans-desc" style="opacity:0" class="paragraph-large center-alling">
                            Select the perfect plan that matches your investment goals and start earning daily returns
                        </p>
                    </div>

                    <div data-w-id="plans-content" style="opacity:0" class="plans-content-wrap">

                        <!-- Plan 1: Ocean Funds -->
                        <div class="investment-packages-section">
                            <div class="section-title">
                                <h3 class="h3">Unique World Funds <span class="span-text">Plan</span></h3>
                                <p class="paragraph-large">Starter Investment Package</p>
                            </div>

                            <div class="packages-list">
                                <div class="package-item">
                                    <div class="package-amount">Minimum Deposit</div>
                                    <div class="package-details">
                                        <span class="package-roi">$100</span>
                                    </div>
                                </div>

                                <div class="package-item">
                                    <div class="package-amount">Maximum Deposit</div>
                                    <div class="package-details">
                                        <span class="package-roi">Unlimited</span>
                                    </div>
                                </div>

                                <div class="package-item">
                                    <div class="package-amount">Daily Profit</div>
                                    <div class="package-details">
                                        <span class="package-roi">0.5%</span>
                                    </div>
                                </div>

                                

                                <div class="package-item">
                                    <div class="package-amount">Minimum Withdraw</div>
                                    <div class="package-details">
                                        <span class="package-roi">$5</span>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="container">
                <div class="footer-layout">
                    <div class="footer-box-wrap">
                        <div class="footer-top-wrap">
                            <div class="footer-content-wrap">
                                <div class="footer-link-left-wrap">
                                    <div class="footer-typography-wrap">
                                        <div class="footer-logo-link-wrap"><a href="{{asset('')}}" aria-current="page"
                                                class="logo-box w-inline-block w--current"><img style="width:auto;height:80px"
                                                    src="{{asset('')}}assets\images\unique-world.png" loading="lazy"
                                                    data-w-id="6e0a4b74-bd89-a600-8f27-bd02127a9302" alt=""
                                                    class="footer-logo-image" /></a></div>
                                        <div class="typography-text-left">
                                            <div data-w-id="6e0a4b74-bd89-a600-8f27-bd02127a9304"
                                                class="paragraph-large tab-text-center">Subscribe now to receive the
                                                latest blockchain news, product updates, and insights directly to your
                                                inbox.</div>
                                        </div>
                                    </div>
                                    <div data-w-id="6e0a4b74-bd89-a600-8f27-bd02127a9310"
                                        class="blockchain-logo-image">
                                        <a href="https://t.me/vergeflow" class="logo-input-fild w-inline-block"
                                            target="_blank">
                                            <img src="telegram.png" loading="lazy" alt=""
                                                class="linked-in-teg" />
                                        </a>
                                    </div>
                                </div>
                                <div class="footer-link-right-wrap">
                                    <div data-w-id="6e0a4b74-bd89-a600-8f27-bd02127a9318"
                                        class="footer-teg-left-wrap">
                                        <div class="footer-teg-text"><a href="{{asset('')}}" aria-current="page"
                                                class="footer-menu w--current">Home</a>
                                            <a href="{{asset('')}}#plans" class="footer-menu">Plans</a>
                                            <a href="{{route('contact-us')}}" class="footer-menu">Contact Us</a>
                                        </div>
                                    </div>
                                    <div data-w-id="6e0a4b74-bd89-a600-8f27-bd02127a9326"
                                        class="footer-teg-right-wrap">
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
                        Rights Reserved | Unique World Funds
                    </p>
                </div>
            </div>
        </section>
    </div>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
        integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
        data-cf-beacon='{"version":"2024.11.0","token":"1e9d8afe95c748ecbe8fa121b1ca3021","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}'
        crossorigin="anonymous"></script>
</body>

</html>
<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=687b1e181baaf79fcff18cdc"
    type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous">
</script>
<script src="https://cdn.prod.website-files.com/687b1e181baaf79fcff18cdc/js/webflow.schunk.9b79167770a1f7a0.js"
    type="text/javascript"></script>
<script src="https://cdn.prod.website-files.com/687b1e181baaf79fcff18cdc/js/webflow.schunk.fdd89d1d7616e6e2.js"
    type="text/javascript"></script>
<script src="https://cdn.prod.website-files.com/687b1e181baaf79fcff18cdc/js/webflow.9634d32b.8b5fbd3b109c466a.js"
    type="text/javascript"></script>
