<?php
    include_once __DIR__ . "/includes/session_checker.php";
    include_once __DIR__ . "/includes/db_conn.php";
    include_once __DIR__ . "/includes/data_validation.php";
    // Set default timezone to Africa/Nairobi
    date_default_timezone_set('Africa/Nairobi');
    if(isset($_POST['sms_send'])){
        $shortcode = validate_data($_POST['shortcode']);
        $message = validate_data($_POST['body']);
        $status = "pending";

        if($_POST['schedule']==""){
            $schedule = date('Y-m-d H:i:s');
        }else{
            $schedule = validate_date($_POST['schedule']);
        }

        echo $sql = "insert into content_message (`message`, `offer_code`, `sendtime`, `status`) VALUES ('$message', '$shortcode', '$schedule', '$status')";
        $result = mysqli_query($conn, $sql);

        if(!$result){
            $_SESSION['error_msg'] = "failed to send message";
            header("location: send_sms.php");
        }else {
            $_SESSION['error_msg'] = "success";
            header("location: send_sms.php");
        }
    }
?>