<?php

// Taxes 14%
// prices [mobile=>10000,laptop=>20000,tshirt=>250]
// discount [mobile=>0.1,laptop=>0.2,tshirt=>0]
if($_SERVER['REQUEST_METHOD'] == "GET"){
    // http_response_code(404);
    die("405 METHOD NOT ALLOWED");
}

define('TAX',0.14);

switch($_POST['product']){
    case 'phone':
        $price = 10000;
        $discount = 0.1;
        break;
    case 'laptop':
        $price = 20000;
        $discount = 0.2;
        break;
    default:
        $pirce = 250;
        $discount = 0;
}
// $price = 10000; 
// $discount = 0.1; 
$taxPercentage = TAX * 100; // 14%
$taxValue = $price * TAX; // 1400
$priceAfterTax = $price + $taxValue; // 11400;
$discountPercentage = $discount * 100; // 10%
$discountValue = $priceAfterTax * $discount; // 1140
$priceAfterDiscount = $priceAfterTax - $discountValue; // 10260
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Invoice</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
        <div class="row">
            <div class="offset-3 col-6 text-center">
                <h1 class=" text-success font-weight-bol">Invoice</h1>
                <ul>
                    <li>
                        Name : <?php echo $_POST['name'] ?>
                    </li>
                    <li>
                        Phone : <?php echo $_POST['phone'] ?>
                    </li>
                    <li>
                        Tax : <?php echo $taxPercentage . "%" ?>
                    </li>
                    <li>
                        Tax Value : <?php echo $taxValue . " EGP" ?>
                    </li>
                    <li>
                        Price After Tax : <?php echo $priceAfterTax . " EGP" ?>
                    </li>
                    <li>
                        Discount Percentage : <?php echo $discountPercentage . "%" ?>
                    </li>
                    <li>
                        Discount Value : <?php echo $discountValue . " EGP" ?>
                    </li>
                    <li>
                        Price After Discount : <?php echo $priceAfterDiscount . " EGP" ?>
                    </li>
                </ul>
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
