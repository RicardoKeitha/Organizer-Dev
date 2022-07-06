<!--Slideshow Layout-->
@php
$images = [];
while( have_rows('gallery') ) : the_row();
	$url = get_sub_field('image');
	$images[] = $url;
endwhile;
@endphp
<section class="w-full h-3/4 mb-12">
	<div class="flex w-3/4 max-w-screen-2xl h-full mx-auto rounded-3xl py-16 px-auto" x-data="{ activeImage: 0, images(<?=json_encode($images);?>) }">
		<div class="basis-1/2 my-6 mx-auto">
			<div class="w-3/4 mx-auto pl-12">
				<h2 class="my-4 text-h2 text-black font-bold tracking-tight leading-h2">{{the_sub_field('heading')}}</h2>
				<p class="text-14 text-black font-normal leading-p">{{get_sub_field('copy')}}</p>
			</div>
		</div>
		<div class="basis-1/2 mx-auto relative">
				<div class="w-full">
					<img class="max-h-96 mx-auto relative rounded-2xl border-2" :src="images[activeImage]"/>
				</div>
		</div>
  	</div>
</section>
