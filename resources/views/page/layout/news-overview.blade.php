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

      <div class="w-full flex justify-start items-center flex-wrap">
      @foreach ($posts as $post)

      @if($loop->iteration % 3 === 0)
        <div class="w-1/3 bg-white p-6 rounded shadow-sm"></div>
      @else
        <div class="w-1/3 bg-white rounded shadow-sm mr-6">
      @endif

      @if ($post->image)
          <div class="w-full h-48 bg-yellow-100">
            {{-- @todo image --}}
          </div>
      @endif
          <div class="p-6">
            <span class="text-black text-lg md:text-xl font-serif block mt-3">
              {{ $post->title }}
            </span>
            <span class="block text-primary-normal text-opacity-75 text-xs md:text-sm font-sans mb-6">
              {{ $post->author->name }} - {{ $post->published_at->diffForHumans() }}
            </span>
            <div class="prose mb-6">
              <p>
                {{ $post->excerpt() }}
              </p>
            </div>
            <a href="{{ $post->path($overviewPage) }}" title="Nieuwsbericht: {{ $post->title }}"
               class="bg-primary-normal hover:bg-primary-hover h-10 inline-flex items-center justify-center px-4 rounded">
              <i class="fas fa-arrow-alt-circle-right text-white text-md md:text-lg mr-3"></i>
              <span class="inline-block font-sans font-bold text-base text-white">
                Lees verder
              </span>
            </a>
          </div>


        </div>
        @endforeach
        
      </div>
    </div>
  </div>
</div>
