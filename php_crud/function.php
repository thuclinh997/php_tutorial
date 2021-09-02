<?php
// require_once("connect.php");
function index()
{
    global $conn;
    $sql = "SELECT * FROM users";
    $query = $conn->prepare($sql);
    // var_dump($query);
    try {
        $query->execute();
        $users = $query->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $exception) {
        echo $exception->getMessage() . "<br>";
    }
    return $users;
}
function show($id)
{
    global $conn;
    $sql = "SELECT * FROM users WHERE id = $id";
    $query = $conn->prepare($sql);
    // var_dump($query);
    try {
        $query->execute();
        $user = $query->fetch(PDO::FETCH_ASSOC);
    } catch (Exception $exception) {
        echo $exception->getMessage() . "<br>";
    }
    return $user;
}
function insert($post)
{
    global $conn;
    $sql = "INSERT INTO users(name, email, pass) VALUES(:name, :email, :pass)";
    $query = $conn->prepare($sql);
    // var_dump($query);
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $pass = htmlspecialchars(sha1($_POST['pass']));

    $query->bindParam(':name', $name);
    $query->bindParam(':email', $email);
    $query->bindParam(':pass', $pass);
    $query->execute();
    header("location:index.php");
}
function update($post, $id)
{
    global $conn;
    if ($_POST['pass']) {
        $sql = "UPDATE users SET name =:name, email =:email, pass =:pass
        WHERE id =:id";
    } else {
        $sql = "UPDATE users SET name =:name, email =:email
        WHERE id =:id";
    }
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $pass = htmlspecialchars(sha1($_POST['pass']));
    // $id = $_GET['id'];
    $query = $conn->prepare($sql);
    $query->bindParam(':name', $name);
    $query->bindParam(':email', $email);
    if ($_POST['pass']) {
        $query->bindParam(':pass', $pass);
    }
    $query->bindParam(':id', $id);
    // $data = [
    //     'name' => $name,
    //     'enami' => $email,
    //     'pass' => $pass,
    //     'id' => $id
    // ];
    $query->execute();
    // echo "thanh cong";
    header("location:index.php");
}
