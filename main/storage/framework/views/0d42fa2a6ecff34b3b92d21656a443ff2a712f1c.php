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
<style>
    .mobile-bottom-menu li a {
        padding: 12px 0px;
        text-align: center;
        display: block;
        color: #2b2b2b;
    }
</style>


<aside class="user-sidebar">
    <a href="<?php echo e(route('user.dashboard')); ?>" class="site-logo">
        <img src="<?php echo e(Config::getFile('dark_logo', Config::config()->dark_logo, true)); ?>" alt="image">
    </a>

    

    <ul class="sidebar-menu">
        <li class="<?php echo e(Config::singleMenu('user.dashboard')); ?>"><a href="<?php echo e(route('user.dashboard')); ?>" class="active"><i
                    class="fas fa-home"></i>
                <?php echo e(__('Dashboard')); ?></a></li>
        

        

        

        <li class="<?php echo e(Config::singleMenu('user.deposit')); ?>"><a href="<?php echo e(route('user.deposit')); ?>"><i
                    class="fas fa-credit-card"></i>Deposit Now</a></li>

        <li class="<?php echo e(Config::singleMenu('user.withdraw')); ?>"><a href="<?php echo e(route('user.withdraw')); ?>"><i
                    class="fas fa-hand-holding-usd"></i> Withdraw</a></li>



        


        

        

        <li class="<?php echo e(Config::singleMenu('user.kyc')); ?>"><a href="<?php echo e(route('user.kyc')); ?>"><i
                    class="fas fa-id-card"></i> Identity Verification</a></li>

        <li class="<?php echo e(Config::singleMenu('user.profile')); ?>"><a href="<?php echo e(route('user.profile')); ?>"><i
                    class="fas fa-user-cog"></i> Profile Settings</a></li>
        <li class="<?php echo e(Config::singleMenu('user.ticket.index')); ?>"><a href="<?php echo e(route('user.ticket.index')); ?>"><i
                    class="fas fa-ticket-alt"></i> Support Ticket</a></li>
        <li class=""><a href="<?php echo e(route('user.partner.index')); ?>"><i class="fas fa-user-alt"></i> Partners</a>
        </li>
        <li class="<?php echo e(Config::singleMenu('user.logout')); ?>"><a href="<?php echo e(route('user.logout')); ?>"><i
                    class="fas fa-sign-out-alt"></i> <?php echo e(__('Logout')); ?></a></li>
    </ul>
</aside>

<!-- mobile bottom menu start -->
<div class="mobile-bottom-menu-wrapper">
    <ul class="mobile-bottom-menu">

        <li>
            <a href="<?php echo e(route('user.deposit')); ?>" class="<?php echo e(Config::activeMenu(route('user.deposit'))); ?>">
                <i class="fas fa-wallet"></i>
                <span>Deposit</span>
            </a>
        </li>

        

        <li>
            <a href="<?php echo e(route('user.dashboard')); ?>" class="<?php echo e(Config::activeMenu(route('user.dashboard'))); ?>">
                <i class="fas fa-home"></i>
                <span>Home</span>
            </a>
        </li>

        <li>
            <a href="<?php echo e(route('user.withdraw')); ?>" class="<?php echo e(Config::activeMenu(route('user.withdraw'))); ?>">
                <i class="fas fa-hand-holding-usd"></i>
                <span>Withdraw</span>
            </a>
        </li>

        <li>
            <a href="https://app.strongcapitals.com">
                <i class="fas fa-globe"></i>
                <span>Platform Access</span>
            </a>
        </li>

        
    </ul>
</div>
<!-- mobile bottom menu end -->




<?php /**PATH E:\xampp\htdocs\strong-capitals\main\resources\views/frontend/light/layout/user_sidebar.blade.php ENDPATH**/ ?>