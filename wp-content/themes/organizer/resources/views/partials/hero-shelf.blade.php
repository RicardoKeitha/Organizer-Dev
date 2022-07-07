<!--Hero Shelf Layout-->
<section class="h-full mb-[100px]">
	<div class="text-center w-full h-4/5 bg-cover bg-bottom pt-12" style="background-image: url('{{get_sub_field('background_image')}}')">
		<div class="w-full md:w-1/2 mx-auto mt-12">
			<h1 class="md:py-4 px-2 text-h2 md:text-h1 text-white font-bold tracking-tight leading-h1">{{the_sub_field('heading')}}</h1>
			<div class="w-3/4 my-6 mx-auto">
				<p class="text-18 text-white font-normal leading-p">{{get_sub_field('copy')}}</p>
			</div>
			<div class="md:flex justify-center space-x-4">
		@php
		while( have_rows('buttons') ) : the_row();
		@endphp
        	<a href="{{get_sub_field('button_url')}}">
        		<img class="mx-auto md:mx-0 hover:invert transition duration-100" src="{{get_sub_field('button_image')}}"/>
			</a>
		@php
    	endwhile;
		@endphp
			</div>
		</div>
		<div class="w-full px-2 md:px-0 md:w-3/4 mx-auto">
			<img class="w-full md:w-3/5 mx-auto relative top-[100px]" src="{{get_sub_field('overlay')}}"/>
		</div>
  	</div>
</section>

