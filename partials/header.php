<?php
  require_once("includes/db_conn.php");
  require_once("includes/session_checker.php");  
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>NewsLetter</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/admin_style.css">
        <script src="assets/package/dist/chart.umd.js"></script>
    </head>
    <body>
        <div class="sidenav">
            <div class="card">
                <ul class="list-group list-group-flush">
                  <a href="index.php">
                    <li class="list-group-item">Dashboard</li>
                  </a>
                  <a href="users.php">
                    <li class="list-group-item">Users</li>
                  </a>
                  <a href="subscribers.php">
                    <li class="list-group-item">Subscribers</li>
                  </a>
                  <!-- Dropdown -->
                  <li class="list-group-item dropdown">
                    <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false">
                      Sms
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="sms_send.php">Send Sms</a></li>
                      <li><a class="dropdown-item" href="sms_inbox.php">Sms Inbox</a></li>
                      <li><a class="dropdown-item" href="sms_outbox.php">Sms Outbox</a></li>
                    </ul>
                  </li>
                  <li class="list-group-item dropdown">
                    <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false">
                      Settings
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                      <li><a class="dropdown-item" href="preferences.php">Preferences</a></li>
                    </ul>
                  </li>
                </ul>
            </div>
            <!-- Logout Button -->
            <a href="logout.php" class="btn btn-danger w-100 mt-4">Logout</a>
        </div>

        <div class="container">
            <header>
                <nav class="navbar">
                    <div class="container-fluid">
                      <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-primary" type="submit">Search</button>
                      </form>
                    </div>
                </nav>
            </header>
