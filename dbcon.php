<?php 
$servername = "localhost";
$username = "root";
$dbpassword = "";
$db = 'learnphp'; 

// Create connection
$conn = mysqli_connect($servername, $username, $dbpassword, $db);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}