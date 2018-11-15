<?php

require_once 'Header.php';
?>
<div class="container">
<h1>Create a New User Account</h1>

<form action="../Handlers/processNewUser.php">
  <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" id="username" placeholder="Username" name="username">
  </div>
  
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
  </div>
  
  <div class="form-group">
    <label for="Pin">Pin</label>
    <input type="number" class="form-control" id="pin" placeholder="Pin" name="pin">
  </div>
  
  <div class="form-group">
    <label for="Email">Email</label>
    <input type="text" class="form-control" id="email" placeholder="Email" name="email">
  </div>
  
  <div class="form-group">
  <label for="admin">Admin</label><br>
  <select name="admin">
  <option  value="adminYes"> Yes</option>
  <option value="adminNo"> No</option>
  </select>
	</div>
	
	<button type="submit" class="btn btn-outline-dark">Done</button>
</form>
</div>