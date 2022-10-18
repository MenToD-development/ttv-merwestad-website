@extends($model->path, ['title' => $model->pageTitle])

@section('header')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between">
        <h1 class="text-3xl tracking-tight font-bold text-white">Mijn Merwestad</h1>
        <a href="{{ route('welcome') }}" title="Terug naar de website">
            <button type="button" class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-blue-500 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                Terug naar de website
            </button>
        </a>
    </div>
@endsection

@section('content')
    <h1 class="sr-only">{{ $model->pageTitle }}</h1>
    <!-- Main 3 column grid -->
    <div class="grid grid-cols-1 gap-4 items-start lg:grid-cols-3 lg:gap-8">
        <!-- Left column -->
        <div class="grid grid-cols-1 gap-4 lg:col-span-2">
            <section aria-labelledby="section-1-title">
                <h2 class="sr-only" id="section-1-title">Section title</h2>
                <div class="rounded-lg bg-white overflow-hidden shadow">
                    <div class="bg-white px-4 py-5 border-b border-gray-200 sm:px-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Laatste nieuws</h3>
                    </div>
                    <div class="p-6 flex flex-col space-y-10">
                        <div class="sm:flex">
                            <div class="mb-4 flex-shrink-0 sm:mb-0 sm:mr-4">
                                <svg class="h-16 w-16 border border-gray-300 bg-white text-gray-300" preserveAspectRatio="none" stroke="currentColor" fill="none" viewBox="0 0 200 200" aria-hidden="true">
                                    <path vector-effect="non-scaling-stroke" stroke-width="1" d="M0 0l200 200M0 200L200 0" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500">
                                    <time datetime="2020-03-16">Mar 16, 2020</time>
                                </p>
                                <h4 class="text-lg font-bold">Lorem ipsum</h4>
                                <p class="mt-1">Repudiandae sint consequuntur vel. Amet ut nobis explicabo numquam expedita quia omnis voluptatem. Minus quidem ipsam quia iusto.</p>
                                <div class="mt-3">
                                    <a href="#" class="text-base font-semibold text-blue-500 hover:text-blue-400"> Read full story </a>
                                </div>
                            </div>
                        </div>
                        <div class="sm:flex">
                            <div class="mb-4 flex-shrink-0 sm:mb-0 sm:mr-4">
                                <svg class="h-16 w-16 border border-gray-300 bg-white text-gray-300" preserveAspectRatio="none" stroke="currentColor" fill="none" viewBox="0 0 200 200" aria-hidden="true">
                                    <path vector-effect="non-scaling-stroke" stroke-width="1" d="M0 0l200 200M0 200L200 0" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500">
                                    <time datetime="2020-03-16">Mar 16, 2020</time>
                                </p>
                                <h4 class="text-lg font-bold">Lorem ipsum</h4>
                                <p class="mt-1">Repudiandae sint consequuntur vel. Amet ut nobis explicabo numquam expedita quia omnis voluptatem. Minus quidem ipsam quia iusto.</p>
                                <div class="mt-3">
                                    <a href="#" class="text-base font-semibold text-blue-500 hover:text-blue-400"> Read full story </a>
                                </div>
                            </div>
                        </div>
                        <div class="sm:flex">
                            <div class="mb-4 flex-shrink-0 sm:mb-0 sm:mr-4">
                                <svg class="h-16 w-16 border border-gray-300 bg-white text-gray-300" preserveAspectRatio="none" stroke="currentColor" fill="none" viewBox="0 0 200 200" aria-hidden="true">
                                    <path vector-effect="non-scaling-stroke" stroke-width="1" d="M0 0l200 200M0 200L200 0" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500">
                                    <time datetime="2020-03-16">Mar 16, 2020</time>
                                </p>
                                <h4 class="text-lg font-bold">Lorem ipsum</h4>
                                <p class="mt-1">Repudiandae sint consequuntur vel. Amet ut nobis explicabo numquam expedita quia omnis voluptatem. Minus quidem ipsam quia iusto.</p>
                                <div class="mt-3">
                                    <a href="#" class="text-base font-semibold text-blue-500 hover:text-blue-400"> Read full story </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- Right column -->
        <div class="grid grid-cols-1 gap-4">
            <section aria-labelledby="section-2-title">
                <h2 class="sr-only" id="section-2-title">Section title</h2>
                <div class="rounded-lg bg-white overflow-hidden shadow">
                    <div class="p-6">
                        <ul role="list" class="divide-y divide-gray-200">
                            <li class="relative bg-white py-5 px-4 hover:bg-gray-50 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600">
                                <div class="flex justify-between space-x-3">
                                    <div class="min-w-0 flex-1">
                                        <a href="#" class="block focus:outline-none">
                                            <span class="absolute inset-0" aria-hidden="true"></span>
                                            <p class="text-sm font-medium text-gray-900 truncate">Gloria Roberston</p>
                                            <p class="text-sm text-gray-500 truncate">Velit placeat sit ducimus non sed</p>
                                        </a>
                                    </div>
                                    <time datetime="2021-01-27T16:35" class="flex-shrink-0 whitespace-nowrap text-sm text-gray-500">1d ago</time>
                                </div>
                                <div class="mt-1">
                                    <p class="line-clamp-2 text-sm text-gray-600">Doloremque dolorem maiores assumenda dolorem facilis. Velit vel in a rerum natus facere. Enim rerum eaque qui facilis. Numquam laudantium sed id dolores omnis in. Eos reiciendis deserunt maiores et accusamus quod dolor.</p>
                                </div>
                            </li>
                            <li class="relative bg-white py-5 px-4 hover:bg-gray-50 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600">
                                <div class="flex justify-between space-x-3">
                                    <div class="min-w-0 flex-1">
                                        <a href="#" class="block focus:outline-none">
                                            <span class="absolute inset-0" aria-hidden="true"></span>
                                            <p class="text-sm font-medium text-gray-900 truncate">Gloria Roberston</p>
                                            <p class="text-sm text-gray-500 truncate">Velit placeat sit ducimus non sed</p>
                                        </a>
                                    </div>
                                    <time datetime="2021-01-27T16:35" class="flex-shrink-0 whitespace-nowrap text-sm text-gray-500">1d ago</time>
                                </div>
                                <div class="mt-1">
                                    <p class="line-clamp-2 text-sm text-gray-600">Doloremque dolorem maiores assumenda dolorem facilis. Velit vel in a rerum natus facere. Enim rerum eaque qui facilis. Numquam laudantium sed id dolores omnis in. Eos reiciendis deserunt maiores et accusamus quod dolor.</p>
                                </div>
                            </li>
                            <li class="relative bg-white py-5 px-4 hover:bg-gray-50 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600">
                                <div class="flex justify-between space-x-3">
                                    <div class="min-w-0 flex-1">
                                        <a href="#" class="block focus:outline-none">
                                            <span class="absolute inset-0" aria-hidden="true"></span>
                                            <p class="text-sm font-medium text-gray-900 truncate">Gloria Roberston</p>
                                            <p class="text-sm text-gray-500 truncate">Velit placeat sit ducimus non sed</p>
                                        </a>
                                    </div>
                                    <time datetime="2021-01-27T16:35" class="flex-shrink-0 whitespace-nowrap text-sm text-gray-500">1d ago</time>
                                </div>
                                <div class="mt-1">
                                    <p class="line-clamp-2 text-sm text-gray-600">Doloremque dolorem maiores assumenda dolorem facilis. Velit vel in a rerum natus facere. Enim rerum eaque qui facilis. Numquam laudantium sed id dolores omnis in. Eos reiciendis deserunt maiores et accusamus quod dolor.</p>
                                </div>
                            </li>
                            <li class="relative bg-white py-5 px-4 hover:bg-gray-50 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600">
                                <div class="flex justify-between space-x-3">
                                    <div class="min-w-0 flex-1">
                                        <a href="#" class="block focus:outline-none">
                                            <span class="absolute inset-0" aria-hidden="true"></span>
                                            <p class="text-sm font-medium text-gray-900 truncate">Gloria Roberston</p>
                                            <p class="text-sm text-gray-500 truncate">Velit placeat sit ducimus non sed</p>
                                        </a>
                                    </div>
                                    <time datetime="2021-01-27T16:35" class="flex-shrink-0 whitespace-nowrap text-sm text-gray-500">1d ago</time>
                                </div>
                                <div class="mt-1">
                                    <p class="line-clamp-2 text-sm text-gray-600">Doloremque dolorem maiores assumenda dolorem facilis. Velit vel in a rerum natus facere. Enim rerum eaque qui facilis. Numquam laudantium sed id dolores omnis in. Eos reiciendis deserunt maiores et accusamus quod dolor.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection


