<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../../../Database/database.php';
require_once '../../../AutoLoader.php';
require_once '../Header.php';


class LoginSecurityService {
    
    
    private $username = "";
    private $password = "";
    private $pin = 0;
    
    function __construct($username, $password, $pin){
        $this->username = $username;
        $this->password = $password;
        $this->pin = $pin;
        
    }
    
    function authenticate(){
        
        $db = new Database();
        
        $connection = $db->getConnnection();
        
        if($this->username == "" || $this->password == "" || $this->pin = 0 ){
            return false;
        }
            if ($connection) {
                $attemptedLoginName = $_POST['username'];
                $attemptedPassword = $_POST['password'];
                $attemptedPin = $_POST['pin'];
                
                $sql_statement = "SELECT * FROM `users` WHERE `username` = '$attemptedLoginName' AND `password` = '$attemptedPassword' AND `pin` = '$attemptedPin' LIMIT 1";
                $result = mysqli_query($connection, $sql_statement);
                $row = mysqli_fetch_assoc($result);
               
                
                if ($result) {
                    if (mysqli_num_rows($result) == 1){
                        
                        return $row['idUsers'];
                    }
                    else {
                    
                      return false;
                      
                    }
                }
                else {
                    echo "error" . mysqli_error($connection);
                    exit;
                }
            }
            else {
                echo "Error connecting " . mysqli_connect_errno();
                exit;
            }
            
        }
        
    }
        
       
    


?>