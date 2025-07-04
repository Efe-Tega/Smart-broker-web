@extends('layouts.app')

@section('title', 'User Login')

@section('auth-content')
    <div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">
            <x-auth-header title="Welcome back" linkText="Or" linkUrl="{{ url('/register') }}"
                linkLabel="create a new account" />

            <form class="mt-8 space-y-6" action="{{ route('user.login') }}" method="POST">
                @csrf

                <x-error-message />

                <div class="rounded-md shadow-sm -space-y-px">
                    <x-input id="email-address" name="email" type="email" placeholder="Email address" required
                        rounded="top" />

                    <x-input id="password" name="password" type="password" placeholder="Password" required
                        rounded="bottom" />
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input id="remember-me" name="remember-me" type="checkbox"
                            class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <label for="remember-me" class="ml-2 block text-sm text-gray-900">
                            Remember me
                        </label>
                    </div>

                    <div class="text-sm">
                        <a href="#" class="font-medium text-blue-600 hover:text-blue-500">
                            Forgot your password?
                        </a>
                    </div>
                </div>

                <x-submit-auth-button icon="fa-lock"> Sign in </x-submit-auth-button>
            </form>

            <div class="mt-6">
                <x-divider> Or continue with </x-divider>

                <div class="mt-6 grid grid-cols-2 gap-3">
                    <x-social-button provider="google" icon="fab fa-google" text="Google" />
                    <x-social-button provider="apple" icon="fab fa-apple" text="Apple" />
                </div>
            </div>
        </div>
    </div>
@endsection
