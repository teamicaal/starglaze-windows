@php
$i = 0 ;
@endphp

<section id="offer-strip" class="w-full h-full overflow-hidden">
  <div class="flex flex-wrap lg:flex-nowrap lg:justify-center ">
    @while( have_rows('offer' , 'option') )
      @php
      the_row();
      $i++;
      $title = get_sub_field('title');
      $label = get_sub_field('label');
      $link = get_sub_field('link');
      
      @endphp
      <div class="w-full lg:w-1/4 text-center items-center justify-center flex  ">
        <div class="offer-skew w-full h-full px-8 py-4  {{$i === 1 ? 'offer-before-cover' : null }} {{$i === 4 ? 'offer-after-cover' : null }}  {{ $i % 2 == 0 ? 'bg-primary ' : 'bg-secondary'  }}">
          <div class="offer-skew-opp">
            <h2 class="font-serif font-medium text-[18px] mx-auto text-white w-[70%] ">{{ $title }}</h2>
            <a href="{{ $link }}" class="hover:border-none text-[23px] font-bold font-serif text-white ">{{ $label }}</a>
          </div>
        </div>
      </div>
    @endwhile
  </div>
</section>