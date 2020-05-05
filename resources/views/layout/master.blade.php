<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  @yield('seo')

  <link href="{{ mix('/css/app.css') }}" type="text/css" rel="stylesheet">
</head>
<body>
  <div id="website" class="flex flex-col bg-white min-w-full min-h-screen">
    @include('layout.partials.navigation')

    <div class="flex-grow bg-white pt-24">
      @yield('content')
    </div>

    <footer class="w-full bg-primary-normal py-6">
      <div class="container mx-auto">

      </div>
    </footer>
  </div>
  <script type="text/javascript" src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
