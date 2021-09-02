<?php
include_once("connect.php");
require_once("function.php");
$id = $_GET['id'];
$sql = "SELECT * FROM users WHERE id = $id";
$query = $conn->prepare($sql);
$query->execute();
$user = $query->fetch(PDO::FETCH_ASSOC);
if (isset($_POST['submit'])) {
    update($_POST, $id);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update data</title>
</head>

<body>
    <h1>Update database</h1>
    <div><a href="index.php">HOME</a></div>
    <form action="update.php?id=<?=$id?>    " method="post">
        <div>
            <label for="name">Name: </label>
            <input type="text" name="name" id="name" value="<?=$user['name']?>">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="text" name="email" id="email" value="<?=$user['email']?>">
        </div>
        <div>
            <label for="pass">Password</label>
            <input type="text" name="pass" id="pass">
        </div>
        <div>
            <input type="submit" value="submit" name="submit">
        </div>
    </form>
</body>

</html>