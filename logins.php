<?php

    session_start();
    include_once("includes/db_conn.php");

    if(isset($_POST['login'])){
        echo $email = $_POST['email'];
        echo $password = md5($_POST['password']);

        echo $sql = "select * from users where email='$email' and password='$password'";
        print_r($result = mysqli_query($conn, $sql));

        if($result){
            echo $count = mysqli_num_rows($result);
            if($count > 0){
                $_SESSION['login']['status'] = "1";
                header("location: index.php");
            }else {
                echo "wrong email or password";
            }
        }else {
            echo "failed to query the database";
        }
    }

?>