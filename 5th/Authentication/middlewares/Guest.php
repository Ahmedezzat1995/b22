<?php 
if(isset($_SESSION['user'])){
    header('location:products.php');die;
}