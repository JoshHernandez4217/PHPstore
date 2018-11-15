<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>
<html>
<head>

<link rel="stylesheet" type="text/css" href="../../Presentation/store.css">
</head>
<body class="homepage" link="white"></body>
<div class= "DisplayHeader">
<h1>Search Results</h1>
</div>

<style>
.table {
	margin: 1vh;
	padding: 5em;
}</style>
<div class="table" >
			<table border="2" bgcolor="white">
				<tr>
					<th bgcolor="black" width="5">Soda ID</th>
					
					<th bgcolor="gray" width="5"> Soda Name</th>
					
					<th bgcolor="black" width="100">Description</th>
					
					<th bgcolor="gray" width="5"> Price</th>
					
			
					</tr>
				
<?php 
for ($x = 0; $x < count($products); $x++){
  
    echo "<tr>";
    echo "<td>" . $products[$x][0] . "</td>";
    echo "<td>" . $products[$x][1] . "</td>";
    echo "<td>" . $products[$x][2] . "</td>";
    echo "<td>" . $products[$x][3] . "</td>";
    
    echo "</tr>";
}
?>

</table>
		</div>

</html>