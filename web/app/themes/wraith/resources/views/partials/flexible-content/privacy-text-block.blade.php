@php
$content = get_sub_field('content');
$custom_class = get_sub_field('custom_class');
$container_sm = get_sub_field('container_sm');
@endphp
<section class="section_text-block privacy-text-block {!! $custom_class ? ' ' . $custom_class : ' md:py-24 py-20' !!}">
  <div class="container mx-auto">
    <div class="xl:w-3/5 lg:w-3/4 w-full text-center mx-auto">
      {!! $content !!}
    </div>
  </div>
</section>
