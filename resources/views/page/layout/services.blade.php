<div class="bg-seconday-normal w-full pb-16 md:pb-24 xl:pb-32">
  <div class="container mx-auto px-4 xl:px-8">
    <div class="w-full mb-10 xl:mb-16">
      <div class="text-center mb-2">
        <span class="rounded py-1 px-2 md:py-2 md:px-4 bg-secondary-normal">
          <span class="text-xs md:text-sm font-bold font-sans text-primary-normal">
            {{ $content->title_label }}
          </span>
        </span>
      </div>
      <span class="block text-center font-serif text-3xl md:text-4xl text-black">
          {{ $content->title_content }}
      </span>
    </div>
    <div class="flex flex-col lg:flex-row lg:items-stretch">

    @foreach ($content->services as $service)

      <div class="w-full mb-20 lg:mb-0 lg:w-1/3">
        <div class="flex items-center justify-center mb-8">
          <div class="inline-block mr-6">
            <span class="fas {{ $service->attributes->icon }} text-5xl md:text-6xl text-primary-normal"></span>
          </div>
          <div class="inline-block">
            <span class="font-serif text-xl md:text-2xl">{{ $service->attributes->title }}</span>
          </div>
        </div>
        <div class="w-full px-6 text-center">
          <div class="prose-lg">
            {!! $service->attributes->content !!}
          </div>

        @if ($service->attributes->button_page !== '' || $service->attributes->button_link !== '')
          <a id="route" href="#" class="bg-primary-normal hover:bg-primary-hover h-10 md:h-12 inline-flex items-center
              justify-center px-4 rounded">
            <i
                class="fas fa-calendar-alt text-white text-xl md:text-2xl mr-3"></i>
            <span
                class="inline-block font-sans font-bold text-base md:text-lg text-white">
              Bekijk onze agenda
            </span>
          </a>
        @endif
        </div>
      </div>

    @endforeach

    </div>
  </div>
</div>
