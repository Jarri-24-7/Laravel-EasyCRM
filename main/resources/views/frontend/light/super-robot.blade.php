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
            font-size: 30px !important;
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
        <div class="section-full welcome-section-outer">
            <div class="welcome-section-top bg-white p-tb80">
                <div class="container">
                    <div class="row">



                        <div class="col-lg-12 col-md-12">
                            <div class="welcom-to-section">
                                <!-- TITLE START-->
                                <div class="left wt-small-separator-outer">
                                    <div class="wt-small-separator site-text-primary">
                                        <div class="sep-leaf-left"></div>
                                        <div>Strong Capitals </div>
                                        <div class="sep-leaf-right"></div>
                                    </div>
                                </div>
                                <h4>Otomatik Alım Satım Robotu Genel Koşullar</h4>
                                <!-- TITLE END-->
                                <p>
                                    Bu web sitesini ve/veya aracı kurumun hizmetlerini kullanarak şunları da kabul etmiş
                                    olursunuz;
                                </p>
                                <p>
                                    <b>
                                        <a href="https://strongcapitals.com/tr/Corporate/General/">
                                            Genel Yatırım Koşulları
                                        </a>
                                    </b>
                                </p>
                                <p>
                                    <b>
                                        <a href="https://strongcapitals.com/tr/Corporate/PrivacyPolicy">
                                            Gizlilik Politikası
                                        </a>
                                    </b>

                                </p>
                                <p>
                                </p>
                                <h4>
                                    <a href="https://strongcapitals.com/tr/Corporate/TermsConditions">
                                        Şartlar ve Koşullar
                                    </a>
                                </h4>

                                <p></p>
                                <p>
                                    Bütün koşulları okuduğunuzu, anladığınızı ve bunlara bağlı kalmayı kabul ettiğinizi
                                    onaylıyorsunuz. Bahsi geçen tüm yükümlülükleri üstleniyorsunuz. Siteyi ve hizmetlerini
                                    kullanmak için yeterli yasal yaşta ve kapasitede olduğunuzu; hizmetlerin kullanımını
                                    açıkça yasaklayan yargı yetkisinin kontrolü altında olmadığınızı, siteyi ve bütün
                                    hizmetleri kendi takdirinize bağlı olarak ve kendi sorumluluğunuz altında kullandığınızı
                                    onaylamış olursunuz.
                                    Bu koşulları, siteye erişiminiz ve Siteyi kullanımınızla ilgili olarak Siz ve Strong
                                    Capitals arasında yasal olarak bağlayıcı bir anlaşma teşkil eder; buna Sitede bir
                                    Müşteri hesabına ("Müşteri Hesabı") kaydolmak da dahildir, ancak bunlarla sınırlı
                                    değildir. Ayrıca, Kullanım Koşullarına referans olarak dahil edilen yukarıdaki linklerde
                                    belirtilen ‘’genel yatırım koşulları, gizlilik politikası ve şartlar ve koşulları’’ da
                                    okumalısınız. Tüm bu koşullara bağlı kalmak istemiyorsanız, lütfen siteye, şirkete, ve
                                    ilgili bütün hizmetlere erişim sağlamayı bırakın ve hiçbir ürün/hizmeti kullanmayın.

                                </p>
                                <p></p>
                                <h4>
                                    OTOMATİK ALIM SATIM ROBOTU KULLANIM DETAYLARI
                                </h4>
                                <p></p>
                                <p>
                                    Otomatik alım satım robotu finansal piyasalarda matematiksel ve istatiksel veriler
                                    kullanarak alım satım kararları veren yazılımlardır. Kararlarında teknik analiz
                                    yöntemleri, fractal kalıplar, para yönetimi, risk yönetimi vb metodlar kullanır.
                                    İyileştirmek için şirketin yazılım ve analist ekibi tarafından düzenli olarak
                                    güncellenir. Geçmiş verileri ve robot kurulduktan sonraki anlık verileri izleyerek alım
                                    satım kararları verir. Amacı yatırım yaparken alım satım işlemlerini
                                    otomatikleştirmektir. Sonuçta istatiksel olarak düzenli getiri hedeflemektir. Otomatik
                                    alım satım robotunu kullanarak sadece bir yazılım kullandığınızı ve %100 getiri
                                    garantisi verilemeyeceğini unutmayın. Bu sabit getirili ürünler dışında bütün finansal
                                    piyasaların doğasına aykırıdır.
                                    İstatiksel olarak yıllık ortalamada, kullanılan robotun risk seviyesine göre aylık
                                    yaklaşık %25-35 kar marjı yakalar. Kar oranı piyasa koşullarına göre değişkenlik
                                    göstermektedir. Bazı aylarda kar marjı %80lere kadar çıkabilirken bazı aylarda ise %3-10
                                    seviyelerinde kalabilir. İyileştirmek için düzenli olarak güncellenir fakat toplam
                                    kazanç miktarı üzerine garanti verilememektedir. Bütün bu referanslar yıllık bazda
                                    değerlendirilmektedir. Bununla birlikte, alım satım robotlarının sihirli bir değnek
                                    olmadığı ve aynı zamanda potansiyel riskler taşıdıkları unutulmamalıdır. Örneğin,
                                    ticaret robotları piyasa verilerini yanlış yorumlayabilir veya beklenmedik olaylarla
                                    karşılaşabilir ve bu da önemli mali kayıplara yol açabilir. Strong Capitals
                                    yatırımcılara sadece yazılımın kullanım hakkını sağlar. İyileştirmek için gerekli
                                    çalışmaları yapar. Kar yada zarar durumundan sorumlu değildir.
                                </p>
                                <p></p>
                                <h4>
                                    Şartlar/Koşullar</h4>
                                <p></p>
                                <p>
                                    1) Strong Capitals, otomatik alım satım robotunun çalışabilmesi için gerekli server,
                                    yazılım ekibi, teknik donanım ve gerekliliklerin tamamını ücretsiz şekilde sağlamakla
                                    sorumludur. Bunun için oluşabilecek bütün maliyetleri üstlenir.
                                </p>
                                <p>
                                    2) Strong Capitals robotun çalışabileceği standart hesap sağlamak ile sorumludur.
                                    İnsiyatifi dahilinde düşük spreadli hesap türleri, swapsız hesaplar, spread almama,
                                    komisyon almama, bonus verme, kredi verme ve farklı kampanyalar yapma gibi pek çok
                                    seçenek sağlayabilir. Hiç birisi için bir zorunluluk yoktur ve kampanyalarda her zaman
                                    değişiklik yapma hakkını saklı tutar.
                                </p>
                                <p>
                                    3) Robotun çalışma prensipleri 3 kademeli olarak değişir. 3000 USD – 5000 USD – 10000
                                    USD olarak sınıflandırılmıştır. Robotun aktif düzenli çalışabilmesi için gerekli olan
                                    minimum teminat miktarı 3000 Usd’dir. Varlık 3000 usd altında ise robot
                                    işlem&nbsp;açmayabilir.
                                </p>
                                <p>
                                    4) Strong Capitals 5000usd üzerindeki bakiyeler için insiyatif dahilinde swapsız hesap
                                    sağlar. Fakat swapsız hesap sağlama zorunluluğu yoktur ve swapsız hesaplar şarta
                                    bağlıdır. 3 ay içerisinde 90 lot yapılmamış swapsız hesaplar standart hesaba geçirilir.
                                    Hesap kurallarında herhangi bir zamanda değişiklik yapma hakkı saklıdır.
                                </p>
                                <p>
                                    5) Otomatik alım satım robotu kullanmak için herhangi bir nakdi ücret talep
                                    edilmemektedir.
                                </p>
                                <p>
                                    6) 3000 USD’lik robotun kullanılması için 150 Lot, 5000 USD’lik robot için 300 Lot,
                                    10000 USD kademesi için ise 400 lot işlem şartı bulunmaktadır. Lot için bir süre sınırı
                                    yoktur. Yatırımcı istediği zaman tamamlayabilir. Fakat yapılan işlemler 1 dakika zaman
                                    geçmeden önce kapatılamaz. 1 dakika süre altında kapatılan işlemler her ayın ilk
                                    haftası&nbsp;silinir.
                                </p>
                                <p>
                                    7) İşlem şartı tamamlanmadığı takdirde kar yada ana para çekimi yapılamaz.
                                </p>
                                <p>
                                    8) Lot şartında robotun yaptığı işlemler de dahil edilir ve birlikte hesaplanır. Fakat
                                    robotun lot yapma zorunluluğu bulunmamaktadır.
                                </p>
                                <p>
                                    9) Lot şartı tamamlandıktan sonra yazılım süresiz ve şartsız şekilde kullanılabilir.
                                    Ekstra bir şart yoktur. İstenildiği zaman para çekimi yapmak, robotun seviyesini
                                    değiştirmek, robotu kapatmak, tekrar açmak gibi tüm kullanım hakkına sahip olunur.
                                </p>
                                <p>
                                    10) Robot yalnızca Strong Capitals Real hesaplarında çalıştırılabilir. Farklı
                                    platformlarda çalıştırılamaz.
                                </p>
                                <p>
                                    11) Otomatik alım satım robotunun açmış olduğu işlemlere ve robotun kendisine manuel
                                    müdahale edilebilir. Manuel pozisyon eklemeleri yapılabilir, robot işlemleri manuel
                                    kapatılabilir ya da stop loss ve take profit gibi emirler verilebilir, robotun risk
                                    seviyesi değiştirilebilir ve açık işlemler üzerinde yapılabilecek tüm işlemler
                                    yapılabilir. Fakat bu değişiklikler otomatik alım satım robotunun algoritmasının düzgün
                                    çalışmasını engelleyebilir. Bu nedenle Strong Capitals manuel yapılan değişikliklerden
                                    sonra oluşabilecek risklerden ve aksaklıklardan hiçbir şekilde sorumlu değildir.
                                </p>
                                <p>
                                    12) Otomatik alım satım robotu herhangi bir pozisyona girmeden hemen önceki mevcut hesap
                                    durumunu (bakiye/varlık/marjin seviyesi) referans alır. Robot bir pozisyona girdikten
                                    sonra mevcut hesap ve işlemler üzerinde manuel olarak yapılabilecek bütün değişiklikler
                                    ve bu değişikliklerden doğabilecek sonuçlar tamamen yatırımcının sorumluluğundadır.
                                    Strong Capitals hiçbir sorumluluk kabul etmez.
                                </p>
                                <p>
                                    13) Strong Capitals bütün bu kurallarda değişiklik yapma, iptal etme, durdurma ve
                                    sonlandırma hakkını saklı tutar.
                                </p>
                                <p>
                                    <b>Risk Uyarı: </b>Türev Alım Satımı, sermayeniz için yüksek düzeyde getiri
                                    sağlayabileceği gibi yüksek düzeyde risk taşır ve yalnızca kaybetmeyi göze
                                    alabileceğiniz parayla alım satım yapmalısınız. Alım Satım Türevleri tüm yatırımcılar
                                    için uygun olmayabilir, bu nedenle lütfen ilgili riskleri tam olarak anladığınızdan emin
                                    olun ve gerekirse bağımsız tavsiye alın.
                                    Bu web sitesindeki tavsiyeler doğası gereği geneldir ve hedeflerinizi, mali durumunuzu
                                    veya ihtiyaçlarınızı hesaba katmaz. Tavsiyenin size ve kişisel koşullarınıza uygun olup
                                    olmadığını düşünmelisiniz. Lütfen yasal belgelerimizi okuyun ve herhangi bir alım satım
                                    kararı vermeden önce riskleri tam olarak anladığınızdan emin olun.


                                </p>





                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
