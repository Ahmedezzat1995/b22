<?php
# crud => create read update delete
interface crud {
    function create();
    function read();
    function update();
    function delete();
}

interface data {
    function import();
    function export();
}

class product implements crud,data {
    public function create(){
        echo "create product";
    }
    public function read(){
        echo "read product";
    }
    public function update(){
        echo "update product";
    }
    public function delete(){
        echo "delete product";
    }
    function import(){

    }
    function export(){

    }
}
$product = new product;
$product->create();
class user implements crud {
    public function create(){
        echo "create user";
    }
    public function read(){
        echo "read user";
    }
    public function update(){
        echo "update user";
    }
    public function delete(){
        echo "delete user";
    }
}

$user = new user;
$user->create();