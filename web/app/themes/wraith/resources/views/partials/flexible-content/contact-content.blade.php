@php
  $custom_class = get_sub_field('custom_class');
  $title = get_sub_field('title');
  $paragraph = get_sub_field('paragraph');
@endphp


<section id="contact-content" class="py-12">
  <div class="container mx-auto">
    {!! $title ? '<h2 class="text-primary text-center capitalize font-bold font-serif tracking-wide text-3xl lg:text-5xl mb-4">' . $title . '</h2>' : null !!}
    <div class="md:py-8 child-p:mx-auto child-p:font-normal child-p:text-center child-p:text-[#3A3A3A]">{!! $paragraph !!} </div>
  </div>
</section>
