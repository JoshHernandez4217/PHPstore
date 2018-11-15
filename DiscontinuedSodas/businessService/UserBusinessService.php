<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../../Database/UserDataService.php';

class UserBusinessService {
    
    
    function findByusername($n){
        
        $username = Array();
        
        $dbService = new UserDataService();
        
        $username = $dbService->findusername($n);
        
        return $username;
        
    }
    
    function findAll(){
        
        
        $persons = Array();
        
        $dbService = new UserDataService();
        
        $persons = $dbService->showAll();
        
        return $persons;
        
    }
    
    function findbyID($id){
        
        $dbService = new UserDataService();
        
        $persons = $dbService->findbyID($id);
        
        return $persons;
        
    }
    
    
    function deleteItem($id){
        
        $dbService = new UserDataService();
        
        return $dbService->deleteItem($id);
        
    }
    
    
    function updateOne($person){
        
        $dbService = new UserDataService();
        
        return $dbService->updateOne($person);
        
    }
    
    function createOne($person){
        $dbService = new UserDataService();
        return $dbService->makeNew($person);
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
        
        $persons = Array();
        
        $dbService = new UserDataService();
        
        $persons = $dbService->findByFirstNameWithAddress($n);
        
        return $persons;
        
    }
    
    
}

?>