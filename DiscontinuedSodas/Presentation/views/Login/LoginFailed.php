<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require_once '../../../AutoLoader.php';
require_once '../Header.php';

echo "Login failed";
echo "<br>";
echo "Refreshing...";
header( "refresh:2;url=../../../Index.html" );
?>