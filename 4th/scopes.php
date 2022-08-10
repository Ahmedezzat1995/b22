<?php
# local scopes 
// 1. functions
// 2. class
// 3. traits
// 4. interfaces 


$x = 5; // global var

function test (){
    $y = 7; // local var
    echo $x; // X
    echo $y;
}

echo $y; // X
echo $x;