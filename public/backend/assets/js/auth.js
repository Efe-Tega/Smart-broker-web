// Authentication state management
let currentUser = null;
let verificationMethod = null;

// Function to handle login
async function handleLogin(email, password) {
    try {
        // Here you would make an API call to your backend
        // For demo purposes, we'll simulate a successful login
        const response = await simulateLoginAPI(email, password);

        if (response.success) {
            currentUser = {
                email: email,
                verified: false
            };
            verificationMethod = response.verificationMethod;

            // Redirect to verification page
            window.location.href = '/verification.html';
        } else {
            throw new Error(response.message);
        }
    } catch (error) {
        showError(error.message);
    }
}

// Function to handle verification
async function handleVerification(code) {
    try {
        // Here you would make an API call to verify the code
        const response = await simulateVerificationAPI(code);

        if (response.success) {
            currentUser.verified = true;
            // Redirect to dashboard or home page
            window.location.href = '/dashboard.html';
        } else {
            throw new Error(response.message);
        }
    } catch (error) {
        showError(error.message);
    }
}

// Function to check if user is authenticated and verified
function isAuthenticatedAndVerified() {
    return currentUser && currentUser.verified;
}

// Function to show error messages
function showError(message) {
    const errorElement = document.getElementById('error-message');
    if (errorElement) {
        errorElement.textContent = message;
        errorElement.classList.remove('hidden');
    }
}

// Mock API functions (replace these with real API calls)
async function simulateLoginAPI(email, password) {
    return new Promise((resolve) => {
        setTimeout(() => {
            resolve({
                success: true,
                verificationMethod: Math.random() > 0.5 ? 'email' : 'google-auth'
            });
        }, 1000);
    });
}

async function simulateVerificationAPI(code) {
    return new Promise((resolve) => {
        setTimeout(() => {
            // Simulate verification (accept any 6-digit code)
            const isValid = /^\d{6}$/.test(code);
            resolve({
                success: isValid,
                message: isValid ? 'Verified successfully' : 'Invalid verification code'
            });
        }, 1000);
    });
}

// Event listeners for forms
document.addEventListener('DOMContentLoaded', () => {
    const loginForm = document.getElementById('login-form');
    const verificationForm = document.getElementById('verification-form');

    if (loginForm) {
        loginForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            await handleLogin(email, password);
        });
    }

    if (verificationForm) {
        verificationForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            const code = document.getElementById('verification-code').value;
            await handleVerification(code);
        });
    }
}); 