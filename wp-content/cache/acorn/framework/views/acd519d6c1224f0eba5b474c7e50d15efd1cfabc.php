<!--Testimonials Layout-->
<section class="w-full h-3/4 mb-12 bg-gradient-to-r from-brand-blue via-brand-purple to-main-pink py-6">
	<div class="max-w-screen-2xl w-3/4 h-1/5 mx-auto my-4 flex">
		<div class="basis-1/2">
			<h2 class="my-4 text-h2 text-white font-bold tracking-tight leading-h2"><?php echo e(the_sub_field('heading')); ?></h2>
		</div>
		<div class="basis-1/2 justify-end">
			<img class="max-h-24 ml-auto relative" src="<?php echo e(get_sub_field('image_seal')); ?>"/>
		</div>
	</div>
	<div class="w-3/4 max-w-screen-2xl md:flex md:space-x-6 h-full mx-auto pb-12 px-auto md:my-0 my-3">
		<?php
		while( have_rows('cards') ) : the_row();
		?>
		<div class="lg:basis-1/3 basis-full h-[360px] my-1 bg-main-white border rounded-3xl relative">
			<div class="w-4/5 mx-auto min-h-3/4 px-4 py-4">
				<p class="mb-4 text-12 text-black font-normal leading-p"><?php echo e(get_sub_field('copy')); ?></p>
			</div>
			<div class="h-1/4 w-4/5 mx-auto px-4 py-4">
				<div class="flex absolute bottom-3">
					<div class="basis-1/3 self-center">
						<img class="max-h-20 mx-auto" src="<?php echo e(get_sub_field('photo')); ?>"/>
					</div>
					<div class="basis-2/3 w-full mx-auto self-center">
						<h4 class="ml-2 text-h4 text-black font-bold leading-h4"><?php echo e(get_sub_field('name')); ?></h4>
			    		<p class="ml-2 text-12 text-black font-normal leading-p"><?php echo e(get_sub_field('title')); ?></p>
					</div>
				</div>
			</div>
		</div>
		<?php
    	endwhile;
		?>
  	</div>
</section>

<?php /**PATH /opt/lampp/htdocs/wordpress/wp-content/themes/organizer/resources/views/partials/testimonials.blade.php ENDPATH**/ ?>