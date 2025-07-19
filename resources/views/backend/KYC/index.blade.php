@extends('layouts.backend.app')

@section('title', 'KYC verification')

@section('content')
    <!-- Main Content -->
    <div class="w-full lg:ml-64 p-8">
        <!-- Page Header -->
        <div class="mb-8">
            <h1 class="text-2xl font-bold text-gray-800 dark:text-dark-text-primary">KYC Verification</h1>
            <p class="text-gray-600 dark:text-dark-text-secondary mt-1">Complete the form below to verify your identity for
                compliance.</p>
        </div>
        <div class="grid grid-cols-1 gap-8">
            <div>
                <div class="bg-white dark:bg-dark-bg-secondary rounded-lg shadow p-6">
                    <h2 class="text-lg font-semibold text-gray-900 dark:text-dark-text-primary mb-6">KYC Information</h2>
                    <form class="space-y-6" action="#" method="POST" enctype="multipart/form-data">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label
                                    class="block text-sm font-medium text-gray-700 dark:text-dark-text-secondary mb-2">Full
                                    Name</label>
                                <input name="full-name" type="text" required
                                    class="w-full border border-gray-300 dark:border-gray-600 bg-white dark:bg-dark-bg-primary text-gray-900 dark:text-dark-text-primary rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                    placeholder="Full Name" />
                            </div>
                            <div>
                                <label
                                    class="block text-sm font-medium text-gray-700 dark:text-dark-text-secondary mb-2">Date
                                    of Birth</label>
                                <input name="dob" type="date" required
                                    class="w-full border border-gray-300 dark:border-gray-600 bg-white dark:bg-dark-bg-primary text-gray-900 dark:text-dark-text-primary rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                            </div>
                            <div>
                                <label
                                    class="block text-sm font-medium text-gray-700 dark:text-dark-text-secondary mb-2">Nationality</label>
                                <input name="nationality" type="text" required
                                    class="w-full border border-gray-300 dark:border-gray-600 bg-white dark:bg-dark-bg-primary text-gray-900 dark:text-dark-text-primary rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                    placeholder="Nationality" />
                            </div>
                            <div>
                                <label
                                    class="block text-sm font-medium text-gray-700 dark:text-dark-text-secondary mb-2">Phone
                                    Number</label>
                                <input name="phone" type="tel" required
                                    class="w-full border border-gray-300 dark:border-gray-600 bg-white dark:bg-dark-bg-primary text-gray-900 dark:text-dark-text-primary rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                    placeholder="Phone Number" />
                            </div>
                            <div class="md:col-span-2">
                                <label
                                    class="block text-sm font-medium text-gray-700 dark:text-dark-text-secondary mb-2">Email
                                    Address</label>
                                <input name="email" type="email" required
                                    class="w-full border border-gray-300 dark:border-gray-600 bg-white dark:bg-dark-bg-primary text-gray-900 dark:text-dark-text-primary rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                    placeholder="Email Address" />
                            </div>
                            <div class="md:col-span-2">
                                <label
                                    class="block text-sm font-medium text-gray-700 dark:text-dark-text-secondary mb-2">Address</label>
                                <input name="address" type="text" required
                                    class="w-full border border-gray-300 dark:border-gray-600 bg-white dark:bg-dark-bg-primary text-gray-900 dark:text-dark-text-primary rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                    placeholder="Street Address" />
                            </div>
                            <div>
                                <label
                                    class="block text-sm font-medium text-gray-700 dark:text-dark-text-secondary mb-2">City</label>
                                <input name="city" type="text" required
                                    class="w-full border border-gray-300 dark:border-gray-600 bg-white dark:bg-dark-bg-primary text-gray-900 dark:text-dark-text-primary rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                    placeholder="City" />
                            </div>
                            <div>
                                <label
                                    class="block text-sm font-medium text-gray-700 dark:text-dark-text-secondary mb-2">Postal
                                    Code</label>
                                <input name="postal-code" type="text" required
                                    class="w-full border border-gray-300 dark:border-gray-600 bg-white dark:bg-dark-bg-primary text-gray-900 dark:text-dark-text-primary rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                    placeholder="Postal Code" />
                            </div>
                            <div class="md:col-span-2">
                                <label
                                    class="block text-sm font-medium text-gray-700 dark:text-dark-text-secondary mb-2">Country</label>
                                <input name="country" type="text" required
                                    class="w-full border border-gray-300 dark:border-gray-600 bg-white dark:bg-dark-bg-primary text-gray-900 dark:text-dark-text-primary rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                    placeholder="Country" />
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-dark-text-secondary mb-2">ID
                                    Type</label>
                                <select name="id-type" required
                                    class="w-full border border-gray-300 dark:border-gray-600 bg-white dark:bg-dark-bg-primary text-gray-900 dark:text-dark-text-primary rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    <option value="">Select ID Type</option>
                                    <option value="passport">Passport</option>
                                    <option value="national-id">National ID</option>
                                    <option value="driver-license">Driver's License</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-dark-text-secondary mb-2">ID
                                    Number</label>
                                <input name="id-number" type="text" required
                                    class="w-full border border-gray-300 dark:border-gray-600 bg-white dark:bg-dark-bg-primary text-gray-900 dark:text-dark-text-primary rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                    placeholder="ID Number" />
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-dark-text-secondary mb-2">ID
                                    Expiry Date</label>
                                <input name="id-expiry" type="date" required
                                    class="w-full border border-gray-300 dark:border-gray-600 bg-white dark:bg-dark-bg-primary text-gray-900 dark:text-dark-text-primary rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                            </div>
                            <div>
                                <label
                                    class="block text-sm font-medium text-gray-700 dark:text-dark-text-secondary mb-2">Upload
                                    ID Document</label>
                                <input name="id-upload" type="file" accept="image/*,application/pdf" required
                                    class="w-full text-gray-900 dark:text-dark-text-primary border border-gray-300 dark:border-gray-600 bg-white dark:bg-dark-bg-primary rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                            </div>
                            <div>
                                <label
                                    class="block text-sm font-medium text-gray-700 dark:text-dark-text-secondary mb-2">Upload
                                    Selfie</label>
                                <input name="selfie-upload" type="file" accept="image/*" required
                                    class="w-full text-gray-900 dark:text-dark-text-primary border border-gray-300 dark:border-gray-600 bg-white dark:bg-dark-bg-primary rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                            </div>
                        </div>
                        <div class="flex items-center mt-4">
                            <input id="compliance" name="compliance" type="checkbox" required
                                class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded" />
                            <label for="compliance" class="ml-2 block text-sm text-gray-900 dark:text-dark-text-secondary">
                                I confirm that the information provided is accurate and consent to the processing of my data
                                for compliance with KYC/AML regulations.
                            </label>
                        </div>
                        <div class="flex justify-end">
                            <button type="submit"
                                class="bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition-colors">
                                <i class="fas fa-id-card mr-2"></i>Submit KYC
                            </button>
                        </div>
                    </form>
                    <div class="mt-6 text-center text-xs text-gray-500 dark:text-dark-text-secondary">
                        Your information is securely processed and stored in accordance with global KYC/AML regulations and
                        our <a href="#" class="text-blue-600 hover:text-blue-500">Privacy Policy</a>.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
