<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="E-Swachhta - A platform for waste collection and recycling in Kolkata. Join us in making our city cleaner!">
    <meta name="keywords" content="Waste Management, Recycling, Kolkata, E-Swachhta, Environment">
    <meta name="author" content="E-Swachhta">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="../assets/images/favicon.ico">
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap');

    body {
        font-family: "Montserrat", sans-serif;
        margin: 0;
        padding-top: 70px;
        color: #132A13;
        background-color: #132A13;
    }

    /* Navbar Styles */
    .navbar {
        padding: 0.5rem 1rem;
        background-color: #132A13 !important;
        border-bottom: 1px solid rgba(255, 255, 255, 0.5) !important;
        position: sticky !important; 
        top: 0;
        z-index: 1000;
        width: 100%;
    }

    .navbar-nav {
        display: flex;
        align-items: center;
    }

    .navbar-toggler {
        padding: .25rem .75rem;
        font-size: 1.25rem;
        line-height: 1;
        background-color: transparent;
        border: 1px solid transparent;
        border-radius: .25rem;
    }

    .nav-link {
        padding: 0 !important;
        margin: 0 20px;
    }

    li{
        overflow: hidden!important;
    }

    a {
        color: rgb(255, 255, 255) !important;
    }

    a:hover {
        color: rgb(128, 128, 128) !important;
    }

    .navbar-brand-img {
        height: auto !important;
        width: 150px !important;
        margin: 0 20px;
    }

    #btn {
        background-color: #E4FFE2;
        border-radius: 20px;
        cursor: pointer;
        color: #132A13 !important;
        font-size: 16px;
        font-weight: bold;
        padding: 8px 18px;
        text-decoration: none;
        width: 6rem;
        height: 2.5rem;
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
        margin: 10px 20px;
    }

    #btn:hover {
        background-color: #ffffff;
        font-size: 16px;
        transform: scale(1.1)
    }

    /* Mobile Styles */
    @media screen and (max-width: 768px) {

        .navbar-nav {
            display: flex;
            align-items: center;
            align-items: flex-start;
        }

        li {
            margin-top:1rem;
        }

        .navbar-collapse.custom-collapse {
            display: none; /* Hide by default */
            overflow: hidden; /* Hide the content */
            transition: height 0.10s ease-out; /* Smooth transition for height */
        }

        .navbar-collapse.custom-collapse.show {
            display: block; /* Show when 'show' class is added */
        }

        .navbar-brand-img {
            margin: 0 10px;
        }
    }
</style>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <img src="../assets/images/logo_horizontal.png" alt="E-Swachhta Logo" class="navbar-brand-img">

        <button class="navbar-toggler" type="button" id="navbarToggler" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse custom-collapse" id="navbarNav"> <!-- Added custom-collapse class -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="../index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="../about/index.php">About</a></li>
                <li class="nav-item"><a class="nav-link" href="../contact/index.php">Contact</a></li>
                <li class="nav-item"><a class="nav-link" id="btn" href="signUp/index.php">Sign-Up</a></li>
            </ul>
        </div>
    </nav>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const navbarToggler = document.getElementById('navbarToggler');
            const navbarCollapse = document.querySelector('.custom-collapse'); // Now targeting the custom-collapse class

            // Ensure the elements exist before adding event listeners
            if (navbarToggler && navbarCollapse) {
                navbarToggler.addEventListener('click', function () {
                    // Toggle the 'show' class to show or hide the navbar
                    navbarCollapse.classList.toggle('show');
                });

                // Optional: Close the navbar on link click (for mobile)
                document.querySelectorAll('.navbar-nav>li>a').forEach(anchor => {
                    anchor.addEventListener('click', function () {
                        navbarCollapse.classList.remove('show');
                    });
                });
            }
        });
    </script>

</body>
</html>
