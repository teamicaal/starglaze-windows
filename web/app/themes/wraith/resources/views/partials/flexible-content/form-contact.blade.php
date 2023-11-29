@php
$custom_class = get_sub_field('custom_class');
$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
$details = get_sub_field('details');
@endphp
<section class="{!! $custom_class ? ' ' . $custom_class : 'md:my-8' !!}">
  <div class="bg-[#eeeeee] lg:py-24 py-12 flex flex-wrap justify-center">

        <div id="all-forms" class="xl:w-2/5 w-full text-center flex flex-wrap m-6 xl:m-0">
          @php
            $i = 0;
          @endphp
          @if (have_rows('all_forms'))
            @while (have_rows('all_forms'))
              @php
                the_row();
                $form_icon = get_sub_field('form_icon');
                $form_title = get_sub_field('form_title');
                $form_link = get_sub_field('form_link');
                $i++;
              @endphp

                  <a href="{{ $form_link }}" class="2xl:w-[30%] lg:w-[30%] rounded-lg form-box w-full max-h-[170px] lg:mr-6 xl:mb-0 mb-6 text-center flex flex-col justify-center items-center bg-white hover:bg-primary group hover:border-none border-none">
                    <i class="text-4xl text-[#8a8f92] h-[40px] w-[40px] group-hover:text-white rounded-full p-4 fas fa-{!! $form_icon !!}"></i>
                    <h3 class="text-[#8a8f92] text-lg font-serif  group-hover:text-white  tracking-wide font-bold">{{ $form_title }}</h3>
                  </a>

            @endwhile
          @endif
        </div>

      <div class="xl:w-2/5 w-full xl:mt-0 mt-12">
        @if( $subtitle )
        <h4 class="title-display{{ $details ? null : ' text-center title-display-center' }} text-primary mb-4">{{ $subtitle }}</h4>
        @endif @if( $title )
        <h2 class="text-4xl mb-8{{ $details ? null : ' text-center' }}">{{ $title }}</h2>
        @endif
        <div class="flex flex-wrap xl:px-0 px-8">
          <div class="w-full{!! $details ? ' md:w-3/5 md:pr-8 mb-8 md:mb-0' : null !!}">
            <form class="icaal-contact-form" data-form="contact">
              <div class="flex flex-wrap">
                <div class="w-full md:w-1/2 mb-2  md:pr-4">
                  <div class="font-bold text-gray-700 pb-2">First Name*</div>
                  <input name="first_name" type="text">
                  <div class="invalid-feedback text-red"></div>
                </div>
                <div class="w-full md:w-1/2 mb-2 md:pl-4">
                  <div class="font-bold text-gray-700 pb-2">Last Name*</div>
                  <input name="last_name" type="text">
                  <div class="invalid-feedback text-red"></div>
                </div>
                <div class="w-full mb-2">
                  <div class="font-bold text-gray-700 pb-2">Email Address*</div>
                  <input name="email" type="email">
                  <div class="invalid-feedback text-red"></div>
                </div>
                <div class="w-full md:w-1/2 mb-2 md:pr-4">
                  <div class="font-bold text-gray-700 pb-2">Phone Number*</div>
                  <input name="phone" type="tel">
                  <div class="invalid-feedback text-red"></div>
                </div>
                <div class="w-full md:w-1/2 mb-2 md:pl-4">
                  <div class="font-bold text-gray-700 pb-2">Postcode</div>
                  <input name="postcode" type="text">
                  <div class="invalid-feedback text-red"></div>
                </div>
                <div class="w-full mb-2">
                  <div class="font-bold text-gray-700 pb-2">Message</div>
                  <textarea name="message" placeholder="" rows="4"></textarea>
                </div>
                <div class="w-full text-center">
                  <p class="mb-2">
                    * indicates required fields
                  </p>
                  <input class="submit is-valid btn bg-primary hover:bg-secondary text-white cursor-pointer text-center block lg:inline-block w-full lg:w-auto mb-4" type="submit" value="Send Message"><br />
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
</section>
