@if($location == 'form')
@if( $social_facebook && get_field('social_facebook_display', 'option') )
  <li class="text-sm  flex items-center justify-center">
    <a href="{{ $social_facebook }}" target="_blank" class="text-primary h-[30px] w-[30px] rounded-sm flex items-center justify-center">
      <i class="fab fa-facebook-f text-priamry"></i>
    </a>
  </li>
  @endif
  @if( $social_twitter && get_field('social_twitter_display', 'option') )
  <li class="flex items-center text-sm twitter">
    <a href="{{ $social_twitter }}" target="_blank" class="fill-primary inline-block px-2 py-3">
      <div class="flex justify-center items-center fill-primary">
        <svg class="fill-primary" xmlns="http://www.w3.org/2000/svg" width="14" height="12" viewBox="0 0 1000.78 936.689">
          <path id="Path_20803" data-name="Path 20803" d="M131.13,64.461H267.94l604.13,807.76H735.26ZM867.06,0,553.55,338.7,300.24,0H2.44L388.83,516.641,0,936.69H87.51L427.93,568.931,702.98,936.69h297.8l-408.13-545.7L954.57,0Z"/>
        </svg>
      </div>
    </a>
  </li>
  @endif
  @if( $social_instagram && get_field('social_instagram_display', 'option') )
  <li class="text-sm  flex items-center justify-center">
    <a href="{{ $social_instagram }}" target="_blank" class="text-priamry h-[30px] w-[30px] rounded-sm flex items-center justify-center">
      <i class="fab fa-instagram text-priamry"></i>
    </a>
  </li>
  @endif
  @if( $social_youtube && get_field('social_youtube_display', 'option') )
  <li class="text-sm  flex items-center justify-center">
    <a href="{{ $social_youtube }}" target="_blank" class="text-priamry h-[30px] w-[30px] rounded-sm flex items-center justify-center">
      <i class="fab fa-youtube text-priamry"></i>
    </a>
  </li>
  @endif
  @if( $social_pinterest && get_field('social_pinterest_display', 'option') )
  <li class="text-sm  flex items-center justify-center">
    <a href="{{ $social_pinterest }}" target="_blank" class="text-priamry h-[30px] w-[30px] rounded-sm flex items-center justify-center">
      <i class="fab fa-pinterest text-priamry"></i>
    </a>
  </li>
  @endif
  @if( $social_linkedin && get_field('social_linkedin_display', 'option') )
  <li class="text-sm  flex items-center justify-center">
    <a href="{{ $social_linkedin }}" target="_blank" class="text-priamry h-[30px] w-[30px] rounded-sm flex items-center justify-center">
      <i class="fab fa-linkedin text-priamry"></i>
    </a>
  </li>
  @endif
