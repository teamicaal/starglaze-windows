@if( function_exists('get_field') )
  @php
  $logo = get_field('logo', 'option');
  $logo_retina = get_field('logo_retina', 'option');
  $icon = get_field('icon', 'option');
  $icon_retina = get_field('icon_retina', 'option');
  $brand_phone_link = get_field('brand_phone_link', 'option');
  $brand_phone_label = get_field('brand_phone_label', 'option');
  $brand_phone_alt_link = get_field('brand_phone_alt_link', 'option');
  $brand_phone_alt_label = get_field('brand_phone_alt_label', 'option');
  $brand_fax = get_field('brand_fax', 'option');
  $brand_email = get_field('brand_email', 'option');
  $social_facebook = get_field('social_facebook', 'option');
  $social_twitter = get_field('social_twitter', 'option');
  $social_instagram = get_field('social_instagram', 'option');
  $social_youtube = get_field('social_youtube', 'option');
  $social_linkedin = get_field('social_linkedin', 'option');
  $social_pinterest = get_field('social_pinterest', 'option');
  @endphp
@endif
<header id="header-main" class="banner fixed z-20 top-0 left-0 right-0 w-full">
  <div id="toolbar" class="header-bg hidden lg:block">
    <div class="container mx-auto">
      <div class="flex justify-between items-center">
        <ul class="list-reset">
          @if( $brand_phone_link )
          <li class="inline-block text-sm mr-8">
            <a href="tel:{{ $brand_phone_link }}">
              <i class="text-primary fa fa-phone inline-block float-left mr-2 mt-0.5"></i>
              <span class="table-cell text-gray-800 font-body">{{ $brand_phone_label ? $brand_phone_label : $brand_phone_link }}</span>
            </a>
          </li>
          @endif
          @if( $brand_email )
          <li class="inline-block text-sm mr-8">
            <a href="mailto:{{ $brand_email }}">
              <i class="text-primary fa fa-envelope-open inline-block float-left mr-2 mt-0.5"></i>
              <span class="table-cell text-gray-800 font-body">{{ $brand_email }}</span>
            </a>
          </li>
          @endif
          @include('partials.components.social_icons')
        <div class="nav-toolbar nav-has-dropdowns">
          @if( has_nav_menu('toolbar') )
            {!! wp_nav_menu(['theme_location' => 'toolbar', 'menu_class' => 'nav nav-has-dropdowns list-reset']) !!}
          @endif
        </div>
      </div>
    </div>
  </div>
  <div id="header">
    <div class="header-bg">
      <div class="container mx-auto flex items-center justify-between py-2 lg:py-0">
        {!! $brand_phone_link ? '<a href="tel:' . $brand_phone_link . '" class="lg:hidden px-4 py-2 -ml-2"><i class="fa fa-phone"></i></a>' : null; !!}
        <a class="brand border-0" href="{{ home_url('/') }}">
          @if( $logo )
          <img src="{!! $logo['url'] !!}" alt="{!! get_bloginfo('name', 'display') !!} Logo"{!! $logo_retina ? ' srcset="' . $logo['url'] . ' 1x, ' . $logo_retina['url'] . ' 2x"' : null !!} width="auto" height="50" class="hidden lg:inline-block w-auto h-[6rem]">
          @else
          {{ get_bloginfo('name', 'display') }}
          @endif
          @if( $icon )
          <img src="{!! $icon['url'] !!}" alt="{!! get_bloginfo('name', 'display') !!} Logo"{!! $icon_retina ? ' srcset="' . $icon['url'] . ' 1x, ' . $icon_retina['url'] . ' 2x"' : null !!} width="32" height="32" class="lg:hidden">
          @else
          {{ get_bloginfo('name', 'display') }}
          @endif
        </a>
        <button id="nav-primary-toggle" type="button" class="lg:hidden outline-none px-4 py-2 -mr-2"><i class="fa fa-bars"></i></button>
        <div class="nav-backdrop lg:hidden fixed w-full right-0 z-10 transition invisible opacity-0"></div>
        <nav class="nav-primary nav-has-dropdowns">
          @if( has_nav_menu('primary_navigation') )
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav relative overflow-y-scroll lg:overflow-visible z-20']) !!}
          @endif
        </nav>
      </div>
    </div>
    <div id="cookie-notice" class="relative md:fixed md:left-2 md:bottom-2 w-full transition">
      <div class="p-1 md:p-2 relative bg-white rounded-sm shadow-lg text-center md:text-left">
        <button class="cookie-notice-dismiss hidden md:inline-block text-gray-900 hover:text-green-500 transition focus:outline-none px-2 py-0-25 absolute top-1 right-1"><i class="fa fa-times fa-sm"></i></button>
        <p class="text-sm text-gray-600 mb-0 md:pr-1">
          We use cookies to improve your experience. By using our site you are agreeing to our <a href="/cookie-policy/" class="text-gray-800 border-none">Cookie Policy</a>.
        </p>
        <button class="cookie-notice-dismiss md:absolute md:right-1 bottom-0 px-2 md:px-0-25 md:py-3 inline-block text-primary hover:text-green-500 transition text-sm focus:outline-none mt-0-25"><span class="md:hidden">Tap to accept & close</span><span class="hidden md:inline">Accept & Close</span></button>
      </div>
    </div>
  </div>
</header>
