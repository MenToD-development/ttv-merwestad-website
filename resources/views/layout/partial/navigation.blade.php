<div class="fixed z-20 bg-white w-full h-16 shadow xl:h-20 xxl:h-24">
  <div class="container h-full flex items-center justify-between mx-auto px-4 lg:px-8">
    <a href="#" id="menu" class="inline-flex items-center h-10 px-4 rounded lg:hidden"
       @click="menu = !menu">
      <span class="block fa fa-bars text-black text-xl"></span>
      <span class="hidden fa fa-times text-black text-xl"></span>
    </a>

    <a class="inline-block" href="{{ url('/') }}">
      <span class="font-serif text-lg xl:text-xl text-black">t.t.v.</span>
      <span class="font-serif text-xl xl:text-3xl text-primary-normal">Merwestad</span>
    </a>

    <nav class="hidden inline-flex flex-grow justify-end items-center h-full pr-16 lg:inline-flex">
      <div class="inline-flex justify-left items-center w-auto h-full">
        @foreach ($mainMenuItems as $page)
          <x-menu-item class="mr-4 xl:mr-6" route-name="{{ $page->id }}" title="{{ $page->title }}">
            {{ $page->name }}
          </x-menu-item>
        @endforeach
      </div>
    </nav>

    <div>
      <a id="route" class="bg-primary-normal hover:bg-primary-hover h-10 xl:h-12 inline-flex items-center justify-center px-4 rounded mr-2"
         href="#">
        <i class="fas fa-route text-white text-xl xl:text-2xl mr-0 lg:mr-3"></i>
        <span class="hidden lg:inline-block font-sans font-bold text-base xl:text-lg text-white">
          Navigeer naar ons
        </span>
      </a>
      <a class="bg-primary-normal hover:bg-primary-hover h-10 xl:h-12 inline-flex items-center justify-center px-4 rounded mr-2"
         href="https://www.facebook.com/ttvmerwestad" target="_blank">
        <i class="fab fa-facebook-square text-white text-xl xl:text-2xl mr-0 lg:mr-3"></i>
        <span class="hidden lg:inline-block font-sans font-bold text-base xl:text-lg text-white">
          Facebook
        </span>
      </a>
    </div>
  </div>
</div>
