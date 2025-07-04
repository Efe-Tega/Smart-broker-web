@extends('layouts.app')

@section('title', 'User Registration')

@section('auth-content')
    <div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">
            <x-auth-header title="Create your account" linkText="Already have an account?" linkUrl="{{ url('/login') }}"
                linkLabel="Sign in" />

            <form class="mt-8 space-y-6" action="{{ route('register') }}" method="POST">
                @csrf

                <div class="rounded-md shadow-sm -space-y-px">
                    <x-input id="user-name" name="username" placeholder="Username" rounded="top" required />
                    <x-input id="email-address" name="email" type="email" placeholder="Email address" required />
                    <x-input id="phone" name="phone" type="tel" placeholder="Phone Number" required />

                    <div class="relative w-full">
                        <x-input id="password" class="pr-10" name="password" type="password" placeholder="Password"
                            required />

                        <button type="button"
                            class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-500 hover:text-gray700 focus:outline-none"
                            id="togglePassword" aria-label="Toggle password visibility">
                            <!-- Eye icon -->
                            <img src="{{ asset('backend/assets/svg/eye-on.svg') }}" id="eyeIcon" class="h-4 w-4"
                                alt="Show password">
                            <img src="{{ asset('backend/assets/svg/eye-off.svg') }}" id="eyeOffIcon" class="h-4 w-4 hidden"
                                alt="Hide password">
                        </button>
                    </div>
                    <x-input id="confirm-password" name="password_confirmation" type="password" rounded="bottom"
                        placeholder="Confirm Password" required />
                </div>

                <div class="flex items-center">
                    <input id="terms" name="terms" type="checkbox" required
                        class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                    <label for="terms" class="ml-2 block text-sm text-gray-900">
                        I agree to the
                        <a href="#" class="text-blue-600 hover:text-blue-500">Terms of Service</a>
                        and
                        <a href="#" class="text-blue-600 hover:text-blue-500">Privacy Policy</a>
                    </label>
                </div>

                <x-submit-auth-button icon="fa-user-plus">
                    Create Account
                </x-submit-auth-button>
            </form>

            <div class="mt-6">
                <x-divider>Or Continue with</x-divider>

                <div class="mt-6 grid grid-cols-2 gap-3">
                    <x-social-button provider="google" icon="fab fa-google" text="Google" />
                    <x-social-button provider="apple" icon="fab fa-apple" text="Apple" />
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('togglePassword').addEventListener('click', function() {
            const toggleButton = document.getElementById('togglePassword');
            const passwordInput = document.getElementById('password');
            const eyeIcon = document.getElementById('eyeIcon');
            const eyeOffIcon = document.getElementById('eyeOffIcon');

            toggleButton.addEventListener('click', function() {

                // Toggle input type
                const isPassword = passwordInput.type === 'password';
                passwordInput.type = isPassword ? 'text' : 'password';

                // Toggle icons
                eyeIcon.classList.toggle('hidden');
                eyeOffIcon.classList.toggle('hidden');

                // Update aria-label for accessibility
                this.setAttribute('aria-label', isPassword ? 'Hide password' : 'Show password');
            });
        });
    </script>
@endsection
