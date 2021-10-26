{{--
  Title: Steps
  Category: common
  Icon: editor-paste-text
--}}

<section data-{{ $block['id'] }} class="{{ $block['classes'] }}">
@php 
while( have_rows('steps') ): the_row() 
@endphp
@if( get_row_index() % 2 == 0 )
<div  class="container mx-auto my-10  flex flex-col md:flex-row items-center">
  <!--Left Col-->
  <div class="img-wrapper sm:w-2/4 sm:order-1 box-border order-3 w-3/4 lg:py-6 text-center">
    <img src="{{ the_sub_field('image') }}" alt="{{ the_sub_field('alt') }}">
  </div>
  <!--Right Col-->
  <div class="outer flex flex-col order-1 lg:w-1/2 justify-center items-start py-4 sm:px-16 px-8 mr-4 sm:mr-8">
    <div class="number text-sm">{{ get_row_index() }}</div>
      <h2 class="text-4xl pt-4 font-semibold purple">{{ the_sub_field('title') }}</h2>
      <p class="leading-normal purple text-xs my-6 mr-4 sm:mr-12">{{ the_sub_field('text') }}</p>
  </div>
</div>
@else 
<div class="container my-10 mx-auto flex flex-col md:flex-row items-center">
  <!--Left Col-->
  <div class="outer flex flex-col lg:w-1/2 justify-center items-start py-4 sm:px-16 px-8 mr-4 sm:mr-8">
    <div class="number text-sm">{{ get_row_index() }}</div>
      <h2 class="text-4xl pt-4 font-bold purple">{{ the_sub_field('title') }}</h2>
      <p class="leading-normal purple text-xs my-6 mr-4 sm:mr-12">{{ the_sub_field('text') }}</p>
  </div>
  <!--Right Col-->
  <div class="sm:w-2/4 w-3/4 box-border lg:py-6 text-center ">
      <img src="{{ the_sub_field('image') }}" alt="{{ the_sub_field('alt') }}">
  </div>
</div>
@endif 
@endwhile
</section>