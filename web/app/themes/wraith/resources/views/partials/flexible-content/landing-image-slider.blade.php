<section id="hero-banner" class="section_page-banner bg-[#1B4F8C] relative w-full h-screen">
  <div class="h-full flex items-center relative w-full">
    @if( have_rows('image_repeater') )
      <div class="slick-landing-image-slider relative">
        @php 
          $i = 0; 
        @endphp
        @while( have_rows('image_repeater') )
          @php
            the_row();
            $i++;
            $image = get_sub_field('image');
          @endphp
          <div class="w-full h-full absolute">
            <img data-src="{{ $image['url'] }}" src="{{ $image['url'] }}" alt="{{ $image['alt'] }}" class="lozad w-full h-full object-contain">
          </div>
        @endwhile
      </div>
    @endif
  </div>
</section>