@php
$custom_class = get_sub_field('custom_class');
$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
$details = get_sub_field('details');
@endphp
<section class=" bg-[#eeeeee]  {!! $custom_class ? ' ' . $custom_class : 'md:my-8' !!}">
  <div class="container mx-auto lg:py-24 py-12 flex flex-wrap justify-center">
        <div id="all-forms" class="lg:w-2/3 w-full text-center justify-center flex flex-wrap">
          @php
            $i = 0;
          @endphp
          @if (have_rows('all_forms'))
            @while (have_rows('all_forms'))
              @php
                the_row();
                $form_icon = get_sub_field('form_icon');
                $form_title = get_sub_field('form_title');
                $form_custom_link = get_sub_field('form_custom_link');
                $from_page_link = get_sub_field('from_page_link');
                $i++;
              @endphp

                  <a href="{!! $form_custom_link ? $form_custom_link : get_the_permalink( $from_page_link ) !!}" class="lg:w-[30%] w-full rounded-lg max-h-[170px] mb-6 lg:mr-6 text-center flex flex-col justify-center items-center bg-white hover:bg-primary group hover:border-none border-none">
                    <i class="text-4xl text-[#8a8f92] h-[40px] w-[40px] group-hover:text-white rounded-full p-4 fas fa-{!! $form_icon !!}"></i>
                    <h3 class="text-[#8a8f92] text-lg font-serif  group-hover:text-white  tracking-wide font-bold">{{ $form_title }}</h3>
                  </a>

            @endwhile
          @endif
        </div>
        <div class="lg:w-1/3">
          @if( $details )
            @include('partials.contact-details', ['colour'=>'dark'])
          @endif
        </div>

  </div>
</section>
