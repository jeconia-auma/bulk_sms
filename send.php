<?php
    include_once __DIR__ . "/includes/session_checker.php";
    include_once __DIR__ . "/includes/db_conn.php";
    include_once __DIR__ . "/includes/data_validation.php";

    if(isset($_POST['sms_send'])){
        echo $shortcode = validate_data($_POST['shortcode']);
        echo $message = validate_data($_POST['body']);
        $status = "pending";

        if($_POST['schedule']==""){
            echo $schedule = date('Y-m-d H:i:s');
        }else{
            echo $schedule = validate_date($_POST['schedule']);
        }

        $sql = "insert into content_message (`message`, `offer_code`, `sendtime`, `status`) VALUES ('$message', '$shortcode', '$schedule', '$status')";
        $result = mysqli_query($conn, $sql);

        if(!$result){
            $_SESSION['error_msg'] = "failed to send message";
            header("location: sms_send.php");
        }else {
            $_SESSION['error_msg'] = "success";
            header("location: sms_send.php");
        }
    }
?>