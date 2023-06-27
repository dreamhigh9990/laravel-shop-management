<!--

=========================================================
* Impact Design System - v1.0.0
=========================================================

* Product Page: https://www.creative-tim.com/product/impact-design-system
* Copyright 2010 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/impact-design-system/blob/master/LICENSE.md)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<!DOCTYPE html>
<html lang="en">

<head> 
    <!-- Primary Meta Tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo e(asset('argonfront')); ?>/img/apple-icon.png">
    <link rel="icon" type="image/png" href="<?php echo e(asset('argonfront')); ?>/img/favicon.png">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta property="og:image" content="<?php echo e(config('global.site_logo')); ?>">
    <title><?php echo e(config('global.site_name','QRTiger')); ?></title>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <?php if(env('GOOGLE_ANALYTICS',false)): ?>
        <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo env('GOOGLE_ANALYTICS',''); ?>"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', '<?php echo env('GOOGLE_ANALYTICS',''); ?>');
        </script>
    <?php endif; ?>

    <?php echo $__env->yieldContent('head'); ?>
    <?php $config = (new \LaravelPWA\Services\ManifestService)->generate(); echo $__env->make( 'laravelpwa::meta' , ['config' => $config])->render(); ?>

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">


    <!-- Fontawesome -->
    <link type="text/css" href="<?php echo e(asset('impactfront')); ?>/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">


    <!-- Nucleo icons -->
    <link rel="stylesheet" href="<?php echo e(asset('impactfront')); ?>/vendor/nucleo/css/nucleo.css" type="text/css">

    <!-- Front CSS -->
    <link type="text/css" href="<?php echo e(asset('impactfront')); ?>/css/front.min.css" rel="stylesheet">

    <!-- Custom CSS by mobidonia -->
    <link type="text/css" href="<?php echo e(asset('custom')); ?>/css/custom_qr.css" rel="stylesheet">

    <!-- Custom CSS defined by admin -->
    <link type="text/css" href="<?php echo e(asset('byadmin')); ?>/front.css" rel="stylesheet">
</head>

<body>

    <header class="header-global">
        <?php echo $__env->make('qrsaas.partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </header>
    
    <main>

         <!-- Loader -->
        <div class="preloader bg-soft flex-column justify-content-center align-items-center">
            <div class="loader-element">
                <span class="loader-animated-dot"></span>
                <img src="<?php echo e(config('global.site_logo')); ?>" height="40" alt="logo">
            </div>
        </div>

        <!-- Hero 1 -->
        <?php echo $__env->make('qrsaas.partials.hero', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- Product -->
        <?php echo $__env->make('qrsaas.partials.product', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- Pricing -->
        <?php echo $__env->make('qrsaas.partials.pricing', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- Testimonials -->
        <?php echo $__env->make('qrsaas.partials.testimonials', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- DEMO -->
        <?php echo $__env->make('qrsaas.partials.demo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- Footer -->
        <?php echo $__env->make('qrsaas.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    </main>

    <!-- Core -->
    <script src="<?php echo e(asset('impactfront')); ?>/vendor/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo e(asset('impactfront')); ?>/vendor/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?php echo e(asset('impactfront')); ?>/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo e(asset('impactfront')); ?>/vendor/headroom.js/dist/headroom.min.js"></script>

    <!-- Vendor JS -->
    <script src="<?php echo e(asset('impactfront')); ?>/vendor/onscreen/dist/on-screen.umd.min.js"></script>
    <script src="<?php echo e(asset('impactfront')); ?>/vendor/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="<?php echo e(asset('impactfront')); ?>/vendor/jarallax/dist/jarallax.min.js"></script>
    <script src="<?php echo e(asset('impactfront')); ?>/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <!-- Impact JS -->
    <script src="<?php echo e(asset('impactfront')); ?>/js/front.js"></script>

    <!-- Custom JS defined by admin -->
    <?php echo file_get_contents(base_path('public/byadmin/front.js')) ?>
    
    
</body>

</html><?php /**PATH /Users/danieldimov/Documents/Projects/Mobidonia/CodeCanyon/MRestorant/Site/resources/views/qrsaas/home.blade.php ENDPATH**/ ?>