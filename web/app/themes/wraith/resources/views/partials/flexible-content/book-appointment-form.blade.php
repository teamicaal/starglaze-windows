@php
$custom_class = get_sub_field('custom_class');
$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
$details = get_sub_field('details');
@endphp
<section class="{!! $custom_class ? ' ' . $custom_class : 'md:my-8' !!}">
  <div class="bg-[#eeeeee] lg:py-24 py-12">
    <div class="container mx-auto">
      <div class="">
        @if( $subtitle )
        <h4 class="title-display{{ $details ? null : ' text-center title-display-center' }} text-primary mb-4">{{ $subtitle }}</h4>
        @endif @if( $title )
        <h2 class="text-4xl mb-8{{ $details ? null : ' text-center' }}">{{ $title }}</h2>
        @endif
        <div class="flex flex-wrap">
          <div class="w-full{!! $details ? ' md:w-3/5 md:pr-8 mb-8 md:mb-0' : null !!}">
            <form class="icaal-contact-form" data-form="contact">
                  <div class="w-full  mb-4">
                    <div class="text-2xl text-primary font-serif capitalize mb-4" for="method">Book your Home or Showroom visit with us</div>
                    <div class="relative">
                      <select class="w-full mb-1" name="method">
                        <option value="Book your Home or Showroom visit with us">Location*</option>
                        <option value="Home Visit">Home Visit </option>
                        <option value="Showroom Visit">Showroom Visit</option>
                      </select>
                    </div>
                    <div class="w-full  mb-1">
                      <input class="text-black" id="appointment-date-time" type="text" name="date_time" placeholder="Please Select Your Date & Time">
                    </div>
                  </div>

                  <div class="w-full  mb-4">
                    <div class="text-2xl text-primary font-serif capitalize mb-4" for="method">I'm interested in</div>
                    <div class="flex flex-wrap">
                      <div class="w-1/3">
                        <label>
                          <input type="checkbox" name="Interested in Windows" value="">
                          <span>Windows</span>
                        </label>
                      </div>
                      <div class="w-1/3">
                        <label>
                          <input type="checkbox" name="Interested in Doors" value="">
                          <span>Doors</span>
                        </label>
                      </div>
                      <div class="w-1/3">
                        <label>
                          <input type="checkbox" name="Interested in Conservatories" value="">
                          <span>Conservatories</span>
                        </label>
                      </div>
                      <div class="w-1/3">
                        <label>
                          <input type="checkbox" name="Interested in Orangeries" value="">
                          <span>Orangeries</span>
                        </label>
                      </div>
                      <div class="w-1/3">
                        <label>
                          <input type="checkbox" name="Interested in StyleLine" value="">
                          <span>StyleLine</span>
                        </label>
                      </div>
                      <div class="w-1/3">
                        <label>
                          <input type="checkbox" name="Interested in Aluminium" value="">
                          <span>Aluminium</span>
                        </label>
                      </div>
                      <div class="w-1/3">
                        <label>
                          <input type="checkbox" name="Interested in Roofline" value="">
                          <span>Roofline</span>
                        </label>
                      </div>
                      <div class="w-1/3">
                        <label>
                          <input type="checkbox" name="Interested in Carports" value="">
                          <span>Carports</span>
                        </label>
                      </div>
                      <div class="w-1/3">
                        <label>
                          <input type="checkbox" name="Interested in Roofline" value="">
                          <span>Pergolas / Verandas</span>
                        </label>
                      </div>
                    </div>
                  </div>

                    <div class="text-2xl text-primary font-serif capitalize mb-4">Your Contact Details</div>
                    <div class="flex flex-wrap">

                      <div class="w-full md:w-1/2 mb-2  md:pr-4">
                        <!-- <div class="font-bold text-gray-700 pb-2">First Name*</div> -->
                        <input name="first_name" type="text" placeholder="First Name*">
                        <div class="invalid-feedback text-red"></div>
                      </div>
                      <div class="w-full md:w-1/2 mb-2 md:pl-4">
                        <!-- <div class="font-bold text-gray-700 pb-2">Last Name*</div> -->
                        <input name="last_name" type="text" placeholder="Last Name*">
                        <div class="invalid-feedback text-red"></div>
                      </div>
                      <div class="w-full md:w-1/2 mb-2  md:pr-4">
                        <!-- <div class="font-bold text-gray-700 pb-2">Email Address*</div> -->
                        <input name="email" type="email" placeholder="Email Address*">
                        <div class="invalid-feedback text-red"></div>
                      </div>
                      <div class="w-full md:w-1/2 mb-2 md:pl-4">
                        <!-- <div class="font-bold text-gray-700 pb-2">Phone Number*</div> -->
                        <input name="phone" type="tel" placeholder="Phone Number*">
                        <div class="invalid-feedback text-red"></div>
                      </div>
                      <div class="w-full mb-2">
                        <!-- <div class="font-bold text-gray-700 pb-2">Address*</div> -->
                        <input name="postcode" type="text" placeholder="Address*">
                        <div class="invalid-feedback text-red"></div>
                      </div>
                      <div class="w-full mb-2">
                        <!-- <div class="font-bold text-gray-700 pb-2">Postcode*</div> -->
                        <input name="postcode" type="text" placeholder="Postcode*">
                        <div class="invalid-feedback text-red"></div>
                      </div>
                      <div class="w-full mb-2">
                        <!-- <div class="font-bold text-gray-700 pb-2">Additional Info</div> -->
                        <textarea name="message" placeholder="Additional Info" rows="4"></textarea>
                      </div>
                      <div class="w-full text-center">
                        <!-- <p class="mb-2">
                          * indicates required fields
                        </p> -->
                        <input class="submit is-valid btn bg-primary hover:bg-secondary text-white cursor-pointer text-center block lg:inline-block w-full lg:w-auto mb-4" type="submit" value="Book Appointment"><br />
                        <a href="/privacy-policy/" target="_blank">Privacy Policy</a>
                      </div>
                    </div>
              <div class="response"></div>
            </form>
          </div>
          @if( $details )
            <div class="w-full md:w-1/3">
              @include('partials.contact-details', ['colour'=>'dark'])
            </div>
          @endif
        </div>
      </div>
    </div>
  </div>
</section>
