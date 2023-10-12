@php
    $title = get_sub_field('title');
    $benefits = get_sub_field('benefits');
    $i = 0;
    $benefits_counter = count($benefits);
@endphp
<section class="lg:mt-16 mt-10 py-24 blue-bg-gradient">
    <h2 class="text-center font-bold font-serif text-white text-3xl lg:text-4xl mb-8">{{ $title }}</h2>
    <div class="container mx-auto flex flex-wrap md:flex-nowrap gap-0 md:gap-40 {{ $benefits_counter <= 3 ? 'justify-center' : null }}">
        <div class="{{ $benefits_counter > 3 ? 'left-column w-full md:w-1/2' : 'w-full flex flex-col lg:max-w-[50%] items-start' }}">
            @if (have_rows('benefits'))
                @while (have_rows('benefits'))
                    @php
                        the_row();
                        $title = get_sub_field('title');
                        $paragraph = get_sub_field('paragraph');
                        $i++;
                    @endphp
                    <div class="benefit cursor-pointer mb-6 flex gap-4">
                        <div class="flex items-center shrink-0 justify-center w-8 h-8 ">
                            <i class="fa-solid fa-plus text-white"></i>
                            <i class="fa-solid fa-minus text-white hidden"></i>
                        </div>
                        <div>
                            <h2 class="secondary-title text-white font-bold font-serif text-[20px]"> {{ $title }} </h2>
                            <div class="hidden benefit-answer child-p:text-white">
                                {!! $paragraph !!}</div>
                        </div>
                    </div>
                @endwhile
            @endif
        </div>
        @if ($benefits_counter > 3)
            <div class="right-column w-full md:w-1/2"></div>
        @endif
    </div>
    @if( have_rows('buttons') )
    <div class="block mt-8">
      @php $i = 0; @endphp
      @while( have_rows('buttons') )
        @php
        the_row();
        $i++;
        $file = get_field('file');
        $label = get_sub_field('label');
        @endphp
        <a href="{{ $file }}" download class="inline-block px-4 py-3 text-sm text-primary hover:text-primary-dark"> {{$label}}</a>
      @endwhile
    </div>
  @endif
</section>
