@php
    $i = 0;
@endphp

<section class="">
    @if (have_rows('cta_cards'))
        <div class="flex flex-wrap md:flex-nowrap mx-4 md:mx-0 gap-4">
            @while (have_rows('cta_cards'))
                @php
                    the_row();
                    $title = get_sub_field('title');
                    $paragraph = get_sub_field('paragraph');
                    $image = get_sub_field('image');
                    $button_link = get_sub_field('button_link');
                    $button_label = get_sub_field('button_label');
                    $i++;
                    
                @endphp
                <div class="w-full lg:w-1/2 overflow-hidden lg:flex lg:max-h-[400px] {{ $i % 2 == 0 ? 'rounded-tl-xl rounded-bl-xl' : 'rounded-tr-xl rounded-br-xl' }}">
                    <div class="lg:w-3/5 w-full px-4 py-8 xl:px-16 lg:py-12 lg:order-1 order-2 blue-bg-gradient relative overflow-hidden">
                        <h3 class="lg:text-3xl text-2xl font-bold font-serif xl:mb-10 lg:mb-6 text-white ">{{ $title }}</h3>
                        <div class="child-p:text-white child-p:font-normal xl:mb-10 lg:mb-6">{!! $paragraph !!}</div>
                        <a href="{{ $button_link }}" class="btn inline-block relative bg-white hover:border-none font-bold hover:bg-primary hover:text-white text-primary" >{{ $button_label }}</a>
                    </div>
                    <div class="lg:w-2/5 w-full h-full lg:order-2 order-1 relative">  
                        <img class="w-full h-full object-cover image-flip" src="{{ $image['url'] }}" alt="">
                    </div>
                </div>
            @endwhile
        </div>
    @endif
</section>
