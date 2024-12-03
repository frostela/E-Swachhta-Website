<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Goback</title>
</head>
<style>

    *{
        
    }

    body {
        text-align: center;
        padding: 20px;
        background-color: #E4FFE2;
        height:90vh;
    }

    .abcd{
        top:50%;
        left:50%;
        transform: translate(-50%, -50%);
        position: relative; 
    }

    h1{
        font-size: 5em;
        color: #132A13;

    }
    #btns{
        margin-top: 20px;
        display: flex;
        flex-direction: column;
    }
    a{
        text-decoration: none;
        margin-top: 1rem;
        font-size: 2vw;
        color: black;
        font-family:Arial, Helvetica, sans-serif;
        font-weight: 400;
    }
    a:hover{
        color: hsl(0, 0%, 34%);
        text-decoration: underline;
    }

    @media (max-width: 768px) {
        h1{
            font-size: 3em;
        }

        #btns{
            margin-top: 60px;
            justify-content: space-evenly;
        }

            a{
                font-size: 4vw;
            }
            a:hover{
                color: hsl(0, 0%, 34%);
                text-decoration: underline;
            }
    }
</style>
<body>
    <div class="abcd">
    <h1>
        We are still working on this page
    </h1>
    <div id="btns">
        <a href="../index.php">Back to Homepage</a>
        <a href="../headerPostLog/logout.php">Log out</a>
    </div>
    </div>
</body>
</html>