<?php 
$user = [ 
    'id'=>5,
    'name'=>'ahmed',
    'activities'=>['gym','football'],
    'orders'=>['150 EGP','200 EGP']
]; // 2 level
echo $user['id'];
echo $user['name'];
echo $users['activities'][0];
echo $users['activities'][1];
echo $users['orders'][0];
echo $users['orders'][1];

$users = [
   [ 
    'id'=>5,
    'name'=>'ahmed',
    'activities'=>['gym','football'],
    'orders'=>['150 EGP','200 EGP']
   ],
   [ 
    'id'=>6,
    'name'=>'mohamed',
    'activities'=>['football'],
    'orders'=>['200 EGP']
   ]
]; // 3 levels

echo $users[0]['activities'][0];