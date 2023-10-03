@php
  $title = get_sub_field('title');
  $paragraph = get_sub_field('paragraph');
@endphp

<section id="product-key-features" class="py-20 blue-bg-gradient relative">
  <img src="/app/uploads/2023/09/Dots-Left.png" alt="dot background" class="h-auto md:block hidden left-0 opacity-[0.02] absolute">
    <img src="/app/uploads/2023/09/Dots-right.png" alt="dot background" class="h-auto md:block hidden right-0 opacity-[0.02] absolute">
  <div class="container mx-auto flex flex-wrap justify-center">
    <div class="lg:w-1/2 w-full">
      {!! $title ? '<h2 class="font-bold font-serif text-white text-3xl lg:text-4xl mb-8">' . $title . '</h2>' : null !!}
      {!! $paragraph ? '<div class="child-p:mb-12 child-p:text-white child-p:leading-loose">' . $paragraph . '</div>' : null !!}
    </div>
     
      <div class="w-full lg:w-1/2 pl-12 border-l border-[#707070]">
        @if (have_rows('usp'))
          @while (have_rows('usp'))
          @php
            the_row();
            $icon = get_sub_field('icon');
            $freeIcon = get_sub_field('free_icon');
            $title = get_sub_field('title');
            $paragraph= get_sub_field('paragraph');
          @endphp

            <div class="flex flex-wrap lg:mb-0 mb-6">
              <div class="mr-6">
                @if( $icon )
                  <span class="block mx-auto bg-white rounded-full w-16 h-16 flex justify-center items-center">
                    <i class="fa fa-{{ $icon }} text-primary text-2xl"></i>
                  </span>
                @elseif( $freeIcon )
                  <span class="block mx-auto bg-white rounded-full w-16 h-16 flex justify-center items-center">
                    {!! $freeIcon !!}
                  </span>
                @endif
              </div>
              <div class="">
                {!! $title ? '<h3 class="font-semibold text-white mt-2 text-xl capitalize mb-4">' . $title . '</h3>' : null !!}
                {!! $paragraph ? '<div class="child-p:mb-12 child-p:text-white child-p:leading-loose">' . $paragraph . '</div>' : null !!}
              </div>
            </div>

          @endwhile
        @endif
      </div>
  </div>
</section>
