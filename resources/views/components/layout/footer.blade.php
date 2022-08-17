<!-- This example requires Tailwind CSS v2.0+ -->
<footer class="bg-white" aria-labelledby="footer-heading">
    <h2 id="footer-heading" class="sr-only">Footer</h2>
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
        <div class="xl:grid xl:grid-cols-3 xl:gap-8">
            <div class="space-y-8 xl:col-span-1">
                <div class="flex">
                    <x-icons.table-tennis class="w-8 h-8 mr-3 fill-blue-500" />
                    <span class="pt-1 inline-block font-serif text-slate-700 font-black text-lg">
                        T.T.V. Merwestad
                    </span>
                </div>
                <p class="text-gray-500 text-base">Een gezellige tafeltennisvereniging aan <br />het Leerpark in Dordrecht.</p>
                <div class="flex space-x-6">
                    <a href="#" class="text-gray-400 hover:text-gray-500">
                        <span class="sr-only">Facebook</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="mt-12 grid grid-cols-2 gap-8 xl:mt-0 xl:col-span-2">
                <div class="md:grid md:grid-cols-2 md:gap-8">
                    <div>
                        <h3 class="text-sm font-semibold text-slate-400 tracking-wider uppercase">Algemeen</h3>
                        <ul role="list" class="mt-4 space-y-4">
                            <li>
                                <a href="{{ route('welcome') }}" class="text-base text-gray-500 hover:text-gray-900">
                                    Welkom
                                </a>
                            </li>

                            <li>
                                <a href="#" class="text-base text-gray-500 hover:text-gray-900">
                                    Contact
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-12 md:mt-0">
                        <h3 class="text-sm font-semibold text-slate-400 tracking-wider uppercase">Vereniging</h3>
                        <ul role="list" class="mt-4 space-y-4">
                            <li>
                                <a href="{{ route('association.recreation') }}" class="text-base text-slate-500 hover:text-slate-900">
                                    Recreatief
                                </a>
                            </li>

                            <li>
                                <a href="#" class="text-base text-slate-500 hover:text-slate-900">
                                    Competitie
                                </a>
                            </li>
                        </ul>
                    </div>
{{--                    <div class="mt-12 md:mt-0">--}}
{{--                        <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">Support</h3>--}}
{{--                        <ul role="list" class="mt-4 space-y-4">--}}
{{--                            <li>--}}
{{--                                <a href="#" class="text-base text-gray-500 hover:text-gray-900"> Pricing </a>--}}
{{--                            </li>--}}

{{--                            <li>--}}
{{--                                <a href="#" class="text-base text-gray-500 hover:text-gray-900"> Documentation </a>--}}
{{--                            </li>--}}

{{--                            <li>--}}
{{--                                <a href="#" class="text-base text-gray-500 hover:text-gray-900"> Guides </a>--}}
{{--                            </li>--}}

{{--                            <li>--}}
{{--                                <a href="#" class="text-base text-gray-500 hover:text-gray-900"> API Status </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
                </div>
                <div class="md:grid md:grid-cols-2 md:gap-8">
{{--                    <div>--}}
{{--                        <h3 class="text-sm font-semibold text-slate-400 tracking-wider uppercase">Vereniging</h3>--}}
{{--                        <ul role="list" class="mt-4 space-y-4">--}}
{{--                            <li>--}}
{{--                                <a href="{{ route('association.recreation') }}" class="text-base text-slate-500 hover:text-slate-900">--}}
{{--                                    Recreatief--}}
{{--                                </a>--}}
{{--                            </li>--}}

{{--                            <li>--}}
{{--                                <a href="#" class="text-base text-slate-500 hover:text-slate-900">--}}
{{--                                    Competitie--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <div class="mt-12 md:mt-0">--}}
{{--                        <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">Legal</h3>--}}
{{--                        <ul role="list" class="mt-4 space-y-4">--}}
{{--                            <li>--}}
{{--                                <a href="#" class="text-base text-gray-500 hover:text-gray-900"> Claim </a>--}}
{{--                            </li>--}}

{{--                            <li>--}}
{{--                                <a href="#" class="text-base text-gray-500 hover:text-gray-900"> Privacy </a>--}}
{{--                            </li>--}}

{{--                            <li>--}}
{{--                                <a href="#" class="text-base text-gray-500 hover:text-gray-900"> Terms </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
        <div class="mt-12 border-t border-gray-200 pt-8 flex justify-between">
            <p class="inline-block text-base text-gray-400 xl:text-center">&copy; {{ date('Y') }} {{ config('app.name') }}, Inc. Alle rechten voorbehouden.</p>
            <p class="inline-block text-base text-gray-400 xl:text-center">Ontwikkeling van Bondgenoot</p>
        </div>
    </div>
</footer>
