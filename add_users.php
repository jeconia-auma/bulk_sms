<?php
    require_once('partials/header.php');
?>
<div class="content">
    <form action="send.php" method="post" class="form form-hide active" id='individual' enctype="multipart/form-data">
        <div class="input-group">
            <span class="input-group-text">Full Names</span>
            <input type="text" class="form-control" placeholder="Enter Full Names" aria-label="fullnames" name="fullnames">
        </div>
        <br>
        <div class="input-group">
            <span class="input-group-text">Email</span>
            <input type="email" class="form-control" placeholder="Enter E-mail" aria-label="email" name="email">
        </div>
        <br>
        <div class="input-group">
            <span class="input-group-text">Password</span>
            <input type="password" class="form-control" placeholder="Enter Password" aria-label="password" name="password">
        </div>
        <br>
        <div class="input-group">
            <span class="input-group-text">Confirm Password</span>
            <input type="password" class="form-control" placeholder="Enter Password" aria-label="password" name="conf_password">
        </div>
        <br>
        <div class="buttons">
            <button type="submit" class="btn btn-primary" name="add_user">Submit</button>
        </div>
    </form>
<?php require_once('partials/footer.php'); ?>