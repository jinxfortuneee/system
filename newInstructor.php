<?php
include 'db.php'; // Make sure this file contains your database connection code

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $E_n = $_POST['E_n'];
    $I_lname = $_POST['I_lname'];
    $I_fname = $_POST['I_fname'];
    $I_mname = $_POST['I_mname'];
    $I_gender = $_POST['I_gender'];
    $I_bp = $_POST['I_bp'];
    $I_dob = $_POST['I_dob'];
    $I_pob = $_POST['I_pob'];

    // Check if employee number already exists
    $search_query = mysqli_query($conn, "SELECT * FROM instructors WHERE E_n = '$E_n'");
    if (!$search_query) {
        die('Error: ' . mysqli_error($conn)); // Handle query error
    }
    $num_row = mysqli_num_rows($search_query);
    if ($num_row >= 1) {
        echo "<script>alert('Employee number is not available.'); history.go(-1);</script>";
    } else {
        // Insert new record
        $sql = "INSERT INTO instructors (E_n, I_lname, I_fname, I_mname, I_gender, I_bp, I_dob, I_pob)
                VALUES ('$E_n', '$I_lname', '$I_fname', '$I_mname', '$I_gender', '$I_bp', '$I_dob', '$I_pob')";

        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Record added successfully.'); window.location.replace(document.referrer);</script>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn); // Handle query error
        }
    }
}
mysqli_close($conn);
?>