<?php
# indexed array => element (index , value) -> index -> integer unique
$users = ['ahmed','mohamed','aya','fatma','mohamed','galal'];
// last index = length - 1;
$lastIndex = count($users) - 1; // 4
// echo $users[1]; // mohamed
// echo $users[$lastIndex]; // mohamed
$users[2] = ''; // edit 
$users[6] = 'desoky'; // add
$users[9] = 'smr';
// print_r($users);
# associative array => element (key , value) , key -> string unique
$product = [
    'price'=>250,
    'quantity'=>5,
    'status'=>true,
    'name'=>'Laptop',
    'quantity'=>10,
];

echo $product['price']; // get
$product['price'] = 1250; // edit
$product['code'] = 12345; // add
print_r($product);