<?php 

trait mediav1{
    public function uploadPhoto()
    {
        echo "upload from " . __TRAIT__;
    }
}


trait mediav2{
    public function uploadPhoto()
    {
        echo "upload from "  . __TRAIT__;
    }
}

class user {
    use mediav1,mediav2{
        mediav1::uploadPhoto AS uploadPhotoFromV1;
        mediav2::uploadPhoto insteadof mediav1;
    }
}
(new user)->uploadPhotoFromV1();