<?php 

// if(condition){
    // Action
// }

$number1 = 10;
$number2 = 10;
$number3 = 1;
$message = "";
if($number1 > $number2){
    // $Number1 greater than $number2
    if($number1 == $number3){
        // number1 = number3 => biggest
    }elseif($number1 > $number3){
        // number 1 is the biggest

    }
}elseif($number1 > $number3){
    // number 1 greater than number3
    if($number1 == $number2){
        // number1 = number2 -< biggest
    }elseif($number1 > $number2){
        // number1 is the biggest
    }
}

echo $message;

// if($number1 > $number2){
//     echo "Number1 ({$number1}) Is Greater Than Number2 ({$number2})";
// }else{
//     echo "Number2 ({$number2}) Is Greater Than Number1 ({$number1})";
// }


// if($number1 >= $number2 && $number1 >= $number3){
//     echo "number1 ({$number1}) is the bigest";
// }elseif($number2 >= $number1 && $number2 >= $number3){
//     echo "number2 ({$number2}) is the bigest";
// }elseif($number3 >= $number1 && $number3 >= $number2){
//     echo "number3 ({$number3}) is the bigest";
// }else{
//     echo "The three numbers are equal";
// }


$gender = 'f';
$salary = 1500;


// if($gender == 'f'){
//     // gender = female
//     if($salary > 3000){
//         // female rich
//     }else{
//         // female poor
//     }
// }else{
//     // gender = male
//     if($salary > 3000){
//         // male rich
//     }else{
//         // male poor
//     }
// }
//f , 3000

// if($gender == 'f' && $salary > 3000){
//     // female , rich
// }elseif($gender == 'f' && $salary < 3000){
//     // female . poor
// }elseif($gender == "m" && $salary > 3000){
//     // male , rich
// }else {
//     // male, poor
// }

// $temp = 45;

# weather
# temp <= 0 ===> cold weather
# temp > 0 ===> warm weather
# temp > 20 ===> hot weather
# temp > 30 ===> very hot weather

if($temp <= 0){
    echo "cold weather";
}elseif($temp > 0 && $temp <= 20){
    echo "warm weahter";
}elseif($temp > 20 && $temp <= 30){
    echo "Hot Weather";
}else{
    echo "Very Hot Weather";
}

