@php
$title = get_sub_field('title');
$custom_class = get_sub_field('custom_class');
@endphp

<section class="py-12 overflow-hidden{!! $custom_class ? ' ' . $custom_class : null; !!}">
  <div class="container mx-auto">
    {!! $title ? '<h3 class="text-[#5B5B5B] lg:text-3xl text-2xl uppercase font-serif text-center mb-8">' . $title . '</h3>' : null; !!}
  </div>
  <div class="container mx-auto relative px-0 lg:px-4">
    @if( have_rows('accreditations') )
    <div class="flex lg:flex-wrap lg:justify-center items-center snap-x overflow-x-scroll lg:overflow-hidden lg:-mx-1 acc-slick">
      @while( have_rows('accreditations') )
      @php
      the_row();
      $image = get_sub_field('image');
      $link = get_sub_field('link');
      $alt = get_sub_field('image_alt');
      @endphp
      <div class="w-40 lg:w-[20%] mb-4 px-4 snap-center" style="flex: 0 0 auto;">
        <{!! $link ? 'a href="' . $link . '" target="_blank"' : 'div'; !!} class="block bg-white p-4 text-center">
          <img data-src="{{ $image['url'] }}" src="{{ $image['sizes']['thumbnail'] }}" width="96" height="96" alt="{{ $image['alt'] ? $image['alt'] : null }}" class="lozad noblur w-full h-auto mx-auto" style="max-width: 8rem;" />
        </{!! $link ? 'a' : 'div'; !!}>
      </div>
    @endwhile
    </div>
      
    @elseif( have_rows('accreditations', 'option') )
      <div class="flex lg:flex-wrap lg:justify-center items-center snap-x overflow-x-scroll lg:overflow-hidden lg:-mx-1 acc-slick">
        @while( have_rows('accreditations', 'option') )
          @php
          the_row();
          $logo = get_sub_field('logo');
          $link = get_sub_field('link');
          @endphp
          <div class="w-40 lg:w-[20%] mb-4 px-4 snap-center" style="flex: 0 0 auto;">
            <{!! $link ? 'a href="' . $link . '" target="_blank"' : 'div'; !!} class="block bg-white p-4 text-center">
              <img data-src="{{ $logo['url'] }}" src="{{ $logo['sizes']['thumbnail'] }}" width="96" height="96" alt="{{ $logo['alt'] ? $logo['alt'] : null }}" class="lozad noblur w-full h-auto mx-auto" style="max-width: 10rem;" />
            </{!! $link ? 'a' : 'div'; !!}>
          </div>
        @endwhile
      </div>
    @endif
  </div>
</section>
