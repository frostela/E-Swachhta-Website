<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Login to E-Swachhta - A platform promoting digital cleanliness.">
    <meta name="keywords" content="E-Swachhta, login, environment, green, cleanliness">
    <meta name="author" content="E-Swachhta">
    <title>Login - E-Swachhta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="../assets/images/favicon.ico">
    <style>
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
        }

        .rightbox{
            width:50%;
            height:100%;
            display:flex;
            justify-content: center;
            align-content: center;
            flex-wrap: wrap;
        }

        .loginform{
            display:flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width:80%;
            height:80%;
        }

        #loginForm{
            display:flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            width:60%;
            height:50%;
        }

        .formbox{
            width:100%;
            margin-bottom:1vw;
            box-sizing: border-box;
            overflow: visible;
        }

        .form-label{
            margin-bottom: 0.5rem;
            font-size: 1.2rem;
            top:6%;
            position:relative;
            font-weight:600;
            font-family: "Poppins", sans-serif;
            width:100%;
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
            margin-top: 20px;
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

        .text-center{
            margin-bottom:0.5rem;
        }

        #enter{
            padding-bottom:2rem;
            margin-bottom:0rem;
        }

        h2{
            font-weight:bold;
        }

        .dont{
            position:relative;
            top:60px;
            font-weight:bold;
        }

               /* Mobile Styles */
        @media screen and (max-width: 768px) {
            .full {
                flex-direction: column;
            }

            .rightbox {
                width: 100%;
                height: 100%;
                background: url('../assets/images/leaves.png') no-repeat center center;
                background-size: 100% 100%; /* Adjust background image size */
                background-repeat: no-repeat;
                background-position: center;
                z-index: 1; /* Place behind the form */
                border-radius:30px;
            }

            .loginform {
                position: relative;
                z-index: 2; /* Ensure form appears on top */
                background: rgba(255, 255, 255, 0.9); /* Optional: Add a translucent white background */
                padding: 1rem;
                border-radius: 10px; /* Add rounded corners */
                width:80%;
                height:80%;
            }

            #loginForm {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: flex-start;
                width: 100%;
                height: 50%;
            }

            .leftbox {
                display: none; /* Hide the rightbox div on mobile */
            }

            .formcontrol {
                margin-bottom: 0px;
                display: block;
                padding: .375rem .75rem;
                font-size: 1rem;
                font-weight: 400;
                line-height: 1.5;
                border-color: rgba(0, 0, 0, 0.46);
                border-style: solid;
                color: var(--bs-body-color);
            }  



    </style>
</head>

<body>
    <div class="full">

            <div class="leftbox">
                <div class="image-placeholder text-center">
                    <img src="../assets/images/leaves.png" alt="Login Image">
                </div>
            </div>

            <!-- Right Section for Login Form -->
            <div class="rightbox">
                <div class="loginform">
                    <h2 class="text-center mb-4">Welcome back!</h2>
                    <p id="enter" class="text-center mb-4">Enter your credentials to access your account</p>

                    <form method="post" action="login.php" id="loginForm">

                        <div class="formbox">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                        </div>
                        <div class="formbox">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password"
                                required>
                        </div>


                        <button type="submit" name="submit" class="btn btn-success w-100">Login</button>
                        <p class="dont">Don’t have an account? <a href="../signUp">Sign Up</a></p>
                    </form>
                </div>
            </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>

</html>