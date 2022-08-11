<?php 
include "layouts/header.php";
include "middlewares/Auth.php";
include "layouts/navbar.php";
?>
<div class="container">
    <div class="row">
        <div class="col-12 h1 text-center text-dark mt-5">
            Profile
        </div>
        <div class="col-4 offset-4 my-5">
            <img src="images/users/<?= $_SESSION['user']['image'] ?>" class="w-100 rounded-circle" alt="<?=  $_SESSION['user']['name'] ?>">
        </div>
        <div class="col-4 offset-4 my-5">
        <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name"  value="<?= $_SESSION['user']['name'] ?>"  class="form-control" disabled>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" value="<?= $_SESSION['user']['email'] ?>" class="form-control" disabled>
            </div>
            <div class="form-group">
                <label for="male">Male</label>
                <input type="radio" name="gender" id="male" disabled <?= $_SESSION['user']['gender'] == 'm' ? 'checked' : '' ?>>
                <label for="Female">Female</label>
                <input type="radio" name="gender" id="Female" disabled <?= $_SESSION['user']['gender'] == 'f' ? 'checked' : '' ?>>
            </div>
        </div>
    </div>
</div>
<?php 
include "layouts/footer.php";
include "layouts/scripts.php";
?>