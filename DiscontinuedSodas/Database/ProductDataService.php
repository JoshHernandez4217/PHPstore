<?php

require_once 'database.php';
require_once '../../businessService/model/Product.php';

class ProductDataService{
    
    
    function findByProductName($n){
        //returns an array of persons
        
        $db = new database();
        
        
        
        
        
        $connection = $db->getConnnection();
        
        $stmt = $connection->prepare("SELECT idProducts, ProductName, Description, Price, Photo FROM products WHERE ProductName LIKE ?");
        
        if(!$stmt) {
            echo "Something wrong in the binding process. ";
            exit;
        }
        
        $like_n = "%" . $n . "%";
        
        $stmt->bind_param("s", $like_n);
        
        $stmt->execute();
        
        
        $stmt->store_result();
        
        $numRows = $stmt->num_rows;
        
        
        
        $stmt->bind_result($id, $ProductName, $Description, $Price, $Photo);
        
        $person_array = array();
        
        while( $stmt->fetch()){
  
            // create a person object
            $p = Array($id, $ProductName, $Description, $Price, $Photo);
            
            // pusha that peron onto the array
            
            array_push($person_array, $p);
        }
        return $person_array;
    }

    
    function findbyID($id){
        
        $db = new Database();
        
       
        $connection = $db->getConnnection();
        
        $stmt = $connection->prepare("SELECT idProducts, ProductName, Description, Price, Photo FROM products WHERE idProducts LIKE ? LIMIT 1");
        
        if(!$stmt) {
            echo "Something wrong in the binding process. ";
            exit;
        }
        
        $like_n = "%" . $id . "%";
        
        $stmt->bind_param("s", $like_n);
        
        $stmt->execute();
        
        
        $stmt->store_result();
        
        $numRows = $stmt->num_rows;
        
        // echo "Number of rows fetched " . $numRows ."<br>";
        
        $stmt->bind_result($id, $ProductName, $Description, $Price, $Photo);
        
        $product_array = array();
        
        while( $stmt->fetch()){
            //                 echo "id = " . $id . "<br>";
            //                 echo "name = " . $FirstName . " <br>";
            
            
            // create a person object
            $p = Array($id, $ProductName, $Description, $Price, $Photo);
            
            // pusha that peron onto the array
            
            array_push($product_array, $p);
        }
        
        $p = new Product($product_array[0][0], $product_array[0][1], $product_array[0][2], $product_array[0][3], $product_array[0][4]);
        
        return $p;
        
    }

    
    function deleteItem($id){
        
        $db = new Database();
        
        echo "Testing database data <br>";
        
        //   echo "Searching for " . $n . " in the database." . "<br>";
        
        
        
        $connection = $db->getConnnection();
        
        $stmt = $connection->prepare("DELETE FROM products WHERE idProducts = ? LIMIT 1");
        
        if(!$stmt) {
            echo "Something wrong in the binding process. ";
            exit;
        }
        
        $like_n = "%" . $id . "%";
        
        $stmt->bind_param("i", $id);
        
        $stmt->execute();
        
        if($stmt->affected_rows > 0){
            return true;
        }
        else{
            return false;
        }
        
    }
    
    function updateOne($id, $Product){
        
        $db = new Database();
        
        echo "Testing database data <br>";
        
        $connection = $db->getConnnection();
        
        $stmt = $connection->prepare("UPDATE products SET ProductName = ?, Description = ? WHERE idProducts = ? LIMIT 1");
        
        if(!$stmt) {
            echo "Something wrong in the binding process. ";
            exit;
        }
        
        $pbs = new Product($id, $ProductName, $Description, $Price, $Photo);
        
        $Product = $pbs->getProductName();
        $Description = $pbs->getDescription();
        
        $stmt->bind_param("ssi", $Product, $Description, $id);
        
        $stmt->execute();
        
        if($stmt->affected_rows > 0){
            return true;
        }
        else{
            return false;
        }
        
    }
    
    
    
    function findByPrice($n){
        //returns an array of persons
        
        $db = new Database();
        
     
        $connection = $db->getConnnection();
        
        $stmt = $connection->prepare("SELECT idProducts, ProductName, Description, Price FROM products WHERE Price <= ?");
        
        if(!$stmt) {
            echo "Something wrong in the binding process. ";
            exit;
        }
        
        $like_n = "%" . $n . "%";
        
        $stmt->bind_param("i", $like_n);
        
        $stmt->execute();
        
        
        $stmt->store_result();
        
        $numRows = $stmt->num_rows;
        
        
        
        $stmt->bind_result($id, $ProductName, $Description, $Price);
        
        $product_array = array();
        
        while( $stmt->fetch()){
            //                 echo "id = " . $id . "<br>";
            //                 echo "name = " . $FirstName . " <br>";
            
            
            // create a person object
            $p = Array($id, $ProductName, $LastName, $Description, $Price);
            
            // pusha that peron onto the array
            
            array_push($person_array, $p);
        }
        return $person_array;
    }

}


?>


