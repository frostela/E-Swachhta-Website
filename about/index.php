<?php
include_once('../sessionCheck.php');
// Check if user is logged in
if (isset($_SESSION['email'])) {
    include('../headerPostLog/index.php'); // Include the header for logged-in users
} else {
    include('../headerPreLog/index.php'); // Include the header for non-logged-in users
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Learn about our team and our goal at E-Swachhta">
    <title>E-Swachhta | About Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../about/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <style>

        .row{
            justify-content: center;
        }
        .aboutus{
            background-color:white;
            box-shadow: 0 4px 8px;
            border: 2px solid #fff;
            border-radius: 8px;
            padding: 15px;
            margin: 10px;
            font-family: "Poppins", sans-serif;
        }


        @media screen and (max-width: 576px){
            .aboutus{
                width:85%;
                flex: 0 0 85%;
                max-width: 85%;

            }
        }
    </style>
</head>

<body>
    <!-- About Us Section -->
    <div class="container mt-5">
        <h2 class="text">About our Team and Our Goal</h2>
        <div class="row team-section">
            <div class="col-md-3 col-sm-6">
                <div class="team-member">
                    <div class="img-container">
                        <img src="../assets/images/arpita.jpeg" alt="Arpita's image">
                    </div>
                    <div class="name">Arpita Ojha</div>
                    <div class="role">Position: Co-Founder</div>
                    <div class="more-info">Role: Frontend Dev.</div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="team-member">
                    <div class="img-container">
                        <img src="../assets/images/amaan.jpg" alt="Amaan's image">
                    </div>
                    <div class="name">Amaanuddin Ahmed</div>
                    <div class="role">Position: Founder</div>
                    <div class="more-info">Role: Backend Dev.</div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="team-member">
                    <div class="img-container">
                        <img src="../assets/images/neha.jpeg" alt="Neha's image">

                    </div>
                    <div class="name">Neha Jadav</div>
                    <div class="role">Position: CEO</div>
                    <div class="more-info">Role: DBA</div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="team-member">
                    <div class="img-container">
                        <img src="../assets/images/mainak.jpeg" alt="Mainak's image">

                    </div>
                    <div class="name">Mainak Das</div>
                    <div class="role">Position: COO</div>
                    <div class="more-info">Role: UI/UX, F. Dev.</div>
                </div>
            </div>
        </div>

        <!-- Goals and Additional Info -->
        <div class="row mt-4">
            <div class="aboutus">
                <h3>Our Goal</h3>
                <div class="team-section">
                <p>The goal of "E-Swacchta" is to create a digital platform that facilitates efficient scrap collection and waste management for both individuals and businesses. Our                 website will enable users to easily categorize and submit waste items for evaluation, receive fair price offers, and schedule doorstep pickups. For businesses like factories,            hospitals, and scrap dealers, the platform will offer bulk transaction options, ensuring proper arrangements for collection. With a focus on sustainability and cleanliness,              "E-Swacchta" aims to  streamline the waste disposal process, reduce environmental impact, and promote recycling efforts. By providing a seamless, user-friendly experience                and offering multiple payment methods, we hope to encourage responsible waste management and make it accessible to a wide range of users.
                </p>
                <p>
                PS:- This is a website for college Minor Porject, This website is just a concept to reduce waste by recycling it proper way.
                </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
    include('../footer/index.php');
?>