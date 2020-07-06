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


      <div class="w-full bg-white">
        <div class="container mx-auto px-4 lg:px-8">
          <div class="flex flex-col md:flex-row">
            <div class="w-full md:w-1/3 h-16 flex items-center justify-start">
              <span class="block w-full text-center md:w-auto md:inline-block md:text-left
              font-sans text-sm
                text-black">
                &copy; 2020 t.t.v. Merwestad
              </span>
            </div>
            <div class="w-full md:w-1/3 h-16 flex items-center justify-center">
              <a class="inline-block font-sans text-sm text-black px-3" href="#">
                Disclaimer
              </a>
              <a class="inline-block font-sans text-sm text-black px-3" href="#">
                Privacyverklaring
              </a>
              <a class="inline-block font-sans text-sm text-black px-3" href="#">
                Cookies
              </a>
            </div>
            <div class="w-1/3"></div>
          </div>
        </div>
      </div>
    </footer>

  </div>

  <script type="text/javascript" src="{{ mix('/js/app.js') }}"></script>
  @yield('scripts')
</body>
</html>
