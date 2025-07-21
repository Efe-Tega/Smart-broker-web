@extends('layouts.backend.app')
@section('content')
    <!-- Main Content -->
    <div class="w-full lg:ml-64 lg:p-8 p-4">
        <!-- Page Header -->
        <x-backend.page-header title="Deposit Funds" desc="Add funds to your account using cryptocurrency" />

        <!-- Deposit Methods -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
            <!-- Quick Deposit Card -->
            <div class="bg-white dark:bg-dark-bg-secondary rounded-lg shadow md:p-6 p-4">
                <h2 class="text-lg font-semibold text-gray-900 dark:text-dark-text-primary mb-4">
                    Quick Deposit
                </h2>
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-dark-text-primary mb-2">Select
                            Cryptocurrency</label>
                        <select id="cryptoCurrency"
                            class="w-full border border-gray-300 dark:border-gray-600 dark:bg-dark-bg-primary dark:text-dark-text-primary rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 capitalize">
                            <option value="">-- Select Crypto --</option>
                            @foreach ($cryptoCurrency as $currency)
                                <option value="{{ $currency->short_name }}" data-network="{{ $currency->network_type }}">
                                    {{ $currency->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-dark-text-primary mb-2">Amount
                            (USD)</label>
                        <input type="number" id="usdAmount" min="100" step="100" placeholder="Enter amount"
                            class="w-full border border-gray-300 dark:border-gray-600 dark:bg-dark-bg-primary dark:text-dark-text-primary rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                        <p class="text-sm text-gray-500 dark:text-dark-text-secondary mt-1">
                            Minimum deposit: $100
                        </p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-dark-text-primary mb-2">Equivalent
                            Amount in Crypto</label>
                        <div class="relative">
                            <input type="text" id="cryptoAmount" readonly
                                class="w-full border border-gray-300 dark:border-gray-600 dark:bg-dark-bg-primary dark:text-dark-text-primary rounded-lg px-3 py-2 bg-gray-50 focus:outline-none" />
                            <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                <span id="cryptoSymbol" class="text-gray-500 dark:text-dark-text-secondary"></span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-2">
                        <label class="block text-sm font-medium text-gray-700 dark:text-dark-text-primary mb-2">
                            Network
                        </label>
                        <input type="text" id="networkType" readonly
                            class="w-full border border-gray-300 dark:border-gray-600 dark:bg-dark-bg-primary dark:text-dark-text-primary rounded-lg px-3 py-2 bg-gray-50 focus:outline-none" />
                    </div>

                    <button class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition-colors">
                        Generate Deposit Address
                    </button>
                </div>
            </div>

            <!-- Deposit Instructions -->
            <div class="bg-white dark:bg-dark-bg-secondary rounded-lg shadow md:p-6 p-4">
                <h2 class="text-lg font-semibold text-gray-900 dark:text-dark-text-primary mb-4">
                    How to Deposit
                </h2>
                <div class="space-y-4">
                    <div class="flex items-start">
                        <div
                            class="flex-shrink-0 w-8 h-8 bg-blue-100 dark:bg-blue-900/30 rounded-full flex items-center justify-center text-blue-600">
                            1
                        </div>
                        <div class="ml-4">
                            <h3 class="text-sm font-medium text-gray-900 dark:text-dark-text-primary">
                                Select Currency
                            </h3>
                            <p class="text-sm text-gray-500 dark:text-dark-text-secondary">
                                Choose your preferred cryptocurrency for deposit
                            </p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div
                            class="flex-shrink-0 w-8 h-8 bg-blue-100 dark:bg-blue-900/30 rounded-full flex items-center justify-center text-blue-600">
                            2
                        </div>
                        <div class="ml-4">
                            <h3 class="text-sm font-medium text-gray-900 dark:text-dark-text-primary">
                                Enter Amount
                            </h3>
                            <p class="text-sm text-gray-500 dark:text-dark-text-secondary">
                                Specify the amount you want to deposit (min. $100)
                            </p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div
                            class="flex-shrink-0 w-8 h-8 bg-blue-100 dark:bg-blue-900/30 rounded-full flex items-center justify-center text-blue-600">
                            3
                        </div>
                        <div class="ml-4">
                            <h3 class="text-sm font-medium text-gray-900 dark:text-dark-text-primary">
                                Send Payment
                            </h3>
                            <p class="text-sm text-gray-500 dark:text-dark-text-secondary">
                                Transfer the exact amount to the generated address
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Deposits -->
        <div class="bg-white dark:bg-dark-bg-secondary rounded-lg shadow">
            <div class="md:p-6 p-4">
                <h2 class="text-lg font-semibold text-gray-900 dark:text-dark-text-primary mb-4">
                    Recent Deposits
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
                            <tr class="deposit-row cursor-pointer lg:cursor-default" onclick="toggleDepositDetails(this)">
                                <td class="px-6 py-4 whitespace-nowrap lg:table-cell">
                                    <div class="flex items-center">
                                        <button class="mr-3 text-gray-500 dark:text-dark-text-secondary lg:hidden">
                                            <i class="fas fa-plus expand-icon"></i>
                                        </button>
                                        <div class="w-full">
                                            <div class="text-sm font-medium text-gray-900 dark:text-dark-text-primary">
                                                2024-02-20
                                            </div>
                                            <!-- Mobile Only Details -->
                                            <div class="mobile-details hidden lg:hidden mt-4">
                                                <div class="grid grid-cols-1 xs:grid-cols-2 sm:grid-cols-3 gap-4">
                                                    <div>
                                                        <div class="text-xs text-gray-500 dark:text-dark-text-secondary">
                                                            Currency
                                                        </div>
                                                        <div class="text-sm text-gray-900 dark:text-dark-text-primary">
                                                            Bitcoin (BTC)
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="text-xs text-gray-500 dark:text-dark-text-secondary">
                                                            Amount
                                                        </div>
                                                        <div class="text-sm text-gray-900 dark:text-dark-text-primary">
                                                            $5,000.00
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="text-xs text-gray-500 dark:text-dark-text-secondary">
                                                            Status
                                                        </div>
                                                        <span
                                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 dark:bg-green-900/30 text-green-800 dark:text-green-400">Completed</span>
                                                    </div>
                                                    <div class="col-span-full">
                                                        <div class="text-xs text-gray-500 dark:text-dark-text-secondary">
                                                            Transaction ID
                                                        </div>
                                                        <div
                                                            class="text-sm text-gray-900 dark:text-dark-text-primary truncate">
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
                                        Bitcoin (BTC)
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap hidden lg:table-cell">
                                    <div class="text-sm text-gray-900 dark:text-dark-text-primary">
                                        $5,000.00
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap hidden lg:table-cell">
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 dark:bg-green-900/30 text-green-800 dark:text-green-400">Completed</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap hidden lg:table-cell">
                                    <div class="text-sm text-gray-900 dark:text-dark-text-primary">
                                        0x1234...5678
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Deposit Modal -->
    <div id="depositModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50">
        <div class="min-h-screen px-4 text-center">
            <div
                class="sm:inline-block align-bottom bg-white dark:bg-dark-bg-secondary rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <!-- Step 1: Payment Details -->
                <div id="paymentStep" class="bg-white dark:bg-dark-bg-secondary px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div class="w-full">
                            <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-dark-text-primary mb-4">
                                Complete Your Deposit
                            </h3>

                            <!-- Amount Display -->
                            <div
                                class="bg-blue-50 dark:bg-blue-900/20 border border-blue-200 dark:border-blue-800 rounded-lg px-4 py-2 mb-4">
                                <div class="flex flex-col space-y-2">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center">
                                            <i class="fas fa-dollar-sign text-blue-600 mr-2"></i>
                                            <span class="text-blue-700 dark:text-blue-400 text-sm sm:text-base">USD
                                                Amount:</span>
                                        </div>
                                        <span id="usdAmountDisplay"
                                            class="text-blue-700 dark:text-blue-400 font-bold text-sm sm:text-base"></span>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center">
                                            <i class="fas fa-coins text-blue-600 mr-2"></i>
                                            <span class="text-blue-700 dark:text-blue-400 text-sm sm:text-base">Crypto
                                                Amount:</span>
                                        </div>
                                        <span id="cryptoAmountDisplay"
                                            class="text-blue-700 dark:text-blue-400 font-bold text-sm sm:text-base break-all"></span>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center">
                                            <i class="fas fa-coins text-blue-600 mr-2"></i>
                                            <span
                                                class="text-blue-700 dark:text-blue-400 text-sm sm:text-base">Network:</span>
                                        </div>
                                        <span id="networkTypeDisplay"
                                            class="text-blue-700 dark:text-blue-400 font-bold text-sm sm:text-base break-all"></span>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="bg-yellow-50 dark:bg-yellow-900/20 border border-yellow-200 dark:border-yellow-800 rounded-lg px-4 py-2 mb-4">
                                <div class="flex items-center">
                                    <i class="fas fa-clock text-yellow-600 mr-2"></i>
                                    <span class="text-yellow-700 dark:text-yellow-400">Time remaining:
                                        <span id="countdown" class="font-bold">10:00</span></span>
                                </div>
                            </div>

                            <!-- QR Code -->
                            <div class="flex justify-center mb-4">
                                <div id="qrcode" class="p-2 bg-white dark:bg-dark-bg-primary border rounded-lg">
                                </div>
                            </div>

                            <!-- Wallet Address -->
                            <div class="mb-4">
                                <label
                                    class="block text-sm font-medium text-gray-700 dark:text-dark-text-primary mb-2">Wallet
                                    Address</label>
                                <div class="flex">
                                    <input type="text" id="walletAddress" readonly
                                        class="flex-1 block w-full px-3 py-2 sm:text-sm border border-gray-300 dark:border-gray-600 rounded-l-md bg-gray-50 dark:bg-dark-bg-primary dark:text-dark-text-primary"
                                        value="" />
                                    <button onclick="copyWalletAddress()"
                                        class="inline-flex items-center px-4 py-2 border border-l-0 border-gray-300 dark:border-gray-600 rounded-r-md bg-gray-50 dark:bg-dark-bg-primary hover:bg-gray-100 dark:hover:bg-dark-bg-secondary">
                                        <i class="fas fa-copy text-gray-600 dark:text-dark-text-primary"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="flex flex-col space-y-3">
                                <button onclick="showConfirmationStep()"
                                    class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none sm:text-sm">
                                    I Have Made the Deposit
                                </button>
                                <button onclick="cancelDeposit()"
                                    class="w-full inline-flex justify-center rounded-md border border-gray-300 dark:border-gray-600 shadow-sm px-4 py-2 bg-white dark:bg-dark-bg-primary text-base font-medium text-gray-700 dark:text-dark-text-primary hover:bg-gray-50 dark:hover:bg-dark-bg-secondary focus:outline-none sm:text-sm">
                                    Cancel Transaction
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 2: Confirmation -->
                <div id="confirmationStep"
                    class="bg-white dark:bg-dark-bg-secondary px-4 pt-5 pb-4 sm:p-6 sm:pb-4 hidden">
                    <div class="sm:flex sm:items-start">
                        <div class="w-full">
                            <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-dark-text-primary mb-4">
                                Confirm Your Deposit
                            </h3>

                            <!-- Transaction Screenshot Upload -->
                            <div class="mb-4">
                                <label
                                    class="block text-sm font-medium text-gray-700 dark:text-dark-text-primary mb-2">Upload
                                    Transaction Screenshot</label>
                                <div
                                    class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 dark:border-gray-600 border-dashed rounded-md">
                                    <div class="space-y-1 text-center">
                                        <div class="flex text-sm text-gray-600 dark:text-dark-text-secondary">
                                            <label for="transaction-image"
                                                class="relative cursor-pointer bg-white dark:bg-dark-bg-primary rounded-md font-medium text-blue-600 hover:text-blue-500 focus-within:outline-none">
                                                <span>Upload a file</span>
                                                <input id="transaction-image" name="transaction-image" type="file"
                                                    class="sr-only" accept="image/*" required />
                                            </label>
                                        </div>
                                        <p class="text-xs text-gray-500 dark:text-dark-text-secondary">
                                            PNG, JPG, GIF up to 10MB
                                        </p>
                                    </div>
                                </div>
                                <!-- Preview Image -->
                                <div id="imagePreview" class="mt-4 hidden">
                                    <img id="previewImg" src="" alt="Preview"
                                        class="max-w-full h-auto rounded-lg" />
                                </div>
                            </div>

                            <div class="flex flex-col space-y-3">
                                <button onclick="submitDeposit()"
                                    class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none sm:text-sm">
                                    Submit
                                </button>
                                <button onclick="backToPayment()"
                                    class="w-full inline-flex justify-center rounded-md border border-gray-300 dark:border-gray-600 shadow-sm px-4 py-2 bg-white dark:bg-dark-bg-primary text-base font-medium text-gray-700 dark:text-dark-text-primary hover:bg-gray-50 dark:hover:bg-dark-bg-secondary focus:outline-none sm:text-sm">
                                    Back
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<script src="{{ asset('backend/assets/js/deposit.js') }}"></script>

<!-- Add this before the closing body tag -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
