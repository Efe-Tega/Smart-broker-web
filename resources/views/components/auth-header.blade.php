@props([
    'title' => '',
    'linkText' => '',
    'linkUrl' => '',
    'linkLabel' => '',
])

<div>
    <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
        {{ $title }}
    </h2>

    @if ($linkText && $linkUrl && $linkLabel)
        <p class="mt-2 text-center text-sm text-gray-600">
            {{ $linkText }}
            <a href="{{ $linkUrl }}" class="font-medium text-blue-600 hover:text-blue-500">
                {{ $linkLabel }}
            </a>
        </p>
    @endif
</div>
