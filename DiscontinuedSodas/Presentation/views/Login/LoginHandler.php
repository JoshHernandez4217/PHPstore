<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'LoginSecurityService.php';
require_once '../Header.php';
require_once '../../../AutoLoader.php';

$username = $_POST["username"];
$password = $_POST["password"];
$pin = $_POST["pin"];

if($username == NULL || trim($username) == ""){
    exit("Username is a required field");
}

if($password == NULL || trim($password) == ""){
    exit("Password is a required field");
}

$service = new LoginSecurityService($username, $password, $pin);
$userID = $service->authenticate();
if($userID){
    $_SESSION['principal'] = true;
    $_SESSION['userID'] = $userID;
    print_r($_SESSION);
   
    include "LoginSuccess.php";
}
else{
    $_SESSION['principal'] = false;
    include "LoginFailed.php";
}

?>

