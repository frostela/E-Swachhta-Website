document.addEventListener('DOMContentLoaded', () => {
    const registerForm = document.getElementById('registerForm');

    registerForm.addEventListener('submit', (event) => {
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;
        const termsCheck = document.getElementById('termsCheck').checked;

        // Basic validation
        if (name && email && password && termsCheck) {
            // Show alert and then refresh the page after the user clicks "OK"
            alert(`Thank you for registering, ${name}!`);
            window.location.reload(); // Refresh the page
        } else {
            alert('Please fill in all fields and agree to the terms.');
            return false; // Prevent form submission if validation fails
        }
    });
}); 