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
        <div class="flex items-center">
          <a class="bg-primary-normal hover:bg-primary-hover h-12 inline-flex items-center justify-center px-4 rounded mr-2"
             id="route" href="#">
            <i class="fas fa-route text-white text-2xl mr-3"></i>
            <span class="hidden md:inline-block lg:hidden font-sans font-bold text-lg text-white">
              Rij naar t.t.v. Merwestad
            </span>
            <span class="inline-block md:hidden lg:inline-block font-sans font-bold text-lg text-white">Route</span>
          </a>
          <a class="bg-primary-normal hover:bg-primary-hover h-12 inline-flex items-center justify-center px-4 rounded" href="mailto:info@ttvmerwestad.nl">
            <i class="fas fa-paper-plane text-white text-2xl mr-3"></i>
            <span class="hidden md:inline-block lg:hidden font-sans font-bold text-lg text-white">
              Stuur ons een e-mail
            </span>
            <span class="inline-block md:hidden lg:inline-block font-sans font-bold text-lg text-white">E-mail</span>
          </a>
        </div>
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
          <x-intro-label>Gezelligheid staat bovenaan</x-intro-label>
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
  @include('partials.news-preview')

  <!-- sponsoren -->
  <div class="bg-white w-full py-16 md:py-24 xl:py-32">
    <div class="container mx-auto px-4 xl:px-8">
      <div class="w-full mb-10 xl:mb-16">
        <div class="text-center mb-2">
          <x-intro-label>
            Wij kunnen niet zonder jullie
          </x-intro-label>
        </div>
        <span class="block text-center font-serif text-3xl md:text-4xl text-black">
          Onze sponsor
        </span>
      </div>
      <div class="flex flex-col lg:flex-row lg:justify-start lg:items-stretch w-full mb-16">
        <div class="w-full lg:w-2/3 py-4 px-3 lg:px-6">
          <div class="flex items-center mb-8">
            <span class="inline-block text-5xl md:text-6xl fa fa-medal mr-6"></span>
            <div class="inline-block">
              <span class="block text-lg md:text-xl font-serif">
                Onze hoofdsponsor
              </span>
              <span class="text-2xl md:text-3xl text-primary-normal text-black font-serif">
                R.V. Bouw- en Timmerbedrijf
              </span>
            </div>
          </div>
          <div class="flex justify-start mb-4">
            <img src="/images/rv-bouw-en-timmerbedrijf-logo.png" alt="RV Bouw- en timmerbedrijf" />
          </div>
          <p class="text-base font-sans mb-6">
            Wanneer u op zoek bent naar een aannemersbedrijf in de regio Dordrecht dan bent u bij
            R.V. Bouw- en Timmerbedrijf aan het juiste adres. Wij verzorgen met veel plezier een
            breed scala aan timmer- en bouwwerkzaamheden voor zowel particulieren als bedrijven.
            Dit doen wij het meest in de Drechtsteden. Zo hebben we in al die jaren al veel
            tevreden klanten geholpen in o.a. Dordrecht, Zwijndrecht, Papendrecht, Sliedrecht en
            omstreken.
          </p>
          <a class="bg-primary-normal hover:bg-primary-hover h-10 xl:h-12 inline-flex items-center
              justify-center px-4 rounded"
             href="http://www.rvbouwbedrijf.nl" target="_blank"
             title="Aannemer Dordrecht - Aannemersbedrijf, Bouwbedrijf & Timmerbedrijf">
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
              <a class="bg-white h-12 inline-flex items-center justify-center px-4 rounded
                  hover:bg-secondary-normal hover:shadow active:shadow-inner"
                 href="#"
                 title="Sponsor worden?">
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
  </div>

  <!-- Competitie overzicht -->
  <div class="bg-secondary-normal w-full py-16 md:py-24 xl:py-32">
    <div class="container mx-auto px-4 xl:px-8">
      <div class="w-full text-center mb-10 xl:mb-16">
        <div class="mb-2">
          <x-intro-label bg="secondary">
            Wie staat er deze keer bovenaan?
          </x-intro-label>
        </div>
        <h2 class="block font-serif text-3xl md:text-4xl text-black">
          Competitie overzicht
        </h2>
      </div>
      <div class="flex flex-col lg:flex-row items-stretch justify-start">
        <div class="w-full lg:w-1/3 mb-10 lg:mb-0 px-3 lg:pl-0 lg:pr-8">
          <h3 class="text-black text-lg lg:text-xl xxl:text-2xl font-serif block mb-6">
            Top 10 [Competitie naam]
          </h3>
          <p class="block text-black text-base font-sans mb-6">
            Een top 10 van onze leden aan de hand van hun gewonnen wedstrijden.
          <p>
          <div>
            <x-top-10-item :number="1" :percentage="88">
              Gert-Jan Vervoorn
            </x-top-10-item>
            <x-top-10-item :number="2" :percentage="83">
              Lenny Klarenaar
            </x-top-10-item>
            <x-top-10-item :number="3" :percentage="70">
              Stefan de Jong
            </x-top-10-item>
            <x-top-10-item :number="4" :percentage="63">
              Maurice de Jager
            </x-top-10-item>
            <x-top-10-item :number="5" :percentage="60">
              Theun Evers
            </x-top-10-item>
            <x-top-10-item :number="6" :percentage="50">
              Sandor Lelkes
            </x-top-10-item>
            <x-top-10-item :number="7" :percentage="42">
              Rob Tempelaar
            </x-top-10-item>
            <x-top-10-item :number="8" :percentage="42">
              Ruud Bakker
            </x-top-10-item>
            <x-top-10-item :number="9" :percentage="38">
              Menno Tempelaar
            </x-top-10-item>
            <x-top-10-item :number="10" :percentage="33">
              Hans van de Laars
            </x-top-10-item>
          </div>
        </div>

        <div class="w-full lg:w-2/3 px-3 lg:pr-0 lg:pl-8">

          <div class="mb-8">
            <span class="inline-block text-black font-serif text-xl xxl:text-2xl mb-6">
              Uitslagen op {{ ucfirst(\Carbon\Carbon::make('10-03-2020')->translatedFormat
              ('l j F Y')) }}
            </span>
            <div>
              <x-match-result class="mb-2">
                <x-slot name="date">
                  {{ ucfirst(\Carbon\Carbon::make('10-03-2020')->translatedFormat('l j F Y')) }}
                </x-slot>
                <x-slot name="teams">
                  Sorry 1 - MTTV 3
                </x-slot>
                <x-slot name="result">
                  2 - 8
                </x-slot>
              </x-match-result>

              <x-match-result class="mb-2">
                <x-slot name="date">
                  {{ ucfirst(\Carbon\Carbon::make('10-03-2020')->translatedFormat('l j F Y')) }}
                </x-slot>
                <x-slot name="teams">
                  HTV 2 - Nileta 1
                </x-slot>
                <x-slot name="result">
                  0 - 5
                </x-slot>
              </x-match-result>

              <x-match-result class="mb-2" :merwestad="true">
                <x-slot name="date">
                  {{ ucfirst(\Carbon\Carbon::make('10-03-2020')->translatedFormat('l j F Y')) }}
                </x-slot>
                <x-slot name="teams">
                  Merwestad 3 - Trefpunt 5
                </x-slot>
                <x-slot name="result">
                  1 - 4
                </x-slot>
              </x-match-result>

              <x-match-result class="mb-2">
                <x-slot name="date">
                  {{ ucfirst(\Carbon\Carbon::make('10-03-2020')->translatedFormat('l j F Y')) }}
                </x-slot>
                <x-slot name="teams">
                  Nileta 2 - Dordrecht 12
                </x-slot>
                <x-slot name="result">
                  4 - 1
                </x-slot>
              </x-match-result>

              <x-match-result class="mb-2">
                <x-slot name="date">
                  {{ ucfirst(\Carbon\Carbon::make('10-03-2020')->translatedFormat('l j F Y')) }}
                </x-slot>
                <x-slot name="teams">
                  DFC 2 - Gorkum 5
                </x-slot>
                <x-slot name="result">
                  1 - 4
                </x-slot>
              </x-match-result>

              <x-match-result :merwestad="true">
                <x-slot name="date">
                  {{ ucfirst(\Carbon\Carbon::make('10-03-2020')->translatedFormat('l j F Y')) }}
                </x-slot>
                <x-slot name="teams">
                  Lekpongers 1 - Merwestad 2
                </x-slot>
                <x-slot name="result">
                  1 - 4
                </x-slot>
              </x-match-result>
            </div>
          </div>

          <div class="mb-8">
            <span class="block text-black font-serif text-xl mb-6">
              {{ ucfirst(\Carbon\Carbon::make('09-03-2020')->translatedFormat
              ('l j F Y')) }}
            </span>
            <div>
              <x-match-result>
                <x-slot name="date">
                  {{ ucfirst(\Carbon\Carbon::make('09-03-2020')->translatedFormat('l j F Y')) }}
                </x-slot>
                <x-slot name="teams">
                  VVV 10 - De Repelaer 5
                </x-slot>
                <x-slot name="result">
                  0 - 5
                </x-slot>
              </x-match-result>
            </div>
          </div>

          <div class="mb-8">
            <span class="block text-black font-serif text-xl mb-6">
              {{ ucfirst(\Carbon\Carbon::make('06-03-2020')->translatedFormat
              ('l j F Y')) }}
            </span>
            <div>
              <x-match-result class="mb-2">
                <x-slot name="date">
                  {{ ucfirst(\Carbon\Carbon::make('06-03-2020')->translatedFormat('l j F Y')) }}
                </x-slot>
                <x-slot name="teams">
                  MTTV 3 - Papendrecht 10
                </x-slot>
                <x-slot name="result">
                  8 - 2
                </x-slot>
              </x-match-result>

              <x-match-result>
                <x-slot name="date">
                  {{ ucfirst(\Carbon\Carbon::make('06-03-2020')->translatedFormat('l j F Y')) }}
                </x-slot>
                <x-slot name="teams">
                  Gorkum 5 - Dordrecht 12
                </x-slot>
                <x-slot name="result">
                  4 - 1
                </x-slot>
              </x-match-result>
            </div>
          </div>

          <div class="mb-8">
            <span class="block text-black font-serif text-xl mb-6">
              {{ ucfirst(\Carbon\Carbon::make('05-03-2020')->translatedFormat
              ('l j F Y')) }}
            </span>
            <div>
              <x-match-result :merwestad="true">
                <x-slot name="date">
                  {{ ucfirst(\Carbon\Carbon::make('05-03-2020')->translatedFormat('l j F Y')) }}
                </x-slot>
                <x-slot name="teams">
                  Merwestad 1 - Tavernie 4
                </x-slot>
                <x-slot name="result">
                  1 - 4
                </x-slot>
              </x-match-result>
            </div>
          </div>

          <div class="mb-8">
            <span class="block text-black font-serif text-xl mb-6">
              {{ ucfirst(\Carbon\Carbon::make('04-03-2020')->translatedFormat
              ('l j F Y')) }}
            </span>
            <div>
              <x-match-result class="mb-2" :merwestad="true">
                <x-slot name="date">
                  {{ ucfirst(\Carbon\Carbon::make('04-03-2020')->translatedFormat('l j F Y')) }}
                </x-slot>
                <x-slot name="teams">
                  VCS 3 - Merwestad 4
                </x-slot>
                <x-slot name="result">
                  4 - 6
                </x-slot>
              </x-match-result>

              <x-match-result>
                <x-slot name="date">
                  {{ ucfirst(\Carbon\Carbon::make('04-03-2020')->translatedFormat('l j F Y')) }}
                </x-slot>
                <x-slot name="teams">
                  Serve 71 4 - VVV 10
                </x-slot>
                <x-slot name="result">
                  1 - 4
                </x-slot>
              </x-match-result>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
@endsection
