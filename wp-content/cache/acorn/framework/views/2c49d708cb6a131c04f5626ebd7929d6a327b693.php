<?php $__env->startSection('content'); ?>
    <?php
      if( have_rows('flex_content') ):
        while ( have_rows('flex_content') ) : the_row(); //Verifica os layouts
          $flex = str_replace('_','-',get_row_layout());
          $flex = 'partials.'.$flex;
    ?>
          <?php echo $__env->make($flex, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
    <?php
        endwhile;
      endif;
    ?>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/wordpress/wp-content/themes/organizer/resources/views/template-flexible.blade.php ENDPATH**/ ?>