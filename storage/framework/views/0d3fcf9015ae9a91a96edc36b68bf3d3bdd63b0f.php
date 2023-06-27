<div class="card card-profile shadow mt--300">
    <div class="px-4">
      <div class="mt-5">
        <h3><?php echo e(__('Checkout')); ?><span class="font-weight-light"></span></h3>
      </div>
      <div  class="border-top">
        <!-- Price overview -->
        <div id="totalPrices" v-cloak>
            <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <span v-if="totalPrice==0"><?php echo e(__('Cart is empty')); ?>!</span>
                            <span v-if="totalPrice"><strong><?php echo e(__('Subtotal')); ?>:</strong></span>
                            <span v-if="totalPrice" class="ammount"><strong>{{ totalPriceFormat }}</strong></span>
                            <span v-if="totalPrice&&delivery"><br /><strong><?php echo e(__('Delivery')); ?>:</strong></span>
                            <span v-if="totalPrice&&delivery" class="ammount"><strong>{{ deliveryPriceFormated }}</strong></span><br /><br />
                            <span v-if="totalPrice"><strong><?php echo e(__('TOTAL')); ?>:</strong></span>
                            <span v-if="totalPrice" class="ammount"><strong>{{ withDeliveryFormat   }}</strong></span>
                            <input v-if="totalPrice" type="hidden" id="tootalPricewithDeliveryRaw" :value="withDelivery" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End price overview -->

        <!-- Payment  Methods -->
        <div class="cards">
          <div class="card-body">
              <div class="row">
                  <div class="col">

                    <!-- COD -->
                    <?php if(!env('HIDE_COD',false)): ?>
                        <div class="custom-control custom-radio mb-3">
                            <input name="paymentType" class="custom-control-input" id="cashOnDelivery" type="radio" value="cod" <?php echo e(env('DEFAULT_PAYMENT','cod')=="cod"?"checked":""); ?>>
                            <label class="custom-control-label" for="cashOnDelivery"><span class="delTime"><?php echo e(__('Cash on delivery')); ?></span> <span class="picTime"><?php echo e(__('Cash on pickup')); ?></span></label>
                        </div>
                    <?php endif; ?>

                    <!-- Errors on Stripe -->
                    <?php if(session('error')): ?>
                        <div role="alert" class="alert alert-danger"><?php echo e(session('error')); ?></div>
                    <?php endif; ?>

                    <!-- STIPE CART -->
                    <?php if(env('STRIPE_KEY',false)&&env('ENABLE_STRIPE',false)): ?>
                        <div class="custom-control custom-radio mb-3">
                            <input name="paymentType" class="custom-control-input" id="paymentStripe" type="radio" value="stripe" <?php echo e(env('DEFAULT_PAYMENT','cod')=="stripe"?"checked":""); ?>>
                            <label class="custom-control-label" for="paymentStripe"><?php echo e(__('Pay with card')); ?></label>
                        </div>
                    <?php endif; ?>

                    <!--PAYFAST -->
                    <?php if(env('ENABLE_PAYSTACK', false)): ?>
                        <div class="custom-control custom-radio mb-3">
                            <input name="paymentType" class="custom-control-input" id="paymentPaystack" type="radio" value="paystack" <?php echo e(env('DEFAULT_PAYMENT','cod')=="paystack"?"checked":""); ?>>
                            <label class="custom-control-label" for="paymentPaystack"><?php echo e(__('Pay with Paystack')); ?></label>
                        </div>
                    <?php endif; ?>

                  </div>
              </div>
          </div>
        </div>
        <!-- END Payment -->


        <!-- Payment Actions -->

        <!-- COD -->
        <?php echo $__env->make('cart.payments.cod', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- Paystack -->
        <?php if(env('ENABLE_PAYSTACK',false)): ?>
            <?php echo $__env->make('cart.payments.paystack', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>


        </form>

         <!-- Stripe -->
        <?php echo $__env->make('cart.payments.stripe', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


        <!-- END Payment Actions -->



      </div>
      <br />
      <br />
    </div>
  </div>
  <br />

  <?php if(env('IS_DEMO', false) && env('ENABLE_STRIPE', false)): ?>
    <?php echo $__env->make('cart.democards', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php endif; ?>
<?php /**PATH /Users/danieldimov/Documents/Projects/Mobidonia/CodeCanyon/MRestorant/Site/resources/views/cart/payment.blade.php ENDPATH**/ ?>