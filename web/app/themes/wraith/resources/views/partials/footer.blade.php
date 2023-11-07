@if( function_exists('get_field') )
  @php
  $logo = get_field('logo', 'option');
  $logo_retina = get_field('logo_retina', 'option');
  $footer_copyright = get_field('footer_copyright', 'option');
  $social_facebook = get_field('social_facebook', 'option');
  $social_twitter = get_field('social_twitter', 'option');
  $social_instagram = get_field('social_instagram', 'option');
  $social_youtube = get_field('social_youtube', 'option');
  $social_linkedin = get_field('social_linkedin', 'option');
  $social_pinterest = get_field('social_pinterest', 'option');
  @endphp
@endif

<footer class="content-info blue-bg-gradient py-8 lg:pt-20">
  <div class="container mx-auto flex flex-wrap px-0 mb-4">
    <div class="w-full md:w-2/3 lg:w-1/3 px-4 md:pr-8 mb-8 md:mb-0">
      @php dynamic_sidebar('sidebar-footer-1') @endphp
      <h3 class="text-primary font-bold font-serif text-2xl pt-12">Join Our Newsletter</h3>
        <div class="mb-4">
          <div id="mc_embed_shell" class=" ">
            <style type="text/css">
              #mc_embed_signup{background:#fff; false;clear:left; font:20px Helvetica,Arial,sans-serif;}
              /* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
                 We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
            </style>
            <div id="mc_embed_signup" class="p-2 rounded-lg">
              <form action="" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate flex justify-between items-center" target="_blank">
                  <div id="mc_embed_signup_scroll">
                      <div class="mc-field-group"><input type="email" name="EMAIL" placeholder="Email Address" class="required email md:p-0-75 p-0-75 w-full" id="mce-EMAIL" required="" value=""><span id="mce-EMAIL-HELPERTEXT" class="helper_text"></span></div>
                    <div id="mce-responses" class="clear foot">
                        <div class="response" id="mce-error-response" style="display: none;"></div>
                        <div class="response" id="mce-success-response" style="display: none;"></div>
                    </div>
                    <div aria-hidden="true" style="position: absolute; left: -5000px;">
                        /* real people should not fill this in and expect good things - do not remove this or risk form bot signups */
                        <input type="text" class="md:p-0-75 p-0-75 w-full" name="b_7a386904ce2416b0cece37f7a_dbee80775b" tabindex="-1" value="" inputmode="email" placeholder="Email Address" >
                    </div>
                  </div>
                  <button class="bg-primary py-2 px-6 rounded-lg text-white flex justify-center items-center"> 
                    <input type="submit" name="subscribe" id="mc-embedded-subscribe" class="button" value="">
                    Subscribe
                  </button>
              </form>
              <script type="text/javascript" src="//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js"></script><script type="text/javascript">(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
            </div>
          </div>
        </div>
    </div>
    <div class="w-full md:w-1/3 px-4 mb-8 md:mb-0">
      <div class="widget">
        <h3>Your Star Home Blog</h3>
          <div>
              <a href="/news/case-studies/project-name-3/" class="flex items-center border-none mb-4">
                <img src="/app/uploads/2016/11/DSC0896-1-1-e1592393007778.jpg" alt="" class="w-[80px] h-[60px] object-cover">
                <span class="text-[16px] text-white pl-4 font-semibold tracking-wide">What to Expect During Your Window Installation </span>
              </a>
              <a href="/news/case-studies/project-name-2/" class="flex items-center border-none mb-4">
                <img src="/app/uploads/2015/11/YO4G8105.jpg" alt="" class="w-[80px] h-[60px] object-cover">
                <span class="text-[16px] text-white pl-4 font-semibold tracking-wide">What is Secured by Design? </span>
              </a>
              <a href="/news/case-studies/project-name-1/" class="flex items-center border-none mb-4 lg:mb-0">
                <img src="/app/uploads/2019/11/upvc-windows-and-doors-e1582887664664.jpg" alt="" class="w-[80px] h-[60px] object-cover">
                <span class="text-[16px] text-white pl-4 font-semibold tracking-wide">Get the Cottage Look with Windows and Doors </span>
              </a>
          </div>

        {{-- <div class="flex flex-wrap justify-stretch">
            <div class="flex-grow md:px-1 md:mb-4 lg:mb-0">
                @php dynamic_sidebar('sidebar-footer-2') @endphp
            </div>
            <div class="flex-grow">
                @php dynamic_sidebar('sidebar-footer-3') @endphp
            </div>
        </div> --}}
      </div>
      <ul class="list-reset text-sm flex flex-wrap pt-20">
        @include('partials.components.social_icons' , ['location'=>'footer'])
      </ul>
    </div>
    <div class="w-full md:w-1/2 lg:w-1/3 px-4">
      <section class="widget">
        <h3>Contact Us</h3>
        @include('partials.contact-details', ['colour'=>'white'])
      </section>
    </div>
  </div>
  <div class="text-center relative">
    <div id="panel-share" class="fixed md:absolute invisible opacity-0 transition">
      <div class="panel-share bg-white rounded-sm shadow-lg arrow-bottom lg:mb-0 mb-12 px-4 pb-4 md:py-2">
        <button type="button" class="panel-share-close md:hidden block w-full px-4 py-2 mb-2 uppercase tracking-widest text-center text-xs text-gray-800 hover:text-primary focus:outline-none">Close</button>
        <a href="https://www.facebook.com/sharer/sharer.php?u={{ rawurlencode(wp_get_shortlink()) }}&t={{ rawurlencode(get_the_title()) }}" target="_blank" class="px-4 mx-1 md:mx-0 py-4">
          <i class="fab fa-facebook"></i>
        </a>
        <a href="https://twitter.com/share?text={{ urlencode(get_the_title()) }}%20from%20{{ rawurlencode(bloginfo('name')) }}>&url={{ rawurlencode(wp_get_shortlink()) }}&via=Double_Glazing_" target="_blank" class="px-4 mx-1 md:mx-0 py-4">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ rawurlencode(wp_get_shortlink()) }}&title={{ urlencode(get_the_title()) }}%20from%20{{ rawurlencode(bloginfo('name')) }}>&summary=&source=" target="_blank" class="px-4 mx-1 md:mx-0 py-4">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="mailto:?subject={!! get_bloginfo('name') !!}%20Website&body=Check%20out%20this%20page%20I%20found%3A%20{{ urlencode(home_url($_SERVER['REQUEST_URI'])) }}" target="_blank" class="px-4 mx-1 md:mx-0 py-4">
          <i class="fa fa-envelope"></i>
        </a>
        <button onclick="window.print()" target="_blank" class="px-4 mx-1 md:mx-0 py-4 border-b border-white hover:border-primary focus:outline-none">
          <i class="fa fa-print text-primary"></i>
        </button>
      </div>
    </div>
    {{-- <button type="button" class="page-share btn bg-white text-gray-900 hover:bg-gray-200 hover:text-primary focus:outline-none">Share <i class="fa fa-share"></i></button> --}}
  </div>
