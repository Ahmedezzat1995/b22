<?php
# break => skip current loop
# continue => ignore current iteration

$users = ['mahmoud','desoky','aya','ahmed','fatma','smr','mohamed'];
// $flag = FALSE;
// foreach($users AS $value){
//     if($value == 'aya'){
//         $flag = TRUE;
//         break;
//     }
// }

// if($flag){
//     echo "User Found";
// }else{
//     echo "User Not Found";
// }

foreach($users AS $value){
    if($value == 'aya' || $value == 'smr')
        continue;
    echo $value . '<br>';
}