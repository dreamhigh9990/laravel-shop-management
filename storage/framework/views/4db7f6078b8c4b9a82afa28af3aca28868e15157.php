<footer class="footer">
    <div class="container">
      <div class="row align-items-center justify-content-md-between">
        <div class="col-md-6">
          <div class="copyright">
            &copy; 2020 <a href="" target="_blank"><?php echo e(config('global.site_name', 'mResto')); ?></a>.
          </div>
        </div>
        <div class="col-md-6">
          <ul id="footer-pages" class="nav nav-footer justify-content-end">
            <li v-for="page in pages" class="nav-item" v-cloak>
                <a :href="'/pages/' + page.id" class="nav-link">{{ page.title }}</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
<?php /**PATH /Users/danieldimov/Documents/Projects/Mobidonia/CodeCanyon/MRestorant/Site/resources/views/layouts/footers/front.blade.php ENDPATH**/ ?>