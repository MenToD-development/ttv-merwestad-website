@error($name)
<div>
    <label for="{{ $id }}" class="block text-sm font-medium text-slate-700">
        {{ $label }}
    </label>
    <div class="mt-1 relative rounded-md shadow-sm">
        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
            <x-icons.mail class="h-5 w-5 text-red-500"></x-icons.mail>
        </div>
        <input type="email" name="{{ $name }}" id="{{ $id }}"
               class="block w-full pr-10 border-red-300 text-red-900 placeholder-red-300 pl-10 focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm rounded-md"
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
        <div class="mt-1 relative rounded-md shadow-sm">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <x-icons.mail class="h-5 w-5 text-slate-400"></x-icons.mail>
            </div>
            <input id="{{ $id }}" name="{{ $name }}" type="email"
                   autocomplete="{{ $autoComplete }}" {{ $required ? 'required' : '' }}
                   placeholder="{{ $placeholder }}" value="{{ old($name) }}"
                   class="focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 sm:text-sm border-slate-300 rounded-md">
        </div>
    </div>
@enderror
