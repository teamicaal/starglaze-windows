@php
$banner_type = get_sub_field('banner_type');
$images = get_sub_field('images');
$images_webp = get_sub_field('images_webp');
$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
$paragraph = get_sub_field('paragraph');
$vr_cta = get_sub_field('vr_cta');
$offer_badge = get_sub_field('offer_badge');
@endphp
@if( get_sub_field('title_h1') )
  @php $h = 'h1' @endphp
@else
  @php $h = 'h2' @endphp
@endif

<section id="hero-banner" class="section_page-banner relative">
  @if ($vr_cta)
    <a href="/our-products/">
      <div class="main-banner__product-types-vr offer-text-effect">
        <img class="main-banner__product-types-vr-image" src="/app/uploads/2023/10/vr_image.png" alt="">
        <div class="main-banner__product-types-vr-title">EXPLORE VIRTUALLY</div>
      </div>
    </a>
  @endif
  @if ($offer_badge)
    @php
      $primary_offer = get_sub_field('primary_offer');
    @endphp
    <div class="w-full lg:w-[300px] h-fit absolute z-30 right-0 bottom-0 top-0 lg:block hidden">
      <div class="{{ count($primary_offer) > 1 ? 'slick-offer' :'' }} w-full absolute z-30 right-[3rem] bottom-0 2xl:top-[9rem] top-[8rem]">
        @if (have_rows('primary_offer'))
          @while (have_rows('primary_offer')) 
          @php 
          the_row(); 
          $offer = get_sub_field('offer');
          $button_label = get_sub_field('button_label');
          $button_link = get_sub_field('button_link');
          @endphp
            <div class="flex items-center justify-center flex-col">
              <div class="relative w-full mx-auto h-fit z-30 top-8">
                @include('partials.components.ribbon-rounded',['primary_colour' => '#9F0A15'])
                <p class="text-white absolute top-[53%] left-1/2 translate-x-[-50%] translate-y-[-100%] max-w-[20rem] font-bold m-0 p-0 whitespace-nowrap font-serif text-[19px]"> SECURITY GUARANTEE </p>
              </div>
              <div class="blue-bg-gradient rounded-lg w-[220px] shadow-md mx-auto">
                <div class="child-p:text-white child-p:text-center offer-text-effect child-p:text-2xl child-p:leading-relaxed pt-4 pb-4 child-p:font-serif  child-p:m-0 ">{!! $offer !!}</div>
                <div class="h-4 w-full bg-white 2xl:block hidden"></div>
                <div class="h-1 w-full bg-white mt-1"></div>
                <a href="{{ $button_link }}" class="px-12 py-2 rounded-lg m-2 bg-white hover:scale-105 transition-all ease-in-out duration-500 text-secondary border-0 text-center flex justify-center items-center">{!! $button_label !!}</a>
              </div>
              <div id="countdown" class="text-white font-bold bg-red-500 py-2 px-4 rounded-b-lg"></div>
            </div>
          @endwhile
        @endif
      </div>
    </div>
  @endif
  @if( $banner_type )
  <div class="full-width sm:flex sm:items-center relative lg:!min-h-[89vh] sm:!min-h-[60vh] !min-h-[100vh]">
    <div class="leftBannerBox"></div>
    @if( $images )
      <div class="sm:absolute relative sm:top-0 sm:left-0 h-[40vh] w-full sm:h-full z-10">
        @if( count($images) > 1 )
        <div class="slick-banner">
        @endif
        @foreach($images as $key=>$image )
          <div class="relative {!! $key != 0 ? 'hidden' : null !!} h-full lg:!min-h-[89vh] sm:!min-h-[60vh] !min-h-[100vh]">
            <picture data-iesrc="{!! $image['url'] !!}">
              @if( $images_webp )
                @php
                  $img_webp = get_bloginfo('url') . str_replace(array('jpg', 'jpeg', 'png'), 'webp', $image['url']);
                  $img_webp_sm = str_replace('.webp', '-sm.webp', $img_webp);
                @endphp
                <source media="(max-width: 767px)" srcset="{!! $img_webp_sm !!}" type="image/webp" />
                <source media="(min-width: 768px)" srcset="{!! $img_webp !!}" type="image/webp" />
                @endif
                <source media="(min-width: 768px)" srcset="{!! wp_get_attachment_image_srcset($image['id']) !!}" type="image/jpg" />
              <img src="{{ $image['sizes']['lozad'] }}" data-src="{{ $image['sizes']['4by3-xl'] }}" class="lozad object-fit-cover w-full h-full inset-0" alt="{!! $image['alt'] !!}" width="100%" height="100%">
            </picture>
          </div>
        @endforeach
        @if( count($images) > 1 ) 
        </div>
        <div class="absolute sm:hidden z-20 bottom-0 right-0 flex">
          <button type="button" class="slick-p block w-12 h-12 text-center rounded-l-sm bg-white border-r border-grey-lighter text-grey hover:bg-grey-lightest hover:text-primary focus:bg-grey-lighter focus:text-black focus:outline-none transition inline-block"><i class="fa fa-caret-left align-middle"></i></button>
          <button type="button" class="slick-n block w-12 h-12 text-center rounded-tr-sm bg-white text-grey hover:bg-grey-lightest hover:text-primary focus:bg-grey-lighter focus:text-black focus:outline-none transition inline-block"><i class="fa fa-caret-right align-middle"></i></button>
        </div>
        @endif
      </div>
    @endif
    <div class="lg:container banner-content lg:mx-auto mx-[40px] border-b sm:border-none border-primary pt-[147px]">
      <div class="sm:w-[650px] w-full relative z-20 mx-auto lg:ml-0 lg:mr-auto">
        {!! $subtitle ? '<h4 class=" text-white lg:text-2xl text-lg font-serif uppercase tracking-wider lg:mb-4 mb-2">' . $subtitle . '</h4>' : null !!}
        {!! $title ? '<' . $h . ' class="text-3xl text-white title-shadow md:text-4xl lg:text-[66px] banner-title lg:mb-8 mb-4 font-serif font-bold">' . $title . '</' . $h . '>' : null !!}
        {!! $paragraph ? '<div class="child-p:mb-12 para-text child-p:max-w-[450px] child-p:text-white child-p:leading-loose sm:block hidden">' . $paragraph . '</div>' : null !!}
        @if( have_rows('buttons') )
          <div class="block mt-8">
            @php $i = 0; @endphp
            @while( have_rows('buttons') )
              @php
              the_row();
              $i++;
              $link = get_sub_field('link');
              $label = get_sub_field('label');
              $anchor = get_sub_field('anchor');
              @endphp
              <a href="{{ $link }}" class="btn block md:inline-block md:mr-4 mb-4 {{ $i == 1 ? 'bg-primary text-white hover:bg-secondary font-bold hover:border-none' : 'bg-white text-[#343338] font-bold border border-primary hover:bg-primary hover:text-white' }}{{ $anchor ? ' btn-scroll' : null }}">{!! $label !!}</a>
            @endwhile
          </div>
        @endif
      </div>
    </div>
    @if( count($images) > 1 )
    <div class="hidden sm:flex absolute z-20 bottom-0 right-0">
      <button type="button" class="slick-p block w-12 h-12 text-center rounded-l-sm bg-white border-r border-grey-lighter text-grey hover:bg-grey-lightest hover:text-primary focus:bg-grey-lighter focus:text-black focus:outline-none transition inline-block"><i class="fa fa-caret-left align-middle"></i></button>
      <button type="button" class="slick-n block w-12 h-12 text-center rounded-tr-sm bg-white text-grey hover:bg-grey-lightest hover:text-primary focus:bg-grey-lighter focus:text-black focus:outline-none transition inline-block"><i class="fa fa-caret-right align-middle"></i></button>
    </div>
    @endif
  </div>
  @else
  <div class="bg-gray-100 lg:px-12 lg:flex flex-row justify-end items-center">
    @if( $images )
    <div class="lg:w-3/5 order-1 md:order-2 relative z-0 banner-height">
      {!! count($images) > 1 ? '<div class="slick-banner relative z-10">' : null; !!}
      @foreach($images as $key=>$image )
        <div>
          <div class="relative banner-height {!! $key != 0 ? 'hidden' : null !!}">
            <picture data-iesrc="{!! $image['url'] !!}">
              @if( $images_webp )
                @php
                  $img_webp = get_bloginfo('url') . str_replace(array('jpg', 'jpeg', 'png'), 'webp', $image['url']);
                  $img_webp_sm = str_replace('.webp', '-sm.webp', $img_webp);
                @endphp
                <source media="(max-width: 767px)" srcset="{!! $img_webp_sm !!}" type="image/webp" />
                <source media="(min-width: 768px)" srcset="{!! $img_webp !!}" type="image/webp" />
                @endif
                <source media="(min-width: 768px)" srcset="{!! wp_get_attachment_image_srcset($image['id']) !!}" type="image/jpg" />
              <img src="{{ $image['sizes']['lozad'] }}" class="lozad object-fit-cover w-full h-full inset-0" alt="{!! $image['alt'] !!}" width="100%" height="100%">
            </picture>
          </div>
        </div>
      @endforeach
      @if( count($images) > 1 )
      </div>
      <div class="absolute z-20 bottom-0 right-0">
        <button type="button" class="slick-p w-12 h-12 text-center rounded-l-sm bg-white border-r border-gray-200 text-gray-600 hover:bg-gray-100 hover:text-primary focus:bg-gray-200 focus:text-black focus:outline-none transition inline-block">
          <i class="fa fa-caret-left align-middle"></i>
        </button><button type="button" class="slick-n w-12 h-12 text-center rounded-tr-sm bg-white text-gray-600 hover:bg-gray-100 hover:text-primary focus:bg-gray-200 focus:text-black focus:outline-none transition inline-block">
          <i class="fa fa-caret-right align-middle"></i>
        </button>
      </div>
      @endif
    </div>
    @endif
    <div class="content mx-auto px-8 py-12 lg:pl-0 lg:py-0 xl-pr-16 xxl-pr-24 order-2 lg:order-1">
      {!! $subtitle ? '<h4 class="title-display title-display-left text-primary mb-4 lg:mb-8">' . $subtitle . '</h4>' : null !!}
      {!! $title ? '<' . $h . ' class="text-3xl md:text-4xl lg:text-5xl mb-1 lg:mb-8">' . $title . '</' . $h . '>' : null !!}
      {!! $paragraph ? '<p class="mb-1">' . $paragraph . '</p>' : null !!}
      @if( have_rows('buttons') )
        <div class="flex flex-wrap gap-4">
          @php $i = 0; @endphp
          @while( have_rows('buttons') )
            @php
            the_row();
            $i++;
            $link = get_sub_field('link');
            $label = get_sub_field('label');
            $anchor = get_sub_field('anchor');
            @endphp
            <a href="{{ $link }}" class="btn block md:inline-block {{ $i == 1 ? null : 'primary' }}{{ $anchor ? ' btn-scroll' : null }}">{!! $label !!}</a>
          @endwhile
        </div>
      @endif
    </div>
  </div>
  @endif

  
</section>

<style>
   body main#primary {
    margin-top: 0px !important;
  }
</style>