<?php
require_once("layouts/connect.php");

$image = $title = $description = $price = "";

$errors = [];
if (!is_dir('images')) {
    mkdir('images');
}

if (isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $image = $_FILES['image'] ?? null;
    $imagePath = '';
    if ($image && $imagePath) {
        $imagePath = 'images/' . randomString(8) . '/' . $image['name'];
        mkdir(dirname($imagePath));
        // echo "<pre>";
        // var_dump($imagePath);
        // echo "</pre>";
        move_uploaded_file($image['tmp_name'], $imagePath);
    }
    // exit;
    $title = htmlspecialchars($_POST['title']);
    // $image = htmlspecialchars($_POST['image']);
    $description = htmlspecialchars($_POST['description']);
    $price = htmlspecialchars($_POST['price']);
    $date = date('Y-m-d H:i:s');

    if (!$title) {
        $errors[] = 'product title is required';
    }
    if (!$image) {
        $errors[] = 'image title is required';
    }
    if (!$description) {
        $errors[] = 'description title is required';
    }
    if (!$price) {
        $errors[] = 'price title is required';
    } else {
        $sql = "INSERT INTO products(title, description, image, price, created_at) VALUE (:title, :description, :image, :price, :created_at)";
        $statement = $pdo->prepare($sql);
        $statement->bindValue(':title', $title);
        $statement->bindValue(':description', $description);
        $statement->bindValue(':image', $imagePath);
        $statement->bindValue(':price', $price);
        $statement->bindValue(':price', $price);
        $statement->bindValue(':created_at', $date);
        $statement->execute();
        header("location: index.php");
    }
}
function randomString($n)
{
    $characters = '0123456789QWERTYUIOPASDFGHJKLZXCVBNMqwertyuiopasdfghjklzxcvbnm';
    $str = '';
    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $str = $characters[$index];
        break;
    }
    return $str;
}
?>
<?php
$title = "Create new Product";
$header = "Create new Product";
$component = "Home";
$links = "index.php";

include_once('layouts/header.php'); ?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <?php if (count($errors) > 0) : ?>
                <div class="alert alert-danger">
                    <?php foreach ($errors as $error) : ?>
                        <div><?= $error ?></div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="col-12">
            <form action="create.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputEmail1">Product title</label>
                    <input type="text" class="form-control" name="title">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Product image</label>
                    <input type="file" class="form-control" name="image">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Product Description</label>
                    <textarea name="description" id="" cols="10" rows="5" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Product Price</label>
                    <input type="text" class="form-control" name="price">
                </div>
                <button type="submit" name="submit" class="btn btn-info">create new product</button>
            </form>
        </div>
    </div>

</div>

</body>

</html>