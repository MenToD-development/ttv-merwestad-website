@extends($model->layout->path, ['title' => $model->layout->pageTitle])

@section('header')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between">
        <h1 class="text-3xl tracking-tight font-bold text-white">Hallo {{ $model->name() }}</h1>
        <a href="{{ route('welcome') }}" title="Terug naar de website">
            <button type="button" class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-blue-500 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-400">
                Terug naar de website
            </button>
        </a>
    </div>
@endsection

@section('content')
    <h1 class="sr-only">{{ $model->layout->pageTitle }}</h1>

    <div class="grid grid-cols-1 gap-4 items-start lg:grid-cols-3 lg:gap-8">

        <div class="grid grid-cols-1 gap-4">
            <section aria-labelledby="section-1-title">
                <h2 class="sr-only" id="section-1-title">Section title</h2>
                <div class="rounded-lg bg-white overflow-hidden shadow">
                    <div class="bg-white px-4 py-5 border-b border-gray-200 sm:px-6">
                        <nav>
                            <!-- Current: "bg-gray-100 text-gray-900", Default: "text-gray-600 hover:bg-gray-50 hover:text-gray-900" -->
                            <a href="#" class="bg-gray-100 text-gray-900 flex items-center px-3 py-2 text-sm font-medium rounded-md" aria-current="page">
                                <span class="truncate">Account</span>
                            </a>

                            <a href="#" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                <span class="truncate">Persoonlijk</span>
                            </a>

                            <a href="#" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                <span class="truncate">Voorkeuren</span>
                            </a>
                        </nav>
                    </div>
                </div>
            </section>
        </div>

        <div class="grid grid-cols-1 gap-4 lg:col-span-2">
            <section aria-labelledby="section-2-title">
                <h2 class="sr-only" id="section-2-title">Account gegevens</h2>
                <div class="rounded-lg bg-white overflow-hidden shadow">
                    <div class="bg-white px-4 py-5 border-b border-gray-200 sm:px-6">
                            <div class="md:grid md:grid-cols-3 md:gap-6">
                                <div class="md:col-span-1">
                                    <div class="px-4 sm:px-0">
                                        <h3 class="text-lg font-medium leading-6 text-gray-900">Account</h3>
                                        <p class="mt-1 text-sm text-gray-600">
                                            Dit zijn je account gegevens. Hiermee kun je inloggen op de website.
                                        </p>
                                        <p class="mt-1 text-sm text-gray-600">
                                            Deze gegevens worden niet getoond en/of gedeeld met mensen buiten de
                                            vereniging.
                                        </p>
                                    </div>
                                </div>
                                <div class="mt-5 md:col-span-2 md:mt-0">
                                    <form action="{{ route('my-merwestad.my-account') }}" method="POST">
                                        @method('PUT')
                                        @csrf

                                        <div class="shadow sm:overflow-hidden sm:rounded-md">
                                            <div class="space-y-6 bg-white px-4 py-5 sm:p-6">

                                                <x-form.email-input name="email" label="E-mailadres"
                                                                    :required="true" value="{{ $model->email() }}"
                                                                    description="Dit e-mailadres wordt gebruikt om
                                                                        e-mails vanuit de website naar te sturen en
                                                                        om in te loggen."></x-form.email-input>

                                                <div class="space-y-1">
                                                    <label for="password" class="block text-sm font-medium text-slate-700">
                                                        Wachtwoord
                                                    </label>
                                                    <div class="mt-1">
                                                        <input id="password" name="password" type="password"
                                                               class="appearance-none block w-full px-3 py-2 border border-slate-300 rounded-md shadow-sm placeholder-slate-400 focus:outline-none focus:ring-blue-400 focus:border-blue-500 sm:text-sm">
                                                    </div>
                                                    <p class="mt-2 text-xs italic text-slate-500" id="password-description">
                                                        Dit veld alleen invullen zodra je je wachtwoord wilt wijzigen.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                                                <button type="submit"
                                                        class="inline-flex justify-center rounded-md border border-transparent bg-blue-500 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-offset-2">
                                                    Gegevens opslaan
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
        </div>

    </div>




@endsection
