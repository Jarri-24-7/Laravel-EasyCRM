

<?php $__env->startSection('content'); ?>
    <?php
        $plan_expired_at = now();
    ?>

    <?php if(auth()->user()->currentplan): ?>
        <?php
            $is_subscribe = auth()->user()->currentplan()->where('is_current', 1)->first();

            if ($is_subscribe) {
                $plan_expired_at = $is_subscribe->plan_expired_at;
            }
        ?>
    <?php endif; ?>
    <div class="info-box mb-5 text-white">
        <div class="row g-sm-4 g-3">
            <div class="custom-xxl-12 col-xxl-12 col-xl-12 col-lg-12 col-12">
                <h3 class="text-white">User Information</h3>
            </div>
            <!-- Name -->
            <div class="custom-xxl-6 col-xxl-12 col-xl-12 col-lg-3 col-12">
                <strong>Name / Surname:</strong>
                <?php echo e($user->username ?? 'N/A'); ?>

            </div>
    
            <!-- Phone -->
            <div class="custom-xxl-6 col-xxl-12 col-xl-12 col-lg-3 col-12">
                <strong>Phone:</strong>
                <?php echo e($user->phone ?? 'N/A'); ?>

            </div>
    
            <!-- Email -->
            <div class="custom-xxl-12 col-xxl-12 col-xl-12 col-lg-12 col-12">
                <strong>Email:</strong>
                <?php echo e($user->email ?? 'N/A'); ?>

            </div>
    
            <!-- Address -->
            <div class="custom-xxl-12 col-xxl-12 col-xl-12 col-lg-12 col-12">
                <strong>Address:</strong>


                <?php echo e($user->address->country ?? ''); ?>,
                <?php echo e($user->address->city ?? ''); ?>,
                <?php echo e($user->address->state ?? ''); ?>,
                <?php echo e($user->address->zip ?? ''); ?>

            </div>
        </div>
    </div>


    <div class="row g-sm-4 g-3">
        <div class="col-xxl-12 col-xl-12">
            <div class="d-left-wrapper">
                <div class="d-left-countdown">
                    <div id="countdownTwo"></div>
                </div>


                <div class="row g-sm-4 g-3">
                    <div class="custom-xxl-6 col-xxl-3 col-xl-6 col-lg-3 col-6">
                        <div class="d-card d-icon-card">
                            <div class="d-card-icon gr-bg-1">
                                <i class="las la-credit-card"></i>
                            </div>
                            <div class="d-card-content">
                                <h4 class="d-card-amount"><?php echo e(Config::formatter($totalbalance)); ?></h4>
                                <p class="d-card-caption"><?php echo e(__('Avaliable Balance')); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="custom-xxl-6 col-xxl-3 col-xl-6 col-lg-3 col-6">
                        <div class="d-card d-icon-card">
                            <div class="d-card-icon gr-bg-2">
                                <i class="las la-hand-holding-usd"></i>
                            </div>
                            <div class="d-card-content">
                                <h4 class="d-card-amount"><?php echo e(Config::formatter($totalWithdraw)); ?></h4>
                                <p class="d-card-caption"><?php echo e(__('Total Withdraw')); ?></p>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>

                <div class="d-xl-none d-block mt-4">
                    <div class="row g-sm-4 g-3">
                        <div class="col-xl-12 col-lg-6">
                            <div class="d-card user-card not-hover"> 
                                <div class="text-center">
                                    <h5 class="user-card-title"><?php echo e(__('Total Balance')); ?></h5>
                                    <h4 class="d-card-balance mt-xxl-3 mt-2"><?php echo e(Config::formatter($totalbalance)); ?></h4>
                                    <div class="mt-4">
                                        <a href="<?php echo e(route('user.withdraw')); ?>" class="btn btn-md sp_btn_danger me-xxl-3 me-2"><i class="las la-minus-circle fs-lg"></i> <?php echo e(__('Withdraw')); ?></a>
                                        <a href="<?php echo e(route('user.deposit')); ?>" class="btn btn-md sp_btn_success ms-xxl-3 ms-2"><i class="las la-plus-circle fs-lg"></i> <?php echo e(__('Deposit')); ?></a>
                                    </div>
                                </div>
                                <hr class="my-4">
                                <ul class="recent-transaction-list mt-4">
                                    <?php $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trans): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="single-recent-transaction">
                                        <div class="content">
                                            <h6 class="title"><?php echo e($trans->details); ?></h6>
                                            <span><?php echo e($trans->created_at->format('d F, Y')); ?></span>
                                        </div>
                                        <p class="recent-transaction-amount <?php echo e($trans->type == '+' ?  "sp_text_success" : 'sp_text_danger'); ?>"><?php echo e(Config::formatter($trans->amount)); ?></p>
                                    </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                </ul>
                                <a href="<?php echo e(route('user.transaction.log')); ?>" class="btn sp_theme_btn mt-4 w-100"><i class="fas fa-rocket me-2"></i> <?php echo e(__('View All Transaction')); ?></a>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-6">
                            <div class="d-card not-hover">
                                <div id="chart3" class="d-flex justify-content-center"></div>
                            </div>

                            <h6 class="mb-2 mt-4"><?php echo e(__('Your Referral Link')); ?></h6>
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control copy-text" placeholder="Referral link"
                                        value="<?php echo e(route('user.register', $user->username)); ?>" readonly>
                                        <button type="button" class="input-group-text sp_bg_base px-4 copy
                                        "><?php echo e(__('Copy')); ?></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>




            </div>
        </div>

        
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('external-css'); ?>
    <link rel="stylesheet" href="<?php echo e(Config::cssLib('frontend', 'lib/apex.min.css')); ?>">
