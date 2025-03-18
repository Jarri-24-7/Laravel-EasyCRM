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
    </style>

    <div class="section-full welcome-section-outer">
        <div class="welcome-section-top bg-white p-tb80">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-md-12 my-5">
                        <div class="img-colarge-new">
                            <div class="colarge-1-new"><img src="https://strongcapitals.com/Theme/images/colarge/s1.png"
                                    alt="About Us - Strong Capitals LTD" class="slide-righ"></div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12 my-5">
                        <div class="welcom-to-section">
                            <!-- TITLE START-->
                            <div class="left wt-small-separator-outer">
                                <div class="wt-small-separator site-text-primary">
                                    <div class="sep-leaf-left"></div>
                                    <div>Strong Capitals </div>
                                    <div class="sep-leaf-right"></div>
                                </div>
                            </div>
                            <div class="row my-4">
                                <h3>Our Journey</h3>
                                <p>
                                    We aim to meet the ever-changing customer needs with the best possible service in
                                    the industry.
                                    We are aware of the great responsibility of being your trade friend and we work hard
                                    to meet your expectations.
                                </p>

                                <p>It is our basic principle to provide the best conditions for you together with
                                    excellent customer service.</p>
                                <p>
                                    Our entire business model is built around you: the customer.
                                    We measure our success by how satisfied you are with your trading experience with
                                    Strong Capitals.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row my-4">
                        <h3>Our Goal</h3>
                        <p>
                            We aim to meet the ever-changing customer needs with the best possible service in the
                            industry.

                            We are aware of the great responsibility of being
                            your trade friend and we work hard to meet your expectations.
                            It is our basic principle to provide the best
                            conditions for you together with excellent customer service.
                            Our entire business model is built around you: the
                            customer.

                            We measure our success by how satisfied you are with your trading experience with Strong
                            Capitals.
                        </p>
                    </div>
                    <div class="row my-4">
                        <h3>Our Strengths</h3>
                        <p>
                            We are committed to offering you the best trading conditions for more than 500 products
                            in the world's best financial markets.
                            Our lightning-fast trading platforms have accurately performed over 300 million customer
                            transactions so far within milliseconds.
                        </p>
                        <p>
                            We offer different accounts, tools and other investment options to meet the needs of
                            every investor.
                            Our expert customer representatives are available 24 hours and 5 days in 5 languages.
                        </p>

                        <p>
                            Fast execution, competitive spreads and excellent support are the golden rules we
                            follow.
                        </p>
                    </div>
                    <div class="row my-4">
                        <h3>Benefits of investing in Strong Capitals</h3>
                        <p>
                            Strong Capitals was established to help clients do
                            business and crowned it with an internationally recognized Certificate for which their
                            efforts are recognized.
                        </p>
                        <ul class="site-list-style-one">
                            <li>Accounts suitable for all kinds of investors</li>
                            <li>Low trade costs and super fast trading app -
                                check our performance scorecard</li>
                            <li>World's most popular trading platform - MT5
                                mobile, desktop</li>
                            <li>Free Knowledgebase courses and guides to help you
                                get started or improve your trading skills</li>
                        </ul>

                        <div class="welcom-to-section-bottom d-flex justify-content-between">
                            <div class="welcom-btn-position"><a href="#" class="btn sp_theme_btn btn-sm">Open
                                    Account Now</a></div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <div class="section-full bg-white">
        <div class="container">
            <div class="section-content text-center">
                <h2>
                    Liquidity Providers
                </h2>
                <!-- TESTIMONIAL 4 START ON BACKGROUND -->
                <div class="section-content">
                    <div class="section-content owl-btn-vertical-center">
                        <div class="owl-carousel home-client-carousel-2">
                            
                                    <div class="owl-item" style="width: 255px; margin-right: 30px;">
                                        <div class="item">
                                            <div class="ow-client-logo">
                                                <div class="client-logo client-logo-media">
                                                    <a href="javascript:void(0);"><img
                                                            src="https://strongcapitals.com/Theme/images/bank-of-usd-300x52-1.png"
                                                            alt="Bank Of America"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 255px; margin-right: 30px;">
                                        <div class="item">
                                            <div class="ow-client-logo">
                                                <div class="client-logo client-logo-media">
                                                    <a href="javascript:void(0);"><img
                                                            src="https://strongcapitals.com/Theme/images/deutsche-1024x159-1.png"
                                                            alt="Deutsche Bank"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 255px; margin-right: 30px;">
                                        <div class="item">
                                            <div class="ow-client-logo">
                                                <div class="client-logo client-logo-media">
                                                    <a href="javascript:void(0);"><img
                                                            src="https://strongcapitals.com/Theme/images/Logo-BNP-Paribas-2016.png"
                                                            alt="BNP Paribas"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 255px; margin-right: 30px;">
                                        <div class="item">
                                            <div class="ow-client-logo">
                                                <div class="client-logo client-logo-media">
                                                    <a href="javascript:void(0);"><img
                                                            src="https://strongcapitals.com/Theme/images/bank-of-usd-300x52-1.png"
                                                            alt="Bank Of America"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 255px; margin-right: 30px;">
                                        <div class="item">
                                            <div class="ow-client-logo">
                                                <div class="client-logo client-logo-media">
                                                    <a href="javascript:void(0);"><img
                                                            src="https://strongcapitals.com/Theme/images/deutsche-1024x159-1.png"
                                                            alt="Deutsche Bank"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 255px; margin-right: 30px;">
                                        <div class="item">
                                            <div class="ow-client-logo">
                                                <div class="client-logo client-logo-media">
                                                    <a href="javascript:void(0);"><img
                                                            src="https://strongcapitals.com/Theme/images/Logo-BNP-Paribas-2016.png"
                                                            alt="BNP Paribas"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 255px; margin-right: 30px;">
                                        <div class="item">
                                            <div class="ow-client-logo">
                                                <div class="client-logo client-logo-media">
                                                    <a href="javascript:void(0);"><img
                                                            src="https://strongcapitals.com/Theme/images/bank-of-usd-300x52-1.png"
                                                            alt="Bank Of America"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 255px; margin-right: 30px;">
                                        <div class="item">
                                            <div class="ow-client-logo">
                                                <div class="client-logo client-logo-media">
                                                    <a href="javascript:void(0);"><img
                                                            src="https://strongcapitals.com/Theme/images/deutsche-1024x159-1.png"
                                                            alt="Deutsche Bank"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 255px; margin-right: 30px;">
                                        <div class="item">
                                            <div class="ow-client-logo">
                                                <div class="client-logo client-logo-media">
                                                    <a href="javascript:void(0);"><img
                                                            src="https://strongcapitals.com/Theme/images/Logo-BNP-Paribas-2016.png"
                                                            alt="BNP Paribas"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 255px; margin-right: 30px;">
                                        <div class="item">
                                            <div class="ow-client-logo">
                                                <div class="client-logo client-logo-media">
                                                    <a href="javascript:void(0);"><img
                                                            src="https://strongcapitals.com/Theme/images/bank-of-usd-300x52-1.png"
                                                            alt="Bank Of America"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
