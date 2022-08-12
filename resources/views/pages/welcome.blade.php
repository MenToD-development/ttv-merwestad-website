@extends($model->path, ['title' => $model->pageTitle])

@section('content')
    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="bg-white">
        <!-- Header -->
        <div class="relative pb-32 bg-gray-800">
            <div class="absolute inset-0">
                <img class="w-full h-full object-cover" src="{{ url('/assets/tafeltenniszaal-overzicht.jpg') }}"
                     alt="T.T.V. Merwestad tafeltennis zaal">
                <div class="absolute inset-0 bg-gray-500 mix-blend-multiply" aria-hidden="true"></div>
            </div>
            <div class="relative max-w-7xl mx-auto py-24 px-4 sm:py-32 sm:px-6 lg:px-8">
                <h1 class="text-4xl font-extrabold tracking-tight font-serif text-white md:text-5xl lg:text-6xl">
                    T.T.V. Merwestad
                </h1>
                <p class="mt-6 max-w-3xl text-xl text-gray-300">
                    Een gezellige tafeltennisvereniging aan het Leerpark in Dordrecht. Kom vooral een keer langs om
                    kennis te maken met onze vereniging.
                </p>
            </div>
        </div>

        <!-- Overlapping cards -->
        <section class="-mt-32 max-w-7xl mx-auto relative z-10 pb-32 px-4 sm:px-6 lg:px-8" aria-labelledby="contact-heading">
            <h2 class="sr-only" id="contact-heading">Contact us</h2>
            <div class="grid grid-cols-1 gap-y-20 lg:grid-cols-3 lg:gap-y-0 lg:gap-x-8">
                <div class="flex flex-col bg-white rounded-2xl shadow-xl">
                    <div class="flex-1 relative pt-16 px-6 pb-8 md:px-8">
                        <div class="absolute top-0 p-5 inline-block bg-blue-500 rounded-xl shadow-lg transform -translate-y-1/2">
                            <x-icons.calendar class="h-6 w-6 stroke-white"></x-icons.calendar>
                        </div>
                        <h3 class="text-xl font-medium text-slage-800">
                            Recreatief spelen
                        </h3>
                        <p class="mt-4 text-base text-slate-500">
                            Ben je op zoek naar een plek voor gezelligheid en tafeltennis? Bij T.T.V. Merwestad zijn
                            we naar je op zoek. Kom vooral een keer langs om kennis te maken met onze vereniging.
                        </p>
                    </div>
                    <div class="p-6 bg-gray-50 rounded-bl-2xl rounded-br-2xl md:px-8">
                        <a href="{{ route('association.recreation') }}" class="text-base font-medium text-blue-500 hover:text-blue-600">
                            Lees meer over recreatief<span aria-hidden="true"> &rarr;</span>
                        </a>
                    </div>
                </div>

                <div class="flex flex-col bg-white rounded-2xl shadow-xl">
                    <div class="flex-1 relative pt-16 px-6 pb-8 md:px-8">
                        <div class="absolute top-0 p-5 inline-block bg-blue-500 rounded-xl shadow-lg transform -translate-y-1/2">
                            <x-icons.trending-up class="h-6 w-6 stroke-white"></x-icons.trending-up>
                        </div>
                        <h3 class="text-xl font-medium text-slate-800">
                            Competitie
                        </h3>
                        <p class="mt-4 text-base text-slate-500">
                            Wil je op een wat meer competitief niveau tafeltennissen? Bij T.T.V. Merwestad kun je
                            ook meespelen in de competitie van de NTTB regio West.
                        </p>
                    </div>
                    <div class="p-6 bg-gray-50 rounded-bl-2xl rounded-br-2xl md:px-8">
                        <a href="#" class="text-base font-medium text-blue-500 hover:text-blue-600">
                            Lees meer over de competitie<span aria-hidden="true"> &rarr;</span>
                        </a>
                    </div>
                </div>

                <div class="flex flex-col bg-white rounded-2xl shadow-xl">
                    <div class="flex-1 relative pt-16 px-6 pb-8 md:px-8">
                        <div class="absolute top-0 p-5 inline-block bg-blue-500 rounded-xl shadow-lg transform -translate-y-1/2">
                            <x-icons.at-symbol class="h-6 w-6 stroke-white"></x-icons.at-symbol>
                        </div>
                        <h3 class="text-xl font-medium text-slate-800">
                            Algemeen contact
                        </h3>
                        <p class="mt-4 text-base text-slate-500">
                            Wij staan open voor al jouw vragen en/of opmerkingen. We horen dan ook graag van je en
                            wie weet kunnen we wat voor elkaar betekenen.
                        </p>
                    </div>
                    <div class="p-6 bg-gray-50 rounded-bl-2xl rounded-br-2xl md:px-8">
                        <a href="#" class="text-base font-medium text-blue-500 hover:text-blue-600">
                            Neem contact met ons op<span aria-hidden="true"> &rarr;</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- This example requires Tailwind CSS v2.0+ -->
    <div>
        <div class="pt-12 sm:pt-16 lg:pt-24">
            <div class="max-w-7xl mx-auto text-center px-4 sm:px-6 lg:px-8">
                <div class="max-w-3xl mx-auto space-y-2 lg:max-w-none">
                    <h2 class="text-xl leading-6 font-semibold text-blue-500">Lidmaatschapsprijzen</h2>
                    <p class="text-3xl tracking-tight font-bold text-slate-800 sm:text-4xl sm:tracking-tight lg:text-5xl lg:tracking-tight">De juiste prijs voor u, wie u ook bent</p>
                    <p class="text-xl text-gray-400">Een kleine bijdrage waarvoor gezelligheid en beweging in de plaats komt.</p>
                </div>
            </div>
        </div>
        <div class="mt-8 pb-12 sm:mt-12 sm:pb-16 lg:mt-16 lg:pb-24">
            <div class="relative">
                <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="max-w-md mx-auto space-y-4 lg:max-w-5xl lg:grid lg:grid-cols-2 lg:gap-5 lg:space-y-0">
                        <div class="flex flex-col ring-2 ring-slate-50 rounded-lg shadow-lg overflow-hidden">
                            <div class="px-6 py-8 bg-white sm:p-10 sm:pb-6">
                                <div>
                                    <h3 class="inline-flex px-4 py-1 rounded-full text-base font-semibold bg-blue-100 text-blue-500" id="tier-standard">
                                        Recreatie
                                    </h3>
                                </div>
                                <div class="mt-4 flex items-baseline text-6xl tracking-tight font-bold">
                                    € 10,-
                                    <span class="ml-2 text-2xl font-medium text-slate-500 tracking-normal">
                                        per maand
                                    </span>
                                </div>
                                <p class="mt-5 text-lg text-slate-500">
                                    Hiermee ben je een spelend lid binnen onze vereniging.
                                </p>
                            </div>
                            <div class="flex-1 flex flex-col justify-between px-6 pt-6 pb-8 bg-gray-50 space-y-6 sm:p-10 sm:pt-6">
                                <ul role="list" class="space-y-4">
                                    <li class="flex items-start">
                                        <div class="flex-shrink-0">
                                            <!-- Heroicon name: outline/check -->
                                            <svg class="h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                            </svg>
                                        </div>
                                        <p class="ml-3 text-base text-slate-700">Vrij spelen op al onze speelavonden</p>
                                    </li>

                                    <li class="flex items-start">
                                        <div class="flex-shrink-0">
                                            <!-- Heroicon name: outline/check -->
                                            <svg class="h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                            </svg>
                                        </div>
                                        <p class="ml-3 text-base text-gray-700">Toegang en stemrecht bij de ledenvergaderingen</p>
                                    </li>

                                    <li class="flex items-start">
                                        <div class="flex-shrink-0">
                                            <!-- Heroicon name: outline/check -->
                                            <svg class="h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                            </svg>
                                        </div>
                                        <p class="ml-3 text-base text-gray-700">Toegang tot alle evenementen van de vereniging</p>
                                    </li>
                                </ul>
                                <div class="rounded-md shadow">
                                    <a href="#" class="flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-500 hover:bg-blue-600"
                                       aria-describedby="tier-standard">
                                        Get started
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-col  ring-2 ring-slate-50 rounded-lg shadow-lg overflow-hidden">
                            <div class="px-6 py-8 bg-white sm:p-10 sm:pb-6">
                                <div>
                                    <h3 class="inline-flex px-4 py-1 rounded-full text-base font-semibold bg-blue-100 text-blue-500" id="tier-standard">
                                        Competitie
                                    </h3>
                                </div>
                                <div class="mt-4 flex items-baseline text-6xl tracking-tight font-bold">
                                    € 27,50
                                    <span class="ml-2 text-2xl font-medium text-gray-500 tracking-normal">
                                        per competitie
                                    </span>
                                </div>
                                <p class="mt-5 text-lg text-gray-500">
                                    Bij T.T.V. Merwestad betalen we per competitie waaraan je deelneemt.
                                </p>
                            </div>
                            <div class="flex-1 flex flex-col justify-between px-6 pt-6 pb-8 bg-gray-50 space-y-6 sm:p-10 sm:pt-6">
                                <ul role="list" class="space-y-4">
                                    <li class="flex items-start">
                                        <div class="flex-shrink-0">
                                            <!-- Heroicon name: outline/check -->
                                            <svg class="h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                            </svg>
                                        </div>
                                        <p class="ml-3 text-base text-gray-700">Inschrijving NTTB</p>
                                    </li>

                                    <li class="flex items-start">
                                        <div class="flex-shrink-0">
                                            <!-- Heroicon name: outline/check -->
                                            <svg class="h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                            </svg>
                                        </div>
                                        <p class="ml-3 text-base text-gray-700">Teamindeling</p>
                                    </li>

                                    <li class="flex items-start">
                                        <div class="flex-shrink-0">
                                            <!-- Heroicon name: outline/check -->
                                            <svg class="h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                            </svg>
                                        </div>
                                        <p class="ml-3 text-base text-gray-700">Competitie wedstrijden spelen</p>
                                    </li>
                                </ul>
                                <div class="rounded-md shadow">
                                    <a href="#" class="flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-500 hover:bg-blue-600" aria-describedby="tier-standard">
                                        Get started
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="relative bg-gray-50 pt-16 pb-20 px-4 sm:px-6 lg:pt-24 lg:pb-28 lg:px-8">
        <div class="absolute inset-0">
            <div class="bg-white h-1/3 sm:h-2/3"></div>
        </div>
        <div class="relative max-w-7xl mx-auto">
            <div class="text-center">
                <h2 class="text-3xl tracking-tight font-bold text-gray-900 sm:text-4xl sm:tracking-tight">
                    Het laatste nieuws
                </h2>
                <p class="mt-3 max-w-2xl mx-auto text-xl text-gray-500 sm:mt-4">
                    Alles wat er gebeurt binnen en rondom onze vereniging leest u hier.
                </p>
            </div>
            <div class="mt-12 max-w-lg mx-auto grid gap-5 lg:grid-cols-3 lg:max-w-none">
                <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                    <div class="flex-shrink-0">
                        <img class="h-48 w-full object-cover" src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1679&q=80" alt="">
                    </div>
                    <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                        <div class="flex-1">
                            <p class="text-sm font-medium text-indigo-600">
                                <a href="#" class="hover:underline"> Article </a>
                            </p>
                            <a href="#" class="block mt-2">
                                <p class="text-xl font-semibold text-gray-900">Boost your conversion rate</p>
                                <p class="mt-3 text-base text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto accusantium praesentium eius, ut atque fuga culpa, similique sequi cum eos quis dolorum.</p>
                            </a>
                        </div>
                        <div class="mt-6 flex items-center">
                            <div class="flex-shrink-0">
                                <a href="#">
                                    <span class="sr-only">Roel Aufderehar</span>
                                    <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                </a>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-gray-900">
                                    <a href="#" class="hover:underline"> Roel Aufderehar </a>
                                </p>
                                <div class="flex space-x-1 text-sm text-gray-500">
                                    <time datetime="2020-03-16"> Mar 16, 2020 </time>
                                    <span aria-hidden="true"> &middot; </span>
                                    <span> 6 min read </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                    <div class="flex-shrink-0">
                        <img class="h-48 w-full object-cover" src="https://images.unsplash.com/photo-1547586696-ea22b4d4235d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1679&q=80" alt="">
                    </div>
                    <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                        <div class="flex-1">
                            <p class="text-sm font-medium text-indigo-600">
                                <a href="#" class="hover:underline"> Video </a>
                            </p>
                            <a href="#" class="block mt-2">
                                <p class="text-xl font-semibold text-gray-900">How to use search engine optimization to drive sales</p>
                                <p class="mt-3 text-base text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit facilis asperiores porro quaerat doloribus, eveniet dolore. Adipisci tempora aut inventore optio animi., tempore temporibus quo laudantium.</p>
                            </a>
                        </div>
                        <div class="mt-6 flex items-center">
                            <div class="flex-shrink-0">
                                <a href="#">
                                    <span class="sr-only">Brenna Goyette</span>
                                    <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                </a>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-gray-900">
                                    <a href="#" class="hover:underline"> Brenna Goyette </a>
                                </p>
                                <div class="flex space-x-1 text-sm text-gray-500">
                                    <time datetime="2020-03-10"> Mar 10, 2020 </time>
                                    <span aria-hidden="true"> &middot; </span>
                                    <span> 4 min read </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                    <div class="flex-shrink-0">
                        <img class="h-48 w-full object-cover" src="https://images.unsplash.com/photo-1492724441997-5dc865305da7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1679&q=80" alt="">
                    </div>
                    <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                        <div class="flex-1">
                            <p class="text-sm font-medium text-indigo-600">
                                <a href="#" class="hover:underline"> Case Study </a>
                            </p>
                            <a href="#" class="block mt-2">
                                <p class="text-xl font-semibold text-gray-900">Improve your customer experience</p>
                                <p class="mt-3 text-base text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint harum rerum voluptatem quo recusandae magni placeat saepe molestiae, sed excepturi cumque corporis perferendis hic.</p>
                            </a>
                        </div>
                        <div class="mt-6 flex items-center">
                            <div class="flex-shrink-0">
                                <a href="#">
                                    <span class="sr-only">Daniela Metz</span>
                                    <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                </a>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-gray-900">
                                    <a href="#" class="hover:underline"> Daniela Metz </a>
                                </p>
                                <div class="flex space-x-1 text-sm text-gray-500">
                                    <time datetime="2020-02-12"> Feb 12, 2020 </time>
                                    <span aria-hidden="true"> &middot; </span>
                                    <span> 11 min read </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
