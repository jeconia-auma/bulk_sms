<?php
    require_once('partials/header.php');

    $sql = 'select * from offercode';
    $result = mysqli_query($conn, $sql);

    $count = mysqli_num_rows($result);
?>

<section id="table-page" class="table-page">
    <h2>OfferCodes Table</h2><br>
    <a href="add_offercode.php" class="action primary">Add</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Offer Name</th>
                <th>Offer Code</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php
            if($count > 0){
                $sn = 1;
                while($row = mysqli_fetch_assoc($result)){
                    ?>
                        <tr>
                            <td><?php echo $sn; ?></td>
                            <td><?php echo($row['offername']); ?></td>
                            <td><?php echo($row['offer_code']); ?></td>
                            <td>
                                <a href="delete.php?remove=<?php echo $row['id']; ?>&table=offercode&callback=offer_codes" class="action delete">Delete</a>
                            </td>
                        </tr>
                    <?php
                    $sn++;
                }
            }else {
                ?>
                <tr>
                    <td colspan="4">Nothing to see here</td>
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