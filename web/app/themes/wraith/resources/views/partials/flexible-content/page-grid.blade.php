@php
$title = get_sub_field('title');
$content = get_sub_field('content');
$custom_class = get_sub_field('custom_class');
$button_link = get_sub_field('button_link');
$button_label = get_sub_field('button_label');
@endphp

<section id="page-grid" class="overflow-hidden lg:py-12 py-8{{ $custom_class ? $custom_class : '' }}">
    <div class="">
        <div class="px-1">
            @if ($title)
            <h1 class="text-center text-[#1C2530] font-semibold w-full  pb-8 mb-8">{{ $title }}</h1>
            @endif
        </div>
        <div class="flex flex-wrap justify-center">
            @if (have_rows('pages'))
            @while (have_rows('pages'))
            @php
            the_row();
            $page = get_sub_field('page');
            $page_id = $page->ID;
            $custom_image = get_sub_field('custom_thumbnail');
            $custom_title = get_sub_field('custom_title');
            $custom_link = get_sub_field('custom_url');
            if ($custom_image) {
            $img_url = $custom_image['sizes']['4by3-md'];
            $img_alt = $custom_image['alt'];
            } else {
            $img_url = get_the_post_thumbnail_url($page_id,'4by3-md');
            $img_alt = get_post_meta ( $page_id, '_wp_attachment_image_alt', true );
            }

            $excerpt = get_sub_field('excerpt');
            $permalink = get_the_permalink( $page_id );
            @endphp
            <div data-aos="flip-down" data-aos-duration="1000" data-aos-delay="100" class="xl:w-1/4 sm:w-1/2 w-full">
                <a href="{{ $permalink }}" class="border-0">
                    <div class="product-grid-card shadow-lg mx-3 rounded-lg mb-6">
                        <div class="embed embed-3by2 rounded-lg">
                            @if ($custom_title)
                            <h6 class="text-lg">{!! $custom_title !!}</h6>
                            @else
                            <h6 class="text-lg">{!! get_the_title( $page_id ) !!}</h6>
                            @endif
                            <img class="mx-auto transform lozad object-cover-absolute" data-src="{{ $img_url }}"
                                alt="{{ $img_alt }}">
                        </div>
                        @if ($excerpt)
                        <p class="mt-0-75 mb-0 p-1-5 bg-grey-lightest">{!! $excerpt !!}</p>
                        @endif
                    </div>
                </a>
            </div>
            @php wp_reset_postdata(); @endphp
            @endwhile
            @endif
        </div>
    </div>
</section>