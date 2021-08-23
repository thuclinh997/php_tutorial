<?php
include('config/connect.php');
if(isset($_POST['delete'])){
    $id_to_delete = mysqli_real_escape_string($conn,$_POST['id_to_delete']);
    $sql = "DELETE FROM pizzas WHERE id = $id_to_delete";
    if(mysqli_query($conn,$sql)){
        //success
        header("location:index.php");
    }else{
        //failure
        echo "query error:".mysqli_error($conn);
    }
}
//check GET request id param
if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']);
    //make sql
    $sql = "SELECT * FROM pizzas WHERE id = $id";
    //get the query result
    $result = mysqli_query($conn, $sql);
    //fetch result in array format
    $pizza = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    //close connection
    mysqli_close($conn);
    // print_r($pizza);
}
?>
<!DOCTYPE html>
<html>

<?php include('templates/header.php'); ?>
<div class="container center">
    <?php if ($pizza) : ?>
        <h4><?= htmlspecialchars($pizza['title']) ?></h4>
        <p><?= htmlspecialchars($pizza['email']) ?></p>
        <p><?= date($pizza['created_at']) ?></p>
        <h5>Ingredients:</h5>
        <p><?= htmlspecialchars($pizza['ingredients']) ?></p>

        <!-- DELETE FORM -->
        <form action="" method="post">
            <input type="hidden" name="id_to_delete" value="<?= $pizza['id'] ?>">
            <input type="submit" name="delete" value="delete" class="btn brand z-depth-0">
        </form>
    <?php else : ?>
        <h3>No such pizza exists! </h3>
    <?php endif; ?>
</div>
<?php include('templates/footer.php'); ?>


</html>