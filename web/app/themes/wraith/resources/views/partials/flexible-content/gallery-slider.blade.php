@php
  $images = get_sub_field('gallery_items');
@endphp

<section class="py-12 overflow-hidden bg-[#1B4F8C]">
  <div class="container mx-auto">
    @if ($images)
      <div class="slick-gallery-slider">
        @php
            $i = 0;
            foreach( $images as $image ):
        @endphp
        <div>
          <div class="w-full h-full">
            <img class="lozad object-contain w-full h-full inset-0" src="{{ $image['sizes']['lozad'] }}" data-src="{{ $image['sizes']['medium'] }}" alt="{{ $image['alt'] }}" itemprop="thumbnail">
          </div>
        </div>
        @endforeach
      </div>
    @endif
    <div class="progress" role="progressbar" aria-valuemin="0" aria-valuemax="100">
      <span class="slider__label sr-only">
    </div>
  </div>
</section>
