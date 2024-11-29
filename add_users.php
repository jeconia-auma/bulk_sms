<?php
    require_once('partials/header.php');
?>

<section id="form-page" class="form-page">
    <h2>Add User</h2>
    <form action="user_add.php" method="post">
        <label for="name">Full Names:</label>
        <input type="text" id="name" name="fullnames" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <label for="conf_password">Confirm Password:</label>
        <input type="password" id="conf_password" name="conf_password" required>

        <label for="role">Rights:</label>
        <select id="role" name="rights" required>
            <option value="1">Admin</option>
            <option value="2">Editor</option>
            <option value="3">Viewer</option>
        </select>

        <button type="submit" id="submit" name="add_user">Submit</button>
    </form>
</section>

<?php
    require_once('partials/footer.php');
?>