@extends('layout.master')

@section('seo')
  <title>Website van t.t.v. Merwestad.</title>
  <meta name="description" content="t.t.v. Merwestad is een tafeltennisvereniging in Dordrecht.">
@endsection

@section('content')
  <!-- intro -->
  <div class="bg-white w-full py-12 md:py-20 xl:py-24">
    <div class="container mx-auto px-4 xl:px-8 flex flex-col lg:flex-row lg:items-stretch">
      <div class="w-full order-2 lg:order-1 lg:w-2/6 lg:pr-5">
        <h1 class="font-serif text-black leading-none mb-6">
          <span class="block text-2xl">Tafeltennisvereniging</span>
          <span class="block text-5xl xl:text-6xl text-primary-normal">Merwestad</span>
        </h1>
        <p class="text-sans text-base md:text-lg text-black mb-4">
          Welkom op de website van tafeltennisvereniging Merwestad. Als vereniging staan wij voor
          gezelligheid. Onze gymzaal ligt aan de Admiraalsplein te Dordrecht genaamd
          <x-link href="https://www.dordtsport.nl/sportlocaties/sport-plus/"
                  target="_blank">Sport+</x-link>.
        </p>
        <p class="text-sans text-base md:text-lg text-black mb-4">
          Deze website zal informatie verschaffen over
          <x-link href="{{ route('about') }}">onze vereniging</x-link>,
          <x-link href="{{ route('news') }}">nieuws</x-link>,
          evenementen, competitie wedstrijden & teams, contactgegevens en nog veel meer.
        </p>
        <a class="bg-primary-normal hover:bg-primary-hover h-12 inline-flex items-center justify-center px-4 rounded"
           id="route" href="#">
          <i class="fas fa-route text-white text-2xl mr-3"></i>
          <span class="hidden inline-block font-sans font-bold text-lg text-white">Rij naar t.t.v.
            Merwestad</span>
          <span class="inline-block font-sans font-bold text-lg text-white">Route</span>
        </a>
      </div>
      <div class="w-full order-1 mb-6 md:mb-12 lg:order-2 lg:w-4/6 lg:pl-5">
        <div class="w-full h-full overflow-hidden rounded-lg">
          <img class="w-full h-full object-cover" src="/images/groeps-foto.jpg" alt="t.t.v. Merwestad" />
        </div>
      </div>
    </div>
  </div>

  <!-- Mogelijkheden binnen Merwestad -->
  <div class="bg-white w-full pb-16 md:pb-24 xl:pb-32">
    <div class="container mx-auto px-4 xl:px-8">
      <!-- intro -->
      <div class="w-full mb-10 xl:mb-16">
        <div class="text-center mb-2">
          <span class="bg-secondary-normal rounded py-1 px-2 md:py-2 md:px-4 shadow">
            <span class="text-xs md:text-sm text-primary-normal font-bold font-sans">
              Gezelligheid staat bovenaan
            </span>
          </span>
        </div>
        <span class="block text-center font-serif text-3xl md:text-4xl text-black">
          Wat zijn de mogelijkheden?
        </span>
      </div>

      <!-- mogelijkheden -->
      <div class="flex flex-col lg:flex-row lg:items-stretch">
        <div class="w-full mb-20 lg:mb-0 lg:w-1/3">
          <div class="flex items-center justify-center mb-8">
            <div class="inline-block mr-6">
              <span class="fas fa-smile-beam text-5xl md:text-6xl text-primary-normal"></span>
            </div>
            <div class="inline-block">
              <span class="font-serif text-xl md:text-2xl">Recreatief</span>
            </div>
          </div>
          <div class="w-full px-6 text-center">
            <p class="text-base md:text-lg font-sans mb-8">
              Binnen onze vereniging hebben wij een grote groep leden die alleen recreatief spelen.
              Hierbij rouleren we met elkaar en spelen we gewoon gezellig met elkaar op de vrije
              tafeltennis tafels. Kom een keer langs en kijk hoe je mee kan doen zonder enige
              ervaring.
            </p>
            <a class="bg-primary-normal hover:bg-primary-hover h-10 md:h-12 inline-flex items-center
                justify-center px-4 rounded" id="route" href="#">
              <i class="fas fa-calendar-alt text-white text-xl md:text-2xl mr-3"></i>
              <span class="inline-block font-sans font-bold text-base md:text-lg text-white">
                Bekijk onze agenda
              </span>
            </a>
          </div>
        </div>
        <div class="w-full mb-20 lg:mb-0 lg:w-1/3">
          <div class="flex items-center justify-center mb-8">
            <div class="inline-block mr-6">
              <span class="fas fa-calendar-check text-5xl md:text-6xl text-primary-normal"></span>
            </div>
            <div class="inline-block">
              <span class="font-serif text-xl md:text-2xl">Evenementen</span>
            </div>
          </div>
          <div class="w-full px-6 text-center">
            <p class="text-base md:text-lg font-sans mb-8">
              Elk half jaar organiseren we binnen onze vereniging een onderlinge competitie. Deze
              competitie duurt ongeveer 3 weken lang en wordt meestal gespeeld op de dinsdag
              avond. Deze onderlinge competities zijn altijd erg gezellig en een goede manier om
              iedereen te leren kennen.
            </p>
            <a class="bg-primary-normal hover:bg-primary-hover h-10 md:h-12 inline-flex items-center
            justify-center px-4 rounded"
               id="route" href="#">
              <i class="fas fa-table-tennis text-white text-xl md:text-2xl mr-3"></i>
              <span class="inline-block font-sans font-bold text-base md:text-lg text-white">
                Lees meer
              </span>
            </a>
          </div>
        </div>
        <div class="w-full lg:mb-0 lg:w-1/3">
          <div class="flex items-center justify-center mb-8">
            <div class="inline-block mr-6">
              <span class="fas fa-fire text-5xl md:text-6xl text-primary-normal"></span>
            </div>
            <div class="inline-block">
              <span class="font-serif text-xl md:text-2xl">Competitie</span>
            </div>
          </div>
          <div class="w-full px-6 text-center">
            <p class="text-base md:text-lg font-sans mb-8">
              Wij hebben ook leden die graag het competitieve onderdeel in de sport willen
              beleven. Hiervoor doen ze mee aan de NTTB competitie afdeling West. Deze competitie
              wordt georganiseerd door de <x-link href="https://www.nttb.nl" target="_blank">
                Nederlands tafeltennisbond</x-link>.
            </p>
            <a class="bg-primary-normal hover:bg-primary-hover h-10 md:h-12 inline-flex items-center
            justify-center px-4 rounded"
               id="route" href="#">
              <i class="fas fa-users text-white text-xl md:text-2xl mr-3"></i>
              <span class="inline-block font-sans font-bold text-base md:text-lg text-white">
                Bekijk onze teams
              </span>
            </a>
          </div>
        </div>
      </div>

      <!-- Call-to-action -->
      <div class="flex justify-center mt-20 lg:mt-24 xl:mt-32">
        <div class="w-full lg:w-3/4 xl:w-2/3 bg-primary-normal rounded-lg shadow-xl">
          <div class="py-8 px-10">
            <div class="flex flex-col">
              <div class="inline-block mr-10 mb-6">
                <span class="fa fa-table-tennis text-white text-6xl mt-4"></span>
              </div>
              <div class="inline-block">
                <span class="block text-3xl text-white font-serif mb-6">
                  Interesse gekregen?
                </span>
                <p class="block text-base md:text-lg text-white font-sans">
                  Heeft u interesse gekregen om lid te worden van de vereniging? Kijk in onze agenda
                  of neem contact met ons op en kom een keer vrijblijvend langs om kennis te
                  maken met onze vereniging.
                </p>
                <div class="flex items-center mt-12">
                  <a class="bg-white h-12 inline-flex items-center justify-center px-4 rounded
                    hover:bg-secondary-normal hover:shadow active:shadow-inner"
                         href="#"
                         title="Bekijk onze agenda">
                    <i class="fas fa-calendar text-primary-normal text-lg mr-0 md:mr-3"></i>
                    <span class="hidden md:inline-block font-sans font-bold text-lg
                    text-primary-normal">
                      Bekijk onze agenda
                    </span>
                  </a>
                  <span class="inline-block text-white font-sans text-2xl font-bold mx-4">
                    of
                  </span>
                  <a class="bg-white h-12 inline-flex items-center justify-center px-4 rounded
                    hover:bg-secondary-normal hover:shadow active:shadow-inner"
                     href="#"
                     title="Bekijk onze agenda">
                    <i class="fas fa-paper-plane text-primary-normal text-lg mr-0 md:mr-3"></i>
                    <span class="hidden md:inline-block font-sans font-bold text-lg
                    text-primary-normal">
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

  <!-- Laatste nieuws -->
{{--  <div class="bg-secondary-normal w-full py-32">--}}
{{--    <div class="container mx-auto flex items-stretch">--}}
{{--      <div class="w-full">--}}
{{--        <div class="text-center mb-2">--}}
{{--          <span class="bg-white rounded py-2 px-4 shadow">--}}
{{--            <span class="text-sm text-primary-normal font-bold font-sans">--}}
{{--              Wat gebeurt er bij Merwestad--}}
{{--            </span>--}}
{{--          </span>--}}
{{--        </div>--}}
{{--        <h2 class="block text-center font-serif text-5xl text-black mb-6">--}}
{{--          Laatste nieuws--}}
{{--        </h2>--}}

