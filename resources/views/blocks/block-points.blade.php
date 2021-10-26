{{--
  Title: Points
  Category: common
  Icon: editor-paste-text
--}}

<section data-{{ $block['id'] }} class="{{ $block['classes'] }} container mx-auto my-10 p-4">
  <div class='grid sm:grid-cols-2'>
    <div class=''>
      <h2 class='text-4xl pt-4 font-semibold purple'>Why choose Veya?</h2>
      <ul>
        <li>
          <span></span><span class='text-xs purple'>Veya gives you expert knowledge to share with your customers – not just the ‘usual’ geo data</span>
        </li>
      </ul>
    </div>
    @php
      $photoid = get_field('image'); 
      $size = 'full'
    @endphp
    <div class=''>
      {!! wp_get_attachment_image($photoid, $size)!!}
    </div>
    <i class="fab fa-facebook"></i>
  </div> 
</section>