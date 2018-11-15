<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../../businessService/ProductBusinessService.php';
require_once '../../AutoLoader.php';
require_once '../views/Header.php';

$ItemSearched = $_GET['name'];

$bs = new ProductBusinessService();

$products = $bs->findBySodaName($ItemSearched);

?>

<html>
<title>Search Results</title>
<head>

<link rel="stylesheet" type="text/css" href="../Presentation/store.css">
</head>

</html>

<?php 


if($products){
    include('../views/showCardProductNameResults.php');
}
else{
    echo "Nothing Found";
    header( "refresh:2;url=../showHomepage.html" );
}


?>