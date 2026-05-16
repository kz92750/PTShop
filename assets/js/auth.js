// Auth helper for frontend pages
// Configure API endpoint used for authentication. Change to your backend URL if needed.
const AUTH_API = window.AUTH_API || '/api/auth.php';

async function login() {
    const email = document.getElementById('loginEmail').value.trim();
    const password = document.getElementById('loginPassword').value;
    const remember = document.getElementById('rememberMe').checked;

    const alertBox = document.getElementById('loginAlert');

    if (!email || !password) {
        showAlert(alertBox, 'danger', 'Wypełnij wszystkie pola.');
        return;
    }

    showAlert(alertBox, 'info', 'Logowanie...');

    try {
        const res = await fetch(AUTH_API, {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ action: 'login', email, password, remember }),
            credentials: 'include'
        });
        const data = await res.json();
        if (data.success) {
            showAlert(alertBox, 'success', 'Zalogowano pomyślnie. Przekierowanie...');
            setTimeout(() => window.location.href = 'index.php', 800);
        } else {
            showAlert(alertBox, 'danger', data.error || 'Błąd logowania');
        }
    } catch (err) {
        showAlert(alertBox, 'danger', 'Błąd sieci. Spróbuj ponownie.');
        console.error(err);
    }
}

async function registerUser() {
    const name = document.getElementById('regName').value.trim();
    const email = document.getElementById('regEmail').value.trim();
    const password = document.getElementById('regPassword').value;
    const password2 = document.getElementById('regPassword2').value;

    const alertBox = document.getElementById('registerAlert');

    if (!name || !email || !password || !password2) {
        showAlert(alertBox, 'danger', 'Wypełnij wszystkie pola.');
        return;
    }
    if (password !== password2) {
        showAlert(alertBox, 'danger', 'Hasła nie są takie same.');
        return;
    }
    if (password.length < 6) {
        showAlert(alertBox, 'danger', 'Hasło musi mieć minimum 6 znaków.');
        return;
    }

    showAlert(alertBox, 'info', 'Rejestracja...');

    try {
        const res = await fetch(AUTH_API, {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ action: 'register', name, email, password }),
            credentials: 'include'
        });
        const data = await res.json();
        if (data.success) {
            showAlert(alertBox, 'success', 'Konto utworzone. Przekierowanie do logowania...');
            setTimeout(() => window.location.href = 'login.php', 800);
        } else {
            showAlert(alertBox, 'danger', data.error || 'Błąd rejestracji');
        }
    } catch (err) {
        showAlert(alertBox, 'danger', 'Błąd sieci. Spróbuj ponownie.');
        console.error(err);
    }
}

function showAlert(el, type, message) {
    if (!el) return;
    el.className = 'alert alert-' + type;
    el.textContent = message;
    el.style.display = 'block';
}
