<?php
    require_once('partials/header.php');

    function counter($conn, $table){
        //to get count from db
        $sql = 'select * from '.$table;
        $result = mysqli_query($conn, $sql);
    
        return $count = mysqli_num_rows($result);
    }

?>

<header>
<h1>Admin Dashboard</h1>
</header>
<section id="dashboard" class="dashboard">
    <div class="card">
        <h2>Users</h2>
        <p>Count: <?php echo $count = counter($conn, 'users');?></p>
    </div>
    <div class="card">
        <h2>Subscribers</h2>
        <p>Count: <?php echo $count = counter($conn, 'subscription_management');?></p>
    </div>
    <div class="card">
        <h2>Messages</h2>
        <p>Count: <?php echo $count = counter($conn, 'content_message');?></p>
    </div>
</section>

<br><br>

<section id="dashboard" class="dashboard">
    <div class="card">
        <h2>Sms inbox</h2>
        <p>Count: <?php echo $count = counter($conn, 'sms_inbox');?></p>
    </div>
    <div class="card">
        <h2>sms outbox</h2>
        <p>Count: <?php echo $count = counter($conn, 'sms_outbox');?></p>
    </div>
</section>

<br><br>

<section id="dashboard" class="dashboard">
    <div class="card">
        <h2>Scheduled Messages</h2>
        <p>Count: <?php echo $count = counter($conn, 'content_message');?></p>
    </div>
</section>

<?php
    include_once __DIR__ . "/partials/footer.php";
?>