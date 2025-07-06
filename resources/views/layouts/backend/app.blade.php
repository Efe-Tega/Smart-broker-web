<!DOCTYPE html>
<html lang="en" class="light">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard - CryptoBroker</title>
    @vite('resources/css/app.css')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="{{ asset('backend/assets/styles/main.css') }}" />
</head>

<body class="bg-gray-50 dark:bg-dark-bg-primary dark:text-dark-text-primary transition-colors duration-200">
    <!-- Navigation -->
    @include('layouts.backend.partials.navigation')

    <div class="flex pt-16">
        <!-- Sidebar -->
        @include('layouts.backend.partials.sidebar')

        <!-- Overlay -->
        <div id="overlay" class="fixed inset-0 bg-black opacity-50 z-20 hidden lg:hidden"></div>

        <!-- Main Content -->
        @yield('content')
    </div>

    @vite('resources/js/backend.js')
</body>

</html>
