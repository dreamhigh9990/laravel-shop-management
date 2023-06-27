<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
    <div class="container-fluid">
        <div class="header-body">
            <!-- Card stats -->
            <div class="row">
                <div class="col-xl-3 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0"><?php echo e(__('Orders')); ?> ( 30 <?php echo e(__('days')); ?> )</h5>
                                    <span class="h2 font-weight-bold mb-0"><?php echo e($last30daysOrders); ?></span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                                        <i class="fas fa-shopping-basket"></i>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0"><?php echo e(__('Sales Volume')); ?> ( 30 <?php echo e(__('days')); ?> )</h5>
                                    <span class="h2 font-weight-bold mb-0"> <?php echo money($last30daysOrdersValue, env('CASHIER_CURRENCY','usd'),true); ?></span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0"><?php echo e(__('Orders from')); ?></h5>
                                    <span class="h2 font-weight-bold mb-0"><?php echo e($uniqueUsersOrders); ?> <?php echo e(__('Unique users')); ?></span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                                        <i class="fas fa-chart-pie"></i>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0"><?php echo e(__('Exposure to')); ?></h5>
                                    <span class="h2 font-weight-bold mb-0"><?php echo e($allClients); ?> <?php echo e(__('Users')); ?></span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                                        <i class="fas fa-users"></i>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <br/>
            <?php if(auth()->check() && auth()->user()->hasRole('admin')): ?>
            <div class="row">
                <div class="col-xl-3 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0"><?php echo e(__('Delivery Fee')); ?> ( 30 <?php echo e(__('days')); ?> )</h5>
                                    <span class="h2 font-weight-bold mb-0"> <?php echo money($last30daysDeliveryFee, env('CASHIER_CURRENCY','usd'),true); ?></span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                                        <i class="fas fa-truck"></i>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0"><?php echo e(__('Static Fee')); ?> ( 30 <?php echo e(__('days')); ?> )</h5>
                                    <span class="h2 font-weight-bold mb-0"><?php echo money($last30daysStaticFee, env('CASHIER_CURRENCY','usd'),true); ?></span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                        <i class="fas fa-chart-bar"></i>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0"><?php echo e(__('Dynamic Fee')); ?> ( 30 <?php echo e(__('days')); ?> )</h5>
                                    <span class="h2 font-weight-bold mb-0"><?php echo money($last30daysDynamicFee, env('CASHIER_CURRENCY','usd'),true); ?></span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                                        <i class="fas fa-percent"></i>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0"><?php echo e(__('Total Fee')); ?> ( 30 <?php echo e(__('days')); ?> )</h5>
                                    <span class="h2 font-weight-bold mb-0"><?php echo money(( $last30daysTotalFee != null ? $last30daysTotalFee:0), env('CASHIER_CURRENCY','usd'),true); ?></span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                                        <i class="fas fa-coins"></i>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php /**PATH /Users/danieldimov/Documents/Projects/Mobidonia/CodeCanyon/MRestorant/Site/resources/views/layouts/headers/cards.blade.php ENDPATH**/ ?>