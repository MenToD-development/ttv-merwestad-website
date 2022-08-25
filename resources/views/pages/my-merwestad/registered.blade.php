@extends($model->path, [
    'title' => $model->pageTitle,
    'image' => $model->image,
])

@section('content')
    <div class="pb-20">
        <a class="flex justify-start content-center" href="{{ route('welcome') }}">
            <x-icons.table-tennis class="w-8 h-8 mr-3 fill-blue-500" />
            <span class="pt-1 inline-block font-serif text-slate-700 font-black text-lg">
                {{ $model->applicationName }}
            </span>
        </a>
        <h2 class="mt-12 text-3xl tracking-tight font-bold text-slate-900">
            @if (session()->has('name'))
                Bedankt {{ session()->get('name') }},
            @else
                Bedankt!
            @endif
        </h2>
        <p class="mt-6 text-md text-slate-600">
            We hebben je aanmelding met succes ontvangen en zullen deze zo snel mogelijk verwerken.
        </p>
        <p class="mt-6 text-sm text-slate-600">
            U wordt binnen een aantal seconden terug gestuurd naar de website.
        </p>
        <script>
            setTimeout(function() {
                window.location.href = "{{ config('app.url') }}"
            }, 6000); // 10 second
        </script>
    </div>
@endsection
