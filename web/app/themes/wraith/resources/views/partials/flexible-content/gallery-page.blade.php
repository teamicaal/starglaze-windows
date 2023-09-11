@php
$images = get_sub_field('images');

$captions = array();

foreach( $images as $image ) {
  $caption = strtolower($image['caption']);
  foreach (explode(', ',$caption) as $caption){
    if( !in_array($caption, $captions) && $caption != '' ) {
      array_push($captions, $caption);
    }
  }
}
@endphp

<section class="pt-12 pb-8 md:pb-4 bg-[#F5F6F7]">
  <div class="container mx-auto">
    <div class="flex lg:flex-wrap scroll-x-proximity overflow-x-scroll lg:overflow-hidden -mx-4 md:mx-0 pl-4 md:pl-0 mb-4">
      <button type="button" data-filter="all" class="mixitup-control mixitup-control-active whitespace-nowrap bg-[#E8EeE8] text-[#303947] scroll-align-start mb-4 capitalize font-medium mr-3 px-4 py-3 focus:outline-none">All</button>
      @foreach($captions as $caption)
        <button type="button" data-filter=".{{ str_replace(',-', ' ', str_replace(' ', '-', $caption)) }}" class="mixitup-control whitespace-nowrap bg-[#E8EeE8] text-[#303947] scroll-align-start mb-4 capitalize font-medium mr-3 px-4 py-3 focus:outline-none">{{ $caption }}</button>
      @endforeach
    </div>
    <div class="flex flex-wrap mix-container">
      @php $i = 0; @endphp
      @foreach( $images as $image )
      @php $i++; @endphp
        <div class="w-1/2 lg:w-1/3 mb-2 p-4 gallery-image item fb-gallery mix {{ str_replace(' ', '-', strtolower($image['caption'])) }}">
          <a href="{{ $image['url'] }}" title="{{ $image['title'] }} ?>" rel="gallery-page" class="embed-4by3 rounded-sm overflow-hidden" data-fancybox="gallery" data-fancybox-group itemprop="contentUrl" data-size="{{ $image['width'] }}x{{ $image['height'] }}" data-index="{{ $i }}">
            <img data-src="{{ $image['sizes']['4by3-md'] }}" alt="{{ $image['alt'] }}" class="lozad object-fit-cover" />
          </a>
        </div>
      @endforeach
    </div>
  </div>
</section>
