<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "grading_db";


$conn = mysqli_connect($servername, $username, $password, $dbname);

try {
    $pdo = new PDO("mysql:dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}
?>