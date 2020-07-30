<div class="bg-primary-normal w-full h-full">
  <div class="py-4 px-4 box-border">
    <div class="flex flex-col">

      @foreach ($mainMenuItems as $page)
        @if ((int) Route::current()->getName() === $page->id)
        <a href="{{ route($page->id) }}" class="block border-b border-white py-2 px-4 mb-1 rounded bg-white">
          <span class="font-serif text-lg text-primary-normal">
            {{ $page->name }}
          </span>
        </a>
        @else
        <a href="{{ route($page->id) }}" class="block border-b border-white py-2 px-4 mb-1 mt-1 rounded">
          <span class="font-serif text-lg text-white">
            {{ $page->name }}
          </span>
        </a>
        @endif
      @endforeach
      
    </div>
  </div>
</div>
