<?php
    session_start();
    if($_SESSION['login']['status'] != 1){
        header('location: ./login.php');
    }
?>