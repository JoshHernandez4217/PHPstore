<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'Header.php';
require_once '../../AutoLoader.php';

?>

<head>

<link rel="stylesheet" type="text/css" href="../../Presentation/store.css">
</head>
<body class="sodaPage" link="white">
</body>
<div class="centeredcontainer">
<?php 

for($x =0; $x < count($products); $x++){
   
?>

	<div class="card" style="color:white; background: black; float:left ; margin: 0 auto; text-align: center; padding: 2em; height: 90em; width: 30em;">
  <img class="card-img-top" src="../Sodas/<?php echo $products[$x][4]?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?php echo $products[$x][1]?></h5>
    <p class="card-text"><?php echo $products[$x][2]?></p>
    <?php setlocale(LC_MONETARY, 'en_US.UTF-8')?>
     <p class="card-text"><?php echo $products[$x][3]?></p>
    
    <form action="../Handlers/addToCart.php">
    	<input type="hidden" name="id" value = "<?php echo $products[$x][0] ?>">
    	<button type="submit" value="Add to Cart">Add to Cart</button>
    </form>
    
  </div>
</div>

<?php 
}

?>
</div> <!-- end centeredcontianer -->