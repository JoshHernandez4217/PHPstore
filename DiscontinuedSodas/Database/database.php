<?php

class database{
    
    private $servername = "localhost";
    private $dbusername = "root";
    private $dbpass = "root";
    private $dbname = "php2store";
    
    function getConnnection(){
        
        $connection = new mysqli($this->servername, $this->dbusername, $this->dbpass, $this->dbname);
        
        if($connection->connect_error){
            echo "connection failed" . $connection->connect_error . "<br>";
        }
        else{
            return $connection;
        }
    }
    
}

?>
