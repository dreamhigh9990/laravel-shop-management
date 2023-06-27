<?php $__env->startSection('content'); ?>
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
    </div>


    <div class="container-fluid mt--7">
        
        <div class="row">

            <div class="col-12">
                <?php if(session('status')): ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?php echo e(session('status')); ?>

                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>
            </div>

            <?php $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-<?php echo e($col); ?>">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0"><?php echo e($plan['name']); ?></h3>
                            </div>
                            <div class="col-4">
                                <h3 class="mb-0"><?php echo money($plan['price'], env('CASHIER_CURRENCY','usd'),true); ?>/<?php echo e($plan['period']==1?__('m'):__('y')); ?></h3>
                            </div>
                            
                        </div>
                    </div>

                    
                    <?php if(count($plans)): ?>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col"><?php echo e(__('Features')); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = explode(",",$plan['features']); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($feature); ?> </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                       
                        
                    </div>
                    <?php endif; ?>
                    <div class="card-footer py-4">
                        <?php if($plan['id'].""==$currentPlan->id.""): ?>
                            <a href="" class="btn btn-primary disabled"><?php echo e(__('Current Plan')); ?></a>
                        <?php else: ?>
                            <?php if(strlen($plan['paddle_id'])>2): ?>
                            <a href="javascript:openCheckout(<?php echo e($plan['paddle_id']); ?>)" class="btn btn-primary"><?php echo e(__('Switch to ').$plan['name']); ?></a>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
            
        </div>

        
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card bg-secondary shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0"><?php echo e(__('Your current plan')); ?></h3>
                            </div>
                            
                        </div>
                    </div>
                    <div class="card-body">
                        <p><?php echo e(__('You are currently using the ').$currentPlan->name." ".__('plan')); ?><p>
                            <?php if(strlen(auth()->user()->plan_status)>0): ?>
                            <p><?php echo e(__('Status').": "); ?> <strong><?php echo e(auth()->user()->plan_status); ?></strong><p>
                            <?php endif; ?>
                    </div>
                    <?php if(strlen(auth()->user()->cancel_url)>5): ?>
                    <div class="card-footer py-4">
                        <a href="<?php echo e(auth()->user()->update_url); ?>" target="_blank" class="btn btn-warning"><?php echo e(__('Update subscription')); ?></a>
                        <a href="<?php echo e(auth()->user()->cancel_url); ?>" target="_blank" class="btn btn-danger"><?php echo e(__('Cancel subscription')); ?></a>
                    </div>
                    <?php endif; ?>
                </div>
                
            </div>
            
        </div>


        <?php echo $__env->make('layouts.footers.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script src="https://cdn.paddle.com/paddle/paddle.js"></script>
<script type="text/javascript">
    "use strict";
    var paddleVendorID=<?php echo e(env('paddleVendorID','')); ?>;
    var currentUserEmail="<?php echo e(auth()->user()->email); ?>";
    Paddle.Setup({ vendor: paddleVendorID  });
	function openCheckout(product_id) {
		var form = document.getElementById('pre-checkout');
		Paddle.Checkout.open({
			product: product_id,
			email: currentUserEmail
		});
	}
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['title' => __('Pages')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/danieldimov/Documents/Projects/Mobidonia/CodeCanyon/MRestorant/Site/resources/views/plans/current.blade.php ENDPATH**/ ?>