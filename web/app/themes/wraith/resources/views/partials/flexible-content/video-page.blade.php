@php
$title = get_sub_field('title');
@endphp 

<section id="videosPage" class="">
  <div class="container mx-auto py-8 sm:py-12 lg:pt-20 mt-16 lg:mt-32">
    <h1 class="text-primary uppercase font-bold font-serif tracking-wide text-3xl lg:text-4xl mb-12">{{ $title ? $title : null }}</h1>
  </div>
  <div class="bg-gray-100 py-12">
    <div class="container mx-auto">
      <div class="flex flex-wrap -mx-1">
        @if (have_rows('video_repeater'))
          @while (have_rows('video_repeater'))
          @php
            the_row();
            $label = get_sub_field('label');
            $video_url = get_sub_field('iframe_url');
          @endphp
            <div class="md:w-1/3 w-full px-4 mb-4">
              <div class="bg-white p-2 shadow-xl">
                @if ($label)
                <h4 class="bg-primary font-normal tracking-wide py-2 text-center text-white text-xl">{{ $label }}</h4>
                @endif
                <div class="embed embed-16by9">
                  <iframe src="{!! $video_url !!}" class="object-cover-absolute w-full h-full"></iframe>
                </div>
              </div>
            </div>
          @endwhile
        @endif
      </div>
    </div>
  </div>
</section>
