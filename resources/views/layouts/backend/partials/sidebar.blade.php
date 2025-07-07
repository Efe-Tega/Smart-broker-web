<div id="sidebar"
    class="w-64 bg-white dark:bg-dark-bg-secondary h-screen shadow-lg fixed left-0 transform -translate-x-full lg:translate-x-0 transition-transform duration-300 ease-in-out z-30">

    @php
        $route = Route::current()->getName();
    @endphp

    <div class="p-4">
        <nav class="space-y-2">
            <x-sidebar-link linkUrl="{{ route('user.dashboard') }}"
                class="{{ $route === 'user.dashboard' ? 'text-blue-600 bg-blue-50 dark:bg-blue-900/20' : 'text-gray-600 dark:text-dark-text-primary hover:bg-blue-50 dark:hover:bg-blue-900/20' }}"
                icon="fa-chart-line" linkText="Dashboard" />

            <x-sidebar-link linkUrl="{{ route('user.transaction-history') }}"
                class="{{ $route === 'user.transaction-history' ? 'text-blue-600 bg-blue-50 dark:bg-blue-900/20' : 'text-gray-600 dark:text-dark-text-primary hover:bg-blue-50 dark:hover:bg-blue-900/20' }}"
                icon="fa-history" linkText="History" />

            <x-sidebar-link linkUrl="{{ route('user.deposit') }}"
                class="{{ $route === 'user.deposit' ? 'text-blue-600 bg-blue-50 dark:bg-blue-900/20' : 'text-gray-600 dark:text-dark-text-primary hover:bg-blue-50 dark:hover:bg-blue-900/20' }}"
                icon="fa-wallet" linkText="Deposits" />

            <x-sidebar-link linkUrl="{{ route('user.withdraws') }}"
                class="{{ $route === 'user.withdraws' ? 'text-blue-600 bg-blue-50 dark:bg-blue-900/20' : 'text-gray-600 dark:text-dark-text-primary hover:bg-blue-50 dark:hover:bg-blue-900/20' }}"
                icon="fa-money-bill-wave" linkText="Withdraw" />

            <x-sidebar-link linkUrl="{{ route('user.investments') }}"
                class="{{ $route === 'user.investments' ? 'text-blue-600 bg-blue-50 dark:bg-blue-900/20' : 'text-gray-600 dark:text-dark-text-primary hover:bg-blue-50 dark:hover:bg-blue-900/20' }}"
                icon="fa-coins" linkText="Investments" />

            <x-sidebar-link linkUrl="{{ route('user.settings') }}"
                class="{{ $route === 'user.settings' ? 'text-blue-600 bg-blue-50 dark:bg-blue-900/20' : 'text-gray-600 dark:text-dark-text-primary hover:bg-blue-50 dark:hover:bg-blue-900/20' }}"
                icon="fa-cog" linkText="Settings" />
        </nav>
    </div>
</div>
