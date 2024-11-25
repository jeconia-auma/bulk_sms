<?php
    require_once('partials/header.php');

    $sql = 'select * from offercode';
    $result = mysqli_query($conn, $sql);

    $count = mysqli_num_rows($result);
?>
    <div class="content">
        <div class="dropdown">
            <select name="formshow" class="form-select" id="formshow">
                <?php
                    if($count > 0){
                        $sn = 1;
                        while($row = mysqli_fetch_assoc($result)){
                            ?>
                                <option value="<?php echo $row['offer_code']; ?>"><?php echo $row['offername']; ?></option>
                            <?php
                            $sn++;
                        }
                    }else {
                        echo "<option value='20234' class='text-warning'>Shortcode</option>";
                    }
                ?>
            </select>
        </div>
        <br><br>
        <form action="mailer.php" method="post" class="form form-hide active" id='individual' enctype="multipart/form-data">
            <div class="head">
                <h3>Sms Body</h3>
            </div>
            <div class="body">
                <hr>
                <div class="mb-3">
                    <textarea class="form-control textarea-autosize" name="body" id="" cols="30" rows="10"></textarea>
                </div>
            </div>
            <br>
            <div class="input-group">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label for="flexCheckDefault">  Schedule</label>
            </div>
            <br>
            <div class="input-group" id="schedule">
                <span class="input-group-text">Schedule</span>
                <input type="datetime-local" class="form-control" placeholder="Enter Subject" aria-label="subject" name="subject">
            </div>
            <br>
            <div class="buttons">
                <button type="submit" class="btn btn-primary" name="send">Send</button>
            </div>
        </form>
    </div>
<?php require_once('partials/footer.php'); ?>