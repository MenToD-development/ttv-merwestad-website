<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  @yield('seo')

  <link href="{{ mix('/css/app.css') }}" type="text/css" rel="stylesheet">
</head>
<body>
  <div id="website" class="bg-white min-w-full min-h-screen">
    <div class="bg-white w-full h-24 shadow-sm">
      <div class="container mx-auto flex items-center justify-between h-full">
        <a class="inline-block" href="{{ route('home') }}">
          <span class="font-serif font-bold text-xl text-black">t.t.v.</span>
          <span class="font-serif font-bold text-3xl text-primary-normal">Merwestad</span>
        </a>
        <a class="bg-primary-normal hover:bg-primary-hover h-12 inline-flex items-center justify-center px-4 rounded" href="mailto:webmaster@ttvmerwestad.nl">
          <i class="fas fa-paper-plane text-white mr-3"></i>
          <span class="inline-block font-sans font-bold text-lg text-white">Stuur een e-mail</span>
        </a>
      </div>
    </div>
      @yield('content')
  </div>
  <script type="text/javascript" src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
