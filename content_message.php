<?php
    require_once('partials/header.php');

    $sql = 'select * from content_message';
    $result = mysqli_query($conn, $sql);

    $count = mysqli_num_rows($result);
?>
    <div class="content">
        <h3>Inbox</h3>
        <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th>MESSAGE</th>
                <th>MSISDN</th>
                <th>OFFER CODE</th>
                <th>OPERATION</th>
                <th>STATUS</th>
                <th>CREATED</th>
                <th>UPDATED</th>
                <th>ACTION</th>
            </tr>
            <?php
                if($count > 0){
                    $sn = 1;
                    while($row = mysqli_fetch_assoc($result)){
                        ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['message']; ?></td>
                                <td><?php echo($row['msisdn']); ?></td>
                                <td><?php echo $row['offer_code']; ?></td>
                                <td><?php echo $row['operation']; ?></td>
                                <td><?php echo $row['status']; ?></td>
                                <td><?php echo $row['created']; ?></td>
                                <td><?php echo $row['updated']; ?></td>
                                <td>
                                    <a class="btn btn-success">Reset</a>
                                    <a class="btn btn-danger">delete</a>
                                </td>
                            </tr>
                        <?php
                        $sn++;
                    }
                }else {
                    echo "<tr><td class='text-warning'>Nothing to see here</td></tr>";
                }
            ?>
        </table>
    </div>
<?php require_once('partials/footer.php'); ?>