@php
    $title = get_sub_field('title');
    $cgi_iframe = get_sub_field('cgi_iframe');
@endphp

<section class="container mx-auto lg:mt-16 mt-10">
    <div>
        <h2 class="mb-4 lg:mb-8 text-primary font-serif font-medium text-4xl text-center">{{ $title }}</h2>
        <div>{!! $cgi_iframe !!}</div>
    </div>
    
</section>
