<?php
$gender = 'f';

// if($gender == 'f'){
//     echo "female";
// }else{
//     echo "male";
// }

// if($gender == 'f')
//     echo "female";
// else
//     echo "male";


// echo condition ? true : false ;
// $message =  $gender == 'f' ? 'female' : 'male';


$code = NULL;

if($code === NULL){
    echo "ACTIVE";
}


echo $code == NULL ? "ACTIVE" : "";

$message = $code ?? "Active";
echo $message;