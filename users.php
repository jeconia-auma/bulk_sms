<?php
    require_once('partials/header.php');

    $sql = 'select * from users';
    $result = mysqli_query($conn, $sql);

    $count = mysqli_num_rows($result);
?>
    <div class="content">
        <h3>Users</h3>
        <a href="add_users.php" class="btn btn-primary">Add</a><br><br>
        <table class="table table-striped">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>E-mail</th>
                <th>Action</th>
            </tr>
            <?php
                if($count > 0){
                    $sn = 1;
                    while($row = mysqli_fetch_assoc($result)){
                        ?>
                            <tr>
                                <td><?php echo $sn; ?></td>
                                <td><?php echo($row['fullnames']); ?></td>
                                <td><?php echo($row['email']); ?></td>
                                <td>
                                    <a class="btn btn-success">Reset</a>
                                    <a class="btn btn-danger">delete</a>
                                </td>
                            </tr>
                        <?php
                        $sn++;
                    }
                }
            ?>
        </table>
    </div>
<?php require_once('partials/footer.php'); ?>