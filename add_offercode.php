<?php
    require_once('partials/header.php');
?>

<section id="form-page" class="form-page">
    <h2>Add Offer code</h2>
    <form action="offercode_add.php" method="post">
        <label for="name">Offer Code Name:</label>
        <input type="text" id="offercode_name" name="offercode_name" required>
        
        <label for="offercode">Offer Code:</label>
        <input type="text" id="offercode" name="offercode" required>

        <button type="submit" id="submit" name="add_offercode">Submit</button>
    </form>
</section>

<?php
    require_once('partials/footer.php');
?>