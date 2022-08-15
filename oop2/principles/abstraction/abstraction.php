<?php

abstract class person {
    public $id;
    public $name;
    public $email;
    public $password;
    public $phone;
    public $gender;
    protected abstract function login();
    public function logout()
    {
        echo 'logout <br>';
    }
}

class client extends person {
    public function login()
    {
        echo 'email & password <br>';
    }
}

class admin extends person {
    public function login()
    {
        echo 'phone & password <br>';
    }
}

class seller extends person {
    public function login()
    {
        echo 'natioanl ID & password <br>';
    }
}