<nav id="navbar-main" class="navbar navbar-main navbar-expand-lg headroom py-lg-3 px-lg-6 navbar-light navbar-theme-primary">
    <div class="container">
        <a class="navbar-brand @logo_classes" href="/">
            <img class="navbar-brand-dark common" src="<?php echo e(config('global.site_logo')); ?>" height="35" alt="Logo">
            <img class="navbar-brand-light common" src="<?php echo e(config('global.site_logo')); ?>" height="35" alt="Logo">
        </a>
        <div class="navbar-collapse collapse" id="navbar_global">
            <div class="navbar-collapse-header">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="/">
                            <img src="<?php echo e(config('global.site_logo')); ?>" height="35" alt="Logo">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <a href="#navbar_global" role="button" class="fas fa-times" data-toggle="collapse"
                            data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false"
                            aria-label="Toggle navigation"></a>
                    </div>
                </div>
            </div>
            <ul class="navbar-nav navbar-nav-hover justify-content-center">
                <li class="nav-item" data-toggle="collapse" data-target=".navbar-collapse.show">
                    <a   data-scroll href="#product" class="nav-link"><?php echo e(__('qrlanding.product')); ?></a>
                </li>
                <li class="nav-item" data-toggle="collapse" data-target=".navbar-collapse.show">
                    <a    data-scroll href="#pricing" class="nav-link" ><?php echo e(__('qrlanding.pricing')); ?></a>
                </li>
                <li class="nav-item" data-toggle="collapse" data-target=".navbar-collapse.show">
                    <a   data-scroll href="#testimonials" class="nav-link"><?php echo e(__('qrlanding.testimonials')); ?></a>
                </li>
                <li class="nav-item" data-toggle="collapse" data-target=".navbar-collapse.show">
                    <a   data-scroll href="#demo" class="nav-link"><?php echo e(__('qrlanding.demo')); ?></a>
                </li>
            </ul>
            <form id="langswitch" name="langswitch">
                    <select onchange="this.form.submit()" class="form-control btn-outline language_selector_qr" id="lang" name="lang">
                        <?php $__currentLoopData = $availableLanguages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $short => $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option  <?php if($short==$locale): ?> selected <?php endif; ?> value="<?php echo e($short); ?>"><?php echo e($lang); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       
                        
                    </select>
            </form>

        </div>
        <div class=" @cta_button_classes">
           
            <a data-scroll href="/login" class="btn btn-md btn-docs btn-outline-white animate-up-2 mr-3"><i class="fas fa-th-large mr-2"></i>
                <?php if(auth()->guard()->check()): ?>
                    <?php echo e(__('qrlanding.dashboard')); ?>

                <?php endif; ?>
                <?php if(auth()->guard()->guest()): ?>
                    <?php echo e(__('qrlanding.login')); ?>

                <?php endif; ?>
            </a>
            <?php if(auth()->guard()->guest()): ?>
                <a href="<?php echo e(route('newrestaurant.register')); ?>" target="_blank" class="btn btn-md btn-secondary animate-up-2"><i class="fas fa-paper-plane mr-2"></i><?php echo e(__('qrlanding.register')); ?></a>
            <?php endif; ?>

        </div>
        <div class="d-flex d-lg-none align-items-center">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global"
                aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation"><span
                    class="navbar-toggler-icon"></span></button>
        </div>
    </div>
</nav>
<?php /**PATH /Users/danieldimov/Documents/Projects/Mobidonia/CodeCanyon/MRestorant/Site/resources/views/qrsaas/partials/nav.blade.php ENDPATH**/ ?>