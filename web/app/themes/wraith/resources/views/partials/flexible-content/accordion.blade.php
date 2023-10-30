@php
    $custom_class = get_sub_field('custom_class');
    $title = get_sub_field('title');
    $paragraph = get_sub_field('paragraph');
    $faq_schema = get_sub_field('faq_schema');
    $custom_class = get_sub_field('custom_class');
@endphp
@query([
    'post_type' => 'case-study',
    'posts_per_page' => '4',
])

<section id="accordion" class="container mx-auto {!! $custom_class ? $custom_class : ' lg:py-8 py-4 ' !!} ">
    
    <div class="relative flex flex-wrap justify-between {{ $faq_schema ? 'block' : null }}">
        <div class="lg:w-[45%] w-full lg:mx-0 md:mx-4 items-start relative z-10">
            <div class="flex items-center justify-end">
                <button class="case-study-arrow-p flex items-center justify-center">
                    <i class="fa fa-chevron-left bg-primary text-white border border-white text-sm py-4 px-6 rounded-tl-full rounded-bl-full"></i>
                </button>
                <button class="case-study-arrow-n flex items-center justify-center">
                    <i class="fa fa-chevron-right bg-primary text-white border border-white text-sm py-4 px-6 rounded-tr-full rounded-br-full"></i>
                </button>
            </div>
            <h2 class="lg:text-4xl text-3xl text-primary capitalize font-bold font-serif mb-12">{{ $title ? $title : ' ' }}</h2>
            <div class="accordion  overflow-hidden">
                @php
                  $i = 0;
                @endphp
                @while(have_rows('accordion_items'))
                  @php
                    the_row();
                    $i++;
                    $title = get_sub_field('accordion_title');
                    $accordion_paragraph = get_sub_field('accordion_paragraph');
                  @endphp
                  <div class="accordion-item {!! $i == 1 ? 'active' : null !!}">
                      <div class="accordion-item-header flex justify-between border-b border-primary">

                          <div class="font-normal text-[#1F1F1F] font-serif text-[18px] px-4">{{ $title }}</div>
                          <i class="fa fa-chevron-up text-sm"></i>
                          <i class="fa fa-chevron-down text-sm"></i>
                      </div>
                      <div class="accordion-item-content p-6" {!! $i !=1 ? 'style="display: none;"' : null !!}>
                          <div class="child-p:font-normal child-p:leading-7 child-p:text-[#3A3A3A] child-p:text-[16px]">
                            {!! $accordion_paragraph !!}
                          </div>
                      </div>
                  </div>
                @endwhile
            </div>
        </div>
        <div class="lg:w-1/2 w-full lg:mt-0 mt-4">
            @hasposts($query)
          <div class="lg:flex  justify-center items-center relative accordion-case-study-slick">
            @posts($query)
            <article class="w-full mx-2 first-of-type:ml-0 last-of-type:mr-0  ">
              <div class=" flex aspect-3/4 justify-center items-center relative rounded-lg  overflow-hidden h-fit p-[40px]">
                <img data-src="@thumbnail('url', false)" src="@thumbnail('url', false)" width="100%" height="auto" alt="@title" class="w-full h-full object-cover bg-no-repeat bg-center bg-cover absolute">
                <div class="absolute darkTint w-full h-full"></div>
                <div class="relative p-8 flex flex-col justify-center items-center max-w-[1000px] rounded-lg border border-white h-full">
                  <h2 class="font-serif text-center text-2xl md:text-3xl text-white tracking-wide ">@title</h2>
                  {{-- <div class="child-p:text-white p-4 text-center px-20 pt-0 pb-8 text-lg">{!! the_excerpt() !!}</div> --}}
                  <a href="@permalink" class="bg-white text-primary font-bold text-center darkTint-button absolute">Learn More</a>
                </div>
              </div>
            </article>
            @endposts
          </div>
        @endhasposts
        </div>
    </div>
    

</section>
