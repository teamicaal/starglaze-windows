@php
    $map = get_field('global_map', 'option');
@endphp
<div data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="100" class="sm:p-4 lg:p-8">
    <iframe src="{{ $map }}" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>