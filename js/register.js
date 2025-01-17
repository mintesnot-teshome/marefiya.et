document.addEventListener('DOMContentLoaded', function() {
    const registerForm = document.querySelector('form');
    const password = document.getElementById('password');
    const confirmPassword = document.getElementById('confirm-password');
    const phone = document.getElementById('phone');

    registerForm.addEventListener('submit', function(e) {
        // Password validation
        if (password.value !== confirmPassword.value) {
            e.preventDefault();
            alert('Passwords do not match!');
            return;
        }

        // Password strength validation
        if (password.value.length < 8) {
            e.preventDefault();
            alert('Password must be at least 8 characters long!');
            return;
        }

        // Phone number validation
        const phoneRegex = /^[0-9]{9,}$/;
        if (!phoneRegex.test(phone.value)) {
            e.preventDefault();
            alert('Please enter a valid phone number!');
            return;
        }
    });

    // Real-time password match validation
    confirmPassword.addEventListener('input', function() {
        if (password.value !== confirmPassword.value) {
            confirmPassword.setCustomValidity('Passwords do not match!');
        } else {
            confirmPassword.setCustomValidity('');
        }
    });
}); 