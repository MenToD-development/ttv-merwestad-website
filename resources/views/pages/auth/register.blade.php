@extends($model->path, ['title' => $model->pageTitle, 'image' => $model->image])

@section('content')

    <div>
        <a class="flex justify-start content-center" href="{{ route('welcome') }}">
            <x-icons.table-tennis class="w-8 h-8 mr-3 fill-blue-500" />
            <span class="pt-1 inline-block font-serif text-slate-700 font-black text-lg">
                {{ $model->applicationName }}
            </span>
        </a>
        <h2 class="mt-6 text-3xl tracking-tight font-bold text-slate-900">
            Aanmelden bij Merwestad
        </h2>
        <p class="mt-2 text-sm text-slate-600">
            Of heb je al een account?
            <a href="{{ route('my-merwestad.login') }}" class="font-medium text-blue-500 hover:text-blue-400">
                Log dan hier in.
            </a>
        </p>
    </div>

    <div class="rounded-md bg-blue-50 p-4 mt-6">
        <div class="flex">
            <div class="flex-shrink-0">
                <x-icons.information-circle class="h-5 w-5 text-blue-500"></x-icons.information-circle>
            </div>
            <div class="ml-3 flex-1 md:flex md:justify-between">
                <p class="text-sm text-blue-700">
                    Deze aanmelding geeft niet direct een account. Wij zullen eerst je aanmelding controleren en waar
                    nodig contact met je opnemen via je e-mailadres.
                </p>
            </div>
        </div>
    </div>


    <div class="mt-6">
        <form action="{{ route('my-merwestad.register') }}" method="POST" class="space-y-6">
            @csrf

            <x-form.text-input label="Je naam" name="name" id="name" :required="true"></x-form.text-input>

            <x-form.email-input label="Je e-mailadres" name="email" id="email"
                                :required="true"></x-form.email-input>

            <x-form.textarea-input label="Opmerking(en)" name="notice" id="notice"></x-form.textarea-input>

            <div>
                <button type="submit"
                        class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-500 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-400">
                    Aanmelden
                </button>
            </div>
        </form>
    </div>

    <div class="mt-2 mb-10 mx-auto">
        <p class="mt-2 text-sm text-slate-600">
            Of
            <a href="{{ route('welcome') }}" class="font-medium text-blue-500 hover:text-blue-400">
                ga terug naar de website.
            </a>
        </p>
    </div>
@endsection
