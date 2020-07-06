<div class="container mx-auto px-4 lg:px-8 py-24">
  <div class="flex flex-col md:flex-row md:flex-wrap">
    <div class="w-full mb-8 md:mb-10 md:w-1/2 lg:w-1/4">
      <span class="inline-block text-white text-2xl font-serif mb-4">Navigatie</span>
      <ul>

      @foreach ($mainMenuItems as $page)
        <li class="my-2">
          <a href="{{ route($page->id) }}" title="{{ $page->title }}"
             class="text-white text-base font-sans font-bold hover:text-opacity-50">
            {{ $page->name }}
          </a>
        </li>
      @endforeach

      </ul>
    </div>
    <div class="w-full mb-8 md:mb-10 md:w-1/2 lg:w-1/4">
      <span class="inline-block text-white text-2xl font-serif mb-4">Laatste nieuws</span>
      <ul>
        <li class="my-2">
          <a href="#"
             class="inline-block w-4/5 truncate text-white text-base font-sans font-bold hover:text-opacity-50">
            Gemeentelijke binnensportaccomodaties gesloten t/m 31-08-2020
          </a>
        </li>
        <li class="my-2">
          <a href="#" class="inline-block w-4/5 truncate text-white text-base font-sans font-bold hover:text-opacity-50">
            Competitie najaar 2020
          </a>
        </li>
      </ul>
      <span class="inline-block text-white text-2xl font-serif mb-4 mt-6">Evenementen</span>
      <ul>
        <li class="my-2">
          <a href="#"
             class="inline-block w-4/5 truncate text-white text-base font-sans font-bold hover:text-opacity-50">
            Gemeentelijke binnensportaccomodaties gesloten t/m 31-08-2020
          </a>
        </li>
        <li class="my-2">
          <a href="#" class="inline-block w-4/5 truncate text-white text-base font-sans font-bold hover:text-opacity-50">
            Competitie najaar 2020
          </a>
        </li>
      </ul>
    </div>
    <div class="w-full mb-8 md:mb-0 md:w-1/2 lg:w-1/4">
      <span class="inline-block text-white text-2xl font-serif mb-4">Competitie</span>
      <ul>
        <li class="my-2">
          <a href="#" class="inline-block w-4/5 truncate text-white text-base font-sans font-bold hover:text-opacity-50">
            Onderlinge competities
          </a>
        </li>
        <li class="my-2">
          <a href="#" class="inline-block w-4/5 truncate text-white text-base font-sans font-bold hover:text-opacity-50">
            Uitslagen
          </a>
        </li>
        <li class="my-2">
          <a href="#" class="inline-block w-4/5 truncate text-white text-base font-sans font-bold hover:text-opacity-50">
            Tussenstand
          </a>
        </li>
        <li class="my-2">
          <a href="#" class="inline-block w-4/5 truncate text-white text-base font-sans font-bold hover:text-opacity-50">
            Teams
          </a>
          <ul>
            <li class="my-2 ml-5">
              <a href="#" class="inline-block w-4/5 truncate text-white text-base font-sans hover:text-opacity-50">
                Merwestad 1
              </a>
            </li>
            <li class="my-2 ml-5">
              <a href="#" class="inline-block w-4/5 truncate text-white text-base font-sans hover:text-opacity-50">
                Merwestad 2
              </a>
            </li>
            <li class="my-2 ml-5">
              <a href="#" class="inline-block w-4/5 truncate text-white text-base font-sans hover:text-opacity-50">
                Merwestad 3
              </a>
            </li>
            <li class="my-2 ml-5">
              <a href="#" class="inline-block w-4/5 truncate text-white text-base font-sans hover:text-opacity-50">
                Merwestad 4
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="w-full md:w-1/2 lg:w-1/4">
      <span class="inline-block text-white text-2xl font-serif mb-4">Locatie</span>
      <span class="block text-base font-sans text-white">Maria Montessorilaan 3</span>
      <span class="block text-base font-sans text-white">3312 KJ, Dordrecht</span>
      <br />
      <a href="mailto:info@merwestad.nl"
         class="block text-base font-sans text-white underline">
        info@merwestad.nl
      </a>
      <br />
      <span class="block text-white text-2xl font-serif mb-4">Openingstijden</span>
      <span class="inline-block w-24 text-base font-sans text-white">Dinsdag</span>
      <span class="inline-block text-base font-sans text-white">19:30 - 23:00</span><br />
      <span class="inline-block w-24 text-base font-sans text-white">Donderdag</span>
      <span class="inline-block text-base font-sans text-white">19:30 - 22:00</span><br />
    </div>
  </div>
</div>
