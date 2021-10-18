{{--
  Title: Three Columns
  Category: common
  Icon: editor-paste-text
--}}

<Section data-{{ $block['id'] }} class="{{ $block['classes'] }} relative my-10">
  <div id="right-triangle" class="hidden md:block triangles"></div>
  <div class='triangles-wrapper'>
    <h2 class='text-center text-4xl font-bold mb-4 pt-16 md:pt-0 purple'>{!!(get_field('title'))!!}</h2>
    <p class='text-center pb-8 font-semibold text-sm purple'>{!!(get_field('subtitle'))!!}</p>
    <div class="container m-auto">
      <!-- All Cards Container -->
      <div class="grid sm:grid-cols-3 grid-cols-1">
        <!-- Card 1 -->
        <div>
          <!-- Card Image -->
          <div class="image-outer grid grid-flow-col">
            <div class="image-wrapper">
              <img  src="{!!(get_field('first_column_image'))!!}" alt="{!!(get_field('first_column_title'))!!}" class="">
            </div>
          </div>
          <!-- Card Content -->
          <div class="p-4">
            @if ( get_field( 'first_column_title' ))
              <h3 class="text-lg text-center mb-4 purple font-bold">{!!(get_field('first_column_title'))!!}</h3>
            @endif
            <p class="text-xs purple">{!!(get_field('first_column_text'))!!}</p>
          </div>
        </div>
        <!-- Card 2 -->
        <div>
          <!-- Card Image -->
          <div class="image-outer grid grid-flow-col">
            <div class="image-wrapper">
              <img  src="{!!(get_field('second_column_image'))!!}" alt="{!!(get_field('first_column_title'))!!}">
            </div>
          </div>
          <!-- Card Content -->
          <div class="p-4">
            @if ( get_field( 'second_column_title' ))
              <h3 class="text-lg text-center mb-4 purple font-bold">{!!(get_field('second_column_title'))!!}</h3>
            @endif
            <p class="text-xs purple">{!!(get_field('second_column_text'))!!}</p>
          </div>
        </div>
        <!-- Card 3 -->
        <div>
          <!-- Card Image -->
          <div class="image-outer grid grid-flow-col">
            <div class="image-wrapper">
              <img  src="{!!(get_field('third_column_image'))!!}" alt="{!!(get_field('third_column_title'))!!}">
            </div>
          </div>
          <!-- Card Content -->
          <div class="p-4">
            @if ( get_field( 'third_column_title' ))
              <h3 class="text-lg text-center mb-4 purple font-bold">{!!(get_field('third_column_title'))!!}</h3>
            @endif
            <p class="text-xs purple pb-12 md:pb-0">{!!(get_field('third_column_text'))!!}</p>
          </div>
      </div>
    </div>
  </div>
  </div>
<div id="down-triangle" class="triangles hidden md:block"></div>
</Section>

