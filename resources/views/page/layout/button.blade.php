@dd($layout)

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
@endif
