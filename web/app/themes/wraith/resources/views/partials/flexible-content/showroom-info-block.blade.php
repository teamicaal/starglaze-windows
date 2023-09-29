@php
$image = get_sub_field('image');
$image_alt = get_sub_field('image_alt');
$title = get_sub_field('title');
$paragraph = get_sub_field('paragraph');
$button_label = get_sub_field('button_label');
$button_link = get_sub_field('button_link');

@endphp

<section id="showroom-info-block" class="relative flex justify-center items-center">
    <div class="grow flex justify-center items-center relative m-4 rounded-lg overflow-hidden h-[80vh] py-0 md:py-24 px-0 md:px-16">
        <img src="{{ $image['url'] }}" alt="{{ $image_alt ? $image_alt : $image['alt'] }}" class=" w-full bg-no-repeat bg-center bg-cover absolute">
        <div class="absolute darkTint w-full h-full"></div>
        <div class="relative md:p-8 flex flex-col justify-center items-center max-w-[1000px] rounded-lg border border-white h-auto">
            <h2 class="font-serif font-bold text-3xl md:text-4xl mb-6 text-white tracking-wide ">{{ $title }}</h2>
            <div class="child-p:text-white p-4 text-center px-1  md:px-20 pt-0 pb-8 text-lg">{!! $paragraph !!}</div>
            <a href="{{ $button_link }}" class="bg-white text-primary font-bold text-center darkTint-button absolute">{{ $button_label }}</a>
        </div>
    </div>
	
</section>