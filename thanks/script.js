// script.js

// Function to navigate back to the previous page
function goBack() {
    window.history.back();
}

// Smooth scroll to top when "Let’s Go" button is clicked
document.addEventListener("DOMContentLoaded", function () {
    const letsGoButton = document.querySelector('.btn-custom');
    if (letsGoButton) {
        letsGoButton.addEventListener('click', function (event) {
            // Prevent the default action
            event.preventDefault();

            // Smooth scroll to top
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });

            // Redirect after scrolling (optional timeout to allow scrolling)
            setTimeout(() => {
                window.location.href = letsGoButton.getAttribute('href');
            }, 300); // Adjust the timeout duration as needed
        });
    }
});
