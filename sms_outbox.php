<?php
    require_once('partials/header.php');

    $sql = 'select * from sms_outbox';
    $result = mysqli_query($conn, $sql);

    $count = mysqli_num_rows($result);
?>

<section id="table-page" class="table-page">
    <h2>SMS Outbox Table</h2>
    <table>
        <thead>
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
        </thead>
        <tbody>
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
                                <button class="action suspend">Suspend</button>
                                <button class="action delete">Delete</button>
                            </td>
                        </tr>
                    <?php
                    $sn++;
                }
            }else {
                ?>
                <tr>
                    <td colspan="9">Nothing to see here</td>
                </tr>
                <?php
            }
        ?>
        </tbody>
    </table>
</section>

<?php
    include_once __DIR__ . "/partials/footer.php";
?>