<header class="banner md:container p-4 mx-auto flex justify-between items-center ">
  <div class="navbar-item navbar-item__logo">
    <a href="{{ home_url('/') }}">
      <img width="120" alt="{{ get_bloginfo('name', 'display') }}" src="{{ the_field('site_logo', 'option') }}" />
    </a>
  </div>

  @if (has_nav_menu('primary_navigation'))
    <nav class="nav-primary" aria-label="{{wp_get_nav_menu_name('primary_navigation')}}">
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
    </nav>
  @endif

  <button class='button'>Book a Demo</button>
</header>
