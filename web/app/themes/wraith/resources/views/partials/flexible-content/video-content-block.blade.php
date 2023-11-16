@php
$custom_class = get_sub_field('custom_class');
$title = get_sub_field('title');
$image = get_sub_field('image');
$video_iframe_url = get_sub_field('video_iframe_url');
$image_alt = get_sub_field('image_alt');
@endphp

<section class="{!! $custom_class ? ' ' . $custom_class : '' !!} ">
	<div class="">
			<div class="flex flex-wrap relative items-center">
				<div class="w-full lg:w-1/3 ml-auto lg:mt-0 mt-8 px-4 lg:px-0 relative">
					<h2 data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100" class="lg:text-4xl text-3xl text-primary capitalize font-bold font-serif mb-12">{{ $title ? $title : ' ' }}</h2>
					@if( have_rows('usp_list') )
						<ul data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100" class="list-none py-0 px-0 mt-8">
							@while( have_rows('usp_list') )
							@php
							the_row();
							$usp = get_sub_field('usp');
							@endphp
							<li class="mb-4 text-lg flex items-center text-gray-900">
							<span class="mr-1 text-primary"><svg xmlns="http://www.w3.org/2000/svg" class="fill-current" width="25px" height="25px" viewBox="0 -21 512.016 512" width="512pt">
								<path
									d="m234.667969 469.339844c-129.386719 0-234.667969-105.277344-234.667969-234.664063s105.28125-234.6679685 234.667969-234.6679685c44.992187 0 88.765625 12.8203125 126.589843 37.0976565 7.425782 4.78125 9.601563 14.679687 4.820313 22.125-4.796875 7.445312-14.675781 9.597656-22.121094 4.820312-32.640625-20.972656-70.441406-32.042969-109.289062-32.042969-111.746094 0-202.667969 90.921876-202.667969 202.667969 0 111.742188 90.921875 202.664063 202.667969 202.664063 111.742187 0 202.664062-90.921875 202.664062-202.664063 0-6.679687-.320312-13.292969-.9375-19.796875-.851562-8.8125 5.589844-16.621094 14.378907-17.472656 8.832031-.8125 16.617187 5.589844 17.472656 14.378906.722656 7.53125 1.085937 15.167969 1.085937 22.890625 0 129.386719-105.277343 234.664063-234.664062 234.664063zm0 0" />
								<path
									d="m261.332031 288.007812c-4.09375 0-8.191406-1.558593-11.304687-4.691406l-96-96c-6.25-6.253906-6.25-16.386718 0-22.636718s16.382812-6.25 22.632812 0l84.695313 84.695312 223.335937-223.339844c6.253906-6.25 16.386719-6.25 22.636719 0s6.25 16.382813 0 22.632813l-234.667969 234.667969c-3.136718 3.113281-7.230468 4.671874-11.328125 4.671874zm0 0" />
								</svg></span>
							{{ $usp }}
							</li>
							@endwhile
						</ul>
             		 @endif
				</div>

				@if( $image )
					<div data-aos="fade-left" data-aos-duration="1000" data-aos-delay="100" class="w-full lg:w-3/5">
						<div class="embed-16by9  overflow-hidden">
							<img data-src="{{ $image['url'] }}" alt="{{ $image_alt ? $image_alt : $image['alt'] }}" class="lozad object-fit-cover w-full h-full inset-0 rounded-tl-xl rounded-bl-xl">
						</div>
					</div>
				@else
				<div data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100" class="w-full lg:w-3/5">
					<div class="embed embed-16by9 ">
						<iframe src="{!! $video_iframe_url !!}" class="object-cover-absolute w-full h-full rounded-tl-xl rounded-bl-xl"></iframe>
					</div>
				</div>
				@endif
			</div>
	</div>
</section>