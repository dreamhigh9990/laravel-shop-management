<!--<form method="POST" action="<?php echo e(route('pay')); ?>" accept-charset="UTF-8" class="form-horizontal" role="form" id="paystack-payment-form" style="display: <?php echo e(env('DEFAULT_PAYMENT','paystack')=="paystack"?"block":"none"); ?>;">
    <div class="row" style="margin-bottom:40px;">
        <div class="col-md-8 col-md-offset-2">
            <input type="hidden" name="email" value="<?php echo e(auth()->user()->email); ?>"> 
            <input type="hidden" name="orderID" value="345">
            <input type="hidden" name="amount" value="800"> 
            <input type="hidden" name="quantity" value="<?php echo e(count(Cart::getContent())); ?>">
            <input type="hidden" name="currency" value="NGN">
            <input type="hidden" name="metadata" value="<?php echo e(json_encode($array = ['key_name' => 'value',])); ?>" > 
            <input type="hidden" name="reference" value="<?php echo e(Paystack::genTranxRef()); ?>"> 
            <?php echo e(csrf_field()); ?> 

            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"> 
        </div>
    </div>
    <div class="text-center">
        <button class="btn btn-success mt-4" type="submit" value="Pay Now">
            <?php echo e(__('Place Playstack order')); ?>

        </button>
    </div>
</form>-->
<div class="text-center" id="paystack-payment-form" style="display: <?php echo e(env('DEFAULT_PAYMENT','cod')=="paystack"?"block":"none"); ?>;" >
    <button
        v-if="totalPrice"
        type="submit"
        class="btn btn-success mt-4 paymentbutton"
        onclick="this.disabled=true;this.form.submit();"
    ><?php echo e(__('Place order')); ?></button>
</div>
<?php /**PATH /Users/danieldimov/Documents/Projects/Mobidonia/CodeCanyon/MRestorant/Site/resources/views/cart/payments/paystack.blade.php ENDPATH**/ ?>