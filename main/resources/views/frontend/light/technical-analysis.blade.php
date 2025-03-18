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

    </style>

    <section class="layout_padding light_bg2 my-5">
        <div style="width:100%">
            <!-- TradingView Widget BEGIN -->
            <div class="">
                <div id="tradingview_4aae0"><div id="tradingview_69a2e-wrapper" style="position: relative; box-sizing: content-box; font-family: -apple-system, BlinkMacSystemFont, &quot;Trebuchet MS&quot;, Roboto, Ubuntu, sans-serif; margin: 0px auto !important; padding: 0px !important; width: 980px; height: calc(668px);"><iframe title="advanced chart TradingView widget" lang="en" id="tradingview_69a2e" frameborder="0" allowtransparency="true" scrolling="no" allowfullscreen="true" src="https://s.tradingview.com/widgetembed/?hideideas=1&amp;overrides=%7B%7D&amp;enabled_features=%5B%5D&amp;disabled_features=%5B%5D&amp;locale=en#%7B%22symbol%22%3A%22USDTRY%22%2C%22frameElementId%22%3A%22tradingview_69a2e%22%2C%22interval%22%3A%22D%22%2C%22allow_symbol_change%22%3A%221%22%2C%22save_image%22%3A%221%22%2C%22studies%22%3A%22%5B%5D%22%2C%22theme%22%3A%22light%22%2C%22style%22%3A%221%22%2C%22timezone%22%3A%22Etc%2FUTC%22%2C%22studies_overrides%22%3A%22%7B%7D%22%2C%22utm_source%22%3A%22strongcapitals.com%22%2C%22utm_medium%22%3A%22widget_new%22%2C%22utm_campaign%22%3A%22chart%22%2C%22utm_term%22%3A%22USDTRY%22%2C%22page-uri%22%3A%22strongcapitals.com%2Fen%2FTools%2FTechnicalAnalysis%22%7D" style="width: 100%; height: 100%; margin: 0px !important; padding: 0px !important;"></iframe></div></div>
                <div class="tradingview-widget-copyright" style="width: 100%;">TradingView'den <a href="https://tr.tradingview.com/symbols/NASDAQ-AAPL/?utm_source=strongcapitals.com&amp;utm_medium=widget_new&amp;utm_campaign=chart&amp;utm_term=USDTRY" rel="noopener" target="_blank"><span class="blue-text">AAPL Grafiği</span></a></div>
                <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                <script type="text/javascript">
                    new TradingView.widget(
                        {
                            "width": 980,
                            "height": 700,
                            "symbol": "USDTRY",
                            "interval": "D",
                            "timezone": "Etc/UTC",
                            "theme": "light",
                            "style": "1",
                            "locale": "en",
                            "toolbar_bg": "#f1f3f6",
                            "enable_publishing": false,
                            "allow_symbol_change": true,
                            "container_id": "tradingview_4aae0"
                        }
                    );</script>
            </div>
            <!-- TradingView Widget END -->

        </div>
    </section>
@endsection
