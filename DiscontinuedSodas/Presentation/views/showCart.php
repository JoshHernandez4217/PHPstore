<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'Header.php';
require_once '../../AutoLoader.php';
require_once '../../businessService/model/Cart.php';
require_once '../../businessService/UserBusinessService.php';
require_once '../../businessService/ProductBusinessService.php';
require_once '../../businessService/model/User.php';
require_once 'navbar.php';

$pbs = new ProductBusinessService();
$ubs = new UserBusinessService();

echo "<pre>";
print_r($_SESSION);
echo "</pre>";

/*

if(isset($_SESSION['cart'])){
    $c = $_SESSION['cart'];
    if(isset($_SESSION['userID'])){
        $userid = $_SESSION['userID'];
        if($c->getUserid() != $userid){
            echo "You do not own this cart";
            exit;
        }
        
    }
    else {
        echo "You need to login";
        
    }
}
else{
    echo " Nothing in cart";
    exit;
}

*/
$userid = $_SESSION['userID'];

setlocale(LC_MONETARY, 'en_US.UTF-8');
$user = $ubs->findbyID($userid);
echo "<h2>View Cart</h2>";
echo $user->getUsername() . "'s" . " Cart";

?>

<table class="table table-hover table-dark">
<thead>
<tr>
<th scope="col">id</th>
<th scope="col">Soda</th>
<th scope="col">Photo</th>
<th scope="col">Price</th>
</tr>
</thead>
<tbody>

<?php 

foreach($c->getItems() as $soda_id => $qty){
    $product = $pbs->findbyID($soda_id);
    echo "<tr>";
    echo "<td>" . $product->getId() . "</td>";
    echo "<td>" . $product->getProductName() . "</td>";
    echo "<td><img height='120' src='../Sodas/" . $product->getPhoto() . "></td>";
    echo "<td>" . money_format('%.2n', $product->getPrice()) . "</td";
    echo "<td>";
    echo "<form action='UpdateQty.php'";
    echo "<input type='hidden' name='id' value=". $product->getId() . ">";
    echo "<span class='input-group-text'>";
    echo "<input class='form-control' type='text' name='qty' value=" . $qty . ">";
    echo "<input class='btn btn-secondary' type='submit' name='submit' value='update'>";
    echo "</span>";
    echo "</form>";
    echo "</td>";
    echo "<td>" . money_format('%.2n', $qty * $product->getPrice()) . "</td>";
    echo "</tr>";
    
}

?>

</tbody>
</table>

<?php 

echo "<h3>Total Price: " . money_format('%.2n', $c->getTotalPrice()) . "</h3>";
echo "<a class='btn btn-primary' href='showHomepage.php'>Continue Shopping</a>";

?>


