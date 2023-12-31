@php
$image = get_sub_field('image');
$image_alt = get_sub_field('image_alt');
$title = get_sub_field('title');
$paragraph = get_sub_field('paragraph');
$button_label = get_sub_field('button_label');
$button_link = get_sub_field('button_link');

@endphp

<section id="showroom-info-block" class="relative py-4 lg:py-0 flex justify-center items-center">
    <div data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="100" class="grow inner-wrapper flex justify-center items-center relative md:m-4 rounded-lg overflow-hidden py-8 md:py-24 px-2 md:px-16">
        <img src="{{ $image['url'] }}" alt="{{ $image_alt ? $image_alt : $image['alt'] }}" class=" w-full h-full bg-no-repeat bg-center object-cover bg-cover absolute">
        <div class="absolute darkTint w-full h-full"></div>
        <div class="relative md:p-8 flex flex-col justify-center items-center max-w-[1000px] rounded-lg border border-white h-auto">
            <h2 class="font-serif text-center font-bold text-3xl md:text-4xl mb-6 text-white tracking-wide md:mt-0 mt-6 ">{{ $title }}</h2>
            <div class="child-p:text-white p-4 text-center px-1  md:px-20 pt-0 pb-8 text-lg">{!! $paragraph !!}</div>
            <a href="{{ $button_link }}" class="bg-white text-primary font-bold text-center darkTint-button absolute">{{ $button_label }}</a>
        </div>
    </div>
	
</section>