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

// Delete reminder from database
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $reminder_id = $_POST['r_id']; // Adjust to match your primary key column name

    $sql = "DELETE FROM reminders WHERE r_id=$reminder_id"; // Adjust to match your primary key column name

    if ($conn->query($sql) === TRUE) {
        header("Location: dash.php");
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

$conn->close();
?>