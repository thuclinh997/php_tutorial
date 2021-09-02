<?php
require_once("connect.php");
require_once("function.php");
$id = $_GET['id'];
// print_r(show($id));
$user = show($id);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD USING PDO MYSQL</title>
</head>

<body>
    <h1>CRUD PHP MYSQL USING PDO</h1>
    <div><a href="index.php">Home</a></div>
    <div><a href="insert.php">INSERT DATA</a></div>
    <table border="1">
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Pass</th>
            <th>Created at</th>
            <th colspan="2">Query</th>
        </tr>
        <tr>
            <td><?=$user['id']?></td>
            <td><?= $user['name'] ?></td>
            <td><?= $user['email'] ?></td>
            <td><?=$user['pass']?></td>
            <td><?=$user['created_at']?></td>
            <td><a href="update.php?id=<?= $user['id'] ?>">Edit</a></td>
            <td><a href="delete.php?id=<?= $user['id'] ?>">Delete</a></td>
        </tr>
    </table>
</body>

</html>