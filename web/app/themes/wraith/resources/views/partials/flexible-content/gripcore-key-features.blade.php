@php
    $title = get_sub_field('title');
    $paragraph = get_sub_field('paragraph');
@endphp
<section id="gripcore-key-features" class="blue-bg-gradient py-20 relative">
    <img src="/app/uploads/2023/09/Dots-Left.png" alt="dot background" class="h-auto md:block hidden left-0 opacity-[0.02] absolute">
    <img src="/app/uploads/2023/09/Dots-right.png" alt="dot background" class="h-auto md:block hidden right-0 opacity-[0.02] absolute">
    <div class="container relative mx-auto">
        <h2 class="text-3xl md:text-4xl mb-6 text-white tracking-wide text-center font-bold font-serif"> {{ $title }} </h2>
        <div class="child-p:text-white child-p:text-center child-p:mx-auto mb-12">{!! $paragraph !!}</div>
        @if (have_rows('key_features'))
            <div class="gripcore-key-features-slider">
                @while (have_rows('key_features'))
                    @php
                        the_row();
                        $image = get_sub_field('image');
                        $paragraph = get_sub_field('paragraph');
                    @endphp
                    <div class="max-w-[335px] mx-8 group overflow-hidden">
                        <img class="border-[6px] border-primary bg-[#172127] rounded-full mx-auto mb-8" src="{{ $image['url'] }}" alt="{{ $image['alt'] }}">
                        <div class="child-p:text-white child-p:text-center child-p:mx-auto max-w-[85%] mx-auto"> {!! $paragraph !!} </div>
                    </div>
                @endwhile
            </div>
        @endif
    </div>
</section>
