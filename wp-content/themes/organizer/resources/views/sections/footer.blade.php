<!--Footer-->
<footer class="py-12 content-info bg-comp-white">
  <div class="max-w-7 px-3 mx-auto">
      <div class="w-3/4 mx-auto flex justify-between h-16">
        <div class="hidden md:block basis-1/3 my-auto">
          <img src="{{the_field('logo_footer','option')}}"/>
        </div>
        <div class="hidden basis-2/3 md:flex my-auto justify-end">
          @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
          @endif
          <a class="self-center" href="{{the_field('facebook_link','option')}}">
            <img class="my-auto px-3" src="{{the_field('facebook_icon','option')}}">
          </a>
          <a class="self-center" href="{{the_field('instagram_link','option')}}">
            <img class="my-auto px-3" src="{{the_field('instagram_icon','option')}}">
          </a>
        </div>
      </div>
      <hr class="w-3/4 mx-auto border border-zinc-100 my-6">
      <div class="w-3/4 mx-auto flex">
        <div class="basis-1/2">
          <p>{{the_field('copyright_left','option')}}</p>
        </div>
        <div class="basis-1/2" style="text-align: right;">
          <p>{{the_field('copyright_right','option')}}</p>
        </div>
      </div>
    </div>
</footer>
