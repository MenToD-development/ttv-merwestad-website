@extends('layout.master')

@section('seo')
  <title>Website van t.t.v. Merwestad.</title>
  <meta name="description" content="t.t.v. Merwestad is een tafeltennisvereniging in Dordrecht.">
@endsection

@section('content')
  <div class="bg-white w-full py-16">
    <div class="container mx-auto flex items-stretch">
      <div class="w-2/6 px-5">
        <h1 class="font-serif text-black font-bold">
          <span class="text-2xl">Tafeltennisvereniging</span>
          <span class="text-5xl text-primary-normal">Merwestad</span>
        </h1>
        <p class="text-sans text-base text-black">
          Welkom bij de vereniging
        </p>
      </div>
      <div class="w-4/6 h-64 px-5">
        <div class="w-full h-full overflow-hidden rounded-lg">
          <img class="w-full h-full object-cover" src="/images/groeps-foto.jpg" alt="t.t.v. Merwestad" />
        </div>
      </div>
    </div>
  </div>
@endsection
