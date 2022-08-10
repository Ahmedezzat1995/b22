<?php
# math
// rand
// round

// $number = 1.6;
// 
// echo round($number,0,PHP_ROUND_HALF_DOWN);


// echo rand(100000,999999);


# strings 

// encryption
// hashing
$password = 123456789;
// 
// echo sha1($password);
// echo "<br>";
// echo md5($password);

// $hashedPassword = password_hash($password,PASSWORD_BCRYPT);
// echo $hashedPassword;
// var_dump(password_verify(12345678910,'$2y$10$N4Fvp7A.cy8QvI.PNiG8hu/nCGTOQLbyoaGTi0OnE1bS7ZMBS/UY.'));

// explode();

// implode();

// $games= ['gym','game'=>'football','swimming'];

// $message =  implode(',',$games);
// echo $message;

// print_r(explode('i',$message));



# arrays

// var_dump(in_array('football',$games)); 

// var_dump(array_search('football',$games));


# dates
// echo time();
// 1660133223 

// echo date('d-m-Y h:i:s A');
// date_default_timezone_set('UTC');
// echo date_default_timezone_get();
// echo date('d-m-Y h:i:s A');

$number = 0;
$users = [NULL];
$code = NULL;
# restricted Values => [0,'0','',[],false,null]


if(empty($number)){

}

if(empty($users)){

}

if(empty($code)){

}

$games = ['game1'=>'football','game2'=>NULL];

if(isset($games['game1'])){

}
if(isset($games['game2'])){

}
if(isset($games['game3'])){
    
}

if(empty($games['game1'])){

}
if(empty($games['game2'])){

}
if(empty($games['game3'])){
    
}
