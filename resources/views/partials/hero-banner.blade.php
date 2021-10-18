<div class=" mx-auto flex flex-col md:flex-row items-center">
  <!--Left Col-->
  <div class="flex flex-col lg:w-1/2 justify-center items-start py-4 px-8 mr-4 sm:mr-8">
    @if ( get_field('title'))
      <h1 class="text-6xl font-bold purple">{{ get_field('title') }}</h1>
    @endif
    @if ( get_field('banner_subtitle'))
      <p class="leading-normal purple text-sm my-6 mr-4 sm:mr-12">{{ get_field('banner_subtitle') }}</p>
    @endif
    @if ( get_field('url'))
    <a href="{{ get_field('url') }}">
      <button class="button">{{ get_field('cta') }}</button>
    </a>
    @endif
  </div>
  <!--Right Col-->
  <div class="w-full lg:w-1/2 lg:py-6 text-center">
    <!--Add your product image here-->
      <img src="@if (has_post_thumbnail()) {!! get_the_post_thumbnail_url() !!}" alt="Dam" @endif>
  </div>
</div>