<?php
include('config/connect.php');
$errors = array(
    'email' => '',
    'title' => '',
    'ingredients' => ''
);
$email = $title = $ingredients = '';
if (isset($_POST['submit'])) {
    //check email
    if (empty($_POST['email'])) {
        $errors['email'] = "An email is required <br>";
    } else {
        $email = $_POST['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "Email musr be a valid email address <br>";
        }
    }
    //check title
    if (empty($_POST['title'])) {
        $errors['title'] = "An title is required <br>";
    } else {
        $title = $_POST['title'];
        if (!preg_match('/^[a-zA-Z\s]+$/', $title)) {
            $errors['title'] = "Title must be letters and space only";
        }
    }
    //check ingredients
    if (empty($_POST['ingredients'])) {
        $errors['ingredients'] = "At least one ingredient is required <br>";
    } else {
        $ingredients = $_POST['ingredients'];
        if (!preg_match('/^([a-zA-z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)) {
            $errors['ingredients'] = "ingredients must be a comma separated list";
        }
    } // end of POST check
    if (array_filter($errors)) {
        // echo "errors in the form";
    } else {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $ingredients = mysqli_real_escape_string($conn, $_POST['ingredients']);
        $sql = "INSERT INTO pizzas(id, title, email, ingredients)
            VALUES(null, '$email', '$title', '$ingredients')";
        if (mysqli_query($conn, $sql)) {
            //success
            header("location: index.php");
        } else {
            //error
            echo "query error: " . mysqli_error($conn);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<?php include('templates/header.php'); ?>
<section class="container grey-text">
    <h4 class=center>Add a Pizza</h4>
    <form class="white" action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label for="">Your Email: </label>
        <input type="text" name="email" value="<?= htmlspecialchars($email) ?>">
        <div class="red-text"><?= $errors['email'] ?></div>
        <label for="">Pizza title: </label>
        <input type="text" name="title" value="<?= htmlspecialchars($title) ?>">
        <div class="red-text"><?= $errors['title'] ?></div>
        <label for="">Ingredients (comme separeted): </label>
        <input type="text" name="ingredients" value="<?= htmlspecialchars($ingredients) ?>">
        <div class="red-text"><?= $errors['ingredients'] ?></div>
        <div class="center">
            <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
        </div>
    </form>
</section>
<?php include('templates/footer.php'); ?>

</html>