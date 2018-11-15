<?php

$Usrname = $_GET['username'];
echo "Your Username is " . $Usrname . "</br>";

$Passwrd = $_GET['password'];
echo "Your password is " . $Passwrd . "</br>";

$Pin = $_GET['pin'];
echo "Your pin is " . $Pin . "</br>";

$Email = $_GET['email'];
echo "The email you registered is " . $Email . "</br>";


$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "php2store";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($connect) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql  = "INSERT INTO `users` (`idUsers`, `username`, `password`, `pin`, `email`) VALUES (NULL, '$Usrname', '$Passwrd', '$Pin', '$Email');";

if ($conn->query($sql) === TRUE) {
    echo " New record created successfully";
    echo "Click <a href='../Index.html'> here to sign in.</a>";
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
