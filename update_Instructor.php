<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if all required fields are submitted
    if (isset($_POST['E_n'], $_POST['I_lname'], $_POST['I_fname'], $_POST['I_mname'], $_POST['I_gender'], $_POST['I_bp'], $_POST['I_dob'], $_POST['I_pob'])) {
        $E_n = $_POST['E_n'];
        $I_lname = $_POST['I_lname'];
        $I_fname = $_POST['I_fname'];
        $I_mname = $_POST['I_mname'];
        $I_gender = $_POST['I_gender'];
        $I_bp = $_POST['I_bp'];
        $I_dob = $_POST['I_dob'];
        $I_pob = $_POST['I_pob'];

        include 'db.php';

        // Define user identifier (assuming it's coming from a session variable)
        $user = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : '';

        // Check if the instructor with the given employee number already exists
        $search_query = mysqli_query($conn, "SELECT * FROM instructors WHERE E_n = '$E_n'");
        if (!$search_query) {
            die('Error: ' . mysqli_error($conn)); // Handle query error
        }
        $num_row = mysqli_num_rows($search_query);
        if ($num_row >= 1) {
            echo "<script>alert('Employee number is not available.'); history.go(-1);</script>";
        } else {
            // Update instructor information
            $sql = "UPDATE instructors SET 
                    I_lname = '$I_lname', 
                    I_fname = '$I_fname', 
                    I_mname = '$I_mname', 
                    I_gender = '$I_gender', 
                    I_bp = '$I_bp', 
                    I_dob = '$I_dob', 
                    I_pob = '$I_pob'
                    WHERE E_n = '$E_n'";

            if (mysqli_query($conn, $sql)) {
                // Log the update transaction
                mysqli_query($conn, "INSERT INTO history_log (transaction, user_id, date_added) 
                                     VALUES ('updated $E_n in the instructor list', '$user', NOW())");
                echo "<div id='message' class='alert alert-success'><center><h4>Data successfully updated.</h4></center></div>";
                echo "<script>
                        setTimeout(function(){ $('#message').hide(); }, 2000); 
                      </script>";
            } else {
                echo "<script>alert('Failed to submit.');</script>";
            }
        }
        mysqli_close($conn);
    } else {
        echo "<script>alert('Please fill out all required fields.');</script>";
    }
}
?>