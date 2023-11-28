@php
    $i = 0;
    $j = 0;
    $grip_core_page = get_sub_field('grip_core_page');
@endphp
<div  data-aos="fade-down" data-aos-duration="1000" data-aos-delay="100" id="product-specification-tabs" class="lg:my-16 md:my-10 my-4 overflow-hidden">
    <div class="relative px-4 mb-4">
        @if (have_rows('tab'))
            <div class="absolute w-full h-1 bg-secondary left-0 right-0 top-1/2 -translate-y1/2"></div>
            <div class="container relative mx-auto scroll-container overflow-x-hidden snap-x flex gap-[10px] rounded-full blue-bg-gradient p-[10px] z-10">
                @while (have_rows('tab'))
                    @php
                        the_row();
                        $tab_name = get_sub_field('tab_name');
                        $tab_name_clean = strtolower(str_replace(' ', '_', $tab_name));
                        $content_type = get_sub_field('content_type');
                        $i++;
                    @endphp
                    <button
                        class="uppercase grow font-bold font-serif rounded-full snap-center py-2 px-16 text-lg lg:px-28 lg:text-lg {{ $i == 1 ? 'active' : null }}"
                        data-product-spec-btn="{{ $tab_name_clean }}" data-content-type={{ $content_type }}>
                        {{ $tab_name }}
                    </button>
                @endwhile
            </div>
        @endif
    </div>
    @php
        $i = 0;
    @endphp
    @if (have_rows('tab'))
        @while (have_rows('tab'))
            @php
                the_row();
                $i++;
                $title = get_sub_field('title');
                $tab_name = get_sub_field('tab_name');
                $tab_name_clean = strtolower(str_replace(' ', '_', $tab_name));
                $paragraph = get_sub_field('paragraph');
                $content_type = get_sub_field('content_type');
            @endphp
            <div class="{{ $i !== 1 ? 'hidden' : null }}" data-product-spec-tab="{{ $tab_name_clean }}">

                <div class="container mx-auto flex flex-col lg:flex-row lg:items-center justify-between lg:my-20">
                    <div class="w-full xl:w-1/3">
                        <h2 class="mb-4 lg:mb-8 text-primary font-serif font-medium lg:text-4xl text-2xl lg:leading-[3.5rem] text-balance">
                            {{ $title }}</h2>
                            @if (have_rows('buttons'))
                            <div class="flex gap-4 flex-col xl:flex-row mb-8">
                                @while (have_rows('buttons'))
                                    @php
                                        the_row();
                                        $link = get_sub_field('link');
                                        $label = get_sub_field('label');
                                        $j++;
                                    @endphp
                                    <a class="btn block md:inline-block bg-primary text-white hover:bg-secondary"
                                        href="{{ $link }}">{{ $label }}</a>
                                @endwhile
                            </div>
                        @endif
                        @php
                            $j = 0;
                        @endphp
                    </div>
                    <div class="separator md:py-8 child-p:font-normal child-p:text-[#3A3A3A]">{!! $paragraph !!}
                    </div>
                </div>
                @if ($content_type == 'hardware')
                    <div class="container mx-auto flex">
                        <div
                            class="w-full lg:w-1/2 flex flex-nowrap lg:flex-wrap gap-4 max-h-max scroll-container overflow-x-hidden items-center ">
                            @while (have_rows('hardware'))
                                @php
                                    the_row();
                                    $swatch_image = get_sub_field('swatch_image');
                                    $image_front = get_sub_field('image_front');
                                    $swatch_name = get_sub_field('swatch_name');
                                    $swatch_name_clean = strtolower(str_replace(' ', '_', $swatch_name));
                                @endphp

                                <div data-image-swatch="{{ $swatch_name_clean }}"
                                    class="flex flex-col items-center justify-center cursor-pointer">
                                    <div
                                        class="w-[75px] h-[75px] md:w-[120px] md:h-[120px] mb-2 rounded-[12px] md:rounded-[25px] bg-white group shadow-lg overflow-hidden relative">
                                        @if ($swatch_image)
                                            <img class="w-full h-full object-cover relative"
                                                src="{{ $swatch_image['url'] }}" alt="{{ $swatch_image['alt'] }}">
                                        @endif
                                        <div
                                            class="w-full h-0 absolute bottom-0 bg-primary group-hover:h-full ease-in-out duration-500 mix-blend-multiply">
                                        </div>
                                    </div>
                                </div>
                            @endwhile
                        </div>
                        <div class="w-full lg:w-1/2 ">
                            @while (have_rows('hardware'))
                                @php
                                    the_row();
                                    $j++;
                                    $swatch_name = get_sub_field('swatch_name');
                                    $swatch_name_clean = strtolower(str_replace(' ', '_', $swatch_name));
                                    $featured_image = get_sub_field('featured_image');
                                @endphp
                                @if ($featured_image)
                                    <div data-image-featured="{{ $swatch_name_clean }}"
                                        class="{{ $j != 1 ? 'hidden' : 'block' }}">
                                        <div class="featured_front">
                                            <img class="w-full h-[300px] lg:h-[500px] object-contain"
                                                src="{{ $featured_image['url'] }}" alt="{{ $featured_image['alt'] }}">
                                            <div class="text-center">
                                                <p class="mb-0 uppercase text-sm text-primary mx-auto">
                                                    {{ $swatch_name }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endwhile
                        </div>
                        @php
                            $j = 0;
                        @endphp
                    </div>
                @endif
                @if ($content_type == 'slider')
                    <div class="relative">
                        
                        <div class="container mx-auto relative bg-white pb-8 !px-[100px]">
                            <div class="product-specification-tabs-slider ">
                                @while (have_rows('slider_content'))
                                    @php
                                        the_row();
                                        $product_image = get_sub_field('product_image');
                                        $product_name = get_sub_field('product_name');
                                    @endphp
                                    @if ($product_image)
                                        <div class="mx-2">
                                            <img class="mx-auto" src="{{ $product_image['url'] }}" alt="">
                                            @if ($product_name)
                                                <div class="text-center mt-8">{{ $product_name }}</div>
                                            @endif
                                        </div>
                                    @endif
                                @endwhile
                            </div>
                            <button
                                class="flex slick-n absolute group justify-center items-center right-[84px] top-1/2 -translate-y-1/2 translate-x-full px-6 py-4 bg-primary p-">
                                <i
                                    class="group-hover:rotate-[360deg] text-[26px] fa-solid fa-chevron-right text-white transition-all ease-in-out duration-500"></i>
                            </button>
                            <button
                                class="flex slick-p absolute group justify-center items-center left-[84px] top-1/2 -translate-y-1/2 -translate-x-full  px-6 py-4 bg-primary p-">
                                <i
                                    class="group-hover:rotate-[360deg] text-[26px] fa-solid fa-chevron-left text-white transition-all ease-in-out duration-500"></i>
                            </button>
                        </div>
                    </div>
                @endif
                @if ($content_type == 'brochures')
                    <div class="relative">

                        <div class="container mx-auto relative bg-white pb-8 !px-[100px]">
                            <div class="product-specification-tabs-brochure-slider">
                                @while (have_rows('brochures_content'))
                                    @php
                                        the_row();
                                        $brochure_link = get_sub_field('brochure_link');
                                    @endphp
                                    @if ($brochure_link)
                                        <div class="mx-2">
                                            <div class="text-center mt-8 h-[470px]">
                                                <iframe src="{{ $brochure_link }}" frameborder="0" width="100%"
                                                    height="100%"></iframe>
                                            </div>
                                        </div>
                                    @endif
                                @endwhile
                            </div>
                            <button
                                class="flex slick-n absolute group justify-center items-center right-[84px] top-1/2 -translate-y-1/2 translate-x-full px-6 py-4  bg-primary p-">
                                <i
                                    class="group-hover:rotate-[360deg] text-[26px] fa-solid fa-chevron-right text-white transition-all ease-in-out duration-500"></i>
                            </button>
                            <button
                                class="flex slick-p absolute group justify-center items-center left-[84px] top-1/2 -translate-y-1/2 -translate-x-full  px-6 py-4 bg-primary p-">
                                <i
                                    class="group-hover:rotate-[360deg] text-[26px] fa-solid fa-chevron-left text-white transition-all ease-in-out duration-500"></i>
                            </button>
                        </div>
                    </div>
                @endif


                @if ($content_type == 'color_family')
                    @php
                        $j = 0;
                    @endphp
                    <div data-container-configurator="color"
                        class="container mx-auto flex flex-col-reverse lg:flex-row items-center">
                        <div class="flex flex-col w-full lg:w-1/2">
                            @while (have_rows('color_family'))
                                @php
                                    the_row();
                                    $family_name = get_sub_field('family_name');
                                    $j++;
                                @endphp

                                <div class="mb-6">
                                    <div class="accordion_family_name group flex cursor-pointer items-center justify-between border-b border-primary border-muted mb-4 {{ $j === 1 ? 'active' : '' }}">
                                        <h2 class=" group-hover:text-primary ease-in-out duration-300 uppercase font-serif text-2xl mb-0">
                                            {{ $family_name }}</h2>
                                        <i class="fa-solid fa-chevron-down ease-in-out text-xl duration-500"></i>
                                    </div>
                                    <div
                                        class="flex flex-nowrap lg:flex-wrap gap-4 accordion_family_swatches max-h-max scroll-container overflow-x-hidden items-start  {{ $j != 1 ? 'hidden' : 'active' }} ">
                                        @while (have_rows('swatches_content'))
                                            @php
                                                the_row();
                                                $swatch_image = get_sub_field('swatch_image');
                                                $swatch_name = get_sub_field('swatch_name');
                                                $swatch_name_clean = strtolower(str_replace(' ', '_', $swatch_name));
                                            @endphp
                                            <div data-image-swatch="{{ $swatch_name_clean }}"
                                                class="flex flex-col items-center justify-center cursor-pointer">
                                                <div
                                                    class="w-[75px] h-[75px] md:w-[120px] md:h-[120px] mb-2 rounded-[12px] md:rounded-[25px] bg-white group shadow-lg overflow-hidden relative">

                                                    <img class="w-full h-full object-cover relative"
                                                        src="{{ $swatch_image['url'] }}"
                                                        alt="{{ $swatch_image['alt'] }}">
                                                    <div
                                                        class="w-full h-0 absolute bottom-0 bg-primary group-hover:h-full ease-in-out duration-500 mix-blend-multiply">
                                                    </div>
                                                </div>
                                                <div class="text-center capitalize">{{ $swatch_name }}</div>
                                            </div>
                                        @endwhile
                                    </div>
                                </div>
                            @endwhile
                            @php
                                $j = 0;
                            @endphp
                        </div>
                        <div data-configurator="color"
                            class="w-full lg:w-1/2 flex items-center justify-center relative max-w-max mx-auto">
                            @while (have_rows('color_family'))
                                @php
                                    the_row();
                                @endphp
                                @while (have_rows('swatches_content'))
                                    @php
                                        the_row();
                                        $swatch_image = get_sub_field('swatch_image');
                                        $swatch_name = get_sub_field('swatch_name');
                                        $swatch_name_clean = strtolower(str_replace(' ', '_', $swatch_name));
                                        $featured_image = get_sub_field('featured_image');
                                        $featured_image_2 = get_sub_field('featured_image_2');
                                        $j++;
                                    @endphp
                                    @if ($featured_image || $featured_image_2)
                                        <div data-image-featured="{{ $swatch_name_clean }}"
                                            class="{{ $j != 1 ? 'hidden' : 'block active' }}">
                                            <div class="featured_front">
                                                <img class="w-full h-[300px] lg:h-[500px] object-contain"
                                                    src="{{ $featured_image['url'] }}"
                                                    alt="{{ $featured_image['alt'] }}">
                                                <div class="text-right">
                                                    <p class="mb-0 uppercase text-center font-serif text-primary">
                                                        {{ $swatch_name }}
                                                    </p>
                                                </div>
                                            </div>
                                            @if ($featured_image_2)
                                                <div class="featured_back hidden">
                                                    <img class="w-full h-[300px] lg:h-[500px] object-contain"
                                                        src="{{ $featured_image_2['url'] }}"
                                                        alt="{{ $featured_image_2['alt'] }}">
                                                    <div class="text-right">
                                                        <p class="mb-0 uppercase ml-auto mr-0 text-xs">Colour Option:
                                                        </p>
                                                        <p class="mb-0 uppercase ml-auto mr-0 text-sm text-primary">
                                                            {{ $swatch_name }}</p>
                                                    </div>
                                                </div>
                                                <div
                                                    class="cursor-pointer p-4 bg-primary group flex max-w-max mx-auto mt-8 turn-around">
                                                    <i
                                                        class="fa-solid  text-[32px] text-white fa-arrows-rotate ease-in-out duration-500 group-hover:rotate-[360deg]"></i>
                                                </div>
                                                <div class="font-semibold text-center">
                                                    TURN AROUND
                                                </div>
                                            @endif
                                        </div>
                                    @endif
                                @endwhile
                            @endwhile
                            @php
                                $j = 0;
                            @endphp
                        </div>
                    </div>
                @endif
                @if ($content_type === 'glazing')
                    <div data-container-configurator="glazing"
                        class="container mx-auto flex flex-col-reverse lg:flex-row">
                        <div
                            class="w-full lg:w-1/2 flex flex-nowrap lg:flex-wrap gap-4 max-h-max scroll-container overflow-x-hidden items-center ">
                            @while (have_rows('glazing'))
                                @php
                                    the_row();
                                    $glazing_swatch = get_sub_field('glazing_swatch');
                                    $image_front = get_sub_field('image_front');
                                    $glazing_name = get_sub_field('glazing_name');
                                    $glazing_name_clean = strtolower(str_replace(' ', '_', $glazing_name));
                                @endphp

                                <div data-image-swatch-glazing="{{ $glazing_name_clean }}"
                                    class="flex flex-col items-center justify-center cursor-pointer">
                                    <div
                                        class="w-[75px] h-[75px] md:w-[120px] md:h-[120px] mb-2 rounded-[12px] md:rounded-[25px] bg-white group shadow-lg overflow-hidden relative">
                                        @if ($glazing_swatch)
                                            <img class="w-full h-full object-cover relative"
                                                src="{{ $glazing_swatch['url'] }}"
                                                alt="{{ $glazing_swatch['alt'] }}">
                                        @endif
                                        <div
                                            class="w-full h-0 absolute bottom-0 bg-primary group-hover:h-full ease-in-out duration-500 mix-blend-multiply">
                                        </div>
                                    </div>
                                    <div class="text-center">{{ $glazing_name }}</div>
                                </div>
                            @endwhile
                        </div>
                        @while (have_rows('glazing'))
                            @php
                                the_row();
                                $j++;
                                $image_front = get_sub_field('image_front');
                                $image_back = get_sub_field('image_back');
                                $glazing_name = get_sub_field('glazing_name');
                                $glazing_name_clean = strtolower(str_replace(' ', '_', $glazing_name));
                            @endphp
                            <div class="absolute w-full top-0 left-0 {{ $j == 1 ? 'block active' : 'hidden' }}"
                                data-image-glazing={{ $glazing_name_clean }}>
                                <div>
                                    <img class="glazing_front w-full h-[300px] lg:h-[500px] object-contain"
                                        src="{{ $image_front['url'] }}" alt="{{ $image_front['alt'] }}">
                                    <img class="glazing_back w-full h-[300px] lg:h-[500px] object-contain hidden"
                                        src="{{ $image_back['url'] }}" alt="{{ $image_back['alt'] }}">
                                </div>
                                <div class="text-left">
                                    <p class="mb-0 uppercase ml-0 mr-auto text-xs">Glazing Option:</p>
                                    <p class="mb-0 uppercase ml-0 mr-auto text-sm text-primary">{{ $glazing_name }}
                                    </p>
                                </div>
                            </div>
                        @endwhile
                    </div>
                @endif
            </div>
        @endwhile
    @endif
</div>
