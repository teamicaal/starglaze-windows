@php
$custom_class = get_sub_field('custom_class');
$title = get_sub_field('title');
$paragraph = get_sub_field('paragraph');
$i = 0;

@endphp

@query([
  'post_type'      => 'post',
  'posts_per_page' => '4'
])
<div id="latest-news" class="overflow-hidden {!! $custom_class ? ' ' . $custom_class : ' lg:pt-20 pt-12' !!}">
  <div class="container mx-auto lg:flex">
    <div data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100" class="lg:w-1/2 w-full lg:mr-8 mr-0">
      <h2 class="text-primary md:text-4xl text-3xl font-serif font-bold max-w-[350px] mb-8 ">{{ $title }}</h2>
      {!! $paragraph ? '<div class="child-p:mb-4 child-p:font-normal child-p:text-[#7C7C7C]">' . $paragraph . '</div>' : null !!}
      @hasposts($query)
        <div class="flex flex-wrap md:-mx-4 mx-0 mb-4">
          @posts($query)
          <article class="w-full md:w-1/2 md:px-4 px-0 pb-6">
            <a href="@permalink">
              <div class="w-full md:mr-4 relative overflow-hidden" style="min-height: 178px;">
                <img data-src="@thumbnail('4by3-md', false)" src="@thumbnail('lozad', false)" width="100%" height="auto" alt="@title" class="lozad object-cover rounded-lg inset-0 w-full h-full absolute">
              </div>
            </a>
            <div class="relative mt-2">
              <a href="@permalink"><h2 class="entry-title font-bold  text-[#5B5B5B] text-lg mb-1">@title</h2></a>
              <div class="text-[#7C7C7C] text-sm font-normal relative tracking-wide	mb-2"> {!! get_the_date() !!}</div>
            </div>
            </article>
          @endposts
        </div>
      @endhasposts
      @noposts
        <p>
          Sorry, no posts could be found
        </p>
      @endnoposts
    </div>
    <div data-aos="fade-left" data-aos-duration="1000" data-aos-delay="100" class="lg:w-1/2 w-full relative slick-news lg:mt-[110px] aspect-video lg:aspect-square h-full">
      @if (have_rows('right_side_image'))
        @while (have_rows('right_side_image'))
          @php
           the_row();
           $image = get_sub_field('image');
           $image_alt = get_sub_field('image_alt');
           $button_link = get_sub_field('button_link');
           $top_text_line = get_sub_field('top_text_line');
           $bottom_text_line = get_sub_field('bottom_text_line');
           $i++;
          @endphp
            <div class="w-full h-full relative inline-block lg:h-[485px]">
              <img src="{{ $image['url'] }}" alt="{{ $image['alt'] }}" class="lozad object-fit-cover w-full h-full inset-0 rounded-lg">
              <div class="red-strip absolute text-center flex flex-wrap justify-between">
                <button class="offer-arrow-p flex items-center justify-center">
                  <i class="fa fa-chevron-left text-white text-xl"></i>
                </button>
                <div class="flex flex-col w-4/5">
                  <a href="{{ $button_link }}" class="border-none">
                    <h2 class="text-white md:text-6xl text-5xl font-bold tracking-wide">{{ $top_text_line }}</h2>
                    <h3 class="text-white md:text-3xl text-3xl font-bold tracking-wide">{{ $bottom_text_line }}</h3>
                  </a>
                </div>
               
                <button class="offer-arrow-n flex items-center justify-center">
                    <i class="fa fa-chevron-right text-white text-xl"></i>
                </button>
                
              </div>
            </div>
        @endwhile
      @endif
    </div>
  </div>
</div>
