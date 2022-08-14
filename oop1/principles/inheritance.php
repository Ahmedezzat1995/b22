<?php

class mobile {
    public $name;
    public $color;
    public $storage;
    public $ram;
    public $battery;
    public $charger = true;
    public static $madeIN = 'china';
    public const VERSION = 1;

    public function turnON()
    {

    }

    public function turnOFF()
    {
        # code...
    }
}

class samsung extends mobile{
    public $fingerPrint = true;
}

$a70 = new samsung;
// print_r($a70->charger);


class iphone extends mobile {
    public $faceID = true;
}