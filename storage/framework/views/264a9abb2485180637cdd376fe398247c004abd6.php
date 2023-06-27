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

    <!-- Custom CSS defined by admin -->
    <link type="text/css" href="<?php echo e(asset('byadmin')); ?>/front.css" rel="stylesheet">
</head>

<body>

    <header class="header-global">
        <?php echo $__env->make('qrsaas.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
        <section class="section-header pb-7 pb-lg-11 bg-soft">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-12 col-md-6 order-2 order-lg-1">
                    <img src="<?php echo e(asset('impactfront')); ?>/img/flayer.png" alt="">
                    </div>
                    <div class="col-12 col-md-5 order-1 order-lg-2">
                    <h1 class="display-2 mb-3"><?php echo e(__('Contactless QR digital menu')); ?></h1>
                          <p class="lead"><?php echo e(__('Create a digital menu for your Restaurant or Bar. Engage more with your customers.')); ?><br /><strong> <?php echo e(__('Their mobile is your menu now!')); ?></strong></p>
                          <div class="mt-4">
                            <?php if(session('status')): ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <?php echo e(session('status')); ?>

                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            <?php endif; ?>
                            <?php if(auth()->guard()->guest()): ?>
                                <form action="<?php echo e(route('newrestaurant.register')); ?>" class="d-flex flex-column mb-5 mb-lg-0">
                                    <input class="form-control" type="text" name="name" placeholder="<?php echo e(__('Restaurant or bar name')); ?>" required>
                                    <input class="form-control my-3" type="email" name="email" placeholder="<?php echo e(__('Your email')); ?>" required>
                                    <input class="form-control my-1" type="text" name="phone" placeholder="<?php echo e(__('Phone')); ?>" required>
                                    <button class="btn btn-primary my-3" type="submit"><?php echo e(__('Join now')); ?></button>
                                </form>
                            <?php endif; ?>


                            
                          </div>
                      </div>
                </div>
            </div>
            <div class="pattern bottom"></div>
        </section>

         <!-- Product -->
         <section id="product" class="section section-lg">
            <div class="container">
                <div class="row justify-content-center mb-5 mb-md-7">
                    <div class="col-12 col-md-8 text-center">
                        <h2 class="h1 font-weight-bolder mb-4"><?php echo e(__('The most comprehensive platform for QR digital menu')); ?></h2>
                        <p class="lead"><?php echo e(__('There are platforms where you can make QR code, but no menu. There are platforms where you can create a menu but not design your QR')); ?> <br /><strong><?php echo e(__('We do both')); ?>.</strong></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 mb-5">
                        <div class="card shadow-soft border-light">
                            <div class="card-header p-0">
                                <img src="<?php echo e(asset('impactfront')); ?>/img/menubuilder.jpg" class="card-img-top rounded-top" alt="image">
                            </div>
                            <div class="card-body">
                                <h3 class="card-title mt-3"><?php echo e(__('Create a Digital Menu')); ?></h3>
                                <p class="card-text"><?php echo e(__('Create your menu directly on our platform. Update anytime. Easy And Simple')); ?></p>
                                <ul class="list-group d-flex justify-content-center mb-4">
                                    <li class="list-group-item d-flex pl-0 pb-1">
                                        <span class="mr-2"><i class="fas fa-check-circle text-success"></i></span>
                                    <div><?php echo e(__('Real-time changes')); ?></div>    
                                    </li>
                                    <li class="list-group-item d-flex pl-0 pb-1">
                                        <span class="mr-2"><i class="fas fa-check-circle text-success"></i></span>
                                        <div><?php echo e(__('Organize into categories')); ?></div>      
                                    </li>
                                    <li class="list-group-item d-flex pl-0 pb-1">
                                        <span class="mr-2"><i class="fas fa-check-circle text-success"></i></span>
                                        <div><?php echo e(__('Extras and items variants')); ?></div>    
                                    </li>
                                </ul>
                                <a href="<?php echo e(route('newrestaurant.register')); ?>" class="btn btn-primary"><?php echo e(__('Experience it')); ?></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mb-5">
                        <div class="card shadow-soft border-light">
                            <div class="card-header p-0">
                                <img src="<?php echo e(asset('impactfront')); ?>/img/qr_image_builder.jpg" class="card-img-top rounded-top" alt="image">
                            </div>
                            <div class="card-body">
                                <h3 class="card-title mt-3"><?php echo e(__('Create QR')); ?></h3>
                                <p class="card-text"><?php echo e(__('8 different designs. Unlimited color options. Choose QR and Flayer style. ')); ?></p>
                                <ul class="list-group d-flex justify-content-center mb-4">
                                    <li class="list-group-item d-flex pl-0 pb-1">
                                        <span class="mr-2"><i class="fas fa-check-circle text-success"></i></span>
                                        <div><?php echo e(__('Beautifull QR Styles')); ?></div>    
                                    </li>
                                    <li class="list-group-item d-flex pl-0 pb-1">
                                        <span class="mr-2"><i class="fas fa-check-circle text-success"></i></span>
                                        <div><?php echo e(__('Pick QR color')); ?></div>        
                                    </li>
                                    <li class="list-group-item d-flex pl-0 pb-1">
                                        <span class="mr-2"><i class="fas fa-check-circle text-success"></i></span>
                                        <div><?php echo e(__('Print templates for download')); ?></div> 
                                    </li>
                                </ul>
                                <a href="<?php echo e(route('newrestaurant.register')); ?>" class="btn btn-primary"><?php echo e(__('Design it')); ?></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mb-5">
                        <div class="card shadow-soft border-light">
                            <div class="card-header p-0">
                                <img src="<?php echo e(asset('impactfront')); ?>/img/mobile_pwa.jpg" class="card-img-top rounded-top" alt="image">
                            </div>
                            <div class="card-body">
                            <h3 class="card-title mt-3"><?php echo e(__('Go Digital')); ?></h3>
                            <p class="card-text"><?php echo e(__('Now your visitors will use their mobile phone camera to access your menu.')); ?></p>
                                <ul class="list-group d-flex justify-content-center mb-4">
                                    <li class="list-group-item d-flex pl-0 pb-1">
                                        <span class="mr-2"><i class="fas fa-check-circle text-success"></i></span>
                                    <div><?php echo e(__('No mobile app required')); ?></div>    
                                    </li>
                                    <li class="list-group-item d-flex pl-0 pb-1">
                                        <span class="mr-2"><i class="fas fa-check-circle text-success"></i></span>
                                        <div><?php echo e(__('Superfast online menu - PWA')); ?></div>    
                                    </li>
                                    <li class="list-group-item d-flex pl-0 pb-1">
                                        <span class="mr-2"><i class="fas fa-check-circle text-success"></i></span>
                                        <div><?php echo e(__('View analytics')); ?></div> 
                                    </li>
                                </ul>
                                <a href="<?php echo e(route('newrestaurant.register')); ?>" class="btn btn-primary"><?php echo e(__('Go Mobile')); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pricing -->
        <section id="pricing" class="section-header bg-primary text-white">
            <div class="container">
               
                <div class="row justify-content-center mb-6">
                    <div class="col-12 col-md-10 text-center">
                        <h1 class="display-2 mb-3"><?php echo e(__('Simple Pricing')); ?></h1>
                    <p class="lead px-5"><?php echo e(__('Start free and fell in love in our pro features')); ?></p>
                    </div>
                </div>
                <div class="row text-gray">
                    <?php $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo $__env->make('qrsaas.plan',['plan'=>$plan,'col'=>$col], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                
            </div>
            
        </section>

        <!-- Testimonials -->
        <section id="testimonials" class="section section-lg">
            <div class="container">
                <div class="row justify-content-center mb-5 mb-lg-7">
                    <div class="col-12 col-md-8 text-center">
                        <h1 class="h1 font-weight-bolder mb-4"><?php echo e(__('Restaurants and Bars that love our QRs')); ?></h1>
                        <p class="lead"><?php echo e(__('Used by top restaurants worldwide')); ?></p>
                    </div>
                </div>
                <div class="row mb-lg-5">
                    <div class="col-12 col-lg-6">
                        <div class="customer-testimonial d-flex mb-5">
                            <img src="https://randomuser.me/api/portraits/men/74.jpg" class="image image-sm mr-3 rounded-circle shadow" alt="">
                            <div class="content bg-soft shadow-soft border border-light rounded position-relative p-4">
                                <div class="d-flex mb-4">
                                    <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                    <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                    <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                    <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                    <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                </div>
                                <p class="mt-2">"We use <?php echo e(env('APP_NAME')); ?> to protect our visitors. Dirty old menus are a thing from the past. So far clients report no issues. And they love our new online menu."</p>
                                <span class="h6">- James Curran <small class="ml-0 ml-md-2">Brooklyn Taco</small></span>
                            </div>
                        </div>
                        <div class="customer-testimonial d-flex mb-5">
                            <img src="https://randomuser.me/api/portraits/men/62.jpg" class="image image-sm mr-3 rounded-circle shadow" alt="">
                            <div class="content bg-soft shadow-soft border border-light rounded position-relative p-4">
                                <div class="d-flex mb-4">
                                    <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                    <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                    <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                    <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                    <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                </div>
                                <p class="mt-2">"<?php echo e(env('APP_NAME')); ?> was the perfect tool for the COVID situation. We should go earlier to this type of menu"</p>
                                <span class="h6">- Richard Thomas <small class="ml-0 ml-md-2">Burger 2Go</small></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 pt-lg-6">
                        <div class="customer-testimonial d-flex mb-5">
                            <img src="https://randomuser.me/api/portraits/women/32.jpg" class="image image-sm mr-3 rounded-circle shadow" alt="">
                            <div class="content bg-soft shadow-soft border border-light rounded position-relative p-4">
                                <div class="d-flex mb-4">
                                    <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                    <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                    <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                    <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                    <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                </div>
                                <p class="mt-2">"No more printing and reprinting for some small mistake in our menu or price change. We love what <?php echo e(env('APP_NAME')); ?> have provided. "</p>
                                <span class="h6">- Jessica Evans <small class="ml-0 ml-md-2">Awang Italian Restaurant</small></span>
                            </div>
                        </div>
                        <div class="customer-testimonial d-flex mb-5">
                            <img src="https://randomuser.me/api/portraits/men/61.jpg" class="image image-sm mr-3 rounded-circle shadow" alt="">
                            <div class="content bg-soft shadow-soft border border-light rounded position-relative p-4">
                                <div class="d-flex mb-4">
                                    <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                    <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                    <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                    <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                    <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                </div>
                                <p class="mt-2">"Clients are happy. They can see that we are a responsible bar and their health is a priority. No more old dirty menus :D. All they need is their phone."</p>
                                <span class="h6">- Jason Edwards <small class="ml-0 ml-md-2">Malibu Diner</small></span>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>

         <!-- DEMO -->
         <section id="demo" class="section section-lg pb-5 bg-soft">
            <div class="container">
                <div class="row"> 
                    <div class="col-12 text-center mb-5">
                        <h2 class="mb-4"><?php echo e(__('See a demo online menu')); ?></h2>
                        <p class="lead mb-5"><?php echo e(__('Just open the camera on your phone and scan the ')); ?><span class="font-weight-bolder"><?php echo e(__('QR code')); ?></span> <?php echo e(__('below')); ?>!</p>
                        <a href="#" class="icon icon-lg text-gray mr-3">
                            <img style="width:300px" src="<?php echo e(asset('impactfront')); ?>/img/qrdemo.jpg" />
                            
                        </a>
                       
                    </div>
                    <div class="col-12 text-center">
                        <!-- Button Modal -->
                        <a href="<?php echo e(route('newrestaurant.register')); ?>" class="btn btn-secondary animate-up-2"><span class="mr-2"><i class="fas fa-hand-pointer"></i></span><?php echo e(__('Create a menu for you, now!')); ?></a>
                    </div>
                </div> 
            </div>    
        </section>
    

   
       
       
        
       
        <footer class="footer section  pb-3 pt-1 bg-primary text-white overflow-hidden">
            
            <div class="container">
                
                <hr class="my-4 my-lg-5">
                <div class="row">
                    <div class="col pb-4 mb-md-0">
                        <div class="d-flex text-center justify-content-center align-items-center">
                            <p class="font-weight-normal mb-0">© <?php echo e(env('APP_NAME')); ?> <span class="current-year"></span>. All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

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

</html><?php /**PATH /Users/danieldimov/Documents/Projects/Mobidonia/CodeCanyon/MRestorant/Site/resources/views/qrsaas/landing.blade.php ENDPATH**/ ?>