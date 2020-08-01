<div class="bg-white w-full py-16 md:py-24 xl:py-32">
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
    </div> 

  @if ($sponsors->count() === 1)

  @php($sponsor = $sponsors->first())

    <div class="flex flex-col lg:flex-row lg:justify-start lg:items-stretch w-full mb-16">
      <div class="w-full lg:w-2/3 py-4 px-3 lg:px-6">
        <div class="flex items-center mb-8">
          <span class="inline-block text-5xl md:text-6xl fa fa-medal mr-6"></span> 
          <div class="inline-block">
            <span class="block text-lg md:text-xl font-serif">
              {{ $sponsor->type }}
            </span> 
            <span class="text-2xl md:text-3xl text-primary-normal text-black font-serif">
              {{ $sponsor->name }}
            </span>
          </div>
        </div> 
        <div class="flex justify-start mb-4">
          <img src="{{ Storage::url($sponsor->logo) }}" alt="{{ $sponsor->name }}">
        </div> 
        <div class="prose">
          {!! $sponsor->description !!}
        </div>
        <a href="http://{{ $sponsor->website }}" target="_blank" title="{{ $sponsor->name }}" class="bg-primary-normal hover:bg-primary-hover h-10 xl:h-12 inline-flex items-center
            justify-center px-4 rounded mt-6">
          <i class="fas fa-external-link-alt text-white text-lg mr-3"></i> 
          <span class="inline-block font-sans font-bold text-base xl:text-lg text-white">
            Ga naar de website
          </span>
        </a>
      </div> 
      <div class="w-full lg:w-1/3 mt-16 lg:mt-0 py-4 px-0 lg:px-6 flex justify-center items-end">
        <div class="bg-primary-normal rounded">
          <div class="py-8 px-10">
            <span class="block text-white font-serif text-3xl md:text-4xl mb-12">
              Wilt u ons ook sponsoren?
            </span> 
            <a href="mailto:sponsoring@ttvmerwestad.nl" title="Sponsor worden?" class="bg-white h-12 inline-flex items-center justify-center px-4 rounded
                hover:bg-secondary-normal hover:shadow active:shadow-inner">
              <i class="fas fa-paper-plane text-primary-normal text-lg mr-3"></i> 
              <span class="inline-block font-sans font-bold text-lg text-primary-normal">
                E-mail ons
              </span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endif
</div>