<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="description" content="{{ $page->seo_description ?? Config::config()->seo_description }}" />
    <meta name="keywords" content="{{ implode(',', $page->seo_keywords ?? Config::config()->seo_tags) }} ">

    <title>{{ Config::config()->appname }}</title>

    <link rel="shortcut icon" type="image/png" href="{{ Config::getFile('icon', Config::config()->favicon, true) }}">

    <link rel="stylesheet" href="{{ Config::cssLib('frontend', 'lib/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ Config::cssLib('frontend', 'all.min.css') }}">
    <link rel="stylesheet" href="{{ Config::cssLib('frontend', 'line-awesome.min.css') }}">

    @if (Config::config()->alert === 'izi')
        <link rel="stylesheet" href="{{ Config::cssLib('frontend', 'izitoast.min.css') }}">
    @elseif(Config::config()->alert === 'toast')
        <link href="{{ Config::cssLib('frontend', 'toastr.min.css') }}" rel="stylesheet">
    @else
        <link href="{{ Config::cssLib('frontend', 'sweetalert.min.css') }}" rel="stylesheet">
    @endif

    @php
        if (!function_exists('getStripePublishableKey')) {
            function getStripePublishableKey()
            {
                return optional(App\Models\Gateway::where('name', 'stripe')->first())->parameter->stripe_client_id ??
                    null;
            }
        }
    @endphp
    @php
        $heading = optional(Config::config()->fonts)->heading_font_family;
        $paragraph = optional(Config::config()->fonts)->paragraph_font_family;
    @endphp

    <style>
        :root {
            --clr-main: <?=Config::config()->color[Config::config()->theme] ?? '#9c0ac1' ?>;
            --h-font: <?=$heading ?>;
            --p-font: <?=$paragraph ?>;

            --clock-size: 100px;
            --marker-distance: calc(var(--clock-size) * 0.4325);
            --hand-thickness: calc(var(--clock-size) * 0.03);
        }
    </style>

    @stack('external-css')

    <link rel="stylesheet" href="{{ Config::cssLib('frontend', 'main.css') }}">

    @stack('style')



</head>

