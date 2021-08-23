<?php
class User{
    public $userName = 'Linh';
    public $email = 'thuclinh@gmail.com';
}
$userOne = new User();
// echo "the class is: " . get_class($userOne);
echo $userOne->userName;