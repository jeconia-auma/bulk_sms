<?php
    require_once('partials/header.php');

    $sql = 'select * from users';
    $result = mysqli_query($conn, $sql);

    $count = mysqli_num_rows($result);
?>

<section id="table-page" class="table-page">
    <h2>Users Table</h2><br>
    <a href="add_users.php" class="action primary">Add</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
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
                            <td><?php echo($row['fullnames']); ?></td>
                            <td><?php echo($row['email']); ?></td>
                            <td>
                                <?php
                                    if($row['rights'] == 1){
                                        echo "Admin";
                                    }else if($row['rights'] == 2){
                                        echo "Edittor";
                                    }else {
                                        echo "Viewer";
                                    }
                                ?>
                            </td>
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
                    <td>Nothing to see here</td>
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