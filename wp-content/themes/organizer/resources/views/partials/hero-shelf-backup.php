<section class="h-[120vh]">
	<div class="w-screen h-3/4 bg-cover rounded-b-lg pt-12" style="background-image: url('{{get_sub_field('background_image')}}')">
		<h1>{{get_sub_field('heading')}}</h1>
		<p>{{get_sub_field('copy')}}<p>
		@php
		while( have_rows('buttons') ) : the_row();
		@endphp
        	<a href="{{get_sub_field('button_url')}}">
        		<img src="{{get_sub_field('button_image')}}"/>
			</a>
		@php
    	endwhile;
		@endphp
		<div class="w-3/4 mx-auto">
			<img class="w-3/5 mx-auto pt-32" src="{{get_sub_field('overlay')}}"/>
		</div>
  	</div>
</section>

