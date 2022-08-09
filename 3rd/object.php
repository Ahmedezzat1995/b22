<?php
# object => element (property , value) , property -> string unique
$product = (object)[
    'price'=>250,
    'quantity'=>5,
    'status'=>true,
    'name'=>'Laptop',
];
// echo $product->price; // get
$product->quantity = 10; // edit
$product->code = 123456; // add
// print_r($product);
?>
