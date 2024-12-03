<?php
// Database credentials
$servername = "sql100.infinityfree.com";
$username = "if0_37269996"; 
$password = "Nk1FujxALUi4Yj"; 
$dbname = "if0_37269996_e_swachhta_db"; 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (userName, userEmail, userPassword, userAddDate) VALUES ('$name', '$email', '$password', current_timestamp())";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../login");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
<?php
$servername = "sql100.infinityfree.com";
$username = "if0_37269996"; 
$password = "Nk1FujxALUi4Yj"; 
$dbname = "if0_37269996_e_swachhta_db"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (userName, userEmail, userPassword, userAddDate) VALUES ('$name', '$email', '$password', current_timestamp())";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../login");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>