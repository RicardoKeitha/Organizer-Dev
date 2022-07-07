<!--Slideshow Layout-->
@php
$images = [];
while( have_rows('gallery') ) : the_row();
	$url = get_sub_field('image');
	$images[] = $url;
endwhile;
@endphp
<script>
	let gallery = {{ Js::from($images) }}
</script>
<section class="w-full h-3/4 mb-12">
	<div class="md:flex w-full md:w-3/4 max-w-screen-2xl h-full mx-auto rounded-3xl py-16 px-auto" x-data="{ selected: 0, images: gallery }">
		<div class="basis-1/2 my-6 mx-auto">
			<div class="w-3/4 mx-auto md:pl-12 px-4 md:px-0">
				<h2 class="my-4 text-h2 text-black font-bold tracking-tight leading-h2">{{the_sub_field('heading')}}</h2>
				<p class="text-14 text-black font-normal leading-p">{{get_sub_field('copy')}}</p>
			</div>
		</div>
		<div class="basis-1/2 mx-auto">
			<div class="w-full relative px-4">
				<img class="max-h-96 mx-auto rounded-2xl border-2" x-bind:src="images[selected]" />
				<div class="w-full absolute bottom-0 h-1/8">
					<div class="w-3/4 flex align-center mx-auto justify-center">
						<img class="hover:invert transition	duration-100" src="http://localhost/wordpress/wp-content/uploads/2022/07/btn-slide-voltar-hover-54.svg" @click="selected = selected === 0 ? images.length -1 : selected - 1" >
						<img class="hover:invert transition	duration-100" src="http://localhost/wordpress/wp-content/uploads/2022/07/btn-slide-proximo-hover-54.svg" @click="selected = selected === images.length - 1 ? 0 : selected + 1"> 
					</div>
				</div>
			</div>
		</div>
  	</div>
</section>