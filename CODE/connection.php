<?php

$servername = "localhost";

$username = "username";

$password = "1234";

$db = "profilematching";



// Create connection

$conn = mysqli_connect($servername, $username, $password,$db);



// Check connection

if (!$conn) {

   die("Connection failed: " . mysqli_connect_error());

}

echo "Connected successfully";

?>