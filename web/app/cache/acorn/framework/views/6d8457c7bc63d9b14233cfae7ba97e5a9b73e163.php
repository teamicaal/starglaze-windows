<?php
$custom_class = get_sub_field('custom_class');
$title = get_sub_field('title');
$image = get_sub_field('image');
$i=0;
?>

<section class="section_testimonials<?php echo $custom_class ? ' ' . $custom_class : ' mb-0 lg:pb-20'; ?>">
  <div class="flex flex-wrap bg-gray-700 lg:py-0 md:py-24 py-20">
    <div class="lg:w-1/2 w-full flex items-center">
      <div class="w-3/4 h-fit mx-auto py-0 lg:py-16">
        <h6 class="title-display text-gray-200 mb-4">Testimonials</h6>
        <h2 class="text-4xl text-white mb-14"><?php echo $title ? $title : 'What Our Customers Say'; ?></h2>
        <?php if(have_rows('testimonials', 'option')): ?>
          <div class="relative">
            <i class="fa fa-quote-right text-white/[0.1] absolute top-0 right-0 text-8xl"></i>
            <div class="testimonials-carousel">
              <?php while(have_rows('testimonials', 'option')): ?>
                <?php
                  the_row();
                  $name = get_sub_field('name');
                  $location = get_sub_field('location');
                  $review = get_sub_field('review');
                ?>
                <div class="text-white">
                  <h4 class="mb-0 2xl:text-2xl text-xl mb-2 tracking-wider font-semibold text-white"><?php echo $name; ?></h4>
                  <h5 class="mb-0 text-gray-200 font-bold mb-0"><?php echo $location; ?></h5>
                  <div class="child-p:text-gray-100 mt-4 sm:leading-loose"><?php echo $review; ?></div>
                  <div class="flex flex-wrap mt-8">
                    <?php for($i=0; $i < 5; $i++): ?>
                      <i class="fa fa-star text-2xl text-yellow-500 mr-1"></i>
                    <?php endfor; ?>
                  </div>
                </div>
              <?php endwhile; ?>
            </div>
          </div>
        <?php endif; ?>
      </div>
    </div>
    <div class="lg:w-1/2 w-full">
      <div class="relative h-full top-20 lg:!min-h-[50vh] lg:block hidden">
        <?php if( $image ): ?>
        <img class="object-fit-cover" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
<?php /**PATH /Users/nick/Local/wraith/web/app/themes/wraith/resources/views/partials/flexible-content/testimonials.blade.php ENDPATH**/ ?>