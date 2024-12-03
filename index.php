<?php
include_once('./sessionCheck.php');
// Check if user is logged in
if (isset($_SESSION['email'])) {
    include('./headerPostLog/index.php'); // Include the header for logged-in users
} else {
    include('./headerPreLog/index.php'); // Include the header for non-logged-in users
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="E-Swachhta - A platform for waste collection and recycling in Kolkata. Join us in making our city cleaner!">
    <meta name="keywords" content="Waste Management, Recycling, Kolkata, E-Swachhta, Environment">
    <meta name="author" content="E-Swachhta">
    <title>E-Swachhta | Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<style>

    *{
        /* overflow-x: hidden; */
    }

    .carousel-item img {
        width: 100vw !important;
        height: auto !important;
    }

    .map-container {
        width: 100%;
        height: 400;
        max-width: 1100px; /* Adjust the maximum width */
        margin: 50px auto;
        border: 2px solid black; /* Add solid black border */
        border-radius: 10px; /* Add rounded corners */
        overflow: hidden; /* Ensures the corners of the iframe match the container */
        padding: 0;
        height: 400px;
    }

    .statistics h3 {
        font-size: 2rem;
        margin: 0.5rem;
        overflow:hidden;
    }

    .service-area h3{
        overflow:hidden;
    }

    .col-md-2 {
        -ms-flex: 0 0 16.666667%;
        flex: 0 0 16.666667%;
        max-width: 16.666667%;
        display: flex;
        justify-content: center;
    }

    .brandlogo{
        width:200px;
        height:auto;
        z-index:5;
        position:relative;
        margin-top:50px;
    }

    #itc{
        width:70px;
        height:auto;
        margin:0 65px;
        margin-top:50px;
    }

    .started{
        margin:100px 0 0 0;
    }

    /* Mobile Styles */
    @media screen and (max-width: 768px) {
        .how-it-works{
            /* padding-top:0; */
        }
        .service-area {
            margin: 2rem 0 0 0;
            padding: 0 2rem;
        }

</style>

<body>

    <!-- Hero Section -->

    <section class="hero-carousel text-center ">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <picture>
                            <source srcset="./assets/images/reduce-mobile.png" media="(max-width: 768px)">
                            <img src="./assets/images/reduce.png" class="d-block w-100" alt="First slide">
                        </picture>
                    </div>
                    <div class="carousel-item">
                        <picture>
                            <source srcset="./assets/images/reuse-mobile.png" media="(max-width: 768px)">
                            <img src="./assets/images/reuse.png" class="d-block w-100" alt="Second slide">
                        </picture>
                    </div>
                    <div class="carousel-item">
                        <picture>
                            <source srcset="./assets/images/recycle-mobile.png" media="(max-width: 768px)">
                            <img src="./assets/images/recycle.png" class="d-block w-100" alt="Third slide">
                        </picture>
                    </div>
                </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="statistics text-center py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="d-flex flex-column align-items-center">
                        <img src="./assets/icons/trash.png" alt="Scrap Collected" class="img-fluid mb-2" style="width: 50px;">
                        <h3>1,00,000+</h3>
                        <p>Scrap Collected</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="d-flex flex-column align-items-center">
                        <img src="./assets/icons/users.png" alt="Users Served" class="img-fluid mb-2"
                            style="width: 50px;">
                        <h3>10,000+</h3>
                        <p>Users Served</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="d-flex flex-column align-items-center">
                        <img src="./assets/icons/recycle.png" alt="Waste Recycled" class="img-fluid mb-2" style="width: 50px;">
                        <h3>50,000+</h3>
                        <p>Waste Recycled</p>
                    </div>
                </div>
            </div>

    </section>


    <!-- Map Section -->
<section class="service-area text-center">
    <h3>Currently serving PAN-KOLKATA</h3>
    <div class="map-container">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d70116.4816873511!2d88.38692463300796!3d22.540038268794106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1732804607850!5m2!1sen!2sin" 
            width="100%" 
            height="400" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
</section>


    <!-- How It Works Section -->
    <section class="how-it-works py-5">
        <div class="container">
            <h3 class="text-center mb-4">How it works?</h3>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="how-step">
                        <h4><i class="fa-solid fa-arrow-pointer" style="color: #132A13;"></i>Step 1 </h4>
                        <p>Users can sign up and register themselves as individuals or business owners. Then they can
                            select the category of the waste, their name and estimated size, and finally check for the
                            sale value.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="./assets/illustrations/selection.png" alt="Step 1 Image" class="img-fluid how-step-img">
                </div>
            </div>
            <div class="row align-items-center mt-5">
                <div class="col-md-6 order-md-2">
                    <div class="how-step">
                        <h4><i class="fa-solid fa-arrow-pointer" style="color: #132A13;"></i>Step 2</h4>
                        <p>If satisfied with the price offered, they can provide their address, select a date and
                            time-slot, and our representative will collect the scrap from their doorstep.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="./assets/illustrations/pickup.png" alt="Step 2 Image" class="img-fluid how-step-img">
                </div>
            </div>
            <div class="row align-items-center mt-5">
                <div class="col-md-6">
                    <div class="how-step">
                        <h4><i class="fa-solid fa-arrow-pointer" style="color: #132A13;"></i>Step 3</h4>
                        <p>After collection, we process the waste and recycle it to sell it afterward to other
                            businesses.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="./assets/illustrations/processing.png" alt="Step 3 Image" class="img-fluid how-step-img">
                </div>
            </div>
        </div>
    </section>

    <!-- Trusted By Section -->
    <section class="trustedby text-center py-5">
        <h3>Trusted & funded by industrial giants</h3>
        
        <div class="brands justify-content-center">
            <img class="brandlogo" id="reliance" src="../assets/images/reliance.png" alt="Reliance">
            <img class="brandlogo" id="tata" src="../assets/images/tata.png" alt="Tata">
            <img class="brandlogo" id="itc" src="../assets/images/itc.png" alt="Itc">
        </div>

        <a href="getStartedHandler.php" class="started btn btn-success started rounded-sm">Get Started !!</a>

    </section>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
<script src="script.js"></script>

</html>

<?php
    include('./footer/index.php');
?>