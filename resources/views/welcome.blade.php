@extends('layout.master')

@section('seo')
  <title>Website van t.t.v. Merwestad.</title>
  <meta name="description" content="t.t.v. Merwestad is een tafeltennisvereniging in Dordrecht.">
@endsection

@section('content')
  <div class="bg-white w-full py-20">
    <div class="container mx-auto flex items-stretch">
      <div class="w-2/6 pr-5">
        <h1 class="font-serif text-black leading-none mb-6">
          <span class="text-2xl">Tafeltennisvereniging</span>
          <span class="text-5xl text-primary-normal">Merwestad</span>
        </h1>
        <p class="text-sans text-base text-black mb-4">
          Welkom op de website van tafeltennisvereniging Merwestad. Als vereniging staan wij voor
          gezelligheid. Onze gymzaal ligt aan de Admiraalsplein te Dordrecht genaamd
          <x-link href="https://www.dordtsport.nl/sportlocaties/sport-plus/" target="_blank">
            Sport+
          </x-link>.
        </p>
        <p class="text-sans text-base text-black mb-4">
          Deze website zal informatie verschaffen over
          <x-link href="{{ route('about') }}">onze vereniging</x-link>,
          <x-link href="{{ route('news') }}">nieuws</x-link>,
          evenementen, competitie wedstrijden & teams, contactgegevens en nog veel meer.
        </p>
        <a class="bg-primary-normal hover:bg-primary-hover h-12 inline-flex items-center justify-center px-4 rounded"
           id="route" href="#">
          <i class="fas fa-route text-white text-2xl mr-3"></i>
          <span class="inline-block font-sans font-bold text-lg text-white">Rij naar t.t.v. Merwestad</span>
        </a>
      </div>
      <div class="w-4/6 pl-5">
        <div class="w-full h-full overflow-hidden rounded-lg">
          <img class="w-full h-full object-cover" src="/images/groeps-foto.jpg" alt="t.t.v. Merwestad" />
        </div>
      </div>
    </div>
  </div>

  <div class="bg-white w-full py-20">
    <div class="container mx-auto">
      <div class="w-full">
        <div class="text-center mb-2">
          <span class="bg-secondary-normal rounded py-2 px-4">
            <span class="text-sm text-primary-normal font-bold font-sans">
              Gezelligheid staat bovenaan
            </span>
          </span>
        </div>
        <span class="block text-center font-serif text-5xl text-black mb-6">
          Wat zijn de mogelijkheden?
        </span>
      </div>
    </div>
  </div>

  <div class="bg-secondary-normal w-full py-32">
    <div class="container mx-auto flex items-stretch">
      <div class="w-full">
        <div class="text-center mb-2">
          <span class="bg-secondary-normal rounded py-2 px-4">
            <span class="text-sm text-primary-normal font-bold font-sans">Wat gebeurt er bij Merwestad</span>
          </span>
        </div>
        <span class="block text-center font-serif text-5xl text-black mb-6">Laatste nieuws</span>

        <div class="flex justify-start">
          <div class="w-2/5 p-3">
            <div class="bg-white w-full h-auto overflow-y-hidden p-6">
              <span class="inline-block bg-secondary-normal py-2 px-4 mb-2 rounded">
                <span class="text-sm text-primary-normal font-bold font-sans">Uitgelicht nieuwsbericht</span>
              </span>
              <span class="text-black text-xl font-serif block">
                Competitie najaar 2020
              </span>
              <span class="block text-primary-normal text-opacity-75 text-sm font-sans mb-6">
                Stefan de Jong - {{ \Illuminate\Support\Carbon::make('12-05-2020 21:15:06')->diffForHumans() }}
              </span>
              <div class="h-64 overflow-y-hidden mb-6">
                <p class="inline-block font-sans text-base text-black mb-4">
                  Ondanks dat het er voorlopig naar uit ziet dat we pas op 1 september
                  weer mogen beginnen, heb ik toch het verzoek gehad van de bond om de
                  teams door te geven voor de najaarscompetitie. Het inschrijven kan tot
                  15 juni 2020.
                </p>
                <p class="inline-block font-sans text-base text-black mb-4">
                  Waarschijnlijk zal zoals het er nu naar uitziet, zullen er geen dubbels
                  worden gespeeld. Voor reguliere competitie betekent het dat er dan 9
                  wedstrijden gespeeld worden. Bij de Duo is momenteel de intentie om een
                  extra enkel te spelen.
                </p>
                <p class="inline-block font-sans text-base text-black mb-4">
                  <strong>Graag hoor ik wie of welke teams competitie willen spelen.</strong>
                </p>
                <p class="inline-block font-sans text-base text-black mb-4">
                  De competitie kan regulier zijn, dit betekent een team van 3 spelers die
                  elk 3 wedstrijden spelen en (een dubbel) , dit zijn 10 wedstrijden per
                  avond. (nu waarschijnlijk 9 stuks)
                </p>
                <p class="inline-block font-sans text-base text-black mb-4">
                  Ook kan dit duo zijn, dit is een team van 2 spelers, die elk 2
                  wedstrijden spelen en (een dubbel), dit zijn 5 wedstrijden, voordeel is
                  dat het niet zo laat wordt.
                </p>
                <p class="inline-block font-sans text-base text-black mb-4">
                  Mocht de 1,5 meter nog steeds van toepassing zijn, dan dien je er ook
                  rekening mee te houden dat vervoer van een team in één auto vermoedelijk
                  moeilijk of niet mogelijk is.
                </p>
              </div>
              <a class="bg-primary-normal hover:bg-primary-hover h-10 inline-flex items-center justify-center px-4 rounded"
                 href="#"
                 title="Nieuwsbericht: Gemeentelijke binnensportaccomodaties gesloten t/m 31-08-2020">
                <i class="fas fa-arrow-alt-circle-right text-white text-lg mr-3"></i>
                <span class="inline-block font-sans font-bold text-base text-white">Lees verder</span>
              </a>
            </div>
          </div>
          <div class="w-3/5 p-3">
            <div class="bg-white p-6 w-full mb-6">
              <span class="text-black text-xl font-serif block">
                Gemeentelijke binnensportaccomodaties gesloten t/m 31-08-2020
              </span>
              <span class="block text-primary-normal text-opacity-75 text-sm font-sans mb-6">
                Kirsten Bubbert - {{ \Illuminate\Support\Carbon::make('13-05-2020 10:08:51')->diffForHumans() }}
              </span>
              <p class="inline-block font-sans text-base text-black mb-4">
                Naar aanleiding van de laatste ontwikkelingen en de aanwijzingen vanuit de RIVM en
                de overheid dienen de gemeentelijke sportaccommodaties gesloten te blijven tot en
                met maandag 31 augustus 2020.
              </p>
              <a class="bg-primary-normal hover:bg-primary-hover h-10 inline-flex items-center justify-center px-4 rounded"
                 href="#"
                 title="Nieuwsbericht: Gemeentelijke binnensportaccomodaties gesloten t/m 31-08-2020">
                <i class="fas fa-arrow-alt-circle-right text-white text-lg mr-3"></i>
                <span class="inline-block font-sans font-bold text-base text-white">Lees verder</span>
              </a>
            </div>
            <div class="bg-white p-6 w-full">
              <span class="text-black text-xl font-serif block">
                Gemeentelijke binnensportaccomodaties gesloten t/m 31-08-2020
              </span>
              <span class="block text-primary-normal text-opacity-75 text-sm font-sans mb-6">
                Kirsten Bubbert - {{ \Illuminate\Support\Carbon::make('13-05-2020 10:08:51')->diffForHumans() }}
              </span>
              <p class="inline-block font-sans text-base text-black mb-4">
                Naar aanleiding van de laatste ontwikkelingen en de aanwijzingen vanuit de RIVM en
                de overheid dienen de gemeentelijke sportaccommodaties gesloten te blijven tot en
                met maandag 31 augustus 2020.
              </p>
              <a class="bg-primary-normal hover:bg-primary-hover h-10 inline-flex items-center justify-center px-4 rounded"
                 href="#"
                 title="Nieuwsbericht: Gemeentelijke binnensportaccomodaties gesloten t/m 31-08-2020">
                <i class="fas fa-arrow-alt-circle-right text-white text-lg mr-3"></i>
                <span class="inline-block font-sans font-bold text-base text-white">Lees verder</span>
              </a>
            </div>
          </div>
        </div>
        <div class="flex justify-center mt-10">
          <a class="bg-primary-normal hover:bg-primary-hover h-12 inline-flex items-center justify-center px-4 rounded"
             href="#"
             title="Nieuwsbericht: Gemeentelijke binnensportaccomodaties gesloten t/m 31-08-2020">
            <i class="fas fa-newspaper text-white mr-3"></i>
            <span class="inline-block font-sans font-bold text-lg text-white">Bekijk meer nieuws</span>
          </a>
        </div>
      </div>
    </div>
  </div>
@endsection
