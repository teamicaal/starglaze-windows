@extends('layouts.app')

@section('content')
@php
    $title = get_field('news_title', 'option');
    $body = get_field('news_body', 'option');
@endphp
<div class="container mx-auto py-8 sm:py-12 lg:pt-20 mt-16 lg:mt-32">
  @if( $title )
    <h1 class="py-3">
      {{ $title }}
    </h1>
  @else
    @include('partials.page-header')
  @endif 
  @noposts
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endnoposts
</div>
  <div class="container mx-auto">
    <div class="flex flex-wrap md:-mx-4">
      @query([
        'post_type' => array('posts', 'home-blog'),
      ])
      @posts
        <article class="w-full lg:w-1/3 p-4">
            <a href="@permalink">
              <div class="w-full md:mr-4 relative overflow-hidden" style="min-height: 251px;">
                <img data-src="@thumbnail('4by3-md', false)" src="@thumbnail('lozad', false)" width="100%" height="auto" alt="@title" class="lozad object-cover inset-0 w-full h-full absolute">
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
      @endposts
    </div>
  </div>
  
  {!! get_the_posts_navigation() !!}

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

@endsection
