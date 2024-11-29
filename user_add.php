<?php
    include_once __DIR__ . "/includes/session_checker.php";
    include_once __DIR__ . "/includes/db_conn.php";
    include_once __DIR__ . "/includes/data_validation.php";

    if(isset($_POST['add_user'])){
        $fullnames = validate_data($_POST['fullnames']);
        $email = validate_data($_POST['email']);
        $password = validate_data($_POST['password']);
        $rights = $_POST['rights'];

        $sql = "insert into users (`fullnames`, `email`, `password`, `rights`) VALUES ('$fullnames', '$email', '$password', $rights)";
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