</ul>
@elseif($location == 'footer') 
 @if( $social_facebook && get_field('social_facebook_display', 'option') )
  <li class="text-sm  flex items-center justify-center mr-4">
    <a href="{{ $social_facebook }}" target="_blank" class="text-primary h-[30px] w-[30px] rounded-sm flex items-center justify-center">
      <i class="fab fa-facebook-f text-primary text-2xl"></i>
    </a>
  </li>
  @endif
  @if( $social_twitter && get_field('social_twitter_display', 'option') )
  <li class="flex items-center text-sm twitter mr-4">
    <a href="{{ $social_twitter }}" target="_blank" class="fill-primary inline-block py-3">
      <div class="flex justify-center items-center fill-primary">
        <svg class="fill-primary" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 1000.78 936.689">
          <path id="Path_20803" data-name="Path 20803" d="M131.13,64.461H267.94l604.13,807.76H735.26ZM867.06,0,553.55,338.7,300.24,0H2.44L388.83,516.641,0,936.69H87.51L427.93,568.931,702.98,936.69h297.8l-408.13-545.7L954.57,0Z"/>
        </svg>
      </div>
    </a>
  </li>
  @endif
  @if( $social_instagram && get_field('social_instagram_display', 'option') )
  <li class="text-sm  flex items-center justify-center mr-4">
    <a href="{{ $social_instagram }}" target="_blank" class="text-primary h-[30px] w-[30px] rounded-sm flex items-center justify-center">
      <i class="fab fa-instagram text-primary text-2xl"></i>
    </a>
  </li>
  @endif
  @if( $social_youtube && get_field('social_youtube_display', 'option') )
  <li class="text-sm  flex items-center justify-center mr-4">
    <a href="{{ $social_youtube }}" target="_blank" class="text-primary h-[30px] w-[30px] rounded-sm flex items-center justify-center">
      <i class="fab fa-youtube text-primary text-2xl"></i>
    </a>
  </li>
  @endif
  @if( $social_pinterest && get_field('social_pinterest_display', 'option') )
  <li class="text-sm  flex items-center justify-center mr-4">
    <a href="{{ $social_pinterest }}" target="_blank" class="text-primary h-[30px] w-[30px] rounded-sm flex items-center justify-center">
      <i class="fab fa-pinterest text-primary text-2xl"></i>
    </a>
  </li>
  @endif
  @if( $social_linkedin && get_field('social_linkedin_display', 'option') )
  <li class="text-sm  flex items-center justify-center mr-4">
    <a href="{{ $social_linkedin }}" target="_blank" class="text-primary h-[30px] w-[30px] rounded-sm flex items-center justify-center">
      <i class="fab fa-linkedin text-primary text-2xl"></i>
    </a>
  </li>
  @endif
</ul>
@else 
@if( $social_facebook && get_field('social_facebook_display', 'option') )
  <li class="inline-block text-sm">
    <a href="{{ $social_facebook }}" target="_blank" class="text-primary inline-block px-2 py-3">
      <i class="fab fa-facebook-f"></i>
    </a>
  </li>
  @endif
  @if( $social_twitter && get_field('social_twitter_display', 'option') )
  <li class="flex items-center text-sm twitter">
    <a href="{{ $social_twitter }}" target="_blank" class="fill-primary inline-block py-3">
      <div class="flex justify-center items-center fill-primary">
        <svg class="fill-primary" xmlns="http://www.w3.org/2000/svg" width="20" height="12" viewBox="0 0 1000.78 936.689">
          <path id="Path_20803" data-name="Path 20803" d="M131.13,64.461H267.94l604.13,807.76H735.26ZM867.06,0,553.55,338.7,300.24,0H2.44L388.83,516.641,0,936.69H87.51L427.93,568.931,702.98,936.69h297.8l-408.13-545.7L954.57,0Z"/>
        </svg>
      </div>
    </a>
  </li>
  @endif
  @if( $social_instagram && get_field('social_instagram_display', 'option') )
  <li class="inline-block text-sm">
    <a href="{{ $social_instagram }}" target="_blank" class="text-primary inline-block px-2 py-3">
      <i class="fab fa-instagram"></i>
    </a>
  </li>
  @endif
  @if( $social_youtube && get_field('social_youtube_display', 'option') )
  <li class="inline-block text-sm">
    <a href="{{ $social_youtube }}" target="_blank" class="text-primary inline-block px-2 py-3">
      <i class="fab fa-youtube"></i>
    </a>
  </li>
  @endif
  @if( $social_pinterest && get_field('social_pinterest_display', 'option') )
  <li class="inline-block text-sm">
    <a href="{{ $social_pinterest }}" target="_blank" class="text-primary inline-block px-2 py-3">
      <i class="fab fa-pinterest"></i>
    </a>
  </li>
  @endif
  @if( $social_linkedin && get_field('social_linkedin_display', 'option') )
  <li class="inline-block text-sm">
    <a href="{{ $social_linkedin }}" target="_blank" class="text-primary inline-block px-2 py-3">
      <i class="fab fa-linkedin"></i>
    </a>
  </li>
  @endif
</ul>
@endif