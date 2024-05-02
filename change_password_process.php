<?php
if (isset($_GET['code'])) {
    $code = $_GET['code'];

    include '_dbconnect.php';

    $verifyQuery = $conn->query("SELECT * FROM users where code = '$code' and updated_time >= NOW() - Interval 1 DAY");

    if ($verifyQuery->num_rows == 0) {
        header("location : forgot_password.php");
        exit();
    }

    if (isset($_POST['change'])) {
        $email = $_POST['email'];
        $new_password = $_POST['new_password'];

        $changeQuery = $conn->query("UPDATE users SET password = '$new_password' WHERE email = '$email' and code ='$code' and updated_time >=NOW() - INTERVAL 1 DAY");

        if ($changeQuery) {
            echo "<script>alert('Password Changed Successfully !!');</script>";
            header("location : login.php");
        }
    }
    $conn->close();
} else {
    header("location : forgot_password.php");
    exit();
}
