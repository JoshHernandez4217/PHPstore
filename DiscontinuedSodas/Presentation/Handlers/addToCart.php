<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require_once '../../AutoLoader.php';
require_once '../../businessService/model/Cart.php';
require_once '../views/Header.php';

print_r($_SESSION); 


$id = $_GET['id'];

if(isset($_SESSION['cart'])){
    $c = $_SESSION['cart'];
}
else{
    if(isset($_SESSION['userID'])){
        
    $c = new Cart($_SESSION['userID']);
    $_SESSION['cart'] =$c;
    }
    else{
        echo "Please Login First";
        exit;
    }
}

$c->addItem($id);
$c->CalculateTotal();
$_SESSION['cart'] = $c;


header("Location: ../views/showCart.php");






?>