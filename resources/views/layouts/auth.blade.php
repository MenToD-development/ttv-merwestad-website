@extends('layouts.plain', ['title' => $title])

@section('body')

    <div id="app" class="min-h-full h-screen flex">

        <div class="flex-1 flex flex-col justify-center py-12 px-4 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
            <div class="mx-auto w-full max-w-sm lg:w-96">
                @yield('content')
            </div>
            <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 lg:max-w-7xl">
                <div class="border-t border-gray-200 py-8 text-sm text-gray-500 text-center sm:text-left">
                    <span class="block sm:inline">
                        &copy; {{ date('Y') }} {{ $model->applicationName }}.
                    </span>
                    <span class="block sm:inline">Alle rechten voorbehouden.</span>
                </div>
            </div>
        </div>
        <div class="hidden lg:block relative w-0 flex-1">
            <img class="absolute inset-0 h-full w-full object-cover" src="{{ $image }}" alt="">
        </div>

    </div>

@endsection
