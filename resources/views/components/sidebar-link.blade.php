@props([
    'linkUrl' => '',
    'linkText' => '',
    'icon' => '',
])


<a href="{{ $linkUrl }}" {{ $attributes->merge(['class' => 'flex items-center p-3  rounded-lg']) }}>
    <i class="fas {{ $icon }} w-6"></i>
    <span>{{ $linkText }}</span>
</a>
