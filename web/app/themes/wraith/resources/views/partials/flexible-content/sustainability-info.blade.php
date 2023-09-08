@php
$custom_class = get_sub_field('custom_class');
$title = get_sub_field('title');
$logo_image = get_sub_field('logo_image');
$i = 0;
@endphp

<section id="sustainability-info" class="relative {!! $custom_class ? ' ' . $custom_class : 'lg:py-12 py-8' !!}">
    <div class="container mx-auto">
        <div class="flex">
            {!! $title ? '<h2 class="text-2xl md:text-4xl mb-10 text-[#3F7E57] md:w-2/3 w-full tracking-wide font-bold font-serif">' . $title . '</h2>' : null !!}
            <img src="{{ $logo_image['url'] }}" alt="{{ $logo_image['alt'] }}" class="absolute right-[22rem] top-[-2rem]">
        </div>
        
        <div class="flex flex-wrap justify-center">

            @if (have_rows('cards'))
            @while (have_rows('cards'))
            @php
            the_row();
            $title = get_sub_field('title');
            $paragraph = get_sub_field('paragraph');
            $i++;
            @endphp

            <div class="w-full  lg:w-1/3 px-8 relative">
                <div class="h-full">
                    <div class=" md:mt-0 mt-6">
                        {!! $title ? '<h3 class="mb-4 z-50 text-2xl font-serif font-medium text-[#3F7E57]">' . $title . '</h3>' : null !!}
                        {!! $paragraph ? '<div class="child-p:text-[#3a3a3a] tracking-wide mb-0">' . $paragraph . '</div>' : null !!}
                    </div>
                </div>
            </div>
            @endwhile
            @endif
        </div>
    </div>
</section>