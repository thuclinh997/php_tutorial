<?php
/** @var $pdo \PDO */
require_once("layouts/connect.php");

$id = $_GET['id'] ?? null;

$statement = $pdo->prepare("SELECT * FROM products WHERE id = :id");
$statement->bindValue(':id', $id);
$statement->execute();
$product = $statement->fetch(PDO::FETCH_ASSOC);
$errors = [];
$title = $product['title'];
$price = $product['price'];
$description = $product['description'];
if (!is_dir('images')) {
    mkdir('images');
}

if (isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $image = $_FILES['image'] ?? null;
    $imagePath = $product['image'];
    if ($image && $image['tmp_name']) {
        if ($product['image']) {
            unlink($product['image']);
        }
        $imagePath = 'images/' . randomString(8) . '/' . $image['name'];
        mkdir(dirname($imagePath));
        // echo "<pre>";
        // var_dump($imagePath);
        // echo "</pre>";
        move_uploaded_file($image['tmp_name'], $imagePath);
    }
    // exit;
    $title = htmlspecialchars($_POST['title']);
    $description = htmlspecialchars($_POST['description']);
    $price = htmlspecialchars($_POST['price']);

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
    }
    if (empty($errors)) {
        $sql = "UPDATE products SET title = :title, image = :image, description = :description, price = :price WHERE id = :id LIMIT 1";
        $statement = $pdo->prepare($sql);
        $statement->bindValue(':title', $title);
        $statement->bindValue(':description', $description);
        $statement->bindValue(':image', $imagePath);
        $statement->bindValue(':price', $price);
        $statement->bindValue(':price', $price);
        $statement->bindValue(':id', $id);
        $statement->execute();
        header("location: index.php");
        // var_dump($statement);
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
$title = "Edit Product " . $product['title'];
$header = "Edit Product: " . $product['title'];
$component = "Home";
$links = "index.php";

include_once('layouts/header.php'); ?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="edit.php?id=<?= $product['id'] ?>" method="post" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="exampleInputEmail1">Product title</label>
                    <input type="text" class="form-control" name="title" value="<?= $product['title'] ?>">
                </div>
                <?php if ($product['image']) : ?>
                    <img src="<?= $product['image'] ?>" class="update-image" alt="">
                <?php endif; ?>
                <div class="form-group">
                    <label for="exampleInputEmail1">Product image</label>
                    <input type="file" class="form-control" name="image">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Product Description</label>
                    <textarea name="description" id="" cols="10" rows="5" class="form-control"><?= $product['description'] ?></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Product Price</label>
                    <input type="text" class="form-control" name="price" value="<?= $product['price'] ?>">
                </div>
                <button type="submit" name="submit" class="btn btn-info">update product</button>
            </form>
        </div>
    </div>

</div>

</body>

</html>