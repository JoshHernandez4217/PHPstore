<?php

require_once 'Header.php';

?>


<html>
<title>Discontinued Sodas</title>
<head>

<link rel="stylesheet" type="text/css" href="../../Presentation/store.css">
</head>

<body class="searchpage" link="white">

<div class="header">
<h1>Discontinued Sodas Store</h1>
</div>

<div class="LoginForm">
<form action="../Handlers/ProductSearchHandler.php">
Search for a Soda: <input type="text" name="name"></input><br>
<div class="button">
	<button type="submit" >Search</button>
	</div>
</form>
</div>
	
</body>



</html>