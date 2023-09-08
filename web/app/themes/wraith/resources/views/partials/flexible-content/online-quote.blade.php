@php
$title = get_sub_field('title');
$paragraph = get_sub_field('paragraph');
$path = get_sub_field('path');
@endphp


<section id="online-quote" class="section_quoting-engine flex-row justify-end items-center pt-[12rem]">
  <div class="mx-auto container ">
    <div class="lg:w-10/12 relative">
      <h2 class="text-primary uppercase font-bold font-serif tracking-wide text-3xl lg:text-4xl mb-6">
      {!! $title !!}
      </h2>
    {!! $paragraph ? '<div class=" child-p:leading-relaxed child-p:max-w-screen-md mb-6 child-p:mb-0">' . $paragraph . '</div>' : null !!}
    </div>
    <div id="engine-container">

    </div>
  </div>
</section>

<script src="https://js.quotingengine.co.uk/v1"></script>
<script>
  (function($) {
    var engine = $('#engine-container').Engine('pk_kIgFoYNHQiLGWb09bnZDcgWU', {
      @if($path)
      path: '@php echo $path @endphp',
      @endif

    start: function(event) {
      gtag('event', 'Start Quote', {
        event_category: 'Quoting Engine',
      })
    },
    postcode: function(event) {
      gtag('event', 'Enter Postcode', {
        event_category: 'Quoting Engine',
      })
    },
    complete: function(event) {
      gtag('event', 'Complete Quote', {
        event_category: 'Quoting Engine',
      })
    }
  })
  engine.render()
  $(window).load(function() {
                engine.open();
            });
})(jQuery);

</script>
