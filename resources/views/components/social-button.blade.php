@props([
    'provider' => '',
    'icon' => '',
    'text' => '',
])

<a href="#"
    {{ $attributes->merge(['class' => 'w-full inline-flex items-center justify-center py-2 px-4 border border-gray-300 rounded-md shadow-sm bg-white text-sm font-medium text-gray-500 hover:bg-gray-50']) }}>
    <i class="{{ $icon }}"></i>
    <span class="ml-2">{{ $text }}</span>
</a>
