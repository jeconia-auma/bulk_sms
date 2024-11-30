<?php
    include_once __DIR__ . "/includes/functions.php";
    include_once __Dir__ . "/includes/db_conn.php";

    if(isset($_GET['remove'])){
        remove($conn, $_GET['table'], $_GET['remove'], $_GET['callback']);
    }else {
        echo 'not set';
    }
?>