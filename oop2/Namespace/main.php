<?php
include "classes/users/login.php";
include "classes/admins/login.php";
include "classes/sellers/register.php";

use classes\users\login;
use classes\sellers\register;
use classes\admins\login AS adminLogin;

$user = new login;

$admin = new adminLogin;
$seller = new register;
