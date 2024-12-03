
document.addEventListener('DOMContentLoaded', () => {
    // Form Validation Enhancement
    const form = document.getElementById('form');

    form.addEventListener('submit', function (event) {
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const phone = document.getElementById('phone').value;
        const message = document.getElementById('message').value;

        // Basic validation
        if (name && email && phone && message) {
            // Show alert and then refresh the page after the user clicks "OK"
            alert(`Your query has been submitted successfully`);
            window.location.reload(); // Refresh the page
        } else {
            alert('Please fill in all fields.');
            return false; // Prevent form submission if validation fails
        }
    });
}); 

    // Back to Top Button
    const backToTopButton = document.createElement('button');
    backToTopButton.id = 'back-to-top';
    backToTopButton.className = 'btn btn-primary';
    backToTopButton.style.display = 'none';
    backToTopButton.style.position = 'fixed';
    backToTopButton.style.bottom = '20px';
    backToTopButton.style.right = '20px';
    backToTopButton.style.zIndex = '1000'; // Ensure it's above other content
    backToTopButton.innerHTML = '&uarr; Top';
    document.body.appendChild(backToTopButton);

    window.addEventListener('scroll', function () {
        if (window.scrollY > 300) {
            backToTopButton.style.display = 'block';
        } else {
            backToTopButton.style.display = 'none';
        }
    });

    backToTopButton.addEventListener('click', function () {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });

    // Newsletter Signup Confirmation
    const newsletterForm = document.querySelector('form[action*="newsletter"]');
    if (newsletterForm) {
        newsletterForm.addEventListener('submit', function (event) {
            event.preventDefault();
            const emailInput = newsletterForm.querySelector('input[type="email"]');
            if (emailInput && emailInput.value) {
                alert('Thank you for signing up for our newsletter!');
                newsletterForm.reset(); // Clear form fields
            } else {
                alert('Please enter a valid email address.');
            }
        });
    }

    // Dynamic Footer Social Links
    const socialLinks = document.querySelectorAll('.footer-social-link');
    socialLinks.forEach(link => {
        link.addEventListener('click', function (event) {
            event.preventDefault(); // Prevent default link behavior
            window.open(link.href, '_blank');
        });
    });

