<div class="mr-4">

@if ($active())
  <a class="font-serif text-base text-primary-normal"
     href="{{ route($routeName) }}">
    {{ $slot }}
  </a>
@else
  <a class="font-serif text-base text-black hover:text-primary-normal"
     href="{{ route($routeName) }}">
    {{ $slot }}
  </a>
@endif

</div>
