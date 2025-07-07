@extends('layouts.backend.app')

@section('content')
    <!-- Main Content -->
    <div class="w-full lg:ml-64 p-8">
        <!-- Page Header -->
        <div class="mb-8">
            <h1 class="text-2xl font-bold text-gray-800 dark:text-dark-text-primary">
                Transaction History
            </h1>
            <p class="text-gray-600 dark:text-dark-text-secondary mt-1">
                View your complete transaction and investment history
            </p>
        </div>

        <!-- Filter Section -->
        <div class="bg-white dark:bg-dark-bg-secondary rounded-lg shadow p-6 mb-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-dark-text-primary mb-2">Transaction
                        Type</label>
                    <select
                        class="w-full border border-gray-300 dark:border-gray-600 dark:bg-dark-bg-primary dark:text-dark-text-primary rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="all">All Transactions</option>
                        <option value="deposits">Deposits</option>
                        <option value="withdrawals">Withdrawals</option>
                        <option value="investments">Investments</option>
                        <option value="earnings">Earnings</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-dark-text-primary mb-2">Date
                        Range</label>
                    <select
                        class="w-full border border-gray-300 dark:border-gray-600 dark:bg-dark-bg-primary dark:text-dark-text-primary rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="7">Last 7 Days</option>
                        <option value="30">Last 30 Days</option>
                        <option value="90">Last 90 Days</option>
                        <option value="all">All Time</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-dark-text-primary mb-2">Status</label>
                    <select
                        class="w-full border border-gray-300 dark:border-gray-600 dark:bg-dark-bg-primary dark:text-dark-text-primary rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="all">All Status</option>
                        <option value="completed">Completed</option>
                        <option value="pending">Pending</option>
                        <option value="failed">Failed</option>
                    </select>
                </div>
                <div class="flex items-end">
                    <button class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition-colors">
                        Apply Filters
                    </button>
                </div>
            </div>
        </div>

        <!-- Transaction History -->
        <div class="bg-white dark:bg-dark-bg-secondary rounded-lg shadow">
            <div class="p-6">
                <div class="overflow-hidden">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead class="hidden lg:table-header-group">
                            <tr>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-dark-text-secondary uppercase tracking-wider">
                                    Transaction ID
                                </th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-dark-text-secondary uppercase tracking-wider">
                                    Type
                                </th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-dark-text-secondary uppercase tracking-wider">
                                    Amount
                                </th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-dark-text-secondary uppercase tracking-wider">
                                    Status
                                </th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-dark-text-secondary uppercase tracking-wider">
                                    Date
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white dark:bg-dark-bg-secondary divide-y divide-gray-200 dark:divide-gray-700">
                            <!-- Example Transaction Row -->
                            <tr class="transaction-row cursor-pointer lg:cursor-default"
                                onclick="toggleTransactionDetails(this)">
                                <td class="px-6 py-4 whitespace-nowrap lg:table-cell">
                                    <div class="flex items-center">
                                        <button type="button"
                                            class="mr-3 text-gray-500 dark:text-dark-text-secondary lg:hidden">
                                            <i class="fas fa-plus expand-icon"></i>
                                        </button>

                                        <div class="w-full">
                                            <div class="text-sm font-medium text-gray-900">
                                                TRX9230280423-42
                                            </div>
                                            <!-- Mobile Only Details -->
                                            <div class="mobile-details hidden lg:hidden mt-4">
                                                <div class="grid grid-cols-1 xs:grid-cols-2 sm:grid-cols-4 gap-4">
                                                    <div>
                                                        <div class="text-xs text-gray-500">Type</div>
                                                        <div class="text-sm text-gray-900">
                                                            Deposit
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="text-xs text-gray-500">
                                                            Amount
                                                        </div>
                                                        <div class="text-sm text-green-600">
                                                            +$5,000.00
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="text-xs text-gray-500">Status</div>
                                                        <span
                                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                            Completed
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <div class="text-xs text-gray-500">
                                                            Date
                                                        </div>
                                                        <div class="text-sm text-gray-900">
                                                            0x1234...5678
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap hidden lg:table-cell">
                                    <div class="text-sm text-gray-900 dark:text-dark-text-primary">
                                        Deposit
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap hidden lg:table-cell">
                                    <div class="text-sm text-green-600">+$5,000.00</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap hidden lg:table-cell">
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 dark:bg-green-900/30 text-green-800 dark:text-green-400">
                                        Completed
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap hidden lg:table-cell">
                                    <div class="text-sm text-gray-900 dark:text-dark-text-primary">
                                        0x1234...5678
                                    </div>
                                </td>
                            </tr>
                            <!-- Add more transaction rows here -->
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div class="mt-6 flex flex-col sm:flex-row items-center justify-between gap-4">
                    <div
                        class="text-sm text-gray-500 dark:text-dark-text-secondary w-full sm:w-auto text-center sm:text-left">
                        Showing 1 to 10 of 50 results
                    </div>
                    <div class="flex flex-wrap justify-center sm:justify-end gap-2">
                        <button
                            class="px-3 py-1 border border-gray-300 dark:border-gray-600 rounded-lg text-gray-600 dark:text-dark-text-secondary hover:bg-gray-50 dark:hover:bg-dark-bg-primary text-sm">
                            Previous
                        </button>
                        <div class="flex gap-2">
                            <button
                                class="px-3 py-1 bg-blue-600 text-white rounded-lg hover:bg-blue-700 text-sm min-w-[32px]">
                                1
                            </button>
                            <button
                                class="px-3 py-1 border border-gray-300 dark:border-gray-600 rounded-lg text-gray-600 dark:text-dark-text-secondary hover:bg-gray-50 dark:hover:bg-dark-bg-primary text-sm min-w-[32px]">
                                2
                            </button>
                            <button
                                class="px-3 py-1 border border-gray-300 dark:border-gray-600 rounded-lg text-gray-600 dark:text-dark-text-secondary hover:bg-gray-50 dark:hover:bg-dark-bg-primary text-sm min-w-[32px]">
                                3
                            </button>
                        </div>
                        <button
                            class="px-3 py-1 border border-gray-300 dark:border-gray-600 rounded-lg text-gray-600 dark:text-dark-text-secondary hover:bg-gray-50 dark:hover:bg-dark-bg-primary text-sm">
                            Next
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function toggleTransactionDetails(row) {
            if (window.innerWidth >= 1024) return;

            const mobileDetails = row.querySelector(".mobile-details");
            const expandIcon = row.querySelector(".expand-icon");

            mobileDetails.classList.toggle("hidden");
            expandIcon.classList.toggle("fa-plus");
            expandIcon.classList.toggle("fa-minus");
        }
    </script>
@endsection
