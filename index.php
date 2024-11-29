<?php
    require_once('partials/header.php');
?>

<header>
<h1>Admin Dashboard</h1>
</header>
<section id="dashboard" class="dashboard">
    <div class="card">
        <h2>Users</h2>
        <p>Count: 120</p>
    </div>
    <div class="card">
        <h2>Subscribers</h2>
        <p>Count: 450</p>
    </div>
    <div class="card">
        <h2>Messages</h2>
        <p>Count: 300</p>
    </div>
</section>

<br><br>

<section id="dashboard" class="dashboard">
    <div class="card">
        <h2>Sms inbox</h2>
        <p>Count: 120</p>
    </div>
    <div class="card">
        <h2>sms outbox</h2>
        <p>Count: 450</p>
    </div>
</section>

<?php
    include_once __DIR__ . "/partials/footer.php";
?>