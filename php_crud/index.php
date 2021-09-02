<?php
require_once("connect.php");
require_once("function.php");
$users = index();
$i = 1;
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
    <div><a href="insert.php">INSERT DATA</a></div>
    <table border="1">
        <tr>
            <th>STT</th>
            <th>Name</th>
            <th>Email</th>
            <th colspan="3">Query</th>
        </tr>

        <?php foreach ($users as $user) : ?>
            <tr>
                <td><?= $i ?></td>
                <td><?= $user['name'] ?></td>
                <td><?= $user['email'] ?></td>
                <td><a href="show.php?id=<?=$user['id']?>">show</a></td>
                <td><a href="update.php?id=<?=$user['id']?>">Edit</a></td>
                <td><a href="delete.php?id=<?=$user['id']?>">Delete</a></td>
            </tr>
        <?php $i++;
        endforeach; ?>
    </table>
</body>

</html>