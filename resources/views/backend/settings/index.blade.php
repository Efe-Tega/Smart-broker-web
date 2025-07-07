@extends('layouts.backend.app')

@section('title', 'Settings')

@section('content')
    <!-- Main Content -->
    <div class="w-full lg:ml-64 p-8">
        <x-backend.page-header title="Account Settings" desc="Manage your account preferences and security settings" />

        <!-- Settings Sections -->
        <div class="grid grid-cols-1 gap-8">
            <!-- Profile Settings -->
            <div>
                <div class="bg-white dark:bg-dark-bg-secondary rounded-lg shadow p-6 mb-8">
                    <h2 class="text-lg font-semibold text-gray-900 dark:text-dark-text-primary mb-6">
                        Profile Information
                    </h2>
                    <div class="space-y-6">
                        <div class="flex items-center">
                            <div class="relative">
                                <img src="https://ui-avatars.com/api/?name=John+Doe" alt="Profile"
                                    class="h-20 w-20 rounded-full" />
                                <button
                                    class="absolute bottom-0 right-0 bg-blue-600 text-white rounded-full p-2 hover:bg-blue-700">
                                    <i class="fas fa-camera"></i>
                                </button>
                            </div>
                            <div class="ml-6">
                                <h3 class="text-lg font-medium text-gray-900 dark:text-dark-text-primary">
                                    John Doe
                                </h3>
                                <p class="text-gray-500 dark:text-dark-text-secondary">
                                    Member since Feb 2024
                                </p>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label
                                    class="block text-sm font-medium text-gray-700 dark:text-dark-text-secondary mb-2">First
                                    Name</label>
                                <input type="text" value="John"
                                    class="w-full border border-gray-300 dark:border-gray-600 bg-white dark:bg-dark-bg-primary text-gray-900 dark:text-dark-text-primary rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                            </div>
                            <div>
                                <label
                                    class="block text-sm font-medium text-gray-700 dark:text-dark-text-secondary mb-2">Last
                                    Name</label>
                                <input type="text" value="Doe"
                                    class="w-full border border-gray-300 dark:border-gray-600 bg-white dark:bg-dark-bg-primary text-gray-900 dark:text-dark-text-primary rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                            </div>
                            <div>
                                <label
                                    class="block text-sm font-medium text-gray-700 dark:text-dark-text-secondary mb-2">Email
                                    Address</label>
                                <input type="email" value="john.doe@example.com"
                                    class="w-full border border-gray-300 dark:border-gray-600 bg-white dark:bg-dark-bg-primary text-gray-900 dark:text-dark-text-primary rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                            </div>
                            <div>
                                <label
                                    class="block text-sm font-medium text-gray-700 dark:text-dark-text-secondary mb-2">Phone
                                    Number</label>
                                <input type="tel" value="+1 (555) 123-4567"
                                    class="w-full border border-gray-300 dark:border-gray-600 bg-white dark:bg-dark-bg-primary text-gray-900 dark:text-dark-text-primary rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-dark-text-secondary mb-2">Time
                                Zone</label>
                            <select
                                class="w-full border border-gray-300 dark:border-gray-600 bg-white dark:bg-dark-bg-primary text-gray-900 dark:text-dark-text-primary rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option value="UTC-8">Pacific Time (PT)</option>
                                <option value="UTC-5">Eastern Time (ET)</option>
                                <option value="UTC+0">UTC</option>
                                <option value="UTC+1">Central European Time (CET)</option>
                            </select>
                        </div>
                        <div class="flex justify-end">
                            <button class="bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition-colors">
                                Save Changes
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Security Settings -->
                <div class="bg-white dark:bg-dark-bg-secondary rounded-lg shadow p-6">
                    <h2 class="text-lg font-semibold text-gray-900 dark:text-dark-text-primary mb-6">
                        Security Settings
                    </h2>
                    <div class="space-y-6">
                        <div>
                            <h3 class="text-sm font-medium text-gray-700 dark:text-dark-text-secondary mb-2">
                                Two-Factor Authentication
                            </h3>
                            <div
                                class="flex items-center justify-between p-4 bg-gray-50 dark:bg-dark-bg-primary rounded-lg">
                                <div>
                                    <p class="text-sm text-gray-600 dark:text-dark-text-secondary">
                                        Secure your account with 2FA
                                    </p>
                                    <p class="text-xs text-gray-500 dark:text-dark-text-secondary mt-1">
                                        Choose between authenticator app or email authentication
                                    </p>
                                </div>
                                <button onclick="window.location.href='/2fa-setup.html'"
                                    class="text-blue-600 dark:text-blue-400 hover:text-blue-700 dark:hover:text-blue-300">
                                    Configure
                                </button>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-sm font-medium text-gray-700 dark:text-dark-text-secondary mb-2">
                                Change Password
                            </h3>
                            <div class="space-y-4">
                                <input type="password" placeholder="Current Password"
                                    class="w-full border border-gray-300 dark:border-gray-600 bg-white dark:bg-dark-bg-primary text-gray-900 dark:text-dark-text-primary rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                                <input type="password" placeholder="New Password"
                                    class="w-full border border-gray-300 dark:border-gray-600 bg-white dark:bg-dark-bg-primary text-gray-900 dark:text-dark-text-primary rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                                <input type="password" placeholder="Confirm New Password"
                                    class="w-full border border-gray-300 dark:border-gray-600 bg-white dark:bg-dark-bg-primary text-gray-900 dark:text-dark-text-primary rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                            </div>
                        </div>
                        <div class="flex justify-end">
                            <button class="bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition-colors">
                                Update Password
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
