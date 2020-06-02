@extends('layout.master')

@section('seo')
  <title>Website van t.t.v. Merwestad.</title>
  <meta name="description" content="t.t.v. Merwestad is een tafeltennisvereniging in Dordrecht.">
@endsection

@section('content')
  <div class="bg-white w-full py-12 md:py-20 xl:py-24">
    <div class="container mx-auto px-4 xl:px-8 flex flex-col lg:flex-row lg:items-stretch">
      <div class="w-full lg:w-2/4 py-6">
        <h1 class="block font-serif text-3xl text-black mb-10">Contactgegevens</h1>
        <div class="flex">
          <span class="inline-block font-serif text-primary-normal w-1/3 text-base xl:text-lg font-bold">
            Adres
          </span>
          <span class="inline-block font-sans text-black w-2/3 text-base xl:text-lg">
            Maria Montessorilaan 3
          </span>
        </div>
        <div class="flex">
          <span class="inline-block font-serif text-primary-normal  w-1/3 text-base xl:text-lg font-bold">
            Postcode
          </span>
          <span class="inline-block font-sans text-black w-2/3 text-base xl:text-lg">
            3312 KJ
          </span>
        </div>
        <div class="flex mb-10">
          <span class="inline-block font-serif text-primary-normal w-1/3 text-base xl:text-lg font-bold">
            Woonplaats
          </span>
          <span class="inline-block font-sans text-black w-2/3 text-base xl:text-lg">
            Dordrecht
          </span>
        </div>

        <div class="flex">
          <span class="inline-block font-serif text-primary-normal  w-1/3 text-base xl:text-lg font-bold">
            Algemeen
          </span>
          <span class="inline-block font-sans text-black w-2/3 text-base xl:text-lg">
            <a href="mailto:voorzitter@ttvmerwestad.nl">
              info@ttvmerwestad.nl
            </a>
          </span>
        </div>
        <div class="flex">
          <span class="inline-block font-serif text-primary-normal  w-1/3 text-base xl:text-lg font-bold">
            Voorzitter
          </span>
          <span class="inline-block font-sans text-black w-2/3 text-base xl:text-lg">
            <a href="mailto:voorzitter@ttvmerwestad.nl">
              voorzitter@ttvmerwestad.nl
            </a>
          </span>
        </div>
        <div class="flex">
          <span class="inline-block font-serif text-primary-normal  w-1/3 text-base xl:text-lg font-bold">
            Webmaster
          </span>
          <span class="inline-block font-sans text-black w-2/3 text-base xl:text-lg">
            <a href="mailto:webmaster@ttvmerwestad.nl">
              webmaster@ttvmerwestad.nl
            </a>
          </span>
        </div>

        <div class="flex">
          <span class="inline-block font-serif text-primary-normal  w-1/3 text-base xl:text-lg font-bold">
            Wedstrijd secretaris
          </span>
          <span class="inline-block font-sans text-black w-2/3 text-base xl:text-lg">
            <a href="mailto:wedstrijdsecretaris@ttvmerwestad.nl">
              wedstrijdsecretaris@ttvmerwestad.nl
            </a>
          </span>
        </div>

        <div class="flex mb-10">
          <span class="inline-block font-serif text-primary-normal  w-1/3 text-base xl:text-lg font-bold">
            Penningmeester
          </span>
          <span class="inline-block font-sans text-black w-2/3 text-base xl:text-lg">
            <a href="mailto:wedstrijdsecretaris@ttvmerwestad.nl">
              penningmeester@ttvmerwestad.nl
            </a>
          </span>
        </div>

        <span class="text-xl text-black font-serif">
          Openingstijden
        </span>

        <div class="flex">
          <span class="inline-block font-serif text-primary-normal  w-1/3 text-base xl:text-lg font-bold">
            Maandag
          </span>
          <span class="inline-block font-sans text-black w-2/3 text-base xl:text-lg">
            gesloten
          </span>
        </div>

        <div class="flex">
          <span class="inline-block font-serif text-primary-normal  w-1/3 text-base xl:text-lg font-bold">
            Dinsdag
          </span>
          <span class="inline-block font-sans text-black w-2/3 text-base xl:text-lg">
            19:30 - 23:00
          </span>
        </div>

        <div class="flex">
          <span class="inline-block font-serif text-primary-normal  w-1/3 text-base xl:text-lg font-bold">
            Woensdag
          </span>
          <span class="inline-block font-sans text-black w-2/3 text-base xl:text-lg">
            gesloten
          </span>
        </div>

        <div class="flex">
          <span class="inline-block font-serif text-primary-normal  w-1/3 text-base xl:text-lg font-bold">
            Donderdag
          </span>
          <span class="inline-block font-sans text-black w-2/3 text-base xl:text-lg">
            19:30 - 22:00
          </span>
        </div>

        <div class="flex">
          <span class="inline-block font-serif text-primary-normal  w-1/3 text-base xl:text-lg font-bold">
            Vrijdag
          </span>
          <span class="inline-block font-sans text-black w-2/3 text-base xl:text-lg">
            gesloten
          </span>
        </div>

        <div class="flex">
          <span class="inline-block font-serif text-primary-normal  w-1/3 text-base xl:text-lg font-bold">
            Zaterdag
          </span>
          <span class="inline-block font-sans text-black w-2/3 text-base xl:text-lg">
            gesloten
          </span>
        </div>

        <div class="flex">
          <span class="inline-block font-serif text-primary-normal  w-1/3 text-base xl:text-lg font-bold">
            Zondag
          </span>
          <span class="inline-block font-sans text-black w-2/3 text-base xl:text-lg">
            gesloten
          </span>
        </div>

      </div>
      <div class="w-full lg:w-2/4">
        <iframe class="rounded" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6213.300773025878!2d4.6732001639091205!3d51.79862619207977!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe0e8a600a169f714!2sTafeltennisvereniging%20Merwestad!5e0!3m2!1snl!2snl!4v1591128891319!5m2!1snl!2snl" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
    </div>
  </div>
@endsection
