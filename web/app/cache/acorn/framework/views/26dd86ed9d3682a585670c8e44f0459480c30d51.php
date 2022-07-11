<?php
$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
$details = get_sub_field('details');
?>
<section class="md:px-8 md:my-8">
  <div class="bg-gray-100 pt-16 pb-8 md:pt-24 md:pb-16 lg:pt-32 lg:pb-24">
    <div class="container mx-auto">
      <div class="lg:w-3/4 xl:w-2/3 mx-auto">
        <?php if( $subtitle ): ?>
        <h4 class="title-display<?php echo e($details ? null : ' text-center title-display-center'); ?> text-primary mb-4"><?php echo e($subtitle); ?></h4>
        <?php endif; ?> <?php if( $title ): ?>
        <h2 class="text-4xl mb-8<?php echo e($details ? null : ' text-center'); ?>"><?php echo e($title); ?></h2>
        <?php endif; ?>
        <div class="flex flex-wrap">
          <div class="w-full<?php echo $details ? ' md:w-2/3 md:pr-8 mb-8 md:mb-0' : null; ?>">
            <form class="icaal-contact-form" data-form="contact">
              <div class="flex flex-wrap">
                <div class="w-full md:w-1/2 mb-4 md:pr-4">
                  <input name="first_name" type="text" placeholder="First Name*">
                  <div class="invalid-feedback text-red"></div>
                </div>
                <div class="w-full md:w-1/2 mb-4 md:pl-4">
                  <input name="last_name" type="text" placeholder="Last Name*">
                  <div class="invalid-feedback text-red"></div>
                </div>
                <div class="w-full mb-4">
                  <input name="email" type="email" placeholder="Email Address*">
                  <div class="invalid-feedback text-red"></div>
                </div>
                <div class="w-full md:w-1/2 mb-4 md:pr-4">
                  <input name="phone" type="tel" placeholder="Phone Number*">
                  <div class="invalid-feedback text-red"></div>
                </div>
                <div class="w-full md:w-1/2 mb-4 md:pl-4">
                  <input name="postcode" type="text" placeholder="Postcode*">
                  <div class="invalid-feedback text-red"></div>
                </div>
                <div class="w-full mb-4">
                  <textarea name="message" placeholder="Message" rows="4"></textarea>
                </div>
                <div class="w-full text-center">
                  <p class="mb-4">
                    * indicates required fields
                  </p>
                  <input class="submit is-valid btn cursor-pointer bg-primary hover:bg-primary-dark text-white hover:bg-primary-dark text-center block lg:inline-block w-full lg:w-auto mb-4" type="submit" value="Send Message"><br />
                  <a href="/privacy-policy/" target="_blank">Privacy Policy</a>
                </div>
              </div>
              <div class="response"></div>
            </form>
          </div>
          <?php if( $details ): ?>
            <div class="w-full md:w-1/3 lg:w-1/4">
              <?php echo $__env->make('partials.contact-details', ['colour'=>'dark'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php /**PATH /Users/nick/Local/wraith/web/app/themes/wraith/resources/views/partials/flexible-content/form-contact.blade.php ENDPATH**/ ?>