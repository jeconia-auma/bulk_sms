<?php
    session_start();
    unset($_SESSION['login']['status']);

    header("location: login.php");
?>