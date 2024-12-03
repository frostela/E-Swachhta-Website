// Smooth scrolling for navbar links
document.querySelectorAll('a.nav-link').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        // Store the href attribute for later use
        const targetHref = this.getAttribute('href');
        
        // Prevent the default action
        e.preventDefault();

        const targetId = targetHref.substring(1); // Remove the '#' from the href
        const targetElement = document.getElementById(targetId);
        
        if (targetElement) {
            window.scrollTo({
                top: targetElement.offsetTop - 80, // Adjust based on navbar height
                behavior: 'smooth'
            });

            // Redirect to the target href after scrolling (optional timeout)
            setTimeout(() => {
                window.location.href = targetHref;
            }, 300); // Adjust the timeout duration as needed
        } else {
            // If no target element is found, redirect to the href directly
            window.location.href = targetHref;
        }
    });
});

// Auto-collapse the navbar on link click (for mobile)
$('.navbar-nav>li>a').on('click', function () {
    $('.navbar-collapse').collapse('hide');
});

// Initiate the Bootstrap carousel
$('.carousel').carousel({
    interval: 3000, // Change slide every 3 seconds
    pause: "hover" // Pause on hover
});

// Change active link while scrolling (navbar highlighting)
window.addEventListener('scroll', function () {
    let scrollPosition = document.documentElement.scrollTop || document.body.scrollTop;
    document.querySelectorAll('.navbar-nav a').forEach(anchor => {
        const section = document.querySelector(anchor.getAttribute('href'));
        if (section.offsetTop <= scrollPosition && section.offsetTop + section.offsetHeight > scrollPosition) {
            document.querySelector('.navbar-nav .active').classList.remove('active');
            anchor.parentElement.classList.add('active');
        }
    });
});

// Trusted By Section animation on hover
const trustedLogos = document.querySelectorAll('.trusted-by img');
trustedLogos.forEach(logo => {
    logo.addEventListener('mouseover', () => {
        logo.classList.add('scale-up');
    });
    logo.addEventListener('mouseout', () => {
        logo.classList.remove('scale-up');
    });
});

// Adding the 'scale-up' CSS class for hover effect
document.styleSheets[0].insertRule(`
    .scale-up {
        transform: scale(1.1);
        transition: transform 0.3s ease-in-out;
    }
`, 0);

// Coockie

