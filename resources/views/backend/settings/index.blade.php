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

                <!-- Crypto & Bank Info Settings -->
                <div class="bg-white dark:bg-dark-bg-secondary rounded-lg shadow p-6 mb-8">
                    <h2 class="text-lg font-semibold text-gray-900 dark:text-dark-text-primary mb-6">
                        Payment Information
                    </h2>
                    <!-- Display up to 3 wallet addresses -->
                    <div class="mb-8">
                        <h3 class="text-md font-semibold text-gray-800 dark:text-dark-text-primary mb-4 flex items-center">
                            <i class="fas fa-wallet mr-2 text-blue-500"></i> Your Wallets
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div
                                class="flex flex-col items-start bg-gradient-to-r from-blue-100 to-blue-50 dark:from-blue-900/40 dark:to-dark-bg-primary rounded-xl p-4 shadow hover:shadow-lg transition">
                                <div class="flex items-center mb-2">
                                    <img src="{{ asset('backend/assets/logo/bitcoin-btc-logo.png') }}" alt="BTC"
                                        class="h-6 w-6 mr-2" />
                                    <span class="font-semibold text-blue-700 dark:text-blue-300">Bitcoin (BTC)</span>
                                </div>
                                <div class="text-xs text-gray-500 dark:text-dark-text-secondary mb-1">
                                    Network:
                                    <span class="font-medium text-gray-700 dark:text-dark-text-primary">Bitcoin</span>
                                </div>
                                <div class="text-xs text-gray-700 dark:text-dark-text-primary break-all">
                                    1A1zP1eP5QGefi2DMPTfTL5SLmv7DivfNa
                                </div>
                            </div>
                            <div
                                class="flex flex-col items-start bg-gradient-to-r from-purple-100 to-blue-50 dark:from-purple-900/40 dark:to-dark-bg-primary rounded-xl p-4 shadow hover:shadow-lg transition">
                                <div class="flex items-center mb-2">
                                    <img src="{{ asset('backend/assets/logo/ethereum-eth-logo.png') }}" alt="ETH"
                                        class="h-6 w-6 mr-2" />
                                    <span class="font-semibold text-purple-700 dark:text-purple-300">Ethereum (ETH)</span>
                                </div>
                                <div class="text-xs text-gray-500 dark:text-dark-text-secondary mb-1">
                                    Network:
                                    <span class="font-medium text-gray-700 dark:text-dark-text-primary">Ethereum
                                        (ERC20)</span>
                                </div>
                                <div class="text-xs text-gray-700 dark:text-dark-text-primary break-all">
                                    0x742d35Cc6634C0532925a3b844Bc454e4438f44e
                                </div>
                            </div>
                            <div
                                class="flex flex-col items-start bg-gradient-to-r from-green-100 to-blue-50 dark:from-green-900/40 dark:to-dark-bg-primary rounded-xl p-4 shadow hover:shadow-lg transition">
                                <div class="flex items-center mb-2">
                                    <img src="{{ asset('backend/assets/logo/tether-usdt-logo.png') }}" alt="USDT"
                                        class="h-6 w-6 mr-2" />
                                    <span class="font-semibold text-green-700 dark:text-green-300">Tether (USDT)</span>
                                </div>
                                <div class="text-xs text-gray-500 dark:text-dark-text-secondary mb-1">
                                    Network:
                                    <span class="font-medium text-gray-700 dark:text-dark-text-primary">Tron (TRC20)</span>
                                </div>
                                <div class="text-xs text-gray-700 dark:text-dark-text-primary break-all">
                                    TQ8e1v1b2c3d4e5f6g7h8i9j0kLmNoPqRs
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Display added bank info -->
                    <div class="mb-8">
                        <h3 class="text-md font-semibold text-gray-800 dark:text-dark-text-primary mb-4 flex items-center">
                            <i class="fas fa-university mr-2 text-green-500"></i> Your
                            Bank Accounts
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div
                                class="flex flex-col bg-gradient-to-r from-green-100 to-blue-50 dark:from-green-900/40 dark:to-dark-bg-primary rounded-xl p-4 shadow hover:shadow-lg transition">
                                <div class="flex items-center mb-2">
                                    <i class="fas fa-university text-green-600 dark:text-green-300 mr-2"></i>
                                    <span class="font-semibold text-green-700 dark:text-green-300">Bank of America</span>
                                </div>
                                <div class="text-xs text-gray-500 dark:text-dark-text-secondary mb-1">
                                    Account Name:
                                    <span class="font-medium text-gray-700 dark:text-dark-text-primary">John Doe</span>
                                </div>
                                <div class="text-xs text-gray-500 dark:text-dark-text-secondary mb-1">
                                    Account Number:
                                    <span class="font-medium text-gray-700 dark:text-dark-text-primary">1234567890</span>
                                </div>
                                <div class="text-xs text-gray-500 dark:text-dark-text-secondary mb-1">
                                    SWIFT/BIC:
                                    <span class="font-medium text-gray-700 dark:text-dark-text-primary">BOFAUS3N</span>
                                </div>
                                <div class="text-xs text-gray-500 dark:text-dark-text-secondary">
                                    Country:
                                    <span class="font-medium text-gray-700 dark:text-dark-text-primary">USA</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <form class="space-y-8">
                        <!-- Crypto Info: Add Wallet -->
                        <div>
                            <h3
                                class="text-md font-semibold text-gray-800 dark:text-dark-text-primary mb-4 flex items-center">
                                <i class="fas fa-coins mr-2 text-blue-500"></i> Add New
                                Wallet
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                <div>
                                    <label
                                        class="block text-sm font-medium text-gray-700 dark:text-dark-text-secondary mb-2">Coin</label>
                                    <select
                                        class="w-full border border-gray-300 dark:border-gray-600 bg-white dark:bg-dark-bg-primary text-gray-900 dark:text-dark-text-primary rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                        <option value="">Select Coin</option>
                                        <option value="BTC">Bitcoin (BTC)</option>
                                        <option value="ETH">Ethereum (ETH)</option>
                                        <option value="USDT">Tether (USDT)</option>
                                        <option value="BNB">Binance Coin (BNB)</option>
                                        <option value="SOL">Solana (SOL)</option>
                                    </select>
                                </div>
                                <div>
                                    <label
                                        class="block text-sm font-medium text-gray-700 dark:text-dark-text-secondary mb-2">Blockchain
                                        Network</label>
                                    <select
                                        class="w-full border border-gray-300 dark:border-gray-600 bg-white dark:bg-dark-bg-primary text-gray-900 dark:text-dark-text-primary rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                        <option value="">Select Network</option>
                                        <option value="Bitcoin">Bitcoin</option>
                                        <option value="Ethereum">Ethereum (ERC20)</option>
                                        <option value="BSC">Binance Smart Chain (BEP20)</option>
                                        <option value="Solana">Solana</option>
                                        <option value="Tron">Tron (TRC20)</option>
                                    </select>
                                </div>
                                <div>
                                    <label
                                        class="block text-sm font-medium text-gray-700 dark:text-dark-text-secondary mb-2">Wallet
                                        Address</label>
                                    <input type="text"
                                        class="w-full border border-gray-300 dark:border-gray-600 bg-white dark:bg-dark-bg-primary text-gray-900 dark:text-dark-text-primary rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                        placeholder="Enter wallet address" />
                                </div>
                            </div>

                            <div class="flex justify-end mt-3 mb-5">
                                <button type="submit"
                                    class="bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition-colors">
                                    Add Wallet
                                </button>
                            </div>
                        </div>
                    </form>
                    <hr>
                    <!-- Bank Info -->
                    <form action="" class="mt-3">
                        <div>
                            <h3
                                class="text-md font-semibold text-gray-800 dark:text-dark-text-primary mb-4 flex items-center">
                                <i class="fas fa-university mr-2 text-green-500"></i> Bank
                                Information (International Transfer)
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                <div>
                                    <label
                                        class="block text-sm font-medium text-gray-700 dark:text-dark-text-secondary mb-2">Bank
                                        Name</label>
                                    <input type="text"
                                        class="w-full border border-gray-300 dark:border-gray-600 bg-white dark:bg-dark-bg-primary text-gray-900 dark:text-dark-text-primary rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                        placeholder="Enter bank name" />
                                </div>
                                <div>
                                    <label
                                        class="block text-sm font-medium text-gray-700 dark:text-dark-text-secondary mb-2">Account
                                        Name</label>
                                    <input type="text"
                                        class="w-full border border-gray-300 dark:border-gray-600 bg-white dark:bg-dark-bg-primary text-gray-900 dark:text-dark-text-primary rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                        placeholder="Enter account name" />
                                </div>
                                <div>
                                    <label
                                        class="block text-sm font-medium text-gray-700 dark:text-dark-text-secondary mb-2">Account
                                        Number</label>
                                    <input type="text"
                                        class="w-full border border-gray-300 dark:border-gray-600 bg-white dark:bg-dark-bg-primary text-gray-900 dark:text-dark-text-primary rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                        placeholder="Enter account number" />
                                </div>
                                <div>
                                    <label
                                        class="block text-sm font-medium text-gray-700 dark:text-dark-text-secondary mb-2">SWIFT/BIC</label>
                                    <input type="text"
                                        class="w-full border border-gray-300 dark:border-gray-600 bg-white dark:bg-dark-bg-primary text-gray-900 dark:text-dark-text-primary rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                        placeholder="Enter SWIFT/BIC code" />
                                </div>
                                <div>
                                    <label
                                        class="block text-sm font-medium text-gray-700 dark:text-dark-text-secondary mb-2">Country</label>
                                    <input type="text"
                                        class="w-full border border-gray-300 dark:border-gray-600 bg-white dark:bg-dark-bg-primary text-gray-900 dark:text-dark-text-primary rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                        placeholder="Enter country" />
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-end mt-3 mb-5">
                            <button type="submit"
                                class="bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition-colors">
                                Update Bank Info
                            </button>
                        </div>
                    </form>
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
                            <button
                                class="bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition-colors">
                                Update Password
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
