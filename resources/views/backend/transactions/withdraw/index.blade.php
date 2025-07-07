@extends('layouts.backend.app')

@section('title', 'Withdrawals')

@section('content')
    <!-- Main Content -->
    <div class="w-full lg:ml-64 p-8">
        <!-- Page Header -->
        <x-backend.page-header title="Withdraw Funds" desc="Withdraw your funds to your cryptocurrency wallet" />

        <!-- Balance and Withdrawal Form -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
            <!-- Available Balance Card -->
            <div class="bg-white dark:bg-dark-bg-secondary rounded-lg shadow p-6">
                <h2 class="text-lg font-semibold mb-4 dark:text-dark-text-primary">
                    Available Balance
                </h2>
                <div class="space-y-4">
                    <div class="flex items-center justify-between p-4 bg-blue-50 dark:bg-blue-900/20 rounded-lg">
                        <div class="flex items-center">
                            <i class="fas fa-wallet text-blue-600 text-xl mr-3"></i>
                            <div>
                                <p class="text-sm text-gray-600 dark:text-dark-text-secondary">
                                    Total Balance
                                </p>
                                <p class="text-xl font-bold text-gray-900 dark:text-dark-text-primary">
                                    $24,500.00
                                </p>
                            </div>
                        </div>
                        <span
                            class="px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-800 dark:text-green-400 text-sm font-semibold rounded-full">
                            Available
                        </span>
                    </div>
                    <div class="text-sm text-gray-500 dark:text-dark-text-secondary">
                        <p>• Minimum withdrawal: $100</p>
                        <p>• Maximum withdrawal: $10,000 per transaction</p>
                        <p>• Processing time: 24-48 hours</p>
                    </div>
                </div>
            </div>

            <!-- Withdrawal Form -->
            <div class="bg-white dark:bg-dark-bg-secondary rounded-lg shadow p-6">
                <h2 class="text-lg font-semibold mb-4 dark:text-dark-text-primary">
                    Request Withdrawal
                </h2>
                <form id="withdrawalForm" class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-dark-text-primary mb-2">Select
                            Cryptocurrency</label>
                        <select id="cryptoSelect"
                            class="w-full border border-gray-300 dark:border-gray-600 dark:bg-dark-bg-primary dark:text-dark-text-primary rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="btc">Bitcoin (BTC)</option>
                            <option value="eth">Ethereum (ETH)</option>
                            <option value="usdt">Tether (USDT)</option>
                            <option value="bnb">Binance Coin (BNB)</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-dark-text-primary mb-2">Amount
                            (USD)</label>
                        <input type="number" id="usdAmount" min="100" max="10000" step="100"
                            placeholder="Enter amount"
                            class="w-full border border-gray-300 dark:border-gray-600 dark:bg-dark-bg-primary dark:text-dark-text-primary rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                        <p class="text-sm text-gray-500 dark:text-dark-text-secondary mt-1">
                            Available balance: $24,500.00
                        </p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-dark-text-primary mb-2">Equivalent
                            Amount in Crypto</label>
                        <div class="relative">
                            <input type="text" id="cryptoAmount" readonly
                                class="w-full border border-gray-300 dark:border-gray-600 dark:bg-dark-bg-primary dark:text-dark-text-primary rounded-lg px-3 py-2 focus:outline-none" />
                            <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                <span id="cryptoSymbol" class="text-gray-500 dark:text-dark-text-secondary"></span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-dark-text-primary mb-2">Wallet
                            Address</label>
                        <input type="text" id="walletAddress" placeholder="Enter your wallet address"
                            class="w-full border border-gray-300 dark:border-gray-600 dark:bg-dark-bg-primary dark:text-dark-text-primary rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                    </div>
                    <button type="submit"
                        class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition-colors">
                        Request Withdrawal
                    </button>
                </form>
            </div>
        </div>

        <!-- Recent Withdrawals -->
        <div class="bg-white dark:bg-dark-bg-secondary rounded-lg shadow">
            <div class="p-6">
                <h2 class="text-lg font-semibold mb-4 dark:text-dark-text-primary">
                    Recent Withdrawals
                </h2>
                <div class="overflow-hidden">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead class="hidden lg:table-header-group">
                            <tr>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-dark-text-secondary uppercase tracking-wider">
                                    Date
                                </th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-dark-text-secondary uppercase tracking-wider">
                                    Currency
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
                                    Transaction ID
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white dark:bg-dark-bg-secondary divide-y divide-gray-200 dark:divide-gray-700">
                            <tr class="withdrawal-row cursor-pointer lg:cursor-default"
                                onclick="toggleWithdrawalDetails(this)">
                                <td class="px-6 py-4 whitespace-nowrap lg:table-cell">
                                    <div class="flex items-center">
                                        <button type="button" class="mr-3 text-gray-500 lg:hidden">
                                            <i class="fas fa-plus expand-icon"></i>
                                        </button>
                                        <div>
                                            <div class="text-sm font-medium text-gray-900">
                                                2024-02-20
                                            </div>
                                            <!-- Mobile Only Details -->
                                            <div class="mobile-details hidden lg:hidden mt-4">
                                                <div class="grid grid-cols-1 xs:grid-cols-2 sm:grid-cols-3 gap-4">
                                                    <div>
                                                        <div class="text-xs text-gray-500">
                                                            Currency
                                                        </div>
                                                        <div class="text-sm text-gray-900">
                                                            Bitcoin (BTC)
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="text-xs text-gray-500">Amount</div>
                                                        <div class="text-sm text-gray-900">
                                                            $5,000.00
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="text-xs text-gray-500">Status</div>
                                                        <span
                                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                                            Pending
                                                        </span>
                                                    </div>
                                                    <div class="col-span-full">
                                                        <div class="text-xs text-gray-500">
                                                            Transaction ID
                                                        </div>
                                                        <div class="text-sm text-gray-900 truncate">
                                                            0x1234...5678
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap hidden lg:table-cell">
                                    <div class="text-sm text-gray-900">Bitcoin (BTC)</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap hidden lg:table-cell">
                                    <div class="text-sm text-gray-900">$5,000.00</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap hidden lg:table-cell">
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                        Pending
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap hidden lg:table-cell">
                                    <div class="text-sm text-gray-900">0x1234...5678</div>
                                </td>
                            </tr>
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
                            class="px-3 py-1 border border-gray-300 dark:border-gray-600 rounded-lg text-gray-600 dark:text-dark-text-primary hover:bg-gray-50 dark:hover:bg-dark-bg-primary text-sm">
                            Previous
                        </button>
                        <div class="flex gap-2">
                            <button
                                class="px-3 py-1 bg-blue-600 text-white rounded-lg hover:bg-blue-700 text-sm min-w-[32px]">
                                1
                            </button>
                            <button
                                class="px-3 py-1 border border-gray-300 dark:border-gray-600 rounded-lg text-gray-600 dark:text-dark-text-primary hover:bg-gray-50 dark:hover:bg-dark-bg-primary text-sm min-w-[32px]">
                                2
                            </button>
                            <button
                                class="px-3 py-1 border border-gray-300 dark:border-gray-600 rounded-lg text-gray-600 dark:text-dark-text-primary hover:bg-gray-50 dark:hover:bg-dark-bg-primary text-sm min-w-[32px]">
                                3
                            </button>
                        </div>
                        <button
                            class="px-3 py-1 border border-gray-300 dark:border-gray-600 rounded-lg text-gray-600 dark:text-dark-text-primary hover:bg-gray-50 dark:hover:bg-dark-bg-primary text-sm">
                            Next
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Withdrawal Confirmation Modal -->
    <div id="withdrawalModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50">
        <div class="min-h-screen px-4 text-center">
            <div
                class="sm:inline-block align-bottom bg-white dark:bg-dark-bg-secondary rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <div class="bg-white dark:bg-dark-bg-secondary px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div class="w-full">
                            <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-dark-text-primary mb-4">
                                Confirm Withdrawal
                            </h3>

                            <!-- Amount Display -->
                            <div class="bg-blue-50 dark:bg-blue-900/20 border border-blue-200 rounded-lg p-4 mb-4">
                                <div class="flex flex-col space-y-2">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center">
                                            <i class="fas fa-dollar-sign text-blue-600 mr-2"></i>
                                            <span class="text-blue-700 text-sm sm:text-base">USD Amount:</span>
                                        </div>
                                        <span id="usdAmountDisplay"
                                            class="text-blue-700 font-bold text-sm sm:text-base"></span>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center">
                                            <i class="fas fa-coins text-blue-600 mr-2"></i>
                                            <span class="text-blue-700 text-sm sm:text-base">Crypto Amount:</span>
                                        </div>
                                        <span id="cryptoAmountDisplay"
                                            class="text-blue-700 font-bold text-sm sm:text-base break-all"></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Wallet Address -->
                            <div class="mb-4">
                                <label
                                    class="block text-sm font-medium text-gray-700 dark:text-dark-text-primary mb-2">Withdrawal
                                    Address</label>
                                <div class="flex">
                                    <input type="text" id="confirmWalletAddress" readonly
                                        class="flex-1 block w-full px-3 py-2 sm:text-sm border border-gray-300 dark:border-gray-600 rounded-lg bg-gray-50 dark:bg-dark-bg-primary"
                                        value="" />
                                </div>
                            </div>

                            <!-- Warning -->
                            <div
                                class="bg-yellow-50 dark:bg-yellow-900/20 border border-yellow-200 dark:border-yellow-700 rounded-lg p-4 mb-4">
                                <div class="flex items-start">
                                    <i class="fas fa-exclamation-triangle text-yellow-600 mt-0.5 mr-2"></i>
                                    <div class="text-yellow-700 dark:text-yellow-300 text-sm">
                                        <p class="font-medium mb-1">
                                            Please verify all details carefully:
                                        </p>
                                        <ul class="list-disc list-inside space-y-1">
                                            <li>Withdrawal amount is correct</li>
                                            <li>Wallet address is correct</li>
                                            <li>Selected cryptocurrency is correct</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="flex flex-col space-y-3">
                                <button onclick="confirmWithdrawal()"
                                    class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none sm:text-sm">
                                    Confirm Withdrawal
                                </button>
                                <button onclick="cancelWithdrawal()"
                                    class="w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none sm:text-sm">
                                    Cancel
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('backend/assets/js/withdraw.js') }}"></script>
@endsection
