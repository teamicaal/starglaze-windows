@php
$i = 0 ;
@endphp

<section id="offer-strip" class="w-full h-full">
  <div class="flex flex-wrap lg:flex-nowrap lg:justify-center">
    @while( have_rows('offer' , 'option') )
      @php
      the_row();
      $i++;
      $title = get_sub_field('title');
      $label = get_sub_field('label');
      $link = get_sub_field('link');
      
      @endphp
      <div class="w-full py-4 px-8 text-center items-center justify-center flex  {{ $i % 2 == 0 ? 'bg-primary offer-skew' : 'bg-secondary'  }}">
        <div class="{{ $i % 2 == 0 ? 'offer-skew-opp' : null }}">
          <h2 class="font-serif font-medium text-[25px] mx-auto text-white w-[70%] ">{{ $title }}</h2>
          <a href="{{ $link }}" class="hover:border-none text-[35px] font-bold font-serif text-white ">{{ $label }}</a>
        </div>
      </div>
    @endwhile
  </div>
</section>