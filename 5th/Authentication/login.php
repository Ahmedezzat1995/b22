<?php
include "layouts/header.php";
include "middlewares/Guest.php";
include "layouts/navbar.php";
$users = [
    [
        'id' => 1,
        'name' => 'esraa',
        'email' => 'esraa@gmail.com',
        'password' => 123456,
        'gender' => 'f',
        'image' => '1.jpg'
    ],
    [
        'id' => 2,
        'name' => 'fatma',
        'email' => 'fatma@gmail.com',
        'password' => 123456,
        'gender' => 'f',
        'image' => '2.jpg'
    ],
    [
        'id' => 2,
        'name' => 'ahmed',
        'email' => 'ahmed@gmail.com',
        'password' => 123456,
        'gender' => 'm',
        'image' => '3.jpg'
    ]
];

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $errors = [];
    if(empty($_POST['email'])){
        // error 1 
        $errors['email']="<div class='font-weight-bold text-danger' > Email Is Required </div>";
    }
    if(empty($_POST['password'])){
        // error 2 
        $errors['password']="<div class='font-weight-bold text-danger' > Password Is Required </div>";
    }

    if(empty($errors)){
        // login
        $authenticated = false;
        foreach($users AS $user){
            if($user['email'] == $_POST['email'] && $user['password'] == $_POST['password']){
                // user authenticated
                $authenticated = true;
                $_SESSION['user'] =  $user;
                header('location:products.php');die;
            }
        }
        if($authenticated==false){
            $errors['email']="<div class='font-weight-bold text-danger' > Wrong Email Or Password </div>";
        }
    }
    // if empty errors => no validation errors
}
?>
<div class="container">
    <div class="row">
        <div class="col-12 h1 text-center text-dark mt-5">
            Login
        </div>
        <div class="col-4 offset-4 my-5">
            <form method="post">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <?= $errors['email'] ?? "" ?>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <?= $errors['password']  ?? ""  ?>
                <div class="form-group">
                    <button class="btn btn-outline-dark btn-sm"> Login </button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php 
include "layouts/footer.php";
include "layouts/scripts.php";
?>