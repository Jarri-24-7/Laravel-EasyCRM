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
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs">
                    <div class="full">
                        <div class="heading_main">
                            <div class="kurallar">
                                <h3 style=" color: #f6213b;">
                                    What is Crypto Money?
    
                                </h3>
                                <p>
                                    Crypto money is a fully digital, encrypted, virtual currency that can be used in exchange transactions. For some, it is the currency of the future.
    
                                </p>
    
                                <p>
                                    Today, cryptocurrencies are a phenomenon that has been heard by many, and has attracted a lot of attention from heads of state to giant companies. Cryptography is used to verify and securely perform clearing transactions. It does not have any physical counterpart.
                                </p>
    
                                <p>
                                    Originally, the money spent and transferred with debit cards and credit cards are also virtual currencies, because only the system data changes as a result of these transactions. Crypto coins have the same principle of operation. However, there is a system that is not managed by any authority or government, that is, decentralized, which makes the system more secure.
    
                                </p>
                                <h3 style=" color: #f6213b;">
                                    What is cryptology?
    
    
                                </h3>
                                <p>
                                    Cryptology is a science of encryption. It is the encryption of data according to a system. Crypto coins are transferred through the creation and decryption of passwords on the medium. Algorithms such as hash functions are used.
                                </p>
    
                                <h3 style=" color: #f6213b;">
                                    History of Crypto Coins
    
    
    
                                </h3>
                                <p>
                                    Many attempts have been made to create a digital currency since the 90s, the bouncing age of technology. Systems such as Flooz, Beenz and DigiCash were developed, but these attempts failed due to fraud, financial difficulties, and internal disputes. All these studies developed the idea of &ZeroWidthSpace;&ZeroWidthSpace;a reliable, third-hand approach.
                                </p>
                                <p>
                                    Bitcoin, the first crypto currency, was developed by the person or persons who came up with the code name Satoshi Nakamoto in early 2009. Although it is said to have been developed by Satoshi Nakamato, it was shared as open source software by an unknown person (s). This network runs on a platform with a similar concept to end-to-end encrypted file sharing platforms.
    
    
                                </p>
    
                                <h3 style=" color: #f6213b;">
                                    Security of cryptocurrencies
    
    
                                </h3>
                                <p>
                                    One of the most important problems with payment systems is the possibility of spending the same money twice. The traditional method to prevent this is to put in a central broker (banks) that keeps track of the transactions made. However, this method means that an authority that can control all the Strong Capitals intervenes. This reduces reliability.
    
    
                                </p>
                                <p>
                                    However, in a decentralized, in other words, distributed network, such as Bitcoin, every part of the system must give approval for the transaction to take place. These transactions are done through the blockchain, so every transaction made can be seen by everyone.
    
    
                                </p>
                                <p>
                                    All transfer transactions are made with the wallet addresses of the sender and receiver and the amount to be sent. The exchange or shipment transaction must be verified by the sender and then confirmed by the system. Verification can only be done by miners by solving a cryptographic puzzle. Once a transaction is approved, it cannot be reversed. The biggest risks for cryptocurrencies are the possibility of hacking and attack.
    
    
                                </p>
    
                                <h3 style=" color: #f6213b;">
                                    How is crypto money produced? What is crypto money mining?
    
    
                                </h3>
                                <p>
                                    The production of crypto coins is carried out over a distributed system like themselves. So it is user based. Cryptocurrencies have a production limit, so as the amount of cryptocurrencies produced increases, the transactions that need to be resolved to produce cryptocurrencies become more difficult.
    
    
                                </p>
                                <p>
                                    The production process is through mining, even if there is no physical mining, operations based on solving mathematical problems are performed. In other words, if you have processor power and internet connection, you can undertake the mining task without being assigned by someone.
    
    
                                </p>
                                <h3 style=" color: #f6213b;">
                                    Is crypto money legal?
    
    
                                </h3>
                                <p>
                                    The legality of cryptocurrencies varies from country to country. While the legality of some is still uncertain or variable, some countries give explicit permission to use and trade. Some countries have banned or restricted the use of crypto money.
    
    
                                </p>
                                <p>
                                    "Is Bitcoin legal?" Such questions are asked by many people. Currently the Republic of Turkey is not optimized laws or restrictions related to Bitcoin use by the government, possession of so Bitcoin or other crypto money in your wallet, you will not be punished due to receive from or sell is not possible.
    
    
                                </p>
                                <h3 style=" color: #f6213b;">
                                    Is mining legal?
    
    
                                </h3>
                                <p>
                                    Producing bitcoin or cryptocurrency, in other words mining, is not a crime. There is no illegal situation.
    
    
    
                                </p>
                                <h3 style=" color: #f6213b;">
                                    Can your earnings from cryptocurrency be taxed?
    
                                </h3>
                                <p>
                                    If a regular deposit into your account is detected, tax may be charged on your earnings. If your earning is questioned by the Ministry of Strong Capitals, you can indicate that you have earned this income from cryptocurrency exchange or mining, and if necessary, you can verify these transactions using your account statements.
    
    
                                </p>
                                <h3 style=" color: #f6213b;">
                                    What are the advantages of cryptocurrencies?
    
                                </h3>
    
    
                                <p>
                                    Since it is not affiliated with any central bank, it is not affected by the economic conditions of the countries.
    
                                </p>
                                <p>
                                    It is not possible to freeze or seize the account.
    
                                </p>
    
                            </div>
                        </div>
                    </div>
                </div>
    
            </div>
        </div>

    </section>
@endsection
