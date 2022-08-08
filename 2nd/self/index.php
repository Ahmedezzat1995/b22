<?php 
// array => [empty=>false,has values => true]
// string => [empty => false, has value => true]
// integer|float => [0 => false, else true]
// NULL => false
// $message = "";
if($_POST){
    // 123456789 => aya 
    // 987654321 => fatma
    // 555555555 => galal
    // 111111111 => ahmed
    if($_POST['national_id']  == 123456789){
        $message = "User Account : Aya";
    }elseif($_POST['national_id'] == 987654321){
        $message = "User Account Fatma";
    }elseif($_POST['national_id'] == 555555555){
        $message = "User Account Galal";
    }elseif($_POST['national_id'] == 111111111){
        $message = "User Account Ahmed";
    }else{
        $message = "User Not Found";
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="contianer">
        <div class="row">              
            <div class="col-12 my-5 h1 text-center text-danger"> Find My Account </div>
            <div class="col-5 mt-5 offset-4">
                <form method="POST">
                    <div class="form-group">
                      <label for="id">ID</label>
                      <input type="text" name="national_id" id="id" class="form-control" placeholder="Enter Your National ID Here!" aria-describedby="helpId">
                      <small id="helpId" class="text-muted">Help text</small>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-outline-danger btn-sm">Find</button>
                    </div>
                    <?php // echo $message ?? ""; ?>
                    <?php /*if(isset($message)){
                        echo $message;
                    } */?>
                    <?php // echo isset($message) ? $message : "" ?>
                </form>
            </div>
        </div>

      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>