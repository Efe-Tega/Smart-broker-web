@props(['icon' => ''])

<div>
    <button type="submit"
        class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
        <span class="absolute left-0 inset-y-0 flex items-center pl-3">
            <i class="fas {{ $icon }} text-blue-500 group-hover:text-blue-400"></i>
        </span>
        {{ $slot }}
    </button>
</div>
