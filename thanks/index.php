<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Thank you page for choosing our service.">
    <title>E-Swachhta | Thank You</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../thankyou/style.css">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../assets/images/favicon.ico">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

body {
    background-color: #E4FFE2;
    font-family: "Montserrat", sans-serif;

}

.text-dark {
    text-decoration: none;
    font-weight: bold;
    font-size: x-large;
}

a.text-dark i {
    font-size: 1.6rem;
    color: red;

}

/* Thank You Box */
.thank-you-box {
    background: #ffff;
    border: 2px solid #5c5e5e;
    border-radius: 5px;
    padding: 20px;
    box-shadow: 2px 4px 10px rgb(49, 46, 46);
    margin-top: 40px;
    max-width: 700px;
    height: 360px;
    margin-left: auto;
    margin-right: auto;

}

/* Thank You Container */
.thank-you-container {
    text-align: center;
}

.thank-you-container h1 {
    font-size: 5rem;
    font-weight: bolder;
    padding-top: 30px;
    color: #132A13;
}

/* Section Container */
.section-container {
    display: flex;
    justify-content: space-evenly;
    margin-top: 20px;
    flex-wrap: wrap;
    /* Allow wrapping on smaller screens */

}

/* Box Styles */
.box {
    background: #E4FFE2;
    border-radius: 5px;
    padding: 20px;
    flex: 1;
    /* Make boxes grow to fill available space */
    margin: 0 10px;
    text-align: center;
    min-width: 250px;
}

.left-box h2 {
    font-weight: bold;
    font-size: x-large;
}

.right-box h2 {
    font-weight: bold;
    font-size: x-large;
}

/* Left Box Social Icons */
.left-box .social-icons {
    display: inline-block;
    background-color: #132A13;
    box-shadow: 2px 4px 8px gray;
    width: 200px;
    height: 50px;
    padding: 3px;
    align-items: center;
    justify-content: center;
}

.social-icons a {
    margin: 0 10px;
    font-size: 24px;
    color: #fff;
}

/* Right Box */
.right-box {
    background: #E4FFE2;
    border-radius: 5px;
    padding: 20px;
    flex: 1;
    margin: 0 10px;
    text-align: center;
}

/* Button Styles */
.btn-custom {
    display: inline-block;
    background-color: #132A13;
    box-shadow: 2px 4px 8px gray;
    width: 200px;
    height: 50px;
    padding: 3px;
    align-items: center;
    justify-content: center;
    color: #fff;
    text-align: center;
    text-decoration: none;
}

.btn-custom:hover {
    background: linear-gradient(to right, #7dbf65, #4e944f);
    color: #000;
    font-weight: bold;
}

.thank-you-container h1::after {
    content: "";
    display: block;
    width: 100%;
    height: 10px;
    /* Decrease the height of the curved line */
    border-bottom: 3px solid red;
    /* Thinner red line */
    border-radius: 50%;
    /* Make the line curved */
    position: relative;
    bottom: -10px;
    /* Adjust position to align with the container */
    left: 0;
    right: 0;
    transform: scaleY(0.8);
    /* Adjust the curve height if needed */

}

/* Responsive Design for Sections */
@media (max-width: 768px) {
    .section-container {
        flex-direction: column;
        /* Stack sections vertically on smaller screens */
        align-items: center;
    }

    .box {
        max-width: 90%;
        margin: 20px 0;
    }

    .social-icons {
        width: 150px;
    }

    .btn-custom {
        width: 150px;
        height: 40px;
    }
}

@media (max-width: 576px) {
    .box {
        max-width: 100%;
        margin: 10px 0;
    }

    .social-icons {
        width: 120px;
    }

    .btn-custom {
        width: 120px;
        height: 35px;
    }
}
    </style>
</head>

<body>


    <!-- Thank You Box Container -->
    <div class="thank-you-box mt-5">
        <div class="thank-you-container text-center">
            <h1 class="mb-3"><span class="underline">Thank You :-)</span></h1>
            <p class="mb-4">For choosing our service. We appreciate your support and look forward to serving you again.
            </p>
        </div>
    </div>

    <!-- Section Container with Flexbox for Horizontal Layout -->
    <div class="section-container">
        <!-- Left section for social icons -->
        <div class="box left-box">
            <h2>Like & Share</h2>
            <p>Connect with us on social media!</p>
            <div class="social-icons ">
                <a href="https://www.facebook.com"><i class="bi bi-facebook "></i></a>
                <a href="https://www.instragram.com"><i class="bi bi-instagram"></i></a>
                <a href="https://x.com"><i class="bi bi-twitter"></i></a>
                <a href="mailto:support@eswachhta.in"><i class="bi bi-envelope"></i></a>
            </div>
        </div>

        <!-- Right section for back to website -->
        <div class="box right-box">
            <h2>Go Back to Website</h2>
            <p>Thank you for choosing us. Click the button.</p>
            <a href="../index.php" class="btn-custom">Let’s Go</a>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="../thankyou/script.js"></script>
</body>

</html>