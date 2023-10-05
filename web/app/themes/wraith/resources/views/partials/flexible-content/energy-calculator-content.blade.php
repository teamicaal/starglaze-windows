@php
$custom_class = get_sub_field('custom_class');
$background_image = get_sub_field('background_image');
$bottom_content = get_sub_field('bottom_content');
$i = 0;
@endphp

<section id="energy-calculator-content" class="relative {!! $custom_class ? ' ' . $custom_class : '' !!}">
    <div class="relative lg:pt-[10rem] lg:pb-[3rem]">
        <img src="{{ $background_image['url'] }}" alt="dot background" class="h-full w-full absolute object-cover opacity-30 inset-0">
        <div class="container mx-auto relative">
            <div class="flex flex-wrap justify-center mt-6 content">
    
                @if (have_rows('energy_content'))
                @while (have_rows('energy_content'))
                @php
                the_row();
                $title = get_sub_field('title');
                $paragraph = get_sub_field('paragraph');
                $icon = get_sub_field('icon');
                $i++;
                @endphp
    
                <div class="w-full lg:w-1/3  xl:w-1/4 px-5 pb-5 relative">
                    <div class="h-full">
                        <div class="md:p-6 p-0 md:mt-0 mt-6 text-center">
                            @if ($icon)
                              <div class="child-svg:w-[60px] child-svg:h-[60px] child-svg:mx-auto text-[#3F7E57]">{!! $icon !!}</div>
                            @endif
                            {!! $title ? '<h3 class="my-4 z-50 text-4xl font-serif font-bold text-[#3F7E57]">' . $title . '</h3>' : null !!}
                            {!! $paragraph ? '<div class="child-p:text-[#3A3A3A] tracking-wide mb-0 child-p:mx-auto">' . $paragraph . '</div>' : null !!}
                        </div>
                    </div>
                </div>
                @endwhile
                @endif
            </div>
        </div>
    </div>
    
    <h4 class="w-full h-auto bg-[#3F7E57] relative text-white text-center text-xl py-2">{{ $bottom_content }}</h4>
</section>