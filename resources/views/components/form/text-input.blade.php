@error($name)
<div>
    <label for="{{ $id }}" class="block text-sm font-medium text-slate-700">
        {{ $label }}
    </label>
    <div class="mt-1 relative rounded-md shadow-sm">
        <input type="text" name="{{ $name }}" id="{{ $id }}"
               class="block w-full pr-10 border-red-300 text-red-900 placeholder-red-300 focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm rounded-md"
               placeholder="{{ $placeholder }}" value="{{ old($name) }}" aria-invalid="true"
               autocomplete="{{ $autoComplete }}"
               aria-describedby="{{ $id }}-error" {{ $required ? 'required' : '' }}>
        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
            <x-icons.exclamation class="h-5 w-5 text-red-500"></x-icons.exclamation>
        </div>
    </div>
    <p class="mt-2 text-sm text-red-600" id="{{ $id }}-error">
        {{ __($message) }}
    </p>
</div>
@else
    <div>
        <label for="{{ $id }}" class="block text-sm font-medium text-slate-700">
            {{ $label }}
        </label>
        <div class="mt-1">
            <input id="{{ $id }}" name="{{ $name }}" type="text"
                   autocomplete="{{ $autoComplete }}" {{ $required ? 'required' : '' }}
                   placeholder="{{ $placeholder }}"  value="{{ old($name) }}"
                   class="appearance-none block w-full px-3 py-2 border border-slate-300 rounded-md shadow-sm placeholder-slate-400 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
        </div>
    </div>
    @enderror
