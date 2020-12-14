<?php 
session_start();
//$arrr = ['apple', 'mango', 'lemon', 12]; 
//var_dump($_POST); 


$email = $_POST['email'];
$password = $_POST['password'];



if($email == '' && $password == '')
{
  echo "Please insert all necissary information"; 
  return false; 
}




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


$sql = "SELECT * FROM users WHERE email = '$email'";

$result = $conn->query($sql);

$row = $result->fetch_assoc();

$passFromDB = $row['password']; 

if($passFromDB == $password){

    $_SESSION["email"] = $_POST['email'];

    header("Location: profile.php");

} else {
    echo "User name or password is not correct!"; 
}