<!DOCTYPE html>
<html lang="en" class="light">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf_token" content="{{ csrf_token() }}">
    <title>@yield('title') {{ config('app.name') }}</title>
    @vite('resources/css/app.css')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- <link rel="stylesheet" href="{{ asset('backend/assets/styles/main.css') }}" /> --}}
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

    @if (session('toast'))
        <script>
            const toastStyles = {
                success: {
                    background: '#10b981',
                    color: '#ffffff',
                    iconColor: '#ffffff',
                    timer: 4000
                },
                error: {
                    background: '#ef4444',
                    color: '#ffffff',
                    iconColor: '#ffffff',
                    timer: 5000
                },
                warning: {
                    background: '#f59e0b',
                    color: '#ffffff',
                    iconColor: '#ffffff',
                    timer: 5000
                },
                info: {
                    background: '#3b82f6',
                    color: '#ffffff',
                    iconColor: '#ffffff',
                    timer: 5000
                },
                question: {
                    background: '#8b5cf6',
                    color: '#ffffff',
                    iconColor: '#ffffff',
                    timer: 5000
                }
            };

            // Get the toast type from session
            const toastType = '{{ session('toast')['type'] }}';
            const toastMessage = '{{ session('toast')['message'] }}';
            const style = toastStyles[toastType] || toastStyles.info;

            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: style.timer,
                timerProgressBar: true,
                background: style.background,
                color: style.color,
                iconColor: style.iconColor,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer);
                    toast.addEventListener('mouseleave', Swal.resumeTimer);
                }
            });

            Toast.fire({
                icon: toastType,
                title: toastMessage,
                iconHtml: toastType === 'success' ? '<i class="fas fa-check"></i>' : toastType === 'error' ?
                    '<i class="fas fa-times"></i>' : '<i class="fas fa-info"></i>'
            });

            @if (session('redirect'))
                setTimeout(() => {
                    window.location.href = "{{ session('redirect.url') }}";
                }, {{ session('redirect.delay') }});
            @endif
        </script>
    @endif

</body>

</html>
