
// Mobile table functionality
function toggleDepositDetails(row) {
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
}

// Function to update crypto amount
function updateCryptoAmount() {
    const usdAmount = document.getElementById("usdAmount").value;
    const cryptoSelect = document.querySelector("select");
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

// Modal functionality
let countdownInterval;
let qrCode = null;

function startCountdown() {
    let timeLeft = 10 * 60; // 10 minutes in seconds
    const countdownEl = document.getElementById("countdown");

    if (countdownInterval) {
        clearInterval(countdownInterval);
    }

    countdownInterval = setInterval(() => {
        const minutes = Math.floor(timeLeft / 60);
        const seconds = timeLeft % 60;
        countdownEl.textContent = `${minutes
            .toString()
            .padStart(2, "0")}:${seconds.toString().padStart(2, "0")}`;

        if (timeLeft <= 0) {
            clearInterval(countdownInterval);
            cancelDeposit();
            return;
        }
        timeLeft--;
    }, 1000);
}

function showDepositModal(walletAddress, amount, crypto) {
    // Clear any existing QR code
    const qrcodeDiv = document.getElementById("qrcode");
    qrcodeDiv.innerHTML = "";

    document.getElementById("depositModal").classList.remove("hidden");
    document.getElementById("paymentStep").classList.remove("hidden");
    document.getElementById("confirmationStep").classList.add("hidden");
    document.getElementById("walletAddress").value = walletAddress;

    // Update the split display of USD and crypto amounts
    const cryptoAmount = document.getElementById("cryptoAmount").value;
    const cryptoSymbol =
        document.getElementById("cryptoSymbol").textContent;
    document.getElementById("usdAmountDisplay").textContent = amount;
    document.getElementById(
        "cryptoAmountDisplay"
    ).textContent = `${cryptoAmount} ${cryptoSymbol}`;

    // Generate QR Code
    qrCode = new QRCode(qrcodeDiv, {
        text: walletAddress,
        width: 128,
        height: 128,
        colorDark: "#000000",
        colorLight: "#ffffff",
        correctLevel: QRCode.CorrectLevel.H,
    });

    // Start countdown
    startCountdown();
}

function copyWalletAddress() {
    const walletAddress = document.getElementById("walletAddress");
    walletAddress.select();
    document.execCommand("copy");
    alert("Wallet address copied!");
}

function showConfirmationStep() {
    document.getElementById("paymentStep").classList.add("hidden");
    document.getElementById("confirmationStep").classList.remove("hidden");
    if (countdownInterval) {
        clearInterval(countdownInterval);
    }
}

function backToPayment() {
    document.getElementById("paymentStep").classList.remove("hidden");
    document.getElementById("confirmationStep").classList.add("hidden");
    startCountdown();
}

function cancelDeposit() {
    if (countdownInterval) {
        clearInterval(countdownInterval);
    }
    document.getElementById("depositModal").classList.add("hidden");
    document.getElementById("transaction-image").value = "";
    document.getElementById("imagePreview").classList.add("hidden");

    // Clear QR code
    if (qrCode) {
        document.getElementById("qrcode").innerHTML = "";
        qrCode = null;
    }
}

function submitDeposit() {
    // Here you would typically send the data to your server
    cancelDeposit();
}

// Initialize everything when the DOM is loaded
document.addEventListener("DOMContentLoaded", async function () {
    await fetchCryptoRates();
    setInterval(fetchCryptoRates, 60000);

    // Add event listeners for amount and currency changes
    document
        .getElementById("usdAmount")
        .addEventListener("input", updateCryptoAmount);
    document
        .querySelector("select")
        .addEventListener("change", updateCryptoAmount);

    // Image preview functionality
    document
        .getElementById("transaction-image")
        .addEventListener("change", function (e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    const previewImg = document.getElementById("previewImg");
                    previewImg.src = e.target.result;
                    document
                        .getElementById("imagePreview")
                        .classList.remove("hidden");
                };
                reader.readAsDataURL(file);
            }
        });

    // Generate wallet address button click handler
    document
        .querySelector("button.bg-blue-600")
        .addEventListener("click", function () {
            const cryptoSelect = document.querySelector("select");
            const amountInput = document.getElementById("usdAmount");

            if (!amountInput.value || amountInput.value < 100) {
                alert("Please enter an amount greater than or equal to $100");
                return;
            }

            const demoWallets = {
                btc: "1A1zP1eP5QGefi2DMPTfTL5SLmv7DivfNa",
                eth: "0x742d35Cc6634C0532925a3b844Bc454e4438f44e",
                usdt: "TKFLguL3uHxe3sZvxPgHCjK5YftvuXsXE5",
                bnb: "bnb1jxfh2g85q3v0tdq56fnevx6xcxtcnhtsmcu64m",
            };

            const selectedCrypto = cryptoSelect.value;
            const cryptoName =
                cryptoSelect.options[cryptoSelect.selectedIndex].text;
            const walletAddress = demoWallets[selectedCrypto];
            const amount = parseFloat(amountInput.value).toLocaleString(
                "en-US", {
                style: "currency",
                currency: "USD",
            }
            );

            showDepositModal(walletAddress, amount, cryptoName);
        });
});

