@php
$brand_phone_link = get_field('brand_phone_link', 'option');
$opening_hour_title = get_field('opening_hour_title', 'option');
$brand_phone_label = get_field('brand_phone_label', 'option');
$brand_phone_alt_link = get_field('brand_phone_alt_link', 'option');
$brand_phone_alt_label = get_field('brand_phone_alt_label', 'option');
$brand_fax = get_field('brand_fax', 'option');
$brand_email = get_field('brand_email', 'option');
$locations = get_field('locations', 'option');
$social_facebook = get_field('social_facebook', 'option');
$social_twitter = get_field('social_twitter', 'option');
$social_instagram = get_field('social_instagram', 'option');
$social_youtube = get_field('social_youtube', 'option');
$social_linkedin = get_field('social_linkedin', 'option');
$social_pinterest = get_field('social_pinterest', 'option');
@endphp
<div class="{!! $colour == 'dark' ? ' bg-white border border-[#D0D0D0] py-5 px-7' : null !!}">
  <ul class="list-reset">
    @if( $brand_phone_link )
    <li class="text-lg mb-4">
      <a href="tel:{!!$brand_phone_link !!}" class="{!! $colour == 'light' ? 'text-primary' : 'text-[#242D36]' !!}">
        <i class="fa fa-phone float-left mr-3 {!! $colour == 'white' ? 'text-' . $colour   : 'text-primary' !!}"></i>
        <span class="table-cell font-normal font-body">{!! $brand_phone_label ? $brand_phone_label : $brand_phone_link !!}</span>
      </a>
    </li>
    @endif
    {{-- @if( $brand_phone_alt_link )
    <li class="text-lg mb-4">
      <a href="tel:{!! $brand_phone_alt_link !!}" class="{!! $colour == 'light' ? 'text-primary' : 'text-[#242D36]' !!}">
        <i class="fa fa-phone-plus float-left mr-3 {!! $colour == 'white' ? 'text-' . $colour   : 'text-primary' !!}"></i>
        <span class="table-cell font-normal font-body">{!! $brand_phone_alt_label ? $brand_phone_alt_label : $brand_phone_alt_link !!}</span>
      </a>
    </li>
    @endif --}}
    @if( $brand_fax )
    <li class="text-lg {!! $colour == 'light' ? 'text-primary' : 'text-[#242D36]' !!} mb-4">
      <i class="fa fa-print float-left mr-3 {!! $colour == 'white' ? 'text-' . $colour   : 'text-primary' !!}"></i>
      <span class="table-cell font-normal font-body">{!! $brand_fax !!}</span>
    </li>
    @endif
    @if( $brand_email )
    <li class="text-lg mb-4">
      <a href="mailto:{!! $brand_email !!}" class="{!! $colour == 'light' ? 'text-primary' : 'text-[#242D36]' !!}">
        <i class="fa fa-envelope-open float-left mr-3 {!! $colour == 'white' ? 'text-' . $colour   : 'text-primary' !!}"></i>
        <span class="table-cell font-normal font-body">{!! $brand_email !!}</span>
      </a>
    </li>
    @endif
    @if( have_rows('locations', 'option') )
      <div class="flex">
        @while( have_rows('locations', 'option') )
        @php
        the_row();
        $address_name = get_sub_field('address_name');
        $address_line_1 = get_sub_field('address_line_1');
        $address_line_2 = get_sub_field('address_line_2');
        $address_city = get_sub_field('address_city');
        $address_county = get_sub_field('address_county');
        $address_post_code = get_sub_field('address_post_code');
        $address_country = get_sub_field('address_country');
        $address_link = get_sub_field('address_link');
        @endphp
        {!! $address_link ? '<a class="flex mr-6" href="' . $address_link . '" target="_blank">' : null !!}
          <i class="fa fa-map-marker-alt mr-3 {!! $colour == 'white' ? 'text-' . $colour   : 'text-primary' !!}"></i>
          <ul class="list-reset font-bold">
            {!! $address_name ? '<li class="mb-2"><h4 class="text-' . $colour . ' font-bold uppercase tracking-widest mb-2">' . $address_name . '</h4></li>' : null !!}
            {!! $address_line_1 ? '<li class="font-bold text-[#242D36]">' . $address_line_1 .  ' </li>' : null !!}
            {!! $address_line_2 ? '<li class="font-bold text-[#242D36]">' . $address_line_2 . '</li>' : null !!}
            {!! $address_county ? '<li class="font-bold text-[#242D36]">' . $address_county . '</li>' : null !!}
            {!! $address_city ? '<li class="font-bold text-[#242D36]">' . $address_city . '</li>' : null !!}
            {!! $address_post_code ? '<li class="font-bold text-[#242D36]">' . $address_post_code . '</li>' : null !!}
            {!! $address_country ? '<li class="font-bold text-[#242D36]">' . $address_country . '</li>' : null !!}
          </ul>
        {!! $address_link ? '</a>' : null !!}
        @endwhile
      </div>
    @endif
    <div class="mt-3">
      <div class="flex">
        <i class="fa fa-clock mr-3 {!! $colour == 'white' ? 'text-' . $colour   : 'text-primary' !!}"></i>
        <div>
          <h2 class="text-2xl font-bold text-white mb-1-5">{!! $opening_hour_title !!}</h2>
          @if (have_rows('time', 'option'))
          @while(have_rows('time', 'option'))
                  @php
                      the_row();
                      $time_1 = get_sub_field('time_1');
                      $time_2 = get_sub_field('time_2');
                      $time_3 = get_sub_field('time_3');
                  @endphp
                  <ul class="list-reset font-light text-white">
                      {!! $time_1 ? '<li  class="font-bold text-[#242D36]">' . $time_1 . '</li>' : null !!}
                      {!! $time_2 ? '<li  class="font-bold text-[#242D36]">' . $time_2 . '</li>' : null !!}
                      {!! $time_3 ? '<li  class="font-bold text-[#242D36]">' . $time_3 . '</li>' : null !!}
                  </ul>
              @endwhile
          @endif
        </div>
      </div>
      
    </div>
    <ul class="list-reset text-sm flex flex-wrap py-8">
      @if ($colour == 'dark')
      @include('partials.components.social_icons' , ['location'=>'form'])
      @else
      @include('partials.components.social_icons' , ['location'=>'footer'])
      @endif
    </ul>
  </ul>
</div>