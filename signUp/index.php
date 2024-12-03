<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Register for E-Swachhta - A platform promoting digital cleanliness.">
    <meta name="keywords" content="E-Swachhta, registration, environment, green, cleanliness">
    <meta name="author" content="E-Swachhta">
    <title>Register - E-Swachhta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../signUp/style.css">
    <link rel="icon" type="image/x-icon" href="../assets/images/favicon.ico">

    <style>

        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        *{
            padding:0;
            margin:0;
            overflow:hidden;
        }

        body{
            background-color: #fff;
            font-family: "Montserrat", sans-serif;

        }

        .full{
            width:100vw;
            height:100vh;
            display:flex;
            flex-direction: row;
            justify-content: space-evenly;
        }

        .leftbox{
            width:50%;
            height:100%;
            display:flex;
            justify-content: center;
            align-content: center;
            flex-wrap: wrap;
        }

        .leftbox h2{
            position:relative;
            align-self: flex-start;
            font-weight:600;
        }

        .rightbox{
            width:50%;
            height:100%;
        }

        #registerForm{
            display:flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width:80%;
            height:80%;
        }

        .formbox{
            width:100%;
            margin-bottom:1vw;
            box-sizing: border-box;
            overflow: visible;
        }

        .form-label{
            margin-bottom: 0;
            font-size: 1.2rem;
            top:6%;
            position:relative;
            font-weight:600;
            font-family: "Poppins", sans-serif;
        }

        .btn{
            width:100%;
        }

        .btn-success {
            background-color: #132A13;
            border-color: #132A13;
            border-radius: 10px;
            width: 100%;
            max-width: 100%;
            position:relative;
            top:40px;
            padding: 12px;
        }

        .formcontrol {
            border-radius: 8px;
            width: 100%;
            margin: 0;
            margin-top: 0;
            display: block;
            padding: 12px;
            font-size: 16px;
            font-weight: 300;
            line-height: 1.5;
            border-color: rgba(0, 0, 0, 0.46);
            border-style: solid;
            border: var(--bs-border-width) solid var(--bs-border-color);
            color: var(--bs-body-color);
            background-color: var(--bs-body-bg);
        }   

        .form-group {
            font-weight: 500;
            align-self: flex-start;
        }

        .seperator{
            text-align: center;
            margin-left: 0px;
            margin-top: 0px;
            position:relative;
            top:50px;
        }

        .sign-in-link {
            position: relative;
            transform: none;
            width: 100%;
            text-align: center;
            bottom: 0;
            left: 0;
            top:20px;
            overflow: visible;
            padding-top:25px;
            font-weight: bold;
        }

        .form-check {
            padding-left: 1.7em;
        }

        /* Mobile Styles */
        @media screen and (max-width: 768px) {
            .full {
                flex-direction: column;
            }

            .leftbox {
                width: 100%;
                height: 100%;
                background: url('../assets/images/leaves.png') no-repeat center center;
                background-size: 100% 100%; /* Adjust background image size */
                background-repeat: no-repeat;
                background-position: center;
                z-index: 1; /* Place behind the form */
                border-radius:30px;
            }

            #registerForm {
                position: relative;
                z-index: 2; /* Ensure form appears on top */
                background: rgba(255, 255, 255, 0.9); /* Optional: Add a translucent white background */
                padding: 1rem;
                border-radius: 10px; /* Add rounded corners */
                width:80%;
                height:80%;
            }

            .rightbox {
                display: none; /* Hide the rightbox div on mobile */
            }

            .formcontrol {
                margin-bottom: 0px;
                display: block;
                font-size: 1rem;
                font-weight: 400;
                line-height: 1.5;
            }  
    }

    </style>
</head>

<body>
    <div class="full">
            <!-- Left Section for Registration Form -->
            <div class="leftbox">               
                

                <form method="post" action="register.php" id="registerForm">

                    <h2 class="mb-4">Get Started Now!</h2>

                    <div class="formbox">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="formcontrol" id="name" name="name" placeholder="Enter your name" required>
                    </div>

                    <div class="formbox">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="formcontrol" id="email" name="email" placeholder="Enter your email" required>
                    </div>

                    <div class="formbox">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="formcontrol" id="password" name="password" placeholder="Create your password" required>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="termsCheck" required>
                        <label class="form-check-label" for="termsCheck">I agree to the <a href="#">terms & policy</a></label>
                    </div>

                
                    <button type="submit" name="submit" class="btn btn-success">Signup</button>

                        
                        <p class="text-center mt-3 sign-in-link">Already have an account? <a href="../login">Sign in</a></p>

                </form>
            </div>
            
            <!-- Right Section for Image -->
            <div class="rightbox">
                <div class="image-placeholder text-center">
                    <img src="../assets/images/leaves.png" alt="Registration Image">
                </div>
            </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>

</html>