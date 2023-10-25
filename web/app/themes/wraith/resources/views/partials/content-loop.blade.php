@if (function_exists('get_field') && have_rows('blocks'))
    @while (have_rows('blocks'))
        @php the_row(); @endphp

        @if (get_row_layout() == 'accreditations_row')
            @include('partials.flexible-content.accreditations-row')
        @endif
        @if (get_row_layout() == 'alternating_content')
            @include('partials.flexible-content.alternating-content')
        @endif
        @if (get_row_layout() == 'accordion')
            @include('partials.flexible-content.accordion')
        @endif
        @if (get_row_layout() == 'anchor')
            @include('partials.flexible-content.anchor')
        @endif
        @if (get_row_layout() == 'banner')
            @include('partials.flexible-content.banner')
        @endif
        @if (get_row_layout() == 'product_banner')
            @include('partials.flexible-content.product-banner')
        @endif
        @if (get_row_layout() == 'offer_strip')
            @include('partials.flexible-content.offer-strip')
        @endif
        @if (get_row_layout() == 'why_choose_us')
            @include('partials.flexible-content.why-choose-us')
        @endif
        @if (get_row_layout() == 'new_key_features_block')
            @include('partials.flexible-content.new-key-features-block')
        @endif
        @if (get_row_layout() == 'sustainability_info')
            @include('partials.flexible-content.sustainability-info')
        @endif
        @if (get_row_layout() == 'showroom_accessibility')
            @include('partials.flexible-content.showroom-accessibility')
        @endif
        @if (get_row_layout() == 'page_grid')
            @include('partials.flexible-content.page-grid')
        @endif
        @if (get_row_layout() == 'energy_calculator_content')
            @include('partials.flexible-content.energy-calculator-content')
        @endif
        @if (get_row_layout() == 'showroom_info_block')
            @include('partials.flexible-content.showroom-info-block')
        @endif
        @if (get_row_layout() == 'virtual_showroom')
            @include('partials.flexible-content.virtual-showroom')
        @endif
        @if( get_row_layout() == 'new_testimonial' )
            @include('partials.flexible-content.new-testimonial')
        @endif
        @if (get_row_layout() == 'video_page')
            @include('partials.flexible-content.video-page')
        @endif
        @if (get_row_layout() == 'online_quote_cta')
            @include('partials.flexible-content.online-quote-cta')
        @endif
        @if( get_row_layout() == 'online_quote' )
            @include('partials.flexible-content.online-quote')
        @endif
        @if (get_row_layout() == 'blue_online_quote_cta')
            @include('partials.flexible-content.blue-online-quote-cta')
        @endif
        @if (get_row_layout() == 'blue_quote_cta')
            @include('partials.flexible-content.blue-quote-cta')
        @endif
        @if (get_row_layout() == 'two_image_cta')
            @include('partials.flexible-content.two-image-cta')
        @endif
        @if (get_row_layout() == 'benefits_block')
            @include('partials.flexible-content.benefits-block')
        @endif
        @if (get_row_layout() == 'hardware_options')
            @include('partials.flexible-content.hardware-options')
        @endif
        @if (get_row_layout() == 'color_options')
            @include('partials.flexible-content.color-options')
        @endif
        @if (get_row_layout() == 'video_content_block')
            @include('partials.flexible-content.video-content-block')
        @endif
        @if (get_row_layout() == 'product_key_features')
            @include('partials.flexible-content.product-key-features')
        @endif
        @if (get_row_layout() == 'gallery_slider_with_thumbnail')
            @include('partials.flexible-content.gallery-slider-with-thumbnail')
        @endif
        @if (get_row_layout() == 'showroom_video')
            @include('partials.flexible-content.showroom-video')
        @endif
        @if (get_row_layout() == 'cta')
            @include('partials.flexible-content.cta-block')
        @endif
        @if (get_row_layout() == 'form_contact')
            @include('partials.flexible-content.form-contact')
        @endif
        @if (get_row_layout() == 'form_visit_showroom')
            @include('partials.flexible-content.form-visit-showroom')
        @endif
        @if (get_row_layout() == 'form_conversion')
            @include('partials.flexible-content.form-conversion')
        @endif
        @if (get_row_layout() == 'key_features')
            @include('partials.flexible-content.key-features')
        @endif
        @if (get_row_layout() == 'gallery')
            @include('partials.flexible-content.gallery')
        @endif
        @if (get_row_layout() == 'gallery_page')
            @include('partials.flexible-content.gallery-page')
        @endif
        @if (get_row_layout() == 'gallery_slider')
            @include('partials.flexible-content.gallery-slider')
        @endif
        @if (get_row_layout() == 'gallery_text')
            @include('partials.flexible-content.gallery-text')
        @endif
        @if (get_row_layout() == 'html')
            {!! get_sub_field('html_content') !!}
        @endif
        @if (get_row_layout() == 'latest_news')
            @include('partials.flexible-content.latest-news')
        @endif
        @if (get_row_layout() == 'case_studies')
            @include('partials.flexible-content.case-studies')
        @endif
        @if (get_row_layout() == 'latest_products')
            @include('partials.flexible-content.latest-products')
        @endif
        @if (get_row_layout() == 'map')
            @include('partials.flexible-content.map')
        @endif
        @if (get_row_layout() == 'page_links_simple')
            @include('partials.flexible-content.page-links-simple')
        @endif
        @if (get_row_layout() == 'comparison_block')
            @include('partials.flexible-content.comparison-block')
        @endif
        @if (get_row_layout() == 'ultraframe_cgi_block')
            @include('partials.flexible-content.ultraframe-cgi-block')
        @endif
        @if (get_row_layout() == 'products')
            @include('partials.flexible-content.products')
        @endif
        @if (get_row_layout() == 'product_filter')
            @include('partials.flexible-content.product-filter')
        @endif
        @if (get_row_layout() == 'testimonials')
            @include('partials.flexible-content.testimonials')
        @endif
        @if (get_row_layout() == 'text_block')
            @include('partials.flexible-content.text-block')
        @endif
        @if (get_row_layout() == 'privacy_text_block')
            @include('partials.flexible-content.privacy-text-block')
        @endif
        @if (get_row_layout() == 'text_cta')
            @include('partials.flexible-content.text-cta')
        @endif
        @if (get_row_layout() == 'quoting_engine')
            @include('partials.flexible-content.quoting-engine')
        @endif
    @endwhile
@endif
