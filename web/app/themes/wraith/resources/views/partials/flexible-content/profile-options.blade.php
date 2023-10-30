@php
    $title = get_sub_field('title');
    $paragraph = get_sub_field('paragraph');
@endphp
<section class="container mx-auto">
    <h2 class="text-center text-3xl font-bold font-serif text-primary lg:text-4xl mb-8 uppercase"> {{ $title }}</h2>
    <div class="child-p:mb-0 child-p:mx-auto child-p:text-center child-p:font-normal child-p:text-[#3A3A3A]"> {!! $paragraph !!} </div>
    @if (have_rows('profile_options'))
        <div class="flex justify-center gap-10 mt-10">
            @while (have_rows('profile_options'))
                @php
                    the_row();
                    $profile_name = get_sub_field('profile_name');
                    $profile_image = get_sub_field('profile_image');
                @endphp
                <div class="">
                    <h3 class="text-center text-primary text-lg font-serif mb-4">{{ $profile_name }}</h3>
                    <div class="aspect-3/4 max-h-[500px] overflow-hidden">
                        <img class="w-full h-full object-cover hover:h-[110%] ease-in-out duration-500" src="{{ $profile_image['url'] }}" alt="{{ $profile_image['alt'] }}">
                    </div>
                </div>
            @endwhile
        </div>
    @endif
    </section>