</footer>
<section class="bg-primary py-4 pb-16 lg:pb-4">
  <div class="container mx-auto footer-para flex justify-between items-center">
    <p class="text-[#201F22] my-4">
      © {!! date('Y') !!} {!! $footer_copyright ? $footer_copyright : get_bloginfo('name') !!}
      <span class="mx-2 text-2xl text-[#201F22]">|</span>
       <a href="/cookie-policy/" class="text-[#201F22] font-normal">Cookie Policy </a> <span class="mx-2 text-2xl text-[#201F22]">|</span>
       <button id="icaal-cookie-preferences-widget-new" class="text-[#201F22] font-normal" >Update Cookie Preferences </button> <span class="mx-2 text-2xl text-[#201F22]">|</span>
       <a href="/privacy-policy/" class="text-[#201F22] font-normal" >Privacy Policy</a> <span class="mx-2 text-2xl text-[#201F22]">|</span> 
       <a href="/complaints-policy/" class="text-[#201F22] font-normal" >Complaints Policy</a>
    </p>
   
    
    <a href="https://www.internetconsultancy.pro" target="_blank" title="Made with ♥ by ICAAL - www.icaal.co.uk" class="border-0 text-[#201F22] hover:text-gray-200">
      <svg class="w-8 h-8" enable-background="new 0 0 100 100" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><clipPath id="a"><circle cx="50" cy="50" r="49"/></clipPath><path class="fill-current" clip-path="url(#a)" d="m4.603 47.478c0-.721.721-1.081 1.441-1.441.36 0 .36-.36.721-.36 0 .36-.36.721-.36 1.081.721 0 2.162-1.801 2.522-2.522-.36 0-.721.36-.721.721-.721-.721 0-2.162-.36-2.522-.721-.36-1.441 1.081-1.801 1.441 0-1.441 1.081-2.162 2.162-2.522.721 0 1.081-.36 1.441-.721.36-.36.721-.721 1.441-.721.721 1.441-1.441 2.522-1.801 3.603.721.36 1.081-.36 1.441 0s0 1.441.721 1.081c.36-.36.36-1.441.36-1.801 0-.721.36-1.081-.721-1.081 0-1.081.721-1.801.721-2.522s-.721-1.801-1.081-2.162c-.721-1.081-.721-1.081-.36-2.522 0-1.081 0-1.801.36-2.882-1.441-.36-1.441 1.441-1.801 2.162-.36-.36 0-1.441 0-1.801s-.36-.36-.36-.721c0-.36 0-.721 0-1.081-1.081.36-1.081 2.162-1.801 2.882 0 .36-.36.36-.36.721-.36.36 0 .36 0 1.081s0 1.441-.36 1.801c-.36.721-.721.721-.721 1.441 0 .721-.36 1.441-.36 1.801-.36.721-.721 1.081-.721 0 0-.721 0-1.441.36-1.801.36-1.081 0-1.081 0-2.162 0-.721 0-1.801.36-2.522.36-1.081 1.081-3.243 2.162-3.603v.36c.721 0 .721-1.081 1.081-1.801 0-.36 0-.721.36-1.081s.721-.36.721-.721c.36-.721.36-1.801.721-2.162.36-.721.721-1.441 1.441-1.441v1.081c0 .36.36.721.36 1.441 0 1.081-.721 1.081-1.441 1.441v.721c-.721 0-1.081.36-1.081 1.081.36 0 .36-.36.721-.36 0 .36 0 .721-.36 1.081.36.36 1.081 1.081 1.441 1.081 0-.36-.721-1.081 0-1.441.36-.36.721 1.081 1.081.36.721-.721-1.081-2.522 0-2.882 0 1.081.721.36 1.081 0 0-.36 1.081-1.081 1.081-1.441 0-.721-.721-.721-.36-1.441 0-.721.36-1.081.721-1.801 0-.721-.36-1.081-.36-1.801 0-.721.36-1.081.36-1.441-.36 0-1.081.36-1.441.721h-.36c-6.85 8.284-10.813 19.093-10.813 30.982 0 1.801 0 3.603.36 5.404.721.36.36 1.441.721 2.162 0 .36.36 1.801.721 1.801 1.081-1.081-.36-2.882-.36-3.963 0-1.441.721-2.162.721-3.603 0-.721 0-1.441 0-2.162.36-.721.721-.721 1.081-1.081-.362-.719-.722-.719-.722-1.44zm27.382-28.463c-.36 0-.721 0-1.081 0 0-.36.36-1.081 0-1.441.721 0 .36.721.721 1.081.721.36 1.081-.36 1.081-.721.36-.721 0-.721-.36-1.081s-1.081-.721-.36-1.081c.36.721 0 1.081 1.081 1.081 0 0 .36-.36.36-.721 0-.36-.36 0-.36-.36s-.721-.721 0-.721c0 .721.36.721 1.081.36.36-.36.36-.721.721-1.081.36-.721 1.441-2.162 0-2.162 0-.721.721-1.081 1.081-1.441.36.36 0 1.081.36 1.801.36-.721.721-2.162.36-2.522 0-1.081 1.441-2.162 2.162-2.522.721-.721 2.162-1.081 2.522-1.801-1.801-1.441-5.044 2.162-5.765 1.441.721-.36 1.441-.721 2.162-1.081-1.081-.721-3.243 1.441-4.324.36 1.441-.721 3.603-.721 5.044-1.441-.721-.721-3.243-.36-4.324-.36-1.441.36-2.522 1.081-3.603 1.441v.721c.721.36-1.081 1.081-.36 0-.36 0-1.441 1.081-1.441.36-.721 0-1.441.36-2.162.721.36 0 0-.36.36-.36 0 0 0 0-.36 0-5.044 2.882-9.728 6.846-13.331 11.169h.721c.36 0 .721-.36.721-.721.36-.721 1.081-1.081 1.441-1.801.36-.721 1.081-1.081 1.801-1.441.36-.36 1.441-1.441 2.162-1.441v.36s0 0-.36.36h.721c0 .721-.721.36-1.081.36-.36.36-.721.721-1.081 1.081.721 0 1.441-.721 2.162-.36.721.36 0 1.441 0 1.801-.36.721-.721 1.081-.721 1.801 0 .36-.36.721 0 1.081s.721-.36 1.081-.36c.721 1.081-.721.721-1.081.721-.36.36-1.081 1.081-1.081 1.801.36 0 1.081-.36 1.441-.721 0 1.081-1.441 1.081-1.801 2.162s-.36 2.162-.721 2.882c-.36 1.081-.36 1.801-.36 2.882 0 .36 0 1.081.36 1.081s1.081-.36 1.081-.36v1.081c1.441.721 2.162-1.441 2.522-2.522s1.081-2.522 1.801-2.882c1.081-.721 2.522-.721 3.243-1.441 1.081-1.081 1.441-1.801 2.882-2.522 0-.72 1.801-1.44 2.882-2.521zm43.236 67.014c-.36.721-1.081 1.081-2.162 1.441s-1.081 1.081-1.081 1.441c0 .721-.36.721-.721 1.081-.721.36-.36.721-.36 1.081 0 .721 0 .36.721.36s1.081-.721 1.441-1.081c.36-.721 1.081-1.081 1.441-2.162s1.441-1.801 1.441-2.522c0-.719-.72-.359-.72.361zm-26.302-35.308c0 .721.36 1.081.721.721.36-.361.36-1.442.36-1.802s-.36 0-1.081 0c-.72 0 0 .36 0 1.081zm4.684 1.801c-.36 0-.721 0-1.081 0-.36.36.721.721 1.081.721s0 .36.721.36c.36 0 .36 0 0-.36-.36 0 0-.36.36-.721-.36-.721-1.081-.36-1.081 0zm-3.603-3.603c.36 0 .36-.721.36-1.081s0 0-.36.36-.36.361 0 .721c-.36-.36-.36 0 0 0zm18.015 5.765.36-.36s-.721.36-1.441.36c-.36 0-.36.36 0 .721.72-.001 1.081-.361 1.081-.721zm31.345-4.684c0-15.132-6.846-28.824-17.654-37.831v.36 1.081s-.721.721-.721 1.081.36.721.36 1.081c-.721 0-.721 0-1.081.36s0 1.081-1.081.721c0 .721 1.081 1.801 1.081 2.522.36.36.36.721.721 1.081.36.36 1.081 0 1.081.721-.721.36 0 1.801 0 2.882-.721 0-1.441 1.081-1.801 0 2.882 0 0-2.882-.721-3.963s-1.441-3.963-3.243-3.963c0 .721.36 1.081.36 1.801 0 .721.36.721.721 1.441.36.36.36 1.081.721 1.441.36.36.721.36.721 1.081-.36-.36-1.081-.36-1.441-.721-.36-.36-.721-.721-1.081-1.081s-.721-.36-1.441-.721c-.36-.36-1.081-.721-1.441-.36l.721.721c.36.36.721.36.721.721.721.721-.36 1.441-.36.36-.36 0-.721 0-1.081 0s-.721.36-1.081.36c0-.36 0-.36 0-.721-1.081 0-1.081.721-1.801 1.081-.36.36-1.441.36-1.081 1.081-.721.721-.721-.36-1.441-.721l.36-.36c0-.721-1.081-1.441-1.801-.721.721.721.36.721.721 1.441 0 .36.36 1.081.36 1.441-.721-.36-1.081 0-1.441.36-.721.721-.36.36 0 1.441-.36 0-1.801-.721-1.801-.721-.721.36.721.721.721 1.441-1.081 0-1.441-.721-2.162-1.441 0 0-.36 0-.36-.36s.36-.36 0-.721c-.36-.36-.721-.36-1.081-.36-.721-.721 0-.721.721-.36.721.36 1.081.721 1.441 1.081 1.441.721 2.522-.721 1.801-1.801-.721-1.081-1.801-1.801-3.243-1.801-.36 0-3.243-1.081-2.522-1.801-1.441-1.441-4.324-.721-6.125 0-.721.36-1.801 1.081-2.522 1.801-.724.721-.724 1.802-1.084 2.523s-.36 1.081-.721 1.801-.36.721-1.081 1.441c-.36.36-.721 1.081-1.441 1.441-.36.36-1.441.721-1.801 1.081-.36.721-.721 3.243 0 3.963.721 1.441 2.162 0 2.882-.36 0-.36 0-.721.36-.721.36.36.36 1.441.36 1.801 0 .721.36 1.081.721 1.441 0 .36 0 1.801 1.081 1.441.721-.36.36-1.081 1.081-.721.36-.36 0-.721.36-1.081 0-.36.36-.36.36-.721 0-.36 0-.721 0-1.081 0-.721.721-.721 1.081-1.441.36-.721-.721-.721-.721-1.441-.36-.36 0-1.441 0-1.801.36-.36.721-1.081 1.081-1.441.36-.721.721-.721.721-1.441 0-.721-.36-1.081.721-1.081.36 0 1.441 0 1.441.721-.721.721-1.081 1.441-1.801 2.162-.721.721 0 .721 0 1.441 0 .721-.36.721-.36 1.441 0 .36.721.721 1.081.721.721.36 1.081 0 1.801-.36h1.441c.721 0 1.081-.36 1.441.36-.721.36-1.441.721-2.162.721s-1.801-.36-1.801.721c0 .721 1.441 1.801.36 2.162-.721-1.081-1.081 0-1.441.721 0 .721.721 1.441-.36 2.162-.721.36-1.081-.36-1.801-.36-.721 0-1.441 1.081-2.162 1.081v-.36c-.36.36-.721.36-1.081 0 0 0 0 0 .36-.36-.721-.721-1.441.36-1.801 0-1.081-1.081.36-1.081.36-1.801-.721 0 0-1.081-.36-1.441-.721.36-1.441.721-1.801 1.441 0 .721-.36 1.801 0 2.522-.721.36-1.801.36-2.162 1.081-.36.36-.36.721-.36 1.081-.36.36-.36.36-.721.721-.36.36-.36.721-.721.721-.36.36-.721.36-1.081.36s0 .36-.36.36c0 0-.36 0-.721 0-.36 0-.721-.36-1.081 0 .36.36.36.721.36 1.081-.36 0-2.882-.36-2.162.721.36.36 1.081.36 1.801.721.36.36.36 1.081.36 1.441s.36 1.441 0 1.801-1.801 0-2.162 0c-1.081 0-3.243 0-3.243 1.441 0 .721.36 1.081.36 1.801 0 .36-.721 1.081 0 1.441-1.081 1.801 1.081 1.441 2.162 1.801.36.36.36.36.721.36h.721.721l.721-.36c.36-.36.36-.36.721-.721.36-.36.36-.36.721-.721-.36-.721-.721-.721 0-1.801.36-.721 1.081-.721 1.441-1.081.36-.721 0-1.801.721-2.162.721-.36 1.441.721 2.162.36 0-.36 1.801-1.441 2.522-1.081.36.36.36 1.081.721 1.441.36.36.721.36 1.081.721.721.721 1.441 1.081 2.162 1.801.36.36.721.36.721 1.081s-.36 1.081.36 1.441c.36-.721.721-1.441.721-1.801s-.36-.721.36-.721l.721.36c0-.36-.36-.721-.721-1.081-.362-.36-1.083-.36-1.083-.72-1.081-.36-1.801-.721-2.522-1.801-.36-.361-.72-.721-.36-1.442 0-.36.36-1.081.721 0l.721.721c.36.36.721.36 1.081.36.721.36 1.441.721 1.801 1.081.721.721.36 1.441.721 2.162.36.721 1.081 1.081 1.441 1.801 0 0 0 0-.36 0 0 .36.721 1.081 1.441 1.441 1.081.36 0-.36.36-.36.36-.36.36 0 .721-.36l-.36-.36h.721c0-.721-2.522-2.162-.721-2.882.721-.36 1.441 0 1.801 0 .721 0 1.081-.36 1.801-.36-.36.36 0 .36-1.081.36-.36 0-.721 0-1.081.36 0 .36.36.721.36 1.081l.36.36c0 .36-.36.36 0 .721.36.721 1.801.721 1.801 1.441h1.081c.36-.36 0-.721.721-.36.36 0 .36.36.721.36h1.081c.721-.36 1.081-1.081 1.441 0 0 .36-.36.721 0 1.081 0 .36.36.721 0 1.081 0 1.441-.721 2.522-2.162 2.522-.721 0-1.441 0-1.801 0s-.36.36-1.081 0c-.36 0-.721-.36-1.081-.36-.721 0-1.081 0-1.801-.36 0 0 0-.36-.36-.36h-.36c-.36 0-.721.36-.721-.36-.721 0-2.882.721-1.801 1.441.36 1.441-3.243 0-3.963-.36 0 0 0-.36-.36-.721 0 0-.36 0-.721 0s-.721 0-1.441-.36c-.721 0-1.441-.36-2.162-1.081 0 0 .36-.36.721-.721 2.162-2.882-4.684-1.441-5.765-1.441-1.441 0-2.162 1.081-3.603 1.081-.721 0-1.441 0-2.162 0s-1.081-.36-1.441.36c-.721 1.081-1.801 1.441-2.162 2.882-.36 1.441 0 2.162-1.441 2.882-1.081.36-1.801 1.441-2.522 2.522-.36.36-.721.721-1.081 1.441-.36.721 0 1.081.36 1.801v1.801c0 .721-.36 1.441-.36 1.801 0 1.441 1.081 2.162 2.162 3.243.721.721.36.721.721 1.441 0 .721 1.081 1.081 1.441 1.441 1.081.36 2.522 1.441 3.603 1.441.721 0 1.081-.36 1.801-.36.721.36 1.081.721 1.801.36 1.441-.36 2.522-1.441 3.963-1.081s.721 2.162 2.522 1.441c2.882-1.081.36 2.522 1.081 3.603.36.36.721.721 1.081 1.081.721.721 1.441 1.441 1.441 2.162v1.081s.36.361.36.721c.36 1.081.36.36-.36.721-.721.721-1.441 2.522-.721 3.243.36.72 1.081 1.08 1.081 1.441.36.721.36 1.081.721 1.441.36.36 1.081.721 1.081 1.081.36 1.081.36 1.441 1.801 1.081s2.882-.36 4.324-1.081c1.081-.721 3.243-1.081 3.963-2.522 0 0-.36 0-.36-.36.36-.36 1.441-.36 1.801-.721.36-.36 0-1.441.36-1.801s1.081-.36 1.441-.721c.36-.36 1.081-.721 1.441-1.081 1.441-.721 1.801-1.441 1.441-3.243-.36-1.441-.36-2.162.721-3.603.721-1.081 2.162-1.801 2.882-2.882.721-1.081 1.441-1.081 2.522-2.162.721-1.081 1.801-2.522 2.522-3.603 0-.36.721-1.441.36-1.441-.36 0-1.801.721-1.801.721-.36 0-1.441.36-1.801.36-.721 0-.721-.36-1.081-1.081-.721-1.081-1.801-1.441-2.162-2.522-.36-1.441-1.441-1.801-1.801-3.243 0-.721-.36-1.081-.721-1.441-.36-.36-.36-1.081-.721-1.441-.36-.721-1.081-2.882.36-2.162.721.36 1.081 1.441 1.441 2.162.36.36.721.36 1.081 1.081.36.36 0 1.081 0 1.801.36.721.721.721 1.081 1.081s.36 1.081.721 1.441c.721 1.081.36 2.522 1.081 3.243 1.081-.721 2.522-.721 3.603-1.441.36-.36 1.081-.36 1.441-.721s.721-.721 1.081-1.081c1.081-.721 5.044-3.963 3.243-5.044-.36 0-.36-.36-.721 0-.36-.36-.36-1.081-.721-1.801-.36.36-.36.721-.721 1.081-.36.721-.36.36-1.081.721-.721 0-.721.36-1.081 0s0-1.081-.36-1.441c0 .36-.36.36-.36.721 0-1.081-.721-1.441-1.081-2.522s.36-1.801 1.441-1.081c.721.721.721 1.081 1.441 1.801 1.081.721 1.441 0 2.522 0 .36 1.441 1.081.721 2.162 1.081s1.801 0 2.522-.36c0 .721.36 1.081 1.081 1.441.36 0 .721 0 .721.36.36.36-.36.36-.721.36 0 .721 1.081 1.081 1.441 0 0 1.441 0 2.522.36 3.963v1.801c0 .36.36 1.081.36 1.801 1.081-.721 1.441-3.603 2.162-5.044.36-.721 1.081-1.441 1.441-2.162.36-.36 1.081-2.162 1.441-2.162 0 .721 0 2.882.36 3.243h.36v1.081c3.606-5.043 4.326-10.088 4.326-15.492zm-27.022-.721c-.36 0-.36 0-.721 0h-.36-.36c-.36 0-1.081-.36-1.441-.36 0 0 0 0-.36 0l-.36-.721s0 .36-.36 0c0 0 0-.36-.36-.36s-.36 0-.721 0c-.36 0-.36 0-.721 0-.36 0-.36 0-.721 0s0 .36-.36.36-.36 0-.721 0-.721 0-.721 0l-.721-.36c-.36 0-.36-.36-.36-.721 0-.36 0-.36 0-.721v-.36s.36 0 .36-.36c.36-.36 0-.721 0-1.081s0-.721.36-.36c0 0 0 .36.36.36v-.36c0-.36 0-.36.36-.721.36-.36.36-.36.36-.721 0 0 .36-.36.721-.36v.36h.36.721c0 .36-.36.36-.36.36s0 0 0 .36c.36 0 .36-.36.721.36 0 .36 0 .36.36.36s.36-.36.721-.36c.36-.36.36 0 .721 0l.36-.36s-.36 0-.721 0c-.36 0-.36 0-.721-.36l-.721-.36c.36-.36.721-.36 1.081-.36s.721-.36 1.081-.721c.36 0 .36-.36.721-.36h.721l-.721.721s.36 0 .36.36c0 0 0 0-.36 0v.36c0 .36 0 0-.36.36 0 0 0 0-.36.36 0 0 .36.36.721.36 0 .36.36.36.36.36.36 0 .36 0 .721.36.36 0 .36.36.36.36.36 0 .721 0 .721.36 0 0 .36.36.36.721.721 2.165.721 2.885 0 3.245zm9.008 3.603c-.36 0-.36 0-.721 0-.36 0-.36 0-.721 0s-.36 0-.721 0c-.36 0-.36-.36-.721-.36 0 0 0 0-.36 0s-.721-1.441-.36-1.801c0 0 0 0 .36.36 0-.36-.36-1.441.36-1.081 0-.36-.36-.36-.721-.721-.36-.36-.36-.36-.36-.721-.36-.36-.721-1.081-1.081-1.441v-.36l-.36-.36c0-.36 0-.721 0-1.081s.36-.36.721-.721c.36-.36.36-.36.36-.721.36-.36.36-.36.721-.36.36 0 .36.36.721.36 0-.36.36-.36.721 0v1.081c-.36.36-.721-.36-1.081.36 0 .36.36 1.081-.36.721v.36c.721.36.36.721.721 1.081 0 .36.36 0 .721.36.36.36 0 .36 0 .721 0 .36 0 .36.36.721v.721c0 .36 0 .36.36.721l.36.36s0 0-.36 0c0 .36.36.36.36.36s.36.36.36.721c.721 0 .721.72.721.72zm-42.155-17.294c-.36-.36-.721-.36-1.441 0-.721.36 0 .36 0 .721-.36.36-.36.36-.721.36-.36 0 0 0 0 .36s0 .36.36.36c.36.36-.36.721-.721 1.081-.36.36 0 .721.36.721s.721 0 1.441-.36c0 0 .36 0 .721-.36.36 0 .36-.36.721-.721 0-.721-.36-.721 0-1.081.001-.36-.72-.72-.72-1.081zm.721-2.882c-.36.36 0 .721 0 .721l-.36.721s.36 0 .36.36 0 .36.36.36c.36-.36.36.36 0 .721-.36.36 0 .36.36.36s.721-.36.721 0c-.36.36.36.36.36.721.36.36 0 .36-.721.721-.721.36-.36.36 0 .721.36 0 0 .36-.721.721-.721.36-.36.36.36.36.36 0 .721.36.36.36-.36 0-.36-.36-1.081.721-.721.721 0 .721.36.36h.36c.36 0 .36 0 .36-.36s.721 0 1.081 0h1.441s1.081 0 1.081-.36-.721 0-.36-.36l.721-.721c0-.36 0-.721-.36-.721s-.721 0-.721-.721-.36-1.081-.721-1.081-.36-.721-.721-1.081c0-.36-.721-.36-.721-.721.36 0-.36-.36 0-.36.36-.36.36-.721.721-1.081 0-.36-.36-.36-.721 0-.36 0-.36 0-.36 0s.721-.721.721-1.081-.721 0-1.081 0-1.078.36-1.078.72zm-7.206-6.485c.721-.36 1.081-.36 1.441-.721.36 0 .721-.721.721-1.081.36-.36 0-.36 0-.721-.36 0-.36-.36 0-.721 0-.36-.36 0-.36 0 0-.36-.721.36-.721.36h-.36s-.36.36-.36 0-.36-.36-.36 0-.36.36-.36 0-.36 0-.36.36c.36.36-.721.36-.721 0s0-.36-.36-.721c-.36-.36-1.081.36-1.081.721-.36.36.721 0 .721.36s-.36.36-.721.36c0 .36.721.36 1.081.36s0 .36-.36.721c-.36.36 0 .36.36.36h1.081c-.002.723-.002 1.083.719.363zm17.294-17.295c.36 0 .721 0 .721-.36s.721 0 .721.36c-.721 0-1.442-.36-1.442 0 0 .721.721 1.441 1.081 1.441s.721.721 1.081.721.36-1.081.36-1.441c0-.721 0-.721.36-1.081.36 0 .36-.36 0-.36s-.721-.721-1.081-1.081-.36.721-.36.36 0-.36-.36-.36-.36 0-.36.36c.36.36.36.721.36.721s-.721 0-.36-.36c0-.36 0-.36-.36-.721-.36 0-.36.36-.36 0s0-.36-.721-.36-.721.721-.36.721c-.001.36.72 1.08 1.08 1.44zm2.522-1.441c.36 0 .721.36 1.441.36.721 0 1.081 0 1.081-.36.36-.36.36-.36.36-.721 0-.36-1.081-.36-1.441-.36s-.36 0-.721.36c-.36 0-.36-.36-.721-.36-.36 0-.36.36-.721.36-.359.001.001.361.722.721zm1.081 2.162c.36-.36.36.36.36.36.36 0 .36 0 .36-.721 0-.36-.36-.36-.36-.36-.36 0-.36 0-.36-.36s0-.36 0-.36 0-.36-.36-.36-.721.36-.36.36.36.36 0 .721c.36 1.08.72.72.72.72zm16.934 9.728c-.36.36-.36.721 0 .721h.721s.36 0 .36-.36c-.361-.001-1.081-.001-1.081-.361zm-.721-6.485s0 .36.36.721v.721c-.36.36 0 .36 0 .36s.36 0 0 0v.36c-.36 0 0 .36 0 .36 0 .36.36.36.36.36 0 .36 0 .36-.36.36v.36c0 .36.36.721.36.36 0-.36.721 0 .721.36 0 0 0 .721.36.721s.721.36 1.081.721c.36 0 .721 0 .721-.36s-.36-.36-.721-.36c-.36 0-.721-.721-.721-.721 0-.36-.36-.36-.36-.721 0 0-.36-1.081 0-1.441 0-.36 0-.721 0-1.081s0-.36.36-.36 0 0 .36-.36c0-.36.36-.721.721-.721.36-.36.721-.36.721-.36.36 0 .36-.36 0-.721-.36-.36-.36-.36-.721-.36s-.36 0-.36.36c0 0 0 0-.36.36s-.36 0-.721 0c-.36 0-.721.36-1.081.36s0 .36 0 .36.001.001-.72.362c.721 0 0-.361 0 0 0-.361 0 0 0 0zm-48.64 68.456c-.36 0-.721-.36-1.081-.721-.36-.36-.36-.36-.721-.721-.36-.36-.36-.36-.721-.36-.36 0-.721-.36-.721-.36h-.36s0 0-.36 0c-.36-.36-.36-.721-.721-.721-.36-.36-.721-.36-1.081-.36s-.36-.36-.721-.36l-.721-.36v-.36-.36c-.36-.36-.721-1.081-1.081-1.441s-1.081-1.081-1.801-1.441c-.721-.36-1.441-.721-1.801-1.801-.36-.721-1.081-1.441-1.801-1.801-.36-.36-.721-.36-1.441-.721-.36-.36-.721-1.081-1.081-1.081-.36.36-1.081.36-1.081.36s0 .36-.36.36c3.243 8.647 9.007 15.853 16.213 21.257 0-.36 0-.36 0-.721-.36-.36-.721-.36-.36-.721 0-.36.721 0 .721 0 .36 0 .36.36.721.36.36 0 .36 0 .721.36.36-.36 0-1.441 0-1.801 0-.721-.721-1.081-.721-1.801.36 0 .36-.36.36-.721 0-.36.36-.36.36-.721 1.442-2.162.361-3.242-.36-3.242z" fill="#ffffff"/></svg>
    </a>
  </div>
  @include('partials.components.sticky_cta')
</section>

@php
  $chat_whatsapp = get_field('chat_whatsapp', 'option');
  $chat_chatbot = get_field('chat_chatbot', 'option');
@endphp
@if( $chat_whatsapp || $chat_chatbot )
  <div class="cta-chat-fixed">
    @if( $chat_whatsapp )
      <a href="https://api.whatsapp.com/send/?phone={{ $chat_whatsapp }}&text=&type=phone_number&app_absent=0" class="chat-method bg-[#25d366] hover:bg-black">
        <i class="fab fa-whatsapp text-xl text-white"></i>
      </a>
    @endif
    @if( $chat_chatbot )
      <div class="chat-method chat-method-chat bg-primary hover:bg-primary-dark">
        <i class="fa fa-message-lines text-xl text-white"></i>
      </div>
    @endif
  </div>
@endif