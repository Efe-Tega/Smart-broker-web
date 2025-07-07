<nav class="bg-white dark:bg-dark-bg-secondary shadow-lg fixed top-0 left-0 right-0 z-40 transition-colors duration-200">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between items-center h-16">
            <!-- Left side with menu and logo -->
            <div class="flex items-center flex-1">
                <button id="menuBtn"
                    class="text-gray-600 dark:text-dark-text-primary hover:text-blue-600 inline-flex items-center justify-center p-2 rounded-md lg:hidden">
                    <i class="fas fa-bars text-xl"></i>
                </button>
                <a href="/" class="flex items-center ml-2 lg:ml-0">
                    <span class="text-2xl font-bold text-blue-600">{{ config('app.name') }}</span>
                </a>
            </div>

            <!-- Mobile icons (always visible) -->
            <div class="flex items-center space-x-4 lg:hidden">
                <!-- Dark Mode Toggle -->
                <button id="darkModeToggleMobile"
                    class="text-gray-600 dark:text-dark-text-primary hover:text-blue-600 dark:hover:text-blue-400">
                    <i id="theme-icon" class="fas fa-moon text-xl"></i>
                </button>

                <!-- Mobile Profile Dropdown -->
                <div class="relative" id="mobileProfileDropdownWrapper">
                    <button id="mobileProfileDropdownBtn"
                        class="flex items-center text-gray-600 dark:text-dark-text-primary hover:text-blue-600 dark:hover:text-blue-400 focus:outline-none"
                        type="button">
                        <img src="https://ui-avatars.com/api/?name=John+Doe" alt="Profile"
                            class="h-8 w-8 rounded-full" />

                    </button>
                    <div id="mobileProfileDropdown"
                        class="origin-top-right absolute right-0 mt-2 w-40 rounded-md shadow-lg bg-white dark:bg-dark-bg-secondary ring-1 ring-black ring-opacity-5 opacity-0 scale-95 pointer-events-none transition-all duration-200 z-50">
                        <a href="{{ route('user.settings') }}"
                            class="block px-4 py-2 text-gray-700 dark:text-dark-text-primary hover:bg-gray-100 dark:hover:bg-dark-bg-primary transition">
                            <i class="fas fa-cog mr-2"></i> Settings
                        </a>
                        <a href="{{ route('user.logout') }}"
                            class="block px-4 py-2 text-gray-700 dark:text-dark-text-primary hover:bg-gray-100 dark:hover:bg-dark-bg-primary transition">
                            <i class="fas fa-sign-out-alt mr-2"></i> Logout
                        </a>
                    </div>
                </div>
            </div>

            <!-- Desktop icons -->
            <div class="hidden lg:flex items-center space-x-8">
                <!-- Dark Mode Toggle -->
                <button id="darkModeToggle"
                    class="text-gray-600 dark:text-dark-text-primary hover:text-blue-600 dark:hover:text-blue-400">
                    <i id="theme-icon" class=" fas fa-moon "></i>
                </button>
                <a href="#"
                    class="text-gray-600 dark:text-dark-text-primary hover:text-blue-600 dark:hover:text-blue-400">
                    <i class="fas fa-bell"></i>
                    <span class="ml-1">Notifications</span>
                </a>
                <div class="relative" id="profileDropdownWrapper">
                    <button id="profileDropdownBtn"
                        class="flex items-center text-gray-600 dark:text-dark-text-primary hover:text-blue-600 dark:hover:text-blue-400 focus:outline-none"
                        type="button">
                        <img src="https://ui-avatars.com/api/?name=John+Doe" alt="Profile"
                            class="h-8 w-8 rounded-full" />
                        <span class="ml-2">John Doe</span>
                        <i class="fas fa-chevron-down ml-1"></i>
                    </button>
                    <div id="profileDropdown"
                        class="origin-top-right absolute right-0 mt-2 w-40 rounded-md shadow-lg bg-white dark:bg-dark-bg-secondary ring-1 ring-black ring-opacity-5 opacity-0 scale-95 pointer-events-none transition-all duration-200 z-50">
                        <a href="{{ route('user.settings') }}"
                            class="block px-4 py-2 text-gray-700 dark:text-dark-text-primary hover:bg-gray-100 dark:hover:bg-dark-bg-primary transition">
                            <i class="fas fa-cog mr-2"></i> Settings
                        </a>
                        <a href="{{ route('user.logout') }}"
                            class="block px-4 py-2 text-gray-700 dark:text-dark-text-primary hover:bg-gray-100 dark:hover:bg-dark-bg-primary transition">
                            <i class="fas fa-sign-out-alt mr-2"></i> Logout
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
