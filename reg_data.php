<h1>This is reg data</h1>

<?php 

//$arrr = ['apple', 'mango', 'lemon', 12]; 
//var_dump($_POST); 

session_start();

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$age = $_POST['age'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$zip_code = $_POST['zip_code'];
$city = $_POST['city'];
$country = $_POST['country'];
$password = $_POST['password'];


if($first_name == '' || $last_name == '' || $email == '')
{
  echo "You can not insert data bacause one or more fields are/is emplty!"; 
  return false; 
}




$servername = "localhost";
$username = "root";
$password = "";
$db = 'learnphp'; 

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


$sql = "INSERT INTO users (first_name, last_name, email, age, phone, address, zip_code, city, country, password) VALUES ('$first_name', '$last_name', '$email', '$age', '$phone', '$address', '$zip_code', '$city', '$country', '$password')";

//$sql = "INSERT INTO users (first_name, last_name, email, age, phone, address, zip_code, city, country, password) VALUES ('$_POST["first_name"]', '$_POST["last_name"]', '$_POST["email"]', '$_POST["age"]', '$_POST["phone"]', '$_POST["address"]', '$_POST["zip_code"]', '$_POST["city"]', '$_POST["country"]', '$_POST["pasword"]')";

$query = mysqli_query($conn, $sql); 

if($query){
    echo "User Registered Successfully!"; 
    $_SESSION["email"] = $_POST['email'];
    header("Location: profile.php");
die();
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}



