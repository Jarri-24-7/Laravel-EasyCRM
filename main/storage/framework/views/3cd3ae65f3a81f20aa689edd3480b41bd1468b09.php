<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="description" content="<?php echo e($page->seo_description ?? Config::config()->seo_description); ?>" />
    <meta name="keywords" content="<?php echo e(implode(',', $page->seo_keywords ?? Config::config()->seo_tags)); ?> ">

    <title><?php echo e(Config::config()->appname); ?></title>

    <link rel="shortcut icon" type="image/png" href="<?php echo e(Config::getFile('icon', Config::config()->favicon, true)); ?>">

    <link rel="stylesheet" href="<?php echo e(Config::cssLib('frontend', 'lib/bootstrap.min.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(Config::cssLib('frontend', 'all.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(Config::cssLib('frontend', 'line-awesome.min.css')); ?>">

    <?php if(Config::config()->alert === 'izi'): ?>
        <link rel="stylesheet" href="<?php echo e(Config::cssLib('frontend', 'izitoast.min.css')); ?>">
    <?php elseif(Config::config()->alert === 'toast'): ?>
        <link href="<?php echo e(Config::cssLib('frontend', 'toastr.min.css')); ?>" rel="stylesheet">
    <?php else: ?>
        <link href="<?php echo e(Config::cssLib('frontend', 'sweetalert.min.css')); ?>" rel="stylesheet">
    <?php endif; ?>

    <?php
        if (!function_exists('getStripePublishableKey')) {
            function getStripePublishableKey()
            {
                return optional(App\Models\Gateway::where('name', 'stripe')->first())->parameter->stripe_client_id ??
                    null;
            }
        }
    ?>
    <?php
        $heading = optional(Config::config()->fonts)->heading_font_family;
        $paragraph = optional(Config::config()->fonts)->paragraph_font_family;
    ?>

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

    <?php echo $__env->yieldPushContent('external-css'); ?>

    <link rel="stylesheet" href="<?php echo e(Config::cssLib('frontend', 'main.css')); ?>">

    <?php echo $__env->yieldPushContent('style'); ?>



</head>

<body class="user-pages-body">

    <?php echo $__env->make(Config::theme() . 'layout.user_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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
        <a href="<?php echo e(route('user.dashboard')); ?>" class="site-logo">
            <img src="<?php echo e(Config::getFile('dark_logo', Config::config()->dark_logo, true)); ?>" alt="image">
        </a>

        <button type="button" class="sidebar-toggeler"><i class="las la-bars"></i></button>

        <div class="clock-dropdown-box">
            <div class="dropdown user-dropdown">

                

                

                

                <a type="button" target="_blank" href="https://app.strongcapitals.com"
                    class="btn icon-wd  sp_theme_btn2 btn-sm web-td">Web Trader</a>


                <button class="user-btn dropdown-toggle" type="button" id="dropdownMenuButton1"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo e(Config::getFile('user', auth()->user()->image, true)); ?>" alt="image">
                    <span><?php echo e(auth()->user()->username); ?></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">

                    <?php if(auth()->user()->is_kyc_verified == 2 || auth()->user()->is_kyc_verified == 0): ?>
                        <li><button class="btn btn-unverified">Unverified User <i class="fa fa-times"></i></button></li>
                    <?php else: ?>
                        <li><button class="btn btn-verified">Verified User <i class="fa fa-check"></i></button></li>
                    <?php endif; ?>

                    <li><a class="dropdown-item" href="<?php echo e(route('user.profile')); ?>"><i
                                class="far fa-user-circle me-2"></i>
                            <?php echo e(__('Profile')); ?></a></li>
                    <li><a class="dropdown-item" href="<?php echo e(route('user.2fa')); ?>"><i class="fas fa-cog me-2"></i>
                            <?php echo e(__('2FA')); ?></a></li>
                    <li><a class="dropdown-item" href="<?php echo e(route('user.logout')); ?>"><i
                                class="fas fa-sign-out-alt me-2"></i>
                            <?php echo e(__('Logout')); ?></a></li>
                </ul>
            </div>
        </div>
    </header>

    <main class="dashbaord-main">
        <?php echo $__env->yieldContent('content'); ?>
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


    <script src="<?php echo e(Config::jsLib('frontend', 'lib/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(Config::jsLib('frontend', 'lib/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(Config::jsLib('frontend', 'lib/wow.min.js')); ?>"></script>
    <script src="<?php echo e(Config::jsLib('frontend', 'lib/jquery.paroller.min.js')); ?>"></script>
    <script src="<?php echo e(Config::jsLib('frontend', 'lib/slick.min.js')); ?>"></script>

    <?php echo $__env->yieldPushContent('external-script'); ?>


    <?php if(Config::config()->alert === 'izi'): ?>
        <script src="<?php echo e(Config::jsLib('frontend', 'izitoast.min.js')); ?>"></script>
    <?php elseif(Config::config()->alert === 'toast'): ?>
        <script src="<?php echo e(Config::jsLib('frontend', 'toastr.min.js')); ?>"></script>
    <?php else: ?>
        <script src="<?php echo e(Config::jsLib('frontend', 'sweetalert.min.js')); ?>"></script>
    <?php endif; ?>

    <script src="<?php echo e(Config::jsLib('frontend', 'main.js')); ?>"></script>

    <?php echo $__env->make('alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldPushContent('script'); ?>

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
<?php /**PATH E:\xampp\htdocs\strong-capitals\main\resources\views/frontend/light/layout/auth.blade.php ENDPATH**/ ?>