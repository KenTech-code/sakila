<?php
$servername = "localhost";
$username = "root";
$password = "Mysql$2019";
$database = "sakila";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";



// Close the connection
mysqli_close($conn); 
?> 