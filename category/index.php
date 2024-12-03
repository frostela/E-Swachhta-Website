<?php
    include('../sessionCheck.php');
    checkSession(); // Call the session check function

    include('../headerPostLog/index.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="E-Swachhta - Choose the type of waste you want to sell and contribute towards a cleaner environment.">
    <title>E-Swachhta | Category Selection</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>

        *{
            text-decoration: none;
        }

        .fas{
            text-decoration: none;
        }

        .roww{
            display: flex;
            flex-wrap: wrap; /* Allow wrapping */
            gap: 10px; /* Space between boxes */
            justify-content: center;
        }

        .rawcal,
        .lastrawcal {
            flex: 1 1 calc(33.33% - 10px); /* 3 boxes per row */
            max-width: calc(33.33% - 10px);
            text-align: center;
            padding: 20px;
            box-sizing: border-box;
        }

        .ms-2 {
            margin: 0 !important;
        }

        /* Responsive behavior for mobile */
        @media (max-width: 768px) {
            .rawcal,
            .lastrawcal {
                flex: 1 1 calc(50% - 10px); /* 2 boxes per row */
                max-width: calc(50% - 10px);
                }

            .card {
                width: 100%;
                padding-top: 100%;
            }

            .fa-3x {
                font-size: 1.5em;
            }

            .ms-2{
                font-size: 1rem;
            }
        }

        /* Ensure the last row aligns */
            .lastrawcal {
                order: 10; /* Keeps the last box after others */
            }
        }

        .card {
            width: 80%;
            padding-top: 80%;
        }

        .card:hover{
            transform: scale(1.1);
        }




    </style>

</head>

<body>

    <main class="container mt-4 text-center">
        <h2 class="mb-4">Choose what kind of waste you want to sell ?</h2>
        <section class="roww">

            <!-- 9 Category Boxes in a 3x3 Grid with Dot Icons -->
            <div class="rawcal">
                <div class="card border border-success shadow-sm h-100 category-box">
                    <div class="card-body d-flex justify-content-center align-items-center">
                        <a href="../sale?saleCategory=Batteries"><i class="fas fa-battery-half fa-3x text-success "></i>
                            <h5 class="text-success ms-2">Batteries</h5>
                            
                        </a>
                    </div>
                </div>
            </div>

            <div class="rawcal">
                <div class="card border border-success shadow-sm h-100 category-box">
                    <div class="card-body d-flex justify-content-center align-items-center">
                        <a href="../sale?saleCategory=Metal">
                            <i class="fas fa-cogs fa-3x text-success"></i>
                            <h5 class="text-success ms-2">Metal</h5>
                           
                        </a>

                    </div>
                </div>
            </div>

            <div class="rawcal">
                <div class="card border border-success shadow-sm h-100 category-box">
                    <div class="card-body d-flex justify-content-center align-items-center">
                        <a href="../sale?saleCategory=Textiles">
                            <i class="fas fa-tshirt fa-3x text-success"></i>
                            <h5 class="text-success ms-2">Textiles</h5>
                            
                        </a>
                    </div>
                </div>
            </div>

            <div class="rawcal">
                <div class="card border border-success shadow-sm h-100 category-box">
                    <div class="card-body d-flex justify-content-center align-items-center">
                        <a href="../sale?saleCategory=Mixed%20Plastics">
                            <i class="fas fa-recycle fa-3x text-success"></i>
                            <h5 class="text-success ms-2">Mixed Plastics</h5>
                            
                        </a>

                    </div>
                </div>
            </div>

            <div class="rawcal">
                <div class="card border border-success shadow-sm h-100 category-box">
                    <div class="card-body d-flex justify-content-center align-items-center">
                        <a href="../sale?saleCategory=Cardboard%20Boxes">
                            <i class="fas fa-box fa-3x text-success"></i>
                            <h5 class="text-success ms-2">Cardboard Boxes</h5>
                           
                        </a>

                    </div>
                </div>
            </div>

            <div class="rawcal">
                <div class="card border border-success shadow-sm h-100 category-box">
                    <div class="card-body d-flex justify-content-center align-items-center">
                        <a href="../sale?saleCategory=Electronic%20Waste">
                            <i class="fas fa-cogs fa-3x text-success"></i>
                            <h5 class="text-success ms-2">Electronic Waste</h5>
                            
                        </a>
                    </div>
                </div>
            </div>

            <div class="rawcal">
                <div class="card border border-success shadow-sm h-100 category-box">
                    <div class="card-body d-flex justify-content-center align-items-center">
                        <a href="../sale?saleCategory=Medical%20Waste">
                            <i class="fas fa-medkit fa-3x text-success"></i>
                            <h5 class="text-success ms-2">Medical Waste</h5>
                            
                        </a>

                    </div>
                </div>
            </div>

            <div class="rawcal">
                <div class="card border border-success shadow-sm h-100 category-box">
                    <div class="card-body d-flex justify-content-center align-items-center">
                        <a href="../sale?saleCategory=Organic%20Waste">
                            <i class="fas fa-seedling fa-3x text-success"></i>
                            <h5 class="text-success ms-2">Organic Waste</h5>
                            
                        </a>

                    </div>
                </div>
            </div>

            <div class="rawcal">
                <div class="card border border-success shadow-sm h-100 category-box">
                    <div class="card-body d-flex justify-content-center align-items-center">
                        <a href="../sale?saleCategory=Paints%20&%20Solvents">
                            <i class="fas fa-paint-brush fa-3x text-success"></i>
                            <h5 class="text-success ms-2">Paints & Solvents</h5>
                            
                        </a>

                    </div>
                </div>
            </div>

            <div class="lastrawcal">
                <div class="card border border-success shadow-sm h-100 category-box">
                    <div class="card-body d-flex justify-content-center align-items-center">
                        <a href="../sale?saleCategory=Others">
                            <i class="fas fa-box fa-3x text-success"></i>
                            <h5 class="text-success ms-2">Others</h5>
                            
                        </a>

                    </div>
                </div>
            </div>
        </section>

    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
