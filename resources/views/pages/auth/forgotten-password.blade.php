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
            Je wachtwoord vergeten?
        </h2>
        <p class="mt-2 text-sm text-slate-600">
            Vraag hier een nieuw wachtwoord aan.
        </p>
    </div>

    <div class="mt-8">
        <div class="mt-6">
            <form action="{{ route('my-merwestad.forgotten-password') }}" method="POST" class="space-y-6">
                @csrf

                <x-form.email-input name="email" label="Je e-mailadres"
                                    :required="true"></x-form.email-input>

                <div>
                    <button type="submit"
                            class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-500 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-400">
                        Nieuw wachtwoord aanvragen
                    </button>
                </div>
            </form>
        </div>
        <p class="mt-4 mb-8 text-center text-sm text-slate-600">
            Of ga
            <a href="{{ route('my-merwestad.login') }}" class="font-medium text-blue-500 hover:text-blue-400">
                terug om in te loggen.
            </a>
        </p>
    </div>
@endsection
