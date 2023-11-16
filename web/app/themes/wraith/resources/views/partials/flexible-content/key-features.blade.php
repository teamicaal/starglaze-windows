@php
  $title = get_sub_field('title');
  $count = 0 ;
@endphp

<section class="py-12 bg-gray-100">
  <div class="container mx-auto">
    <h2 data-aos="fade-down" data-aos-duration="1000" data-aos-delay="100" class="mb-4 lg:mb-8 text-primary text-center font-serif font-medium text-4xl">{!! $title !!}</h2>
      <div class="flex flex-wrap justify-center">
        @if( get_sub_field('features') )
          @php $count = count(get_sub_field('features')); @endphp
        @endif
        @if (have_rows('features'))
          @while (have_rows('features'))
          @php
            the_row();
            $icon = get_sub_field('icon');
            $title = get_sub_field('title');
            $subtitle= get_sub_field('subtitle');
          @endphp

            <div class="w-1/2 md:w-1/3{{ $count > 3 ? ' lg:w-1/4' : null }}">
              <div data-aos="flip-up" data-aos-duration="1000" data-aos-delay="100" class="blue-bg-gradient rounded-sm shadow-card p-4 lg:p-8 mx-4 mb-8 lg:mb-4 text-center">
                @if( $icon )
                  <span class="block mx-auto bg-primary rounded-full w-12 h-12 flex justify-center items-center">
                    <i class="fa fa-{{ $icon }} text-white text-xl"></i>
                  </span>
                @endif
                {!! $title ? '<h3 class="font-bold font-serif text-xl tracking wide text-white mt-4 mb-4">' . $title . '</h3>' : null !!}
                {!! $subtitle ? '<p class="text-white font-serif mb-0">' . $subtitle . '</p>' : null !!}
              </div>
            </div>

          @endwhile
        @endif
      </div>
  </div>
</section>
