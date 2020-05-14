<a {{ $attributes->merge(['class' => 'bg-primary-normal hover:bg-primary-hover h-12 inline-flex items-center justify-center px-4 rounded']) }}>
    <i class="fas fa-paper-plane text-white mr-3"></i>
    <span class="inline-block font-sans font-bold text-lg text-white">
        {{ $slot }}
    </span>
</a>
