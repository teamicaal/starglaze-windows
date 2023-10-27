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
      {!! $paragraph ? '<div class="latest-news child-p:relative child-p:mx-auto child-p:text-[#3A3A3A] child-p:font-normal child-p:max-w-screen-md child-p:leading-7 child-p:text-center child-p:mb-10">' . $paragraph . '</div>' : null !!}
      @hasposts($query)
        <div class=" container mx-auto lg:flex justify-center items-center relative">
          @posts($query)
            <article class="w-full lg:w-[30%] px-2 md:mx-2 lg:first-of-type:ml-0 lg:last-of-type:mr-0 lg:mb-0 mb-4">
              <a href="@permalink" class="flex h-[465px] justify-center items-center relative rounded-xl overflow-hidden p-[35px] case-study-wraper">
                <img data-src="@thumbnail('url', false)" src="@thumbnail('url', false)" width="100%" height="auto" alt="@title" class="w-full h-full object-cover bg-no-repeat bg-center bg-cover absolute">
                <div class="absolute dark-CaseStudies-Tint w-full h-full"></div>
                <div class="relative px-4 flex flex-col justify-center items-center max-w-[1000px] rounded-xl border border-white h-full">
                  <h2 class="font-serif font-bold text-center text-2xl text-white tracking-wide ">@title</h2>
                  <span class="bg-white text-primary font-bold text-center darkTint-button absolute">Learn More</span>
                </div>
              </a>
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
  
