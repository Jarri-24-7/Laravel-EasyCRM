@extends(Config::theme() . 'layout.master')


@section('content')
<link href="https://strongcapitals.com/Scripts/intl-tel-input/css/intlTelInput.css" rel="stylesheet">
<script src="https://strongcapitals.com/Scripts/intl-tel-input/js/intlTelInput.js"></script>
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

        /**
* Template Name: Appland - v2.3.1
* Template URL: https://bootstrapmade.com/free-bootstrap-app-landing-page-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/

/*--------------------------------------------------------------
# General
--------------------------------------------------------------*/
body {
  font-family: "Open Sans", sans-serif;
  color: #585a61;
}

a {
  color: #5777ba;
}

a:hover {
  color: #7b94c9;
  text-decoration: none;
}

h1, h2, h3, h4, h5, h6 {
  font-family: "Raleway", sans-serif;
}

/*--------------------------------------------------------------
# Back to top button
--------------------------------------------------------------*/
.back-to-top {
  position: fixed;
  display: none;
  width: 40px;
  height: 40px;
  border-radius: 50px;
  right: 15px;
  bottom: 15px;
  background: #5777ba;
  color: #fff;
  transition: display 0.5s ease-in-out;
  z-index: 99999;
}

.back-to-top i {
  font-size: 24px;
  position: absolute;
  top: 7px;
  left: 8px;
}

.back-to-top:hover {
  color: #fff;
  background: #748ec6;
  transition: background 0.2s ease-in-out;
}

#main {
  margin-top: 75px;
}

/*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/
#header {
  transition: all 0.5s;
  z-index: 997;
  transition: all 0.5s;
  padding: 15px 0;
  background: rgba(255, 255, 255, 0.95);
}

#header.header-transparent {
  background: transparent;
}

#header.header-scrolled {
  background: rgba(255, 255, 255, 0.95);
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
}

#header .logo h1 {
  font-size: 30px;
  margin: 0;
  padding: 6px 0;
  line-height: 1;
  font-weight: 400;
  letter-spacing: 2px;
}

#header .logo h1 a, #header .logo h1 a:hover {
  color: #5777ba;
  text-decoration: none;
}

#header .logo img {
  padding: 6px 0;
  margin: 0;
  max-height: 40px;
}

/*--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------*/
/* Desktop Navigation */
.nav-menu, .nav-menu * {
  margin: 0;
  padding: 0;
  list-style: none;
}

.nav-menu > ul > li {
  position: relative;
  white-space: nowrap;
  float: left;
}

.nav-menu a {
  display: block;
  position: relative;
  color: #47536e;
  padding: 12px 15px;
  transition: 0.3s;
  font-size: 14px;
  font-family: "Open Sans", sans-serif;
}

.nav-menu a:hover, .nav-menu .active > a, .nav-menu li:hover > a {
  color: #5777ba;
  text-decoration: none;
}

.nav-menu .get-started a {
  background: #5777ba;
  color: #fff;
  border-radius: 50px;
  margin: 0 15px;
  padding: 10px 25px;
}

.nav-menu .get-started a:hover {
  background: #748ec6;
  color: #fff;
}

.nav-menu .drop-down ul {
  display: block;
  position: absolute;
  left: 0;
  top: calc(100% - 30px);
  z-index: 99;
  opacity: 0;
  visibility: hidden;
  padding: 10px 0;
  background: #fff;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
  transition: ease all 0.3s;
}

.nav-menu .drop-down:hover > ul {
  opacity: 1;
  top: 100%;
  visibility: visible;
}

.nav-menu .drop-down li {
  min-width: 180px;
  position: relative;
}

.nav-menu .drop-down ul a {
  padding: 10px 20px;
  font-size: 14px;
  font-weight: 500;
  text-transform: none;
  color: #233355;
}

.nav-menu .drop-down ul a:hover, .nav-menu .drop-down ul .active > a, .nav-menu .drop-down ul li:hover > a {
  color: #5777ba;
}

.nav-menu .drop-down > a:after {
  content: "\ea99";
  font-family: IcoFont;
  padding-left: 5px;
}

.nav-menu .drop-down .drop-down ul {
  top: 0;
  left: calc(100% - 30px);
}

.nav-menu .drop-down .drop-down:hover > ul {
  opacity: 1;
  top: 0;
  left: 100%;
}

.nav-menu .drop-down .drop-down > a {
  padding-right: 35px;
}

.nav-menu .drop-down .drop-down > a:after {
  content: "\eaa0";
  font-family: IcoFont;
  position: absolute;
  right: 15px;
}

@media (max-width: 1366px) {
  .nav-menu .drop-down .drop-down ul {
    left: -90%;
  }
  .nav-menu .drop-down .drop-down:hover > ul {
    left: -100%;
  }
  .nav-menu .drop-down .drop-down > a:after {
    content: "\ea9d";
  }
}

/* Mobile Navigation */
.mobile-nav-toggle {
  position: fixed;
  right: 15px;
  top: 22px;
  z-index: 9998;
  border: 0;
  background: none;
  font-size: 24px;
  transition: all 0.4s;
  outline: none !important;
  line-height: 1;
  cursor: pointer;
  text-align: right;
}

.mobile-nav-toggle i {
  color: #5777ba;
}

.mobile-nav {
  position: fixed;
  top: 55px;
  right: 15px;
  bottom: 15px;
  left: 15px;
  z-index: 9999;
  overflow-y: auto;
  background: #fff;
  transition: ease-in-out 0.2s;
  opacity: 0;
  visibility: hidden;
  border-radius: 10px;
  padding: 10px 0;
}

.mobile-nav * {
  margin: 0;
  padding: 0;
  list-style: none;
}

.mobile-nav a {
  display: block;
  position: relative;
  color: #47536e;
  padding: 10px 20px;
  font-weight: 500;
  outline: none;
}

.mobile-nav a:hover, .mobile-nav .active > a, .mobile-nav li:hover > a {
  color: #5777ba;
  text-decoration: none;
}

.mobile-nav .drop-down > a:after {
  content: "\ea99";
  font-family: IcoFont;
  padding-left: 10px;
  position: absolute;
  right: 15px;
}

.mobile-nav .active.drop-down > a:after {
  content: "\eaa1";
}

.mobile-nav .drop-down > a {
  padding-right: 35px;
}

.mobile-nav .drop-down ul {
  display: none;
  overflow: hidden;
}

.mobile-nav .drop-down li {
  padding-left: 20px;
}

.mobile-nav-overly {
  width: 100%;
  height: 100%;
  z-index: 9997;
  top: 0;
  left: 0;
  position: fixed;
  background: rgba(35, 51, 85, 0.7);
  overflow: hidden;
  display: none;
  transition: ease-in-out 0.2s;
}

.mobile-nav-active {
  overflow: hidden;
}

.mobile-nav-active .mobile-nav {
  opacity: 1;
  visibility: visible;
}

.mobile-nav-active .mobile-nav-toggle i {
  color: #fff;
}

/*--------------------------------------------------------------
# Hero Section
--------------------------------------------------------------*/

#hero {
  width: 100%;
  position: relative;
  overflow: hidden;
  padding: 140px 0 100px 0;
  margin-bottom: -75px;
}

#hero::before {
  content: '';
  position: absolute;
  right: -100%;
  top: 20%;
  width: 250%;
  height: 200%;
  z-index: -1;
  background-color: #e8ecf5;
  transform: skewY(135deg);
}

#hero h1 {
  margin: 0 0 10px 0;
  font-size: 48px;
  font-weight: 500;
  line-height: 56px;
  color: #5777ba;
  font-family: "Poppins", sans-serif;
}

#hero h2 {
  color: #515f7d;
  margin-bottom: 50px;
  font-size: 20px;
}

#hero .download-btn {
  font-family: "Raleway", sans-serif;
  font-weight: 500;
  font-size: 15px;
  display: inline-block;
  padding: 8px 24px 10px 46px;
  border-radius: 3px;
  transition: 0.5s;
  color: #fff;
  background: #47536e;
  position: relative;
}

#hero .download-btn:hover {
  background: #5777ba;
}

#hero .download-btn i {
  font-size: 20px;
  position: absolute;
  left: 18px;
  top: 8.5px;
}

#hero .download-btn + .download-btn {
  margin-left: 20px;
}

@media (max-width: 991px) {
  #hero {
    text-align: center;
  }
  #hero .download-btn + .download-btn {
    margin: 0 10px;
  }
  #hero .hero-img {
    text-align: center;
  }
  #hero .hero-img img {
    width: 60%;
  }
}

@media (max-width: 768px) {
  #hero h1 {
    font-size: 28px;
    line-height: 36px;
  }
  #hero h2 {
    font-size: 18px;
    line-height: 24px;
    margin-bottom: 30px;
  }
  #hero .hero-img img {
    width: 70%;
  }
}

@media (max-width: 575px) {
  #hero .hero-img img {
    width: 80%;
  }
}
#hero h1 {
    color: #00173c;
}
/*--------------------------------------------------------------
# Sections General
--------------------------------------------------------------*/
section {
  padding: 60px 0;
  overflow: hidden;
}

.section-bg {
  background-color: #f2f5fa;
}

.section-title {
  text-align: center;
  padding-bottom: 30px;
}

.section-title h2 {
  font-size: 32px;
  font-weight: 400;
  margin-bottom: 20px;
  padding-bottom: 0;
  color: #5777ba;
  font-family: "Poppins", sans-serif;
}

.section-title p {
  margin-bottom: 0;
}

/*--------------------------------------------------------------
# Breadcrumbs
--------------------------------------------------------------*/
.breadcrumbs {
  padding: 15px 0;
  background-color: #f6f8fb;
  min-height: 40px;
}

.breadcrumbs h2 {
  font-size: 24px;
  font-weight: 300;
}

.breadcrumbs ol {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  padding: 0;
  margin: 0;
  font-size: 14px;
}

.breadcrumbs ol li + li {
  padding-left: 10px;
}

.breadcrumbs ol li + li::before {
  display: inline-block;
  padding-right: 10px;
  color: #6c757d;
  content: "/";
}

@media (max-width: 768px) {
  .breadcrumbs .d-flex {
    display: block !important;
  }
  .breadcrumbs ol {
    display: block;
  }
  .breadcrumbs ol li {
    display: inline-block;
  }
}

/*--------------------------------------------------------------
# App Features
--------------------------------------------------------------*/
.features .content {
  padding: 30px 0;
}

.features .content .icon-box {
  margin-top: 25px;
}

.features .content .icon-box h4 {
  font-size: 20px;
  font-weight: 700;
  margin: 5px 0 10px 60px;
}

.features .content .icon-box i {
  font-size: 48px;
  float: left;
  color: #5777ba;
}

.features .content .icon-box p {
  font-size: 15px;
  color: #979aa1;
  margin-left: 60px;
}

@media (max-width: 991px) {
  .features .image {
    text-align: center;
  }
  .features .image img {
    max-width: 80%;
  }
}

@media (max-width: 667px) {
  .features .image img {
    max-width: 100%;
  }
}

/*--------------------------------------------------------------
# Details
--------------------------------------------------------------*/
.details .content + .content {
  margin-top: 100px;
}

.details .content h3 {
  font-weight: 700;
  font-size: 32px;
  color: #47536e;
}

.details .content ul {
  list-style: none;
  padding: 0;
}

.details .content ul li {
  padding-bottom: 10px;
}

.details .content ul i {
  font-size: 20px;
  padding-right: 4px;
  color: #5777ba;
}

.details .content p:last-child {
  margin-bottom: 0;
}

/*--------------------------------------------------------------
# Gallery
--------------------------------------------------------------*/
.gallery {
  overflow: hidden;
}

.gallery .owl-nav, .gallery .owl-dots {
  margin-top: 40px;
  text-align: center;
}

.gallery .owl-item {
  transition: 0.3s ease-in-out;
}

.gallery .owl-dot {
  display: inline-block;
  margin: 0 5px;
  width: 12px;
  height: 12px;
  border-radius: 50%;
  background-color: #eff2f8 !important;
}

