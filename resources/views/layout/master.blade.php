<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  @yield('seo')

  <link href="{{ mix('/css/app.css') }}" type="text/css" rel="stylesheet">
</head>
<body>
  <div id="website" :class="appClasses">
    @include('layout.partials.navigation')

    <div class="flex-grow bg-white pt-16 xl:pt-20 xxl:pt-24">
      @yield('content')
    </div>

    <aside class="menu"></aside>

    <footer class="w-full bg-primary-normal">
      <div class="container mx-auto px-4 lg:px-8 py-24">
        <div class="flex flex-col md:flex-row md:flex-wrap">
          <div class="w-full mb-8 md:mb-10 md:w-1/2 lg:w-1/4">
            <span class="inline-block text-white text-2xl font-serif mb-4">Navigatie</span>
            <ul>
              <li class="my-2">
                <a href="#" class="text-white text-base font-sans font-bold hover:text-opacity-50">
                  Home
                </a>
              </li>
              <li class="my-2">
                <a href="#" class="text-white text-base font-sans font-bold hover:text-opacity-50">
                  Vereniging
                </a>
              </li>
              <li class="my-2">
                <a href="#" class="text-white text-base font-sans font-bold hover:text-opacity-50">
                  Lid worden?
                </a>
              </li>
              <li class="my-2">
                <a href="#" class="text-white text-base font-sans font-bold hover:text-opacity-50">
                  Competitie
                </a>
              </li>
              <li class="my-2">
                <a href="#" class="text-white text-base font-sans font-bold hover:text-opacity-50">
                  Agenda
                </a>
              </li>
              <li class="my-2">
                <a href="#" class="text-white text-base font-sans font-bold hover:text-opacity-50">
                  Nieuws
                </a>
              </li>
              <li class="my-2">
                <a href="#" class="text-white text-base font-sans font-bold hover:text-opacity-50">
                  Contact
                </a>
              </li>
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
      <div class="w-full bg-white">
        <div class="container mx-auto px-4 lg:px-8">
          <div class="flex flex-col md:flex-row">
            <div class="w-full md:w-1/3 h-16 flex items-center justify-start">
              <span class="block w-full text-center md:w-auto md:inline-block md:text-left
              font-sans text-sm
                text-black">
                &copy; 2020 t.t.v. Merwestad
              </span>
            </div>
            <div class="w-full md:w-1/3 h-16 flex items-center justify-center">
              <a class="inline-block font-sans text-sm text-black px-3" href="#">
                Disclaimer
              </a>
              <a class="inline-block font-sans text-sm text-black px-3" href="#">
                Privacyverklaring
              </a>
              <a class="inline-block font-sans text-sm text-black px-3" href="#">
                Cookies
              </a>
            </div>
            <div class="w-1/3"></div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <script type="text/javascript" src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
