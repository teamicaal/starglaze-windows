@php
$banner_type = get_sub_field('banner_type');
$images = get_sub_field('images');
$video = get_sub_field('video');
$images_webp = get_sub_field('images_webp');
$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
$paragraph = get_sub_field('paragraph');
$vr_cta = get_sub_field('vr_cta');
@endphp
@if( get_sub_field('title_h1') )
  @php $h = 'h1' @endphp
@else
  @php $h = 'h2' @endphp
@endif

<section id="hero-banner" class="section_page-banner">
  @if ($vr_cta)
    <a href="">
      <div class="main-banner__product-types-vr">
        <img class="main-banner__product-types-vr-image" src="/app/uploads/2023/10/vr_image.png" alt="">
        <div class="main-banner__product-types-vr-title">EXPLORE VIRTUALLY</div>
      </div>
    </a>
  @endif
  @if( $banner_type )
  <div class="full-width sm:flex sm:items-center relative lg:!min-h-[90vh] sm:!min-h-[60vh] !min-h-[40vh]">
    <div class="leftBannerBox"></div>
    @if( $images )
      <div class="sm:absolute relative sm:top-0 sm:left-0 h-[40vh] w-full sm:h-full z-10">
            @if ($video)
            <div class="hero relative h-full w-full">
              <video class="w-full h-full object-cover absolute" autoplay muted loop>
                  <source data-src="{!! $video['url'] !!}" src="{!! $video['url'] !!}" type="video/mp4">
              </video>
            </div>
            @else
            @if( count($images) > 1 )
            <div class="slick-banner">
            @endif
            @foreach($images as $key=>$image )
              <div class="relative {!! $key != 0 ? 'hidden' : null !!} lg:!min-h-[90vh] sm:!min-h-[60vh] !min-h-[40vh]">
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
            @endif

        
      </div>
    @endif
    <div class="container banner-content mx-auto border-b sm:border-none border-primary">
      <div class="sm:w-[650px] lg:w-[800px] w-full relative z-20 mx-auto lg:ml-0 lg:mr-auto">
        {!! $subtitle ? '<h4 class=" text-white lg:text-2xl text-lg uppercase tracking-wider mb-4 ">' . $subtitle . '</h4>' : null !!}
        {!! $title ? '<' . $h . ' class="text-3xl text-white title-shadow md:text-4xl lg:text-[66px] banner-title mb-8 font-serif font-bold">' . $title . '</' . $h . '>' : null !!}
        {!! $paragraph ? '<div class="child-p:mb-4 child-p:text-white child-p:leading-loose sm:block hidden">' . $paragraph . '</div>' : null !!}
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
              <a href="{{ $link }}" class="btn block md:inline-block {{ $i == 1 ? 'bg-primary text-white hover:bg-secondary font-bold hover:border-none' : 'bg-white text-[#343338] font-bold border border-primary hover:bg-primary hover:text-white' }}{{ $anchor ? ' btn-scroll' : null }}">{!! $label !!}</a>
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