<?php
# for
$users = ['mohamed','galal','ahmed','fatma','ahmed'];

// for (counter ;condition; step) { 
//     # code...
// }
// for ($i=100; $i <= 40; $i+=10) { 
//     echo "Hello <br>";
// }

// echo $users[0];
// echo $users[1];
// echo $users[2];
// echo $users[3];
// echo $users[4];
// echo $users[5];
$lastIndex = count($users)-1;
// for($counter = 0;$counter <= $lastIndex;$counter++){
//     echo "$users[$counter] <br>";
// }

// for($counter = $lastIndex;$counter >= 0;$counter--){
//     echo "$users[$counter] <br>";
// }

# while1
// $counter = 10;
// while($counter <= $lastIndex){
//     echo "{$users[$counter]} <br>";
//     $counter++;
// }
// counter 
// while(condition){
 // code
  // step
// }

# dowhile
// counter 
// do {
    // code 

    // step
// }while(condition);

// $counter = $lastIndex;
// do{
//     echo "{$users[$counter]} <br>";
//     $counter--;
// }while($counter >= 0);
# foreach
$users = ['mohamed','galal','ahmed','fatma','ahmed'];

$product = (object)[
    'price'=>250,
    'quantity'=>5,
    'status'=>true,
    'name'=>'Laptop',
    'quantity'=>10,
];
// foreach($product AS $property=>$value){
//     echo "{$property} ======>>>>>  {$value} <br>";
// }


// foreach($product AS $value){
//     echo "{$value} <br>";
// }