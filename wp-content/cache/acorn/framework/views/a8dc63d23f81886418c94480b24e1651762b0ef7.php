<!--Slideshow Layout-->
<?php
$images = [];
while( have_rows('gallery') ) : the_row();
	$url = get_sub_field('image');
	$images[] = $url;
endwhile;
?>
<script>
	let gallery = <?php echo e(Js::from($images)); ?>

</script>
<section class="w-full h-3/4 mb-12">
	<div class="flex w-3/4 max-w-screen-2xl h-full mx-auto rounded-3xl py-16 px-auto" x-data="{ selected: 0, images: gallery }">
		<div class="basis-1/2 my-6 mx-auto">
			<div class="w-3/4 mx-auto pl-12">
				<h2 class="my-4 text-h2 text-black font-bold tracking-tight leading-h2"><?php echo e(the_sub_field('heading')); ?></h2>
				<p class="text-14 text-black font-normal leading-p"><?php echo e(get_sub_field('copy')); ?></p>
			</div>
		</div>
		<div class="basis-1/2 mx-auto">
			<div class="w-full relative">
				<img class="max-h-96 mx-auto rounded-2xl border-2" x-bind:src="images[selected]"/>
				<div class="w-full absolute bottom-0 h-1/8">
					<div class="mx-auto">
						<img class="hover:invert" src="http://localhost/wordpress/wp-content/uploads/2022/07/btn-slide-voltar-hover-54.svg">
						<img class="hover:invert" src="http://localhost/wordpress/wp-content/uploads/2022/07/btn-slide-proximo-hover-54.svg">
					</div>
				</div>
			</div>
		</div>
  	</div>
</section><?php /**PATH /opt/lampp/htdocs/wordpress/wp-content/themes/organizer/resources/views/partials/about-slideshow.blade.php ENDPATH**/ ?>