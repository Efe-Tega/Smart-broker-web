// Mobile table functionality
function toggleWithdrawalDetails(row) {
    if (window.innerWidth >= 1024) return;

    const mobileDetails = row.querySelector(".mobile-details");
    const expandIcon = row.querySelector(".expand-icon");

    mobileDetails.classList.toggle("hidden");
    expandIcon.classList.toggle("fa-plus");
    expandIcon.classList.toggle("fa-minus");
}

// Crypto conversion functionality
let cryptoRates = {};
const cryptoSymbols = {
    btc: "BTC",
    eth: "ETH",
    usdt: "USDT",
    bnb: "BNB",
};

// Function to fetch current crypto rates
async function fetchCryptoRates() {
    try {
        const response = await fetch(
            "https://api.coingecko.com/api/v3/simple/price?ids=bitcoin,ethereum,tether,binance-coin&vs_currencies=usd"
        );
        const data = await response.json();

        cryptoRates = {
            btc: 1 / data.bitcoin.usd,
            eth: 1 / data.ethereum.usd,
            usdt: 1 / data.tether.usd,
            bnb: 1 / data["binance-coin"].usd,
        };
    } catch (error) {
        console.error("Error fetching crypto rates:", error);
        cryptoRates = {
            btc: 1 / 65000,
            eth: 1 / 3500,
            usdt: 1,
            bnb: 1 / 450,
        };
    }
    updateCryptoAmount();
}

// Function to update crypto amount
function updateCryptoAmount() {
    const usdAmount = document.getElementById("usdAmount").value;
    const cryptoSelect = document.getElementById("cryptoSelect");
    const selectedCrypto = cryptoSelect.value;
    const cryptoAmount = document.getElementById("cryptoAmount");
    const cryptoSymbolElement = document.getElementById("cryptoSymbol");

    if (usdAmount && usdAmount >= 100 && cryptoRates[selectedCrypto]) {
        const convertedAmount = usdAmount * cryptoRates[selectedCrypto];
        cryptoAmount.value = convertedAmount.toFixed(8);
        cryptoSymbolElement.textContent = cryptoSymbols[selectedCrypto];
    } else {
        cryptoAmount.value = "";
        cryptoSymbolElement.textContent = "";
    }
}

// Withdrawal form functionality
document
    .getElementById("withdrawalForm")
    .addEventListener("submit", function (e) {
        e.preventDefault();

        const usdAmount = document.getElementById("usdAmount").value;
        const walletAddress = document.getElementById("walletAddress").value;

        // Basic validation
        if (!usdAmount || usdAmount < 100 || usdAmount > 10000) {
            alert("Please enter a valid amount between $100 and $10,000");
            return;
        }

        if (!walletAddress) {
            alert("Please enter a wallet address");
            return;
        }

        showWithdrawalModal();
    });

function showWithdrawalModal() {
    const usdAmount = parseFloat(
        document.getElementById("usdAmount").value
    ).toLocaleString("en-US", {
        style: "currency",
        currency: "USD",
    });
    const cryptoAmount = document.getElementById("cryptoAmount").value;
    const cryptoSymbol =
        document.getElementById("cryptoSymbol").textContent;
    const walletAddress = document.getElementById("walletAddress").value;

    document.getElementById("usdAmountDisplay").textContent = usdAmount;
    document.getElementById(
        "cryptoAmountDisplay"
    ).textContent = `${cryptoAmount} ${cryptoSymbol}`;
    document.getElementById("confirmWalletAddress").value = walletAddress;
    document.getElementById("withdrawalModal").classList.remove("hidden");
}

function cancelWithdrawal() {
    document.getElementById("withdrawalModal").classList.add("hidden");
}

function confirmWithdrawal() {
    // Here you would typically send the withdrawal request to your server
    alert("Withdrawal request submitted successfully!");
    cancelWithdrawal();
    document.getElementById("withdrawalForm").reset();
    updateCryptoAmount();
}

// Initialize
document.addEventListener("DOMContentLoaded", async function () {
    await fetchCryptoRates();
    setInterval(fetchCryptoRates, 60000);

    document
        .getElementById("usdAmount")
        .addEventListener("input", updateCryptoAmount);
    document
        .getElementById("cryptoSelect")
        .addEventListener("change", updateCryptoAmount);
});