<script src="script.js"></script>

</html>

<?php
    include('../footer/index.php');
?><?php
    include('../sessionCheck.php');
    checkSession(); // Call the session check function

    include('../headerPostLog/index.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="E-Swachhta - Choose the type of waste you want to sell and contribute towards a cleaner environment.">
    <title>E-Swachhta | Category Selection</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>

<body>

    <main class="container mt-4 text-center">
        <h2 class="mb-4">Choose what kind of waste you want to sell ?</h2>
        <section class="row justify-content-center">
            <!-- 9 Category Boxes in a 3x3 Grid with Dot Icons -->
            <div class="col-4 mb-4">
                <div class="card border border-success shadow-sm h-100 category-box">
                    <div class="card-body d-flex justify-content-center align-items-center">
                        <a href="../sale?saleCategory=Batteries"><i class="fas fa-battery-half fa-3x text-success "></i>
                            <h5 class="text-success ms-2">Batteries</h5>
                            <i class="fas fa-circle dot-icon"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-4 mb-4">
                <div class="card border border-success shadow-sm h-100 category-box">
                    <div class="card-body d-flex justify-content-center align-items-center">
                        <a href="../sale?saleCategory=Metal">
                            <i class="fas fa-cogs fa-3x text-success"></i>
                            <h5 class="text-success ms-2">Metal</h5>
                            <i class="fas fa-circle dot-icon"></i>
                        </a>

                    </div>
                </div>
            </div>

            <div class="col-4 mb-4">
                <div class="card border border-success shadow-sm h-100 category-box">
                    <div class="card-body d-flex justify-content-center align-items-center">
                        <a href="../sale?saleCategory=Textiles">
                            <i class="fas fa-tshirt fa-3x text-success"></i>
                            <h5 class="text-success ms-2">Textiles</h5>
                            <i class="fas fa-circle dot-icon"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-4 mb-4">
                <div class="card border border-success shadow-sm h-100 category-box">
                    <div class="card-body d-flex justify-content-center align-items-center">
                        <a href="../sale?saleCategory=Mixed%20Plastics">
                            <i class="fas fa-recycle fa-3x text-success"></i>
                            <h5 class="text-success ms-2">Mixed Plastics</h5>
                            <i class="fas fa-circle dot-icon"></i>
                        </a>

                    </div>
                </div>
            </div>

            <div class="col-4 mb-4">
                <div class="card border border-success shadow-sm h-100 category-box">
                    <div class="card-body d-flex justify-content-center align-items-center">
                        <a href="../sale?saleCategory=Cardboard%20Boxes">
                            <i class="fas fa-box fa-3x text-success"></i>
                            <h5 class="text-success ms-2">Cardboard Boxes</h5>
                            <i class="fas fa-circle dot-icon"></i>
                        </a>

                    </div>
                </div>
            </div>

            <div class="col-4 mb-4">
                <div class="card border border-success shadow-sm h-100 category-box">
                    <div class="card-body d-flex justify-content-center align-items-center">
                        <a href="../sale?saleCategory=Electronic%20Waste">
                            <i class="fas fa-cogs fa-3x text-success"></i>
                            <h5 class="text-success ms-2">Electronic Waste</h5>
                            <i class="fas fa-circle dot-icon"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-4 mb-4">
                <div class="card border border-success shadow-sm h-100 category-box">
                    <div class="card-body d-flex justify-content-center align-items-center">
                        <a href="../sale?saleCategory=Medical%20Waste">
                            <i class="fas fa-medkit fa-3x text-success"></i>
                            <h5 class="text-success ms-2">Medical Waste</h5>
                            <i class="fas fa-circle dot-icon"></i>
                        </a>

                    </div>
                </div>
            </div>

            <div class="col-4 mb-4">
                <div class="card border border-success shadow-sm h-100 category-box">
                    <div class="card-body d-flex justify-content-center align-items-center">
                        <a href="../sale?saleCategory=Organic%20Waste">
                            <i class="fas fa-seedling fa-3x text-success"></i>
                            <h5 class="text-success ms-2">Organic Waste</h5>
                            <i class="fas fa-circle dot-icon"></i>
                        </a>

                    </div>
                </div>
            </div>

            <div class="col-4 mb-4">
                <div class="card border border-success shadow-sm h-100 category-box">
                    <div class="card-body d-flex justify-content-center align-items-center">
                        <a href="../sale?saleCategory=Paints%20&%20Solvents">
                            <i class="fas fa-paint-brush fa-3x text-success"></i>
                            <h5 class="text-success ms-2">Paints & Solvents</h5>
                            <i class="fas fa-circle dot-icon"></i>
                        </a>

                    </div>
                </div>
            </div>

            <div class="col-4 mb-4">
                <div class="card border border-success shadow-sm h-100 category-box">
                    <div class="card-body d-flex justify-content-center align-items-center">
                        <a href="../sale?saleCategory=Others">
                            <i class="fas fa-box fa-3x text-success"></i>
                            <h5 class="text-success ms-2">Others</h5>
                            <i class="fas fa-circle dot-icon"></i>
                        </a>

                    </div>
                </div>
            </div>
        </section>

    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
<script src="script.js"></script>

</html>

<?php
    include('../footer/index.php');
?>