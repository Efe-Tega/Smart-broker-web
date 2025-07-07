@extends('layouts.backend.app')

@section('title', 'Investments')

@section('content')
    <!-- Main Content -->
    <div class="w-full lg:ml-64 p-8">
        <!-- Page Header -->
        <x-backend.page-header title="Investment Plans" desc="Choose from our range of investment plans" />

        <!-- Investment Plans -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <!-- Standard Plan -->
            <div class="bg-white dark:bg-dark-bg-secondary rounded-lg shadow p-6">
                <div class="text-center">
                    <h2 class="text-xl font-bold text-gray-900 dark:text-dark-text-primary">
                        Standard Plan
                    </h2>
                    <div class="mt-4">
                        <span class="text-4xl font-bold text-blue-600">2%</span>
                        <span class="text-gray-500 dark:text-dark-text-secondary">/day</span>
                    </div>
                    <p class="mt-2 text-gray-500 dark:text-dark-text-secondary">
                        Minimum Investment
                    </p>
                    <p class="text-2xl font-semibold text-gray-900 dark:text-dark-text-primary">
                        $1,000
                    </p>
                </div>
                <div class="mt-6 space-y-4">
                    <div class="flex items-center">
                        <i class="fas fa-check text-green-500 dark:text-green-400 mr-3"></i>
                        <span class="text-gray-600 dark:text-dark-text-secondary">Daily ROI: 2%</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-check text-green-500 dark:text-green-400 mr-3"></i>
                        <span class="text-gray-600 dark:text-dark-text-secondary">Duration: 90 days</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-check text-green-500 dark:text-green-400 mr-3"></i>
                        <span class="text-gray-600 dark:text-dark-text-secondary">Total Return: 180%</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-check text-green-500 dark:text-green-400 mr-3"></i>
                        <span class="text-gray-600 dark:text-dark-text-secondary">24/7 Support</span>
                    </div>
                </div>
                <button class="w-full mt-8 bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition-colors">
                    Invest Now
                </button>
            </div>

            <!-- Premium Plan -->
            <div
                class="bg-blue-50 dark:bg-blue-900/20 rounded-lg shadow p-6 border-2 border-blue-600 dark:border-blue-500 relative">
                <div class="absolute -top-3 right-4">
                    <span class="bg-blue-600 text-white px-3 py-1 rounded-full text-sm">Popular</span>
                </div>
                <div class="text-center">
                    <h2 class="text-xl font-bold text-gray-900 dark:text-dark-text-primary">
                        Premium Plan
                    </h2>
                    <div class="mt-4">
                        <span class="text-4xl font-bold text-blue-600">3%</span>
                        <span class="text-gray-500 dark:text-dark-text-secondary">/day</span>
                    </div>
                    <p class="mt-2 text-gray-500 dark:text-dark-text-secondary">
                        Minimum Investment
                    </p>
                    <p class="text-2xl font-semibold text-gray-900 dark:text-dark-text-primary">
                        $5,000
                    </p>
                </div>
                <div class="mt-6 space-y-4">
                    <div class="flex items-center">
                        <i class="fas fa-check text-green-500 dark:text-green-400 mr-3"></i>
                        <span class="text-gray-600 dark:text-dark-text-secondary">Daily ROI: 3%</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-check text-green-500 dark:text-green-400 mr-3"></i>
                        <span class="text-gray-600 dark:text-dark-text-secondary">Duration: 90 days</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-check text-green-500 dark:text-green-400 mr-3"></i>
                        <span class="text-gray-600 dark:text-dark-text-secondary">Total Return: 270%</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-check text-green-500 dark:text-green-400 mr-3"></i>
                        <span class="text-gray-600 dark:text-dark-text-secondary">Priority Support</span>
                    </div>
                </div>
                <button class="w-full mt-8 bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition-colors">
                    Invest Now
                </button>
            </div>

            <!-- Platinum Plan -->
            <div class="bg-white dark:bg-dark-bg-secondary rounded-lg shadow p-6">
                <div class="text-center">
                    <h2 class="text-xl font-bold text-gray-900 dark:text-dark-text-primary">
                        Platinum Plan
                    </h2>
                    <div class="mt-4">
                        <span class="text-4xl font-bold text-blue-600">4%</span>
                        <span class="text-gray-500 dark:text-dark-text-secondary">/day</span>
                    </div>
                    <p class="mt-2 text-gray-500 dark:text-dark-text-secondary">
                        Minimum Investment
                    </p>
                    <p class="text-2xl font-semibold text-gray-900 dark:text-dark-text-primary">
                        $10,000
                    </p>
                </div>
                <div class="mt-6 space-y-4">
                    <div class="flex items-center">
                        <i class="fas fa-check text-green-500 dark:text-green-400 mr-3"></i>
                        <span class="text-gray-600 dark:text-dark-text-secondary">Daily ROI: 4%</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-check text-green-500 dark:text-green-400 mr-3"></i>
                        <span class="text-gray-600 dark:text-dark-text-secondary">Duration: 90 days</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-check text-green-500 dark:text-green-400 mr-3"></i>
                        <span class="text-gray-600 dark:text-dark-text-secondary">Total Return: 360%</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-check text-green-500 dark:text-green-400 mr-3"></i>
                        <span class="text-gray-600 dark:text-dark-text-secondary">VIP Support</span>
                    </div>
                </div>
                <button class="w-full mt-8 bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition-colors">
                    Invest Now
                </button>
            </div>
        </div>

        <!-- Investment Calculator -->
        <div class="bg-white dark:bg-dark-bg-secondary rounded-lg shadow p-6 mb-8">
            <h2 class="text-lg font-semibold text-gray-900 dark:text-dark-text-primary mb-4">
                Investment Calculator
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-dark-text-secondary mb-2">Select
                        Plan</label>
                    <select id="planSelect"
                        class="w-full border border-gray-300 dark:border-gray-600 bg-white dark:bg-dark-bg-primary text-gray-900 dark:text-dark-text-primary rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="standard">Standard Plan (2%)</option>
                        <option value="premium">Premium Plan (3%)</option>
                        <option value="platinum">Platinum Plan (4%)</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-dark-text-secondary mb-2">Investment
                        Amount ($)</label>
                    <input type="number" id="investmentAmount"
                        class="w-full border border-gray-300 dark:border-gray-600 bg-white dark:bg-dark-bg-primary text-gray-900 dark:text-dark-text-primary rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Enter amount" />
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-dark-text-secondary mb-2">Duration
                        (Days)</label>
                    <input type="number" id="duration" value="90" readonly
                        class="w-full border border-gray-300 dark:border-gray-600 bg-gray-50 dark:bg-dark-bg-primary text-gray-900 dark:text-dark-text-primary rounded-lg px-3 py-2" />
                </div>
            </div>
            <div class="mt-6 grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-gray-50 dark:bg-dark-bg-primary p-4 rounded-lg">
                    <h3 class="text-sm font-medium text-gray-500 dark:text-dark-text-secondary">
                        Daily Profit
                    </h3>
                    <p class="text-2xl font-bold text-blue-600 dark:text-blue-400" id="dailyProfit">
                        $0.00
                    </p>
                </div>
                <div class="bg-gray-50 dark:bg-dark-bg-primary p-4 rounded-lg">
                    <h3 class="text-sm font-medium text-gray-500 dark:text-dark-text-secondary">
                        Total Profit
                    </h3>
                    <p class="text-2xl font-bold text-green-600 dark:text-green-400" id="totalProfit">
                        $0.00
                    </p>
                </div>
                <div class="bg-gray-50 dark:bg-dark-bg-primary p-4 rounded-lg">
                    <h3 class="text-sm font-medium text-gray-500 dark:text-dark-text-secondary">
                        Total Return
                    </h3>
                    <p class="text-2xl font-bold text-gray-900 dark:text-dark-text-primary" id="totalReturn">
                        $0.00
                    </p>
                </div>
            </div>
        </div>

        <!-- Active Investments -->
        <div class="bg-white dark:bg-dark-bg-secondary rounded-lg shadow">
            <div class="p-6">
                <h2 class="text-lg font-semibold text-gray-900 dark:text-dark-text-primary mb-4">
                    Active Investments
                </h2>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead class="bg-gray-50 dark:bg-dark-bg-primary">
                            <tr>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-dark-text-secondary uppercase tracking-wider">
                                    Plan
                                </th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-dark-text-secondary uppercase tracking-wider">
                                    Amount
                                </th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-dark-text-secondary uppercase tracking-wider">
                                    Daily ROI
                                </th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-dark-text-secondary uppercase tracking-wider">
                                    Start Date
                                </th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-dark-text-secondary uppercase tracking-wider">
                                    End Date
                                </th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-dark-text-secondary uppercase tracking-wider">
                                    Status
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white dark:bg-dark-bg-secondary divide-y divide-gray-200 dark:divide-gray-700">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900 dark:text-dark-text-primary">
                                        Premium Plan
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900 dark:text-dark-text-primary">
                                        $5,000
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-green-600 dark:text-green-400">
                                        $150
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900 dark:text-dark-text-primary">
                                        2024-02-01
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900 dark:text-dark-text-primary">
                                        2024-05-01
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 dark:bg-green-900/30 text-green-800 dark:text-green-400">Active</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('backend/assets/js/investment.js') }}"></script>
@endsection
