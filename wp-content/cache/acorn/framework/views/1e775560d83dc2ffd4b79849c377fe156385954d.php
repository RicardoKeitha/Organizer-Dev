<section class="w-full h-1/4 py-20">
	<div class="w-3/4 max-w-screen-2xl mx-auto text-center">
		<p class="text-14 leading-p text-black font-normal"><?php echo e(get_sub_field('heading')); ?></p>
		<div class="flex m-4">
			<?php
			while( have_rows('logo_repeater') ) : the_row();
			?>
			<div class="basis-1/5">
	        	<img src="<?php echo e(get_sub_field('logo')); ?>"/>
	        </div>
			<?php
	    	endwhile;
			?>
		</div>
  	</div>
</section>

<?php /**PATH /opt/lampp/htdocs/wordpress/wp-content/themes/organizer/resources/views/partials/partners.blade.php ENDPATH**/ ?>