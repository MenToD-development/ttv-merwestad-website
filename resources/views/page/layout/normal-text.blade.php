<div class="bg-white w-full py-12 md:py-20 xl:py-24">
    <div class="container mx-auto px-4 xl:px-8">
      <div class="w-full mb-10 xl:mb-16">
        <div class="text-center mb-2">
          <span class="rounded py-1 px-2 md:py-2 md:px-4 bg-secondary-normal">
            <span class="text-xs md:text-sm font-bold font-sans text-primary-normal">
              {{ $layout->label }}
            </span>
          </span>
        </div>
        <span class="block text-center font-serif text-3xl md:text-4xl text-black">
            {{ $layout->title }}
        </span>
        <div class="prose mx-auto mt-12">
            {!! $layout->text !!}
        </div>
      </div>
    </div>
</div>