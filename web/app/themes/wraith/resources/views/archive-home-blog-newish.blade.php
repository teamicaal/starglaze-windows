@extends('layouts.app')

@section('content')
@php
    $title = get_field('news_title', 'option');
    $body = get_field('news_body', 'option');
@endphp
<div class="container mx-auto py-8 sm:py-12 lg:pt-20 mt-16 lg:mt-32">
    <h1 class="text-primary capitalize font-bold font-serif tracking-wide text-3xl lg:text-5xl">
      {{ $title ? $title : 'Star Home Blog' }}
    </h1>
  @php
  $pageNumber = ( get_query_var('paged') ? get_query_var('paged') : 1 );

  $blogargs = [
      'post_type' =>'home-blog',
      'posts_per_page' => 10,
      'paged' => $pageNumber
  ];
  $blogs = new WP_Query($blogargs);

  $newsargs = [
    'post_type' =>'post',
    'posts_per_page' => 10,
    'paged' => $pageNumber,
    'tax_query' => array( 
        array(
            'taxonomy' => 'category',
            'field'    => 'slug',
            'terms'    => 'blog',
        ),
      ) 
  ];
  $news = new WP_Query($newsargs);
  $all = array_merge($news->posts,$blogs->posts);
  foreach($all as $p){
    $ids[] = $p->ID;
  }
  @endphp
  @noposts
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endnoposts
</div>
  <div class="container mx-auto">
      <div class="flex flex-wrap md:-mx-4">
        @php
        $i = 0;
        @endphp
        @if (is_array($ids))
          @foreach( $ids as $id )
            @php
                $image_id = get_post_thumbnail_id( $id );
                $image_thumbnail = wp_get_attachment_image_src( $image_id , 'thumbnail-lg' );
            @endphp
            <article data-aos="flip-up" data-aos-duration="1000" data-aos-delay="100" class="w-full lg:w-1/3 p-4">
              <a href="{{ get_the_permalink($id) }}">
                <div class="w-full md:mr-4 relative overflow-hidden" style="min-height: 251px;">
                  <img data-src="{{ $image_thumbnail[0] }}" src="{{ $image_thumbnail[0] }}" width="100%" height="auto" alt="{{ get_the_title($id)}}" class="lozad object-cover inset-0 w-full h-full absolute">
                </div>
              </a>
              <div class="bg-primary p-4">
                <div class="relative">
                  <a href="{{ get_the_permalink($id) }}"><h2 class="entry-title font-medium  text-white font-serif text-lg mb-4"> {{get_the_title($id)}}</h2></a>
                </div>
                <div class="w-full flex flex-wrap justify-between">
                  <div class="text-white font-serif relative  z-30 tracking-wide	mb-2"> {{ get_the_date($id) }}</div>
                  <a href="{{ get_the_permalink($id) }}" class=" text-secondary font-bold tracking-wide border-b-2 border-secondary hover:border-white inline-block max-w-full md:w-auto sec-inverted">READ POST</a>
                </div>
              </div>  
            </article>
          @endforeach
        @endif
      </div>
  </div>
  {{-- {!! get_the_posts_navigation() !!} --}}

  <div class="w-full home-blog-pagination py-1 bg-grey-lightest">
    <div class="container mx-auto text-center">
      <div class="pagination flex items-center justify-center px-1 py-1">
        @php
          echo paginate_links( array(
            'prev_text'          => __('<span class="page-link">«</span>'),
            'next_text'          => __('<span class="page-link">»</span>'),
            'before_page_number' => '<span class="page-link">',
            'after_page_number'  => '</span>'
          ) );  
        @endphp
      </div>
    </div>
  </div>

  @php
    $blogs = get_posts([
      'post_type' => 'home-blog',
      'posts_per_page' => -1      
    ]);

    $posts = get_posts([
      'post_type' => 'post',
      'posts_per_page' => -1
    ]);

    $all_posts = array_merge($blogs, $posts);
  @endphp
  @if( count($all_posts) > 12 )
    <div class="w-full home-blog-pagination py-1 bg-grey-lightest">
      <div class="container mx-auto text-center">
        <div class="pagination flex items-center justify-center px-1 py-1">
          @for ($x = 1; $x <= ceil(count($all_posts) / 12); $x++)
            <a class="page-numbers" href="/blog/page/{{ $x }}/"><span class="page-link">{{ $x }}</span></a>
          @endfor
        </div>
      </div>
    </div>
  @endif
@endsection
