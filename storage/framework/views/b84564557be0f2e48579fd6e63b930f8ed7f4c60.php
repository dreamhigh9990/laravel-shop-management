<section id="pricing" class="section-header bg-primary text-white">
    <div class="container">

        <div class="row justify-content-center mb-6">
            <div class="col-12 col-md-10 text-center">
                <h1 class="display-2 mb-3"><?php echo e(__('qrlanding.pricing_title')); ?></h1>
            <p class="lead px-5"><?php echo e(__('qrlanding.pricing_subtitle')); ?></p>
            </div>
        </div>
        <div class="row text-gray">
            <?php $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo $__env->make('qrsaas.partials.plan',['plan'=>$plan,'col'=>$col], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

    </div>

</section>
<?php /**PATH /Users/danieldimov/Documents/Projects/Mobidonia/CodeCanyon/MRestorant/Site/resources/views/qrsaas/partials/pricing.blade.php ENDPATH**/ ?>