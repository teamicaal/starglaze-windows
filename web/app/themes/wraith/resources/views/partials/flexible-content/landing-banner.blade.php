@php
$bg_image = get_sub_field('bg_image');
$title = get_sub_field('title');
$paragraph = get_sub_field('paragraph');
@endphp

<section id="hero-banner" class="section_page-banner relative w-full h-screen">

  <div class="w-full h-full flex items-center relative">
    <img data-src="{{ $bg_image['url'] }}" src="{{ $bg_image['url'] }}" alt="{{ $bg_image['alt'] }}" class="lozad w-full h-full inset-0 absolute">
    <div class="px-[15rem] py-24 rounded-tr-full rounded-br-full overflow-hidden relative">
      <div class="bg-white/10 blur-sm w-full h-full absolute inset-0"></div>
      <h2 class="landing-title text-transparent uppercase mb-4">{{ $title }}</h2>
      <div class="child-p:text-white child-p:text-[20px]">{!! $paragraph !!}</div>
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
                  class="{{ $j == 1 ? 'landing-button tracking-wider px-8 py-3 uppercase text-white border hover:scale-105 transition-all ease-in-out duration-500 text-center block md:inline-block mb-4 md:mr-6 xxl:mb-0' : ' px-8 py-3 tracking-wider bg-transparent border uppercase border-white text-white hover:scale-105 transition-all ease-in-out duration-500 text-center block md:inline-block' }}">{!!
                  $label !!}</a>
							@endwhile
						</div>
        	@endif
    </div>
  </div>
  
</section>

<style>
   body main#primary {
    margin-top: 0px !important;
  }
</style>