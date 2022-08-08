<?php

// switch ($variable) {
//     case 'value':
//         # code...
//         break;
//     case 'value2':
//         # code
//         break;
//     default:
//         # code...
//         break;
// }

// $color = "Blue";

// switch ($color) {
//     case 'Black':
//     case 'Blue':
//         echo "I Love This Color {$color}";
//         break;
//     case 'Red':
//     case 'Yellow':
//         echo "I don't Love This Color {$color}";
//         break;
//     default:
//         echo "I don't Know This Color  {$color}";
// }

$temp = 15;
switch ($temp) {
    case $temp <= 0:
        echo "cold weather";
        break;
    case $temp > 0 && $temp <= 20:
        echo "warm weather";
        break;
    case $temp > 20 && $temp <= 30:
        echo "Hot weather";
        break;
    default:
        echo "Very Hot Weather";
}