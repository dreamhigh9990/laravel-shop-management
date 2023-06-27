<?php $__env->startSection('admin_title'); ?>
    <?php echo e(__('Dashboard')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layouts.headers.cards', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-8 mb-5 mb-xl-0">
                <div class="card bg-gradient-default shadow">
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="text-uppercase text-light ls-1 mb-1"><?php echo e(__('Overview')); ?></h6>
                                <h2 class="text-white mb-0"><?php echo e(__('Sales value')); ?></h2>
                            </div>

                        </div>
                    </div>
                    <script>
                        var months = <?php echo json_encode($months); ?>;
                        function monthNumToName(monthnum) {return months[monthnum - 1] || ''}

                        var monthLabels = <?php echo json_encode($monthLabels); ?>;
                        var salesValue= <?php echo json_encode($salesValue); ?>;
                        var totalOrders = <?php echo json_encode($totalOrders); ?>;

                        for(var i=0; i<monthLabels.length; i++){monthLabels[i]=monthNumToName(monthLabels[i])}
                    </script>
                    <div class="card-body">
                        <!-- Chart -->
                        <?php if(!$salesValue->isEmpty()): ?>
                            <div class="chart">
                                <!-- Chart wrapper -->
                                <canvas id="chart-sales" class="chart-canvas"></canvas>
                            </div>
                        <?php else: ?>
                            <p class="text-white"><?php echo e(__('No sales right now!')); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card shadow">
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="text-uppercase text-muted ls-1 mb-1"><?php echo e(__('Performance')); ?></h6>
                                <h2 class="mb-0"><?php echo e(__('Total orders')); ?></h2>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- Chart -->
                        <?php if(!$totalOrders->isEmpty()): ?>
                            <div class="chart">
                                <canvas id="chart-orders" class="chart-canvas"></canvas>
                            </div>
                        <?php else: ?>
                            <p><?php echo e(__('No orders right now!')); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>


        <?php echo $__env->make('layouts.footers.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
    <script src="<?php echo e(asset('argon')); ?>/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="<?php echo e(asset('argon')); ?>/vendor/chart.js/dist/Chart.extension.js"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/danieldimov/Documents/Projects/Mobidonia/CodeCanyon/MRestorant/Site/resources/views/dashboard.blade.php ENDPATH**/ ?>