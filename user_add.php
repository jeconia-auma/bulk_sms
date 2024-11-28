<?php
    include_once __DIR__ . "/includes/session_checker.php";
    include_once __DIR__ . "/includes/db_conn.php";
    include_once __DIR__ . "/includes/data_validation.php";

    if(isset($_POST['add_user'])){
        echo $fullnames = validate_data($_POST['fullnames']);
        echo $email = validate_data($_POST['email']);
        $status = "pending";
        echo $password = validate_data($_POST['password']);
        $status = "pending";
        echo $otp = 1250;

        echo $sql = "insert into users (`fullnames`, `email`, `password`, `otp`, `rights`) VALUES ('$fullnames', '$email', '$password', '$otp', 1)";
        $result = mysqli_query($conn, $sql);

        if(!$result){
            $_SESSION['error_msg'] = "failed to send message";
            header("location: users.php");
        }else {
            $_SESSION['error_msg'] = "success";
            header("location: users.php");
        }
    }
?>