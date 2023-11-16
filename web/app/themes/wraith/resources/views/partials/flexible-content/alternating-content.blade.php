@php
$custom_class = get_sub_field('custom_class');
@endphp

<section id="alternating" class="{!! $custom_class ? ' ' . $custom_class : 'pt-8 lg:pt-12' !!} overflow-hidden ">
	<div class="">
		@php $i = 0; @endphp
		@while(have_rows('rows'))
		@php
			the_row();
			$i++;
			$title = get_sub_field('title');
			$image = get_sub_field('image');
			$video_iframe_url = get_sub_field('video_iframe_url');
			$image_alt = get_sub_field('image_alt');
			$paragraph = get_sub_field('paragraph');
			$dot_image = get_sub_field('dot_image');
		@endphp
			<div class="flex flex-col relative {{ $i % 2 == 0 ? 'lg:flex-row-reverse flex-col mb-8' : 'lg:flex-row flex-col mb-8' }}">
				@if( $image )
				<div data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100" class="w-full lg:w-[45%]">
					<div class="embed-16by9  overflow-hidden">
						<img data-src="{{ $image['url'] }}" alt="{{ $image_alt ? $image_alt : $image['alt'] }}" class="lozad object-fit-cover w-full h-full inset-0 {{ $i % 2 == 0 ? 'rounded-tl-xl rounded-bl-xl' : 'rounded-tr-xl rounded-br-xl' }}">
					</div>
				</div>
				@else
				<div data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100" class="w-full lg:w-3/5">
					<div class="embed embed-16by9 ">
						<iframe src="{!! $video_iframe_url !!}" class="object-cover-absolute w-full h-full rounded-tr-xl rounded-br-xl"></iframe>
					</div>
				</div>
				@endif
				<div data-aos="fade-left" data-aos-duration="1000" data-aos-delay="100" class="w-full lg:w-1/2 mx-auto lg:mt-0 mt-8 px-4 lg:px-0 relative">
					<div class="flex flex-col items-start justify-center h-full  lg:w-[70%] w-full mx-auto {{ $i % 2 == 0 ? 'ml-auto' : ' ' }}">
						@if (is_page( array( '1070' ) ) )
						{!! $title ? '<h2 class="mb-4 lg:mb-8 text-[#3F7E57] font-serif font-medium text-4xl">' . $title . '</h2>' : null !!}
						@else
						{!! $title ? '<h2 class="mb-4 lg:mb-8 text-primary font-serif font-medium text-4xl">' . $title . '</h2>' : null !!}
						@endif
						{!! $paragraph ? '<div class="mb-0 child-p:font-normal child-p:text-[#3A3A3A]">' . $paragraph . '</div>' : null !!}
						@if( have_rows('buttons') )
							<div class="block w-full xxl:flex flex-wrap mt-8">
								@php $j = 0; @endphp
								@while( have_rows('buttons') )
								@php
								the_row();
								$j++;
								$link = get_sub_field('link');
								$label = get_sub_field('label');
								@endphp
								<a href="{{ $link }}"
								class="btn {{ $j == 1 ? 'bg-transparent text-[#343338] text-medium border border-primary hover:scale-105 transition-all ease-in-out duration-500 text-center block md:inline-block mb-4 md:mr-6 xxl:mb-0' : 'bg-primary hover:scale-105 transition-all ease-in-out duration-500 text-white border-0 text-center block md:inline-block' }}">{!!
								$label !!}</a>
								@endwhile
							</div>
        				@endif
					</div>
				</div>
				<img src="{{ $dot_image['url'] }}" alt="{{ $dot_image['alt'] }}" class="absolute -z-1 {{ $i % 2 == 0 ? 'bottom-0 left-0' : 'bottom-0 right-0' }}">
			</div>
		@endwhile
	</div>
</section>