@php
$title = get_sub_field('title');
$paragraph = get_sub_field('paragraph');
$iframe = get_sub_field('iframe');
@endphp 

<section id="virtual-showroom" class=" py-12 overflow-hidden">
  <h1 data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100" class="text-primary lg:text-4xl text-3xl font-bold text-center font-serif mb-6">{{ $title ? $title : null }}</h1>
  <div data-aos="fade-left" data-aos-duration="1000" data-aos-delay="100" class="mb-1 child-p:relative child-p:mx-auto child-p:text-[#3A3A3A] child-p:font-normal child-p:max-w-screen-md child-p:leading-7 child-p:text-center child-p:text-sm">{!! $paragraph !!}</div>
  <div data-aos="fade-down" data-aos-duration="1000" data-aos-delay="100" class="container mx-auto">
    <div class="w-full px-4 mb-4">
      <iframe src="{!! $iframe !!}" class="object-cover-absolute w-full h-[800px]"></iframe>
    </div>
  </div>
</section>
