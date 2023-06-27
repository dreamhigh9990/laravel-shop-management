<div class="form-group<?php echo e($errors->has($id) ? ' has-danger' : ''); ?>">
<label class="form-control-label" for="<?php echo e($id); ?>"><?php echo e(__($name)); ?><?php if(isset($link)): ?><a target="_blank" href="<?php echo e($link); ?>"><?php echo e($linkName); ?></a><?php endif; ?></label>
<input <?php if(isset($accept)): ?> accept="<?php echo e($accept); ?>" <?php endif; ?> step=".01" type="<?php echo e(isset($type)?$type:"text"); ?>" name="<?php echo e($id); ?>" id="<?php echo e($id); ?>" class="form-control form-control-alternative<?php echo e($errors->has($id) ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__($placeholder)); ?>" value="<?php echo e(old($id, isset($value)?$value:'')); ?>" <?php if($required) {echo 'required';} ?> autofocus>
    <?php if(isset($additionalInfo)): ?>
        <small class="text-muted"><strong><?php echo e(__($additionalInfo)); ?></strong></small>
    <?php endif; ?>
    <?php if($errors->has($id)): ?>
        <span class="invalid-feedback" role="alert">
            <strong><?php echo e($errors->first($id)); ?></strong>
        </span>
    <?php endif; ?>
</div>
<?php /**PATH /Users/danieldimov/Documents/Projects/Mobidonia/CodeCanyon/MRestorant/Site/resources/views/partials/input.blade.php ENDPATH**/ ?>