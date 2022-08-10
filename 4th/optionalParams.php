<?php
function addNumbers($number1 , $number2  = 0, $number3  = 0){
    return $number1 + $number2 + $number3;
}
// echo addNumbers(1,2,3);
echo "<br>";
// echo addNumbers(1,2);
echo "<br>";
// echo addNumbers(2);

function FullName ($lastName,$firstName = "*",$middleName = "*"){
    echo ucwords("{$firstName} {$middleName} {$lastName} <br>");
}

// FullName("galal","abdelwahed","husseny");

# named arguments
// * abdelwahed husseny
FullName(middleName:"abdelwahed",lastName:"husseny");
// galal * husseny
FullName(firstName:"galal",lastName:"husseny");



