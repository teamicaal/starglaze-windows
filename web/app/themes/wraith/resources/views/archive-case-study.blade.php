@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8 sm:py-12 lg:pt-20 mt-16 lg:mt-32">
<div class="page-header">
  <h1 class="text-Primary lg:text-5xl text-4xl">Case Studies</h1>
</div>
  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
  @endif
</div>
@php $i = 0; @endphp
  <div class="container mx-auto pt-2 pb-4">
    <div class="flex flex-wrap -mx-4">
      @while (have_posts()) 
      @php
      $i++; 
      the_post() 
      @endphp
      <a href="@permalink">
      <article data-aos="flip-up" data-aos-duration="1000" data-aos-delay="100" class="w-full lg:w-1/3 p-4">
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
      @php wp_reset_query() @endphp
    </div>
  </div>
  <div class="w-full py-1 bg-grey-lightest">
    <div class="container text-center">
      <div class="pagination px-1 py-1">
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
