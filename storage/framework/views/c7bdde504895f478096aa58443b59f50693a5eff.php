<?php echo $__env->make('partials.input',['name'=>'Name','id'=>"name",'placeholder'=>"Plan name",'required'=>true,'value'=>(isset($plan)?$plan->name:null)], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="row">
    <div class="col-md-12">
        <?php echo $__env->make('partials.input',['name'=>'Plan description','id'=>"description",'placeholder'=>"Plan description...",'required'=>false,'value'=>(isset($plan)?$plan->description:null)], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <div class="col-md-12">
        <?php echo $__env->make('partials.input',['name'=>'Features list (separate features with comma)','id'=>"features",'placeholder'=>"Plan Features comma separated...",'required'=>false,'value'=>(isset($plan)?$plan->features:null)], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>

<?php echo $__env->make('partials.input',['type'=>'number','name'=>'Price','id'=>"price",'placeholder'=>"Plan prce",'required'=>true,'value'=>(isset($plan)?$plan->price:null)], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="row">
    <div class="col-md-6">
        <?php echo $__env->make('partials.input',['type'=>"number", 'name'=>'Items limit','id'=>"limit_items",'placeholder'=>"Number of items",'required'=>false,'additionalInfo'=>"0 is unlimited numbers of items",'value'=>(isset($plan)?$plan->limit_items:null)], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <div class="col-md-6">
        <?php echo $__env->make('partials.input',['name'=>'Paddle ID','id'=>"paddle_id",'placeholder'=>"Paddle ID here...",'required'=>false,'value'=>(isset($plan)?$plan->paddle_id:null)], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    
</div>

<br/>
<!-- THIS IS SPECIAL -->
<div class="">
    <label class="form-control-label"><?php echo e(__("Plan period")); ?></label>
    <div class="custom-control custom-radio mb-3">
        <input name="period" class="custom-control-input" id="monthly"  <?php if(isset($plan)): ?>  <?php if($plan->period == 1): ?> checked <?php endif; ?> <?php else: ?> checked <?php endif; ?>  value="monthly" type="radio">
        <label class="custom-control-label" for="monthly"><?php echo e(__('Monthly')); ?></label>
    </div>
    <div class="custom-control custom-radio mb-3">
        <input name="period" class="custom-control-input" id="anually" value="anually" <?php if(isset($plan) && $plan->period == 2): ?> checked <?php endif; ?> type="radio">
        <label class="custom-control-label" for="anually"><?php echo e(__('Anually')); ?></label>
    </div>
</div>
<br/>



<div class="text-center">
    <button type="submit" class="btn btn-success mt-4"><?php echo e(isset($plan)?__('Update plan'):__('SAVE')); ?></button>
</div><?php /**PATH /Users/danieldimov/Documents/Projects/Mobidonia/CodeCanyon/MRestorant/Site/resources/views/plans/form.blade.php ENDPATH**/ ?>