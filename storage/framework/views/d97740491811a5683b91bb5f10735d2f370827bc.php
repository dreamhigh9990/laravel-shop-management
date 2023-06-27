<div class="modal fade" id="modal-new-extras" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="modal-title-new-extras"><?php echo e(__('Add new extras')); ?></h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body p-0">
                <div class="card bg-secondary shadow border-0">
                    <div class="card-body px-lg-5 py-lg-5">
                        <form role="form" method="post" action="<?php echo e(route('extras.store', $item)); ?>" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="form-group<?php echo e($errors->has('extras_name') ? ' has-danger' : ''); ?>">
                                <input class="form-control" name="extras_name" id="extras_name" placeholder="<?php echo e(__('Name')); ?> ..." type="text" required>
                                <?php if($errors->has('extras_name')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('extras_name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                            <div class="form-group<?php echo e($errors->has('extras_price') ? ' has-danger' : ''); ?>">
                                <input class="form-control" name="extras_price" id="extras_price" placeholder="<?php echo e(__('Price')); ?> ..." type="number" step="any" required>
                                <?php if($errors->has('extras_price')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('extras_price')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                            <input name="category_id" id="category_id" type="hidden" required>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary my-4"><?php echo e(__('Save')); ?></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-edit-extras" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="modal-title-new-extras"><?php echo e(__('Add new extras')); ?></h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body p-0">
                <div class="card bg-secondary shadow border-0">
                    <div class="card-body px-lg-5 py-lg-5">
                        <form role="form" method="post" action="<?php echo e(route('extras.edit', $item)); ?>" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="form-group<?php echo e($errors->has('extras_name_edit') ? ' has-danger' : ''); ?>">
                                <input class="form-control" name="extras_name_edit" id="extras_name_edit" placeholder="<?php echo e(__('Name')); ?> ..." type="text" required autofocus>
                                <?php if($errors->has('extras_name_edit')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('extras_name_edit')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                            <div class="form-group<?php echo e($errors->has('extras_price_edit') ? ' has-danger' : ''); ?>">
                                <input class="form-control" name="extras_price_edit" id="extras_price_edit" placeholder="<?php echo e(__('Price')); ?> ..." type="number" step="any" required autofocus>
                                <?php if($errors->has('extras_price_edit')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('extras_price_edit')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                            <input name="extras_id" id="extras_id" type="hidden" required>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary my-4"><?php echo e(__('Save')); ?></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php /**PATH /Users/danieldimov/Documents/Projects/Mobidonia/CodeCanyon/MRestorant/Site/resources/views/items/partials/modals_extras.blade.php ENDPATH**/ ?>