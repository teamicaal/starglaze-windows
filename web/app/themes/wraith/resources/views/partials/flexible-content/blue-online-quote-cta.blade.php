@php
$custom_class = get_sub_field('custom_class');
$title = get_sub_field('title');
$paragraph = get_sub_field('paragraph');
@endphp

<section id="blue-online-quote-cta" class="blue-bg-gradient {!! $custom_class ? ' ' . $custom_class : 'lg:py-20 py-16' !!}">
    <div class="container mx-auto">
        <div class="flex flex-wrap justify-between items-center">
            <div>
                <h2 class="text-white font-bold font-serif md:text-4xl text-3xl">{{ $title }}</h2>
                {!! $paragraph ? '<div class="mb-6 child-p:mx-auto child-p:tracking-wider child-p:text-white">' . $paragraph . '</div>' : null !!}
            </div>
            @if( have_rows('buttons') )
                <div class="flex flex-wrap gap-4">
                    @php $i = 0; @endphp
                    @while( have_rows('buttons') )
                    @php
                    the_row();
                    $i++;
                    $link = get_sub_field('link');
                    $label = get_sub_field('label');
                    @endphp
                    <a href="{{ $link }}" class="btn block md:inline-block {{ $i == 1 ? 'bg-white text-[#343338] hover:text-white hover:bg-primary font-bold hover:border-none' : 'bg-white text-[#343338] font-bold hover:bg-secondary hover:text-white' }}">{!! $label !!}</a>
                    @endwhile
                </div>
            @endif
        </div>
    </div>
    
</section>