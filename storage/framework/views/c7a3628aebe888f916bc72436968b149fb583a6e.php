<?php $__env->startSection('content'); ?>
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8 mt--4">
       <?php if(isset($breadcrumbs)): ?>
           <?php echo $__env->make('general.breadcrumbs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
       <?php endif; ?>
    </div>





    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0"><?php echo e(__($title)); ?></h3>
                            </div>
                            <?php if(isset($action_link)): ?>
                                <div class="col-4 text-right">
                                    <a href="<?php echo e($action_link); ?>" class="btn btn-sm btn-primary"><?php echo e(__($action_name)); ?></a>
                                </div>
                            <?php endif; ?>

                        </div>
                    </div>

                    <div class="col-12">
                        <?php echo $__env->make('partials.flash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>

                   <?php if(isset($iscontent)): ?>
                       <div class="card-body">
                            <?php echo $__env->yieldContent('cardbody'); ?>
                       </div>
                   <?php else: ?>
                    <?php if(count($items)): ?>
                        <div class="table-responsive">
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <?php echo $__env->yieldContent('thead'); ?>
                                </thead>
                                <tbody>
                                    <?php echo $__env->yieldContent('tbody'); ?>
                                </tbody>
                            </table>
                        </div>
                    <?php endif; ?>
                    <div class="card-footer py-4">
                        <?php if(count($items)): ?>
                            <nav class="d-flex justify-content-end" aria-label="...">
                                <?php echo e($items->links()); ?>

                            </nav>
                        <?php else: ?>
                            <h4><?php echo e(__("There are no")." ".$item_names); ?> ...</h4>
                        <?php endif; ?>
                    </div>
                   <?php endif; ?>


                </div>
            </div>
        </div>

        <?php echo $__env->make('layouts.footers.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['title' => __($title)], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/danieldimov/Documents/Projects/Mobidonia/CodeCanyon/MRestorant/Site/resources/views/general/index.blade.php ENDPATH**/ ?>