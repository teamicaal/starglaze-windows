<section id="blue-quote-cta" class="relative flex justify-center items-center">
    @if( have_rows('usp') )
        <div class="lg:flex">
            @php $i = 0; @endphp
            @while( have_rows('usp') )
                @php
                the_row();
                $i++;
                $image = get_sub_field('image');
                $image_alt = get_sub_field('image_alt');
                $title = get_sub_field('title');
                $paragraph = get_sub_field('paragraph');
                $button_label = get_sub_field('button_label');
                $button_link = get_sub_field('button_link');
                @endphp
                <div class=" flex justify-center items-center relative m-4 {{ $i == 1 ? 'mr-2' : 'ml-2'}} rounded-lg overflow-hidden h-[80vh] md:py-24 md:px-16">
                    <img src="{{ $image['url'] }}" alt="{{ $image_alt ? $image_alt : $image['alt'] }}" class=" w-full h-full bg-no-repeat bg-center bg-cover absolute">
                    <div class="absolute darkTint w-full h-full"></div>
                    <div class="relative md:p-8 flex flex-col justify-center items-center max-w-[1000px] rounded-lg border border-white h-full">
                        <h2 class="font-serif font-bold text-center text-3xl md:text-4xl mb-6 text-white tracking-wide ">{{ $title }}</h2>
                        <div class="child-p:text-white p-4 text-center md:px-20 pt-0 pb-8 text-lg">{!! $paragraph !!}</div>
                        <a href="{{ $button_link }}" class="bg-white text-primary font-bold text-center darkTint-button absolute">{{ $button_label }}</a>
                    </div>
                </div>
            @endwhile
        </div>
    @endif
	
</section>