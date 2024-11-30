<?php
  require_once("includes/db_conn.php");
  require_once("includes/session_checker.php");  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="assets/css/admin_style.css">
</head>
<body>
    <div class="sidenav">
        <div class="logo">
            <img src="assets/images/back.png" alt="Logo">
        </div>
        <ul>
            <li><a href="/">Dashboard</a></li>
            <li class="dropdown">
                <span class="dropdown-toggle">SMS &#9660;</span>
                <ul class="dropdown-menu">
                    <li><a href="send_sms.php">Send sms</a></li>
                    <li><a href="sms_inbox.php">sms inbox</a></li>
                    <li><a href="sms_outbox.php">sms outbox</a></li>
                    <li><a href="content_message.php">Content Message</a></li>
                </ul>
            </li>
            <li><a href="subscribers.php">Subscribers</a></li>
            <li><a href="offer_codes.php">OfferCodes</a></li>
            <li><a href="users.php">Users</a></li>
            <!-- <li><a href="#settings">Settings</a></li> -->
        </ul>
        <div class="logout">
            <a href="logout.php">Logout</a>
        </div>
    </div>

    <div class="main-content">