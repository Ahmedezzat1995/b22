<?php
#1
$number1 = 5;
$number2 = '2';
var_dump($number1 == $number2);
var_dump($number1 === $number2);
$sum =  $number1 + $number2;
echo $sum;
#2
$number1 = 2;
$number2 = '2';
var_dump($number1 <> $number2);
var_dump($number1 != $number2);
var_dump($number1 <=> $number2);
#3
$number1 = 5;
$number2 = 'galal';
$number3 = '5';
$diff = $number1 - $number2;
echo $diff;
var_dump($number1>=$number3);
#4
$number1 = 15;
$number2 = 4;
$number3 = 3;
echo($number1 % $number2);
echo($number1 % $number3);
#5
$number1 = 2;
$number2 = 3;
$number3 = 27;
echo($number1 ** $number2);
echo($number3 ** (1/$number2));
#6
$number1 = 10;
$number1 *= 2;
$number1 += 5;
$number1 /= 5;
echo $number1;
#7
$number1 = 10;
$number2 = $number1;
$new = $number1++;
echo $new;
echo $number1;
echo $number2;
#8
$number1=5;
$number2 = --$number1;
echo $number2;
echo $number1;
#9
$number1 = 7;
echo ++$number1;
echo $number1--;
echo $number1++;
echo --$number1;
echo $number1;
#10
$number1 = 10;
$number2 = '10';
$number3 = 5;
var_dump(($number1 >= $number2 AND $number1 == $number2 ) && ( $number3 <= $number2 AND $number1 < $number3));
#11
$number1 = 1;
$number2 = '1';
$number3 = 15;
var_dump(($number1 !== $number2 OR $number1 >= $number2 ) || ( $number3 < $number2 OR $number1 < $number2));
#12
$number1 = '100';
$number2 = '50';
$number3 = 10;
var_dump(! (($number1 === $number2 && $number2 >= $number3) || ($number3 <= $number1 && $number2 !== $number3)) );
#13
$name = "Ahmed";
$age = 25;
$code = FALSE;
echo "<h1 style='color:blue;'>{$name} $code {$age}</h1>";
$message = '{$name} $code {$age}';
echo $name . ' ' . $code . ' ' . $age;
echo $message;
#15
$select = "<select>";
$select .= "<option>cairo</option>";
$select .= "<option>giza</option>";
$select = "</select>";
echo $select;
$name = "Galal";
$name .= "Abdelwahed";
$name  = "husseny";
echo $name;