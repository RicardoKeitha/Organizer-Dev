<footer class="content-info">
  <div class="max-w-7 px-3 mx-auto">
      <div class="flex justify-between h-16">
        <div class="basis-1/2">
          <img src="{{the_field('logo_footer','option')}}"/>
        </div>
        <div class="basis-1/2 flex-row">
          @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
          @endif
          <a href="{{the_field('facebook_link','option')}}">
            <img src="{{the_field('facebook_logo','option')}}">
          </a>
          <a href="{{the_field('instagram_link','option')}}">
            <img src="{{the_field('instagram_logo','option')}}">
          </a>
        </div>
      </div>
      <div class="flex">
        <div class="flex-row">
          <p>{{the_field('copyright_left','option')}}</p>
        </div>
        <div class="flex-row-reverse">
          <p>{{the_field('copyright_right','option')}}</p>
        </div>
      </div>
    </div>
</footer>
