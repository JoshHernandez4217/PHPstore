<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'Header.php';
require_once '../../AutoLoader.php';
require_once '../../businessService/UserBusinessService.php';
require_once '../Handlers/personSearchHandler.php';

?>
<html>
<head>

<link rel="stylesheet" type="text/css" href="../../Presentation/store.css">
</head>
<body class="homepage" link="white"></body>

<div class= "DisplayHeader">
<h1>All Users</h1>
</div>

<style>
.table {
	margin: 1vh;
	padding: 5em;
}</style>
<div class="table" >
			<table align="center" style="margin: 0px auto; border="2" bgcolor="white">
				<tr>
				
					<th bgcolor="gray" width="5"> Edit </th>
					
					<th bgcolor="black"> Delete </th>
				
					<th bgcolor="gray" width="5">ID</th>
					
					<th bgcolor="black"> Username</th>
					
					<th bgcolor="gray" width="100">Password</th>
					
					<th bgcolor="black"> Pin</th>
					
					<th bgcolor="gray" width="100">Email</th>
					
					<th bgcolor="black"> Admin</th>
			
					</tr>
				
<?php 
for ($x = 0; $x < count($persons); $x++){
  
    echo "<tr>";
    echo "<td><form action='editUserForm.php'><input type='hidden' name='id' value=".  $persons[$x][0]  ."><input type='submit' value='Edit'></form> </td>";
    echo "<td><form action='deleteUserForm.php'><input type='hidden' name='id' value=".  $persons[$x][0]  ."><input type='submit' value='Delete'></form> </td>";
    echo "<td>" . $persons[$x][0] . "</td>";
    echo "<td>" . $persons[$x][1] . "</td>";
    echo "<td>" . $persons[$x][2] . "</td>";
    echo "<td>" . $persons[$x][3] . "</td>";
    echo "<td>" . $persons[$x][4] . "</td>";
    echo "<td>" . $persons[$x][5] . "</td>";
    
    echo "</tr>";
}
?>

</table>
		</div>

</html>