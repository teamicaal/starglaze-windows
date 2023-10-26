@php
$custom_class = get_sub_field('custom_class');
$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
@endphp

<section class="relative z-10 {!! $custom_class ? ' ' . $custom_class : '' !!} ">

    <div class="!px-0 text-center text-primary">
        {!! $title ? '<h2 class="text-4xl mb-8 ">' . $title . '</h2>' : null !!}
        @if (have_rows('pages'))
            <div class="flex-wrap flex lg:justify-center lg:overflow-hidden">
                @while (have_rows('pages'))
                    @php
                        the_row();
                        $page = get_sub_field('page');
                        $custom_title = get_sub_field('custom_title');
                    @endphp
                    @if ($page)
                        <div class="w-1/2 lg:w-1/4  px-4 " style="flex: 0 0 auto;">
                            <a href="{{ get_the_permalink($page->ID) }}" class="embed-1by1 rounded-xl ProductTile w-full relative overflow-hidden mb-6 lg:mb-0">
                                <img data-src="{{ get_the_post_thumbnail_url($page->ID) }}" src="{{ get_the_post_thumbnail_url($page->ID, 'lozad') }}" alt="{!! $custom_title ? $custom_title : $page->title !!}" class="lozad object-fit-cover" />
                                  <div class="w-full  product-bottom-bg bottom-0 left-0 p-6">
                                    <h4 class="text-xl lg:text-2xl text-white flex font-bold font self-center justify-center items-center relative z-10  mb-0 tracking-wide">{!! $custom_title ? $custom_title : get_the_title() !!}</h4>
                                  </div>
                                  <div class="ProductTileTint w-full h-full absolute"></div>
                            </a>
                        </div>
                    @endif
                @endwhile
            </div>
        @endif
    </div>

</section>
