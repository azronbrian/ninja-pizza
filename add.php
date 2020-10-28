<?php 
    if(isset($_POST['submit'])){
        echo $_POST['email'];
        echo $_POST['title'];
        echo $_POST['ingredients'];
    }
?>

<!DOCTYPE html>
<html lang="en">

    <?php include('templates/header.php'); ?>

    <section class="continer grey-text">
        <h4 class="center">Add a Pizza</h4>
        <form action="add.php" class="white" method="POST">
            <label for="">Your Email:</label>
            <input type="text" name="email" id="">
            <label for="">Pizza Title:</label>
            <input type="text" name="title" id="">
            <label for="">Ingredients (comma seperated):</label>
            <input type="text" name="ingredients" id="">
            <div class="center">
                <input type="submit" value="submit" name="submit" class="btn brand z-depth-0">
            </div>
        </form>
    </section>

    <?php include('templates/footer.php'); ?>

</html>