.gallery .owl-dot.active {
  background-color: #5777ba !important;
}

.gallery .gallery-carousel {
  padding-top: 30px;
}

.gallery .gallery-carousel .owl-stage-outer {
  overflow: visible;
}

@media (min-width: 992px) {
  .gallery .gallery-carousel .center {
    border: 6px solid #5777ba;
    padding: 4px;
    background: #fff;
    z-index: 1;
    transform: scale(1.2);
    margin-top: 10px;
    border-radius: 25px;
  }
}

/*--------------------------------------------------------------
# Testimonials
--------------------------------------------------------------*/
.testimonials .testimonial-wrap {
  padding-left: 50px;
}

.testimonials .testimonial-item {
  box-sizing: content-box;
  padding: 30px 30px 30px 60px;
  margin: 30px 15px;
  min-height: 200px;
  box-shadow: 0px 2px 12px rgba(0, 0, 0, 0.08);
  position: relative;
  background: #fff;
}

.testimonials .testimonial-item .testimonial-img {
  width: 90px;
  border-radius: 10px;
  border: 6px solid #fff;
  position: absolute;
  left: -45px;
}

.testimonials .testimonial-item h3 {
  font-size: 18px;
  font-weight: bold;
  margin: 10px 0 5px 0;
  color: #111;
}

.testimonials .testimonial-item h4 {
  font-size: 14px;
  color: #999;
  margin: 0;
}

.testimonials .testimonial-item .quote-icon-left, .testimonials .testimonial-item .quote-icon-right {
  color: #e8ecf5;
  font-size: 26px;
}

.testimonials .testimonial-item .quote-icon-left {
  display: inline-block;
  left: -5px;
  position: relative;
}

.testimonials .testimonial-item .quote-icon-right {
  display: inline-block;
  right: -5px;
  position: relative;
  top: 10px;
}

.testimonials .testimonial-item p {
  font-style: italic;
  margin: 15px auto 15px auto;
}

.testimonials .owl-nav, .testimonials .owl-dots {
  margin-top: 5px;
  text-align: center;
}

.testimonials .owl-dot {
  display: inline-block;
  margin: 0 5px;
  width: 12px;
  height: 12px;
  border-radius: 50%;
  background-color: #ddd !important;
}

.testimonials .owl-dot.active {
  background-color: #5777ba !important;
}

@media (max-width: 767px) {
  .testimonials .testimonial-wrap {
    padding-left: 0;
  }
  .testimonials .testimonial-item {
    padding: 30px;
    margin: 15px;
  }
  .testimonials .testimonial-item .testimonial-img {
    position: static;
    left: auto;
  }
}

/*--------------------------------------------------------------
# Pricing
--------------------------------------------------------------*/
.pricing .row {
  padding-top: 40px;
}

.pricing .box {
  padding: 40px;
  margin-bottom: 30px;
  box-shadow: 0px 0px 30px rgba(73, 78, 92, 0.15);
  background: #fff;
  text-align: center;
}

.pricing h3 {
  font-weight: 300;
  margin-bottom: 15px;
  font-size: 28px;
}

.pricing h4 {
  font-size: 46px;
  color: #5777ba;
  font-weight: 400;
  font-family: "Open Sans", sans-serif;
  margin-bottom: 25px;
}

.pricing h4 span {
  color: #bababa;
  font-size: 18px;
  display: block;
}

.pricing ul {
  padding: 0;
  list-style: none;
  color: #999;
  text-align: left;
  line-height: 20px;
}

.pricing ul li {
  padding-bottom: 12px;
}

.pricing ul i {
  color: #5777ba;
  font-size: 18px;
  padding-right: 4px;
}

.pricing ul .na {
  color: #ccc;
}

.pricing ul .na i {
  color: #ccc;
}

.pricing ul .na span {
  text-decoration: line-through;
}

.pricing .get-started-btn {
  background: #47536e;
  display: inline-block;
  padding: 6px 30px;
  border-radius: 20px;
  color: #fff;
  transition: none;
  font-size: 14px;
  font-weight: 400;
  font-family: "Raleway", sans-serif;
  transition: 0.3s;
}

.pricing .get-started-btn:hover {
  background: #5777ba;
}

.pricing .featured {
  z-index: 1;
  margin: -30px -5px 0 -5px;
}

.pricing .featured .get-started-btn {
  background: #5777ba;
}

.pricing .featured .get-started-btn:hover {
  background: #748ec6;
}

@media (max-width: 992px) {
  .pricing .box {
    max-width: 60%;
    margin: 0 auto 30px auto;
  }
}

@media (max-width: 767px) {
  .pricing .box {
    max-width: 80%;
    margin: 0 auto 30px auto;
  }
}

@media (max-width: 420px) {
  .pricing .box {
    max-width: 100%;
    margin: 0 auto 30px auto;
  }
}

/*--------------------------------------------------------------
# Frequently Asked Questions
--------------------------------------------------------------*/
.faq .accordion-list {
  padding: 0 100px;
}

.faq .accordion-list ul {
  padding: 0;
  list-style: none;
}

.faq .accordion-list li + li {
  margin-top: 15px;
}

.faq .accordion-list li {
  padding: 20px;
  background: #fff;
  border-radius: 4px;
  position: relative;
}

.faq .accordion-list a {
  display: block;
  position: relative;
  font-family: "Poppins", sans-serif;
  font-size: 16px;
  line-height: 24px;
  font-weight: 500;
  padding: 0 30px;
  outline: none;
}

.faq .accordion-list .icon-help {
  font-size: 24px;
  position: absolute;
  right: 0;
  left: 20px;
  color: #b1c0df;
}

.faq .accordion-list .icon-show, .faq .accordion-list .icon-close {
  font-size: 24px;
  position: absolute;
  right: 0;
  top: 0;
}

.faq .accordion-list p {
  margin-bottom: 0;
  padding: 10px 0 0 0;
}

.faq .accordion-list .icon-show {
  display: none;
}

.faq .accordion-list a.collapsed {
  color: #343a40;
}

.faq .accordion-list a.collapsed:hover {
  color: #5777ba;
}

.faq .accordion-list a.collapsed .icon-show {
  display: inline-block;
}

.faq .accordion-list a.collapsed .icon-close {
  display: none;
}

@media (max-width: 1200px) {
  .faq .accordion-list {
    padding: 0;
  }
}

/*--------------------------------------------------------------
# Contact
--------------------------------------------------------------*/
.contact .info {
  padding: 20px 40px;
  background: #f1f3f6;
  color: #47536e;
  text-align: center;
  border: 1px solid #fff;
}

.contact .info i {
  font-size: 48px;
  color: #9fb2d8;
  margin-bottom: 15px;
}

.contact .info h4 {
  padding: 0;
  margin: 0 0 10px 0;
  font-size: 16px;
  font-weight: 600;
  text-transform: uppercase;
  font-family: "Poppins", sans-serif;
}

.contact .info p {
  font-size: 15px;
}

.contact .php-email-form {
  width: 100%;
}

.contact .php-email-form .validate {
  display: none;
  color: red;
  margin: 0;
  font-weight: 400;
  font-size: 13px;
}

.contact .php-email-form .error-message {
  display: none;
  color: #fff;
  background: #ed3c0d;
  text-align: left;
  padding: 15px;
  font-weight: 600;
}

.contact .php-email-form .error-message br + br {
  margin-top: 25px;
}

.contact .php-email-form .sent-message {
  display: none;
  color: #fff;
  background: #18d26e;
  text-align: center;
  padding: 15px;
  font-weight: 600;
}

.contact .php-email-form .loading {
  display: none;
  background: #fff;
  text-align: center;
  padding: 15px;
}

.contact .php-email-form .loading:before {
  content: "";
  display: inline-block;
  border-radius: 50%;
  width: 24px;
  height: 24px;
  margin: 0 10px -6px 0;
  border: 3px solid #18d26e;
  border-top-color: #eee;
  -webkit-animation: animate-loading 1s linear infinite;
  animation: animate-loading 1s linear infinite;
}

.contact .php-email-form label {
  font-family: "Poppins", sans-serif;
  margin-bottom: 5px;
  color: #8a8c95;
}

.contact .php-email-form input, .contact .php-email-form textarea {
  border-radius: 0;
  box-shadow: none;
  font-size: 14px;
}

.contact .php-email-form input::focus, .contact .php-email-form textarea::focus {
  background-color: #5777ba;
}

.contact .php-email-form input {
  padding: 20px 15px;
}

.contact .php-email-form textarea {
  padding: 12px 15px;
}

.contact .php-email-form button[type="submit"] {
  background: #fff;
  border: 2px solid #5777ba;
  padding: 10px 24px;
  color: #5777ba;
  transition: 0.4s;
  border-radius: 50px;
  margin-top: 5px;
}

.contact .php-email-form button[type="submit"]:hover {
  background: #5777ba;
  color: #fff;
}

@media (max-width: 1024px) {
  .contact .php-email-form {
    padding: 30px 15px 15px 15px;
  }
}

@media (max-width: 768px) {
  .contact .php-email-form {
    padding: 15px 0 0 0;
  }
}

@-webkit-keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

@keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

/*--------------------------------------------------------------
# Footer
--------------------------------------------------------------*/
#footer {
  background: #fff;
  padding: 0 0 30px 0;
  color: #47536e;
  font-size: 14px;
  background: #eff2f8;
}

#footer .footer-newsletter {
  padding: 50px 0;
  background: #eff2f8;
  text-align: center;
  font-size: 15px;
}

#footer .footer-newsletter h4 {
  font-size: 24px;
  margin: 0 0 20px 0;
  padding: 0;
  line-height: 1;
  font-weight: 600;
  color: #47536e;
}

#footer .footer-newsletter form {
  margin-top: 30px;
  background: #fff;
  padding: 6px 10px;
  position: relative;
  border-radius: 50px;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
  text-align: left;
}

#footer .footer-newsletter form input[type="email"] {
  border: 0;
  padding: 4px 8px;
  width: calc(100% - 100px);
}

#footer .footer-newsletter form input[type="submit"] {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  border: 0;
  background: none;
  font-size: 16px;
  padding: 0 20px;
  background: #5777ba;
  color: #fff;
  transition: 0.3s;
  border-radius: 50px;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
}

#footer .footer-newsletter form input[type="submit"]:hover {
  background: #415f9d;
}

#footer .footer-top {
  padding: 60px 0 30px 0;
  background: #fff;
}

#footer .footer-top .footer-contact {
  margin-bottom: 30px;
}

#footer .footer-top .footer-contact h4 {
  font-size: 22px;
  margin: 0 0 30px 0;
  padding: 2px 0 2px 0;
  line-height: 1;
  font-weight: 700;
  color: #47536e;
}

#footer .footer-top .footer-contact p {
  font-size: 14px;
  line-height: 24px;
  margin-bottom: 0;
  font-family: "Raleway", sans-serif;
  color: #8a8c95;
}

#footer .footer-top h4 {
  font-size: 16px;
  font-weight: bold;
  color: #47536e;
  position: relative;
  padding-bottom: 12px;
}

#footer .footer-top .footer-links {
  margin-bottom: 30px;
}

#footer .footer-top .footer-links ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

#footer .footer-top .footer-links ul i {
  padding-right: 2px;
  color: #9fb2d8;
  font-size: 18px;
  line-height: 1;
}

#footer .footer-top .footer-links ul li {
  padding: 10px 0;
  display: flex;
  align-items: center;
}

#footer .footer-top .footer-links ul li:first-child {
  padding-top: 0;
}

#footer .footer-top .footer-links ul a {
  color: #8a8c95;
  transition: 0.3s;
  display: inline-block;
  line-height: 1;
}

#footer .footer-top .footer-links ul a:hover {
  text-decoration: none;
  color: #5777ba;
}

