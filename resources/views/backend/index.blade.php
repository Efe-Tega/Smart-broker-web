@extends('layouts.backend.app')
@section('content')
    <div class="w-full lg:ml-64 p-8">
        <!-- Overview Cards -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
            <div class="bg-white dark:bg-dark-bg-secondary rounded-lg shadow p-6">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-gray-500 dark:text-dark-text-secondary text-sm">
                        Total Balance
                    </h3>
                    <i class="fas fa-dollar-sign text-blue-500"></i>
                </div>
                <div class="text-2xl font-bold dark:text-dark-text-primary">
                    $24,500.00
                </div>
                <div class="text-green-500 text-sm">+2.5% from yesterday</div>
            </div>
            <div class="bg-white dark:bg-dark-bg-secondary rounded-lg shadow p-6">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-gray-500 dark:text-dark-text-secondary text-sm">
                        Active Investments
                    </h3>
                    <i class="fas fa-chart-pie text-blue-500"></i>
                </div>
                <div class="text-2xl font-bold dark:text-dark-text-primary">3</div>
                <div class="text-blue-500 text-sm">Premium Plan</div>
            </div>
            <div class="bg-white dark:bg-dark-bg-secondary rounded-lg shadow p-6">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-gray-500 dark:text-dark-text-secondary text-sm">
                        Total Profit
                    </h3>
                    <i class="fas fa-chart-line text-green-500"></i>
                </div>
                <div class="text-2xl font-bold dark:text-dark-text-primary">
                    $1,250.00
                </div>
                <div class="text-green-500 text-sm">+5.3% this week</div>
            </div>
            <div class="bg-white dark:bg-dark-bg-secondary rounded-lg shadow p-6">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-gray-500 dark:text-dark-text-secondary text-sm">
                        Next Payout
                    </h3>
                    <i class="fas fa-clock text-orange-500"></i>
                </div>
                <div class="text-2xl font-bold dark:text-dark-text-primary">
                    12:00:00
                </div>
                <div class="text-orange-500 text-sm">Premium Plan Daily</div>
            </div>
        </div>

        <!-- Charts -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
            <div class="bg-white dark:bg-dark-bg-secondary rounded-lg shadow p-6">
                <h3 class="text-lg font-semibold mb-4 dark:text-dark-text-primary">
                    Profit History
                </h3>
                <canvas id="profitChart" height="150"></canvas>
            </div>
            <div class="bg-white dark:bg-dark-bg-secondary rounded-lg shadow p-6">
                <h3 class="text-lg font-semibold mb-4 dark:text-dark-text-primary">
                    Investment Distribution
                </h3>
                <canvas id="investmentChart" height="150"></canvas>
            </div>
        </div>

        <!-- Active Plans -->
        <div class="bg-white dark:bg-dark-bg-secondary rounded-lg shadow mb-8">
            <div class="p-6">
                <h3 class="text-lg font-semibold mb-4 dark:text-dark-text-primary">
                    Active Investment Plans
                </h3>
                <div class="overflow-hidden">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead class="hidden lg:table-header-group">
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
                                    Daily Profit
                                </th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-dark-text-secondary uppercase tracking-wider">
                                    Status
                                </th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-dark-text-secondary uppercase tracking-wider">
                                    Next Payout
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white dark:bg-dark-bg-secondary divide-y divide-gray-200 dark:divide-gray-700">
                            <tr class="plan-row cursor-pointer lg:cursor-default" onclick="togglePlanDetails(this)">
                                <td class="px-6 py-4 whitespace-nowrap lg:table-cell">
                                    <div class="flex items-center">
                                        <button type="button" class="mr-3 text-gray-500 lg:hidden">
                                            <i class="fas fa-plus expand-icon"></i>
                                        </button>
                                        <div class="w-full">
                                            <div class="text-sm font-medium text-gray-900">
                                                Premium Plan
                                            </div>
                                            <!-- Mobile Only Details -->
                                            <div class="mobile-details hidden lg:hidden mt-4">
                                                <div class="grid grid-cols-1 xs:grid-cols-2 sm:grid-cols-4 gap-4">
                                                    <div>
                                                        <div class="text-xs text-gray-500">Amount</div>
                                                        <div class="text-sm text-gray-900">
                                                            $10,000.00
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="text-xs text-gray-500">
                                                            Daily Profit
                                                        </div>
                                                        <div class="text-sm text-green-600">
                                                            $200.00
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="text-xs text-gray-500">Status</div>
                                                        <span
                                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                            Active
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <div class="text-xs text-gray-500">
                                                            Next Payout
                                                        </div>
                                                        <div class="text-sm text-gray-900">
                                                            12:00:00
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap hidden lg:table-cell">
                                    <div class="text-sm text-gray-900">$10,000.00</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap hidden lg:table-cell">
                                    <div class="text-sm text-green-600">$200.00</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap hidden lg:table-cell">
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        Active
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 hidden lg:table-cell">
                                    12:00:00
                                </td>
                            </tr>
                            <tr class="plan-row cursor-pointer lg:cursor-default" onclick="togglePlanDetails(this)">
                                <td class="px-6 py-4 whitespace-nowrap lg:table-cell">
                                    <div class="flex items-center">
                                        <button type="button" class="mr-3 text-gray-500 lg:hidden">
                                            <i class="fas fa-plus expand-icon"></i>
                                        </button>
                                        <div>
                                            <div class="text-sm font-medium text-gray-900">
                                                Gold Plan
                                            </div>
                                            <!-- Mobile Only Details -->
                                            <div class="mobile-details hidden lg:hidden mt-4">
                                                <div class="grid grid-cols-1 xs:grid-cols-2 sm:grid-cols-3 gap-4">
                                                    <div>
                                                        <div class="text-xs text-gray-500">Amount</div>
                                                        <div class="text-sm text-gray-900">
                                                            $25,000.00
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="text-xs text-gray-500">
                                                            Daily Profit
                                                        </div>
                                                        <div class="text-sm text-green-600">
                                                            $625.00
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="text-xs text-gray-500">Status</div>
                                                        <span
                                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                            Active
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <div class="text-xs text-gray-500">
                                                            Next Payout
                                                        </div>
                                                        <div class="text-sm text-gray-900">
                                                            14:00:00
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap hidden lg:table-cell">
                                    <div class="text-sm text-gray-900">$25,000.00</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap hidden lg:table-cell">
                                    <div class="text-sm text-green-600">$625.00</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap hidden lg:table-cell">
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        Active
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 hidden lg:table-cell">
                                    14:00:00
                                </td>
                            </tr>
                            <tr class="plan-row cursor-pointer lg:cursor-default" onclick="togglePlanDetails(this)">
                                <td class="px-6 py-4 whitespace-nowrap lg:table-cell">
                                    <div class="flex items-center">
                                        <button type="button" class="mr-3 text-gray-500 lg:hidden">
                                            <i class="fas fa-plus expand-icon"></i>
                                        </button>
                                        <div>
                                            <div class="text-sm font-medium text-gray-900">
                                                Platinum Plan
                                            </div>
                                            <!-- Mobile Only Details -->
                                            <div class="mobile-details hidden lg:hidden mt-4">
                                                <div class="grid grid-cols-1 xs:grid-cols-2 sm:grid-cols-3 gap-4">
                                                    <div>
                                                        <div class="text-xs text-gray-500">Amount</div>
                                                        <div class="text-sm text-gray-900">
                                                            $50,000.00
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="text-xs text-gray-500">
                                                            Daily Profit
                                                        </div>
                                                        <div class="text-sm text-green-600">
                                                            $1,500.00
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="text-xs text-gray-500">Status</div>
                                                        <span
                                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                            Active
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <div class="text-xs text-gray-500">
                                                            Next Payout
                                                        </div>
                                                        <div class="text-sm text-gray-900">
                                                            16:00:00
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap hidden lg:table-cell">
                                    <div class="text-sm text-gray-900">$50,000.00</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap hidden lg:table-cell">
                                    <div class="text-sm text-green-600">$1,500.00</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap hidden lg:table-cell">
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        Active
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 hidden lg:table-cell">
                                    16:00:00
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

<script>
    // Mobile table functionality (needs to be in global scope if called from HTML)
    function togglePlanDetails(row) {
        if (window.innerWidth >= 1024) return; // Don't run on desktop

        const mobileDetails = row.querySelector(".mobile-details");
        const expandIcon = row.querySelector(".expand-icon");

        mobileDetails.classList.toggle("hidden");
        expandIcon.classList.toggle("fa-plus");
        expandIcon.classList.toggle("fa-minus");
    }
</script>
