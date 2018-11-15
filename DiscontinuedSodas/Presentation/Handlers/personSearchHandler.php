<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../../businessService/UserBusinessService.php';
require_once '../../AutoLoader.php';
require_once '../views/Header.php';


$bs = new UserBusinessService();

$persons = $bs->findAll();

?>
<html></html>
<title>Discontinued Sodas</title>
<head>

<link rel="stylesheet" type="text/css" href="../Presentation/store.css">
</head>

<body class="searchpage" link="white">


</body>
</html>
<?php 


if($persons){
    include('../views/displayAllUsers.php');
}
else{
    echo "Nothing Found";
   
}


?>