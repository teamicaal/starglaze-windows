@php
  $custom_class = get_sub_field('custom_class');
  $title = get_sub_field('title');
  $paragraph = get_sub_field('paragraph');
@endphp


<section class="py-12">
  <div class="container mx-auto">
    {!! $title ? '<h2 class="mb-4 font-bold font-serif lg:text-4xl text-3xl">' . $title . '</h2>' : null !!}
    <div class="md:py-8 child-p:mx-auto child-p:font-normal child-p:text-[#3A3A3A]">{!! $paragraph !!} </div>
  </div>
</section>
