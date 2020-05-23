<div class="fixed z-20 bg-white w-full h-16 shadow xl:h-20 xxl:h-24">
  <div class="container h-full flex items-center justify-between mx-auto px-4 lg:px-8">
    <a href="#" id="menu" class="inline-flex items-center h-10 px-4 rounded lg:hidden">
      <span class="fa fa-bars text-black text-xl"></span>
    </a>

    <a class="inline-block" href="{{ route('home') }}">
      <span class="font-serif text-lg xl:text-xl text-black">t.t.v.</span>
      <span class="font-serif text-xl xl:text-3xl text-primary-normal">Merwestad</span>
    </a>

    <nav class="hidden inline-flex flex-grow justify-end items-center h-full pr-16 lg:inline-flex">
      <div class="inline-flex justify-left items-center w-auto h-full">
        <x-menu-item class="mr-8" route-name="home">
          Home
        </x-menu-item>
        <x-menu-item class="mr-8" route-name="about">
          Vereniging
        </x-menu-item>
        <x-menu-item class="mr-8" route-name="about">
          Lid worden?
        </x-menu-item>
        <x-menu-item class="mr-8" route-name="about">
          Competitie
        </x-menu-item>
        <x-menu-item class="mr-8" route-name="about">
          Agenda
        </x-menu-item>
        <x-menu-item class="mr-8" route-name="news">
          Nieuws
        </x-menu-item>
        <x-menu-item route-name="news">
          Contact
        </x-menu-item>
      </div>
    </nav>

    <a class="bg-primary-normal hover:bg-primary-hover h-10 xl:h-12 inline-flex items-center
    justify-center px-4 rounded" href="mailto:info@ttvmerwestad.nl">
      <i class="fas fa-paper-plane text-white text-lg xl:mr-3"></i>
      <span class="hidden xl:inline-block font-sans font-bold text-lg text-white">Stuur ons een
        e-mail</span>
    </a>
  </div>
</div>
