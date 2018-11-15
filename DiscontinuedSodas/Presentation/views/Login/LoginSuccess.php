<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../../../AutoLoader.php';
include_once '../Header.php';
require_once 'LoginSecure.php';

header('Location:../../views/showHomepage.php');
?>