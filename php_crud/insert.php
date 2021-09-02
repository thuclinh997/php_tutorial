<?php
include_once("connect.php");
require_once("function.php");
if(isset($_POST['submit'])){
    insert($_POST);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert data</title>
</head>

<body>
    <h1>Insert data</h1>
    <div><a href="index.php">HOME</a></div>
    <form action="insert.php" method="post">
        <div>
            <label for="name">Name: </label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="text" name="email" id=email>
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