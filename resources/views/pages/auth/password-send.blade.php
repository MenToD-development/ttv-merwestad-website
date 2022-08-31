@extends($path, [
    'title' => $pageTitle,
    'image' => $image,
    'applicationName' => $applicationName,
])

@section('content')
    <div class="pb-20">
        <a class="flex justify-start content-center" href="{{ route('welcome') }}">
            <x-icons.table-tennis class="w-8 h-8 mr-3 fill-blue-500" />
            <span class="pt-1 inline-block font-serif text-slate-700 font-black text-lg">
                {{ $applicationName }}
            </span>
        </a>
        <h2 class="mt-12 text-3xl tracking-tight font-bold text-slate-900">
            Verzonden!
        </h2>
        <p class="mt-6 text-md text-slate-600">
            Je ontvangt binnen enkele minuten een e-mail met daarin een nieuw wachtwoord
            waarmee je weer kunt inloggen.
        </p>
        <p class="mt-6 text-sm text-slate-600">
            U wordt binnen een aantal seconden terug gestuurd naar login pagina.
        </p>
        <script>
            setTimeout(function() {
                window.location.href = "{{ route('my-merwestad.login') }}"
            }, 6000); // 10 second
        </script>
    </div>
@endsection
