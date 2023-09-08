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
