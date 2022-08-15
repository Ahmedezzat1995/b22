<?php

class person1 {
    public $id;
    public $name;

    public function uploadPhoto()
    {
        echo "upload photo from ".self::class;
    }
}

trait media {
    public function uploadPhoto()
    {
        echo "upload photo from ".__TRAIT__;
    }
}

class user extends person1 {
    use media;
}

(new user)->uploadPhoto();