<section>
    @if (have_rows('comparisons'))
        <div class="comparison">
            <div class="container mx-auto flex justify-around flex-wrap">
                @while (have_rows('comparisons'))
                    @php
                        the_row();
                        $image_before = get_sub_field('image_before');
                        $image_after = get_sub_field('image_after');
                    @endphp
                    <div class="item">
                        <img class="img-bottom" src="{{ $image_before['url'] }}" alt="{{ $image_before['alt'] }}">
                        <img class="img-top" src="{{ $image_after['url'] }}" alt="{{ $image_after['alt'] }}">
                        <input class="slider" type="range" min="0" max="100" value="50" id="slider"
                            aria-label="Compare images">
                    </div>
                @endwhile
            </div>
        </div>
    @endif
</section>
