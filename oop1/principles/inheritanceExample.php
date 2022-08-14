<?php

class person {
    public $id;
    public $name;
    public $age;
    public $phone;
    public $password;
    public const TYPE = 'client';

    public  function login()
    {
        echo "phone && password";
    }

    public function logout()
    {
        # code...
    }
}

class client extends person {
    // public const TYPE = "CLIENT";
}

class seller extends client {
    public $nationalId;
    public $productType;
    public $email;
    
    // override
    public function login()
    {
        echo "email || phone && password";
    }

    public function addProducts()
    {
        # code...
    }
}

class admin extends seller {

}

// print_r(new seller);

