<a class="sr-only focus:not-sr-only" href="#main">
  <?php echo e(__('Skip to content')); ?>

</a>

<?php echo $__env->make('sections.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <main id="main" class="main">
    <?php echo $__env->yieldContent('content'); ?>
  </main>

<?php echo $__env->make('sections.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /opt/lampp/htdocs/wordpress/wp-content/themes/organizer/resources/views/layouts/app.blade.php ENDPATH**/ ?>