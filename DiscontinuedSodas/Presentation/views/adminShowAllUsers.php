<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require_once '../../AutoLoader.php';
require_once 'Header.php';
require_once 'displayAllUsers.php';


$bs = new UserBusinessService();

$persons = $bs->findAll();

?>

<title>Discontinued Sodas</title>
<head>

<link rel="stylesheet" type="text/css" href="../Presentation/store.css">
</head>

<body class="searchpage" link="white">

<div class= "header">
<h1>All Users</h1>
</div>
</body>

<?php 



?>