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
        <div>
            <div class="container">
                <p>Strong Capitals keeps its level best to make sure that the privacy, confidentiality and security of its
                    customers both during the interaction relation and afterwards, at the highest point which can be
                    provided by the company.</p>
                <ol>
                    <li>When a customer signs up Strong Capitals , he approves to give consent for sharing some special
                        information which is required to confirm the customers identity, investment and security of their
                        trade accounts with the company. These information is collected due to our strict verification
                        procedures for inhibitation of international money laundering hereby establishing the security of
                        our customers trade facilities.</li>
                    <li>Our customers commit to give correct and up to date information about their identifications. Besides
                        this, they declare for sure that they signed up with their real names, invest for themselves and not
                        being in a search for any kind of behaviours related to cheating and impersonation for any reason.
                    </li>
                    <li>The data collection of Strong Capitals ; includes the data which is declared by the customers upon
                        request in addition to replacing cookies which collects data about the interaction behaviours of the
                        customers with the website. These customer data collection tools are used for the maintenance of the
                        customer security and shared only with the staff who is responsible for verification and the
                        security and privacy maintenance within the company.</li>
                    <li>Strong Capitals will never expose the private or confidential information of any type to third
                        parties unless it is necessary by law or for verification analysis for the protection of the
                        accounts and security of the personal information without written allowance of our customers or
                        former customers.</li>
                    <li>Customers accept and allow the usage of the whole information they provide or a part of it for
                        transactions by the customer accounts, company and with the company in the name of the company by
                        signing in the Strong Capitals and on the occasion of the voluntary interaction with Strong Capitals
                        ’s products and services. All the interactions of the customers with the company will be recorded by
                        the company and used if there will be any dissidence occurs between the company and the customer.
                    </li>
                    <li>Strong Capitals does its best to apply the data protection procedures in order to provide the
                        privacy of the customers. Strong Capitals assures that it updates the data protection policy to
                        maintain the security protection of confidential information of the customers.</li>
                    <li>Strong Capitals sometimes may get in touch with customers in order to offer information about Strong
                        Capitals forex or cfs or financial market investments via phone or e-mail. In addition to this, the
                        company may look forward to get in touch with the customers time to time in order to offer unique
                        information for promotions via phone or e-mail. Customers approve this type of communication when
                        they register as they approve the terms of use upon registry as well. A customer has a right to
                        simply call or e-mail to Strong Capitals to request not getting in touched by the company.</li>
                </ol>
            </div>
        </div>

    </section>
@endsection
