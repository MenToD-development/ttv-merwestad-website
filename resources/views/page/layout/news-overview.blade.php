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

      <div class="w-full flex justify-between items-center">
        <div class="w-1/3 bg-white rounded shadow-sm mr-6">
          <div class="w-full h-48 bg-yellow-100">
            {{-- @todo image --}}
          </div>
          <div class="p-6">
            <span class="text-black text-lg md:text-xl font-serif block mt-3">
              Titel van het nieuwsbericht
            </span>
            <span class="block text-primary-normal text-opacity-75 text-xs md:text-sm font-sans mb-6">
              Menno Tempelaar - 7 minuten geleden
            </span>
          </div>
        </div>
        <div class="w-1/3 bg-white p-6 rounded shadow-sm mr-6"></div>
        <div class="w-1/3 bg-white p-6 rounded shadow-sm"></div>
      </div>
    </div>
  </div>
</div>
