<!--Contact Form Layout-->
<section class="w-full h-3/4 mb-12">
	<div class="w-full md:w-3/4 max-w-screen-2xl h-full bg-comp-white bg-bottom mx-auto rounded-3xl py-16 px-auto">
		<div class="my-6 mx-auto">
			<div class="w-3/4 mx-auto">
				<h2 class="w-full md:w-1/2 my-4 mx-auto text-center text-h2 text-black font-bold tracking-tight leading-h2"><?php echo e(the_sub_field('heading')); ?></h2>
				<?php
				echo do_shortcode(get_sub_field('form_code'))
				?>
			</div>
		</div>
  	</div>
</section>

<?php /**PATH /opt/lampp/htdocs/wordpress/wp-content/themes/organizer/resources/views/partials/contact.blade.php ENDPATH**/ ?>