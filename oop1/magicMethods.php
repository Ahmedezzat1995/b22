<?php

class user {
    public function __construct() {
        echo "User <br>";
    }

    public function __destruct()
    {
        echo "bye <br>";
    }
}


class admin extends user {
   
}

$admin = new admin;

// echo "World <br>";
