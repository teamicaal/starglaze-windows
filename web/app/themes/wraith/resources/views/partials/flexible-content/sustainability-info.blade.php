@php
$custom_class = get_sub_field('custom_class');
$title = get_sub_field('title');
$button_label = get_sub_field('button_label');
$button_link = get_sub_field('button_link');
$logo_image = get_sub_field('logo_image');
$i = 0;
@endphp

<section id="sustainability-info" class="relative {!! $custom_class ? ' ' . $custom_class : 'lg:py-12 py-8' !!}">
    <div class="container mx-auto">
        <div class="flex relative">
            {!! $title ? '<h2 class="text-2xl text-center md:text-4xl mb-10 text-[#3F7E57] md:w-2/3 w-full tracking-wide font-bold font-serif">' . $title . '</h2>' : null !!}
            <img src="{{ $logo_image['url'] }}" alt="{{ $logo_image['alt'] }}" class="absolute right-[13rem] top-[-2rem]">
            <a href="{!! $button_link !!}" class="btn bg-primary hover:scale-105 transition-all ease-in-out duration-500 text-white absolute md:inline-block block right-0 bottom-0">{!! $button_label !!}</a>
        </div>
        
        <div class="flex flex-wrap justify-center lg:mt-16 mt-12">

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