<?php
include 'conn.php';


// ==============================
//
// SEARCH LANG (CTRL + F) OG USER LOGIN, ADMIN LOGIN, INSTRUCTOR LOGIN TO NAVIGATE FASTER.
//
// - MIKE
// ==============================






if (isset($_POST['submit'])) {
    $inp_id = $_POST['id'];
    $inp_pass = $_POST['pass'];

    $sql = "SELECT * FROM `user_tb` WHERE `UID` = '$inp_id'";
    $res = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($res, MYSQLI_ASSOC);
    $count = mysqli_num_rows($res);

    if ($count == 1) {
        $pass = $row['pass'];

        // USER LOGIN

        if (password_verify($inp_pass, $pass)) {
            // anhi ang execution
        } else {
            // anhi ang execution
        }
    } else {

        // INSTRUCTOR LOGIN

        $sql = "SELECT * FROM `instructor_tb` WHERE `instructor_id` = '$inp_id'";
        $res = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($res, MYSQLI_ASSOC);
        $count = mysqli_num_rows($res);

        if ($count == 1) {
            $pass = $row['pass'];

            if (password_verify($inp_pass, $pass)) {
                // anhi ang execution
            } else {
                // anhi ang execution
            }
        } else {

            // ADMIN LOGIN
            
            $sql = "SELECT * FROM `admin_tb` WHERE `admin_id` = '$inp_id'";
            $res = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($res, MYSQLI_ASSOC);
            $count = mysqli_num_rows($res);

            if ($count == 1) {
                $pass = $row['pass'];

                if (password_verify($inp_pass, $pass)) {
                    
                } else {
                    
                }
            } else {
                
            }
        }
    }
}
