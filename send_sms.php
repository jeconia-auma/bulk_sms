<?php
    require_once('partials/header.php');
?>

<section id="form-page" class="form-page">
    <h2>Add User</h2><br>
    <form action="send.php" method="post">
        <label for="role">ShortCode: </label>
        <select id="role" name="shortcode" required>
            <option value="2023">Shortcode1</option>
            <option value="2024">Shortcode2</option>
            <option value="2025">Shortcode3</option>
        </select>

        <label for="">Message</label>
        <textarea name="body" id="" row=10></textarea>

        <label for="email">Shedule:</label>
        <input type="checkbox" id="flexCheckDefault">
        <div id="schedule">
            <label id="inline">Date:</label>
            <input type="datetime-local" name="schedule">
        </div>

        <button type="submit" id="submit" name="sms_send">Send</button>
    </form>
</section>

<?php
    require_once('partials/footer.php');
?>