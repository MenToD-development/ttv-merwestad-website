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

