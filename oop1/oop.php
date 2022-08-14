<?php
# class => blueprint which group similar tasks => organize application structure
# class user
#login
#logout 
#register

# class order
#make order
#cancel order

# class product
#get all products
#get recent products
#most saled products
$id = 4;
class user {
    public $name;
    public $email;
    public $password;
    public $gender = 'm';
    public $birthdate;

    public function login()
    {
        if(true){

        }
        $variable = [];
        foreach ($variable as $key => $value) {
            # code...
        }
        echo $id;
        echo $variable;
    }

    public function logout()
    {
        echo "logout {$this->name}<br>"; // pseudo variable 
                                    //     => refer to current object inside class
    }

    public function changeProfilePic()
    {
        # code...
    }
}
# object => instance to access class scope (local scope) into global scope
$user = new user;
$user->name = "Ahmed"; // add value
$user->email = 'ahmed@gmail.com'; // add
$user->password = '123546'; // add
$user->birthdate = '1/1/2000'; // add
$user->logout();
// print_r($user);
$user2 = new user;
$user2->name = "mohamed";
$user2->email = 'mohamed@gmail.com'; // add
$user2->password = '123456789'; // add
$user2->birthdate = '1/11/2000'; // add
$user2->logout();
// print_r($user2);
// echo $user->gender;

$user3 = new user;
// print_r($user3);