{{--        <div class="flex justify-end items-stretch">--}}
{{--          <div class="w-2/5 p-3">--}}
{{--            <div class="bg-white w-auto h-full overflow-y-hidden p-6 relative">--}}
{{--              <span class="inline-block bg-secondary-normal py-2 px-4 mb-2 rounded">--}}
{{--                <span class="text-sm text-primary-normal font-bold font-sans">Uitgelicht nieuwsbericht</span>--}}
{{--              </span>--}}
{{--              <span class="text-black text-xl font-serif block">--}}
{{--                Competitie najaar 2020--}}
{{--              </span>--}}
{{--              <span class="block text-primary-normal text-opacity-75 text-sm font-sans mb-6">--}}
{{--                Stefan de Jong - {{ \Illuminate\Support\Carbon::make('12-05-2020 21:15:06')->diffForHumans() }}--}}
{{--              </span>--}}
{{--              <div class="h-64 mb-6">--}}
{{--                <p class="inline-block font-sans text-base text-black mb-4">--}}
{{--                  Ondanks dat het er voorlopig naar uit ziet dat we pas op 1 september--}}
{{--                  weer mogen beginnen, heb ik toch het verzoek gehad van de bond om de--}}
{{--                  teams door te geven voor de najaarscompetitie. Het inschrijven kan tot--}}
{{--                  15 juni 2020.--}}
{{--                </p>--}}
{{--                <p class="inline-block font-sans text-base text-black mb-4">--}}
{{--                  Waarschijnlijk zal zoals het er nu naar uitziet, zullen er geen dubbels--}}
{{--                  worden gespeeld. Voor reguliere competitie betekent het dat er dan 9--}}
{{--                  wedstrijden gespeeld worden. Bij de Duo is momenteel de intentie om een--}}
{{--                  extra enkel te spelen.--}}
{{--                </p>--}}
{{--                <p class="inline-block font-sans text-base text-black mb-4">--}}
{{--                  <strong>Graag hoor ik wie of welke teams competitie willen spelen.</strong>--}}
{{--                </p>--}}
{{--                <p class="inline-block font-sans text-base text-black mb-4">--}}
{{--                  De competitie kan regulier zijn, dit betekent een team van 3 spelers die--}}
{{--                  elk 3 wedstrijden spelen en (een dubbel) , dit zijn 10 wedstrijden per--}}
{{--                  avond. (nu waarschijnlijk 9 stuks)--}}
{{--                </p>--}}
{{--                <p class="inline-block font-sans text-base text-black mb-4">--}}
{{--                  Ook kan dit duo zijn, dit is een team van 2 spelers, die elk 2--}}
{{--                  wedstrijden spelen en (een dubbel), dit zijn 5 wedstrijden, voordeel is--}}
{{--                  dat het niet zo laat wordt.--}}
{{--                </p>--}}
{{--                <p class="inline-block font-sans text-base text-black mb-4">--}}
{{--                  Mocht de 1,5 meter nog steeds van toepassing zijn, dan dien je er ook--}}
{{--                  rekening mee te houden dat vervoer van een team in één auto vermoedelijk--}}
{{--                  moeilijk of niet mogelijk is.--}}
{{--                </p>--}}
{{--              </div>--}}
{{--              <div class="absolute bottom-0 left-0 w-full bg-white p-6">--}}
{{--                <a class="bg-primary-normal hover:bg-primary-hover h-10 inline-flex items-center justify-center px-4 rounded"--}}
{{--                   href="#"--}}
{{--                   title="Nieuwsbericht: Gemeentelijke binnensportaccomodaties gesloten t/m 31-08-2020">--}}
{{--                  <i class="fas fa-arrow-alt-circle-right text-white text-lg mr-3"></i>--}}
{{--                  <span class="inline-block font-sans font-bold text-base text-white">Lees verder</span>--}}
{{--                </a>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}

{{--          <div class="w-3/5 p-3">--}}
{{--            <div class="bg-white p-6 w-full mb-6">--}}
{{--              <span class="text-black text-xl font-serif block">--}}
{{--                Gemeentelijke binnensportaccomodaties gesloten t/m 31-08-2020--}}
{{--              </span>--}}
{{--              <span class="block text-primary-normal text-opacity-75 text-sm font-sans mb-6">--}}
{{--                Kirsten Bubbert - {{ \Illuminate\Support\Carbon::make('13-05-2020 10:08:51')->diffForHumans() }}--}}
{{--              </span>--}}
{{--              <p class="inline-block font-sans text-base text-black mb-4">--}}
{{--                Naar aanleiding van de laatste ontwikkelingen en de aanwijzingen vanuit de RIVM en--}}
{{--                de overheid dienen de gemeentelijke sportaccommodaties gesloten te blijven tot en--}}
{{--                met maandag 31 augustus 2020.--}}
{{--              </p>--}}
{{--              <a class="bg-primary-normal hover:bg-primary-hover h-10 inline-flex items-center justify-center px-4 rounded"--}}
{{--                 href="#"--}}
{{--                 title="Nieuwsbericht: Gemeentelijke binnensportaccomodaties gesloten t/m 31-08-2020">--}}
{{--                <i class="fas fa-arrow-alt-circle-right text-white text-lg mr-3"></i>--}}
{{--                <span class="inline-block font-sans font-bold text-base text-white">Lees verder</span>--}}
{{--              </a>--}}
{{--            </div>--}}
{{--            <div class="bg-white p-6 w-full">--}}
{{--              <span class="text-black text-xl font-serif block">--}}
{{--                Gemeentelijke binnensportaccomodaties gesloten t/m 31-08-2020--}}
{{--              </span>--}}
{{--              <span class="block text-primary-normal text-opacity-75 text-sm font-sans mb-6">--}}
{{--                Kirsten Bubbert - {{ \Illuminate\Support\Carbon::make('13-05-2020 10:08:51')->diffForHumans() }}--}}
{{--              </span>--}}
{{--              <p class="inline-block font-sans text-base text-black mb-4">--}}
{{--                Naar aanleiding van de laatste ontwikkelingen en de aanwijzingen vanuit de RIVM en--}}
{{--                de overheid dienen de gemeentelijke sportaccommodaties gesloten te blijven tot en--}}
{{--                met maandag 31 augustus 2020.--}}
{{--              </p>--}}
{{--              <a class="bg-primary-normal hover:bg-primary-hover h-10 inline-flex items-center justify-center px-4 rounded"--}}
{{--                 href="#"--}}
{{--                 title="Nieuwsbericht: Gemeentelijke binnensportaccomodaties gesloten t/m 31-08-2020">--}}
{{--                <i class="fas fa-arrow-alt-circle-right text-white text-lg mr-3"></i>--}}
{{--                <span class="inline-block font-sans font-bold text-base text-white">Lees verder</span>--}}
{{--              </a>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--        </div>--}}

{{--        <div class="flex justify-center mt-10">--}}
{{--          <a class="bg-primary-normal hover:bg-primary-hover h-12 inline-flex items-center justify-center px-4 rounded"--}}
{{--             href="#"--}}
{{--             title="Nieuwsbericht: Gemeentelijke binnensportaccomodaties gesloten t/m 31-08-2020">--}}
{{--            <i class="fas fa-newspaper text-white mr-3"></i>--}}
{{--            <span class="inline-block font-sans font-bold text-lg text-white">Bekijk meer nieuws</span>--}}
{{--          </a>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--    </div>--}}
{{--  </div>--}}

  <!-- sponsoren -->
{{--  <div class="bg-white w-full py-32">--}}
{{--    <div class="container mx-auto">--}}
{{--      <div class="w-full mb-16">--}}
{{--        <div class="text-center mb-2">--}}
{{--          <span class="bg-secondary-normal rounded py-2 px-4 shadow">--}}
{{--            <span class="text-sm text-primary-normal font-bold font-sans">--}}
{{--              Wij kunnen niet zonder jullie--}}
{{--            </span>--}}
{{--          </span>--}}
{{--        </div>--}}
{{--        <span class="block text-center font-serif text-5xl text-black">--}}
{{--          Onze sponsoren--}}
{{--        </span>--}}
{{--      </div>--}}
{{--      <div class="flex justify-start items-stretch w-full mb-16">--}}
{{--        <div class="w-2/3 py-4 px-6">--}}
{{--          <div class="flex items-center mb-8">--}}
{{--            <span class="inline-block text-6xl fa fa-medal mr-6"></span>--}}
{{--            <div class="inline-block">--}}
{{--              <span class="block text-xl font-serif">--}}
{{--                Onze hoofdsponsor--}}
{{--              </span>--}}
{{--              <span class="text-3xl text-primary-normal text-black font-serif">--}}
{{--                R.V. Bouw- en Timmerbedrijf--}}
{{--              </span>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--          <div class="flex justify-start mb-4">--}}
{{--            <img src="/images/rv-bouw-en-timmerbedrijf-logo.png" alt="RV Bouw- en timmerbedrijf" />--}}
{{--          </div>--}}
{{--          <p class="text-base font-sans mb-6">--}}
{{--            Wanneer u op zoek bent naar een aannemersbedrijf in de regio Dordrecht dan bent u bij--}}
{{--            R.V. Bouw- en Timmerbedrijf aan het juiste adres. Wij verzorgen met veel plezier een--}}
{{--            breed scala aan timmer- en bouwwerkzaamheden voor zowel particulieren als bedrijven.--}}
{{--            Dit doen wij het meest in de Drechtsteden. Zo hebben we in al die jaren al veel--}}
{{--            tevreden klanten geholpen in o.a. Dordrecht, Zwijndrecht, Papendrecht, Sliedrecht en--}}
{{--            omstreken.--}}
{{--          </p>--}}
{{--          <a class="bg-primary-normal hover:bg-primary-hover h-10 inline-flex items-center--}}
{{--              justify-center px-4 rounded"--}}
{{--             href="http://www.rvbouwbedrijf.nl" target="_blank"--}}
{{--             title="Aannemer Dordrecht - Aannemersbedrijf, Bouwbedrijf & Timmerbedrijf">--}}
{{--            <i class="fas fa-external-link-alt text-white text-lg mr-3"></i>--}}
{{--            <span class="inline-block font-sans font-bold text-base text-white">--}}
{{--              Ga naar de website--}}
{{--            </span>--}}
{{--          </a>--}}
{{--        </div>--}}
{{--        <div class="w-1/3 py-4 px-6 flex items-end">--}}
{{--          <div class="bg-primary-normal rounded">--}}
{{--            <div class="py-8 px-10">--}}
{{--              <span class="block text-white font-serif text-4xl mb-12">--}}
{{--                Wilt u ons ook sponsoren?--}}
{{--              </span>--}}
{{--              <a class="bg-white h-12 inline-flex items-center justify-center px-4 rounded--}}
{{--                  hover:bg-secondary-normal hover:shadow active:shadow-inner"--}}
{{--                 href="#"--}}
{{--                 title="Sponsor worden?">--}}
{{--                <i class="fas fa-paper-plane text-primary-normal text-lg mr-3"></i>--}}
{{--                <span class="inline-block font-sans font-bold text-lg text-primary-normal">--}}
{{--                  Neem contact met ons op--}}
{{--                </span>--}}
{{--              </a>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--    </div>--}}
{{--  </div>--}}

  <!-- Competitie overzicht -->
{{--  <div class="bg-secondary-normal w-full py-32">--}}
{{--    <div class="container mx-auto">--}}
{{--      <div class="w-full text-center mb-10">--}}
{{--        <div class="inline-block bg-white rounded shadow py-2 px-4">--}}
{{--          <span class="text-sm text-primary-normal font-bold font-sans">--}}
{{--            Wie staat er deze keer bovenaan?--}}
{{--          </span>--}}
{{--        </div>--}}
{{--        <h2 class="block font-serif text-5xl text-black mb-6">--}}
{{--          Competitie overzicht--}}
{{--        </h2>--}}
{{--      </div>--}}
{{--      <div class="flex items-stretch justify-start">--}}
{{--        <div class="w-1/3 pr-8">--}}
{{--          <h3 class="text-black text-xl font-serif block mb-6">--}}
{{--            Top 10 [Competitie naam]--}}
{{--          </h3>--}}
{{--          <p class="block text-black text-base font-sans mb-6">--}}
{{--            Een top 10 van onze leden aan de hand van hun gewonnen wedstrijden.--}}
{{--          <p>--}}
{{--          <ol>--}}
{{--            <li class="block flex justify-between items-center py-4 px-6 mb-2 bg-white rounded--}}
{{--                shadow">--}}
{{--              <div>--}}
{{--                <span class="inline-block w-5 text-base text-black font-sans font-bold mr-2">--}}
{{--                  1.--}}
{{--                </span>--}}
{{--                <span class="text-lg text-black font-sans">--}}
{{--                  Gert-Jan Vervoorn--}}
{{--                </span>--}}
{{--              </div>--}}
{{--              <div class="bg-primary-normal py-1 px-4 rounded-full shadow-inner">--}}
{{--                <span class="text-base text-white font-sans font-bold">--}}
{{--                  88%--}}
{{--                </span>--}}
{{--              </div>--}}
{{--            </li>--}}
{{--            <li class="block flex justify-between items-center py-4 px-6 mb-2 bg-white rounded shadow">--}}
{{--              <div>--}}
{{--                <span class="inline-block w-5 text-base text-black font-sans font-bold mr-2">--}}
{{--                  2.--}}
{{--                </span>--}}
{{--                <span class="text-lg text-black font-sans">--}}
{{--                  Lenny Klarenaar--}}
{{--                </span>--}}
{{--              </div>--}}
{{--              <div class="bg-primary-normal py-1 px-4 rounded-full shadow-inner">--}}
{{--                <span class="text-base text-white font-sans font-bold">--}}
{{--                  83%--}}
{{--                </span>--}}
{{--              </div>--}}
{{--            </li>--}}
{{--            <li class="block flex justify-between items-center py-4 px-6 mb-2 bg-white rounded shadow">--}}
{{--              <div>--}}
{{--                <span class="inline-block w-5 text-base text-black font-sans font-bold mr-2">--}}
{{--                  3.--}}
{{--                </span>--}}
{{--                <span class="text-lg text-black font-sans">--}}
{{--                  Stefan de Jong--}}
{{--                </span>--}}
{{--              </div>--}}
{{--              <div class="bg-primary-normal py-1 px-4 rounded-full shadow-inner">--}}
{{--                <span class="text-base text-white font-sans font-bold">--}}
{{--                  70%--}}
{{--                </span>--}}
{{--              </div>--}}
{{--            </li>--}}
{{--            <li class="block flex justify-between items-center py-4 px-6 mb-2 bg-white rounded shadow">--}}
{{--              <div>--}}
{{--                <span class="inline-block w-5 text-base text-black font-sans font-bold mr-2">--}}
{{--                  4.--}}
{{--                </span>--}}
{{--                <span class="text-lg text-black font-sans">--}}
{{--                  Maurice de Jager--}}
{{--                </span>--}}
{{--              </div>--}}
{{--              <div class="bg-primary-normal py-1 px-4 rounded-full shadow-inner">--}}
{{--                <span class="text-base text-white font-sans font-bold">--}}
{{--                  63%--}}
{{--                </span>--}}
{{--              </div>--}}
{{--            </li>--}}
{{--            <li class="block flex justify-between items-center py-4 px-6 mb-2 bg-white rounded shadow">--}}
{{--              <div>--}}
{{--                <span class="inline-block w-5 text-base text-black font-sans font-bold mr-2">--}}
{{--                  5.--}}
{{--                </span>--}}
{{--                <span class="text-lg text-black font-sans">--}}
{{--                  Theun Evers--}}
{{--                </span>--}}
{{--              </div>--}}
{{--              <div class="bg-primary-normal py-1 px-4 rounded-full shadow-inner">--}}
{{--                <span class="text-base text-white font-sans font-bold">--}}
{{--                  60%--}}
{{--                </span>--}}
{{--              </div>--}}
{{--            </li>--}}
{{--            <li class="block flex justify-between items-center py-4 px-6 mb-2 bg-white rounded shadow">--}}
{{--              <div>--}}
{{--                <span class="inline-block w-5 text-base text-black font-sans font-bold mr-2">--}}
{{--                  6.--}}
{{--                </span>--}}
{{--                <span class="text-lg text-black font-sans">--}}
{{--                  Sandor Lelkes--}}
{{--                </span>--}}
{{--              </div>--}}
{{--              <div class="bg-primary-normal py-1 px-4 rounded-full shadow-inner">--}}
{{--                <span class="text-base text-white font-sans font-bold">--}}
{{--                  50%--}}
{{--                </span>--}}
{{--              </div>--}}
{{--            </li>--}}
{{--            <li class="block flex justify-between items-center py-4 px-6 mb-2 bg-white rounded shadow">--}}
{{--              <div>--}}
{{--                <span class="inline-block w-5 text-base text-black font-sans font-bold mr-2">--}}
{{--                  7.--}}
{{--                </span>--}}
{{--                <span class="text-lg text-black font-sans">--}}
{{--                  Rob Tempelaar--}}
{{--                </span>--}}
{{--              </div>--}}
{{--              <div class="bg-primary-normal py-1 px-4 rounded-full shadow-inner">--}}
{{--                <span class="text-base text-white font-sans font-bold">--}}
{{--                  42%--}}
{{--                </span>--}}
{{--              </div>--}}
{{--            </li>--}}
{{--            <li class="block flex justify-between items-center py-4 px-6 mb-2 bg-white rounded shadow">--}}
{{--              <div>--}}
{{--                <span class="inline-block w-5 text-base text-black font-sans font-bold mr-2">--}}
{{--                  8.--}}
{{--                </span>--}}
{{--                <span class="text-lg text-black font-sans">--}}
{{--                  Ruud Bakker--}}
{{--                </span>--}}
{{--              </div>--}}
{{--              <div class="bg-primary-normal py-1 px-4 rounded-full shadow-inner">--}}
{{--                <span class="text-base text-white font-sans font-bold">--}}
{{--                  42%--}}
{{--                </span>--}}
{{--              </div>--}}
{{--            </li>--}}
{{--            <li class="block flex justify-between items-center py-4 px-6 mb-2 bg-white rounded shadow">--}}
{{--              <div>--}}
{{--                <span class="inline-block w-5 text-base text-black font-sans font-bold mr-2">--}}
{{--                  9.--}}
{{--                </span>--}}
{{--                <span class="text-lg text-black font-sans">--}}
{{--                  Menno Tempelaar--}}
{{--                </span>--}}
{{--              </div>--}}
{{--              <div class="bg-primary-normal py-1 px-4 rounded-full shadow-inner">--}}
{{--                <span class="text-base text-white font-sans font-bold">--}}
{{--                  38%--}}
{{--                </span>--}}
{{--              </div>--}}
{{--            </li>--}}
{{--            <li class="block flex justify-between items-center py-4 px-6 mb-2 bg-white rounded shadow">--}}
{{--              <div>--}}
{{--                <span class="inline-block w-5 text-base text-black font-sans font-bold mr-2">--}}
{{--                  10.--}}
{{--                </span>--}}
{{--                <span class="text-lg text-black font-sans">--}}
{{--                  Hans van de Laars--}}
{{--                </span>--}}
{{--              </div>--}}
{{--              <div class="bg-primary-normal py-1 px-4 rounded-full shadow-inner">--}}
{{--                <span class="text-base text-white font-sans font-bold">--}}
{{--                  33%--}}
{{--                </span>--}}
{{--              </div>--}}
{{--            </li>--}}
{{--          </ol>--}}
{{--        </div>--}}

{{--        <div class="w-2/3 pl-8">--}}

{{--          <div class="mb-8">--}}
{{--            <span class="inline-block text-black font-serif text-xl mb-6">--}}
{{--              Uitslagen op {{ ucfirst(\Carbon\Carbon::make('10-03-2020')->translatedFormat--}}
{{--              ('l j F Y')) }}--}}
{{--            </span>--}}
{{--            <div>--}}
{{--              <div class="bg-white flex justify-between items-center px-6 py-4 rounded shadow mb-2">--}}
{{--                <div>--}}
{{--                  <span class="block text-primary-normal text-opacity-75 text-sm font-sans mb-2">--}}
{{--                    Gespeeld op--}}
{{--                    {{ ucfirst(\Carbon\Carbon::make('10-03-2020')->translatedFormat('l j F Y')) }}--}}
{{--                    (wedstrijdnummer)--}}
{{--                  </span>--}}
{{--                  <span class="block text-black text-lg font-sans font-bold">--}}
{{--                    Sorry 1 - MTTV 3--}}
{{--                  </span>--}}
{{--                </div>--}}
{{--                <div class="inline-block bg-primary-normal px-4 py-2 rounded shadow-inner">--}}
{{--                  <span class="text-lg text-white font-sans font-bold">--}}
{{--                    2 - 8--}}
{{--                  </span>--}}
{{--                </div>--}}
{{--              </div>--}}

{{--              <div class="bg-white flex justify-between items-center px-6 py-4 rounded shadow mb-2">--}}
{{--                <div>--}}
{{--                  <span class="block text-primary-normal text-opacity-75 text-sm font-sans mb-2">--}}
{{--                    Gespeeld op--}}
{{--                    {{ ucfirst(\Carbon\Carbon::make('10-03-2020')->translatedFormat('l j F Y')) }}--}}
{{--                    (wedstrijdnummer)--}}
{{--                  </span>--}}
{{--                  <span class="block text-black text-lg font-sans font-bold">--}}
{{--                    HTV 2 - Nileta 1--}}
{{--                  </span>--}}
{{--                </div>--}}
{{--                <div class="inline-block bg-primary-normal px-4 py-2 rounded shadow-inner">--}}
{{--                  <span class="text-lg text-white font-sans font-bold">--}}
{{--                    0 - 5--}}
{{--                  </span>--}}
{{--                </div>--}}
{{--              </div>--}}

{{--              <div class="bg-white flex justify-between items-center pl-4 pr-6 py-4 rounded--}}
{{--              shadow mb-2 border-l-8 border-primary-normal border-solid">--}}
{{--                <div class="">--}}
{{--                  <span class="block text-primary-normal text-opacity-75 text-sm font-sans mb-2">--}}
{{--                    Gespeeld op--}}
{{--                    {{ ucfirst(\Carbon\Carbon::make('10-03-2020')->translatedFormat('l j F Y')) }}--}}
{{--                    (wedstrijdnummer)--}}
{{--                  </span>--}}
{{--                  <span class="block text-black text-lg font-sans font-bold">--}}
{{--                    Merwestad 3 - Trefpunt 5--}}
{{--                  </span>--}}
{{--                </div>--}}
{{--                <div class="inline-block bg-primary-normal px-4 py-2 rounded shadow-inner">--}}
{{--                  <span class="text-lg text-white font-sans font-bold">--}}
{{--                    1 - 4--}}
{{--                  </span>--}}
{{--                </div>--}}
{{--              </div>--}}

{{--              <div class="bg-white flex justify-between items-center px-6 py-4 rounded shadow mb-2">--}}
{{--                <div>--}}
{{--                  <span class="block text-primary-normal text-opacity-75 text-sm font-sans mb-2">--}}
{{--                    Gespeeld op--}}
{{--                    {{ ucfirst(\Carbon\Carbon::make('10-03-2020')->translatedFormat('l j F Y')) }}--}}
{{--                    (wedstrijdnummer)--}}
{{--                  </span>--}}
{{--                  <span class="block text-black text-lg font-sans font-bold">--}}
{{--                    Nileta 2 - Dordrecht 12--}}
{{--                  </span>--}}
{{--                </div>--}}
{{--                <div class="inline-block bg-primary-normal px-4 py-2 rounded shadow-inner">--}}
{{--                  <span class="text-lg text-white font-sans font-bold">--}}
{{--                    4 - 1--}}
{{--                  </span>--}}
{{--                </div>--}}
{{--              </div>--}}

{{--              <div class="bg-white flex justify-between items-center px-6 py-4 rounded shadow mb-2">--}}
{{--                <div>--}}
{{--                  <span class="block text-primary-normal text-opacity-75 text-sm font-sans mb-2">--}}
{{--                    Gespeeld op--}}
{{--                    {{ ucfirst(\Carbon\Carbon::make('10-03-2020')->translatedFormat('l j F Y')) }}--}}
{{--                    (wedstrijdnummer)--}}
{{--                  </span>--}}
{{--                  <span class="block text-black text-lg font-sans font-bold">--}}
{{--                    DFC 2 - Gorkum 5--}}
{{--                  </span>--}}
{{--                </div>--}}
{{--                <div class="inline-block bg-primary-normal px-4 py-2 rounded shadow-inner">--}}
{{--                  <span class="text-lg text-white font-sans font-bold">--}}
{{--                    1 - 4--}}
{{--                  </span>--}}
{{--                </div>--}}
{{--              </div>--}}

{{--              <div class="bg-white flex justify-between items-center px-4 py-4 rounded shadow--}}
{{--                  border-l-8 border-primary-normal border-solid">--}}
{{--                <div>--}}
{{--                  <span class="block text-primary-normal text-opacity-75 text-sm font-sans mb-2">--}}
{{--                    Gespeeld op--}}
{{--                    {{ ucfirst(\Carbon\Carbon::make('10-03-2020')->translatedFormat('l j F Y')) }}--}}
{{--                    (wedstrijdnummer)--}}
{{--                  </span>--}}
{{--                  <span class="block text-black text-lg font-sans font-bold">--}}
{{--                    Lekpongers 1 - Merwestad 2--}}
{{--                  </span>--}}
{{--                </div>--}}
{{--                <div class="inline-block bg-primary-normal px-4 py-2 rounded shadow-inner">--}}
{{--                  <span class="text-lg text-white font-sans font-bold">--}}
{{--                    1 - 4--}}
{{--                  </span>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}

{{--          <div class="mb-8">--}}
{{--            <span class="block text-black font-serif text-xl mb-6">--}}
{{--              {{ ucfirst(\Carbon\Carbon::make('09-03-2020')->translatedFormat--}}
{{--              ('l j F Y')) }}--}}
{{--            </span>--}}
{{--            <div>--}}
{{--              <div class="bg-white flex justify-between items-center px-6 py-4 rounded shadow mb-2">--}}
{{--                <div>--}}
{{--                  <span class="block text-primary-normal text-opacity-75 text-sm font-sans mb-2">--}}
{{--                    Gespeeld op--}}
{{--                    {{ ucfirst(\Carbon\Carbon::make('09-03-2020')->translatedFormat('l j F Y')) }}--}}
{{--                    (wedstrijdnummer)--}}
{{--                  </span>--}}
{{--                  <span class="block text-black text-lg font-sans font-bold">--}}
{{--                    VVV 10 - De Repelaer 5--}}
{{--                  </span>--}}
{{--                </div>--}}
{{--                <div class="inline-block bg-primary-normal px-4 py-2 rounded shadow-inner">--}}
{{--                  <span class="text-lg text-white font-sans font-bold">--}}
{{--                    0 - 5--}}
{{--                  </span>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}

{{--          <div class="mb-8">--}}
{{--            <span class="block text-black font-serif text-xl mb-6">--}}
{{--              {{ ucfirst(\Carbon\Carbon::make('06-03-2020')->translatedFormat--}}
{{--              ('l j F Y')) }}--}}
{{--            </span>--}}
{{--            <div>--}}
{{--              <div class="bg-white flex justify-between items-center px-6 py-4 rounded shadow mb-2">--}}
{{--                <div>--}}
{{--                  <span class="block text-primary-normal text-opacity-75 text-sm font-sans mb-2">--}}
{{--                    Gespeeld op--}}
{{--                    {{ ucfirst(\Carbon\Carbon::make('06-03-2020')->translatedFormat('l j F Y')) }}--}}
{{--                    (wedstrijdnummer)--}}
{{--                  </span>--}}
{{--                  <span class="block text-black text-lg font-sans font-bold">--}}
{{--                    MTTV 3 - Papendrecht 10--}}
{{--                  </span>--}}
{{--                </div>--}}
{{--                <div class="inline-block bg-primary-normal px-4 py-2 rounded shadow-inner">--}}
{{--                  <span class="text-lg text-white font-sans font-bold">--}}
{{--                    8 - 2--}}
{{--                  </span>--}}
{{--                </div>--}}
{{--              </div>--}}

{{--              <div class="bg-white flex justify-between items-center px-6 py-4 rounded shadow mb-2">--}}
{{--                <div>--}}
{{--                  <span class="block text-primary-normal text-opacity-75 text-sm font-sans mb-2">--}}
{{--                    Gespeeld op--}}
{{--                    {{ ucfirst(\Carbon\Carbon::make('06-03-2020')->translatedFormat('l j F Y')) }}--}}
{{--                    (wedstrijdnummer)--}}
{{--                  </span>--}}
{{--                  <span class="block text-black text-lg font-sans font-bold">--}}
{{--                    Gorkum 5 - Dordrecht 12--}}
{{--                  </span>--}}
{{--                </div>--}}
{{--                <div class="inline-block bg-primary-normal px-4 py-2 rounded shadow-inner">--}}
{{--                  <span class="text-lg text-white font-sans font-bold">--}}
{{--                    4 - 1--}}
{{--                  </span>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}

{{--          <div class="mb-8">--}}
{{--            <span class="block text-black font-serif text-xl mb-6">--}}
{{--              {{ ucfirst(\Carbon\Carbon::make('05-03-2020')->translatedFormat--}}
{{--              ('l j F Y')) }}--}}
{{--            </span>--}}
{{--            <div>--}}
{{--              <div class="bg-white flex justify-between items-center px-4 py-4 rounded shadow--}}
{{--                  border-l-8 border-primary-normal border-solid">--}}
{{--                <div>--}}
{{--                  <span class="block text-primary-normal text-opacity-75 text-sm font-sans mb-2">--}}
{{--                    Gespeeld op--}}
{{--                    {{ ucfirst(\Carbon\Carbon::make('10-03-2020')->translatedFormat('l j F Y')) }}--}}
{{--                    (wedstrijdnummer)--}}
{{--                  </span>--}}
{{--                  <span class="block text-black text-lg font-sans font-bold">--}}
{{--                    Merwestad 1 - Tavernie 4--}}
{{--                  </span>--}}
{{--                </div>--}}
{{--                <div class="inline-block bg-primary-normal px-4 py-2 rounded shadow-inner">--}}
{{--                  <span class="text-lg text-white font-sans font-bold">--}}
{{--                    1 - 4--}}
{{--                  </span>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}

{{--          <div class="mb-8">--}}
{{--            <span class="block text-black font-serif text-xl mb-6">--}}
{{--              {{ ucfirst(\Carbon\Carbon::make('04-03-2020')->translatedFormat--}}
{{--              ('l j F Y')) }}--}}
{{--            </span>--}}
{{--            <div>--}}
{{--              <div class="bg-white flex justify-between items-center px-4 py-4 rounded shadow--}}
{{--                  border-l-8 border-primary-normal border-solid mb-2">--}}
{{--                <div>--}}
{{--                  <span class="block text-primary-normal text-opacity-75 text-sm font-sans mb-2">--}}
{{--                    Gespeeld op--}}
{{--                    {{ ucfirst(\Carbon\Carbon::make('10-03-2020')->translatedFormat('l j F Y')) }}--}}
{{--                    (wedstrijdnummer)--}}
{{--                  </span>--}}
{{--                  <span class="block text-black text-lg font-sans font-bold">--}}
{{--                    VCS 3 - Merwestad 4--}}
{{--                  </span>--}}
{{--                </div>--}}
{{--                <div class="inline-block bg-primary-normal px-4 py-2 rounded shadow-inner">--}}
{{--                  <span class="text-lg text-white font-sans font-bold">--}}
{{--                    4 - 6--}}
{{--                  </span>--}}
{{--                </div>--}}
{{--              </div>--}}

{{--              <div class="bg-white flex justify-between items-center px-6 py-4 rounded shadow mb-2">--}}
{{--                <div>--}}
{{--                  <span class="block text-primary-normal text-opacity-75 text-sm font-sans mb-2">--}}
{{--                    Gespeeld op--}}
{{--                    {{ ucfirst(\Carbon\Carbon::make('06-03-2020')->translatedFormat('l j F Y')) }}--}}
{{--                    (wedstrijdnummer)--}}
{{--                  </span>--}}
{{--                  <span class="block text-black text-lg font-sans font-bold">--}}
{{--                    Serve 71 4 - VVV 10--}}
{{--                  </span>--}}
{{--                </div>--}}
{{--                <div class="inline-block bg-primary-normal px-4 py-2 rounded shadow-inner">--}}
{{--                  <span class="text-lg text-white font-sans font-bold">--}}
{{--                    1 - 4--}}
{{--                  </span>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}

{{--        </div>--}}
{{--      </div>--}}
{{--    </div>--}}
{{--  </div>--}}
@endsection
