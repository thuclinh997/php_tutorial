<?php
class User
{
    private $userName;
    private $email;

    public function __construct($userName, $email)
    {
        $this->userName = $userName;
        $this->email = $email;
    }

    public function addFriend()
    {

        return $this->email . " added a new friend";
    }
}
$userOne = new User('mario', 'mario@gmail.com');
$userTwo = new User('luxury', 'luxury@gmail.com');
// echo "the class is: " . get_class($userOne);
// echo $userOne->userName . "<br>";
// echo $userOne->email . "<br>";
// echo $userOne->addFriend()."<br>";

// echo $userTwo->userName . "<br>";
// echo $userTwo->email . "<br>";
// echo $userTwo->addFriend();
// print_r(get_class_vars('User'));
// print_r(get_class_methods('User'));
echo $userOne->addFriend();