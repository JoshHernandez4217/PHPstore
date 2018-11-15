<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../../businessService/UserBusinessService.php';
require_once '../views/Header.php';
require_once '../../AutoLoader.php';
require_once '../../businessService/model/User.php';

if(isset($_GET)){
$username = $_GET['name'];
$password = $_GET['description'];
$pin = $_GET['price'];
$email = $_GET['photo'];
}
else {
    echo "Nothing was submitted into the form";
}
    
$bs = new ProductBusinessService();
$product = new Product($id, $ProductName, $Description, $Price, $Photo);

if($bs->makeNew($product)){
    echo "Product inserted";
}
else{
    echo "Nothing inserted"; echo"<br>";
}
    echo "<a href=../showHomepage.php>Click Here to return to Homepage</a>";
    echo "<br>";
    echo "<a href='/'>Or here to return back to previous page</a>";
?>