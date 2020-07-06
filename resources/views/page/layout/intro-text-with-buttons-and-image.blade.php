<div class="bg-white w-full py-12 md:py-20 xl:py-24">
  <div class="container mx-auto px-4 xl:px-8 flex flex-col lg:flex-row lg:items-stretch">
    <div class="w-full order-2 lg:order-1 lg:w-2/6 lg:pr-5">
      <h1 class="font-serif text-black leading-none mb-6">
        <span class="block text-2xl">{{ $layout->small_title }}</span>
        <span class="block text-5xl xl:text-6xl text-primary-normal">{{ $layout->title }}</span>
      </h1>

      <div class="text">
        {!! $layout->content !!}
      </div>

      <div class="flex items-center">
        @foreach ($layout->buttons as $button)
          @includeIf('page.layout.button', ['layout' => $button->attributes])
        @endforeach
      </div>
    </div>
    <div class="w-full order-1 mb-6 md:mb-12 lg:order-2 lg:w-4/6 lg:pl-5">
      <div class="w-full h-full overflow-hidden rounded-lg">
        <img src="{{ \Illuminate\Support\Facades\Storage::url($layout->image) }}"
             alt="{{ $layout->image_description }}" class="w-full h-full object-cover">
      </div>
    </div>
  </div>
</div>
