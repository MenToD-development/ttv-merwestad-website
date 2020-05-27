@if ($merwestad)
<div {{ $attributes->merge(['class' => 'bg-white flex justify-between items-center pl-4 pr-6 py-4 rounded shadow border-l-8 border-primary-normal border-solid']) }}>
@else
<div {{ $attributes->merge(['class' => 'bg-white flex justify-between items-center px-6 py-4 rounded shadow']) }}>
@endif
  <div>
    <span class="block text-primary-normal text-opacity-75 text-xs md:text-sm lg:text-xs xl:text-sm font-sans mb-2">
      {{ $date }}
    </span>
    <span class="block text-black text-sm md:text-lg lg:text-base xl:text-lg font-sans font-bold">
      {{ $teams }}
    </span>
  </div>
  <div class="inline-block bg-primary-normal px-4 py-2 rounded shadow-inner">
    <span class="text-base md:text-lg lg:text-base xl:text-lg text-white font-sans font-bold">
      {{ $result }}
    </span>
  </div>
</div>
