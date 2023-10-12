@php
    $title = get_sub_field('title');
    $cgi_iframe = get_sub_field('cgi_iframe');
@endphp

<section class="container mx-auto">
    <div>
        <h2 class="lg:mt-16 mt-10  mb-4 lg:mb-8 text-primary font-serif font-medium text-4xl items-center">{{ $title }}</h2>
        <div>{!! $cgi_iframe !!}</div>
    </div>
    
</section>
