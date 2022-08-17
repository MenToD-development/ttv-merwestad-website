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
                        Vereniging
                    </span>
                    <span class="mt-2 block text-3xl text-center leading-8 font-bold tracking-tight text-slate-900 sm:text-4xl sm:tracking-tight">
                        Recreatie spel
                    </span>
                </h1>
                <p class="mt-8 text-xl text-slate-500 leading-8">
                    Het is altijd mogelijk om alleen naar T.T.V. Merwestad te komen. Bij onze speelavonden is het de
                    gewoonte om iedereen te laten spelen. Als het erg druk is wordt er al gauw over gegaan op een
                    aantal dubbel tafels zodat er 4 personen tegelijkertijd per tafel kunnen spelen. Zo zijn er altijd
                    tafels en spelers vrij om tegen te spelen.
                </p>
            </div>
            <div class="mt-6 prose prose-blue prose-lg text-slate-500 mx-auto">
                <p>
                    Bij T.T.V. Merwestad hebben we momenteel twee speelavonden in de week. Deze zijn op de dinsdag
                    avond en de donderdag avond (<a href="#">openingstijden kunnen verschillen</a>).
                    Op beide avonden kan het zo zijn dat er in de competitie periode thuis wedstrijden plaatsvinden,
                    maar er blijven altijd tafels over om vrij / recreatief te spelen. Op de speelavonden worden er
                    enkel gespeeld als zowel dubbel. Dit bepalen de spelers zelf en onderling waardoor het ook zeer
                    toegankelijk is voor mensen die alleen komen.
                </p>
                <figure>
                    <img class="w-full rounded-lg" src="{{ url('assets/tafeltenniszaal-overzicht.jpg') }}" alt="" width="1310" height="873">
                    <figcaption>Een blik in onze zaal tijdens een onderlinge competitieavond.</figcaption>
                </figure>
                <h2>Toegankelijk voor iedereen</h2>
                <p>
                    Het maakt niet uit of je al ervaring hebt met tafeltennis of niet. Er zijn genoeg spelers om je de
                    beginselen van het tafeltennis uit te leggen en met je te trainen. Daarnaast zul je door veel te
                    spelen alles vanzelf oppakken. Waarbij je altijd nog de optie hebt om toch wel competitie te gaan
                    spelen.
                </p>
                <h2>Leeftijd</h2>
                <p>
                    Momenteel hebben wij binnen onze vereniging geen jeugd afdeling. Hier zijn namelijk regels aan
                    verbonden voor een vereniging. We hebben hier nog niet veel animo voor ontvangen en daarvoor hebben
                    we ervoor gekozen om iedereen welkom te heten boven de 16 jaar.
                </p>

            </div>
        </div>
    </div>

    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="bg-white">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-lg font-semibold text-blue-500">Kennis maken</h2>
                <p class="mt-1 text-4xl tracking-tight font-bold text-gray-900 sm:text-5xl sm:tracking-tight lg:text-6xl lg:tracking-tight">Kom een keer langs!</p>
                <p class="max-w-xl mt-5 mx-auto text-xl text-gray-500">
                    Je kunt 3 keer bij ons langskomen en gratis mee spelen om te kijken of de vereniging je bevalt.
                    Daarna vragen we je pas om lid te worden.
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
                                Recreatie lid
                            </h3>
                            <p class="mt-6 text-base text-gray-500">
                                Spelend lid van de vereniging en toegang tot alle speelavonden, evenementen <br />en andere gezellige uitjes.
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
                                        <p class="ml-3 text-sm text-gray-700">Lid van de vereniging</p>
                                    </li>

                                    <li class="flex items-start lg:col-span-1">
                                        <div class="flex-shrink-0">
                                            <!-- Heroicon name: solid/check-circle -->
                                            <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <p class="ml-3 text-sm text-gray-700">Toegang tot de speelavonden</p>
                                    </li>

                                    <li class="flex items-start lg:col-span-1">
                                        <div class="flex-shrink-0">
                                            <!-- Heroicon name: solid/check-circle -->
                                            <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <p class="ml-3 text-sm text-gray-700">Toegang tot club evenementen</p>
                                    </li>

                                    <li class="flex items-start lg:col-span-1">
                                        <div class="flex-shrink-0">
                                            <!-- Heroicon name: solid/check-circle -->
                                            <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <p class="ml-3 text-sm text-gray-700">Stemrecht tijdens ledenvergaderingen</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="py-8 px-6 text-center bg-gray-50 lg:flex-shrink-0 lg:flex lg:flex-col lg:justify-center lg:p-12">
                            <p class="text-lg leading-6 font-medium text-gray-900">Maandelijks te betalen</p>
                            <div class="mt-4 flex items-center justify-center text-5xl tracking-tight font-bold text-gray-900">
                                <span>
                                    € 10,-
                                </span>
                                <span class="ml-3 text-xl font-medium text-gray-500 tracking-normal">
                                    EUR
                                </span>
                            </div>
                            <p class="mt-4 text-sm">
                                <a href="#" class="font-medium text-gray-500 underline"> Lees meer over onze lidmaatschapsbeleid </a>
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


    <div class="bg-blue-500">
        <div class="max-w-2xl mx-auto text-center py-16 px-4 sm:py-20 sm:px-6 lg:px-8">
            <h2 class="text-3xl tracking-tight font-bold text-white sm:text-4xl sm:tracking-tight">
                <span class="block text-2xl">Interesse gekregen?</span>
                <span class="block">Kom een keer langs bij ons</span>
            </h2>
            <p class="mt-4 text-lg leading-6 text-indigo-200">
                Om te kijken of het recreatief spelen je bevalt, kun je bij ons mee komen spelen op één van onze
                speelavonden.
            </p>
            <a href="#" class="mt-8 w-full inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-blue-500 bg-white hover:bg-indigo-50 sm:w-auto">
                Bekijk onze agenda
            </a>
        </div>
    </div>

@endsection

