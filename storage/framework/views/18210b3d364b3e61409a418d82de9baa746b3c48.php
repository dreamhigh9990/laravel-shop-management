<ul class="navbar-nav">
    <?php if(!config('app.isqrsaas')): ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('home')); ?>">
                        <i class="ni ni-tv-2 text-primary"></i> <?php echo e(__('Dashboard')); ?>

                    </a>
                </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/live">
                            <i class="ni ni-basket text-success"></i> <?php echo e(__('Live Orders')); ?><div class="blob red"></div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('orders.index')); ?>">
                            <i class="ni ni-basket text-orange"></i> <?php echo e(__('Orders')); ?>

                        </a>
                    </li>
                    <?php if(!env('DISABLE_DELIVER',false)): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('drivers.index')); ?>">
                            <i class="ni ni-delivery-fast text-pink"></i> <?php echo e(__('Drivers')); ?>

                        </a>
                    </li>
                    <?php endif; ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('clients.index')); ?>">
                            <i class="ni ni-single-02 text-blue"></i> <?php echo e(__('Clients')); ?>

                        </a>
                    </li>
                <?php endif; ?>


                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('restorants.index')); ?>">
                        <i class="ni ni-shop text-info"></i> <?php echo e(__('Restaurants')); ?>

                    </a>
                </li>

                <?php if(!config('app.isqrsaas')&&env('ENABLE_FINANCES_ADMIN',true)): ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('reviews.index')); ?>">
                        <i class="ni ni-diamond text-info"></i> <?php echo e(__('Reviews')); ?>

                    </a>
                </li>
                <?php endif; ?>

                <?php if(env('MULTI_CITY',false)): ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('cities.index')); ?>">
                        <i class="ni ni-building text-orange"></i> <?php echo e(__('Cities')); ?>

                    </a>
                </li>
                <?php endif; ?>

                <?php if(!config('app.isqrsaas')&&env('ENABLE_FINANCES_ADMIN',true)): ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('pages.index')); ?>">
                        <i class="ni ni-ungroup text-info"></i> <?php echo e(__('Pages')); ?>

                    </a>
                </li>
                <?php endif; ?>

                <?php if(env('ENABLE_PRICING',false)): ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('plans.index')); ?>">
                        <i class="ni ni-credit-card text-orange"></i> <?php echo e(__('Pricing plans')); ?>

                    </a>
                </li>
                <?php endif; ?>

                <?php if(!config('app.isqrsaas')&&env('ENABLE_FINANCES_ADMIN',true)): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('finances.admin')); ?>">
                            <i class="ni ni-money-coins text-blue"></i> <?php echo e(__('Finances')); ?>

                        </a>
                    </li>

                <?php endif; ?>

               

                <li class="nav-item">
                    <a class="nav-link" target="_blank" href="<?php echo e(url('/admin/languages')."/".strtolower(env('APP_LOCALE','EN'))."/translations".(config('app.isqrsaas')?"?group=qrlanding":"")); ?>">
                        <i class="ni ni-world text-orange"></i> <?php echo e(__('Translations')); ?>

                    </a>
                </li>

                <?php if(env('is_demo',false)): ?>
                    <li class="nav-item">
                        <a class="nav-link" target="_blank" href="#">
                            <i class="ni ni-active-40 text-yellow"></i> <?php echo e(__('ENV Editor')); ?> ( <?php echo e(__('disabled in demo')); ?> )
                        </a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" target="_blank" href="<?php echo e(url('admin/env')); ?>">
                            <i class="ni ni-active-40 text-yellow"></i> <?php echo e(__('ENV Editor')); ?>

                        </a>
                    </li>
                <?php endif; ?>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('settings.index')); ?>">
                        <i class="ni ni-settings text-black"></i> <?php echo e(__('Settings')); ?>

                    </a>
                </li>
            </ul>
<?php /**PATH /Users/danieldimov/Documents/Projects/Mobidonia/CodeCanyon/MRestorant/Site/resources/views/layouts/navbars/menus/admin.blade.php ENDPATH**/ ?>