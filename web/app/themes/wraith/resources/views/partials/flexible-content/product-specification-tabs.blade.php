@php
    $i = 0;
    $j = 0;
    $grip_core_page = get_sub_field('grip_core_page');
@endphp
<section id="product-specification-tabs" class="lg:mb-16 md:mb-10 mb-4">
    <div class="relative px-4 mb-4">
        @if (have_rows('tab'))
            <div class="absolute w-full h-1 bg-secondary left-0 right-0 top-1/2 -translate-y1/2"></div>
            <div
                class="container relative mx-auto scroll-container overflow-x-hidden snap-x flex gap-[10px] rounded-full blue-bg-gradient p-[10px] z-10">
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
                $swatches_static_content = get_sub_field('swatches_static_content');
            @endphp
            <div class="{{ $i !== 1 ? 'hidden' : null }}" data-product-spec-tab="{{ $tab_name_clean }}">

                <div class="container mx-auto flex flex-col lg:flex-row lg:items-center justify-between lg:mt-12 mb-8">
                    <div class="w-full lg:w-1/3">
                        <h2 class="mb-4 lg:mb-8 text-primary font-serif font-medium lg:text-4xl text-2xl lg:leading-[3.5rem] text-balance">
                            {{ $title }}</h2>
                    </div>
                    <div class="separator md:py-8 child-p:font-normal child-p:text-[#3A3A3A]">{!! $paragraph !!}
                        @if (have_rows('buttons'))
                            <div class="flex">
                                @while (have_rows('buttons'))
                                    @php
                                        the_row();
                                        $link = get_sub_field('link');
                                        $label = get_sub_field('label');
                                        $j++;
                                    @endphp
                                    <a class="btn {{ $j % 2 === 0 ? 'transparent-border-primary' : 'primary' }}"
                                        href="{{ $link }}">{{ $label }}</a>
                                @endwhile
                                @php
                                    $j = 0;
                                @endphp
                            </div>
                        @endif
                    </div>
                </div>
                @if ($content_type == 'slider')
                    <div class="relative">
                        @if ($grip_core_page)
                            {{-- <div class="absolute w-full h-1/2 bottom-0 bg-[#172128]"></div> --}}
                        @endif
                        <div class="container mx-auto relative bg-white pb-8">
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
                                class="hidden lg:flex slick-n absolute group justify-center items-center right-0 top-1/2 -translate-y-1/2 translate-x-full px-6 py-4 bg-primary p-">
                                <i
                                    class="group-hover:rotate-[360deg] text-[26px] fa-solid fa-chevron-right text-white transition-all ease-in-out duration-500"></i>
                            </button>
                            <button
                                class="hidden lg:flex slick-p absolute group justify-center items-center left-0 top-1/2 -translate-y-1/2 -translate-x-full  px-6 py-4 bg-primary p-">
                                <i
                                    class="group-hover:rotate-[360deg] text-[26px] fa-solid fa-chevron-left text-white transition-all ease-in-out duration-500"></i>
                            </button>
                        </div>
                    </div>
                @endif
                @if ($content_type == 'brochures')
                    <div class="relative">
                        @if ($grip_core_page)
                            <div class="absolute w-full h-1/2 bottom-0 bg-[#172128]"></div>
                        @endif

                        <div class="container mx-auto relative bg-white pb-8">
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
                                class="hidden lg:flex slick-n absolute group justify-center items-center right-0 top-1/2 -translate-y-1/2 translate-x-full px-6 py-4  bg-primary p-">
                                <i
                                    class="group-hover:rotate-[360deg] text-[26px] fa-solid fa-chevron-right text-white transition-all ease-in-out duration-500"></i>
                            </button>
                            <button
                                class="hidden lg:flex slick-p absolute group justify-center items-center left-0 top-1/2 -translate-y-1/2 -translate-x-full  px-6 py-4 bg-primary p-">
                                <i
                                    class="group-hover:rotate-[360deg] text-[26px] fa-solid fa-chevron-left text-white transition-all ease-in-out duration-500"></i>
                            </button>
                        </div>
                    </div>
                @endif

                @if ($content_type == 'swatches')
                    @php
                        $j = 0;
                    @endphp
                    <div class="container mx-auto flex flex-col-reverse lg:flex-row items-center">
                        <div
                            class="flex w-full lg:w-1/2 flex-nowrap lg:flex-wrap gap-4 max-h-max scroll-container overflow-x-hidden items-start">
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
                                        class="w-[120px] h-[120px] mb-2 rounded-[25px] bg-white group shadow-lg overflow-hidden relative">

                                        <img class="w-full h-full object-cover relative"
                                            src="{{ $swatch_image['url'] }}" alt="{{ $swatch_image['alt'] }}">
                                        <div
                                            class="w-full h-0 absolute bottom-0 bg-primary group-hover:h-full ease-in-out duration-500 mix-blend-multiply">
                                        </div>
                                    </div>
                                    <div class="text-center text-[#3A3A3A]">{{ $swatch_name }}</div>
                                </div>
                            @endwhile
                        </div>
                        <div class="w-full lg:w-1/2 flex items-center justify-center">
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
                                        class="{{ $j != 1 ? 'hidden' : 'block' }}">
                                        <div class="featured_front">
                                            <img class="w-full h-[300px] lg:h-[400px] object-contain"
                                                src="{{ $featured_image['url'] }}" alt="{{ $featured_image['alt'] }}">
                                            <div class="text-center">{{ $swatch_name }}</div>
                                        </div>
                                        @if ($featured_image_2)
                                            <div class="featured_back hidden">
                                                <img class="w-full h-[300px] lg:h-[400px] object-contain"
                                                    src="{{ $featured_image_2['url'] }}"
                                                    alt="{{ $featured_image_2['alt'] }}">
                                                <div class="text-center">{{ $swatch_name }}</div>
                                            </div>

                                            <div
                                                class="cursor-pointer p-4 bg-primary group flex max-w-max mx-auto mt-4 turn-around">
                                                <i
                                                    class="fa-solid  text-[30px] text-white fa-arrows-rotate ease-in-out duration-500 group-hover:rotate-[360deg]"></i>

                                            </div>
                                            <div class="font-semibold text-center mt-3">
                                                TURN AROUND
                                            </div>
                                        @endif
                                    </div>
                                @else
                                    <div data-image-featured="{{ $swatch_name_clean }}"
                                        class="{{ $j != 1 ? 'hidden' : 'block' }}">
                                        <img class="w-full h-[300px] lg:h-[400px] object-contain"
                                            src="{{ $swatch_image['url'] }}" alt="{{ $swatch_image['alt'] }}">
                                        <div class="text-center">{{ $swatch_name }}</div>
                                    </div>
                                @endif
                            @endwhile
                        </div>
                    </div>
                @endif
                    @if ($swatches_static_content)
                    <div class="container mx-auto relative mt-4">
                        <div class="product-specification-tabs-slider ">
                            @while (have_rows('swatches_static_content'))
                                @php
                                    the_row();
                                    $image = get_sub_field('image');
                                @endphp
                                @if ($image)
                                    <div class="mx-2">
                                        <img class="mx-auto rounded-[20px] w-[14rem] h-auto shadow-lg" src="{{ $image['url'] }}" alt="">
                                        {{-- @if ($product_name)
                                            <div class="text-center mt-8">{{ $product_name }}</div>
                                        @endif --}}
                                    </div>
                                @endif
                            @endwhile
                        </div>
                        <button class="hidden lg:flex slick-n absolute group justify-center items-center right-0 top-1/2 -translate-y-1/2 translate-x-full px-6 py-4 bg-primary p-">
                            <i class="group-hover:rotate-[360deg] text-[26px] fa-solid fa-chevron-right text-white transition-all ease-in-out duration-500"></i>
                        </button>
                        <button class="hidden lg:flex slick-p absolute group justify-center items-center left-0 top-1/2 -translate-y-1/2 -translate-x-full  px-6 py-4 bg-primary p-">
                            <i class="group-hover:rotate-[360deg] text-[26px] fa-solid fa-chevron-left text-white transition-all ease-in-out duration-500"></i>
                        </button>
                    </div>
                    @endif
                

                {{-- <div class="flex items-center justify-end">
                    <button class="static-swatch-p flex items-center justify-center">
                        <i class="fa fa-chevron-left bg-primary text-white border border-white text-sm py-4 px-6 rounded-tl-full rounded-bl-full"></i>
                    </button>
                    <button class="static-swatch-n flex items-center justify-center">
                        <i class="fa fa-chevron-right bg-primary text-white border border-white text-sm py-4 px-6 rounded-tr-full rounded-br-full"></i>
                    </button>
                </div>
                <div class="flex flex-wrap container mx-auto static-swatch">
                    @while (have_rows('swatches_static_content'))
                        @php
                            the_row();
                            $image = get_sub_field('image');
                            
                        @endphp
                        <div class="flex items-center justify-center cursor-pointer">
                            <div class="w-[160px] h-[120px] mx-auto mb-2 rounded-[25px] bg-white overflow-hidden shadow-md ">
                                <img class="w-full h-full object-cover relative" src="{{ $image['url'] }}" alt="{{ $image['alt'] }}">
                            </div>
                        </div>
                    @endwhile
                </div> --}}
            </div>
        @endwhile
    @endif
</section>
