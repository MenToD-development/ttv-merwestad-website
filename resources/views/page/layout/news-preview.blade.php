<div class="bg-secondary-normal w-full py-16 md:py-24 xl:py-32">
  <div class="container mx-auto px-4 xl:px-8 flex items-stretch">
    <div class="w-full">
      <div class="text-center mb-2">
        <span class="rounded py-1 px-2 md:py-2 md:px-4 bg-white">
          <span class="text-xs md:text-sm font-bold font-sans text-primary-normal">
            {{ $content->label }}
          </span>
        </span>
      </div>
      <h2 class="block text-center font-serif text-3xl md:text-4xl text-black mb-10 xl:mb-16">
        {{ $content->title }}
      </h2>

      @php($featured = $content->post($content->featured))

      <div class="flex flex-col justify-center lg:flex-row lg:items-stretch">
        <div class="w-full lg:w-2/4 p-3">
          <div class="bg-white w-auto h-full overflow-y-hidden p-6 relative shadow">
            <span class="rounded py-1 px-2 md:py-2 md:px-4 bg-secondary-normal">
              <span class="text-xs md:text-sm font-bold font-sans text-primary-normal">
                Uitgelicht nieuwsbericht
              </span>
            </span>
            <span class="text-black text-lg md:text-xl font-serif block mt-3">
              {{ $featured->title }}
            </span>
            <span class="block text-primary-normal text-opacity-75 text-xs md:text-sm font-sans mb-6">
              {{ $featured->author->name }} - {{ $featured->published_at->diffForHumans() }}
            </span>
            <div class="mb-6 prose pb-12">
              {!! $featured->content !!}
            </div>
            <div class="absolute bottom-0 left-0 w-full bg-white p-6">
{{--              <a href="#" title="Nieuwsbericht: Gemeentelijke binnensportaccomodaties gesloten t/m 31-08-2020" class="bg-primary-normal hover:bg-primary-hover h-10 inline-flex items-center justify-center px-4 rounded">--}}
{{--                <i class="fas fa-arrow-alt-circle-right text-white text-md md:text-lg mr-3"></i>--}}
{{--                <span class="inline-block font-sans font-bold text-base text-white">--}}
{{--                  Lees verder--}}
{{--                </span>--}}
{{--              </a>--}}
            </div>
          </div>
        </div>
      </div>
      <div class="flex justify-center mt-10">
{{--        <a href="#"--}}
{{--          title="Nieuwsbericht: Gemeentelijke binnensportaccomodaties gesloten t/m 31-08-2020"--}}
{{--          class="bg-primary-normal hover:bg-primary-hover h-10 md:h-12 inline-flex items-center justify-center px-4 rounded">--}}
{{--          <i class="fas fa-newspaper text-white mr-3"></i>--}}
{{--          <span class="inline-block font-sans font-bold text-md md:text-lg text-white">--}}
{{--            Bekijk meer nieuws--}}
{{--          </span>--}}
{{--        </a>--}}
      </div>
    </div>
  </div>
</div>
