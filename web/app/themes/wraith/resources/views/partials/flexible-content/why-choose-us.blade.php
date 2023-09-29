@php
$custom_class = get_sub_field('custom_class');
$title = get_sub_field('title');
$paragraph = get_sub_field('paragraph');
$i = 0;
@endphp

<section id="why-choose-us" class="blue-bg-gradient px-2 relative mt-[-8rem] pt-[12rem] {!! $custom_class ? ' ' . $custom_class : 'lg:pb-16 pb-12' !!}">
    <img src="/app/uploads/2023/09/Dots-Left.png" alt="dot background" class="h-auto md:block hidden left-0 opacity-[0.02] absolute">
    <img src="/app/uploads/2023/09/Dots-right.png" alt="dot background" class="h-auto md:block hidden right-0 opacity-[0.02] absolute">
    <div class="container mx-auto">
        <div class="why-choose-us">
            {!! $title ? '<h2 class="text-3xl md:text-4xl mb-6 text-white tracking-wide text-center font-bold font-serif">' . $title . '</h2>' : null !!}
            {!! $paragraph ? '<div class="mb-6 text-center child-p:mx-auto child-p:tracking-wider child-p:text-white">' . $paragraph . '</div>' : null !!}
        </div>
       
        <div class="flex flex-wrap justify-center mt-6 why-choose-us-slick">

            @if (have_rows('cards'))
            @while (have_rows('cards'))
            @php
            the_row();
            $title = get_sub_field('title');
            $paragraph = get_sub_field('paragraph');
            $image = get_sub_field('image');
            $image_alt = get_sub_field('image_alt');
            $icon = get_sub_field('icon');
            $i++;
            @endphp

            <div class="w-full  lg:w-1/3 px-5 pb-5 relative">
                <div class="h-full">

                    @if ($image)
                    <div class="embed-16by9 embed rounded-lg">
                        <img class="object-cover-absolute" src="{{ $image['url'] }}" alt="{{ $image_alt ? $image_alt : $image['alt'] }}">
                    </div>
                    @endif
                    <div class="md:p-6 p-0 md:mt-0 mt-6 text-center">
                        @if($icon)
                        <div class="mb-4">
                            <i class="text-4xl text-primary bg-white rounded-full p-4 fas fa-{!! $icon !!}"></i>
                        </div>
                        @endif
                        {!! $title ? '<h3 class="mb-4 z-50 text-2xl font-serif font-medium text-white">' . $title . '</h3>' : null !!}
                        {!! $paragraph ? '<div class="child-p:text-white tracking-wide mb-0 z-50">' . $paragraph . '</div>' : null !!}

                    </div>
                </div>
            </div>
            @endwhile
            @endif
        </div>
    </div>
</section>