@extends('layout.master')

@section('seo')
  <title>Website van t.t.v. Merwestad.</title>
  <meta name="description" content="t.t.v. Merwestad is een tafeltennisvereniging in Dordrecht.">
@endsection

@section('content')
  <div class="bg-white w-full py-16">
    <div class="container mx-auto flex items-stretch">
      <div class="w-2/6 px-5">
        <h1 class="font-serif text-black leading-none mb-6">
          <span class="text-2xl">Tafeltennisvereniging</span>
          <span class="text-5xl text-primary-normal">Merwestad</span>
        </h1>
        <p class="text-sans text-base text-black mb-4">
          Welkom op de website van tafeltennisvereniging Merwestad. Als vereniging staan wij voor
          gezelligheid. Onze gymzaal ligt aan de Admiraalsplein te Dordrecht genaamd
          <a href="https://www.dordtsport.nl/sportlocaties/sport-plus/" target="_blank">Sport+</a>.
        </p>
        <p class="text-sans text-base text-black mb-4">
          Deze website zal informatie verschaffen over <a href="{{ route('news') }}">nieuws</a>,
          evenementen, competitie wedstrijden & teams, contactgegevens en nog veel meer.
        </p>
      </div>
      <div class="w-4/6 px-5">
        <div class="w-full h-full overflow-hidden rounded-lg">
          <img class="w-full h-full object-cover" src="/images/groeps-foto.jpg" alt="t.t.v. Merwestad" />
        </div>
      </div>
    </div>
  </div>
@endsection
