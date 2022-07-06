<!--Video Layout-->
<section class="w-full max-h-3/4 mb-12">
	<div class="flex w-3/4 max-w-screen-2xl h-full bg-brand-blue bg-bottom mx-auto rounded-3xl py-12 px-auto" x-data="{ open: false }">
		<div class="basis-1/2 my-6 mx-auto">
			<div class="w-3/4 mx-auto pl-12">
				<h2 class="my-4 text-h2 text-white font-bold tracking-tight leading-h2">{{the_sub_field('heading')}}</h2>
					@php
					while( have_rows('steps') ) : the_row();
					@endphp
					<div class="my-12">
						<div class="flex my-6">
					        <img class="max-h-[26px] self-center" src="{{get_sub_field('icon')}}"/>
					        <h3 class="ml-2 text-h3 text-white font-bold leading-h3">{{get_sub_field('heading')}}</h3>
					    </div>
					    <p class="mb-4 text-12 text-white font-normal leading-p">{{get_sub_field('copy')}}</p>
					</div>
					@php
			    	endwhile;
					@endphp
			</div>
		</div>
		<div class="basis-1/2 my-auto mx-auto relative">
			<a class="w-full">
				<img class="transition hover:scale-105 duration-200 max-h-96 mx-auto relative" @click="open = true" src="{{get_sub_field('thumbnail')}}"/>
			</a>
		</div>
		<!--Video Modal-->
		<div class="fixed z-10 w-full h-full top-0 left-0 flex items-center justify-center z-1" x-cloak x-show="open">
			<div class="fixed w-full h-full bg-gray-500 bg-opacity-50 flex">
				<div class="relative z-20 mx-auto my-auto items-center" @click.away="open = false" >
					{{the_sub_field('video')}}
				</div>
			</div>
		</div>
  	</div>
</section>

