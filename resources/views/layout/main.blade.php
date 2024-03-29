<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  @yield('meta')

  <link href="{{ mix('/css/app.css') }}" type="text/css" rel="stylesheet">

  @yield('styling')

</head>
<body>
  <div id="website" :class="appClasses">
    @include('layout.partial.navigation')

    <div class="flex-grow bg-white pt-16 xl:pt-20 xxl:pt-24">
      @yield('content')
    </div>

    <aside class="menu">
      @include('layout.partial.mobile-menu')
    </aside>

    <footer class="w-full bg-primary-normal">
      @include('layout.partial.footer')


      @include('layout.partial.copyright')
    </footer>

  </div>

  <script type="text/javascript" src="{{ mix('/js/app.js') }}"></script>
  @yield('scripts')
</body>
</html>
