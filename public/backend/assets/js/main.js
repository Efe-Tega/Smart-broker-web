// Mobile menu functionality
document.addEventListener('DOMContentLoaded', () => {
    const mobileMenuButton = document.querySelector('.mobile-menu-button');
    const mobileMenu = document.querySelector('.mobile-menu');

    mobileMenuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });

    // Close mobile menu when clicking outside
    document.addEventListener('click', (e) => {
        if (!mobileMenu.contains(e.target) && !mobileMenuButton.contains(e.target)) {
            mobileMenu.classList.add('hidden');
        }
    });

    // Profit Calculator
    const calculator = {
        amount: document.querySelector('input[type="number"]'),
        plan: document.querySelector('select'),
        calculateButton: document.querySelector('button'),
        
        calculateProfit() {
            const amount = parseFloat(this.amount.value) || 0;
            const plan = this.plan.value;
            let profit = 0;
            let period = '';

            switch(plan) {
                case 'Premium (2% Daily)':
                    profit = amount * 0.02;
                    period = 'daily';
                    break;
                case 'Gold (10% Weekly)':
                    profit = amount * 0.10;
                    period = 'weekly';
                    break;
                case 'Platinum (15% Monthly)':
                    profit = amount * 0.15;
                    period = 'monthly';
                    break;
            }

            if (amount > 0) {
                alert(`Estimated ${period} profit: $${profit.toFixed(2)}`);
            } else {
                alert('Please enter a valid investment amount');
            }
        }
    };

    calculator.calculateButton.addEventListener('click', () => calculator.calculateProfit());
}); 