<!DOCTYPE html>
<html lang="en" class="light">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ config('app.name') }} Professional Crypto Investment Platform</title>
    @vite('resources/css/app.css')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('backend/assets/styles/main.css') }}" />
</head>

<body class="bg-gray-50 dark:bg-dark-bg-primary dark:text-dark-text-primary transition-colors duration-200">
    @yield('content')

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const toggle = document.getElementById("darkModeToggle");
            const toggleMobile = document.getElementById("darkModeToggleMobile");
            const icon = document.getElementById('theme-icon');
            const html = document.documentElement;

            // Load theme from localStorage
            if (localStorage.theme === 'dark') {
                html.classList.add('dark');
                icon.classList.remove('fa-moon');
                icon.classList.add('fa-sun');
            } else {
                html.classList.remove('dark');
                icon.classList.remove('fa-sun');
                icon.classList.add('fa-moon');
            }

            toggleMobile.addEventListener('click', () => {
                html.classList.toggle('dark');
                const isDark = html.classList.contains('dark');
                localStorage.theme = isDark ? 'dark' : 'light';

                if (isDark) {
                    icon.classList.remove('fa-moon');
                    icon.classList.add('fa-sun')
                } else {
                    icon.classList.remove('fa-sun');
                    icon.classList.add('fa-moon');
                }

            });

            toggle.addEventListener('click', () => {
                html.classList.toggle('dark');
                const isDark = html.classList.contains('dark');
                localStorage.theme = isDark ? 'dark' : 'light';

                if (isDark) {
                    icon.classList.remove('fa-moon');
                    icon.classList.add('fa-sun')
                } else {
                    icon.classList.remove('fa-sun');
                    icon.classList.add('fa-moon');
                }

            });

            // Mobile menu functionality
            const mobileMenuButton = document.querySelector(".mobile-menu-button");
            const mobileMenu = document.querySelector(".mobile-menu");

            mobileMenuButton.addEventListener("click", () => {
                mobileMenu.classList.toggle("hidden");
            });

            // Close mobile menu when clicking a link
            const mobileMenuLinks = document.querySelectorAll(".mobile-menu a");
            mobileMenuLinks.forEach((link) => {
                link.addEventListener("click", () => {
                    mobileMenu.classList.add("hidden");
                });
            });
        });

        // Profit Calculator Functionality
        document.addEventListener("DOMContentLoaded", function() {
            const investmentAmount = document.getElementById("investmentAmount");
            const investmentPlan = document.getElementById("investmentPlan");
            const investmentDuration =
                document.getElementById("investmentDuration");
            const calculateButton = document.getElementById("calculateButton");
            const profitResults = document.getElementById("profitResults");
            const dailyProfit = document.getElementById("dailyProfit");
            const totalProfit = document.getElementById("totalProfit");
            const totalReturn = document.getElementById("totalReturn");
            const roi = document.getElementById("roi");

            const planRates = {
                standard: 0.02, // 2% daily
                premium: 0.03, // 3% daily
                platinum: 0.04, // 4% daily
            };

            calculateButton.addEventListener("click", function() {
                const amount = parseFloat(investmentAmount.value);
                const rate = planRates[investmentPlan.value];
                const days = parseInt(investmentDuration.value);

                if (!amount || amount < 1000) {
                    alert("Please enter an investment amount of at least $1,000");
                    return;
                }

                // Calculate profits
                const dailyProfitAmount = amount * rate;
                const totalProfitAmount = dailyProfitAmount * days;
                const totalReturnAmount = amount + totalProfitAmount;
                const roiPercentage = (totalProfitAmount / amount) * 100;

                // Update display
                dailyProfit.textContent = `$${dailyProfitAmount.toFixed(2)}`;
                totalProfit.textContent = `$${totalProfitAmount.toFixed(2)}`;
                totalReturn.textContent = `$${totalReturnAmount.toFixed(2)}`;
                roi.textContent = `${roiPercentage.toFixed(2)}%`;

                // Show results
                profitResults.classList.remove("hidden");
            });

            // Add input validation
            investmentAmount.addEventListener("input", function() {
                const amount = parseFloat(this.value);
                if (amount < 1000) {
                    this.classList.add("border-red-500");
                } else {
                    this.classList.remove("border-red-500");
                }
            });
        });
    </script>
</body>

</html>
