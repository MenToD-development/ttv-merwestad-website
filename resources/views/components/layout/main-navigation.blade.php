<!-- This example requires Tailwind CSS v2.0+ -->
<popover class="fixed w-screen top-0 left-0 z-50 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="flex justify-between items-center border-b-2 border-gray-100 py-6 md:justify-start md:space-x-10">
            <div class="flex justify-start lg:w-0 lg:flex-1">
                <a class="flex justify-start content-center" href="{{ route('welcome') }}">
                    <x-icons.table-tennis class="w-8 h-8 mr-3 fill-blue-500" />
                    <span class="pt-1 inline-block font-serif text-slate-700 font-black text-lg">
                        {{ $model->applicationName }}
                    </span>
                </a>
            </div>
            <div class="-mr-2 -my-2 md:hidden">
                <popover-button class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                    <span class="sr-only">Open menu</span>
                    <menu-icon class="h-6 w-6" aria-hidden="true" />
                </popover-button>
            </div>
            <popover-group as="nav" class="hidden md:flex space-x-10">
                <a href="{{ route('welcome') }}" class="text-base font-medium text-slate-500 hover:text-slate-900">
                    Welkom
                </a>
                <popover class="relative" v-slot="{ open }">
                    <popover-button :class="[open ? 'text-slate-900' : 'text-slate-500', 'group bg-white rounded-md inline-flex items-center text-base font-medium hover:text-slate-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500']">
                        <span>Vereniging</span>
                        <chevron-down-icon :class="[open ? 'text-slate-600' : 'text-slate-400', 'ml-2 h-5 w-5 group-hover:text-slate-500']" aria-hidden="true" />
                    </popover-button>

                    <transition enter-active-class="transition ease-out duration-200" enter-from-class="opacity-0 translate-y-1" enter-to-class="opacity-100 translate-y-0" leave-active-class="transition ease-in duration-150" leave-from-class="opacity-100 translate-y-0" leave-to-class="opacity-0 translate-y-1">
                        <popover-panel class="absolute z-10 -ml-4 mt-3 transform w-screen max-w-md lg:max-w-2xl lg:ml-0 lg:left-1/2 lg:-translate-x-1/2">
                            <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden">
                                <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8 lg:grid-cols-2">
                                    <a href="{{ route('association.recreation') }}" class="-m-3 p-3 flex items-start rounded-lg hover:bg-slate-50">
                                        <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-blue-500 text-white sm:h-12 sm:w-12">
                                            <x-icons.calendar class="h-6 w-6 stroke-white"></x-icons.calendar>
                                        </div>
                                        <div class="ml-4">
                                            <p class="text-base font-medium text-slate-900">
                                                Recreatief
                                            </p>
                                            <p class="mt-1 text-sm text-slate-500">
                                                Lees hier alles over het recreatief spelen bij T.T.V. Merwestad.
                                            </p>
                                        </div>
                                    </a>
                                    <a href="{{ route('association.competition') }}" class="-m-3 p-3 flex items-start rounded-lg hover:bg-slate-50">
                                        <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-blue-500 text-white sm:h-12 sm:w-12">
                                            <x-icons.trending-up class="h-6 w-6 stroke-white"></x-icons.trending-up>
                                        </div>
                                        <div class="ml-4">
                                            <p class="text-base font-medium text-slate-900">
                                                Competitie
                                            </p>
                                            <p class="mt-1 text-sm text-slate-500">
                                                Lees hier alles over het spelen van competitie bij T.T.V. Merwestad.
                                            </p>
                                        </div>
                                    </a>
                                </div>
{{--                                <div class="p-5 bg-gray-50 sm:p-8">--}}
{{--                                    <a href="#" class="-m-3 p-3 flow-root rounded-md hover:bg-gray-100">--}}
{{--                                        <div class="flex items-center">--}}
{{--                                            <div class="text-base font-medium text-gray-900">Enterprise</div>--}}
{{--                                            <span class="ml-3 inline-flex items-center px-3 py-0.5 rounded-full text-xs font-medium leading-5 bg-indigo-100 text-indigo-800"> New </span>--}}
{{--                                        </div>--}}
{{--                                        <p class="mt-1 text-sm text-gray-500">Empower your entire team with even more advanced tools.</p>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
                            </div>
                        </popover-panel>
                    </transition>
                </popover>
                <a href="{{ route('contact') }}" class="text-base font-medium text-slate-500 hover:text-slate-900">
                    Contact
                </a>
{{--                <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900"> Docs </a>--}}

{{--                <Popover class="relative" v-slot="{ open }">--}}
{{--                    <PopoverButton :class="[open ? 'text-gray-900' : 'text-gray-500', 'group bg-white rounded-md inline-flex items-center text-base font-medium hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500']">--}}
{{--                        <span>More</span>--}}
{{--                        <ChevronDownIcon :class="[open ? 'text-gray-600' : 'text-gray-400', 'ml-2 h-5 w-5 group-hover:text-gray-500']" aria-hidden="true" />--}}
{{--                    </PopoverButton>--}}

{{--                    <transition enter-active-class="transition ease-out duration-200" enter-from-class="opacity-0 translate-y-1" enter-to-class="opacity-100 translate-y-0" leave-active-class="transition ease-in duration-150" leave-from-class="opacity-100 translate-y-0" leave-to-class="opacity-0 translate-y-1">--}}
{{--                        <PopoverPanel class="absolute z-10 left-1/2 transform -translate-x-1/2 mt-3 px-2 w-screen max-w-xs sm:px-0">--}}
{{--                            <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden">--}}
{{--                                <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">--}}
{{--                                    <a v-for="resource in resources" :key="resource.name" :href="resource.href" class="-m-3 p-3 block rounded-md hover:bg-gray-50">--}}
{{--                                        <p class="text-base font-medium text-gray-900">--}}
{{--                                            {{ resource.name }}--}}
{{--                                        </p>--}}
{{--                                        <p class="mt-1 text-sm text-gray-500">--}}
{{--                                            {{ resource.description }}--}}
{{--                                        </p>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </PopoverPanel>--}}
{{--                    </transition>--}}
{{--                </Popover>--}}
            </popover-group>
            <div class="hidden md:flex items-center justify-end md:flex-1 lg:w-0">
                <a href="#" class="whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900"> Inloggen </a>
                <a href="#" class="ml-8 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-blue-500 hover:bg-blue-600"> Registreren </a>
            </div>
        </div>
    </div>



    <!--
      Mobile menu, show/hide based on mobile menu state.

      Entering: "duration-200 ease-out"
        From: "opacity-0 scale-95"
        To: "opacity-100 scale-100"
      Leaving: "duration-100 ease-in"
        From: "opacity-100 scale-100"
        To: "opacity-0 scale-95"
    -->
    <transition enter-active-class="duration-200 ease-out" enter-from-class="opacity-0 scale-95" enter-to-class="opacity-100 scale-100" leave-active-class="duration-100 ease-in" leave-from-class="opacity-100 scale-100" leave-to-class="opacity-0 scale-95">
        <popover-panel focus class="z-50 absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">
            <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-white divide-y-2 divide-gray-50">
                <div class="pt-5 pb-6 px-5">
                    <div class="flex items-center justify-between">
                        <div class="inline-flex">
                            <x-icons.table-tennis class="w-8 h-8 mr-3 fill-blue-500" />
                            <span class="pt-1 inline-block font-serif text-slate-700 font-black text-lg">
                                {{ $model->applicationName }}
                            </span>
                        </div>
                        <div class="-mr-2">
                            <popover-button class="bg-white rounded-md p-2 inline-flex items-center justify-center text-slate-400 hover:text-slate-500 hover:bg-slate-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500">
                                <span class="sr-only">Menu sluiten</span>
                                <xicon class="h-6 w-6" aria-hidden="true" />
                            </popover-button>
                        </div>
                    </div>
                    <div class="mt-6">
                        <nav class="grid grid-cols-1 gap-7">
                            <a href="{{ route('association.recreation') }}" class="-m-3 p-3 flex items-center rounded-lg hover:bg-gray-50">
                                <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-blue-500 text-white">
                                    <x-icons.table-tennis class="h-6 w-6"></x-icons.table-tennis>
                                </div>
                                <div class="ml-4 text-base font-medium text-gray-900">
                                    Regulier spelen
                                </div>
                            </a><a href="{{ route('association.competition') }}" class="-m-3 p-3 flex items-center rounded-lg hover:bg-gray-50">
                                <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-blue-500 text-white">
                                    <x-icons.trending-up class="h-6 w-6"></x-icons.trending-up>
                                </div>
                                <div class="ml-4 text-base font-medium text-gray-900">
                                    Regulier spelen
                                </div>
                            </a>
                        </nav>
                    </div>
                </div>
                <div class="py-6 px-5">
                    <div class="grid grid-cols-2 gap-4">
                        <a href="{{ route('welcome') }}" class="text-base font-medium text-slate-800 hover:text-slate-600">
                            Welkom
                        </a>
                        <a href="{{ route('contact') }}" class="text-base font-medium text-slate-800 hover:text-slate-600">
                            Contact
                        </a>

{{--                        <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700"> Docs </a>--}}

{{--                        <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700"> Enterprise </a>--}}
{{--                        <a v-for="resource in resources" :key="resource.name" :href="resource.href" class="text-base font-medium text-gray-900 hover:text-gray-700">--}}
{{--                            {{ resource.name }}--}}
{{--                        </a>--}}
                    </div>
                    <div class="mt-6">
                        <a href="#" class="w-full flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-blue-500 hover:bg-blue-400">
                            Registreren
                        </a>
                        <p class="mt-6 text-center text-base font-medium text-slate-500">
                            Heeft u al een account?
                            {{ ' ' }}
                            <a href="#" class="text-blue-500 hover:text-blue-400"> Log hier in </a>
                        </p>
                    </div>
                </div>
            </div>
        </popover-panel>
    </transition>

</popover>
