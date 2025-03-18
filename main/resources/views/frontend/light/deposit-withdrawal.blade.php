@extends(Config::theme() . 'layout.master')

@section('content')
    <style>
        .img-colarge-new {
            position: relative;
            height: 100%;
            margin-bottom: 80px;
        }

        .colarge-1-new {
            position: relative;
            margin: 40px 30px 0px 40px;
            z-index: 1;
        }

        .colarge-1-new:before {
            position: absolute;
            border: 10px solid #ea7e0e;
            content: '';
            width: 60%;
            z-index: -1;
            left: -40px;
            top: -40px;
            bottom: -40px;
        }

        .welcom-to-section {
            padding-right: 0px;
        }

        .left.wt-small-separator-outer {
            text-align: left;
        }

        h1 a:hover,
        h2 a:hover,
        h3 a:hover,
        h4 a:hover,
        h5 a:hover,
        h6 a:hover,
        .header-nav .nav>li:hover>a,
        .header-nav .nav>li .sub-menu li a:hover,
        .header-nav .nav>li .sub-menu li:hover>a,
        header-nav .nav>li .mega-menu>li ul a:hover,
        .header-nav .nav>li.active>a,
        .header-nav .nav>li.current-menu-item>a,
        .header-nav .nav li.has-child.nav-active>a,
        ol.comment-list li.comment .reply a,
        .masonry-filter>li.active a,
        .masonry-filter>li a:hover,
        .masonry-filter>li a:active,
        .masonry-filter>li a:focus,
        .nav-dark.header-nav .nav>li .sub-menu li a:hover,
        .site-button-link::after,
        .our-team-two ul li a:hover,
        .site-text-primary,
        .footer-dark .footer-bottom .copyrights-nav li a,
        .footer-dark .footer-bottom .copyrights-nav li::after,
        .footer-dark .footer-top h1,
        .footer-dark .footer-top h2,
        .footer-dark .footer-top h3,
        .footer-dark .footer-top h4,
        .footer-dark .footer-top h5,
        .footer-dark .footer-top h6,
        .footer-dark .footer-top h1 a,
        .footer-dark .footer-top h2 a,
        .footer-dark .footer-top h3 a,
        .footer-dark .footer-top h4 a,
        .footer-dark .footer-top h5 a,
        .footer-dark .footer-top h6 a,
        .footer-dark .widget_address li i,
        .site-footer .widget_services ul li a:hover,
        .wt-team-1 .team-social-center ul li a:hover,
        .footer-dark .footer-top a:active,
        .footer-dark .footer-top a:focus,
        .footer-dark .footer-top a:hover,
        .header-style-2 .header-nav .nav>li>a:hover,
        blockquote .fa-quote-left,
        .testimonial-2 .testimonial-text .fa-quote-left,
        .wt-breadcrumb li:last-child,
        .video3-section-blockquote .fa-quote-left,
        .wt-product-box .price ins,
        .widget .wt-post-meta li,
        .widget_archives ul li a:hover,
        .widget_services ul li a:hover,
        .widget_tag_cloud a:hover,
        .since-year2 strong,
        .project-2-block .wt-title a:hover,
        .project-stamp .project-stamp-list li a i,
        .date-style-2 .wt-post-meta ul li.post-date,
        .date-style-2 .wt-post-meta ul li.post-comment,
        .date-style-2 .wt-post-readmore a,
        .video-section-blockquote2 .fa-quote-left,
        .testimonial-1 .testimonial-text .fa-quote-left,
        .footer-dark.footer-style2 .footer-bottom .copyrights-nav li a:hover,
        .header-style-3 .header-nav .nav>li>a:hover,
        .wt-team-1 .team-name a:hover,
        .header-style-4 .header-nav .nav>li>a:hover,
        .box-style1 .wt-icon-number span {
            color: #ea7e0e;
        }

        .wt-small-separator {
            font-family: 'Teko', sans-serif;
            font-size: 34px;
            line-height: 34px;
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
        }

        .site-text-primary {
            color: #ea7e0e;
        }

        .left .wt-small-separator div.sep-leaf-left {
            position: relative;
            margin-right: 50px;
            display: none;
        }

        .wt-small-separator div {
            display: inline-block;
        }




        h1 a:hover,
        h2 a:hover,
        h3 a:hover,
        h4 a:hover,
        h5 a:hover,
        h6 a:hover,
        .header-nav .nav>li:hover>a,
        .header-nav .nav>li .sub-menu li a:hover,
        .header-nav .nav>li .sub-menu li:hover>a,
        header-nav .nav>li .mega-menu>li ul a:hover,
        .header-nav .nav>li.active>a,
        .header-nav .nav>li.current-menu-item>a,
        .header-nav .nav li.has-child.nav-active>a,
        ol.comment-list li.comment .reply a,
        .masonry-filter>li.active a,
        .masonry-filter>li a:hover,
        .masonry-filter>li a:active,
        .masonry-filter>li a:focus,
        .nav-dark.header-nav .nav>li .sub-menu li a:hover,
        .site-button-link::after,
        .our-team-two ul li a:hover,
        .site-text-primary,
        .footer-dark .footer-bottom .copyrights-nav li a,
        .footer-dark .footer-bottom .copyrights-nav li::after,
        .footer-dark .footer-top h1,
        .footer-dark .footer-top h2,
        .footer-dark .footer-top h3,
        .footer-dark .footer-top h4,
        .footer-dark .footer-top h5,
        .footer-dark .footer-top h6,
        .footer-dark .footer-top h1 a,
        .footer-dark .footer-top h2 a,
        .footer-dark .footer-top h3 a,
        .footer-dark .footer-top h4 a,
        .footer-dark .footer-top h5 a,
        .footer-dark .footer-top h6 a,
        .footer-dark .widget_address li i,
        .site-footer .widget_services ul li a:hover,
        .wt-team-1 .team-social-center ul li a:hover,
        .footer-dark .footer-top a:active,
        .footer-dark .footer-top a:focus,
        .footer-dark .footer-top a:hover,
        .header-style-2 .header-nav .nav>li>a:hover,
        blockquote .fa-quote-left,
        .testimonial-2 .testimonial-text .fa-quote-left,
        .wt-breadcrumb li:last-child,
        .video3-section-blockquote .fa-quote-left,
        .wt-product-box .price ins,
        .widget .wt-post-meta li,
        .widget_archives ul li a:hover,
        .widget_services ul li a:hover,
        .widget_tag_cloud a:hover,
        .since-year2 strong,
        .project-2-block .wt-title a:hover,
        .project-stamp .project-stamp-list li a i,
        .date-style-2 .wt-post-meta ul li.post-date,
        .date-style-2 .wt-post-meta ul li.post-comment,
        .date-style-2 .wt-post-readmore a,
        .video-section-blockquote2 .fa-quote-left,
        .testimonial-1 .testimonial-text .fa-quote-left,
        .footer-dark.footer-style2 .footer-bottom .copyrights-nav li a:hover,
        .header-style-3 .header-nav .nav>li>a:hover,
        .wt-team-1 .team-name a:hover,
        .header-style-4 .header-nav .nav>li>a:hover,
        .box-style1 .wt-icon-number span {
            color: #ea7e0e;
        }

        .wt-small-separator {
            font-size: 20px;
            line-height: 14px;
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
        }

        .left .wt-small-separator div.sep-leaf-right:before,
        .left .wt-small-separator div.sep-leaf-left:before {
            position: absolute;
            content: '';
            background-color: #ea7e0e;
            width: 40px;
            height: 3px;
            bottom: 0px;
        }

        .site-list-style-one li {
            font-size: 14px;
            position: relative;
            padding-left: 30px;
            font-weight: 500;
            line-height: 20px;
        }

        .site-list-style-one {
            list-style: none;
            margin-bottom: 30px;
        }

        .site-list-style-one li:after {
            position: absolute;
            content: '';
            left: 0px;
            top: 7px;
            width: 20px;
            height: 2px;
            background-color: #ff5e15;
        }

        .client-logo {
            display: table-cell;
            text-align: center;
            vertical-align: middle;
            border: 1px solid #ececec;
            padding: 20px 20px;
        }

        .ow-client-logo {
            display: table;
            width: 100%;
        }

        .owl-carousel .owl-item img {
            transform-style: inherit;
        }

        .owl-carousel .ow-client-logo img {
            max-height: 100%;
            width: auto;
            display: inline-block;
        }

        .client-logo-media img {
            max-width: 100% !important;
            margin: 0px auto !important;
            width: auto !important;
        }

        strong {
            font-weight: 800;
            margin: 20px 0 !important;
        }

        p {
            margin: 20px 0;
        }

        ol {
            list-style-type: decimal;
        }

        .slide-right {
            -webkit-animation: slide-right 1.5s ease-in-out infinite alternate both;
            animation: slide-right 1.5s ease-in-out infinite alternate both;
        }

        .colarge-1-new {
            position: relative;
            margin: 40px 30px 0px 40px;
            z-index: 1;
        }

        @keyframes slide-right {
            0% {
                -webkit-transform: translateX(0);
                transform: translateX(0);
            }

            100% {
                -webkit-transform: translateX(-20px);
                transform: translateX(-20px);
            }
        }
    </style>

    <section class="layout_padding light_bg2 my-5">
        <div class="welcome-section-top bg-white p-tb80">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-md-12">
                        <div class="img-colarge-new">
                            <div class="colarge-1-new"><img src="https://strongcapitals.com/Theme/images/register-tfx.jpeg"
                                    alt="FX Kayıt Ol" class="slide-right"></div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="welcom-to-section">
                            <!-- TITLE START-->
                            <div class="left wt-small-separator-outer">
                                <div class="wt-small-separator site-text-primary">
                                    <div class="sep-leaf-left"></div>
                                    <div>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Strong Capitals </font>
                                        </font>
                                    </div>
                                    <div class="sep-leaf-right"></div>
                                </div>
                            </div>
                            <h2>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Opening an Account with Strong Capitals

                                    </font>
                                </font>
                            </h2>
                            <!-- TITLE END-->
                            <p>
                                <font style="vertical-align: inherit;">
                                    Opening a free account with Strong Capitals takes just a few minutes. There's no need to
                                    call or speak with anyone—simply click here to go to the new account page. Fill out the
                                    form on that page with your details and click the 'Sign Up' button. Afterward, your
                                    account will be created, and you will see something similar to this. Your account
                                    details will be displayed here, but your account is still empty! To deposit funds into
                                    your account, click the "Deposit" option. If you'd like one of our consultants to assist
                                    you with this process for free, click the button below.

                                </font>
                            </p>


                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="img-colarge-new">
                            <div class="colarge-1-new"><img
                                    src="https://strongcapitals.com/Theme/images/tfx-markets-para-cekme-havale.png"
                                    alt="Para Çekme" class="slide-right"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="welcom-to-section">
                            <!-- TITLE START-->

                            <h2>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        Bank Transfer for Deposits and Withdrawals
                                    </font>
                                </font>
                            </h2>
                            <!-- TITLE END-->
                            <p>
                                <font style="vertical-align: inherit;">
                                    You can deposit funds into your account using EFT/SWIFT bank transfers within 10 minutes. Our customer service representatives, in collaboration with our commercial partners, can process your requests quickly and easily.
                                    If you wish to withdraw funds using the same method, your money will be transferred to your bank account on the same day.
                                    To contact one of our customer service representatives, click the "Call us today" button to connect with our free hotline.
                                    To ensure you have the most up-to-date bank account information, please email us at info@strongcapitals.com or click the Live Chat button in the lower-right corner of your screen.
                                </font>
                            </p>


                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="img-colarge-new">
                            <div class="colarge-1-new"><img
                                    src="https://strongcapitals.com/Theme/images/creditcards-payment.jpg" alt="Ödeme"
                                    class="slide-right"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="welcom-to-section">
                            <!-- TITLE START-->

                            <h2>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Funding via Credit Card
                                    </font>
                                </font>
                            </h2>
                            <!-- TITLE END-->
                            <p>
                                <font style="vertical-align: inherit;">
                                    We can deposit funds into your account in just a few minutes through credit card transactions!
                                    Our customer service representatives are available to assist you between 9:00 AM and 5:00 PM.
                                    With 3D Secure credit card transactions, you will receive a link or code via SMS. By opening this link or entering the code sent to you, you can proceed with the credit card transaction.
                                    Once the payment is made and our customer service representative records it, Strong Capitals will transfer the money to your trading account. You will then see it in your account balance.                                    
                                </font>
                            </p>


                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="img-colarge-new">
                            <div class="colarge-1-new"><img src="https://strongcapitals.com/Theme/images/cryptocurrency.jpg"
                                    alt="Kripto Para Yatırma ve Para Çekme" class="slide-right"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="welcom-to-section">
                            <!-- TITLE START-->

                            <h2>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Depositing and Withdrawing Cryptocurrency
                                    </font>
                                </font>
                            </h2>
                            <!-- TITLE END-->
                            <p>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        Strong Capitals also offers the option to transfer funds via digital currencies (cryptocurrencies).
                                        After logging into your account, you will see the "My Wallet" button on the left panel. Clicking the "Deposit" button underneath will take you to the page where you can find the latest cryptocurrency wallet addresses.
                                        Withdrawal requests will also be processed on the same day. You can deposit Bitcoin, Ethereum, Litecoin, and Ripple, among other cryptocurrencies, into your account. If you wish to deposit a different cryptocurrency into your trading account, please contact one of our customer service representatives.
                                    </font>
                                </font><br>
                            </p>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
