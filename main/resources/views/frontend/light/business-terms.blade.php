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

        p strong {
    font-weight: 800;
    margin: 20px 0 !important;
}

p{
    margin: 20px 0;
}
    </style>

    <section class="layout_padding light_bg2 my-5">
        <div >
            <div class="container">
                <p>An Agreement entered into today:</p>
                <p>1/7/2020</p>
                <p>PARTIES</p>
                <p>Between, of the one part:</p>
                <p>the “Client”;</p>
                <p>And, of the other part:</p>
                <p>Strong Capitals, hereinafter referred to as the “Company”;</p>
                <p><strong>NOW IT IS HEREBY AGREED AS FOLLOWS:</strong></p>
                <p>DEFINITIONS</p>
                <p>‘Agreement’ means the Terms of Business, each Contract and any document amending and/or expressed to be supplemental to any or all thereof will together constitute a single agreement between the Client and CCM;</p>
                <p>‘Authorised Person’ means a person authorised by the Client to give instructions to CCM in accordance with the provisions of clause 3;</p>
                <p>‘Best Execution’ means the steps taken by the Company to obtain the best possible result on behalf of its Clients either when executing Client orders or receiving and transmitting orders for execution;</p>
                <p>‘Business Day’ means a day which is a business day in Australia;</p>
                <p>‘Client’ means any Retail Client and/or Professional Client and/or Eligible Counterparty as the case may be;</p>
                <p>‘Client Instructions’ means any instructions and communications given to the Company in accordance with these Terms of Business;</p>
                <p>‘Contract’ means a trade and/or purchase and/or sale of an Instrument;</p>
                <p>‘Contract Note’ means a document confirming an entry into a Contract;</p>
                <p>‘Durable Medium’ means any instrument which enables a Client to store information addressed personally to that Client in a way accessible for future reference for a period of time adequate for the purposes of the information and which allows the unchanged reproduction of the information stored;</p>
                <p>‘Eligible Counterparty’ means a Client who is categorised as an Eligible Counterparty by the Company as per the applicable rules;</p>
                <p>‘Force Majeure Event’ shall include, but is not limited to, the following: any act, event or occurrence (including, without limitation, any interruption of power supply or electronic or equipment failure, strike, terrorism or civil commotion) which in the Company’s opinion, prevents it from maintaining an orderly market in one or more of the currencies or products in respect of which the Company ordinarily allows the Client to enter into Contracts;</p>
                <p>‘Instrument’ means any instrument as defined in the Dealers in Securities as amended from time to time;</p>
                <p>‘Law’ means any applicable law, rule, guidance note, or direction issued by the;</p>
                <p>‘Licence’ means the Company’s investment services licence issued by the;</p>
                <p>‘Market Rules’ means the rules, regulations, customs and practices of any organization or market involved in the execution or settlement of a Contract and any exercise by any such organization or market of any power or authority conferred on it;</p>
                <p>‘Asic’ means the Avustralian Securities Investment Commission</p>
                <p>‘Professional Client’ means a Client who is categorised as a Professional Client by the Company as per the applicable rules;</p>
                <p>‘Representative’ shall mean such person or persons as shall be authorised from time to time by the Client to deliver instructions to the Company for and on behalf of the Client and as shall have been notified to the Company in writing from time to time. Any such authority may be revoked by notice in writing by the Client but shall only be effective upon written confirmation by the Company of the Company’s receipt of notice of revocation;</p>
                <p>‘Retail Client’ means a Client who is categorised as a Retail Client by the Company as per the applicable rules;</p>
                <p>‘Services’ means the services offered by the Company to the Client, and which it is authorised to provide in virtue of the relevant License, currently consisting in the reception and transmission of orders as well as the execution of orders;</p>
                <p>‘Settlement Date’ means such date as the Company may, at its absolute discretion, determine and notify to the Client as the date for settlement of any amount of money and/or delivery of any Instrument by the Client;</p>
                <p>‘Tax’ means any form of taxation, duty, levy, impost, charge, social security or other similar contribution, or rates (whether created or imposed by any government, state, federal, local, municipal or other body, and whether in Australia or elsewhere), including any related penalty, interest, fine or surcharge;</p>
                <p>‘Value Date’ means the date for settlement of a Contract specified in the applicable Contract Note.
        
                </p><p><strong>COMMENCEMENT</strong></p>
                <ol>
                    <li>These Terms of Business shall come into effect on the date on which they have been signed by both Parties, whichever is the later.</li>
                </ol>
                <p><strong>SERVICES</strong></p>
                <ol start="2">
                    <li>	The Company shall, on the request of the Client and subject to any limitations and restrictions imposed from time to time in the Company’s Licence or under the Law, provide the Services in relation to the Instruments in accordance with these Terms and Conditions. </li>
                    <li>	If the Client acts on behalf of a principal, whether or not the Client identifies that principal to the Company, the Company will not accept that principal as an indirect client, unless otherwise agreed in writing between the Company and the Client. </li>
                    <li>	All trades and transactions will be subject to the applicable laws, rules, regulations, bye-laws, customs and usages of the exchange or market (and its clearing house/s if any) where the orders for such trading or transactions are executed, or if not executed on any exchange or other market, will be subject to the usages and customs prevailing among brokers with respect to such trading or effecting such transactions, including custody, clearance and settlement procedures. </li>
                    <li>	The Client shall provide the Company with any information as may be required by Law or which the Company requires in order to meet the Company’s legal and regulatory obligations or Licence conditions. </li>
                    <li>	In compliance with the Anti-Money Laundering and Counter-Terrorism Financing Act No.13 of 2014 on Strong Capitals classifies its Clients in three main categories: Eligible Counterparties (ECPs), Professional Clients and Retail Clients. ) Strong Capitals attaches different levels of regulatory protection to each category and hence to Clients within each category. In particular, Retail Clients are afforded the most regulatory protection; Professional Clients and ECPs are considered to be more experienced, knowledgeable and sophisticated and able to assess their own risk and are thus afforded fewer regulatory protection. Strong Capitals offers its Clients the possibility to request reclassification and thus to increase or decrease the level of regulatory protections afforded. Where a Client requests a different categorisation (either on an overall level or on a product level), the Client needs to meet certain specified quantitative and qualitative criteria. On the basis of the Client’s request, Strong Capitals undertakes an adequate assessment of the expertise, experience and knowledge of the Client to give reasonable assurance, in the light of the nature of transactions or services envisaged that the Client is capable of making his/her own investment decisions and understanding the risks involved. However, if the abovementioned criteria are not met Strong Capitals will not accept the request of reclassification. Further information on this matter will be provided to the Client upon request. </li>
                    <li>	The Company shall assess whether the Service and/or Instrument envisaged by the Client is appropriate for the Client, based on the information provided by the Client himself. If the Company determines, on the basis of the information received from the Client, that the Service and/or Instrument is not appropriate for the Client, then the Company shall warn the Client. In the event that the Client elects not to provide the information required by the Company, or where the Client provides insufficient information, the Company shall warn the Client that such a decision will not allow the Company to determine whether the service or product envisaged is appropriate for the Client. If the Company has given a warning to the Client as provided in this paragraph, the Company shall only provide the Services requested and in respect of which the warning was given, if the Client submits a specific request in writing to the Company in the form determined by the Company from time to time. </li>
                    <li>	The Company is hereby being authorised and instructed by the Client to undertake all foreign exchange transactions necessary to make any investment or withdrawal in accordance with these Terms of Business. In this regard, the Company may affect any foreign exchange transactions on customary terms. </li>
                    <li>	The Client agrees to settle, in cleared funds any monies by the Settlement Date. </li>
                    <li>	In respect of each Contract entered into by the Company with the Client, the Company will send to the Client a Contract Note on the Business Day on which the Contract is concluded. The failure of the Company to send a Contract Note will not prejudice the rights and obligations of either party under a Contract. </li>
                    <li>	A monthly statement in respect of every Account, including any open Contracts, which the Client may have, shall be sent to the Client within two weeks of the end of each calendar month. </li>
                    <li>	Margin may be offered to the Client as up to 500:1 </li>
                    <li>	If the Client’s margin level goes below his applicable margin requirement, then all his positions will be automatically closed, without notice or attempts from the Company to contact him. </li>
                    <li>	The Company reserves the right to modify margin requirements in any market condition, especially those characterized by particular lack of liquidity or volatility on all currency pairs being traded with due notice given to the Client. </li>
                    <li>	It is the Client’s responsibility to monitor his margin requirements which could be changed at any time by the Company in regards to amounts on deposit as well as opened positions. A list of margin requirements and liquidation levels is available upon request and visible on the Company website. </li>
                    <li>	Without limiting the Client’s obligation to ensure margin deposits, the Company will have no obligation to ensure that margin deposit requirements have been satisfied by the Client before effecting a Contract and the Client’s obligations in respect of a Contract will not be diminished by any failure by the Company to enforce payment of outstanding margin deposits prior to entering into the Contract. </li>
                    <li>	If the Company does not receive instructions from the Client by two days prior to Value Date of the said Contract, the Company is hereby authorised (but not obliged) to swap all the said Contracts to the next value date traded. </li>
                    <li>	The Company may (but shall not be obliged to) convert any monies held by it for the Client into such other currency, as the Company considers necessary or desirable to cover the Client’s obligations and liabilities in that currency at such rate of exchange, as the Company shall select. </li>
                    <li>	The Client undertakes that he is aware of the Company internal cut-off times in connection with its services and products and therefore any order received by the Company after the said internal cut-off times shall be executed on the following trading date, where applicable. </li>
                    <li>	The Company does not pay nor deliver at the expiry of transactions, currencies or precious metals, related to the transactions carried out by the Client. No physical delivery of currencies or precious metals is carried out by the Company; </li>
                    <li>	The Client acknowledges that many Contracts will be effected subject to, and in accordance with, Market Rules. In particular, the Client acknowledges that Market Rules usually contain wide powers in an emergency or otherwise undesirable situation, and the Client agrees that if any market or other organization takes any action, which affects a Contract, then the Company may take any action which it, in its discretion, considers desirable in the interests of the Client and/or the Company; </li>
                    <li>	The Company may, in its reasonable opinion, determine that an emergency or an exceptional market condition exists, and that this constitutes a Force Majeure Event, in which case the Company will, in due course, take reasonable steps to inform the Client; </li>
                    <li>	The Client will be liable to the Company for trades executed by means of the Client’s password even if such use may be wrongful; </li>
        
                </ol>
                <p><strong>BEST EXECUTION POLICY</strong></p>
                <ol start="24">
                    <li>	The Company undertakes to take all reasonable steps to obtain, when carrying out orders, the best possible result for its Clients taking into account price, costs, speed, likelihood of execution and settlement, size, nature or any other consideration relevant to the execution of the order; provided that whenever there is a specific instruction from the Client, the Company will execute the order following the specific instruction. In terms of the Company’s execution policy, the best possible result for Clients will be determined in terms of the total consideration, representing the price of the Instrument and the costs related to execution, which includes all expenses incurred by the Client which are directly related to the execution of the order, including execution venue fees, clearing and settlement fees and any other fees paid to third parties involved in the execution of the order.</li>
                    <li>	The Client is hereby informed and acknowledges that any specific instructions from the Client may prevent the Company from taking the steps that it has designed and implemented in its execution policy to obtain the best possible result for the execution of those orders in respect of the elements covered by</li>
                </ol>
                <p>&nbsp;<strong>CLIENT IDENTIFICATION AND SOURCE OF FUNDS</strong></p>
                <p>   Under the Anti-Money Laundering regime the Client is required to produce satisfactory evidence of identity and the source of funds to be invested. The Company reserves the right to request any additional information which may be necessary in order to verify the Client’s identity and provenance of funds to be invested. </p>
                <ol start="26">
                    <li>The Client further represents and warrants that the monies and Instruments which form the subject of these Terms of Business and any future additions thereto have not originated and will not originate from activities or transactions which are a criminal offence in COUNTRY or which if carried out in COUNTRY would constitute such an offence or comprise property the receipt ownership or control of which would be such an offence.</li>
                </ol>
                <p><strong>CHARGES AND FEES</strong></p>
                <ol start="28">
                    <li>It is hereby acknowledged by the Client that the Company shall be entitled to fees, commissions, and other remuneration.</li>
                </ol>
                <p><strong>TAX AND FINANCIAL ADVICE</strong></p>
                <ol start="29">
                    <li>	The Company does not provide advice on matters of Tax and the Company shall not be required to have regard to such matters in providing any services under these Terms of Business.</li>
                    <li>	The Company is not currently authorised to provide any investment advice, and thus Clients are encouraged to seek independent financial advice accordingly. The Company cannot be held liable for any loss, action, proceedings, claims, damages, expenses, costs or other liabilities in this respect. The fact that the Company effects a transaction with or for the Client, shall not be taken to mean that the Company recommends, or concurs on the merits of, the transaction or that the transaction is suitable for the Client;</li>
                </ol>
                <p><strong>RIGHT OF PLEDGE, LIEN, SET-OFF AND RETENTION</strong></p>
                <ol start="31">
                    <li>	The Company shall, at any time, be entitled to offset against each other the balances of all accounts that the Client maintains with the Company (regardless of designation of currency of the account) or to offset each balance individually. For all its claims arising from its business relations with the Client, irrespective of the maturity dates of such claims or of the currencies in which they are denominated, the Company shall have a right of lien and pledge, and a right of retention, on all assets held in the Client’s name or otherwise deposited with the Company. </li>
                    <li>	Without prejudice to any other rights the Company may have, it shall be entitled to combine or consolidate all or any of the accounts maintained by the Client with the Company to set off any amount at any time owing from the Client against any amount owing by the Company to the Client. Any security, guarantee or indemnity given to the Company by the Client for any purpose shall extend to any balance owing from the Client after exercise of such right of set-off.</li>
                </ol>
                <p><strong>CLIENT ACCOUNTS</strong></p>
                <ol start="33">
                    <li>	If a Client account is held jointly by more than one account holder then the obligations of each of the joint account holders under these Terms of Business shall be joint and several. </li>
                    <li>	Unless the Company receives notice in writing to the contrary from any one of such joint account holders the Company is hereby authorised to communicate with and act on Client Instructions of any one of the joint account holders, and the Company shall have authority to act on any such Client Instructions, without notice to any one or more of the other joint account holders.</li>
                    <li>	In the event of the death of one of the joint account holders, the surviving joint account holders agree to immediately provide the Company with written notice thereof. The death of any joint account holder will affect the rights and obligations of the surviving joint account holders. The Company is authorised, prior to or after receipt of written notice of the death of one of the joint account holders, to take such steps or require such documentation or restrict trades or transactions relating to the joint Client Account as the Company may deem prudent or advisable, at its absolute discretion.</li>
                    <li>	The estate of any deceased joint account holder shall continue to be liable to the Company jointly and severally for any indebtedness or other liabilities in connection with the Client account.</li>
                    <li>	Where the Client comprises one or more trustee(s), the trustee(s) shall: notify the Company of any changes in trustee(s) and, if required by the Company, procure that the new trustee(s) enter into or otherwise become bound by the terms of these Terms of Business; and confirm, where requested by the Company, that, on the basis of competent legal advice, each trustee is satisfied that it has all the necessary powers to enter into these Terms of Business.</li>
                    <li>	Where the Client is a company, such Client shall confirm, where requested by the Company, that, on the basis of competent legal advice, its directors are satisfied that it has all the necessary power and authority to enter into these Terms of Business. The Company shall not be required to enquire into the authority of such person(s), who may give the Company an effective and final discharge in respect of any or all of its obligations under these Terms of Business until such time as the Company is notified in writing that such persons are no longer so authorised. In the event of a change in such persons, such Client shall provide the Company forthwith with written notice of the names of the persons who shall thereafter be authorised (whether individually or together) to give to and receive from the Company any instruction, acknowledgement, demand, notice or request under these Terms of Business.</li>
                </ol>
                <p><strong>CLIENT MONIES</strong></p>
                <ol start="39">
                    <li>Strong Capitals acts in line with the Dealers in Securities (Licensing) Act [CAP 70] and Amendments</li>
                </ol>
                <p>Strong Capitals shall hold and maintain an amount equal to your Account Value for each Account you hold with us in a segregated client money bank account. In order to secure client funds held by Strong Capitals, the company holds segregated client money account with banking entities regulated and located in reputable jurisdictions.</p>
                <p><strong>COMMUNICATIONS AND INSTRUCTIONS BY THE CLIENT</strong></p>
                <ol start="40">
                    <li>	The Client must verify the contents of each document received from the Company. Such documents shall, in absence of manifest error, be conclusive unless the Client notifies the Company in writing to the contrary within five Business Days of receiving such document;  </li>
                    <li>	Unless otherwise provided in these Terms of Business or as may be required by Law, communications between the Company and the Client, including (where relevant) those for the transmission and reception of orders and instructions and/or directives by the Client to the Company in respect of the Services to be provided shall be effected either in writing, via telephone or other electronic means. </li>
                    <li>	The Client undertakes to confirm as soon as practicable and in writing by email any verbal orders, instructions and/or directives which he may have given to the Company. </li>
                    <li>	The Client acknowledges and accepts that the internet and email are an inherently insecure means of communication and are used at the sole risk of the Client. </li>
                    <li>	The Client authorises the Company to rely on, and treat as fully authorised and binding on the Client, any order, instruction or communication (by whatever means transmitted and whether or not in writing) which purports to be given by the Client and is accepted by the Company in good faith without further enquiry on the Company’s part as to the genuineness, authority or identity of the person giving or purporting to give the same and regardless of the circumstances prevailing at the time and the Client will be responsible for and bound by all contracts, obligations, costs and expenses properly entered into or assumed by the Company on the Client’s behalf in consequence of or in connection with such orders, instructions or communications. </li>
                    <li>	The Company will not be liable for any actions taken or omitted to be taken in good faith pursuant to such orders, instructions or communications nor shall the Company be under any obligation to confirm orders or instructions before they are executed or to confirm the accuracy or completeness of any such information before it is acted or otherwise relied upon. </li>
                    <li>	The Client agrees that the Company may accept instructions from the Representative either in writing (including email) or verbally. The Company will acknowledge verbal instructions verbally and will acknowledge written (including facsimile) instructions by acting on them. Unless otherwise agreed the Company will not be obliged to give or make any other acknowledgment of such instructions. Except as otherwise specifically agreed in writing, the Company shall be entitled to assume that there are no limitations on the authority of the Representative. </li>
                    <li>	The Client authorises the Company to rely on, and treat as fully authorised and binding on the Client, any order, instruction or communication (by whatever means transmitted and whether or not in writing) which purports to be given by the Representative on the Client’s behalf and is accepted by the Company in good faith without further enquiry on the Company’s part as to the genuineness, authority or identity of the person giving or purporting to give the same and regardless of the circumstances prevailing at the time and the Client will be responsible for and bound by all contracts, obligations, costs and expenses properly entered into or assumed by the Company on the Client’s behalf in consequence of or in connection with such orders, instructions or communications. The Company will not be liable for any actions taken or omitted to be taken in good faith pursuant to such orders, instructions or communications nor shall the Company be under any obligation to confirm orders or instructions before they are executed or to confirm the accuracy or completeness of any such information before it is acted or otherwise relied upon. </li>
                    <li>	Where the Company is required to provide information in a Durable Medium to the Client in accordance with these Terms of Business, the Company’s Licence or the Law, the Company may choose to give such information either on paper or by means of a website or, if the Client specifically chooses, any other durable medium. </li>
                    <li>	The Client acknowledges and expressly accepts that the Company may record all telephone conversations between the parties. Such recordings shall remain the property of the Company and the Client agrees, to the use thereof or transcript there from, as evidence by the Company in any dispute or anticipated dispute between the parties under these Terms of Business. Any such recordings or transcripts made by the Company may be destroyed by it in accordance with its usual practice. </li>
                </ol>
                <p><strong>DEFAULT AND TERMINATION OF THE TERMS OF BUSINESS</strong></p>
                <ol start="50">
                    <li>	Without prior notice to, or receiving further authority from the Client, the Company shall have the right to close out all or any part of any Contract, and realize any other assets of the Client held by the Company, upon or at any time after the happening of any of the following events:</li>
                    <li>	The Client fails to make any payment due under these Terms of Business on the due date;</li>
                    <li>	The Client fails to observe or perform in whole or in part any of the provisions of these Terms of Business or commits a material breach of the representations, warranties or acknowledgement in this clause; c. The Client dies, is declared absent or becomes of unsound mind;</li>
                    <li>	A bankruptcy petition is presented in respect of the Client or, if a partnership, in respect of one or more of its partners or, if a company, any steps are taken or proceedings initiated or protection sought under, any applicable bankruptcy reorganization or insolvency law by it in respect of itself or against it including, without limitation, the taking of any steps for the appointment of a receiver, trustee, administrator or similar officer to be appointed over its undertaking or assets or any part of them; e. A petition is presented for the winding up of the Client;</li>
                    <li>	An order is made or a resolution is passed for the winding up of the Client (other than for the purposes of a bona fide reconstruction or amalgamation);</li>
                    <li>	The Client convenes a meeting for the purpose of making or proposing or entering into any arrangement or composition for the benefit of its creditors (other than for the purposes of a bona fide reconstruction or amalgamation);</li>
                    <li>	A distress, execution, or other process is levied against any property of the Client and is not removed, discharged or paid within two weeks;</li>
                    <li>	Any security created by a mortgage or charge created by the Client becomes enforceable and the mortgagee or the chargee take steps to enforce the security;</li>
                    <li>	Any indebtedness of the Client or any of its subsidiaries becomes immediately due or payable, or capable of being declared so due and payable, prior to its stated maturity by reason of default of the Client or any of its subsidiaries or the Client or any of its subsidiaries fails to discharge any indebtedness on its due date;</li>
                    <li>	The Company or the Client is requested to close out a Contract or any part of a Contract by any regulatory agency or authority;</li>
                    <li>	The Company reasonably considers it necessary for its own protection.</li>
                    <li>	The Client may terminate these Terms of Business at any time and without stating a reason, by written notice given to the Company and without penalty. The Company may terminate these Terms of Business, at any time and without stating a reason, by written notice given to the Client. In either event, termination shall not affect any legal rights or obligations which may have arisen, including the rights and liabilities of any of the parties in respect of transactions for which there is an outstanding liability.</li>
                    <li>	In the event of termination of these Terms of Business for any reason whatsoever, or in the event of the failure of the Company to execute any instructions of the Client to acquire any one or more Instruments due to any reason beyond the Company’s control, the Client shall, without delay, give the Company disposal instructions relating to all the Instruments and/or any money held by the Company. In default of such disposal instructions within 15 days of termination of these Terms of Business, the Company shall be relieved of all its obligations hereunder but shall have the right to reimbursement of its proper expenses and for remuneration for its services until the date of disposal of the Instrument, as applicable.</li>
                    <li>	The Company shall have a right of retention over the Client’s Instruments for the purpose of reimbursement of its proper expenses and for remuneration for its services until such expenses and remuneration are paid.</li>
                </ol>
                <p><strong>EXEMPTION FROM LIABILITY AND INDEMNITY</strong></p>
                <ol start="54">
                    <li>	Undertaking transactions on an electronic system, exposes the Client to risks associated with the system including the failure of hardware and software. The result of any system failure may be that the Client’s order is either not executed according to his instructions or is not executed at all. The Company does not accept any liability in the case of such a failure, whether this occurs on the part of the Company or on the part of the Client;</li>
                    <li>	Should quoting errors occur due to the Company’s mistype of a quote or an erroneous price quote from the Company, the latter will not be liable for the resulting errors in account balances. The Company reserves the right to make the necessary corrections or adjustments on the account involved. Any dispute arising from such quoting errors will be resolved on the basis of a fair market value of a currency at the time such an error occurred.</li>
                    <li>	The Client understands that the Company shall not be held liable as a result of any change in market conditions between the date of the Client’s instructions and the execution thereof by the Company.</li>
                    <li>	The Client agrees to indemnify and hold harmless the Company, its officers, employees and agents from and against any loss, action, proceedings, claims, damages, expenses, costs or other liabilities whatsoever incurred or suffered by or made against the Company and/or any of its officers, employees and agents at any time (both before and after termination of these Terms of Business) arising as a result of the Company acting upon the orders, instructions and/or directives of the Client or the Representatives’ orders, instructions and/or directives believed by the Company to be coming from the Client or the Representative as per these Terms of Business.</li>
                    <li>	The provisions of the clauses under this heading shall survive the termination of these Terms of Business for any reason whatsoever.</li>
                </ol>
                <p><strong>REPRESENTATION AND WARRANTIES</strong></p>
                <ol start="59">
                    <li>	The Client represents and warrants in favour of the Company that:</li>
                    <li>	The information provided by the Client to the Company pursuant to these Terms of Business, including details of the Client’s identity, e-mail address, telephone and fax numbers, (if any), information on the Client’s knowledge and experience in the investment field relevant to the specific type of product or service, his financial situation and his investment objectives (where relevant) and any transaction-related information, whether given verbally, in writing, in electronic form or by any other means, is true and accurate in all respects and the Client agrees to advise the Company in writing of any changes in such information.</li>
                    <li>	The Client is the ultimate and effective beneficial owner of any money or assets and the Client is not acting as nominee for any other person, and in case the Client is a body corporate, the ultimate and effective beneficial owners of the Client are as already advised to the Company (and in such case the Client hereby undertakes to advise the Company forthwith of any change in the shareholding structure or of the ultimate beneficial ownership of the Client);</li>
                    <li>	The Client has never been (and in case the Client is a body corporate none of its shareholders, directors or other officers have ever been) convicted of any offence other than minor traffic offences;</li>
                    <li>	The Client has never been and is not currently (and in case the Client is a body corporate none of its shareholders, directors or officers have ever been and are not currently) undergoing any criminal investigation or prosecution or any other investigation by any governmental, professional or other regulatory or statutory body.</li>
                </ol>
                <p><strong>DATA PROTECTION</strong></p>
                <ol start="60">
                    <li> To the extent that the Company processes any information relating to the Client (or persons related to the Client) that constitutes personal data for the purposes of the Data Protection Act, 2001 the Company undertakes to process such data only in accordance with the provisions of the said Act and any regulations made hereunder, in the manner and for the purposes indicated in these Terms of Business and in any data protection notice that the Company may issue and notify to the Client from time to time.</li>
                    <li> The Company shall process such personal data as may be necessary for the provision of the Services to the Client in accordance with these Terms of Business and as the Company may be obliged or authorised to do by or under any law.</li>
                    <li> The Company may further process such personal data in order to provide the Client, from time to time, with information about the Company’s products and services by ordinary mail, e-mail, telephone or any other means. The Customer however acknowledges that he/she has a right to inform the Company in writing should he/she object to receiving such direct marketing material, in which event the Company shall comply with the Client’s wishes.</li>
                    <li> The Client acknowledges that he/she has a right to request access to and/or correction of personal data that the Company processes about him/her. Any such requests must be made to the Company by the Client himself/herself as the data subject.</li>
                </ol>
                <p><strong>CONFIDENTIAL INFORMATION</strong></p>
                <ol start="64">
                    <li>	The Company may use third party financial intermediaries to carry out Client’s instructions. The Client acknowledges and accepts that in order to carry out such instructions the Company may be required by such financial intermediaries to disclose the identity of the Client on whose behalf a particular transaction is carried out and the Client is hereby giving its irrevocable consent to the disclosure thereof to such financial intermediaries. Such disclosure of information shall be made by the Company solely in order to enable the financial intermediaries to adhere to the relative anti-money laundering obligations.</li>
                    <li>	The Company will, subject to law, pass promptly to the Client any requests that it receives for information about the Client, its officers, employees, agents, trustees, co-trustees or beneficiaries. The Client agrees either to provide the Company with the requested information or to state that it refuses to provide (or permit the provision of) such information and the Company may pass such information or statement to the relevant requestor.</li>
                </ol>
                <p><strong>MISCELLANEOUS</strong></p>
                <ol start="66">
                    <li>	The terms and conditions of these Terms of Business may be amended from time to time at the Company’s sole discretion. Notification of any amendments to these Terms of Business will be provided to the Client at least thirty (5) days prior to the proposed change. Failure on the Client’s part to notify the Company in writing of his/her intention to terminate these Terms of Business within thirty (5 days) of notification will constitute the Client’s irrevocable acceptance of any such changes. </li>
                    <li>	A waiver of any right or remedy by either Party to these Terms of Business in any particular instance shall be valid only in the instance for which it is given and shall not be construed as a waiver of any other right or remedy of such Party under these Terms of Business or at law.</li>
                    <li>	If, at any time, any provision of these Terms of Business is or becomes illegal, invalid or unenforceable in any respect under the law of any jurisdiction, neither the legality, validity or enforceability of the remaining provisions of these Terms of Business under the law of that jurisdiction nor the legality, validity or enforceability of such provision under the law of any other jurisdiction shall be in any way affected.</li>
                </ol>
                <p><strong>CHOICE OF LAW</strong></p>
                <ol start="69">
                    <li>These Terms of Business shall be subject to the laws of Australia;</li>
                </ol>
                <p><strong>JURISDICTION</strong></p>
                <ol start="70">
                    <li>The Parties hereby submit to the exclusive jurisdiction of the Courts of Australia.</li>
                </ol>
                <p>The undersigned have executed these Terms of Business on the date and year set forth above.</p>
        
            </div>
        </div>

    </section>
@endsection
