@php
    $title = get_sub_field('title');
@endphp
<section id="color-options" class="my-10 lg:my-16">
    <div class="container mx-auto">
        <h2 class="text-center text-3xl font-bold font-serif text-primary lg:text-4xl mb-8 uppercase">{{ $title }}</h2>
    </div>
    <div>
        @if (have_rows('color_options'))
            <div class="container mx-auto flex gap-16 justify-between overflow-auto snap-x">
                @while (have_rows('color_options'))
                    @php
                        the_row();
                        $image = get_sub_field('image');
                        $name = get_sub_field('name');
                    @endphp
                    <div class="text-center snap-start relative flex justify-center">
                        <span class=" inline-block absolute bg-white z-10 font-semibold tracking-wide text-[#3D3B3B] border border-primary rounded-full py-2 px-6 mt-6 uppercase min-w-max">{{ $name }}</span>

                        <img class="max-w-[225px] mb-8 mx-auto" src="{{ $image['url'] }}" alt="{{ $image['alt'] }}">
                    </div>
                @endwhile
            </div>
        @endif
    </div>
</section>
