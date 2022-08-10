<?php

// $number = 10; // global

// function incrementNumber($number){ // local
//     echo ++$number;
// }

// incrementNumber(10); // 11
// echo "<br>";
// echo $number; // 10














// $number = 10; // global

// function addNumbers($number1,$number2){ // local
//     $sum = $number1 + $number2; // local
//     return $sum;
// }

// echo addNumbers(5,4);



$number = 10; // global

function incrementNumber(&$number){ // local
    echo ++$number;
}

incrementNumber($number); // 11

echo $number; // 11

/*$number = 0 ;

function incremnt(&$number)
{
    echo ++$number ;
}

incremnt($number);
incremnt($number);
incremnt($number);*/

// function  increment($number)
// {
//     echo $number++ ;
//     return $number ;
// }

// increment(increment(increment(increment(1))));