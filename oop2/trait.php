<?php

trait media {
    public $name;
    
    public function uploadImage()
    {
        echo "upload Photo <br>";
    }
}

trait data {
    public function import()
    {
        # code...
    }
}

class user {
    use media,data;
}

$user = new user;
$user->uploadImage();

class product {
    use media;
    use data;
}