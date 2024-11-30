<?php
    include_once __DIR__ . "/includes/session_checker.php";
    include_once __DIR__ . "/includes/db_conn.php";
    include_once __DIR__ . "/includes/data_validation.php";

    if(isset($_POST['add_offercode'])){
        $offercode_name = validate_data($_POST['offercode_name']);
        $offercode = validate_data($_POST['offercode']);

        $sql = "insert into offercode (`offername`, `shortcode_id`, `offer_code`) VALUES ('$offercode_name', 1, '$offercode')";
        $result = mysqli_query($conn, $sql);

        if(!$result){
            $_SESSION['error_msg'] = "failed to send message";
            header("location: offer_codes.php");
        }else {
            $_SESSION['error_msg'] = "success";
            header("location: offer_codes.php");
        }
    }
?>
