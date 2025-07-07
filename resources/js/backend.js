document.addEventListener('DOMContentLoaded', () => {
    const toggle = document.getElementById("darkModeToggle");
    const toggleMobile = document.getElementById("darkModeToggleMobile");
    const icon = document.getElementById('theme-icon');
    const html = document.documentElement;
    const menuBtn = document.getElementById("menuBtn");
    const sidebar = document.getElementById("sidebar");
    const overlay = document.getElementById("overlay");
    const profileDropdownBtn = document.getElementById("profileDropdownBtn");
    const profileDropdown = document.getElementById("profileDropdown");
    const profileDropdownWrapper = document.getElementById("profileDropdownWrapper");
    const mobileProfileDropdownBtn = document.getElementById("mobileProfileDropdownBtn");
    const mobileProfileDropdown = document.getElementById("mobileProfileDropdown");
    const mobileProfileDropdownWrapper = document.getElementById("mobileProfileDropdownWrapper");

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

    // Event listeners
    toggleMobile.addEventListener('click', toggleTheme);
    toggle.addEventListener('click', toggleTheme);
    menuBtn.addEventListener("click", toggleSidebar);
    overlay.addEventListener("click", toggleSidebar);
    profileDropdownBtn.addEventListener("click", toggleProfileDropdown);
    mobileProfileDropdownBtn.addEventListener("click", toggleMobileProfileDropdown);
    document.addEventListener("click", closeAllDropdowns);

    // Initialize charts
    initCharts();

    // Functions
    function toggleTheme() {
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
    }

    function toggleSidebar() {
        sidebar.classList.toggle("-translate-x-full");
        overlay.classList.toggle("hidden");
        document.body.classList.toggle("overflow-hidden");
    }

    function toggleProfileDropdown(e) {
        e.stopPropagation();
        const isOpen = profileDropdown.classList.contains("opacity-100");
        profileDropdown.classList.toggle("opacity-100", !isOpen);
        profileDropdown.classList.toggle("scale-100", !isOpen);
        profileDropdown.classList.toggle("pointer-events-auto", !isOpen);
        profileDropdown.classList.toggle("opacity-0", isOpen);
        profileDropdown.classList.toggle("scale-95", isOpen);
        profileDropdown.classList.toggle("pointer-events-none", isOpen);
    }

    function toggleMobileProfileDropdown(e) {
        e.stopPropagation();
        const isOpen = mobileProfileDropdown.classList.contains("opacity-100");
        mobileProfileDropdown.classList.toggle("opacity-100", !isOpen);
        mobileProfileDropdown.classList.toggle("scale-100", !isOpen);
        mobileProfileDropdown.classList.toggle("pointer-events-auto", !isOpen);
        mobileProfileDropdown.classList.toggle("opacity-0", isOpen);
        mobileProfileDropdown.classList.toggle("scale-95", isOpen);
        mobileProfileDropdown.classList.toggle("pointer-events-none", isOpen);
    }

    function closeAllDropdowns(e) {
        if (!profileDropdownWrapper.contains(e.target)) {
            profileDropdown.classList.remove("opacity-100", "scale-100", "pointer-events-auto");
            profileDropdown.classList.add("opacity-0", "scale-95", "pointer-events-none");
        }

        if (!mobileProfileDropdownWrapper.contains(e.target)) {
            mobileProfileDropdown.classList.remove("opacity-100", "scale-100", "pointer-events-auto");
            mobileProfileDropdown.classList.add("opacity-0", "scale-95", "pointer-events-none");
        }
    }

    function initCharts() {
        // Profit History Chart
        const profitCtx = document.getElementById("profitChart")?.getContext("2d");
        if (profitCtx) {
            new Chart(profitCtx, {
                type: "line",
                data: {
                    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
                    datasets: [{
                        label: "Monthly Profit",
                        data: [650, 900, 1100, 1200, 1250, 1500],
                        borderColor: "rgb(59, 130, 246)",
                        tension: 0.1,
                    },],
                },
                options: getChartOptions(),
            });
        }

        // Investment Distribution Chart
        const investmentCtx = document.getElementById("investmentChart")?.getContext("2d");
        if (investmentCtx) {
            new Chart(investmentCtx, {
                type: "doughnut",
                data: {
                    labels: ["Premium Plan", "Gold Plan", "Platinum Plan"],
                    datasets: [{
                        data: [60, 25, 15],
                        backgroundColor: [
                            "rgb(59, 130, 246)",
                            "rgb(251, 191, 36)",
                            "rgb(167, 139, 250)",
                        ],
                    },],
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: true,
                    aspectRatio: 2,
                    plugins: {
                        legend: {
                            position: "right",
                            align: "center",
                            labels: {
                                color: html.classList.contains("dark") ? "#e4e6ea" : "#374151",
                            },
                        },
                    },
                    layout: {
                        padding: {
                            right: 50,
                        },
                    },
                },
            });
        }
    }

    function getChartOptions() {
        return {
            responsive: true,
            maintainAspectRatio: true,
            aspectRatio: 2.5,
            plugins: {
                legend: {
                    position: "bottom",
                    labels: {
                        color: html.classList.contains("dark") ? "#e4e6ea" : "#374151",
                    },
                },
            },
            scales: {
                y: {
                    beginAtZero: true,
                    grid: {
                        drawBorder: false,
                        color: html.classList.contains("dark") ? "#374151" : "#e5e7eb",
                    },
                    ticks: {
                        maxTicksLimit: 5,
                        color: html.classList.contains("dark") ? "#e4e6ea" : "#374151",
                    },
                },
                x: {
                    grid: {
                        display: false,
                    },
                    ticks: {
                        color: html.classList.contains("dark") ? "#e4e6ea" : "#374151",
                    },
                },
            },
        };
    }
});