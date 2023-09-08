<div class="container mx-auto">

  <article @php post_class() @endphp>
      <header class="flex flex-col lg:flex-row justify-center mb-12 shadow-none">
          <div class="w-full lg:w-2/5 lg:my-auto mb-2">
              <h1 class="text-3xl md:text-4xl font-medium text-primary mb-8">{!! get_the_title() !!}</h1>
              <div class="flex flex-wrap">
                  <a class=" btn bg-secondary text-white hover:bg-primary hover:border-none block md:inline-block text-center  mb-4 mr-4 md:mb-0"
                      href="#article">Learn More</a>
                  <a class="btn border border-primary text-primary hover:bg-primary hover:text-white block md:inline-block text-center mb-4 mr-4 md:mb-0"
                      href="/contact/">Contact Us</a>
              </div>
          </div>
          <div class="w-full lg:w-3/5 embed embed-4by3">
              <img src="{!! get_the_post_thumbnail_url() !!}" alt="{!! the_title(); !!}"
                  class="object-cover-absolute">
          </div>
      </header> <!-- end of top section -->
      <div id="article" class="w-full md:w-4/5 lg:w-1/2 mx-auto text-center order-1 lg:order-2">
        <h2 class="xl:text-4xl text-3xl text-primary py-6">{!! get_the_title() !!}</h2>
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

<div class="related-articles mb-2 lg:mb-4">
  @php
  $args = array(
    'post_type' => 'case-study',
  'category__in' => wp_get_post_categories($post->ID),
  'posts_per_page' => 2,
  'post__not_in' => array($post->ID)
  );
  $query = new WP_Query($args);
  @endphp
  @if( $query->have_posts() )

  <section class="my-24">
      <div class="w-4/5 mx-auto">
          <h2 class="lg:text-4xl text-3xl text-primary text-center mb-6">Related Articles</h2>
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
                  <div class="w-full md:mr-4 relative overflow-hidden" style="min-height: 300px;">
                    <img data-src="@thumbnail('4by3-md', false)" src="@thumbnail('lozad', false)" width="100%" height="auto" alt="@title" class="lozad object-cover-absolute w-full h-full absolute">
                  </div>
                  
                  <div class="w-full flex flex-col sm:flex-row p-4 relative border border-primary">
                    
                    <div class="w-full h-full items-start flex-col flex">                
                      <div class="relative">
                        <a href="@permalink"><h2 class="entry-title text-primary-dark text-xl">@title</h2></a>
                        <div class="text-secondary text-sm	mb-2 relative">{!! get_the_date() !!}</div>
                        <div class="child-p:text-sm child-p:font-normal child-p:max-w-[17rem] post-copy">{!! the_excerpt() !!}</div>
                      </div>
                      <a href="@permalink" class="inline-block w-full text-center uppercase font-bold text-xs tracking-wider text-secondary underline hover:border-none hover:text-primary-dark">Learn More</a>
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