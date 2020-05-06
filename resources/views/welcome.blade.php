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
      </div>
      <div class="w-4/6 pl-5">
        <div class="w-full h-full overflow-hidden rounded-lg">
          <img class="w-full h-full object-cover" src="/images/groeps-foto.jpg" alt="t.t.v. Merwestad" />
        </div>
      </div>
    </div>
  </div>

  <div class="bg-secondary-normal w-full py-20">
    <div class="container mx-auto flex items-stretch">
      <div class="w-full">
        <div class="text-center">
          <span class="bg-secondary-normal p-2">
            <span class="text-sm text-primary-normal font-bold font-sans">Wat gebeurt er bij t.t.v. <Merwestad></Merwestad></span>
          </span>
        </div>
        <span class="block text-center font-serif text-5xl text-black mb-6">Laatste nieuws</span>

        <div class="bg-white w-full rounded-lg transition-all ease-in-out duration-100 hover:shadow-md hover:bg-secondary-normal cursor-pointer">
          <div class="px-2 py-4">
            <a class="block p-4 ">
              <span class="inline-block font-sans font-semibold text-lg text-black mb-3">Wij zijn gesloten t/m 1 Sept.</span>
              <span class="inline-block font-sans text-base text-black mb-2">
                Naar aanleiding van de laatste ontwikkelingen en de aanwijzingen vanuit de RIVM en
                de overheid dienen de gemeentelijke binnensportaccommodaties gesloten te blijven
                tot en met [...]
              </span>
              <span class="inline-block text-primary-normal font-sans text-base font-semibold">
                Lees verder >
              </span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
