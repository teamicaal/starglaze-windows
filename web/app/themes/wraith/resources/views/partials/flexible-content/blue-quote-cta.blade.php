@php
 $index = 0 ;
@endphp

<section id="blue-quote-cta" class="relative px-4 md:px-0 flex justify-center items-center">
    @if( have_rows('usp') )
        <div class="lg:flex">
            @php $i = 0; @endphp
            @while( have_rows('usp') )
                @php
                the_row();
                $i++;
                $index++ ;
                $image = get_sub_field('image');
                $image_alt = get_sub_field('image_alt');
                $title = get_sub_field('title');
                $paragraph = get_sub_field('paragraph');
                $button_label = get_sub_field('button_label');
                $button_link = get_sub_field('button_link');
                $youtube_video_link = get_sub_field('youtube_video_link');
                @endphp
                <div class=" flex justify-center items-center relative md:m-4 {{ $i == 1 ? 'md:mr-2 mb-12 lg:mb-0' : 'md:ml-2'}} rounded-lg overflow-hidden py-8 2xl:py-24 lg:py-8 lg:px-6 px-3 2xl:px-16 inner-wrapper">
                    <img src="{{ $image['url'] }}" alt="{{ $image_alt ? $image_alt : $image['alt'] }}" class=" w-full h-full bg-no-repeat bg-center bg-cover object-cover absolute">
                    <div class="absolute darkTint w-full h-full"></div>
                    <div class="relative p-4 md:p-8 flex flex-col justify-center items-center max-w-[1000px] rounded-lg border border-white h-auto">
                        <h2 class="font-serif font-bold text-center text-3xl md:text-4xl mb-6 text-white tracking-wide ">{{ $title }}</h2>
                        <div class="child-p:text-white text-center 2xl:px-20 md:px-4 pt-0 2xl:pb-8 pb-4 text-lg">{!! $paragraph !!}</div>
                        @if ($youtube_video_link)
                            <div class="bg-white text-primary font-bold text-center darkTint-button absolute video-modal-play cursor-pointer">Play Video <i class="fa fa-play ml-2"></i></div>
                            <div class="hidden fixed inset-0 bg-black/80 z-50 items-center video-modal">
                                <div class="flex items-center container mx-auto relative">
                                    <iframe allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" src="{{$youtube_video_link}}" class="aspect-21/9 w-full video-frame" frameborder="0" allowfullscreen></iframe>
                                    <div class="absolute top-[-50px] right-0 cursor-pointer closevideo-modal"><i class="fa fa-circle-xmark w-[40px] h-[40px]"></i></div>
                                </div>

                            </div>
                        @else
                            <a href="{{ $button_link }}" class="bg-white text-primary font-bold text-center darkTint-button absolute">{!! $button_label !!}</a>    
                        @endif
                    </div>
                </div>
            @endwhile
        </div>
       
    @endif
	
</section>