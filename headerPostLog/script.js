// Smooth scrolling for navbar links
document.querySelectorAll('a.nav-link').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        const targetId = this.getAttribute('href').substring(1); // Remove the '#' from the href
        const targetElement = document.getElementById(targetId);
        
        if (targetElement) {
            window.scrollTo({
                top: targetElement.offsetTop - 80, // Adjust based on navbar height
                behavior: 'smooth'
            });
        }
    });
});

// Auto-collapse the navbar on link click (for mobile)
$('.navbar-nav>li>a').on('click', function () {
    $('.navbar-collapse').collapse('hide');
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

// Adding the 'scale-up' CSS class for hover effect
document.styleSheets[0].insertRule(`
    .scale-up {
        transform: scale(1.1);
        transition: transform 0.3s ease-in-out;
    }
`, 0);