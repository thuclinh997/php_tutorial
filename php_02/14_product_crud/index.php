<?php
require_once("layouts/connect.php");

$search = $_GET['search'] ?? null;
if ($search) {
    $statement = $pdo->prepare("SELECT * FROM products WHERE title LIKE :title ORDER BY created_at DESC");
    $statement->bindValue(':title', "%$search%");
} else {
    $statement = $pdo->prepare("SELECT * FROM products ORDER BY created_at DESC");
}
$statement->execute();
$products = $statement->fetchAll(PDO::FETCH_ASSOC);
// print_r($products);
$i = 1;
$title = "Home - Product";
$header = "Product CRUD";
$component = "Create product";
$links = "create.php";
?>

<?php include_once('layouts/header.php'); ?>
    
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-light bg-light">
                    <form action="index.php" class="form-inline" method="get">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit_search">Search</button>
                    </form>
                </nav>
            </div>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Title</th>
                <th scope="col">Price (VNĐ)</th>
                <th scope="col">Created_at</th>
                <th scope="col" colspan="2" class="text-md-center">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product) : ?>
                <tr>
                    <td scope="row"><?= $i ?></td>
                    <td><img src="<?= $product['image'] ?>" width="70" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt=""></td>
                    <td><?= $product['title'] ?></td>
                    <td><?= number_format($product['price']) ?></td>
                    <td><?= $product['created_at'] ?></td>
                    <td>
                        <a href="edit.php?id=<?= $product['id'] ?>" class="btn btn-outline-primary">Edit</a href="">
                    </td>
                    <td>
                        <form action="delete.php" method="post">
                            <input type="hidden" name="id" value="<?= $product['id'] ?>">
                            <button type="submit" name="delete" class="btn btn-outline-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php
                $i++;
            endforeach;
            ?>
        </tbody>
    </table>
</body>

</html>