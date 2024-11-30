<?php
    require_once('partials/header.php');

    $sql = 'select * from offercode';
    $result = mysqli_query($conn, $sql);

    $count = mysqli_num_rows($result);
?>

<section id="form-page" class="form-page">
    <h2>Add User</h2><br>
    <form action="send.php" method="post">
    <label for="role">ShortCode: </label>
    <select id="role" name="shortcode" required>
    <option value="2023">Select shortcode</option>
    <?php
            if($count > 0){
                while($row = mysqli_fetch_assoc($result)){
                    ?>
                        <option value="<?php echo $row['offer_code']; ?>"><?php echo $row['offername']; ?></option>
                    <?php
                }
            }else {
                ?>
                    <option value="2023">Nothing to see here</option>
                <?php
            }
        ?>
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