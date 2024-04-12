<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "grading_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if LRN is set
    if (isset($_POST['lrn'])) {
        $lrn = $_POST['lrn'];

        // Use a prepared statement to prevent SQL injection
        $stmt = $conn->prepare("SELECT * FROM student_info WHERE LRN_NO = ?");
        $stmt->bind_param("s", $lrn);
        $stmt->execute();
        $result = $stmt->get_result()->fetch_assoc();

        // If LRN exists in the database, proceed to student_result.php
        if ($result) {
            header("Location: student_result.php?lrn=$lrn");
            exit();
        } else {
            // If LRN doesn't exist, show an alert
            echo "<script>alert('LRN not found in the database');</script>";
            echo "<script>window.location.href = 'index.php';</script>"; // Redirect to the homepage or another page
        }
    } else {
        // If LRN is not set, show an alert
        echo "<script>alert('LRN is required');</script>";
        echo "<script>window.location.href = 'index.php';</script>"; // Redirect to the homepage or another page
    }
} else {
    // If the form is not submitted, show an alert
    echo "<script>alert('Form not submitted');</script>";
    echo "<script>window.location.href = 'index.php';</script>"; // Redirect to the homepage or another page
}

// Close the database connection
$conn->close();
?>
