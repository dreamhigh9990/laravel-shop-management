<?php $__env->startSection('content'); ?>
<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
</div>
<div class="container-fluid mt--7">
    <div class="row">
        <div class="col-xl-12 order-xl-1">
            <div class="card bg-secondary shadow">
                <div class="card-header bg-white border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0"><?php echo e(__('Settings Management')); ?></h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="<?php echo e(route('systemstatus')); ?>" class="btn btn-sm btn-danger"><?php echo e(__('System status')); ?></a>
                        </div>
                    </div>
                </div>
                <div class="card-body">

                    <?php if(session('status')): ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?php echo e(session('status')); ?>

                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php endif; ?>
                        <form id="settings" method="post" action="<?php echo e(route('settings.update', $settings->id)); ?>" autocomplete="off" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('put'); ?>
                           
                            <div class="nav-wrapper">
                                <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"><i class="ni ni-bullet-list-67 mr-2"></i><?php echo e(__ ('Site Info')); ?></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="ni ni-image mr-2"></i><?php echo e(__ ('Images')); ?></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#cssjs" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="ni ni-palette mr-2"></i><?php echo e(__ ('CSS & JS')); ?></a>
                                    </li>
                                    <?php if(!config('app.isqrsaas')): ?>
                                        <li class="nav-item">
                                            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-3-tab" data-toggle="tab" href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false"><i class="ni ni-ui-04 mr-2"></i><?php echo e(__ ('Links')); ?></a>
                                        </li>
                                    <?php endif; ?>


                                </ul>
                            </div>
                            <br/>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                                        <?php echo $__env->make('partials.input',['id'=>'site_name','name'=>'Site Name','placeholder'=>'Site Name here ...','value'=>$settings->site_name, 'required'=>true], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                        <?php echo $__env->make('partials.input',['id'=>'site_description','name'=>'Site Description','placeholder'=>'Site Description here ...','value'=>$settings->description, 'required'=>true], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                        <?php if(!config('app.isqrsaas')): ?>
                                            <?php echo $__env->make('partials.input',['id'=>'header_title','name'=>'Header Title','placeholder'=>'Header Title here ...','value'=>$settings->header_title, 'required'=>true], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                            <?php echo $__env->make('partials.input',['id'=>'header_subtitle','name'=>'Header Subtitle','placeholder'=>'Header Subtitle here ...','value'=>$settings->header_subtitle, 'required'=>true], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                            <br/>
                                            <?php echo $__env->make('partials.input',['id'=>'delivery','name'=>'Delivery cost - fixed','placeholder'=>'Fixed delivery','value'=>$settings->delivery, 'required'=>false], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                        <?php endif; ?>
                                    </div>
                                    <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                                        <div class="row">
                                            <?php
                                                $images=[
                                                    ['name'=>'site_logo','label'=>__('Site Logo'),'value'=>config('global.site_logo'),'style'=>'width: 200px;'],
                                                    ['name'=>'search','label'=>__('Search Cover'),'value'=>config('global.search'),'style'=>'width: 200px;'],
                                                    ['name'=>'restorant_details_image','label'=>__('Restaurant Default Image'),'value'=>config('global.restorant_details_image'),'style'=>'width: 200px;'],
                                                    ['name'=>'restorant_details_cover_image','label'=>__('Restaurant Details Cover Image'),'value'=>config('global.restorant_details_cover_image'),'style'=>'width: 200px;'],
                                                    ['name'=>'favicons','label'=>__('Favicon (120x120)'),'value'=>'/apple-touch-icon.png','style'=>'width: 120px; height: 120px;']
                                                ]
                                            ?>
                                            <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="col-md-4">
                                                    <?php echo $__env->make('partials.images',$image, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="tabs-icons-text-3" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
                                        <h6 class="heading-small text-muted mb-4"><?php echo e(__('Social Links')); ?></h6>
                                        <?php echo $__env->make('partials.input',['id'=>'facebook','name'=>'Facebook','placeholder'=>'Facebook link here ...','value'=>$settings->facebook, 'required'=>false], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                        <?php echo $__env->make('partials.input',['id'=>'instagram','name'=>'Instagram','placeholder'=>'Instagram link here ...','value'=>$settings->instagram, 'required'=>false], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                        <br/>
                                        <h6 class="heading-small text-muted mb-4"><?php echo e(__('Mobile App')); ?></h6>
                                        <?php echo $__env->make('partials.input',['id'=>'mobile_info_title','name'=>'Info Title','placeholder'=>'Info Title text here ...','value'=>$settings->mobile_info_title, 'required'=>false], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                        <?php echo $__env->make('partials.input',['id'=>'mobile_info_subtitle','name'=>'Info Subtitle','placeholder'=>'Info Subtitle text here ...','value'=>$settings->mobile_info_subtitle, 'required'=>false], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                        <br/>
                                        <?php echo $__env->make('partials.input',['id'=>'playstore','name'=>'Play Store','placeholder'=>'Play Store link here ...','value'=>$settings->playstore, 'required'=>false], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                        <?php echo $__env->make('partials.input',['id'=>'appstore','name'=>'App Store','placeholder'=>'App Store link here ...','value'=>$settings->appstore, 'required'=>false], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    </div>

                                    <div class="tab-pane fade" id="cssjs" role="tabpanel" aria-labelledby="cssjs">
                                        <?php echo $__env->make('partials.textarea',['id'=>'jsfront','name'=>'JavaScript - Frontend','placeholder'=>'JavaScript - Frontend','value'=>$jsfront, 'required'=>false], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                        <?php echo $__env->make('partials.textarea',['id'=>'cssfront','name'=>'CSS - Frontend','placeholder'=>'CSS - Frontend','value'=>$cssfront, 'required'=>false], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                        <?php echo $__env->make('partials.textarea',['id'=>'jsback','name'=>'JavaScript - Backend','placeholder'=>'JavaScript - Backend','value'=>$jsback, 'required'=>false], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                        <?php echo $__env->make('partials.textarea',['id'=>'cssback','name'=>'CSS - Backend','placeholder'=>'CSS - Backend','value'=>$cssback, 'required'=>false], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    </div>


                            </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-success mt-4"><?php echo e(__('Save')); ?></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br/><br/>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script>
        $('#settings').submit(function() {
            $('form textarea').each(function(){
                this.value = this.value.replace(/script/g, 'tagscript');
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['title' => __('Settings')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\zebra-qr.com\resources\views/settings/index.blade.php ENDPATH**/ ?>