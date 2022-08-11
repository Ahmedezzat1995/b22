<?php
include "layouts/header.php";
include "layouts/navbar.php";
$products = [
    [
        'id' => 1,
        'name' => 'laptop',
        'price' => [
            15000, 20000
        ],
        'image' => '1.jpg',
    ],
    [
        'id' => '2',
        'name' => 'mobile',
        'price' => [
            12000, 10000
        ],
        'image' => '2.jpg'
    ],
    [
        'id' => 3,
        'name' => 'tv',
        'price' => [
            8000, 12000
        ],
        'image' => '3.jpg'
    ],

]; // 3 levels

?>
<div class="container">
    <div class="row">
        <div class="col-12 h1 text-center text-dark mt-5">
            All Products
        </div>
        <?php foreach ($products as $product) { ?>
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <img src="images/<?= $product['image'] ?>" class="w-100">
                        <p class="card-text"><?= $product['name'] ?></p>
                    </div>
                    <div class="card-footer text-muted">
                        <p> <?php
                            foreach ($product['price'] as $price) {
                                echo $price . ' EGP <br>';
                            }
                            ?> </p>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<?php 
include "layouts/footer.php";
include "layouts/scripts.php";
?>