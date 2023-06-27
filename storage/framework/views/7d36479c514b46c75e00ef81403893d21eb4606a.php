<a href="#" class="btn btn-neutral btn-icon web-menu" data-toggle="dropdown" role="button">
    <span class="btn-inner--icon">
        <i class="fa fa-user mr-2"></i>
      </span>
    <span class="nav-link-inner--text"><?php echo e(Auth::user()->name); ?></span>
</a>
<a href="#" class="nav-link nav-link-icon mobile-menu" data-toggle="dropdown" role="button">
    <span class="btn-inner--icon">
        <i class="fa fa-user mr-2"></i>
      </span>
    <span class="nav-link-inner--text"><?php echo e(Auth::user()->name); ?></span>
</a>
<div class="dropdown-menu">
    <a href="/profile" class="dropdown-item"><?php echo e(__('Profile')); ?></a>
    <?php if(auth()->check() && auth()->user()->hasRole('admin')): ?>
        <a href="/home" class="dropdown-item"><?php echo e(__('Dashboard')); ?></a>
        <a class="dropdown-item " href="/live"><?php echo e(__('Live Orders')); ?></a>
        <a href="/orders" class="dropdown-item"><?php echo e(__('Orders')); ?></a>
        <a href="/restorants" class="dropdown-item"><?php echo e(__('Restaurants')); ?></a>
        <a href="/drivers" class="dropdown-item"><?php echo e(__('Drivers')); ?></a>
        <a href="/clients" class="dropdown-item"><?php echo e(__('Clients')); ?></a>
        <a href="/pages" class="dropdown-item"><?php echo e(__('Pages')); ?></a>
        <a href="/settings" class="dropdown-item"><?php echo e(__('Settings')); ?></a>
    <?php endif; ?>
    <?php if(auth()->check() && auth()->user()->hasRole('owner')): ?>
        <a href="/home" class="dropdown-item"><?php echo e(__('Dashboard')); ?></a>
        <a class="dropdown-item " href="/live"><?php echo e(__('Live Orders')); ?></a>
        <a href="/orders" class="dropdown-item"><?php echo e(__('Orders')); ?></a>
        <a href="<?php echo e(route('restorants.edit', auth()->user()->restorant->id)); ?>" class="dropdown-item"><?php echo e(__('Restaurant')); ?></a>
        <a href="/items" class="dropdown-item"><?php echo e(__('Menu')); ?></a>
    <?php endif; ?>
    <?php if(auth()->check() && auth()->user()->hasRole('client')): ?>
        <a href="/orders" class="dropdown-item"><?php echo e(__('My Orders')); ?></a>
        <a href="addresses" class="dropdown-item"><?php echo e(__('My Addresses')); ?></a>
    <?php endif; ?>
    <?php if(auth()->check() && auth()->user()->hasRole('driver')): ?>
        <a href="/orders" class="dropdown-item"><?php echo e(__('Orders')); ?></a>
    <?php endif; ?>
   
   <a href="<?php echo e(route('logout')); ?>" class="dropdown-item" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
        <span><?php echo e(__('Logout')); ?></span>
    </a>
</div>
<?php /**PATH /Users/danieldimov/Documents/Projects/Mobidonia/CodeCanyon/MRestorant/Site/resources/views/layouts/menu/partials/auth.blade.php ENDPATH**/ ?>