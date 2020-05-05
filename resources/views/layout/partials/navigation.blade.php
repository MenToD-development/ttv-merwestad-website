<div class="fixed bg-white w-full h-24 shadow-sm">
  <div class="container mx-auto flex items-center justify-between h-full">
    <a class="inline-block" href="{{ route('home') }}">
      <span class="font-serif font-bold text-xl text-black">t.t.v.</span>
      <span class="font-serif font-bold text-3xl text-primary-normal">Merwestad</span>
    </a>

    <nav class="inline-flex flex-grow justify-end items-center h-full pr-16">
      <div class="inline-flex justify-left items-center w-auto h-full">
        <x-menu-item class="mr-8" route-name="home">
          Home
        </x-menu-item>
        <x-menu-item class="mr-8" route-name="about">
          Vereniging
        </x-menu-item>
        <x-menu-item route-name="news">
          Nieuws
        </x-menu-item>
      </div>
    </nav>

    <a class="bg-primary-normal hover:bg-primary-hover h-12 inline-flex items-center justify-center px-4 rounded" href="mailto:webmaster@ttvmerwestad.nl">
      <i class="fas fa-paper-plane text-white mr-3"></i>
      <span class="inline-block font-sans font-bold text-lg text-white">Stuur ons een e-mail</span>
    </a>
  </div>
</div>
