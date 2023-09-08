@php
$title = get_sub_field('title');
$iframe = get_sub_field('iframe');
$video = get_sub_field('video');
@endphp 

<section id="videosPage" class=" py-12">
  @if (is_page( array( '1070' ) ) )
  <h1 class="text-[#3F7E57] lg:text-4xl text-3xl font-bold text-center font-serif mb-6">{{ $title ? $title : null }}</h1>
	@else
  <h1 class="text-primary lg:text-4xl text-3xl font-bold text-center font-serif mb-6">{{ $title ? $title : null }}</h1>
	@endif
  <div class="container mx-auto">
    <div class="w-full px-4 mb-4">
      @if($iframe)
        <div class="embed embed-16by9 rounded-xl">
          <iframe src="{!! $iframe !!}" class="object-cover-absolute w-full h-full"></iframe>
        </div>
      @endif
      @if ($video)
          <div class="hero relative h-full w-full">
            <video class="embed embed-16by9 rounded-xl" controls muted loop>
                <source src="{!! $video['url'] !!}" type="video/mp4">
            </video>
          </div>
      @endif
    </div>
  </div>
</section>
