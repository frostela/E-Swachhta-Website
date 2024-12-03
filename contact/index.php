<?php
    include_once('../config.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Check if the contact form was submitted
        if (isset($_POST['submit_contact'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $message = $_POST['message'];
        
            $sql = "INSERT INTO `helpdesk` (`userName`, `userEmail`, `userPhone`, `userMessage`) VALUES ('$name', '$email', '$phone', '$message')";
        
            if ($conn->query($sql) === TRUE) {
                echo "Response submitted successfully, click on Go Back!";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

        // Check if the newsletter form was submitted
        if (isset($_POST['submit_newsletter'])) {
            $email = $_POST['newsletter_email'];

            $sql = "INSERT INTO `newsletter` (`userEmail`) VALUES ('$email')";

            if ($conn->query($sql) === TRUE) {
                echo "Signed up for newsletter, click on Go Back!";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    }

    $conn->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Contact us and join our newsletter to stay updated with global warming, nature, and communities around greenery.">
    <meta name="keywords" content="Contact, Newsletter, Global Warming, Greenery, Community">
    <title>Contact Us | E-Swachhta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../contact/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="/E-Swachhta/assets/images/favicon.ico">

    <style>
        @font-face {
            font-family: 'Black_Emerald'; /* Name of the font */
            src: url('../assets/Black_Emerald.ttf') format('truetype');
        }

        #hear-to{
            margin-left: 8.333333%;
        }

        .here-to{
            font-family: 'Black_Emerald', Arial, Helvetica !important;
            font-size:10vw;
            margin-bottom: 2rem;
            margin-top:2rem;
        }

        #help{
            color:#E4FFE2;
            -webkit-text-stroke: 2px #132A13;
        }

        @media only screen and (max-width: 768px) {
            #hear-to{
                margin-left: 0;
                margin-bottom: 0;
            }

            #help{
                margin-bottom: 0;
            }

            #newsletter-form{
                margin-top:2rem;
            }
        }
   
    </style>

</head>

<body>

    <div class="container py-5">
        <a href="../index.php" class="text-decoration-none text-danger">&larr; Go Back</a>
        <div class="here-to-help">
            <h1 class="here-to" id="hear-to" style="display: inline-block;">Here to </h1>

            <h1 class="here-to" id="help" style="display: inline-block;">&nbsp;help</h1>
        </div>
        
        <div class="row mt-3">
            <div class="col-md-6 offset-md-1">
                <!-- Contact Form -->
                <form method="post" id="contact-form">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name*</label>
                        <input type="text" class="form-control custom-input" id="name" name="name" placeholder="Enter your name"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address*</label>
                        <input type="email" class="form-control custom-input" id="email" name="email" placeholder="Enter your email"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="contact" class="form-label">Contact Number</label>
                        <input type="tel" class="form-control custom-input" id="contact" name="phone"
                            placeholder="Enter your contact number">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message*</label>
                        <textarea class="form-control custom-input" id="message" name="message" rows="4"
                            placeholder="Type your message here" required></textarea>
                    </div>
                    <!-- Unique Submit Button for Contact Form -->
                    <button type="submit" name="submit_contact" class="btn btn-success btn-sm w-50 fw-bold">Confirm</button>
                </form>
            </div>

            <div class="col-md-4">
                <!-- Newsletter Form -->
                <form method="post" id="newsletter-form">
                    <h2 class="h4 fw-bold">Join our newsletter</h2>
                    <p>Add your details and you’ll receive our quarterly email, including what’s happening with Global
                        Warming, nature, and communities around Greenery.</p>
                    <div class="mb-3">
                        <label for="newsletter-email" class="form-label">Email address*</label>
                        <input type="email" class="form-control" id="newsletter-email" name="newsletter_email" placeholder="Enter your email"
                            required>
                    </div>
                    <!-- Unique Submit Button for Newsletter Form -->
                    <button type="submit" name="submit_newsletter" class="btn btn-success btn-lg w-100 fw-bold">Sign up &rarr;</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
    <script src="script.js"></script>
</html>

<?php
    include('../footer/index.php');
?>
