<?php
// Establish database connection
$servername = "localhost";
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "system";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert reminder into database
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $description = $_POST['description'];

    $sql = "INSERT INTO reminders (description) VALUES ('$description')";

    if ($conn->query($sql) === TRUE) {
        header("Location: dash.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>