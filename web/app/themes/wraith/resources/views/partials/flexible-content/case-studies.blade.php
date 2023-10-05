@php
$title = get_sub_field('title');
$paragraph = get_sub_field('paragraph');
@endphp

@query([
    'post_type' => 'case-study',
    'posts_per_page' => '4',
])

<section class="relative lg:pt-20 pt-12">
    <div class="relative">
   
      <h2 class="text-center px-2 lg:text-4xl font-serif font-bold text-3xl lg:mb-6 mb-4 text-primary relative capitalize">{{ $title }}</h2>
      {!! $paragraph ? '<div class="mb-1 px-2 latest-news child-p:relative child-p:mx-auto child-p:text-[#3A3A3A] child-p:font-normal child-p:max-w-screen-md child-p:leading-7 child-p:text-center child-p:text-sm">' . $paragraph . '</div>' : null !!}
      @hasposts($query)
        <div class=" container mx-auto lg:flex justify-center items-center relative">
          @posts($query)
          <article class="w-full px-2 md:mx-2 lg:first-of-type:ml-0 lg:last-of-type:mr-0 lg:mb-0 mb-4 ">
            <div class=" flex aspect-3/4 justify-center items-center relative rounded-xl overflow-hidden h-fit p-[45px]">
              <img data-src="@thumbnail('url', false)" src="@thumbnail('url', false)" width="100%" height="auto" alt="@title" class="w-full h-full object-cover bg-no-repeat bg-center bg-cover absolute">
              <div class="absolute darkTint w-full h-full"></div>
              <div class="relative px-4 flex flex-col justify-center items-center max-w-[1000px] rounded-xl border border-white h-full">
                <h2 class="font-serif font-bold text-center text-2xl md:text-3xl text-white tracking-wide ">@title</h2>
                {{-- <div class="child-p:text-white p-4 text-center px-20 pt-0 pb-8 text-lg">{!! the_excerpt() !!}</div> --}}
                <a href="@permalink" class="bg-white text-primary font-bold text-center darkTint-button absolute">Learn More</a>
              </div>
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


</section>
  
