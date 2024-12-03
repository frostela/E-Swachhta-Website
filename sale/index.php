<?php
ob_start();
include('../sessionCheck.php');
checkSession(); // Call the session check function

include('../headerPostLog/index.php');
include('../config.php');

// Fetch the category rate from the database
$rate = 0; // Default rate if not found
if (isset($_GET['saleCategory'])) {
    $category = $_GET['saleCategory'];

    // Fetch category rate using a prepared statement
    $query = "SELECT `categoryRate` FROM `categories` WHERE `categoryName` = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('s', $category);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $rate = $row['categoryRate'];
    }
    $stmt->close();
}

// Handle location form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $address = $_POST['address'] ?? '';
    $state = $_POST['state'] ?? '';
    $city = $_POST['city'] ?? '';
    $pincode = $_POST['pincode'] ?? '';
    $landmark = $_POST['landmark'] ?? '';
    $date = $_POST['date'] ?? '';
    $timeslot = $_POST['timeslot'] ?? '';

    // Server-side validation
    if (empty($address) || empty($state) || empty($city) || empty($pincode) || empty($date) || empty($timeslot)) {
        echo "All required fields must be filled.";
        exit();
    }

    // Insert booking data
    $insertQuery = "INSERT INTO `bookings` 
                    (`address`, `state`, `city`, `pincode`, `landmark`, `pickupDate`, `timeslot`, `bookingDate`) 
                    VALUES (?, ?, ?, ?, ?, ?, ?, current_timestamp())";
    $stmt = $conn->prepare($insertQuery);
    $stmt->bind_param('sssssss', $address, $state, $city, $pincode, $landmark, $date, $timeslot);

    if ($stmt->execute()) {
        $stmt->close();
        header("Location: ../thanks/index.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="E-Swachhta - A platform to help you easily manage waste collection and disposal in your area.">
    <meta name="keywords" content="waste management, E-Swachhta, clean environment, garbage collection">
    <title>E-Swachhta | Confirmation</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../sale/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <style>
        body{
            padding:0;
        }

        .form-control {
            border-radius: 10px;
            border: 2px solid black;
            width: 100%;
            max-width: 600px;
        }

        .btn-primary {
            width: 100%; 
            max-width: 600px;
        }

        .btn-success{
            margin-top:30px;
            max-width: 600px;
        }
        
    </style>
</head>

<body">
    <!-- Form Section -->
    <div class="container mt-4">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Include Some Details</h3>
                <form id="priceForm">
                    <div class="form-group">
                        <label for="title">Add Title*</label>
                        <input type="text" class="form-control" id="title" placeholder="Enter a title" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Any Description?</label>
                        <textarea class="form-control" id="description" rows="3" placeholder="Enter a description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="size">Select a size</label>
                        <select class="form-control mb-3" id="size">
                            <option value="0">Choose an approx size</option>
                            <option value="22.5">Small (15-30kg)</option>
                            <option value="40">Medium (30-50kg)</option>
                            <option value="75">Large (50-100kg)</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <h4>Upload photos</h4>
                        <div class="d-flex flex-wrap">
                            <!-- Photo upload boxes with preview areas -->
                            <div class="photo-upload-box mr-3 mb-3">
                                <label for="upload1" class="upload-label">
                                    <i class="fas fa-camera"></i>
                                    <input type="file" id="upload1" accept="image/*" class="d-none">
                                </label>
                                <img id="preview1" class="image-preview" style="max-width: 100px; display: none;" />
                            </div>
                            <div class="photo-upload-box mr-3 mb-3">
                                <label for="upload2" class="upload-label">
                                    <i class="fas fa-camera"></i>
                                    <input type="file" id="upload2" accept="image/*" class="d-none">
                                </label>
                                <img id="preview2" class="image-preview" style="max-width: 100px; display: none;" />
                            </div>
                        </div>
                        <small class="text-danger">This field is mandatory</small>
                    </div>
                    <button type="button" id="checkPriceBtn" class="btn btn-primary mt-3 mb-3">Check Estimated Price</button>
                    <h4 id="estimatedPrice" class="mt-3"></h4>
                </form>
                <form method="post" id="locationForm">
                    <hr>
                    <div class="form-group">
                        <h3>Confirm your location</h3>
                        <label for="flat">Flat name/ House Number & Address</label>
                        <input type="text" class="form-control mb-3" id="flat" name="address" placeholder="Enter your flat/house number & address" required>
                        <label for="state">State</label>
                        <input type="text" class="form-control mb-3" id="state" name="state" placeholder="Enter your state" required>
                        <label for="city">City</label>
                        <input type="text" class="form-control mb-3" id="city" name="city" placeholder="Enter your city" required>
                        <label for="pincode">Pin-code</label>
                        <input type="text" class="form-control mb-3" id="pincode" name="pincode" placeholder="Enter your pin-code" required>
                        <label for="landmark">Landmark</label>
                        <input type="text" class="form-control mb-3" id="landmark" name="landmark" placeholder="Enter a landmark">
                        <label for="select-date">Select Date</label>
                        <input type="date" class="form-control mb-3" id="select-date" name="date" required>
                        <label for="select-time-slot">Select Time Slot</label>
                        <select class="form-control mb-3" id="select-time-slot" name="timeslot" required>
                            <option value="">Choose a time slot</option>
                            <option>Morning</option>
                            <option>Evening</option>
                        </select>
                        <button type="submit" class="btn btn-success btn-block">Confirm</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const checkPriceBtn = document.getElementById('checkPriceBtn');
            const sizeSelect = document.getElementById('size');
            const estimatedPriceDiv = document.getElementById('estimatedPrice');
            const rate = <?php echo json_encode($rate); ?>;

            checkPriceBtn.addEventListener('click', () => {
                const selectedSizeMultiplier = parseFloat(sizeSelect.value);
                if (selectedSizeMultiplier > 0) {
                    const totalPrice = rate * selectedSizeMultiplier;
                    estimatedPriceDiv.textContent = `Your estimated price is - ${totalPrice.toFixed(2)}/-`;
                } else {
                    estimatedPriceDiv.textContent = 'Please select a valid size.';
                }
            });

            // Image preview
            const upload1 = document.getElementById('upload1');
            const upload2 = document.getElementById('upload2');
            const preview1 = document.getElementById('preview1');
            const preview2 = document.getElementById('preview2');

            function previewImage(input, previewElement) {
                if (input.files && input.files[0]) {
                    const reader = new FileReader();
                    reader.onload = function (e) {
                        previewElement.src = e.target.result;
                        previewElement.style.display = 'block';
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }

            upload1.addEventListener('change', () => previewImage(upload1, preview1));
            upload2.addEventListener('change', () => previewImage(upload2, preview2));
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
