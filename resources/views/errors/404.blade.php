@extends('layouts.plain', ['title' => 'De pagina kon niet worden gevonden.'])

@section('body')
    <!-- This example requires Tailwind CSS v2.0+ -->
    <!--
      This example requires updating your template:

      ```
      <html class="h-full">
      <body class="h-full">
      ```
    -->
    <div class="min-h-screen pt-16 pb-12 flex flex-col bg-white">
        <main class="flex-grow flex flex-col justify-center max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex-shrink-0 flex justify-center">
                <a href="/" class="inline-flex flex-col justify-center items-center">
                    <x-icons.table-tennis class="mb-4 w-12 h-12 fill-blue-500"></x-icons.table-tennis>
                    <span class="inline-block font-serif text-slate-700 font-black text-lg">T.T.V. Merwestad</span>
                </a>
            </div>
            <div class="py-16">
                <div class="text-center">
                    <p class="text-sm font-semibold text-blue-500 uppercase tracking-wide">404 error</p>
                    <h1 class="mt-2 text-4xl font-extrabold text-slate-800 tracking-tight sm:text-5xl">Pagina is niet gevonden.</h1>
                    <p class="mt-2 text-base text-slate-500">Sorry, maar we konden de pagina die je zoekt niet vinden.</p>
                    <div class="mt-6">
                        <a href="{{ route('welcome') }}" class="text-base font-medium text-blue-500 hover:text-blue-400">
                            Ga terug naar de welkom pagina<span aria-hidden="true"> &rarr;</span>
                        </a>
                    </div>
                </div>
            </div>
        </main>
        <footer class="flex-shrink-0 max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex justify-center space-x-4">
                <a href="#" class="text-sm font-medium text-slate-500 hover:text-slate-600">Neem contact op</a>
                <span class="inline-block border-l border-slate-300" aria-hidden="true"></span>
{{--                <a href="#" class="text-sm font-medium text-slate-500 hover:text-slate-600">Status</a>--}}
{{--                <span class="inline-block border-l border-slate-300" aria-hidden="true"></span>--}}
                <a href="#" class="text-sm font-medium text-slate-500 hover:text-slate-600">Facebook</a>
            </nav>
        </footer>
    </div>

@endsection
