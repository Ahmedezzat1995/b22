<?php
class user {
    public static function magic1() {
        echo __CLASS__;
    }

    public static function magic2()
    {
        echo user::class;
    }
}
// echo __CLASS__;

user::magic1();

// user::magic2();