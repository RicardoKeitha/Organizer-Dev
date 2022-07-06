<section class="h-2">
	<div class="w-screen h-5/6" style="background-image: url('{{get_sub_field('background_image')}}')">
		<h3>{{get_sub_field('heading')}}</h3>
		@php
		while( have_rows('logo_repeater') ) : the_row();
		@endphp
        	<img src="{{get_sub_field('logo')}}"/>
		@php
    	endwhile;
		@endphp
  	</div>
</section>

