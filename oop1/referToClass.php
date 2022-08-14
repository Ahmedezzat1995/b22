<?php
class user {
    public $name;
    public static $gender = 'm';
    public const BONUS = 50;

    public static function login()
    {
        echo "Login <br>";
    }

    public function print()
    {
        echo user::BONUS;
        echo self::BONUS; // refer to current class inside class
        echo self::$gender;
        user::login();
        $this->name = "mahmoud";
        $this->login();
    }
}
// echo user::BONUS; // :: scope resolution operator
// echo user::$gender; 
// user::login();

$user = new user;
$user->name = 'mahmoud';
// $user->login();

$user2 = new user;
$user2->name = 'mahmoud';
// $user2->login();
