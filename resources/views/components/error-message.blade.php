@if (session('error'))
    <div id="error-message" class="bg-red-500 text-white px-4 py-2 rounded-md opacity-0 transition-opacity duration-300">
        {{ session('error') }}
    </div>

    <script>
        // Fade in when the message appears
        const errorMessage = document.getElementById('error-message');

        setTimeout(() => {
            errorMessage.classList.remove('opacity-0');
            errorMessage.classList.add('opacity-100');
        }, 10);

        // Fade out and remove after few seconds
        setTimeout(() => {
            errorMessage.classList.remove('opacity-100');
            errorMessage.classList.add('opacity-0');
        }, 5000)
    </script>
@endif
