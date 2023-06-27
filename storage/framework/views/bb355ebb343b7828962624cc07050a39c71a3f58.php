<?php $__env->startSection('content'); ?>
    <section class="section-profile-cover section-shaped my--1 d-none d-md-none d-lg-block d-lx-block">
        <!-- Circles background -->
        <img class="bg-image " src="<?php echo e(config('global.restorant_details_cover_image')); ?>" style="width: 100%;">
        <!-- SVG separator -->
        <div class="separator separator-bottom separator-skew">

        </div>
    </section>
    <section class="section bg-secondary">

      <div class="container">

          <div class="row">

            <!-- Left part -->
            <div class="col-md-7">

              <!-- List of items -->
              <?php echo $__env->make('cart.items', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

              <?php if(count($timeSlots)>0): ?>

              <form id="order-form" role="form" method="post" action="<?php echo e(route('order.store')); ?>" autocomplete="off" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <!-- Delivery method -->
                <?php if(env('ENABLE_PICKUP',true)): ?>
                  <?php if(!env('DISABLE_DELIVER',false)): ?>
                    <?php echo $__env->make('cart.delivery', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  <?php endif; ?>
                <?php endif; ?>


                <!-- Delivery time slot -->
                <?php echo $__env->make('cart.time', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <!-- Delivery address -->
                <div id='addressBox'>
                  <?php echo $__env->make('cart.address', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>

                <!-- Comment -->
                <?php echo $__env->make('cart.comment', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

              <?php endif; ?>

              <!-- Restaurant -->
              <?php echo $__env->make('cart.restaurant', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>


          <!-- Right Part -->
          <div class="col-md-5">

            <?php if(count($timeSlots)>0): ?>
                <!-- Payment -->
                <?php echo $__env->make('cart.payment', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php else: ?>
                <!-- Closed restaurant -->
                <?php echo $__env->make('cart.closed', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>


          </div>
        </div>


    </div>
    <?php echo $__env->make('clients.modals', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
  
  <script async defer src= "https://maps.googleapis.com/maps/api/js?key=<?php echo env('GOOGLE_MAPS_API_KEY',''); ?>&callback=initAddressMap"></script>
  <script src="https://js.stripe.com/v3/"></script>
  <script>
    "use strict";
    var STRIPE_KEY="<?php echo e(env('STRIPE_KEY',"")); ?>";
    var ENABLE_STRIPE="<?php echo e(env('ENABLE_STRIPE',false)); ?>";
    var initialOrderType="<?php echo e(!env('DISABLE_DELIVER',false)?'delivery':'pickup'); ?>";
  </script>
  <script src="<?php echo e(asset('custom')); ?>/js/checkout.js"></script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.front', ['class' => ''], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/danieldimov/Documents/Projects/Mobidonia/CodeCanyon/MRestorant/Site/resources/views/cart.blade.php ENDPATH**/ ?>