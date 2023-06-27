 <!-- DEMO -->
 <section id="demo" class="section section-lg pb-5 bg-soft">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="mb-4"><?php echo e(__('qrlanding.demo_title')); ?></h2>
                <p class="lead mb-5"><?php echo e(__('qrlanding.demo_subtitle') . " "); ?><span class="font-weight-bolder"><?php echo e(__('qrlanding.qr_code')); ?></span> <?php echo e(__('qrlanding.below')); ?>!</p>
                <a href="#" class="icon icon-lg text-gray mr-3">
                    <img style="width:300px" src="<?php echo e(asset('impactfront')); ?>/img/qrdemo.jpg" />

                </a>

            </div>
            <div class="col-12 text-center">
                <!-- Button Modal -->
                <a href="<?php echo e(route('newrestaurant.register')); ?>" class="btn btn-secondary animate-up-2"><span class="mr-2"><i class="fas fa-hand-pointer"></i></span><?php echo e(__('qrlanding.demo_button')); ?></a>
            </div>
        </div>
    </div>
</section>
<?php /**PATH /Users/danieldimov/Documents/Projects/Mobidonia/CodeCanyon/MRestorant/Site/resources/views/qrsaas/partials/demo.blade.php ENDPATH**/ ?>