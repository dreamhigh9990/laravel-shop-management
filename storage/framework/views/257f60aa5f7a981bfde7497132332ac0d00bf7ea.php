<?php if(auth()->user()->hasRole('admin') || auth()->user()->hasRole('owner') || auth()->user()->hasRole('driver')): ?>
<div class="card-footer py-4">
    <h6 class="heading-small text-muted mb-4"><?php echo e(__('Actions')); ?></h6   >
    <nav class="justify-content-end" aria-label="...">
    <?php if(auth()->check() && auth()->user()->hasRole('admin')): ?>
        <script>
            function setSelectedOrderId(id){
                $("#form-assing-driver").attr("action", "/updatestatus/assigned_to_driver/"+id);
            }
        </script>
        <?php if($order->status->pluck('alias')->last() == "just_created"): ?>
            <a href="<?php echo e(url('updatestatus/accepted_by_admin/'.$order->id)); ?>" class="btn btn-primary"><?php echo e(__('Accept')); ?></a>
            <a href="<?php echo e(url('updatestatus/rejected_by_admin/'.$order->id)); ?>" class="btn btn-danger"><?php echo e(__('Reject')); ?></a>
        <?php elseif($order->status->pluck('alias')->last() == "accepted_by_restaurant"&&$order->delivery_method.""!="2"): ?>
            <button type="button" class="btn btn-primary" onClick=(setSelectedOrderId(<?php echo e($order->id); ?>))  data-toggle="modal" data-target="#modal-asign-driver"><?php echo e(__('Assign to driver')); ?></button>
        <?php elseif($order->status->pluck('alias')->last() == "prepared"&&$order->delivery_method.""!="2"&&$order->driver==null): ?>
            <button type="button" class="btn btn-primary" onClick=(setSelectedOrderId(<?php echo e($order->id); ?>))  data-toggle="modal" data-target="#modal-asign-driver"><?php echo e(__('Assign to driver')); ?></button>
        <?php else: ?>
            <p><?php echo e(__('No actions for you right now!')); ?></p>
       <?php endif; ?>
    <?php endif; ?>
    <?php if(auth()->check() && auth()->user()->hasRole('owner')): ?>
        <?php if($order->status->pluck('alias')->last() == "accepted_by_admin"): ?>
            
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-time-to-prepare"><?php echo e(__('Accept')); ?></button>
            <a href="<?php echo e(url('updatestatus/rejected_by_restaurant/'.$order->id)); ?>" class="btn btn-danger"><?php echo e(__('Reject')); ?></a>
        <?php elseif($order->status->pluck('alias')->last() == "assigned_to_driver"||$order->status->pluck('alias')->last() == "accepted_by_restaurant"): ?>
            <a href="<?php echo e(url('updatestatus/prepared/'.$order->id)); ?>" class="btn btn-primary"><?php echo e(__('Prepared')); ?></a>
        <?php elseif(config('app.allow_self_deliver')&&$order->status->pluck('alias')->last() == "accepted_by_restaurant"): ?>
            <a href="<?php echo e(url('updatestatus/prepared/'.$order->id)); ?>" class="btn btn-primary"><?php echo e(__('Prepared')); ?></a>
        <?php elseif(config('app.allow_self_deliver')&&$order->status->pluck('alias')->last() == "prepared"): ?>
            <a href="<?php echo e(url('updatestatus/delivered/'.$order->id)); ?>" class="btn btn-primary"><?php echo e(__('Delivered')); ?></a>
        <?php elseif($order->status->pluck('alias')->last() == "prepared"&&$order->delivery_method.""=="2"): ?>
            <a href="<?php echo e(url('updatestatus/delivered/'.$order->id)); ?>" class="btn btn-primary"><?php echo e(__('Delivered')); ?></a>
        <?php else: ?>
            <p><?php echo e(__('No actions for you right now!')); ?></p>
        <?php endif; ?>
    <?php endif; ?>
    <?php if(auth()->check() && auth()->user()->hasRole('driver')): ?>
        <?php if($order->status->pluck('alias')->last() == "prepared"): ?>
            <a href="<?php echo e(url('updatestatus/picked_up/'.$order->id)); ?>" class="btn btn-primary"><?php echo e(__('Picked Up')); ?></a>
        <?php elseif($order->status->pluck('alias')->last() == "picked_up"): ?>
            <a href="<?php echo e(url('updatestatus/delivered/'.$order->id)); ?>" class="btn btn-primary"><?php echo e(__('Delivered')); ?></a>
        <?php else: ?>
            <p><?php echo e(__('No actions for you right now!')); ?></p>
        <?php endif; ?>
    <?php endif; ?>
    </nav>
</div>
<?php endif; ?>
<?php /**PATH /Users/danieldimov/Documents/Projects/Mobidonia/CodeCanyon/MRestorant/Site/resources/views/orders/partials/actions/buttons.blade.php ENDPATH**/ ?>