document.addEventListener('DOMContentLoaded', function () {
    // Form validation
    const bidForm = document.getElementById('bidForm');

    if (bidForm) {
        bidForm.addEventListener('submit', function (event) {
            const amount = document.getElementById('amount').value;
            const email = document.getElementById('email').value;

            if (parseFloat(amount) <= 0) {
                event.preventDefault();
                alert('Please enter a valid bid amount greater than 0');
                return false;
            }

            if (!email.match(/^[^\s@]+@[^\s@]+\.[^\s@]+$/)) {
                event.preventDefault();
                alert('Please enter a valid email address');
                return false;
            }
        });
    }

    // Auto-dismiss alerts after 9 seconds
    const alerts = document.querySelectorAll('.alert');
    alerts.forEach(alert => {
        setTimeout(() => {
            const bsAlert = bootstrap.Alert.getOrCreateInstance(alert);
            bsAlert.close();
        }, 9000);
    });
});

// загрузка бэкграунда на первый экран
document.addEventListener("DOMContentLoaded", function () {
    const video = document.getElementById("background-video");
    const isMobile = window.matchMedia("(max-width: 768px)").matches;
    video.src = isMobile ? "/assets/video/BG_vertical.mp4" : "/assets/video/BG.mp4";
});

// Function to set a cookie
function setCookie(name, value, days) {
    const date = new Date();
    date.setTime(date.getTime() + (days * 24 * 60 * 6000 * 1000));
    document.cookie = `${name}=${encodeURIComponent(value)};expires=${date.toUTCString()};path=/`;
}

// Function to get a cookie by name
function getCookie(name) {
    const cookies = document.cookie.split('; ');
    for (let i = 0; i < cookies.length; i++) {
        const [key, value] = cookies[i].split('=');
        if (key === name) return decodeURIComponent(value);
    }
    return '';
}

// Save form data to cookies (except for the bid amount)
function saveFormData() {
    const form = document.querySelector('#bidForm');
    const elements = form.elements;
    for (let i = 0; i < elements.length; i++) {
        const el = elements[i];
        if (el.name && el.name !== 'amount') {
            setCookie(el.name, el.value);
        }
    }
}

// Load form data from cookies
function loadFormData() {
    const form = document.querySelector('#bidForm');
    const elements = form.elements;
    for (let i = 0; i < elements.length; i++) {
        const el = elements[i];
        if (el.name && el.name !== 'amount') {
            el.value = getCookie(el.name) || '';
        }
    }
}

// Run on page load
window.onload = loadFormData;
