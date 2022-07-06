<!--Footer-->
<footer class="py-12 content-info bg-comp-white">
  <div class="max-w-7 px-3 mx-auto">
      <div class="w-3/4 mx-auto flex justify-between h-16">
        <div class="basis-1/2 my-auto">
          <img src="<?php echo e(the_field('logo_footer','option')); ?>"/>
        </div>
        <div class="basis-1/2 flex my-auto justify-end">
          <?php if(has_nav_menu('primary_navigation')): ?>
          <?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]); ?>

          <?php endif; ?>
          <a class="self-center" href="<?php echo e(the_field('facebook_link','option')); ?>">
            <img class="my-auto px-3" src="<?php echo e(the_field('facebook_icon','option')); ?>">
          </a>
          <a class="self-center" href="<?php echo e(the_field('instagram_link','option')); ?>">
            <img class="my-auto px-3" src="<?php echo e(the_field('instagram_icon','option')); ?>">
          </a>
        </div>
      </div>
      <hr class="w-3/4 mx-auto border border-zinc-100 my-6">
      <div class="w-3/4 mx-auto flex">
        <div class="basis-1/2">
          <p><?php echo e(the_field('copyright_left','option')); ?></p>
        </div>
        <div class="basis-1/2" style="text-align: right;">
          <p><?php echo e(the_field('copyright_right','option')); ?></p>
        </div>
      </div>
    </div>
</footer>
<?php /**PATH /opt/lampp/htdocs/wordpress/wp-content/themes/organizer/resources/views/sections/footer.blade.php ENDPATH**/ ?>