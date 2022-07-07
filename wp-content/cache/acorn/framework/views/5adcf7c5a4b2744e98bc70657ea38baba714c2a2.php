<!--Image Checklist Layout-->
<section class="w-full h-3/4 mb-12">
	<div class="md:flex w-full md:w-3/4 max-w-screen-2xl h-full bg-comp-white bg-bottom mx-auto rounded-3xl py-16 px-auto">
		<div class="basis-1/2 my-6 mx-auto">
			<div class="w-full md:w-3/4 mx-auto md:pl-12 px-4 md:px-0 text-center md:text-left">
				<h2 class="my-4 text-h2 text-black font-bold tracking-tight leading-h2"><?php echo e(the_sub_field('heading')); ?></h2>
				<p class="text-14 text-black font-normal leading-p"><?php echo e(get_sub_field('copy')); ?></p>
				<hr class="border border-zinc-100 my-6">
				<?php
				while( have_rows('checklist') ) : the_row();
				?>
				<div class="flex">
			        <img class="max-h-[26px] self-center" src="<?php echo e(get_sub_field('icon')); ?>"/>
			        <p class="ml-2 text-12 font-normal leading-p"><?php echo e(get_sub_field('text')); ?></p>
			    </div>
				<?php
		    	endwhile;
				?>
			</div>
		</div>
		<div class="basis-1/2 mx-auto relative">
			<div class="bg-brand-blue absolute -bottom-4 left-[20%] right-[20%] w-3/5 h-1/2 rounded-2xl">
			</div>
			<div class="w-full">
				<img class="max-h-96 mx-auto relative" src="<?php echo e(get_sub_field('image')); ?>"/>
			</div>
		</div>
  	</div>
</section>

<?php /**PATH /opt/lampp/htdocs/wordpress/wp-content/themes/organizer/resources/views/partials/image-checklist.blade.php ENDPATH**/ ?>