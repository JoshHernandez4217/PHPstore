<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../../Database/ProductDataService.php';

class ProductBusinessService {
    
    
    function findBySodaName($n){
        
        $SodaName = Array();
        
        $dbService = new ProductDataService();
        
        $SodaName = $dbService->findByProductName($n);
        
      return $SodaName;
        
    }
    
    
    function findbyID($id){
        
        $dbService = new ProductDataService();
        
        $SodaID = $dbService->findbyID($id);
        
        return $SodaID;
        
    }
    
    
    function deleteItem($id){
        
        $dbService = new ProductDataService();
        
        return $dbService->deleteItem($id);
        
    }
    
    
    function updateOne($id, $person){
        
        $dbService = new ProductDataService();
        
        return $dbService->updateOne($id, $Product);
        
    }
    
    
    function findByUserWithAddress($n){
        
        $persons = Array();
        
        $dbService = new UserDataService();
        
        $persons = $dbService->findByFirstNameWithAddress($n);
        
        return $persons;
        
    }
    
    function findByPrice($n){
        
        $SodaName = Array();
        
        $dbService = new ProductDataService();
        
        $SodaName = $dbService->findByPrice($n);
        
        return $SodaName;
        
    }
    
    
    function makeNew($person){
        
        $db = new Database();
        
        echo "Testing database data <br>";
        
        $connection = $db->getConnnection();
        
        $stmt = $connection->prepare("INSERT INTO products (ProductName, Description, Price, Photo) VALUES (?,?,?,?,?)");
        
        if(!$stmt) {
            echo "Something wrong in the binding process. ";
            exit;
        }
        
        
        $ProductName = $product->getProductName();
        $Description = $product->getDescription();
        $Price = $product->getPrice();
        $Photo = $product->getPhoto();
      
        $stmt->bind_param("ssis", $ProductName, $Description, $Price, $Photo);
        
        $stmt->execute();
        
        if($stmt->affected_rows > 0){
            return true;
        }
        else{
            return false;
        }
        
    }
    
    
    
    
}

?>