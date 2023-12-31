<div class="container mx-auto">

  <article @php post_class() @endphp>
      <div class="flex flex-col items-center justify-center mb-12 shadow-none">
          <div class="w-full lg:w-2/5 py-8 flex flex-col items-center">
              <h1 data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100" class="text-3xl md:text-4xl text-center text-secondary font-bold font-serif mb-8">{!! get_the_title() !!}</h1>
              <div data-aos="fade-left" data-aos-duration="1000" data-aos-delay="100" class="flex flex-wrap">
                  <a class="btn block md:inline-block bg-primary text-white hover:bg-secondary hover:border-none mb-4 md:mr-4 md:mb-0"
                      href="#article">Learn More</a>
                  <a class="btn block md:inline-block bg-transparent border border-secondary text-secondary hover:bg-secondary hover:text-white hover:border-secondary"
                      href="/contact/">Contact Us</a>
              </div>
          </div>
          <div data-aos="fade-down" data-aos-duration="1000" data-aos-delay="100" class="w-full lg:w-3/5">
              <img src="{!! get_the_post_thumbnail_url() !!}" alt="{!! the_title(); !!}"
                  class="object-cover">
          </div>
        </div> <!-- end of top section -->
      <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100" id="article" class=" article w-full md:w-4/5 mx-auto text-center order-1 lg:order-2">
        {{-- <h2 class="lg:text-4xl text-3xl text-secondary font-semibold py-6">{!! get_the_title() !!}</h2> --}}
        @php the_content() @endphp
      </div>
      <footer>
          {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav">
              <p>' . __('Pages:', 'sage'), 'after' => '</p>
          </nav>']) !!}
      </footer>
      @php comments_template('/partials/comments.blade.php') @endphp
  </article>

</div> <!-- end of displayed article -->

<div class="related-articles">
  @php
  $args = array(
  'category__in' => wp_get_post_categories($post->ID),
  'posts_per_page' => 2,
  'post__not_in' => array($post->ID)
  );
  $query = new WP_Query($args);
  @endphp
  @if( $query->have_posts() )

  <section class="lg:my-20 my-12">
    <div class="md:w-4/5 w-full lg:px-0 px-4 mx-auto">
      <h2 class="lg:text-4xl text-3xl text-secondary font-semibold text-center mb-6">Related Articles</h2>
      <div class="flex flex-wrap justify-center">
        @while( $query->have_posts() )
        @php
        $i = 0;
        $query->the_post();
        @endphp
        @php
        $i++;
        @endphp
          <a href="@permalink">
            <article class="w-full lg:w-1/3 p-4">
            <a href="@permalink">
              <div class="w-full md:mr-4 relative overflow-hidden" style="min-height: 251px;">
                <img data-src="@thumbnail('url', false)" src="@thumbnail('url', false)" width="100%" height="auto" alt="@title" class="lozad object-cover inset-0 w-full h-full absolute">
              </div>
            </a>
            <div class="bg-primary p-4">
              <div class="relative">
                <a href="@permalink"><h2 class="entry-title font-medium  text-white font-serif text-lg mb-4">@title</h2></a>
              </div>
              <div class="w-full flex flex-wrap justify-between">
                <div class="text-white font-serif relative  z-30 tracking-wide	mb-2"> {!! get_the_date() !!}</div>
                <a href="@permalink" class=" text-secondary font-bold tracking-wide border-b-2 border-secondary hover:border-white inline-block max-w-full md:w-auto sec-inverted">READ POST</a>
              </div>
            </div>
          </article>
        </a>
        @endwhile
      </div>
    </div>
  </section>
  @php
  endif;
  wp_reset_query();
  @endphp
</div>