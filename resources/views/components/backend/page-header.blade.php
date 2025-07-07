@props([
    'title' => '',
    'desc' => '',
])

<div class="mb-8">
    <h1 class="text-2xl font-bold text-gray-800 dark:text-dark-text-primary">
        {{ $title }}
    </h1>
    <p class="text-gray-600 dark:text-dark-text-secondary mt-1">
        {{ $desc }}
    </p>
</div>
