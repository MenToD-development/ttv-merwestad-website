
@if ($layout->page_id)
  <a href="{{ route($layout->page_id) }}"
     class="bg-primary-normal hover:bg-primary-hover h-12 inline-flex items-center justify-center px-4 rounded mr-2">
    @if ($layout->icon)
      <i class="fas {{ $layout->icon }} text-white text-2xl mr-3"></i>
    @endif
    <span class="hidden md:inline-block font-sans font-bold text-lg text-white">
      {{ $layout->content }}
    </span>
  </a>
@elseif ($layout->link_naar_pagina)
  <a href="{{ route($layout->link_naar_pagina) }}"
    class="bg-primary-normal hover:bg-primary-hover h-12 inline-flex items-center justify-center px-4 rounded mr-2">
  @if ($layout->icon)
    <i class="fas {{ $layout->icon }} text-white text-2xl mr-3"></i>
  @endif
  <span class="hidden md:inline-block font-sans font-bold text-lg text-white">
    {{ $layout->button_tekst }}
  </span>
  </a>
@elseif ($layout->external_link)
  <a href="{{ $layout->external_link }}" target="_blank"
     class="bg-primary-normal hover:bg-primary-hover h-12 inline-flex items-center justify-center px-4 rounded mr-2">
    @if ($layout->icon)
      <i class="fas {{ $layout->icon }} text-white text-2xl mr-3"></i>
    @endif
    <span class="hidden md:inline-block font-sans font-bold text-lg text-white">
      {{ $layout->content }}
    </span>
  </a>
@elseif($layout->externe_link)
<a href="{{ $layout->external_link }}" target="_blank"
  class="bg-primary-normal hover:bg-primary-hover h-12 inline-flex items-center justify-center px-4 rounded mr-2">
 @if ($layout->icon)
   <i class="fas {{ $layout->icon }} text-white text-2xl mr-3"></i>
 @endif
 <span class="hidden md:inline-block font-sans font-bold text-lg text-white">
   {{ $layout->button_tekst }}
 </span>
</a>
@endif
