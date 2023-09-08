@php
  $custom_class = get_sub_field('custom_class');
  $title = get_sub_field('title');
  $paragraph = get_sub_field('paragraph');
  $images = get_sub_field('gallery_items');
@endphp

<section class="gallery-slider-with-thumb {!! $custom_class ? ' ' . $custom_class : 'py-12'; !!}">
  <div class="container mx-auto">
  <h2 class="text-center lg:text-4xl text-3xl font-bold font-serif text-primary mb-8">{!! $title !!}</h2>
  {!! $paragraph ? '<div class="child-p:mb-12 child-p:mx-auto child-p:text-center child-p:text-[#3A3A3A] child-p:leading-loose">' . $paragraph . '</div>' : null !!}

    @if ($images)
      <div class="image_slider_main mb-8">
        @php
            $i = 0;
            foreach( $images as $image ):
        @endphp
        <div class="slide">
          <div class="item aspect-16/9 w-full h-full">
            <img class="lozad w-full h-full object-cover rounded-xl" src="{{ $image['url'] }}" data-src="{{ $image['url'] }}" alt="{{ $image['alt'] }}" itemprop="thumbnail">
          </div>
        </div>
        @endforeach
      </div>
      <div class="image_slider_thmb">
        @php
            $i = 0;
            foreach( $images as $image ):
        @endphp
        <div class="slide">
          <div class="item aspect-16/9 w-full h-full ">
            <img class="lozad w-full h-full object-cover rounded-xl" src="{{ $image['url'] }}" data-src="{{ $image['url'] }}" alt="{{ $image['alt'] }}" itemprop="thumbnail">
          </div>
        </div>
        @endforeach
      </div>
    @endif
  </div>
</section>


