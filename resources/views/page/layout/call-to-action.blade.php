<div class="bg-secondary-normal w-full pb-16 md:pb-24 xl:pb-32">
  <div class="container mx-auto px-4 xl:px-8">
    <div class="flex justify-center">
      <div class="w-full lg:w-3/4 xl:w-2/3 bg-primary-normal rounded-lg shadow-xl">
        <div class="py-8 px-10">
          <div class="flex flex-col">
            <div class="inline-block mr-10 mb-6">
              <span class="fa {{ $content->icon }} text-white text-6xl mt-4"></span>
            </div>
            <div class="inline-block">
              <span class="block text-3xl text-white font-serif mb-6">
                {{ $content->title }}
              </span>

              <div class="prose-lg text-white">
                {!! $content->content !!}
              </div>

              <div class="flex items-center mt-12">
                {{-- <a href="#" title="Bekijk onze agenda" class="bg-white h-12 inline-flex items-center justify-center px-4 rounded
                    hover:bg-secondary-normal hover:shadow active:shadow-inner">
                  <i class="fas fa-calendar text-primary-normal text-lg mr-0 md:mr-3"></i>
                  <span class="hidden md:inline-block font-sans font-bold text-lg
                      text-primary-normal">
                    Maak een afspraak
                  </span>
                </a> --}}
                {{-- <span class="inline-block text-white font-sans text-2xl font-bold mx-4">
                  of
                </span> --}}
                <a href="mailto:info@ttvmerwestad.nl" title="Neem contact op" class="bg-white h-12 inline-flex items-center justify-center px-4 rounded
                    hover:bg-secondary-normal hover:shadow active:shadow-inner">
                  <i class="fas fa-paper-plane text-primary-normal text-lg mr-0 md:mr-3"></i>
                  <span class="hidden md:inline-block font-sans font-bold text-lg text-primary-normal">
                    Neem contact met ons op
                  </span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