<body class="user-pages-body">

    @include(Config::theme() . 'layout.user_sidebar')

    <style>
        .clock #time {
            font-size: 24px;
            margin-bottom: 20px;
            color: #fff;
            margin: 0;
        }

        .sp_theme_btn2 {
            background-color: #ea7e0e;
            color: #fff;
            border-radius: 5px;
            width: 50%;
        }

        .clock-box {
            width: 27%;
        }

        @media (max-width: 575px) {

            .clock-box {
                width: 31%;
                display: none;
            }

            .user-header {
                padding: 0.625rem 0.9375rem;
                height: 70px;
                justify-content: center;
                align-items: center;
            }

            .clock #time {
                font-size: 14px;
            }

            .icon-withdraw {
                display: none;
            }



            .user-dropdown {
                gap: 0px;
            }

            .kyc-img {
                width: 120px;
            }

            .user-header {
                padding: 0.625rem 0.9375rem;
                height: 70px;
            }

            .icon-wd {
                width: 60px;
                display: none
            }

            .btn {
                padding: 8px 15px;
                font-size: 14px;
            }

            .web-td {
                padding: 0 !important;
            }

            .sp_theme_btn2 {
                font-size: 12px !important;
                display: none
            }

            .user-pages-body .btn {
                font-size: 12px;
            }

            .btn.btn-sm {
                padding: 0.375rem 1rem;
            }

            .sidebar-open-btn {
                list-style-type: none;
                color: #fff;

            }

            .user-header .site-logo img {
                max-height: 40px;
            }
        }
    </style>

    <header class="user-header">
        <li class="sidebar-open-btn">
            <a href="#0" class="">
                <i class="fas fa-bars"></i>
            </a>
        </li>
        <a href="{{ route('user.dashboard') }}" class="site-logo">
            <img src="{{ Config::getFile('dark_logo', Config::config()->dark_logo, true) }}" alt="image">
        </a>

        <button type="button" class="sidebar-toggeler"><i class="las la-bars"></i></button>

        <div class="clock-dropdown-box">
            <div class="dropdown user-dropdown">

                {{-- <div class="clock-box">
                    <div class="clock">
                        <div id="time"></div>
                    </div>
                </div> --}}

                {{-- <a type="button" class="btn icon-wd btn-sm" id="depositButton">
                    <img class="kyc-img" src="{{ Config::fetchImage('icon', 'deposit.png', true) }}">
                </a> --}}

                {{-- <a type="button" target="_blank" class="btn icon-wd btn-sm icon-withdraw"
                    href="{{ route('user.withdraw') }}">
                    <img class="kyc-img" src="{{ Config::fetchImage('icon', 'withdraw.png', true) }}"></a> --}}

                <a type="button" target="_blank" href="https://app.strongcapitals.com"
                    class="btn icon-wd  sp_theme_btn2 btn-sm web-td">Web Trader</a>


                <button class="user-btn dropdown-toggle" type="button" id="dropdownMenuButton1"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{ Config::getFile('user', auth()->user()->image, true) }}" alt="image">
                    <span>{{ auth()->user()->username }}</span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">

                    @if (auth()->user()->is_kyc_verified == 2 || auth()->user()->is_kyc_verified == 0)
                        <li><button class="btn btn-unverified">Unverified User <i class="fa fa-times"></i></button></li>
                    @else
                        <li><button class="btn btn-verified">Verified User <i class="fa fa-check"></i></button></li>
                    @endif

                    <li><a class="dropdown-item" href="{{ route('user.profile') }}"><i
                                class="far fa-user-circle me-2"></i>
                            {{ __('Profile') }}</a></li>
                    <li><a class="dropdown-item" href="{{ route('user.2fa') }}"><i class="fas fa-cog me-2"></i>
                            {{ __('2FA') }}</a></li>
                    <li><a class="dropdown-item" href="{{ route('user.logout') }}"><i
                                class="fas fa-sign-out-alt me-2"></i>
                            {{ __('Logout') }}</a></li>
                </ul>
            </div>
        </div>
    </header>

    <main class="dashbaord-main">
        @yield('content')
    </main>

    <div class="modal fade" id="stripeModal" tabindex="-1" aria-labelledby="stripeModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="stripeModalLabel">Enter Amount</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="payment-form">
                        <div class="mb-3">
                            <label for="amount" class="form-label">Amount</label>
                            <input type="number" class="form-control" id="amount" placeholder="Enter amount"
                                required>
                        </div>
                        <div id="card-element">
                            <!-- Stripe Element will render here -->
                        </div>
                        <div id="card-errors" role="alert" class="mt-2 text-danger"></div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="payButton">Pay Now</button>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ Config::jsLib('frontend', 'lib/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ Config::jsLib('frontend', 'lib/jquery.min.js') }}"></script>
    <script src="{{ Config::jsLib('frontend', 'lib/wow.min.js') }}"></script>
    <script src="{{ Config::jsLib('frontend', 'lib/jquery.paroller.min.js') }}"></script>
    <script src="{{ Config::jsLib('frontend', 'lib/slick.min.js') }}"></script>

    @stack('external-script')


    @if (Config::config()->alert === 'izi')
        <script src="{{ Config::jsLib('frontend', 'izitoast.min.js') }}"></script>
    @elseif(Config::config()->alert === 'toast')
        <script src="{{ Config::jsLib('frontend', 'toastr.min.js') }}"></script>
    @else
        <script src="{{ Config::jsLib('frontend', 'sweetalert.min.js') }}"></script>
    @endif

    <script src="{{ Config::jsLib('frontend', 'main.js') }}"></script>

    @include('alert')

    @stack('script')

    <script>
        'use strict'


        $(".sidebar-menu>li>a").each(function() {
            let submenuParent = $(this).parent('li');

            $(this).on('click', function() {
                submenuParent.toggleClass('open')
            })
        });

        $('.sidebar-open-btn').on('click', function() {
            $(this).toggleClass('active');
            $('.user-sidebar').toggleClass('active');
            $('.dashbaord-main').toggleClass('active');
        });
    </script>

</body>

</html>
