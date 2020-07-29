<div class="w-full bg-white">
  <div class="container mx-auto px-4 lg:px-8">
    <div class="flex flex-col md:flex-row">
      <div class="w-full md:w-1/2 h-16 flex items-center justify-start">
        <span class="block w-full text-center md:w-auto md:inline-block md:text-left
        font-sans text-sm
          text-black">
          &copy; 2020 T.t.v. Merwestad - Gerealiseerd door
          <a href="https://github.com/mennotempelaar" title="Github: mennotempelaar (Menno Tempelaar)"
             target="_blank">Menno Tempelaar</a> en mede mogelijk door
          <a href="https://nova.laravel.com/" title="Laravel Nova - Beautifully-designed administration panel for Laravel"
             target="_blank">Laravel Nova
        </span>
      </div>
      <div class="w-full md:w-1/2 h-16 flex items-center justify-end">
      @foreach ($disclaimerItems as $page)

        @if ((int) Route::current()->getName() === $page->id)
          <a href="{{ route($page->id) }}" title="{{ $page->title }}"
             class="inline-block font-sans text-sm text-black px-3 underline">
            {{ $page->name }}
          </a>
        @else
          <a href="{{ route($page->id) }}" title="{{ $page->title }}"
             class="inline-block font-sans text-sm text-black px-3">
            {{ $page->name }}
          </a>
        @endif

      @endforeach
      </div>
    </div>
  </div>
</div>
