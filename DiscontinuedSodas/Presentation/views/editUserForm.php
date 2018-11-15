<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'Header.php';
require_once '../../AutoLoader.php';
require_once '../../businessService/UserBusinessService.php';

$id = $_GET['id'];

$bs = new UserBusinessService();

$user = $bs->findbyID($id);


?>
<head>

<link rel="stylesheet" type="text/css" href="../../Presentation/store.css">
</head>
<body class="homepage" link="white">

<div class="container">
<div class= "header">
<h1>Update Account</h1>
</div>

<div class="ResultsHeader" >
<form action="../Handlers/processUpdateUser.php">
 <div class="form-group">
    <input type="hidden" class="form-control" id="username" value="<?php echo $user->getId()?>" name="id">
  </div>
  
  <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" id="username" value="<?php echo $user->getUsername()?>" name="username">
  </div>
  
  <div class="form-group">
    <label for="password">Password</label>
    <input type="text" class="form-control" id="password" value="<?php echo $user->getPassword()?>" name="password">
  </div>
  
  <div class="form-group">
    <label for="Pin">Pin</label>
    <input type="number" class="form-control" id="pin" value="<?php echo $user->getPin()?>"name="pin">
  </div>
  
  <div class="form-group">
    <label for="Email">Email</label>
    <input type="text" class="form-control" id="email" value="<?php echo $user->getEmail()?>"name="email">
  </div>
  
  <div class="form-group">
  <label for="admin">Admin</label><br>
  <select name="admin">
  <option  value="adminYes"> Yes</option>
  <option value="adminNo"> No</option>
  </select>
	</div>
	<div class="button">
	<button type="submit" >Done</button>
	</div>
</form>
</div>
</div>
</body>