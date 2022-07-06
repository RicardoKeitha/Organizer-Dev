<!--Header-->
<header class="banner absolute top-0">
  <nav class="nav-primary mt-6" aria-label="<?php echo e(wp_get_nav_menu_name('primary_navigation')); ?>">
    <div class="w-screen px-3 mx-auto">
      <div class="flex justify-between h-16 w-3/4 mx-auto text-white">
        <div class="basis-2/12 my-auto">
          <img src="<?php echo e(the_field('logo_header','option')); ?>"/>
        </div>
        <div class="basis-6/12 my-auto">
          <?php if(has_nav_menu('primary_navigation')): ?>
          <?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]); ?>

          <?php endif; ?>
        </div>
        <div class="basis-4/12 flex-end my-auto">
          <button class="border rounded-lg border-main-pink hover:bg-main-pink transition duration-100 py-2 px-4 mr-4">
            <?php echo e(the_field('login_button','option')); ?>

          </button>
          <button class="border rounded-lg border-main-pink bg-main-pink py-2 px-4 mr-4">
            <?php echo e(the_field('register_button','option')); ?>

          </button>
        </div>
      </div>
    </div>
  </nav>
</header>
<?php /**PATH /opt/lampp/htdocs/wordpress/wp-content/themes/organizer/resources/views/sections/header.blade.php ENDPATH**/ ?>