@php
$custom_class = get_sub_field('custom_class');
$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
$details = get_sub_field('details');
@endphp
<section class="{!! $custom_class ? ' ' . $custom_class : 'md:my-8' !!}">
  <div class="bg-[#eeeeee] lg:py-24 py-12">
    <div class="container mx-auto">
      <div class="lg:w-3/4 xl:w-2/3 mx-auto">
        @if( $subtitle )
        <h4 class="title-display{{ $details ? null : ' text-center title-display-center' }} text-primary mb-4">{{ $subtitle }}</h4>
        @endif @if( $title )
        <h2 class="text-4xl mb-8{{ $details ? null : ' text-center' }}">{{ $title }}</h2>
        @endif
        <div class="flex flex-wrap">
          <div class="w-full{!! $details ? ' md:w-3/5 md:pr-8 mb-8 md:mb-0' : null !!}">
            <form class="icaal-contact-form" data-form="contact">
              <div class="flex flex-wrap">
                <div class="w-full md:w-1/2 mb-2  md:pr-4">
                  <div class="text-sm text-gray-700 pb-2">First Name*</div>
                  <input name="first_name" type="text">
                  <div class="invalid-feedback text-red"></div>
                </div>
                <div class="w-full md:w-1/2 mb-2 md:pl-4">
                  <div class="text-sm text-gray-700 pb-2">Last Name*</div>
                  <input name="last_name" type="text">
                  <div class="invalid-feedback text-red"></div>
                </div>
                <div class="w-full mb-2">
                  <div class="text-sm text-gray-700 pb-2">Email Address*</div>
                  <input name="email" type="email">
                  <div class="invalid-feedback text-red"></div>
                </div>
                <div class="w-full md:w-1/2 mb-2 md:pr-4">
                  <div class="text-sm text-gray-700 pb-2">Phone Number*</div>
                  <input name="phone" type="tel">
                  <div class="invalid-feedback text-red"></div>
                </div>
                <div class="w-full md:w-1/2 mb-2 md:pl-4">
                  <div class="text-sm text-gray-700 pb-2">Postcode</div>
                  <input name="postcode" type="text">
                  <div class="invalid-feedback text-red"></div>
                </div>
                <div class="w-full mb-2">
                  <div class="text-sm text-gray-700 pb-2">Message</div>
                  <textarea name="message" placeholder="" rows="4"></textarea>
                </div>
                <div class="w-full md:w-1/2 mb-2 md:pr-4">
                  <div class="text-sm text-gray-700 pb-2">Select Day</div>
                  <input name="phone" type="date">
                  <div class="invalid-feedback text-red"></div>
                </div>
                  <div class="w-full md:w-1/2 mb-2 md:pl-4">
                    <div class="text-sm text-gray-700 pb-2">Choose Time</div>
                    <select class="formField selection relative" name="time" placeholder="Time*">
                        <option disabled="" selected="" value="">Time*</option>
                        <option value="09:30">09:00</option>
                        <option value="09:30">09:30</option>
                        <option value="10:00">10:00</option>
                        <option value="10:30">10:30</option>
                        <option value="11:00">11:00</option>
                        <option value="11:30">11:30</option>
                        <option value="12:00">12:00</option>
                        <option value="12:30">12:30</option>
                        <option value="13:00">13:00</option>
                        <option value="13:30">13:30</option>
                        <option value="14:00">14:00</option>
                        <option value="14:30">14:30</option>
                        <option value="15:00">15:00</option>
                        <option value="15:30">15:30</option>
                        <option value="16:00">16:00</option>
                        <option value="16:30">16:30</option>
                    </select>
                  <div class="invalid-feedback text-red"></div>
                </div>
                <div class="w-full text-center">
                  <input class="submit is-valid btn bg-primary hover:bg-secondary text-white cursor-pointer text-center block lg:inline-block w-full lg:w-auto mb-4" type="submit" value="Book An Appointment"><br />
                  <a href="/privacy-policy/" target="_blank">Privacy Policy</a>
                </div>
              </div>
              <div class="response"></div>
            </form>
          </div>
          @if( $details )
            <div class="w-full md:w-2/5">
              @include('partials.contact-details', ['colour'=>'dark'])
            </div>
          @endif
        </div>
      </div>
    </div>
  </div>
</section>
