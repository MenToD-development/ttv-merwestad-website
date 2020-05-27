<li class="block flex justify-between items-center py-2 md:py-4 px-3 md:px-6 mb-2 bg-white
           rounded shadow">
  <div>
    <span class="inline-block w-5 text-base text-black font-sans font-bold mr-2">
      {{ $number }}.
    </span>
    <span class="text-base md:text-lg lg:text-base xl:text-lg text-black font-sans">
      {{ $slot }}
    </span>
  </div>
  <div class="bg-primary-normal py-1 px-4 rounded-full shadow-inner">
    <span class="text-base text-white font-sans font-bold">
      {{ $percentage  }}%
    </span>
  </div>
</li>