#footer .footer-top .social-links a {
  font-size: 18px;
  display: inline-block;
  background: #5777ba;
  color: #fff;
  line-height: 1;
  padding: 8px 0;
  margin-right: 4px;
  border-radius: 50%;
  text-align: center;
  width: 36px;
  height: 36px;
  transition: 0.3s;
}

#footer .footer-top .social-links a:hover {
  background: #27282c;
  color: #fff;
  text-decoration: none;
}

#footer .copyright {
  text-align: center;
  float: left;
  color: #47536e;
}

#footer .credits {
  float: right;
  text-align: center;
  font-size: 13px;
  color: #47536e;
}

@media (max-width: 768px) {
  #footer .copyright, #footer .credits {
    float: none;
    text-align: center;
    padding: 5px 0;
  }
}

    </style>

<div class="page-content">

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center" style="
  background: url(/assets1/back-wall.png);
  background-size: cover;">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1 aos-init aos-animate" data-aos="fade-up">
                    <div>
                        <h1>Introduction to Forex Market</h1>
                        <h2>Before entering the Forex market, it is very important to learn about this market. Only in this way can trading opportunities and trading options be determined.</h2>
                        <a href="#faq" class="download-btn">TRAINING CALENDAR</a>
                        <a href="#contact" class="download-btn"> GET FREE TRAINING</a>
                    </div>
                </div>
                <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img aos-init aos-animate" data-aos="fade-up">
                    <img src="/assets1/back-hero.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->



    <section id="details" class="details">
        <div class="container">

            <div class="row content">
                <div class="col-md-4 aos-init aos-animate" data-aos="fade-right">
                    <img src="/assets1/img/details-1.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-8 pt-4 aos-init aos-animate" data-aos="fade-up">
                    <h3> Get FREE Training in the Trade market exceeding $5 Trillion.</h3>
                    <p class="font-italic">
                        The daily trade volume of the foreign exchange market, also known as FX or Forex, has exceeded 5 trillion US dollars and has become the largest market in the world where trade is made. That's why timing and movement planning is so important.
                    </p>
                    <ul>
                        <li><i class="icofont-check"></i> Trade 5/24.</li>
                        <li><i class="icofont-check"></i> Earn more in the stock market without paying commissions.</li>
                        <li><i class="icofont-check"></i> Make transactions without manipulation.</li>
                        <li><i class="icofont-check"></i> Continue your education from all platforms and try yourself.</li>
                    </ul>
                    <p>
                        The impact of large players on small markets is visible. However, the FX market is such a large market that it is almost impossible for major players to influence or manipulate the market.
                    </p>
                </div>
            </div>
        </div>


    </section>
    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
        <div class="container">

            <div class="section-title">

                <h2>Forex Education Program</h2>
                <p>Are you ready to enter the Forex Trading market with full equipment?. Access the benefits of Forex and all your questions from a single point.</p>
            </div>

            <div class="accordion-list">
                <ul>
                    <li data-aos="fade-up" class="aos-init aos-animate">
                        <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapse" href="#accordion-list-1">WHAT IS LIQUIDITY &amp; LEVERAGE SYSTEM? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="accordion-list-1" class="collapse show" data-parent=".accordion-list">
                            <p>
                                <b>Liquidity ;</b>
                                A security is said to be liquid if it can be liquidated without losing too much of its value. In other words; you can turn it into cash at any time and you will not encounter a lack of demand while turning it into cash,
                                Products that find buyers easily are liquid products.
                                <br>
                                All assets that can be converted into cash are considered liquidity.
                                <br>
                                The high fluency attracts the most retail traders and the market fluency is maintained as the trading volume increases.
                            </p>
                            <p>
                                <b>Leverage System;</b>
                                Forex markets are leveraged markets. Thanks to leverage, transactions can be made up to 200 times the investment amount without any borrowing. And the smallest in the invested instrument
                                Even price changes can yield big gains.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="100" class="aos-init aos-animate">
                        <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#accordion-list-2" class="collapsed">Benefits of Forex?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="accordion-list-2" class="collapse" data-parent=".accordion-list">
                            <p>
                                No manipulation ;
                                The impact of large players on small markets is visible. However, the FX market is such a large market that it is almost impossible for major players to influence or manipulate the market.
                            </p>
                            <p>
                                Low Transaction Fee;
                                FX bankers earn income from the differences between their trading transactions. The transaction fee is very low compared to traditional stock bankers as the trading volume is very high.
                            </p>
                            <p>
                                Low Input Requirement;
                                Thanks to the high leverage levels, the minimum investment amounts are very low, which is an important opportunity to reduce risk.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="200" class="aos-init aos-animate">
                        <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#accordion-list-3" class="collapsed">WHAT CAN BE BUY AND SOLD? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="accordion-list-3" class="collapse" data-parent=".accordion-list">
                            <p>
                                A country's currency represents the current and future economic status of that market. A weak economy indicates a weak currency, and a strong economy indicates a strong currency. The FX market deals with this weakness and strength situation.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="300" class="aos-init aos-animate">
                        <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#accordion-list-4" class="collapsed">TYPES OF CURRENCY ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="accordion-list-4" class="collapse" data-parent=".accordion-list">
                            <p>
                                There are two types of currencies. Major currency and minor currency
                                <br>
                                Major currencies make up about 90% of the FX market. They are the currencies of major global economies. United States (USD), Japan (JPY), Eurozone (EUR), Canada (CAD), Australia (AUD), Switzerland (CHF), and New Zealand (NZD)
                                Minor currencies, such as the Mexican peso and the Hong Kong dollar, are low-traded units, so liquidity is low and transaction fees are high.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="400" class="aos-init aos-animate">
                        <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#accordion-list-5" class="collapsed">PARITES ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="accordion-list-5" class="collapse" data-parent=".accordion-list">
                            <p> A currency is bought and sold against another currency. The one written on the left of the parity is called the quota currency, the one on the right of the base currency. The base currency quota is stronger than the foreign currency. For example, the stronger currency in the EURUSD parity is the euro and is written to the left. If the EURUSD parity is traded with 1.3000, it means that 1.30 US dollars can be bought with 1 euro. The base currency is the currency used in the transaction. So if we think that the euro will strengthen against the dollar, we start buying euros and selling dollars. If we think that the euro will weaken against the dollar, we start buying dollars and selling euros. </p>
                        </div>
                    </li>

                </ul>
            </div>

        </div>
    </section><!-- End Frequently Asked Questions Section -->
    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
        <div class="container">

            <div class="section-title">
                <h2>Education Levels</h2>
                <p>We have divided the Education levels, which you can benefit completely free of charge, into 3 stages according to your information.</p>
            </div>

            <div class="row no-gutters">

                <div class="col-lg-4 box aos-init aos-animate" data-aos="fade-right">
                    <h3>Strong Capitals</h3>
                    <h4>Beginning<span>Level</span></h4>
                    <ul>
                        <li><i class="bx bx-check"></i> 1-) Platform Usage Training</li>
                        <li><i class="bx bx-check"></i> a. Overview</li>
                        <li><i class="bx bx-check"></i> b. Introduction to Graphics</li>
                        <li><i class="bx bx-check"></i> c. Graphics Features</li>
                        <li>
                            <i class="bx bx-check"></i> d. Layout of Graphics Windows
                        </li>
                        <li class="na"><i class="bx bx-x"></i> <span>and more</span></li>

                        <li>
                            <i class="bx bx-check"></i> 2-) Analysis Tools
                        </li>
                        <li>
                            <i class="bx bx-check"></i> a. Drawing tools
                        </li>
                        <li>
                            <i class="bx bx-check"></i> b. How to pronounce trend
                        </li>
                        <li>
                            <i class="bx bx-check"></i> c. What is support resistance
                        </li>
                        <li>
                            <i class="bx bx-check"></i> d. What is trend? How to follow the trend?

                        </li>
                        <li><i class="bx bx-check"></i> e. Formations</li>
                        <li><i class="bx bx-check"></i> f. Indicators</li>
                        <li>
                            <i class="bx bx-check"></i> g. News feed and economic calendar
                        </li>


                        <li class="na"><i class="bx bx-x"></i> <span>and more</span></li>
                    </ul>
                    <a href="#contact" class="get-started-btn">FREE</a>
                </div>

                <div class="col-lg-4 box featured aos-init aos-animate" data-aos="fade-up">
                    <h3>Strong Capitals</h3>
                    <h4>Middle<span>Level</span></h4>
                    <ul>
                        <li>
                            <i class="bx bx-check"></i> 1) Indicators
                        </li>
                        <li><i class="bx bx-check"></i> 2) Oscillators</li>
                        <li><i class="bx bx-check"></i>3) Macd</li>
                        <li>
                            <i class="bx bx-check"></i> 4) Moving average
                        </li>
                        <li><i class="bx bx-check"></i> 5) Rsı</li>
                        <li>
                            <i class="bx bx-check"></i> 6) Bollinger band
                        </li>
                        <li>
                            <i class="bx bx-check"></i> 7) Strategize with formations

                        </li>
                        <li>
                            <i class="bx bx-check"></i> 8) Interpreting economic data

                        </li>
                        <li>
                            <i class="bx bx-check"></i> 9) Fibonacci

                        </li>
                    </ul>
                    <a href="#contact" class="get-started-btn">FREE</a>
                </div>

                <div class="col-lg-4 box aos-init aos-animate" data-aos="fade-left">
                    <h3>Strong Capitals</h3>
                    <h4><span>Advanced</span></h4>
                    <ul>
                        <li>
                            <i class="bx bx-check"></i> Create a trading strategy
                        </li>
                        <li>
                            <i class="bx bx-check"></i> Risk management
                        </li>
                        <li>
                            <i class="bx bx-check"></i> Transactional Psychology
                        </li>
                        <li>
                            <i class="bx bx-check"></i> Elliott wave theory
                        </li>
                        <li><i class="bx bx-check"></i> Ichimoku Kinko Hyo</li>
                    </ul>
                    <a href="#contact" class="get-started-btn">FREE</a>
                </div>

            </div>

        </div>
    </section>
    <!-- End Pricing Section -->
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>We will call you</h2>
                <p>Improve your place in the Forex Trading Market with Expert Trainers for Free. Send us your information by filling out the form below and we will call you.</p>
            </div>

            <div class="row">
                <!--

                <div class="col-lg-6">
                            <div class="row">
                              <div class="col-lg-6 info" data-aos="fade-up">
                                <i class="bx bx-map"></i>
                                <h4>Address</h4>
                                <p>A108 Adam Street,<br>New York, NY 535022</p>
                              </div>
                              <div class="col-lg-6 info" data-aos="fade-up" data-aos-delay="100">
                                <i class="bx bx-phone"></i>
                                <h4>Call Us</h4>
                                <p>+1 5589 55488 55<br>+1 5589 22548 64</p>
                              </div>
                              <div class="col-lg-6 info" data-aos="fade-up" data-aos-delay="200">
                                <i class="bx bx-envelope"></i>
                                <h4>Email Us</h4>
                                <p>contact@example.com<br>info@example.com</p>
                              </div>
                              <div class="col-lg-6 info" data-aos="fade-up" data-aos-delay="300">
                                <i class="bx bx-time-five"></i>
                                <h4>Working Hours</h4>
                                <p>Mon - Fri: 9AM to 5PM<br>Sunday: 9AM to 1PM</p>
                              </div>
                            </div>
                          </div>
                -->


                <div class="col-lg-12">
                 <form action="/Training" class="php-email-form1" method="post" novalidate="novalidate"><input name="__RequestVerificationToken" type="hidden" value="7AizZKNXXaKxlNd3RGB05GQ6Nfrc1iVyvA5B46OAcHrY5Xgv71owH4UrqNW4NCOdLNFHmtFJEwHfDkQdCEWMkVXAsaAdQxYxgkTsT-ZkNjw1"><input id="returnUrl" name="returnUrl" type="hidden" value="/en/Training/Index"><input id="PhoneCode" name="PhoneCode" type="hidden" value="+44">    <div class="form-group">
        <input class="form-control" data-val="true" data-val-required="Name is Required" id="Name" name="Name" placeholder="Name" type="text" value="">
        <span class="field-validation-valid" data-valmsg-for="Name" data-valmsg-replace="true"></span>
    </div>
    <div class="form-group">
        <input class="form-control" data-val="true" data-val-email="Email is not valid email" data-val-required="Email is Required" id="Email" name="Email" placeholder="Email" type="text" value="">
        <span class="field-validation-valid" data-valmsg-for="Email" data-valmsg-replace="true"></span>
    </div>
    <div class="form-group">
        <div class="intl-tel-input allow-dropdown separate-dial-code iti-sdc-3"><div class="flag-container"><div class="selected-flag" tabindex="0" title="United Kingdom: +44"><div class="iti-flag gb"></div><div class="selected-dial-code">+44</div><div class="iti-arrow"></div></div><ul class="country-list hide"><li class="country preferred active" data-dial-code="44" data-country-code="gb"><div class="flag-box"><div class="iti-flag gb"></div></div><span class="country-name">United Kingdom</span><span class="dial-code">+44</span></li><li class="country preferred" data-dial-code="1" data-country-code="us"><div class="flag-box"><div class="iti-flag us"></div></div><span class="country-name">United States</span><span class="dial-code">+1</span></li><li class="country preferred" data-dial-code="90" data-country-code="tr"><div class="flag-box"><div class="iti-flag tr"></div></div><span class="country-name">Turkey (Türkiye)</span><span class="dial-code">+90</span></li><li class="divider"></li><li class="country" data-dial-code="93" data-country-code="af"><div class="flag-box"><div class="iti-flag af"></div></div><span class="country-name">Afghanistan (&#x202B;افغانستان&#x202C;&lrm;)</span><span class="dial-code">+93</span></li><li class="country" data-dial-code="355" data-country-code="al"><div class="flag-box"><div class="iti-flag al"></div></div><span class="country-name">Albania (Shqipëri)</span><span class="dial-code">+355</span></li><li class="country" data-dial-code="213" data-country-code="dz"><div class="flag-box"><div class="iti-flag dz"></div></div><span class="country-name">Algeria (&#x202B;الجزائر&#x202C;&lrm;)</span><span class="dial-code">+213</span></li><li class="country" data-dial-code="1684" data-country-code="as"><div class="flag-box"><div class="iti-flag as"></div></div><span class="country-name">American Samoa</span><span class="dial-code">+1684</span></li><li class="country" data-dial-code="376" data-country-code="ad"><div class="flag-box"><div class="iti-flag ad"></div></div><span class="country-name">Andorra</span><span class="dial-code">+376</span></li><li class="country" data-dial-code="244" data-country-code="ao"><div class="flag-box"><div class="iti-flag ao"></div></div><span class="country-name">Angola</span><span class="dial-code">+244</span></li><li class="country" data-dial-code="1264" data-country-code="ai"><div class="flag-box"><div class="iti-flag ai"></div></div><span class="country-name">Anguilla</span><span class="dial-code">+1264</span></li><li class="country" data-dial-code="1268" data-country-code="ag"><div class="flag-box"><div class="iti-flag ag"></div></div><span class="country-name">Antigua and Barbuda</span><span class="dial-code">+1268</span></li><li class="country" data-dial-code="54" data-country-code="ar"><div class="flag-box"><div class="iti-flag ar"></div></div><span class="country-name">Argentina</span><span class="dial-code">+54</span></li><li class="country" data-dial-code="374" data-country-code="am"><div class="flag-box"><div class="iti-flag am"></div></div><span class="country-name">Armenia (Հայաստան)</span><span class="dial-code">+374</span></li><li class="country" data-dial-code="297" data-country-code="aw"><div class="flag-box"><div class="iti-flag aw"></div></div><span class="country-name">Aruba</span><span class="dial-code">+297</span></li><li class="country" data-dial-code="61" data-country-code="au"><div class="flag-box"><div class="iti-flag au"></div></div><span class="country-name">Australia</span><span class="dial-code">+61</span></li><li class="country" data-dial-code="43" data-country-code="at"><div class="flag-box"><div class="iti-flag at"></div></div><span class="country-name">Austria (Österreich)</span><span class="dial-code">+43</span></li><li class="country" data-dial-code="994" data-country-code="az"><div class="flag-box"><div class="iti-flag az"></div></div><span class="country-name">Azerbaijan (Azərbaycan)</span><span class="dial-code">+994</span></li><li class="country" data-dial-code="1242" data-country-code="bs"><div class="flag-box"><div class="iti-flag bs"></div></div><span class="country-name">Bahamas</span><span class="dial-code">+1242</span></li><li class="country" data-dial-code="973" data-country-code="bh"><div class="flag-box"><div class="iti-flag bh"></div></div><span class="country-name">Bahrain (&#x202B;البحرين&#x202C;&lrm;)</span><span class="dial-code">+973</span></li><li class="country" data-dial-code="880" data-country-code="bd"><div class="flag-box"><div class="iti-flag bd"></div></div><span class="country-name">Bangladesh (বাংলাদেশ)</span><span class="dial-code">+880</span></li><li class="country" data-dial-code="1246" data-country-code="bb"><div class="flag-box"><div class="iti-flag bb"></div></div><span class="country-name">Barbados</span><span class="dial-code">+1246</span></li><li class="country" data-dial-code="375" data-country-code="by"><div class="flag-box"><div class="iti-flag by"></div></div><span class="country-name">Belarus (Беларусь)</span><span class="dial-code">+375</span></li><li class="country" data-dial-code="32" data-country-code="be"><div class="flag-box"><div class="iti-flag be"></div></div><span class="country-name">Belgium (België)</span><span class="dial-code">+32</span></li><li class="country" data-dial-code="501" data-country-code="bz"><div class="flag-box"><div class="iti-flag bz"></div></div><span class="country-name">Belize</span><span class="dial-code">+501</span></li><li class="country" data-dial-code="229" data-country-code="bj"><div class="flag-box"><div class="iti-flag bj"></div></div><span class="country-name">Benin (Bénin)</span><span class="dial-code">+229</span></li><li class="country" data-dial-code="1441" data-country-code="bm"><div class="flag-box"><div class="iti-flag bm"></div></div><span class="country-name">Bermuda</span><span class="dial-code">+1441</span></li><li class="country" data-dial-code="975" data-country-code="bt"><div class="flag-box"><div class="iti-flag bt"></div></div><span class="country-name">Bhutan (འབྲུག)</span><span class="dial-code">+975</span></li><li class="country" data-dial-code="591" data-country-code="bo"><div class="flag-box"><div class="iti-flag bo"></div></div><span class="country-name">Bolivia</span><span class="dial-code">+591</span></li><li class="country" data-dial-code="387" data-country-code="ba"><div class="flag-box"><div class="iti-flag ba"></div></div><span class="country-name">Bosnia and Herzegovina (Босна и Херцеговина)</span><span class="dial-code">+387</span></li><li class="country" data-dial-code="267" data-country-code="bw"><div class="flag-box"><div class="iti-flag bw"></div></div><span class="country-name">Botswana</span><span class="dial-code">+267</span></li><li class="country" data-dial-code="55" data-country-code="br"><div class="flag-box"><div class="iti-flag br"></div></div><span class="country-name">Brazil (Brasil)</span><span class="dial-code">+55</span></li><li class="country" data-dial-code="246" data-country-code="io"><div class="flag-box"><div class="iti-flag io"></div></div><span class="country-name">British Indian Ocean Territory</span><span class="dial-code">+246</span></li><li class="country" data-dial-code="1284" data-country-code="vg"><div class="flag-box"><div class="iti-flag vg"></div></div><span class="country-name">British Virgin Islands</span><span class="dial-code">+1284</span></li><li class="country" data-dial-code="673" data-country-code="bn"><div class="flag-box"><div class="iti-flag bn"></div></div><span class="country-name">Brunei</span><span class="dial-code">+673</span></li><li class="country" data-dial-code="359" data-country-code="bg"><div class="flag-box"><div class="iti-flag bg"></div></div><span class="country-name">Bulgaria (България)</span><span class="dial-code">+359</span></li><li class="country" data-dial-code="226" data-country-code="bf"><div class="flag-box"><div class="iti-flag bf"></div></div><span class="country-name">Burkina Faso</span><span class="dial-code">+226</span></li><li class="country" data-dial-code="257" data-country-code="bi"><div class="flag-box"><div class="iti-flag bi"></div></div><span class="country-name">Burundi (Uburundi)</span><span class="dial-code">+257</span></li><li class="country" data-dial-code="855" data-country-code="kh"><div class="flag-box"><div class="iti-flag kh"></div></div><span class="country-name">Cambodia (កម្ពុជា)</span><span class="dial-code">+855</span></li><li class="country" data-dial-code="237" data-country-code="cm"><div class="flag-box"><div class="iti-flag cm"></div></div><span class="country-name">Cameroon (Cameroun)</span><span class="dial-code">+237</span></li><li class="country" data-dial-code="1" data-country-code="ca"><div class="flag-box"><div class="iti-flag ca"></div></div><span class="country-name">Canada</span><span class="dial-code">+1</span></li><li class="country" data-dial-code="238" data-country-code="cv"><div class="flag-box"><div class="iti-flag cv"></div></div><span class="country-name">Cape Verde (Kabu Verdi)</span><span class="dial-code">+238</span></li><li class="country" data-dial-code="599" data-country-code="bq"><div class="flag-box"><div class="iti-flag bq"></div></div><span class="country-name">Caribbean Netherlands</span><span class="dial-code">+599</span></li><li class="country" data-dial-code="1345" data-country-code="ky"><div class="flag-box"><div class="iti-flag ky"></div></div><span class="country-name">Cayman Islands</span><span class="dial-code">+1345</span></li><li class="country" data-dial-code="236" data-country-code="cf"><div class="flag-box"><div class="iti-flag cf"></div></div><span class="country-name">Central African Republic (République centrafricaine)</span><span class="dial-code">+236</span></li><li class="country" data-dial-code="235" data-country-code="td"><div class="flag-box"><div class="iti-flag td"></div></div><span class="country-name">Chad (Tchad)</span><span class="dial-code">+235</span></li><li class="country" data-dial-code="56" data-country-code="cl"><div class="flag-box"><div class="iti-flag cl"></div></div><span class="country-name">Chile</span><span class="dial-code">+56</span></li><li class="country" data-dial-code="86" data-country-code="cn"><div class="flag-box"><div class="iti-flag cn"></div></div><span class="country-name">China (中国)</span><span class="dial-code">+86</span></li><li class="country" data-dial-code="61" data-country-code="cx"><div class="flag-box"><div class="iti-flag cx"></div></div><span class="country-name">Christmas Island</span><span class="dial-code">+61</span></li><li class="country" data-dial-code="61" data-country-code="cc"><div class="flag-box"><div class="iti-flag cc"></div></div><span class="country-name">Cocos (Keeling) Islands</span><span class="dial-code">+61</span></li><li class="country" data-dial-code="57" data-country-code="co"><div class="flag-box"><div class="iti-flag co"></div></div><span class="country-name">Colombia</span><span class="dial-code">+57</span></li><li class="country" data-dial-code="269" data-country-code="km"><div class="flag-box"><div class="iti-flag km"></div></div><span class="country-name">Comoros (&#x202B;جزر القمر&#x202C;&lrm;)</span><span class="dial-code">+269</span></li><li class="country" data-dial-code="243" data-country-code="cd"><div class="flag-box"><div class="iti-flag cd"></div></div><span class="country-name">Congo (DRC) (Jamhuri ya Kidemokrasia ya Kongo)</span><span class="dial-code">+243</span></li><li class="country" data-dial-code="242" data-country-code="cg"><div class="flag-box"><div class="iti-flag cg"></div></div><span class="country-name">Congo (Republic) (Congo-Brazzaville)</span><span class="dial-code">+242</span></li><li class="country" data-dial-code="682" data-country-code="ck"><div class="flag-box"><div class="iti-flag ck"></div></div><span class="country-name">Cook Islands</span><span class="dial-code">+682</span></li><li class="country" data-dial-code="506" data-country-code="cr"><div class="flag-box"><div class="iti-flag cr"></div></div><span class="country-name">Costa Rica</span><span class="dial-code">+506</span></li><li class="country" data-dial-code="225" data-country-code="ci"><div class="flag-box"><div class="iti-flag ci"></div></div><span class="country-name">Côte d’Ivoire</span><span class="dial-code">+225</span></li><li class="country" data-dial-code="385" data-country-code="hr"><div class="flag-box"><div class="iti-flag hr"></div></div><span class="country-name">Croatia (Hrvatska)</span><span class="dial-code">+385</span></li><li class="country" data-dial-code="53" data-country-code="cu"><div class="flag-box"><div class="iti-flag cu"></div></div><span class="country-name">Cuba</span><span class="dial-code">+53</span></li><li class="country" data-dial-code="599" data-country-code="cw"><div class="flag-box"><div class="iti-flag cw"></div></div><span class="country-name">Curaçao</span><span class="dial-code">+599</span></li><li class="country" data-dial-code="357" data-country-code="cy"><div class="flag-box"><div class="iti-flag cy"></div></div><span class="country-name">Cyprus (Κύπρος)</span><span class="dial-code">+357</span></li><li class="country" data-dial-code="420" data-country-code="cz"><div class="flag-box"><div class="iti-flag cz"></div></div><span class="country-name">Czech Republic (Česká republika)</span><span class="dial-code">+420</span></li><li class="country" data-dial-code="45" data-country-code="dk"><div class="flag-box"><div class="iti-flag dk"></div></div><span class="country-name">Denmark (Danmark)</span><span class="dial-code">+45</span></li><li class="country" data-dial-code="253" data-country-code="dj"><div class="flag-box"><div class="iti-flag dj"></div></div><span class="country-name">Djibouti</span><span class="dial-code">+253</span></li><li class="country" data-dial-code="1767" data-country-code="dm"><div class="flag-box"><div class="iti-flag dm"></div></div><span class="country-name">Dominica</span><span class="dial-code">+1767</span></li><li class="country" data-dial-code="1" data-country-code="do"><div class="flag-box"><div class="iti-flag do"></div></div><span class="country-name">Dominican Republic (República Dominicana)</span><span class="dial-code">+1</span></li><li class="country" data-dial-code="593" data-country-code="ec"><div class="flag-box"><div class="iti-flag ec"></div></div><span class="country-name">Ecuador</span><span class="dial-code">+593</span></li><li class="country" data-dial-code="20" data-country-code="eg"><div class="flag-box"><div class="iti-flag eg"></div></div><span class="country-name">Egypt (&#x202B;مصر&#x202C;&lrm;)</span><span class="dial-code">+20</span></li><li class="country" data-dial-code="503" data-country-code="sv"><div class="flag-box"><div class="iti-flag sv"></div></div><span class="country-name">El Salvador</span><span class="dial-code">+503</span></li><li class="country" data-dial-code="240" data-country-code="gq"><div class="flag-box"><div class="iti-flag gq"></div></div><span class="country-name">Equatorial Guinea (Guinea Ecuatorial)</span><span class="dial-code">+240</span></li><li class="country" data-dial-code="291" data-country-code="er"><div class="flag-box"><div class="iti-flag er"></div></div><span class="country-name">Eritrea</span><span class="dial-code">+291</span></li><li class="country" data-dial-code="372" data-country-code="ee"><div class="flag-box"><div class="iti-flag ee"></div></div><span class="country-name">Estonia (Eesti)</span><span class="dial-code">+372</span></li><li class="country" data-dial-code="251" data-country-code="et"><div class="flag-box"><div class="iti-flag et"></div></div><span class="country-name">Ethiopia</span><span class="dial-code">+251</span></li><li class="country" data-dial-code="500" data-country-code="fk"><div class="flag-box"><div class="iti-flag fk"></div></div><span class="country-name">Falkland Islands (Islas Malvinas)</span><span class="dial-code">+500</span></li><li class="country" data-dial-code="298" data-country-code="fo"><div class="flag-box"><div class="iti-flag fo"></div></div><span class="country-name">Faroe Islands (Føroyar)</span><span class="dial-code">+298</span></li><li class="country" data-dial-code="679" data-country-code="fj"><div class="flag-box"><div class="iti-flag fj"></div></div><span class="country-name">Fiji</span><span class="dial-code">+679</span></li><li class="country" data-dial-code="358" data-country-code="fi"><div class="flag-box"><div class="iti-flag fi"></div></div><span class="country-name">Finland (Suomi)</span><span class="dial-code">+358</span></li><li class="country" data-dial-code="33" data-country-code="fr"><div class="flag-box"><div class="iti-flag fr"></div></div><span class="country-name">France</span><span class="dial-code">+33</span></li><li class="country" data-dial-code="594" data-country-code="gf"><div class="flag-box"><div class="iti-flag gf"></div></div><span class="country-name">French Guiana (Guyane française)</span><span class="dial-code">+594</span></li><li class="country" data-dial-code="689" data-country-code="pf"><div class="flag-box"><div class="iti-flag pf"></div></div><span class="country-name">French Polynesia (Polynésie française)</span><span class="dial-code">+689</span></li><li class="country" data-dial-code="241" data-country-code="ga"><div class="flag-box"><div class="iti-flag ga"></div></div><span class="country-name">Gabon</span><span class="dial-code">+241</span></li><li class="country" data-dial-code="220" data-country-code="gm"><div class="flag-box"><div class="iti-flag gm"></div></div><span class="country-name">Gambia</span><span class="dial-code">+220</span></li><li class="country" data-dial-code="995" data-country-code="ge"><div class="flag-box"><div class="iti-flag ge"></div></div><span class="country-name">Georgia (საქართველო)</span><span class="dial-code">+995</span></li><li class="country" data-dial-code="49" data-country-code="de"><div class="flag-box"><div class="iti-flag de"></div></div><span class="country-name">Germany (Deutschland)</span><span class="dial-code">+49</span></li><li class="country" data-dial-code="233" data-country-code="gh"><div class="flag-box"><div class="iti-flag gh"></div></div><span class="country-name">Ghana (Gaana)</span><span class="dial-code">+233</span></li><li class="country" data-dial-code="350" data-country-code="gi"><div class="flag-box"><div class="iti-flag gi"></div></div><span class="country-name">Gibraltar</span><span class="dial-code">+350</span></li><li class="country" data-dial-code="30" data-country-code="gr"><div class="flag-box"><div class="iti-flag gr"></div></div><span class="country-name">Greece (Ελλάδα)</span><span class="dial-code">+30</span></li><li class="country" data-dial-code="299" data-country-code="gl"><div class="flag-box"><div class="iti-flag gl"></div></div><span class="country-name">Greenland (Kalaallit Nunaat)</span><span class="dial-code">+299</span></li><li class="country" data-dial-code="1473" data-country-code="gd"><div class="flag-box"><div class="iti-flag gd"></div></div><span class="country-name">Grenada</span><span class="dial-code">+1473</span></li><li class="country" data-dial-code="590" data-country-code="gp"><div class="flag-box"><div class="iti-flag gp"></div></div><span class="country-name">Guadeloupe</span><span class="dial-code">+590</span></li><li class="country" data-dial-code="1671" data-country-code="gu"><div class="flag-box"><div class="iti-flag gu"></div></div><span class="country-name">Guam</span><span class="dial-code">+1671</span></li><li class="country" data-dial-code="502" data-country-code="gt"><div class="flag-box"><div class="iti-flag gt"></div></div><span class="country-name">Guatemala</span><span class="dial-code">+502</span></li><li class="country" data-dial-code="44" data-country-code="gg"><div class="flag-box"><div class="iti-flag gg"></div></div><span class="country-name">Guernsey</span><span class="dial-code">+44</span></li><li class="country" data-dial-code="224" data-country-code="gn"><div class="flag-box"><div class="iti-flag gn"></div></div><span class="country-name">Guinea (Guinée)</span><span class="dial-code">+224</span></li><li class="country" data-dial-code="245" data-country-code="gw"><div class="flag-box"><div class="iti-flag gw"></div></div><span class="country-name">Guinea-Bissau (Guiné Bissau)</span><span class="dial-code">+245</span></li><li class="country" data-dial-code="592" data-country-code="gy"><div class="flag-box"><div class="iti-flag gy"></div></div><span class="country-name">Guyana</span><span class="dial-code">+592</span></li><li class="country" data-dial-code="509" data-country-code="ht"><div class="flag-box"><div class="iti-flag ht"></div></div><span class="country-name">Haiti</span><span class="dial-code">+509</span></li><li class="country" data-dial-code="504" data-country-code="hn"><div class="flag-box"><div class="iti-flag hn"></div></div><span class="country-name">Honduras</span><span class="dial-code">+504</span></li><li class="country" data-dial-code="852" data-country-code="hk"><div class="flag-box"><div class="iti-flag hk"></div></div><span class="country-name">Hong Kong (香港)</span><span class="dial-code">+852</span></li><li class="country" data-dial-code="36" data-country-code="hu"><div class="flag-box"><div class="iti-flag hu"></div></div><span class="country-name">Hungary (Magyarország)</span><span class="dial-code">+36</span></li><li class="country" data-dial-code="354" data-country-code="is"><div class="flag-box"><div class="iti-flag is"></div></div><span class="country-name">Iceland (Ísland)</span><span class="dial-code">+354</span></li><li class="country" data-dial-code="91" data-country-code="in"><div class="flag-box"><div class="iti-flag in"></div></div><span class="country-name">India (भारत)</span><span class="dial-code">+91</span></li><li class="country" data-dial-code="62" data-country-code="id"><div class="flag-box"><div class="iti-flag id"></div></div><span class="country-name">Indonesia</span><span class="dial-code">+62</span></li><li class="country" data-dial-code="98" data-country-code="ir"><div class="flag-box"><div class="iti-flag ir"></div></div><span class="country-name">Iran (&#x202B;ایران&#x202C;&lrm;)</span><span class="dial-code">+98</span></li><li class="country" data-dial-code="964" data-country-code="iq"><div class="flag-box"><div class="iti-flag iq"></div></div><span class="country-name">Iraq (&#x202B;العراق&#x202C;&lrm;)</span><span class="dial-code">+964</span></li><li class="country" data-dial-code="353" data-country-code="ie"><div class="flag-box"><div class="iti-flag ie"></div></div><span class="country-name">Ireland</span><span class="dial-code">+353</span></li><li class="country" data-dial-code="44" data-country-code="im"><div class="flag-box"><div class="iti-flag im"></div></div><span class="country-name">Isle of Man</span><span class="dial-code">+44</span></li><li class="country" data-dial-code="972" data-country-code="il"><div class="flag-box"><div class="iti-flag il"></div></div><span class="country-name">Israel (&#x202B;ישראל&#x202C;&lrm;)</span><span class="dial-code">+972</span></li><li class="country" data-dial-code="39" data-country-code="it"><div class="flag-box"><div class="iti-flag it"></div></div><span class="country-name">Italy (Italia)</span><span class="dial-code">+39</span></li><li class="country" data-dial-code="1876" data-country-code="jm"><div class="flag-box"><div class="iti-flag jm"></div></div><span class="country-name">Jamaica</span><span class="dial-code">+1876</span></li><li class="country" data-dial-code="81" data-country-code="jp"><div class="flag-box"><div class="iti-flag jp"></div></div><span class="country-name">Japan (日本)</span><span class="dial-code">+81</span></li><li class="country" data-dial-code="44" data-country-code="je"><div class="flag-box"><div class="iti-flag je"></div></div><span class="country-name">Jersey</span><span class="dial-code">+44</span></li><li class="country" data-dial-code="962" data-country-code="jo"><div class="flag-box"><div class="iti-flag jo"></div></div><span class="country-name">Jordan (&#x202B;الأردن&#x202C;&lrm;)</span><span class="dial-code">+962</span></li><li class="country" data-dial-code="7" data-country-code="kz"><div class="flag-box"><div class="iti-flag kz"></div></div><span class="country-name">Kazakhstan (Казахстан)</span><span class="dial-code">+7</span></li><li class="country" data-dial-code="254" data-country-code="ke"><div class="flag-box"><div class="iti-flag ke"></div></div><span class="country-name">Kenya</span><span class="dial-code">+254</span></li><li class="country" data-dial-code="686" data-country-code="ki"><div class="flag-box"><div class="iti-flag ki"></div></div><span class="country-name">Kiribati</span><span class="dial-code">+686</span></li><li class="country" data-dial-code="383" data-country-code="xk"><div class="flag-box"><div class="iti-flag xk"></div></div><span class="country-name">Kosovo</span><span class="dial-code">+383</span></li><li class="country" data-dial-code="965" data-country-code="kw"><div class="flag-box"><div class="iti-flag kw"></div></div><span class="country-name">Kuwait (&#x202B;الكويت&#x202C;&lrm;)</span><span class="dial-code">+965</span></li><li class="country" data-dial-code="996" data-country-code="kg"><div class="flag-box"><div class="iti-flag kg"></div></div><span class="country-name">Kyrgyzstan (Кыргызстан)</span><span class="dial-code">+996</span></li><li class="country" data-dial-code="856" data-country-code="la"><div class="flag-box"><div class="iti-flag la"></div></div><span class="country-name">Laos (ລາວ)</span><span class="dial-code">+856</span></li><li class="country" data-dial-code="371" data-country-code="lv"><div class="flag-box"><div class="iti-flag lv"></div></div><span class="country-name">Latvia (Latvija)</span><span class="dial-code">+371</span></li><li class="country" data-dial-code="961" data-country-code="lb"><div class="flag-box"><div class="iti-flag lb"></div></div><span class="country-name">Lebanon (&#x202B;لبنان&#x202C;&lrm;)</span><span class="dial-code">+961</span></li><li class="country" data-dial-code="266" data-country-code="ls"><div class="flag-box"><div class="iti-flag ls"></div></div><span class="country-name">Lesotho</span><span class="dial-code">+266</span></li><li class="country" data-dial-code="231" data-country-code="lr"><div class="flag-box"><div class="iti-flag lr"></div></div><span class="country-name">Liberia</span><span class="dial-code">+231</span></li><li class="country" data-dial-code="218" data-country-code="ly"><div class="flag-box"><div class="iti-flag ly"></div></div><span class="country-name">Libya (&#x202B;ليبيا&#x202C;&lrm;)</span><span class="dial-code">+218</span></li><li class="country" data-dial-code="423" data-country-code="li"><div class="flag-box"><div class="iti-flag li"></div></div><span class="country-name">Liechtenstein</span><span class="dial-code">+423</span></li><li class="country" data-dial-code="370" data-country-code="lt"><div class="flag-box"><div class="iti-flag lt"></div></div><span class="country-name">Lithuania (Lietuva)</span><span class="dial-code">+370</span></li><li class="country" data-dial-code="352" data-country-code="lu"><div class="flag-box"><div class="iti-flag lu"></div></div><span class="country-name">Luxembourg</span><span class="dial-code">+352</span></li><li class="country" data-dial-code="853" data-country-code="mo"><div class="flag-box"><div class="iti-flag mo"></div></div><span class="country-name">Macau (澳門)</span><span class="dial-code">+853</span></li><li class="country" data-dial-code="389" data-country-code="mk"><div class="flag-box"><div class="iti-flag mk"></div></div><span class="country-name">Macedonia (FYROM) (Македонија)</span><span class="dial-code">+389</span></li><li class="country" data-dial-code="261" data-country-code="mg"><div class="flag-box"><div class="iti-flag mg"></div></div><span class="country-name">Madagascar (Madagasikara)</span><span class="dial-code">+261</span></li><li class="country" data-dial-code="265" data-country-code="mw"><div class="flag-box"><div class="iti-flag mw"></div></div><span class="country-name">Malawi</span><span class="dial-code">+265</span></li><li class="country" data-dial-code="60" data-country-code="my"><div class="flag-box"><div class="iti-flag my"></div></div><span class="country-name">Malaysia</span><span class="dial-code">+60</span></li><li class="country" data-dial-code="960" data-country-code="mv"><div class="flag-box"><div class="iti-flag mv"></div></div><span class="country-name">Maldives</span><span class="dial-code">+960</span></li><li class="country" data-dial-code="223" data-country-code="ml"><div class="flag-box"><div class="iti-flag ml"></div></div><span class="country-name">Mali</span><span class="dial-code">+223</span></li><li class="country" data-dial-code="356" data-country-code="mt"><div class="flag-box"><div class="iti-flag mt"></div></div><span class="country-name">Malta</span><span class="dial-code">+356</span></li><li class="country" data-dial-code="692" data-country-code="mh"><div class="flag-box"><div class="iti-flag mh"></div></div><span class="country-name">Marshall Islands</span><span class="dial-code">+692</span></li><li class="country" data-dial-code="596" data-country-code="mq"><div class="flag-box"><div class="iti-flag mq"></div></div><span class="country-name">Martinique</span><span class="dial-code">+596</span></li><li class="country" data-dial-code="222" data-country-code="mr"><div class="flag-box"><div class="iti-flag mr"></div></div><span class="country-name">Mauritania (&#x202B;موريتانيا&#x202C;&lrm;)</span><span class="dial-code">+222</span></li><li class="country" data-dial-code="230" data-country-code="mu"><div class="flag-box"><div class="iti-flag mu"></div></div><span class="country-name">Mauritius (Moris)</span><span class="dial-code">+230</span></li><li class="country" data-dial-code="262" data-country-code="yt"><div class="flag-box"><div class="iti-flag yt"></div></div><span class="country-name">Mayotte</span><span class="dial-code">+262</span></li><li class="country" data-dial-code="52" data-country-code="mx"><div class="flag-box"><div class="iti-flag mx"></div></div><span class="country-name">Mexico (México)</span><span class="dial-code">+52</span></li><li class="country" data-dial-code="691" data-country-code="fm"><div class="flag-box"><div class="iti-flag fm"></div></div><span class="country-name">Micronesia</span><span class="dial-code">+691</span></li><li class="country" data-dial-code="373" data-country-code="md"><div class="flag-box"><div class="iti-flag md"></div></div><span class="country-name">Moldova (Republica Moldova)</span><span class="dial-code">+373</span></li><li class="country" data-dial-code="377" data-country-code="mc"><div class="flag-box"><div class="iti-flag mc"></div></div><span class="country-name">Monaco</span><span class="dial-code">+377</span></li><li class="country" data-dial-code="976" data-country-code="mn"><div class="flag-box"><div class="iti-flag mn"></div></div><span class="country-name">Mongolia (Монгол)</span><span class="dial-code">+976</span></li><li class="country" data-dial-code="382" data-country-code="me"><div class="flag-box"><div class="iti-flag me"></div></div><span class="country-name">Montenegro (Crna Gora)</span><span class="dial-code">+382</span></li><li class="country" data-dial-code="1664" data-country-code="ms"><div class="flag-box"><div class="iti-flag ms"></div></div><span class="country-name">Montserrat</span><span class="dial-code">+1664</span></li><li class="country" data-dial-code="212" data-country-code="ma"><div class="flag-box"><div class="iti-flag ma"></div></div><span class="country-name">Morocco (&#x202B;المغرب&#x202C;&lrm;)</span><span class="dial-code">+212</span></li><li class="country" data-dial-code="258" data-country-code="mz"><div class="flag-box"><div class="iti-flag mz"></div></div><span class="country-name">Mozambique (Moçambique)</span><span class="dial-code">+258</span></li><li class="country" data-dial-code="95" data-country-code="mm"><div class="flag-box"><div class="iti-flag mm"></div></div><span class="country-name">Myanmar (Burma) (မြန်မာ)</span><span class="dial-code">+95</span></li><li class="country" data-dial-code="264" data-country-code="na"><div class="flag-box"><div class="iti-flag na"></div></div><span class="country-name">Namibia (Namibië)</span><span class="dial-code">+264</span></li><li class="country" data-dial-code="674" data-country-code="nr"><div class="flag-box"><div class="iti-flag nr"></div></div><span class="country-name">Nauru</span><span class="dial-code">+674</span></li><li class="country" data-dial-code="977" data-country-code="np"><div class="flag-box"><div class="iti-flag np"></div></div><span class="country-name">Nepal (नेपाल)</span><span class="dial-code">+977</span></li><li class="country" data-dial-code="31" data-country-code="nl"><div class="flag-box"><div class="iti-flag nl"></div></div><span class="country-name">Netherlands (Nederland)</span><span class="dial-code">+31</span></li><li class="country" data-dial-code="687" data-country-code="nc"><div class="flag-box"><div class="iti-flag nc"></div></div><span class="country-name">New Caledonia (Nouvelle-Calédonie)</span><span class="dial-code">+687</span></li><li class="country" data-dial-code="64" data-country-code="nz"><div class="flag-box"><div class="iti-flag nz"></div></div><span class="country-name">New Zealand</span><span class="dial-code">+64</span></li><li class="country" data-dial-code="505" data-country-code="ni"><div class="flag-box"><div class="iti-flag ni"></div></div><span class="country-name">Nicaragua</span><span class="dial-code">+505</span></li><li class="country" data-dial-code="227" data-country-code="ne"><div class="flag-box"><div class="iti-flag ne"></div></div><span class="country-name">Niger (Nijar)</span><span class="dial-code">+227</span></li><li class="country" data-dial-code="234" data-country-code="ng"><div class="flag-box"><div class="iti-flag ng"></div></div><span class="country-name">Nigeria</span><span class="dial-code">+234</span></li><li class="country" data-dial-code="683" data-country-code="nu"><div class="flag-box"><div class="iti-flag nu"></div></div><span class="country-name">Niue</span><span class="dial-code">+683</span></li><li class="country" data-dial-code="672" data-country-code="nf"><div class="flag-box"><div class="iti-flag nf"></div></div><span class="country-name">Norfolk Island</span><span class="dial-code">+672</span></li><li class="country" data-dial-code="850" data-country-code="kp"><div class="flag-box"><div class="iti-flag kp"></div></div><span class="country-name">North Korea (조선 민주주의 인민 공화국)</span><span class="dial-code">+850</span></li><li class="country" data-dial-code="1670" data-country-code="mp"><div class="flag-box"><div class="iti-flag mp"></div></div><span class="country-name">Northern Mariana Islands</span><span class="dial-code">+1670</span></li><li class="country" data-dial-code="47" data-country-code="no"><div class="flag-box"><div class="iti-flag no"></div></div><span class="country-name">Norway (Norge)</span><span class="dial-code">+47</span></li><li class="country" data-dial-code="968" data-country-code="om"><div class="flag-box"><div class="iti-flag om"></div></div><span class="country-name">Oman (&#x202B;عُمان&#x202C;&lrm;)</span><span class="dial-code">+968</span></li><li class="country" data-dial-code="92" data-country-code="pk"><div class="flag-box"><div class="iti-flag pk"></div></div><span class="country-name">Pakistan (&#x202B;پاکستان&#x202C;&lrm;)</span><span class="dial-code">+92</span></li><li class="country" data-dial-code="680" data-country-code="pw"><div class="flag-box"><div class="iti-flag pw"></div></div><span class="country-name">Palau</span><span class="dial-code">+680</span></li><li class="country" data-dial-code="970" data-country-code="ps"><div class="flag-box"><div class="iti-flag ps"></div></div><span class="country-name">Palestine (&#x202B;فلسطين&#x202C;&lrm;)</span><span class="dial-code">+970</span></li><li class="country" data-dial-code="507" data-country-code="pa"><div class="flag-box"><div class="iti-flag pa"></div></div><span class="country-name">Panama (Panamá)</span><span class="dial-code">+507</span></li><li class="country" data-dial-code="675" data-country-code="pg"><div class="flag-box"><div class="iti-flag pg"></div></div><span class="country-name">Papua New Guinea</span><span class="dial-code">+675</span></li><li class="country" data-dial-code="595" data-country-code="py"><div class="flag-box"><div class="iti-flag py"></div></div><span class="country-name">Paraguay</span><span class="dial-code">+595</span></li><li class="country" data-dial-code="51" data-country-code="pe"><div class="flag-box"><div class="iti-flag pe"></div></div><span class="country-name">Peru (Perú)</span><span class="dial-code">+51</span></li><li class="country" data-dial-code="63" data-country-code="ph"><div class="flag-box"><div class="iti-flag ph"></div></div><span class="country-name">Philippines</span><span class="dial-code">+63</span></li><li class="country" data-dial-code="48" data-country-code="pl"><div class="flag-box"><div class="iti-flag pl"></div></div><span class="country-name">Poland (Polska)</span><span class="dial-code">+48</span></li><li class="country" data-dial-code="351" data-country-code="pt"><div class="flag-box"><div class="iti-flag pt"></div></div><span class="country-name">Portugal</span><span class="dial-code">+351</span></li><li class="country" data-dial-code="1" data-country-code="pr"><div class="flag-box"><div class="iti-flag pr"></div></div><span class="country-name">Puerto Rico</span><span class="dial-code">+1</span></li><li class="country" data-dial-code="974" data-country-code="qa"><div class="flag-box"><div class="iti-flag qa"></div></div><span class="country-name">Qatar (&#x202B;قطر&#x202C;&lrm;)</span><span class="dial-code">+974</span></li><li class="country" data-dial-code="262" data-country-code="re"><div class="flag-box"><div class="iti-flag re"></div></div><span class="country-name">Réunion (La Réunion)</span><span class="dial-code">+262</span></li><li class="country" data-dial-code="40" data-country-code="ro"><div class="flag-box"><div class="iti-flag ro"></div></div><span class="country-name">Romania (România)</span><span class="dial-code">+40</span></li><li class="country" data-dial-code="7" data-country-code="ru"><div class="flag-box"><div class="iti-flag ru"></div></div><span class="country-name">Russia (Россия)</span><span class="dial-code">+7</span></li><li class="country" data-dial-code="250" data-country-code="rw"><div class="flag-box"><div class="iti-flag rw"></div></div><span class="country-name">Rwanda</span><span class="dial-code">+250</span></li><li class="country" data-dial-code="590" data-country-code="bl"><div class="flag-box"><div class="iti-flag bl"></div></div><span class="country-name">Saint Barthélemy</span><span class="dial-code">+590</span></li><li class="country" data-dial-code="290" data-country-code="sh"><div class="flag-box"><div class="iti-flag sh"></div></div><span class="country-name">Saint Helena</span><span class="dial-code">+290</span></li><li class="country" data-dial-code="1869" data-country-code="kn"><div class="flag-box"><div class="iti-flag kn"></div></div><span class="country-name">Saint Kitts and Nevis</span><span class="dial-code">+1869</span></li><li class="country" data-dial-code="1758" data-country-code="lc"><div class="flag-box"><div class="iti-flag lc"></div></div><span class="country-name">Saint Lucia</span><span class="dial-code">+1758</span></li><li class="country" data-dial-code="590" data-country-code="mf"><div class="flag-box"><div class="iti-flag mf"></div></div><span class="country-name">Saint Martin (Saint-Martin (partie française))</span><span class="dial-code">+590</span></li><li class="country" data-dial-code="508" data-country-code="pm"><div class="flag-box"><div class="iti-flag pm"></div></div><span class="country-name">Saint Pierre and Miquelon (Saint-Pierre-et-Miquelon)</span><span class="dial-code">+508</span></li><li class="country" data-dial-code="1784" data-country-code="vc"><div class="flag-box"><div class="iti-flag vc"></div></div><span class="country-name">Saint Vincent and the Grenadines</span><span class="dial-code">+1784</span></li><li class="country" data-dial-code="685" data-country-code="ws"><div class="flag-box"><div class="iti-flag ws"></div></div><span class="country-name">Samoa</span><span class="dial-code">+685</span></li><li class="country" data-dial-code="378" data-country-code="sm"><div class="flag-box"><div class="iti-flag sm"></div></div><span class="country-name">San Marino</span><span class="dial-code">+378</span></li><li class="country" data-dial-code="239" data-country-code="st"><div class="flag-box"><div class="iti-flag st"></div></div><span class="country-name">São Tomé and Príncipe (São Tomé e Príncipe)</span><span class="dial-code">+239</span></li><li class="country" data-dial-code="966" data-country-code="sa"><div class="flag-box"><div class="iti-flag sa"></div></div><span class="country-name">Saudi Arabia (&#x202B;المملكة العربية السعودية&#x202C;&lrm;)</span><span class="dial-code">+966</span></li><li class="country" data-dial-code="221" data-country-code="sn"><div class="flag-box"><div class="iti-flag sn"></div></div><span class="country-name">Senegal (Sénégal)</span><span class="dial-code">+221</span></li><li class="country" data-dial-code="381" data-country-code="rs"><div class="flag-box"><div class="iti-flag rs"></div></div><span class="country-name">Serbia (Србија)</span><span class="dial-code">+381</span></li><li class="country" data-dial-code="248" data-country-code="sc"><div class="flag-box"><div class="iti-flag sc"></div></div><span class="country-name">Seychelles</span><span class="dial-code">+248</span></li><li class="country" data-dial-code="232" data-country-code="sl"><div class="flag-box"><div class="iti-flag sl"></div></div><span class="country-name">Sierra Leone</span><span class="dial-code">+232</span></li><li class="country" data-dial-code="65" data-country-code="sg"><div class="flag-box"><div class="iti-flag sg"></div></div><span class="country-name">Singapore</span><span class="dial-code">+65</span></li><li class="country" data-dial-code="1721" data-country-code="sx"><div class="flag-box"><div class="iti-flag sx"></div></div><span class="country-name">Sint Maarten</span><span class="dial-code">+1721</span></li><li class="country" data-dial-code="421" data-country-code="sk"><div class="flag-box"><div class="iti-flag sk"></div></div><span class="country-name">Slovakia (Slovensko)</span><span class="dial-code">+421</span></li><li class="country" data-dial-code="386" data-country-code="si"><div class="flag-box"><div class="iti-flag si"></div></div><span class="country-name">Slovenia (Slovenija)</span><span class="dial-code">+386</span></li><li class="country" data-dial-code="677" data-country-code="sb"><div class="flag-box"><div class="iti-flag sb"></div></div><span class="country-name">Solomon Islands</span><span class="dial-code">+677</span></li><li class="country" data-dial-code="252" data-country-code="so"><div class="flag-box"><div class="iti-flag so"></div></div><span class="country-name">Somalia (Soomaaliya)</span><span class="dial-code">+252</span></li><li class="country" data-dial-code="27" data-country-code="za"><div class="flag-box"><div class="iti-flag za"></div></div><span class="country-name">South Africa</span><span class="dial-code">+27</span></li><li class="country" data-dial-code="82" data-country-code="kr"><div class="flag-box"><div class="iti-flag kr"></div></div><span class="country-name">South Korea (대한민국)</span><span class="dial-code">+82</span></li><li class="country" data-dial-code="211" data-country-code="ss"><div class="flag-box"><div class="iti-flag ss"></div></div><span class="country-name">South Sudan (&#x202B;جنوب السودان&#x202C;&lrm;)</span><span class="dial-code">+211</span></li><li class="country" data-dial-code="34" data-country-code="es"><div class="flag-box"><div class="iti-flag es"></div></div><span class="country-name">Spain (España)</span><span class="dial-code">+34</span></li><li class="country" data-dial-code="94" data-country-code="lk"><div class="flag-box"><div class="iti-flag lk"></div></div><span class="country-name">Sri Lanka (ශ්&zwj;රී ලංකාව)</span><span class="dial-code">+94</span></li><li class="country" data-dial-code="249" data-country-code="sd"><div class="flag-box"><div class="iti-flag sd"></div></div><span class="country-name">Sudan (&#x202B;السودان&#x202C;&lrm;)</span><span class="dial-code">+249</span></li><li class="country" data-dial-code="597" data-country-code="sr"><div class="flag-box"><div class="iti-flag sr"></div></div><span class="country-name">Suriname</span><span class="dial-code">+597</span></li><li class="country" data-dial-code="47" data-country-code="sj"><div class="flag-box"><div class="iti-flag sj"></div></div><span class="country-name">Svalbard and Jan Mayen</span><span class="dial-code">+47</span></li><li class="country" data-dial-code="268" data-country-code="sz"><div class="flag-box"><div class="iti-flag sz"></div></div><span class="country-name">Swaziland</span><span class="dial-code">+268</span></li><li class="country" data-dial-code="46" data-country-code="se"><div class="flag-box"><div class="iti-flag se"></div></div><span class="country-name">Sweden (Sverige)</span><span class="dial-code">+46</span></li><li class="country" data-dial-code="41" data-country-code="ch"><div class="flag-box"><div class="iti-flag ch"></div></div><span class="country-name">Switzerland (Schweiz)</span><span class="dial-code">+41</span></li><li class="country" data-dial-code="963" data-country-code="sy"><div class="flag-box"><div class="iti-flag sy"></div></div><span class="country-name">Syria (&#x202B;سوريا&#x202C;&lrm;)</span><span class="dial-code">+963</span></li><li class="country" data-dial-code="886" data-country-code="tw"><div class="flag-box"><div class="iti-flag tw"></div></div><span class="country-name">Taiwan (台灣)</span><span class="dial-code">+886</span></li><li class="country" data-dial-code="992" data-country-code="tj"><div class="flag-box"><div class="iti-flag tj"></div></div><span class="country-name">Tajikistan</span><span class="dial-code">+992</span></li><li class="country" data-dial-code="255" data-country-code="tz"><div class="flag-box"><div class="iti-flag tz"></div></div><span class="country-name">Tanzania</span><span class="dial-code">+255</span></li><li class="country" data-dial-code="66" data-country-code="th"><div class="flag-box"><div class="iti-flag th"></div></div><span class="country-name">Thailand (ไทย)</span><span class="dial-code">+66</span></li><li class="country" data-dial-code="670" data-country-code="tl"><div class="flag-box"><div class="iti-flag tl"></div></div><span class="country-name">Timor-Leste</span><span class="dial-code">+670</span></li><li class="country" data-dial-code="228" data-country-code="tg"><div class="flag-box"><div class="iti-flag tg"></div></div><span class="country-name">Togo</span><span class="dial-code">+228</span></li><li class="country" data-dial-code="690" data-country-code="tk"><div class="flag-box"><div class="iti-flag tk"></div></div><span class="country-name">Tokelau</span><span class="dial-code">+690</span></li><li class="country" data-dial-code="676" data-country-code="to"><div class="flag-box"><div class="iti-flag to"></div></div><span class="country-name">Tonga</span><span class="dial-code">+676</span></li><li class="country" data-dial-code="1868" data-country-code="tt"><div class="flag-box"><div class="iti-flag tt"></div></div><span class="country-name">Trinidad and Tobago</span><span class="dial-code">+1868</span></li><li class="country" data-dial-code="216" data-country-code="tn"><div class="flag-box"><div class="iti-flag tn"></div></div><span class="country-name">Tunisia (&#x202B;تونس&#x202C;&lrm;)</span><span class="dial-code">+216</span></li><li class="country" data-dial-code="90" data-country-code="tr"><div class="flag-box"><div class="iti-flag tr"></div></div><span class="country-name">Turkey (Türkiye)</span><span class="dial-code">+90</span></li><li class="country" data-dial-code="993" data-country-code="tm"><div class="flag-box"><div class="iti-flag tm"></div></div><span class="country-name">Turkmenistan</span><span class="dial-code">+993</span></li><li class="country" data-dial-code="1649" data-country-code="tc"><div class="flag-box"><div class="iti-flag tc"></div></div><span class="country-name">Turks and Caicos Islands</span><span class="dial-code">+1649</span></li><li class="country" data-dial-code="688" data-country-code="tv"><div class="flag-box"><div class="iti-flag tv"></div></div><span class="country-name">Tuvalu</span><span class="dial-code">+688</span></li><li class="country" data-dial-code="1340" data-country-code="vi"><div class="flag-box"><div class="iti-flag vi"></div></div><span class="country-name">U.S. Virgin Islands</span><span class="dial-code">+1340</span></li><li class="country" data-dial-code="256" data-country-code="ug"><div class="flag-box"><div class="iti-flag ug"></div></div><span class="country-name">Uganda</span><span class="dial-code">+256</span></li><li class="country" data-dial-code="380" data-country-code="ua"><div class="flag-box"><div class="iti-flag ua"></div></div><span class="country-name">Ukraine (Україна)</span><span class="dial-code">+380</span></li><li class="country" data-dial-code="971" data-country-code="ae"><div class="flag-box"><div class="iti-flag ae"></div></div><span class="country-name">United Arab Emirates (&#x202B;الإمارات العربية المتحدة&#x202C;&lrm;)</span><span class="dial-code">+971</span></li><li class="country" data-dial-code="44" data-country-code="gb"><div class="flag-box"><div class="iti-flag gb"></div></div><span class="country-name">United Kingdom</span><span class="dial-code">+44</span></li><li class="country" data-dial-code="1" data-country-code="us"><div class="flag-box"><div class="iti-flag us"></div></div><span class="country-name">United States</span><span class="dial-code">+1</span></li><li class="country" data-dial-code="598" data-country-code="uy"><div class="flag-box"><div class="iti-flag uy"></div></div><span class="country-name">Uruguay</span><span class="dial-code">+598</span></li><li class="country" data-dial-code="998" data-country-code="uz"><div class="flag-box"><div class="iti-flag uz"></div></div><span class="country-name">Uzbekistan (Oʻzbekiston)</span><span class="dial-code">+998</span></li><li class="country" data-dial-code="678" data-country-code="vu"><div class="flag-box"><div class="iti-flag vu"></div></div><span class="country-name">Vanuatu</span><span class="dial-code">+678</span></li><li class="country" data-dial-code="39" data-country-code="va"><div class="flag-box"><div class="iti-flag va"></div></div><span class="country-name">Vatican TFX (Città del Vaticano)</span><span class="dial-code">+39</span></li><li class="country" data-dial-code="58" data-country-code="ve"><div class="flag-box"><div class="iti-flag ve"></div></div><span class="country-name">Venezuela</span><span class="dial-code">+58</span></li><li class="country" data-dial-code="84" data-country-code="vn"><div class="flag-box"><div class="iti-flag vn"></div></div><span class="country-name">Vietnam (Việt Nam)</span><span class="dial-code">+84</span></li><li class="country" data-dial-code="681" data-country-code="wf"><div class="flag-box"><div class="iti-flag wf"></div></div><span class="country-name">Wallis and Futuna (Wallis-et-Futuna)</span><span class="dial-code">+681</span></li><li class="country" data-dial-code="212" data-country-code="eh"><div class="flag-box"><div class="iti-flag eh"></div></div><span class="country-name">Western Sahara (&#x202B;الصحراء الغربية&#x202C;&lrm;)</span><span class="dial-code">+212</span></li><li class="country" data-dial-code="967" data-country-code="ye"><div class="flag-box"><div class="iti-flag ye"></div></div><span class="country-name">Yemen (&#x202B;اليمن&#x202C;&lrm;)</span><span class="dial-code">+967</span></li><li class="country" data-dial-code="260" data-country-code="zm"><div class="flag-box"><div class="iti-flag zm"></div></div><span class="country-name">Zambia</span><span class="dial-code">+260</span></li><li class="country" data-dial-code="263" data-country-code="zw"><div class="flag-box"><div class="iti-flag zw"></div></div><span class="country-name">Zimbabwe</span><span class="dial-code">+263</span></li><li class="country" data-dial-code="358" data-country-code="ax"><div class="flag-box"><div class="iti-flag ax"></div></div><span class="country-name">Åland Islands</span><span class="dial-code">+358</span></li></ul></div><input class="form-control" data-val="true" data-val-phone="The Phone field is not a valid phone number." data-val-required="Phone is Required" id="Phone" name="Phone" placeholder="7400 123456" style="width:100%" type="text" value="" autocomplete="off"></div>
        <span class="field-validation-valid" data-valmsg-for="Phone" data-valmsg-replace="true"></span>
    </div>
    <div class="col-md-12">
        <div class="text-center">
            <button type="submit">
                Register Now

            </button>
        </div>
    </div>
</form>
<div id="ex1" style="display:none;max-width:1200px;max-height:600px">
    
    <a href="#" rel="modal:close">Close</a>
</div>

<div id="ex2" style="display:none;max-width:1200px;max-height:600px">
    
    <a href="#" rel="modal:close">Close</a>
</div>

<script>
    //(function ($) {
    //    $.validator.unobtrusive.adapters.addBool("booleanrequired", "required");
    //}(jQuery));

    $("#Phone").intlTelInput({
        phoneCode: "#PhoneCode",
        allowDropdown: true,
        autoHideDialCode: false,
        autoPlaceholder: "aggressive",
        autoMasked: true,
        formatOnDisplay: true,
        geoIpLookup: function (callback) {
            $.get("https://ipinfo.io", function () { }, "jsonp").always(function (resp) {
                var countryCode = (resp && resp.country) ? resp.country : "gb";
                callback(countryCode);
            });
        },

        nationalMode: true,
        placeholderNumberType: "MOBILE",
        preferredCountries: ['gb', 'us', 'tr'],
        separateDialCode: true,
        utilsScript: "/Scripts/intl-tel-input/js/utils.js"
    });


    function DisableButtons() {
        var inputs = document.getElementsByTagName("INPUT");
        for (var i in inputs) {
            if (inputs[i].type == "button" || inputs[i].type == "submit") {
                inputs[i].disabled = true;
            }
        }
    }

    function EnableButtons() {
        var inputs = document.getElementsByTagName("button");
        for (var i in inputs) {
            if (inputs[i].type == "button" || inputs[i].type == "submit") {
                inputs[i].disabled = false;
            }
        }
    }

    window.onbeforeunload = DisableButtons;

    $("#isreadcheck2").prop('checked', true)
    $("#isreadcheck").prop('checked', true)

            //$().ready(function () {

            //    (function ($) {
            //        $.validator.unobtrusive.adapters.addBool("booleanrequired", "required");
            //    }(jQuery));
            //});
</script>

                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->
    




</div>

<script>
    /**
* Template Name: Appland - v2.3.1
* Template URL: https://bootstrapmade.com/free-bootstrap-app-landing-page-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/
!(function($) {
  "use strict";

  // Toggle .header-scrolled class to #header when page is scrolled
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('#header').addClass('header-scrolled');
    } else {
      $('#header').removeClass('header-scrolled');
    }
  });

  if ($(window).scrollTop() > 100) {
    $('#header').addClass('header-scrolled');
  }

  // Smooth scroll for the navigation menu and links with .scrollto classes
  var scrolltoOffset = $('#header').outerHeight() - 1;
  $(document).on('click', '.nav-menu a, .mobile-nav a, .scrollto', function(e) {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      if (target.length) {
        e.preventDefault();
        var scrollto = target.offset().top - scrolltoOffset;

        if ($(this).attr("href") == '#header') {
          scrollto = 0;
        }
        $('html, body').animate({
          scrollTop: scrollto
        }, 1500, 'easeInOutExpo');
        if ($(this).parents('.nav-menu, .mobile-nav').length) {
          $('.nav-menu .active, .mobile-nav .active').removeClass('active');
          $(this).closest('li').addClass('active');
        }
        if ($('body').hasClass('mobile-nav-active')) {
          $('body').removeClass('mobile-nav-active');
          $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');
          $('.mobile-nav-overly').fadeOut();
        }
        return false;
      }
    }
  });

  // Activate smooth scroll on page load with hash links in the url
  $(document).ready(function() {
    if (window.location.hash) {
      var initial_nav = window.location.hash;
      if ($(initial_nav).length) {
        var scrollto = $(initial_nav).offset().top - scrolltoOffset;
        $('html, body').animate({
          scrollTop: scrollto
        }, 1500, 'easeInOutExpo');
      }
    }
  });

  // Mobile Navigation
  if ($('.nav-menu').length) {
    var $mobile_nav = $('.nav-menu').clone().prop({
      class: 'mobile-nav d-lg-none'
    });
    $('body').append($mobile_nav);
    $('body').prepend('<button type="button" class="mobile-nav-toggle d-lg-none"><i class="icofont-navigation-menu"></i></button>');
    $('body').append('<div class="mobile-nav-overly"></div>');
    $(document).on('click', '.mobile-nav-toggle', function(e) {
      $('body').toggleClass('mobile-nav-active');
      $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');
      $('.mobile-nav-overly').toggle();
    });
    $(document).on('click', '.mobile-nav .drop-down > a', function(e) {
      e.preventDefault();
      $(this).next().slideToggle(300);
      $(this).parent().toggleClass('active');
    });
    $(document).click(function(e) {
      var container = $(".mobile-nav, .mobile-nav-toggle");
      if (!container.is(e.target) && container.has(e.target).length === 0) {
        if ($('body').hasClass('mobile-nav-active')) {
          $('body').removeClass('mobile-nav-active');
          $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');
          $('.mobile-nav-overly').fadeOut();
        }
      }
    });
  } else if ($(".mobile-nav, .mobile-nav-toggle").length) {
    $(".mobile-nav, .mobile-nav-toggle").hide();
  }

  // Navigation active state on scroll
  var nav_sections = $('section');
  var main_nav = $('.nav-menu, .mobile-nav');

  $(window).on('scroll', function() {
    var cur_pos = $(this).scrollTop() + 200;

    nav_sections.each(function() {
      var top = $(this).offset().top,
        bottom = top + $(this).outerHeight();

      if (cur_pos >= top && cur_pos <= bottom) {
        if (cur_pos <= bottom) {
          main_nav.find('li').removeClass('active');
        }
        main_nav.find('a[href="#' + $(this).attr('id') + '"]').parent('li').addClass('active');
      }
      if (cur_pos < 300) {
        $(".nav-menu ul:first li:first").addClass('active');
      }
    });
  });

  // Back to top button
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('.back-to-top').fadeIn('slow');
    } else {
      $('.back-to-top').fadeOut('slow');
    }
  });
  $('.back-to-top').click(function() {
    $('html, body').animate({
      scrollTop: 0
    }, 1500, 'easeInOutExpo');
    return false;
  });

  // Gallery carousel (uses the Owl Carousel library)
  $(".gallery-carousel").owlCarousel({
    autoplay: true,
    dots: true,
    loop: true,
    center: true,
    margin: 25,
    responsive: {
      0: {
        items: 1
      },
      768: {
        items: 3
      },
      992: {
        items: 4
      },
      1200: {
        items: 5
      }
    }
  });

  // Initiate venobox lightbox
  $(document).ready(function() {
    $('.venobox').venobox();
  });

  // Testimonials carousel (uses the Owl Carousel library)
  $(".testimonials-carousel").owlCarousel({
    autoplay: true,
    dots: true,
    loop: true,
    responsive: {
      0: {
        items: 1
      },
      768: {
        items: 1
      },
      900: {
        items: 2
      }
    }
  });

  // Init AOS
  function aos_init() {
    AOS.init({
      duration: 800,
      easing: "ease-in-out",
      once: true
    });
  }
  $(window).on('load', function() {
    aos_init();
  });

})(jQuery);
</script>
@endsection
