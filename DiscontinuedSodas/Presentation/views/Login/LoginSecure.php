<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include_once '../Header.php';

if(isset($_SESSION['principal']) == false || $_SESSION['principal'] == null){
    
    header("Location: ../../ShowHomepage.html");
    
    
}

?>