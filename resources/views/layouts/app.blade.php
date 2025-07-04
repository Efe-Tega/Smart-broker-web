<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') {{ config('app.name') }}</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="bg-gray-50">
    @yield('auth-content')

    @if (session('toast'))
        {{-- <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                background: '#1f2937',
                color: '#f9fafb',
                iconColor: '#10b981',
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: '{{ session('toast')['type'] }}',
                title: '{{ session('toast')['message'] }}'
            })
        </script> --}}

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
