
<div {{ $attributes }}>

@if ($active())
  <a class="font-serif text-base xl:text-lg text-primary-normal"
     href="{{ route($routeName) }}">
    {{ $slot }}
  </a>
@else
  <a class="font-serif text-base xl:text-lg text-black hover:text-primary-normal transition-colors
            duration-75 ease-in-out"
     href="{{ route($routeName) }}">
    {{ $slot }}
  </a>
@endif

</div>
