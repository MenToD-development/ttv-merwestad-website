@extends($model->path, ['title' => $model->pageTitle])

@section('content')
    <div class="relative py-16 bg-white overflow-hidden">
        <div class="hidden lg:block lg:absolute lg:inset-y-0 lg:h-full lg:w-full">
            <div class="relative h-full text-lg max-w-prose mx-auto" aria-hidden="true">
                <svg class="absolute top-12 left-full transform translate-x-32" width="404" height="384" fill="none" viewBox="0 0 404 384">
                    <defs>
                        <pattern id="74b3fd99-0a6f-4271-bef2-e80eeafdf357" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                            <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                        </pattern>
                    </defs>
                    <rect width="404" height="384" fill="url(#74b3fd99-0a6f-4271-bef2-e80eeafdf357)" />
                </svg>
                <svg class="absolute top-1/2 right-full transform -translate-y-1/2 -translate-x-32" width="404" height="384" fill="none" viewBox="0 0 404 384">
                    <defs>
                        <pattern id="f210dbf6-a58d-4871-961e-36d5016a0f49" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                            <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                        </pattern>
                    </defs>
                    <rect width="404" height="384" fill="url(#f210dbf6-a58d-4871-961e-36d5016a0f49)" />
                </svg>
                <svg class="absolute bottom-12 left-full transform translate-x-32" width="404" height="384" fill="none" viewBox="0 0 404 384">
                    <defs>
                        <pattern id="d3eb07ae-5182-43e6-857d-35c643af9034" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                            <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                        </pattern>
                    </defs>
                    <rect width="404" height="384" fill="url(#d3eb07ae-5182-43e6-857d-35c643af9034)" />
                </svg>
            </div>
        </div>
        <div class="relative px-4 sm:px-6 lg:px-8">
            <div class="text-lg max-w-prose mx-auto">
                <h1>
                    <span class="block text-lg text-center text-blue-500 font-semibold">
                        Vereniging & NTTB
                    </span>
                    <span class="mt-2 block text-3xl text-center leading-8 font-bold tracking-tight text-slate-900 sm:text-4xl sm:tracking-tight">
                        Competitie spelen
                    </span>
                </h1>
                <p class="mt-8 text-xl text-slate-500 leading-8">
                    Wil je progressie zijn in je tafeltennis? Wil je jezelf meten met andere spelers van andere
                    verenigingen? Of wil je het competitieve onderdeel van de sport leren kennen? Alles is mogelijk bij
                    T.T.V. Merwestad.
                </p>
            </div>
            <div class="mt-6 prose prose-blue prose-lg text-slate-500 mx-auto">
                <p>
                    Zodra je lid bent van de vereniging heb je de mogelijkheid om mee te spelen in de
                    <a target="_blank" href="https://west.nttb.nl/">NTTB-competitie regio West</a>. Hiervoor kun je je
                    per competitie aanmelden en inschrijven bij T.T.V. Merwestad. Hiervoor betaal je per competitie die
                    je meespeelt één bedrag vooraf dat de competitie begint. De vereniging zal jou vervolgens indelen
                    in een team (maar niet als je dit zelf al hebt geregeld) en vervolgens inschrijven bij de NTTB.
                </p>
                <figure>
                    <img class="w-full rounded-lg" src="{{ url('assets/tafeltenniszaal-overzicht.jpg') }}" alt="" width="1310" height="873">
                    <figcaption>Een blik in onze zaal tijdens een onderlinge competitieavond.</figcaption>
                </figure>
                <h2>Competitie stijlen</h2>
                <p>
                    Bij de NTTB heb je twee verschillende competitie stijlen (Regulier & DUO). Hieronder een korte
                    omschrijving van de competitie stijlen:
                </p>
                <h3>Regulier</h3>
                <p>
                    De reguliere competitie bestaat al vanaf het begin. Hierbij speel je in teams van 3 personen.
                    Waardoor je uiteindelijk per wedstrijd 10 matches krijgt. In totaal ben je per wedstrijd met 6
                    personen en speel je tegen iedereen één enkel en een dubbel. Dit houdt in dat je per persoon
                    dus 3 of 4 matches speelt per wedstrijd.
                </p>
                <blockquote>
                    <p>
                        Doordat veel competitie spelende leden hebben geklaagd over de lengte van een wedstrijdavond
                        zijn ze met de DUO competitie begonnen.
                    </p>
                </blockquote>
                <h3>DUO</h3>
                <p>
                    De DUO competitie daarentegen bestaat nog niet zo lang, maar is wel erg in trek. Deze competitie
                    speel je met twee personen per wedstrijd. Dit houdt in dat de wedstrijden gehalveerd zijn en dus op
                    5 matches per wedstrijd vallen. Je speelt dus allebei 2 enkels en één dubbel. In totaal speel je dus
                    3 matches op een wedstrijd avond.
                </p>
                <h2>Wedstrijden</h2>
                <p>
                    In de competitie hebben we twee seizoenen. Het voorjaar seizoen en het najaar seizoen. Deze
                    seizoenen lopen ongeveer van januari tot en met april en september tot en met november. Één seizoen
                    is bij onze vereniging één competitie. De wedstrijden worden doordeweeks 's avonds gespeeld. Elke
                    vereniging heeft een eigen speeldag. Bij ons zijn de dinsdag avonden voor de reguliere competitie
                    en de donderdag avonden voor de DUO competitie.
                </p>
            </div>
        </div>
    </div>


    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="bg-gray-100">
        <div class="pt-12 sm:pt-16 lg:pt-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8"></div>
        </div>
        <div class="mt-8 bg-white pb-16 sm:mt-12 sm:pb-20 lg:pb-28">
            <div class="relative">
                <div class="absolute inset-0 h-1/2 bg-gray-100"></div>
                <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="max-w-lg mx-auto rounded-lg shadow-lg overflow-hidden lg:max-w-none lg:flex">
                        <div class="flex-1 bg-white px-6 py-8 lg:p-12">
                            <h3 class="text-2xl font-bold text-gray-900 sm:text-3xl sm:tracking-tight">
                                NTTB Competitie
                            </h3>
                            <p class="mt-6 text-base text-gray-500">
                                Spelend lid in de NTTB competitie in een team van T.T.V. Merwestad
                            </p>
                            <div class="mt-8">
                                <div class="flex items-center">
                                    <h4 class="flex-shrink-0 pr-4 bg-white text-base font-semibold text-blue-500">Wat is er inbegrepen</h4>
                                    <div class="flex-1 border-t-2 border-gray-200"></div>
                                </div>
                                <ul role="list" class="mt-8 space-y-5 lg:space-y-0 lg:grid lg:grid-cols-2 lg:gap-x-8 lg:gap-y-5">
                                    <li class="flex items-start lg:col-span-1">
                                        <div class="flex-shrink-0">
                                            <!-- Heroicon name: solid/check-circle -->
                                            <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <p class="ml-3 text-sm text-gray-700">Indeling in een team</p>
                                    </li>

                                    <li class="flex items-start lg:col-span-1">
                                        <div class="flex-shrink-0">
                                            <!-- Heroicon name: solid/check-circle -->
                                            <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <p class="ml-3 text-sm text-gray-700">Inschrijving NTTB</p>
                                    </li>

                                    <li class="flex items-start lg:col-span-1">
                                        <div class="flex-shrink-0">
                                            <!-- Heroicon name: solid/check-circle -->
                                            <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <p class="ml-3 text-sm text-gray-700">Spelen van wedstrijden</p>
                                    </li>

                                    <li class="flex items-start lg:col-span-1">
                                        <div class="flex-shrink-0">
                                            <!-- Heroicon name: solid/check-circle -->
                                            <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <p class="ml-3 text-sm text-gray-700">Invallen bij andere teams (wanneer mogelijk)</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="py-8 px-6 text-center bg-gray-50 lg:flex-shrink-0 lg:flex lg:flex-col lg:justify-center lg:p-12">
                            <p class="text-lg leading-6 font-medium text-gray-900">Eenmalig per competitie seizoen</p>
                            <div class="mt-4 flex items-center justify-center text-5xl tracking-tight font-bold text-gray-900">
                                <span>
                                    € 27,50
                                </span>
                                <span class="ml-3 text-xl font-medium text-gray-500 tracking-normal">
                                    EUR
                                </span>
                            </div>
                            <p class="mt-4 text-sm">
                                <a href="#" class="font-medium text-gray-500 underline"> Lees meer over ons competitiebeleid </a>
                            </p>
                            <div class="mt-6">
                                <div class="rounded-md shadow">
                                    <a href="#" class="flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-slate-800 hover:bg-slate-900">
                                        Meld je aan
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
