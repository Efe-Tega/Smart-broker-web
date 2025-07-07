// Investment Calculator
const planSelect = document.getElementById("planSelect");
const investmentAmount = document.getElementById("investmentAmount");
const dailyProfit = document.getElementById("dailyProfit");
const totalProfit = document.getElementById("totalProfit");
const totalReturn = document.getElementById("totalReturn");

function calculateReturns() {
    const amount = parseFloat(investmentAmount.value) || 0;
    let rate = 0;

    switch (planSelect.value) {
        case "standard":
            rate = 0.02;
            break;
        case "premium":
            rate = 0.03;
            break;
        case "platinum":
            rate = 0.04;
            break;
    }

    const daily = amount * rate;
    const total = daily * 90;

    dailyProfit.textContent = `$${daily.toFixed(2)}`;
    totalProfit.textContent = `$${total.toFixed(2)}`;
    totalReturn.textContent = `$${(amount + total).toFixed(2)}`;
}

planSelect.addEventListener("change", calculateReturns);
investmentAmount.addEventListener("input", calculateReturns);