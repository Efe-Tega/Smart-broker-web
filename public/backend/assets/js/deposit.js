
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

// Function to fetch current crypto rates
async function fetchCryptoRates() {
    try {
        const response = await fetch(
            "https://api.coingecko.com/api/v3/simple/price?ids=bitcoin,ethereum,tether,binancecoin,solana,ripple,cardano,dogecoin,polkadot,tron&vs_currencies=usd"
        );
        const data = await response.json();

        cryptoRates = {
            btc: 1 / data.bitcoin.usd,
            eth: 1 / data.ethereum.usd,
            usdt: 1 / data.tether.usd,
            bnb: 1 / data["binancecoin"].usd,
            sol: 1 / data.solana.usd,
            xrp: 1 / data.ripple.usd,
            ada: 1 / data.cardano.usd,
            doge: 1 / data.dogecoin.usd,
            dot: 1 / data.polkadot.usd,
            trx: 1 / data.tron.usd,
        };
    } catch (error) {
        console.error("Error fetching crypto rates:", error);
        cryptoRates = {
            btc: 1 / 65000,
            eth: 1 / 3500,
            usdt: 1,
            // bnb: 1 / 450,
        };
    }
}

document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('cryptoCurrency').addEventListener('change', function () {
        const selectedIndex = this.selectedIndex;

        if (selectedIndex > 0) {
            const selectedOption = this.options[selectedIndex]
            const networkType = selectedOption.getAttribute('data-network');
            const currencyId = selectedOption.getAttribute('data-id');
            document.getElementById('networkType').value = networkType || '';
            document.getElementById('currencyId').value = currencyId || '';
        } else {
            document.getElementById('networkType').value = '';
            document.getElementById('currencyId').value = '';
        }

    });
})

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
        cryptoSymbolElement.textContent = selectedCrypto;
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
    const cryptoSymbol = document.getElementById("cryptoSymbol").textContent;
    const networkType = document.getElementById('networkType').value;
    document.getElementById("usdAmountDisplay").textContent = amount;
    document.getElementById("cryptoAmountDisplay").textContent = `${cryptoAmount} ${cryptoSymbol}`;
    document.getElementById('networkTypeDisplay').textContent = `${networkType}`

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
    document.getElementById("transaction_image").value = "";
    document.getElementById("imagePreview").classList.add("hidden");

    // Clear QR code
    if (qrCode) {
        document.getElementById("qrcode").innerHTML = "";
        qrCode = null;
    }
}

function submitDeposit() {
    const formData = new FormData();
    const csrfToken = document.querySelector('meta[name="csrf_token"]').getAttribute('content');

    // values from main deposit form
    formData.append('crypto_currency', document.getElementById('cryptoCurrency').value);
    formData.append('usd_amount', document.getElementById('usdAmount').value);
    formData.append('crypto_amount', document.getElementById('cryptoAmount').value);
    formData.append('wallet_address', document.getElementById('walletAddress').value);
    formData.append('currency_id', document.getElementById('currencyId').value);


    // uploaded image from modal
    const fileInput = document.getElementById('transaction_image');
    if (fileInput.files.length > 0) {
        formData.append('transaction_image', fileInput.files[0]);
    } else {
        alert('Please upload your transaction receipt image.');
        return;
    }

    // Show loading state
    const submitBtn = document.querySelector('#confirmationStep button[onclick="submitDeposit()"]');
    submitBtn.disabled = true;
    submitBtn.innerHTML = 'Processing...';

    fetch('/user/submit-deposit', {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': csrfToken
        },
        body: formData
    })
        .then(response => {
            if (!response.ok) throw new Error('Failed to submit');
            return response.json();
        })
        .then(data => {
            console.log(data)
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 4000,
                timerProgressBar: true,
                background: '#10b981',
                color: '#ffffff',
                iconColor: '#ffffff',
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer);
                    toast.addEventListener('mouseleave', Swal.resumeTimer);
                }
            });

            Toast.fire({
                icon: 'success',
                title: data.message || 'Deposit submitted!',
                iconHtml: '<i class="fas fa-check"></i>'
            }).then(() => {
                location.reload();
            })
        })
        .catch(err => {
            console.error(err);
            alert('Error submitting deposit. Please try again.');
        });

    // cancelDeposit();
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
        .getElementById("transaction_image")
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
        .addEventListener("click", async function () {
            const cryptoSelect = document.querySelector("select");
            const amountInput = document.getElementById("usdAmount");

            if (!amountInput.value || amountInput.value < 100) {
                alert("Please enter an amount greater than or equal to $100");
                return;
            }

            const selectedCrypto = cryptoSelect.value;
            const cryptoName =
                cryptoSelect.options[cryptoSelect.selectedIndex].text;

            let walletAddress;
            try {
                const response = await fetch(`/user/wallet-address/${selectedCrypto}`);
                const data = await response.json()

                if (!response.ok) throw new Error(data.error || 'Unknown error');

                walletAddress = data.address;
            } catch (error) {
                alert("Failed to fetch wallet address: " + error.message);
                return;
            }

            const amount = parseFloat(amountInput.value).toLocaleString(
                "en-US", {
                style: "currency",
                currency: "USD",
            });

            showDepositModal(walletAddress, amount, cryptoName);
        });
});

