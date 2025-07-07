@extends('layouts.frontend.app')
@section('content')
    <!-- Navigation -->
    @include('layouts.frontend.partials.navigation')

    <!-- Hero Section -->
    <section class="pt-24 bg-gradient-to-b from-blue-50 to-white dark:from-dark-bg-primary dark:to-dark-bg-secondary">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <h1 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-dark-text-primary mb-6">
                        Professional Crypto Investment Platform
                    </h1>
                    <p class="text-xl text-gray-600 dark:text-dark-text-secondary mb-8">
                        Start earning daily profits with our secure and reliable crypto
                        investment plans. Join thousands of successful investors today.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="{{ route('register') }}"
                            class="bg-blue-600 text-white px-8 py-3 rounded-lg text-center hover:bg-blue-700 transition duration-300">
                            Start Investing
                        </a>
                        <a href="#plans"
                            class="border border-blue-600 text-blue-600 dark:text-blue-400 dark:border-blue-400 px-8 py-3 rounded-lg text-center hover:bg-blue-50 dark:hover:bg-blue-900/20 transition duration-300">
                            View Plans
                        </a>
                    </div>
                    <div class="mt-8 flex items-center gap-8">
                        <div class="flex flex-col">
                            <span class="text-2xl font-bold text-gray-900 dark:text-dark-text-primary">$50M+</span>
                            <span class="text-gray-600 dark:text-dark-text-secondary">Assets Managed</span>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-2xl font-bold text-gray-900 dark:text-dark-text-primary">50K+</span>
                            <span class="text-gray-600 dark:text-dark-text-secondary">Active Users</span>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-2xl font-bold text-gray-900 dark:text-dark-text-primary">99.9%</span>
                            <span class="text-gray-600 dark:text-dark-text-secondary">Uptime</span>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="bg-blue-600 rounded-lg p-8 text-white relative z-10">
                        <h3 class="text-2xl font-bold mb-4">Live Profit Calculator</h3>
                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm mb-2">Investment Amount (USD)</label>
                                <input type="number" id="investmentAmount" min="1000"
                                    class="w-full px-4 py-2 rounded bg-white dark:bg-dark-bg-primary text-gray-900 dark:text-dark-text-primary"
                                    placeholder="Enter amount" />
                            </div>
                            <div>
                                <label class="block text-sm mb-2">Investment Plan</label>
                                <select id="investmentPlan"
                                    class="w-full px-4 py-2 rounded bg-white dark:bg-dark-bg-primary text-gray-900 dark:text-dark-text-primary">
                                    <option value="standard">Standard (2% Daily)</option>
                                    <option value="premium">Premium (3% Daily)</option>
                                    <option value="platinum">Platinum (4% Daily)</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm mb-2">Investment Duration</label>
                                <select id="investmentDuration"
                                    class="w-full px-4 py-2 rounded bg-white dark:bg-dark-bg-primary text-gray-900 dark:text-dark-text-primary">
                                    <option value="7">7 Days</option>
                                    <option value="30">30 Days</option>
                                    <option value="90">90 Days</option>
                                </select>
                            </div>
                            <button id="calculateButton"
                                class="w-full bg-white dark:bg-dark-bg-primary text-blue-600 py-2 rounded font-semibold hover:bg-gray-100 dark:hover:bg-dark-bg-secondary transition duration-300">
                                Calculate Profit
                            </button>
                            <div id="profitResults" class="hidden">
                                <div class="border-t border-blue-400 pt-4 mt-4">
                                    <div class="grid grid-cols-2 gap-4">
                                        <div>
                                            <p class="text-sm text-blue-100">Daily Profit</p>
                                            <p id="dailyProfit" class="text-lg font-bold">$0</p>
                                        </div>
                                        <div>
                                            <p class="text-sm text-blue-100">Total Profit</p>
                                            <p id="totalProfit" class="text-lg font-bold">$0</p>
                                        </div>
                                        <div>
                                            <p class="text-sm text-blue-100">Total Return</p>
                                            <p id="totalReturn" class="text-lg font-bold">$0</p>
                                        </div>
                                        <div>
                                            <p class="text-sm text-blue-100">ROI</p>
                                            <p id="roi" class="text-lg font-bold">0%</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="absolute inset-0 bg-blue-200 dark:bg-blue-900/50 rounded-lg transform translate-x-2 translate-y-2">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-dark-text-primary mb-4">
                    Why Choose CryptoBroker?
                </h2>
                <p class="text-xl text-gray-600 dark:text-dark-text-secondary">
                    Experience the future of crypto investment with our cutting-edge
                    platform
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white dark:bg-dark-bg-secondary p-8 rounded-lg shadow-lg">
                    <div class="text-blue-600 dark:text-blue-400 text-4xl mb-4">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-dark-text-primary mb-4">
                        Secure Platform
                    </h3>
                    <p class="text-gray-600 dark:text-dark-text-secondary">
                        Advanced encryption and two-factor authentication to keep your
                        investments safe.
                    </p>
                </div>
                <div class="bg-white dark:bg-dark-bg-secondary p-8 rounded-lg shadow-lg">
                    <div class="text-blue-600 dark:text-blue-400 text-4xl mb-4">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-dark-text-primary mb-4">
                        High Returns
                    </h3>
                    <p class="text-gray-600 dark:text-dark-text-secondary">
                        Competitive profit rates with daily, weekly, and monthly payout
                        options.
                    </p>
                </div>
                <div class="bg-white dark:bg-dark-bg-secondary p-8 rounded-lg shadow-lg">
                    <div class="text-blue-600 dark:text-blue-400 text-4xl mb-4">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-dark-text-primary mb-4">
                        24/7 Support
                    </h3>
                    <p class="text-gray-600 dark:text-dark-text-secondary">
                        Dedicated support team available round the clock to assist you.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Investment Plans Section -->
    <section id="plans" class="py-20 bg-gray-50 dark:bg-dark-bg-secondary">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-dark-text-primary mb-4">
                    Investment Plans
                </h2>
                <p class="text-xl text-gray-600 dark:text-dark-text-secondary">
                    Choose the perfect investment plan for your goals
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Standard Plan -->
                <div class="bg-white dark:bg-dark-bg-primary rounded-lg shadow-lg p-8">
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-dark-text-primary mb-4">
                        Standard Plan
                    </h3>
                    <div class="text-4xl font-bold text-blue-600 dark:text-blue-400 mb-4">
                        2%<span class="text-lg font-normal text-gray-600 dark:text-dark-text-secondary">/day</span>
                    </div>
                    <p class="text-gray-600 dark:text-dark-text-secondary mb-6">
                        Perfect for beginners
                    </p>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center text-gray-600 dark:text-dark-text-secondary">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            Minimum: $1,000
                        </li>
                        <li class="flex items-center text-gray-600 dark:text-dark-text-secondary">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            Daily ROI: 2%
                        </li>
                        <li class="flex items-center text-gray-600 dark:text-dark-text-secondary">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            Duration: 90 days
                        </li>
                    </ul>
                    <a href="register.html"
                        class="block text-center bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition duration-300">
                        Start Investing
                    </a>
                </div>

                <!-- Premium Plan -->
                <div class="bg-blue-600 rounded-lg shadow-lg p-8 transform scale-105">
                    <div
                        class="absolute -top-4 right-8 bg-yellow-400 text-blue-900 px-4 py-1 rounded-full text-sm font-semibold">
                        Popular
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4">Premium Plan</h3>
                    <div class="text-4xl font-bold text-white mb-4">
                        3%<span class="text-lg font-normal text-blue-100">/day</span>
                    </div>
                    <p class="text-blue-100 mb-6">Most popular choice</p>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center text-white">
                            <i class="fas fa-check text-green-300 mr-2"></i>
                            Minimum: $5,000
                        </li>
                        <li class="flex items-center text-white">
                            <i class="fas fa-check text-green-300 mr-2"></i>
                            Daily ROI: 3%
                        </li>
                        <li class="flex items-center text-white">
                            <i class="fas fa-check text-green-300 mr-2"></i>
                            Duration: 90 days
                        </li>
                    </ul>
                    <a href="register.html"
                        class="block text-center bg-white text-blue-600 py-3 rounded-lg hover:bg-gray-100 transition duration-300">
                        Start Investing
                    </a>
                </div>

                <!-- Platinum Plan -->
                <div class="bg-white dark:bg-dark-bg-primary rounded-lg shadow-lg p-8">
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-dark-text-primary mb-4">
                        Platinum Plan
                    </h3>
                    <div class="text-4xl font-bold text-blue-600 dark:text-blue-400 mb-4">
                        4%<span class="text-lg font-normal text-gray-600 dark:text-dark-text-secondary">/day</span>
                    </div>
                    <p class="text-gray-600 dark:text-dark-text-secondary mb-6">
                        For serious investors
                    </p>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center text-gray-600 dark:text-dark-text-secondary">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            Minimum: $10,000
                        </li>
                        <li class="flex items-center text-gray-600 dark:text-dark-text-secondary">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            Daily ROI: 4%
                        </li>
                        <li class="flex items-center text-gray-600 dark:text-dark-text-secondary">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            Duration: 90 days
                        </li>
                    </ul>
                    <a href="register.html"
                        class="block text-center bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition duration-300">
                        Start Investing
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- How it Works Section -->
    <section id="how-it-works" class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-dark-text-primary mb-4">
                    How It Works
                </h2>
                <p class="text-xl text-gray-600 dark:text-dark-text-secondary">
                    Start your investment journey in three simple steps
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="relative">
                    <div class="bg-white dark:bg-dark-bg-secondary p-8 rounded-lg shadow-lg relative z-10">
                        <div class="text-5xl font-bold text-blue-600/10 dark:text-blue-400/10 absolute -top-4 right-4">
                            1
                        </div>
                        <div class="text-blue-600 dark:text-blue-400 text-4xl mb-4">
                            <i class="fas fa-user-plus"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-dark-text-primary mb-4">
                            Create Account
                        </h3>
                        <p class="text-gray-600 dark:text-dark-text-secondary">
                            Sign up for free and verify your identity to get started.
                        </p>
                    </div>
                </div>
                <div class="relative">
                    <div class="bg-white dark:bg-dark-bg-secondary p-8 rounded-lg shadow-lg relative z-10">
                        <div class="text-5xl font-bold text-blue-600/10 dark:text-blue-400/10 absolute -top-4 right-4">
                            2
                        </div>
                        <div class="text-blue-600 dark:text-blue-400 text-4xl mb-4">
                            <i class="fas fa-wallet"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-dark-text-primary mb-4">
                            Fund Account
                        </h3>
                        <p class="text-gray-600 dark:text-dark-text-secondary">
                            Deposit funds using various payment methods.
                        </p>
                    </div>
                </div>
                <div class="relative">
                    <div class="bg-white dark:bg-dark-bg-secondary p-8 rounded-lg shadow-lg relative z-10">
                        <div class="text-5xl font-bold text-blue-600/10 dark:text-blue-400/10 absolute -top-4 right-4">
                            3
                        </div>
                        <div class="text-blue-600 dark:text-blue-400 text-4xl mb-4">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-dark-text-primary mb-4">
                            Start Earning
                        </h3>
                        <p class="text-gray-600 dark:text-dark-text-secondary">
                            Choose your plan and start earning daily profits.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-20 bg-gray-50 dark:bg-dark-bg-secondary">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-dark-text-primary mb-4">
                    What Our Investors Say
                </h2>
                <p class="text-xl text-gray-600 dark:text-dark-text-secondary">
                    Join thousands of satisfied investors worldwide
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white dark:bg-dark-bg-primary p-8 rounded-lg shadow-lg">
                    <div class="text-yellow-400 mb-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="text-gray-600 dark:text-dark-text-secondary mb-6">
                        "CryptoBroker has transformed my investment strategy. The daily
                        returns are consistent and the platform is very user-friendly."
                    </p>
                    <div class="flex items-center">
                        <img src="https://ui-avatars.com/api/?name=Sarah+Johnson" alt="Sarah Johnson"
                            class="h-12 w-12 rounded-full" />
                        <div class="ml-4">
                            <h4 class="font-bold text-gray-900 dark:text-dark-text-primary">
                                Sarah Johnson
                            </h4>
                            <p class="text-gray-600 dark:text-dark-text-secondary">
                                Premium Investor
                            </p>
                        </div>
                    </div>
                </div>
                <div class="bg-white dark:bg-dark-bg-primary p-8 rounded-lg shadow-lg">
                    <div class="text-yellow-400 mb-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="text-gray-600 dark:text-dark-text-secondary mb-6">
                        "The customer support is exceptional. They helped me understand
                        the platform and choose the right investment plan."
                    </p>
                    <div class="flex items-center">
                        <img src="https://ui-avatars.com/api/?name=Michael+Chen" alt="Michael Chen"
                            class="h-12 w-12 rounded-full" />
                        <div class="ml-4">
                            <h4 class="font-bold text-gray-900 dark:text-dark-text-primary">
                                Michael Chen
                            </h4>
                            <p class="text-gray-600 dark:text-dark-text-secondary">
                                Platinum Investor
                            </p>
                        </div>
                    </div>
                </div>
                <div class="bg-white dark:bg-dark-bg-primary p-8 rounded-lg shadow-lg">
                    <div class="text-yellow-400 mb-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="text-gray-600 dark:text-dark-text-secondary mb-6">
                        "I started with the Standard plan and saw great returns. The
                        platform's security features give me peace of mind."
                    </p>
                    <div class="flex items-center">
                        <img src="https://ui-avatars.com/api/?name=David+Smith" alt="David Smith"
                            class="h-12 w-12 rounded-full" />
                        <div class="ml-4">
                            <h4 class="font-bold text-gray-900 dark:text-dark-text-primary">
                                David Smith
                            </h4>
                            <p class="text-gray-600 dark:text-dark-text-secondary">
                                Standard Investor
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-dark-text-primary mb-4">
                    Frequently Asked Questions
                </h2>
                <p class="text-xl text-gray-600 dark:text-dark-text-secondary">
                    Find answers to common questions about our platform
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white dark:bg-dark-bg-secondary p-8 rounded-lg shadow-lg">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-dark-text-primary mb-4">
                        How do I get started?
                    </h3>
                    <p class="text-gray-600 dark:text-dark-text-secondary">
                        Simply create an account, verify your identity, and make your
                        first deposit to start investing.
                    </p>
                </div>
                <div class="bg-white dark:bg-dark-bg-secondary p-8 rounded-lg shadow-lg">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-dark-text-primary mb-4">
                        How are returns calculated?
                    </h3>
                    <p class="text-gray-600 dark:text-dark-text-secondary">
                        Returns are calculated daily based on your investment plan and are
                        automatically credited to your account.
                    </p>
                </div>
                <div class="bg-white dark:bg-dark-bg-secondary p-8 rounded-lg shadow-lg">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-dark-text-primary mb-4">
                        Is my investment secure?
                    </h3>
                    <p class="text-gray-600 dark:text-dark-text-secondary">
                        Yes, we use advanced security measures and store funds in cold
                        wallets for maximum protection.
                    </p>
                </div>
                <div class="bg-white dark:bg-dark-bg-secondary p-8 rounded-lg shadow-lg">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-dark-text-primary mb-4">
                        How can I withdraw my earnings?
                    </h3>
                    <p class="text-gray-600 dark:text-dark-text-secondary">
                        Withdrawals can be made at any time through your dashboard and are
                        processed within 24 hours.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gray-50 dark:bg-dark-bg-secondary">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-dark-text-primary mb-4">
                    Get in Touch
                </h2>
                <p class="text-xl text-gray-600 dark:text-dark-text-secondary">
                    Have questions? Our team is here to help
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <div class="bg-white dark:bg-dark-bg-primary p-8 rounded-lg shadow-lg">
                    <form>
                        <div class="mb-6">
                            <label
                                class="block text-sm font-medium text-gray-700 dark:text-dark-text-secondary mb-2">Name</label>
                            <input type="text"
                                class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-dark-bg-secondary text-gray-900 dark:text-dark-text-primary focus:outline-none focus:ring-2 focus:ring-blue-500" />
                        </div>
                        <div class="mb-6">
                            <label
                                class="block text-sm font-medium text-gray-700 dark:text-dark-text-secondary mb-2">Email</label>
                            <input type="email"
                                class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-dark-bg-secondary text-gray-900 dark:text-dark-text-primary focus:outline-none focus:ring-2 focus:ring-blue-500" />
                        </div>
                        <div class="mb-6">
                            <label
                                class="block text-sm font-medium text-gray-700 dark:text-dark-text-secondary mb-2">Message</label>
                            <textarea rows="4"
                                class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-dark-bg-secondary text-gray-900 dark:text-dark-text-primary focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                        </div>
                        <button
                            class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition duration-300">
                            Send Message
                        </button>
                    </form>
                </div>
                <div class="space-y-8">
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-lg bg-blue-600 text-white">
                                <i class="fas fa-envelope"></i>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-medium text-gray-900 dark:text-dark-text-primary">
                                Email Support
                            </h3>
                            <p class="mt-1 text-gray-600 dark:text-dark-text-secondary">
                                support@cryptobroker.com
                            </p>
                            <p class="mt-1 text-gray-600 dark:text-dark-text-secondary">
                                24/7 response time
                            </p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-lg bg-blue-600 text-white">
                                <i class="fas fa-phone"></i>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-medium text-gray-900 dark:text-dark-text-primary">
                                Phone Support
                            </h3>
                            <p class="mt-1 text-gray-600 dark:text-dark-text-secondary">
                                +1 (555) 123-4567
                            </p>
                            <p class="mt-1 text-gray-600 dark:text-dark-text-secondary">
                                Mon-Fri, 9am-6pm EST
                            </p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-lg bg-blue-600 text-white">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-medium text-gray-900 dark:text-dark-text-primary">
                                Office Location
                            </h3>
                            <p class="mt-1 text-gray-600 dark:text-dark-text-secondary">
                                123 Crypto Street
                            </p>
                            <p class="mt-1 text-gray-600 dark:text-dark-text-secondary">
                                New York, NY 10001
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('layouts.frontend.partials.footer')
@endsection
