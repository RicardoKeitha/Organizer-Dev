<header class="banner absolute top-0">
  <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
    <div class="max-w-7 px-3 mx-auto">
      <div class="flex justify-between h-16">
        <div class="basis-2/12">
          <img src="{{the_field('logo_header','option')}}"/>
        </div>
        <div class="basis-6/12">
          @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
          @endif
        </div>
        <div class="basis-4/12">
          <button>
            {{the_field('login_button','option')}}
          </button>
          <button>
            {{the_field('register_button','option')}}
          </button>
        </div>
      </div>
    </div>
  </nav>
</header>
