<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require_once 'database.php';
require_once '../../AutoLoader.php';
require_once '../../Presentation/views/Header.php';
require_once '../../businessService/model/User.php';

class UserDataService{
    
    function findByusername($n){
        //returns an array of persons
        
        $db = new Database();
        
        
        
        
        
        $connection = $db->getConnnection();
        
        $stmt = $connection->prepare("SELECT idUsers, username, email FROM users WHERE username LIKE ?");
        
        if(!$stmt) {
            echo "Something wrong in the binding process. ";
            exit;
        }
        
        $like_n = "%" . $n . "%";
        
        $stmt->bind_param("s", $like_n);
        
        $stmt->execute();
        
        
        $stmt->store_result();
        
        $numRows = $stmt->num_rows;
        
        
        
        $stmt->bind_result($id, $username, $email);
        
        $person_array = array();
        
        while( $stmt->fetch()){
           
            
            
            // create a person object
            $p = Array($id, $username, $email);
            
            // pusha that peron onto the array
            
            array_push($person_array, $p);
        }
        return $person_array;
    }
    
    
    function findbyID($id){
        
        $db = new Database();
      
        
        $connection = $db->getConnnection();
        
        $stmt = "SELECT * FROM users WHERE idUsers='$id'";
        $result = $connection->query($stmt);
        if(!$result) {
            echo "broke query";
              }        
              else{
                  if($result->num_rows > 0){
        $numRows = $result->fetch_assoc();
        $user = new Person($numRows['idUsers'], $numRows['username'], $user['password'], $numRows['email'], $numRows['pin'], $numRows['admin']);
            return $user;
                  }
                  else{
                      echo "no results";
                      
                  }
           }
              
              
  
    }
    function showAll(){
        $db = new Database();
        
        
        
        
        
        $connection = $db->getConnnection();
        
        $stmt = $connection->prepare("SELECT * FROM users");
        
        $stmt->execute();
        
        
        $stmt->store_result();
        
        $numRows = $stmt->num_rows;
        
        
        
        $stmt->bind_result($id, $username, $password, $pin, $admin, $email);
        
        $person_array = array();
        
        while( $stmt->fetch()){
            
            
            
            // create a person object
            $persons = Array($id, $username, $email, $password, $pin, $admin);
            
            // pusha that peron onto the array
            
            array_push($person_array, $persons);
        }
        return $person_array;
    }
    
    function deleteItem($id){
        
        echo "I am going to delete id = " . $id . "!!!<br>";
        
        $db = new Database();
        
     
        $connection = $db->getConnnection();
        
        $stmt = $connection->prepare("DELETE FROM users WHERE idUsers = ? LIMIT 1");
        
        if(!$stmt) {
            echo "Something wrong in the binding process. ";
            exit;
        }
        
        
        $stmt->bind_param("i", $id);
        
        $stmt->execute();
        
        if($stmt->affected_rows > 0){
            return true;
        }
        else{
            return false;
        }
        
    }
    
    function updateOne($person){
        
        $db = new Database();
        
        echo "Testing database data <br>";
        
        $connection = $db->getConnnection();
        echo mysqli_error($connection);
        $stmt = $connection->prepare("UPDATE users (username, password, pin, admin, email) VALUES (?,?,?,?,?)");
        echo mysqli_error($stmt);
        if(!$stmt) {
            echo "Something wrong in the binding process. ";
            exit;
        }
        
        
        $username = $person->getUsername();
        $password = $person->getPassword();
        $pin = $person->getPin();
        $admin = $person->getAdmin();
        $email = $person->getEmail();
        
        $stmt->bind_param("ssiss", $username, $pasword, $pin, $admin, $email);
        
        $stmt->execute();
        
        if($stmt->affected_rows > 0){
            return true;
        }
        else{
            return false;
        }
        
    }

    function makeNew($person){
        
        $db = new Database();
        
        echo "Testing database data <br>";
        
        $connection = $db->getConnnection();
        
        $stmt = $connection->prepare("INSERT INTO users (username, password, pin, admin, email) VALUES (?,?,?,?,?)");
        
        if(!$stmt) {
            echo "Something wrong in the binding process. ";
            exit;
        }
        
           
        $username = $person->getUsername();
        $password = $person->getPassword();
        $pin = $person->getPin();
        $admin = $person->getAdmin();
        $email = $person->getEmail();
        
        $stmt->bind_param("ssiss", $username, $pasword, $pin, $admin, $email);
        
        $stmt->execute();
        
        if($stmt->affected_rows > 0){
            return true;
        }
        else{
            return false;
        }
        
    }
    
    function findByusernameWithAddress($n){
        
        $db = new Database();
        
        
        
        
        
        
        $connection = $db->getConnnection();
        
        $stmt = $connection->prepare("SELECT users.idUsers, username, email, Street, City, AreaCode, State, Country 
FROM users
JOIN addresses
ON users.idUsers = addresses.Users_idUsers
WHERE username LIKE ?");
        
        if(!$stmt) {
            echo "Something wrong in the binding process. ";
            exit;
        }
        
        $like_n = "%" . $n . "%";
        
        $stmt->bind_param("s", $like_n);
        
        $stmt->execute();
        
        
        $stmt->store_result();
        
        $numRows = $stmt->num_rows;
        
        
        $stmt->bind_result($id, $Username, $Email, $Street, $City, $AreaCode, $State, $Country);
        
        $person_array = array();
        
        while( $stmt->fetch()){
            //                 echo "id = " . $id . "<br>";
            //                 echo "name = " . $FirstName . " <br>";
            
            
            // create a person object
            $p = Array($id, $Username, $Email, $Street, $City, $AreaCode, $State, $Country);
            
            // pusha that peron onto the array
            
            array_push($person_array, $p);
        }
        return $person_array;
        
    }
    
    
    
    
}

?>