<?php $__env->stopPush(); ?>


<?php $__env->startPush('external-script'); ?>
    <script src="<?php echo e(Config::jsLib('frontend', 'lib/apex.min.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('script'); ?>
    <script>
        $(function() {
            'use strict'

            var copyButton = document.querySelector('.copy');
            var copyInput = document.querySelector('.copy-text');
            copyButton.addEventListener('click', function(e) {
                e.preventDefault();
                var text = copyInput.select();
                document.execCommand('copy');
            });
            copyInput.addEventListener('click', function() {
                this.select();
            });



            var copyButton2 = document.querySelector('.copy2');
            var copyInput2 = document.querySelector('.copy-text2');
            copyButton2.addEventListener('click', function(e) {
                e.preventDefault();
                var text = copyInput2.select();
                document.execCommand('copy');
            });
            copyInput2.addEventListener('click', function() {
                this.select();
            });


            var expirationDate = new Date('<?php echo e($plan_expired_at); ?>');

            function updateCountdown() {
                var now = new Date();
                var timeLeft = expirationDate - now;

                if (timeLeft < 0) {
                    // The plan has expired
                    $('#countdownTwo').html(`
                    <p class="upgrade-text"><i class="fas fa-rocket"></i> Please Upgrade Your Plan To Get Signals</p>
                `);
                } else {
                    // The plan is still active
                    var daysLeft = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
                    var hoursLeft = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    var minutesLeft = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
                    var secondsLeft = Math.floor((timeLeft % (1000 * 60)) / 1000);

                    $('#countdownTwo').html(`
                    <h5 class="d-left-countdown-title"><?php echo e(__('plan expired at :')); ?></h5>
                    <div class="countdown-wrapper">
                    <p class="countdown-single">
                        ${daysLeft}
                        <span>D</span>
                    </p>
                    <p class="countdown-single">
                        ${hoursLeft}
                        <span>H</span>
                    </p>
                    <p class="countdown-single">
                        ${minutesLeft}
                        <span>M</span>
                    </p>
                    <p class="countdown-single">
                        ${secondsLeft}
                        <span>S</span>
                    </p>
                    </div>
                `);
                }
            }
            // Call updateCountdown every second
            setInterval(updateCountdown, 1000);


            var colors = ['#9C0AC1'];
            var options = {
                series: [{
                    name: 'Signal',
                    data: <?php echo json_encode($signalGrapTotal, 15, 512) ?>
                }],
                legend: {
                    labels: {
                        colors: '#777777'
                    }
                },
                colors: colors,
                chart: {
                    height: 280,
                    type: 'bar',
                    toolbar: {
                        show: false
                    }
                },
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: '40%',
                        endingShape: 'rounded'
                    },
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    show: true,
                    width: 2,
                    colors: ['transparent'],
                    curve: 'smooth'
                },
                xaxis: {
                    categories: <?php echo json_encode($months, 15, 512) ?>,
                    labels: {
                        style: {
                            colors: '#2b2b2b',
                            fontSize: '12px',
                        }
                    }
                },
                yaxis: {
                    labels: {
                        style: {
                            colors: '#2b2b2b'
                        }
                    }
                },
                grid: {
                    xaxis: {
                        lines: {
                            show: false
                        }
                    },
                    yaxis: {
                        lines: {
                            show: false
                        }
                    },
                },
                fill: {
                    opacity: 1,
                    colors: colors
                },
                tooltip: {
                    x: {
                        format: 'dd/MM/yy HH:mm'
                    },
                },
            };

            var chart = new ApexCharts(document.querySelector("#chart"), options);
            chart.render();

            var options = {

                series: [<?php echo e($totalAmount->sum()); ?>, <?php echo e($withdrawTotalAmount->sum()); ?>,
                    <?php echo e($depositTotalAmount->sum()); ?>

                ],
                labels: ['Payment', 'Withdraw', 'Deposit'],
                chart: {
                    type: 'donut',
                    width: 370,
                    height: 430
                },
                colors: ['#622bd7', '#e7515a', '#10a373', '#10a373'],
                dataLabels: {
                    enabled: false
                },
                legend: {
                    position: 'bottom',
                    horizontalAlign: 'center',
                    fontSize: '14px',
                    labels: {
                        colors: '#2b2b2b'
                    },
                    markers: {
                        width: 10,
                        height: 10,
                        offsetX: -5,
                        offsetY: 0
                    },
                    itemMargin: {
                        horizontal: 10,
                        vertical: 30
                    }
                },
                plotOptions: {
                    pie: {
                        donut: {
                            size: '75%',
                            background: 'transparent',
                            labels: {
                                show: true,
                                name: {
                                    show: true,
                                    fontSize: '29px',
                                    fontFamily: 'Nunito, sans-serif',
                                    color: '#2b2b2b',
                                    offsetY: -10
                                },
                                value: {
                                    show: true,
                                    fontSize: '26px',
                                    fontFamily: 'Nunito, sans-serif',
                                    color: '#bfc9d4',
                                    offsetY: 16,
                                    number_format: function(val) {
                                        return val
                                    }
                                },
                                total: {
                                    show: true,
                                    showAlways: true,
                                    label: 'Total',
                                    color: '#2b2b2b',
                                    fontSize: '30px',
                                    number_format: function(w) {
                                        return w.globals.seriesTotals.reduce(function(a, b) {
                                            return a + b
                                        }, 0)
                                    }
                                }
                            }
                        }
                    }
                },
                stroke: {
                    show: true,
                    width: 15,
                    colors: '#1E1F25'
                },
                responsive: [{
                        breakpoint: 1440,
                        options: {
                            chart: {
                                width: 325
                            },
                        }
                    },
                    {
                        breakpoint: 1199,
                        options: {
                            chart: {
                                width: 380
                            },
                        }
                    },
                    {
                        breakpoint: 575,
                        options: {
                            chart: {
                                width: 320
                            },
                        }
                    },
                ],
            };

            var chart = new ApexCharts(document.querySelector("#chart2"), options);
            chart.render();

            var chart2 = new ApexCharts(document.querySelector("#chart3"), options);
            chart2.render();
        })
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make(Config::theme() . 'layout.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\strong-capitals\main\resources\views/frontend/light/user/dashboard.blade.php ENDPATH**/ ?>