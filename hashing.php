<?php
include './PHP/conn.php';

$def = "admin";

$hash = password_hash($def, PASSWORD_BCRYPT);

$sql = "UPDATE `admin_tb` SET `pass`='$hash'";
$res = mysqli_query($conn, $sql);