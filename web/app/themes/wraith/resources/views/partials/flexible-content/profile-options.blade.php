@php
    $title = get_sub_field('title');
    $paragraph = get_sub_field('paragraph');
@endphp
<div class="container mx-auto">
    <div class="bg-[#F0F3F4] px-8 pt-8 pb-24">
        <h2 class="text-center text-3xl font-bold font-serif text-primary lg:text-4xl mb-8 uppercase"> {{ $title }}</h2>
        <div class="mb-0 child-p:font-normal child-p:text-[#3A3A3A]"> {!! $paragraph !!} </div>
    </div>
    @if (have_rows('profile_options'))
        <div class="flex justify-center gap-10">
            @while (have_rows('profile_options'))
                @php
                    the_row();
                    $profile_name = get_sub_field('profile_name');
                    $profile_image = get_sub_field('profile_image');
                @endphp
                <div class="">
                    <h3>{{ $profile_name }}</h3>
                    <div class="aspect-3/4 max-h-[500px] overflow-hidden">
                        <img class="w-full h-full object-cover hover:h-[110%] ease-in-out duration-500" src="{{ $profile_image['url'] }}" alt="{{ $profile_image['alt'] }}">
                    </div>
                </div>
            @endwhile
        </div>
    @endif
</div>
