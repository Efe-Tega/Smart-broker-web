@props([
    'id' => '',
    'name' => '',
    'type' => 'text',
    'placeholder' => '',
    'required' => false,
    'autocomplete' => '',
    'errorKey' => null,
    'value' => '',
    'rounded' => 'none', // none, top, bottom, both
])

@php
    $baseClasses =
        'appearance-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm';

    $roundedClasses = [
        'none' => '',
        'top' => 'rounded-t-md',
        'bottom' => 'rounded-b-md',
        'both' => 'rounded-md',
    ][$rounded];

    $classes = "$baseClasses $roundedClasses";
    $errorKey = $errorKey ?? $name;
@endphp

<div>
    <label for="{{ $id }}" class="sr-only">{{ $placeholder }}</label>
    <input id="{{ $id }}" name="{{ $name }}" type="{{ $type }}" value="{{ old($name) }}"
        @if ($required) required @endif
        @if ($autocomplete) autocomplete="{{ $autocomplete }}" @endif
        {{ $attributes->merge(['class' => $classes]) }} placeholder="{{ $placeholder }}">

    @if ($errors->has($errorKey))
        <span class="mt-1 text-sm text-red-600">{{ $errors->first($errorKey) }}</span>
    @endif
</div>
