<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../../AutoLoader.php';
require_once 'Header.php';
require_once '../../businessService/UserBusinessService.php';


$id = $_GET['id'];

$bs = new UserBusinessService();

$success = $bs->deleteItem($id);

if($success){
    echo "User was deleted";
}
else{
    echo "Nothing deleted";
}