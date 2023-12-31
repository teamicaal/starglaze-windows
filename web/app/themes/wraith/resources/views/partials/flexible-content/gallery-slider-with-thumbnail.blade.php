@php
  $custom_class = get_sub_field('custom_class');
  $title = get_sub_field('title');
  $paragraph = get_sub_field('paragraph');
  $images = get_sub_field('gallery_items');
@endphp

<section class="gallery-slider-with-thumb {!! $custom_class ? ' ' . $custom_class : 'py-12'; !!} overflow-hidden">
  <div class="container mx-auto relative overflow-hidden">
  <h2 data-aos="fade-left" data-aos-duration="1000" data-aos-delay="100" class="text-center lg:text-4xl text-3xl font-bold font-serif text-primary mb-8">{!! $title !!}</h2>
  <div data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100" class="child-p:mb-12 child-p:mx-auto child-p:text-center child-p:text-[#3A3A3A] child-p:leading-loose">{!! $paragraph !!}</div>

    @if ($images)
      <div data-aos="fade-left" data-aos-duration="1000" data-aos-delay="100" class="image_slider_main mb-8">
        @php
            $i = 0;
            foreach( $images as $image ):
        @endphp
        <div class="slide relative">
          <div class="item aspect-21/9 w-full h-full">
            <img class="lozad w-full h-full object-cover rounded-xl" src="{{ $image['url'] }}" data-src="{{ $image['url'] }}" alt="{{ $image['alt'] }}" itemprop="thumbnail">
          </div>
        </div>
        @endforeach
      </div>
      {{-- <button class="hidden lg:flex slick-n absolute group justify-center items-center right-0 top-1/2 -translate-y-1/2 translate-x-full px-6 py-4 bg-primary p-">
        <i class="group-hover:rotate-[360deg] text-[26px] fa-solid fa-chevron-right text-white transition-all ease-in-out duration-500"></i>
      </button>
      <button class="hidden lg:flex slick-p absolute group justify-center items-center left-0 top-1/2 -translate-y-1/2 -translate-x-full  px-6 py-4 bg-primary p-">
          <i class="group-hover:rotate-[360deg] text-[26px] fa-solid fa-chevron-left text-white transition-all ease-in-out duration-500"></i>
      </button> --}}
      <div  class="container mx-auto relative overflow-hidden">
        <div class="image_slider_thmb">
          @php
              $i = 0;
              foreach( $images as $image ):
          @endphp
          <div class="slide">
            <div data-aos="flip-left" data-aos-duration="1000" data-aos-delay="100" class="item aspect-16/9 w-full h-full ">
              <img class="lozad w-full h-full object-cover rounded-xl" src="{{ $image['url'] }}" data-src="{{ $image['url'] }}" alt="{{ $image['alt'] }}" itemprop="thumbnail">
            </div>
          </div>
          @endforeach
        </div>
        <button class="hidden lg:flex slick-n absolute group justify-center items-center right-0 top-1/2 -translate-y-1/2 translate-x-full px-6 py-4 bg-primary p-">
          <i class="group-hover:rotate-[360deg] text-[26px] fa-solid fa-chevron-right text-white transition-all ease-in-out duration-500"></i>
        </button>
        <button class="hidden lg:flex slick-p absolute group justify-center items-center left-0 top-1/2 -translate-y-1/2 -translate-x-full  px-6 py-4 bg-primary p-">
            <i class="group-hover:rotate-[360deg] text-[26px] fa-solid fa-chevron-left text-white transition-all ease-in-out duration-500"></i>
        </button>
      </div>
      
    @endif
  </div>
</section>


