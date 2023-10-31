@php
    $title = get_sub_field('title');
    $paragraph = get_sub_field('paragraph');
    $exploded_view_image = get_sub_field('exploded_view_image');
    $i = 0;
@endphp

<div class="exploded-view-bg py-16">
    <div class=" container mx-auto text-center mb-8">
        <h2 class="font-semibold text-2xl lg:text-[46px] lg:leading-[3.5rem] text-balance">{{ $title }}</h2>
        <div class="child-p:mx-auto">{!! $paragraph !!}</div>
    </div>

    <div class="relative max-w-max mx-auto px-8">
        <img src="{{ $exploded_view_image['url'] }}" alt="{{ $exploded_view_image['alt'] }}">
        @if (have_rows('product_features'))
            @while (have_rows('product_features'))
                @php
                    the_row();
                    $x_axis = get_sub_field('x_axis_position');
                    $y_axis = get_sub_field('y_axis_position');
                    $featured_image = get_sub_field('featured_image');
                    $paragraph = get_sub_field('paragraph');
                    $i++;
                @endphp
                <article data-modal="{{ $i }}"
                    class="absolute z-10 bg-white rounded-tr-[20px] p-4 min-h-[300px] w-1/2 gap-4 left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 hidden drop-shadow-custom">
                    <img class="w-2/5" src="{{ $featured_image['url'] }}" alt="{{ $featured_image['alt'] }}">
                    <div class="w-3/5 flex relative">
                        <button class="absolute top-0 right-0 modal-close cursor-pointer">
                            <i class="text-primary text-xl fa-solid fa-circle-xmark"></i>
                        </button>
                        <div class="self-center ">{!! $paragraph !!}</div>
                    </div>
                </article>
                <button data-modal-hotspot="{{ $i }}" class="absolute product_group_features-btn"
                    style="top:{{ $y_axis }}%;left:{{ $x_axis }}%">
                    <div class="product_group_features-btn-inner"></div>
                </button>
            @endwhile
        @endif
    </div>
</div>
