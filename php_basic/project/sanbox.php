<?php
//section
// if(isset($_POST['submit'])){

//     session_start();
//     $_SESSION['name'] = $_POST['name'];
//     // echo $_SESSION['name'];
//     header('location:index.php');
// }
?>
<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php // $_SERVER['PHP_SELF'] 
                    ?>"method="post">
        <input type="text"name="name">
        <input type="submit"name="submit"value="submit">
    </form>
</body>
</html> -->
<?php
// $quotes = readfile('readme.txt');
// echo $quotes;
// $file = 'test.txt';
// if(file_exists($file)){
//     //read file
//     echo readfile($file)."<br>";
//     copy($file,'quotes.txt');
//     //absolute qats
//     echo realpath($file)."<br>";
//     //file size
//     echo filesize($file)."<br>";
//     // rename($file, 'test.txt');
// }
// else{
//     echo 'file does not exist';
// }
//opening a file for reading 
// $handle = fopen($file, 'r+');
// $handle = fopen($file, 'a+');

//read the file
// echo fread($handle, filesize($file));
// echo fread($handle, 112);
//read a single line
// echo fgets($handle);
// echo fgets($handle);
//read a single character
// echo fgetc($handle);
// echo fgetc($handle);
// writing to a file
// fwrite($handle, "\n Everything");
// fclose($handle);
// unlink($file);

//classes
class User
{
    private $email;
    private $name;
    public function __construct($name, $email)
    {
        // $this->email = 'thuclinh@gmail.com';
        // $this->name = "Thuclinh";
        $this->name = $name;
        $this->email = $email;
    }

    public function login()
    {
        // echo "the user logged in <br>";
        echo $this->name . " logged in";
    }
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        if (is_string($name) && strlen($name) > 1) {
            $this->name = $name;
            return "name has been updated to " . $name;
        } else {
            echo 'not a valid name';
        }
    }
}
// $userOne = new User();
// $userOne->login();
// echo $userOne->email;
$userTwo = new User('myngoc', 'myngoc@gmail.com');
// echo $userTwo->name."<br>";
// echo $userTwo->email;
// $userTwo->login();
// echo $userTwo->getName();
$userTwo->setName('mario');
// echo $userTwo->getName();
