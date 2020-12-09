<h1>My Profile</h1>
<?php

session_start();

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

$email = $_SESSION["email"]; 

$sql = "SELECT * FROM users WHERE email = '$email'";

$result = $conn->query($sql);

//var_dump($result); 

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      
        ?>

        <table border="1">
            <tr>
                <td>ID</td>
                <td>Firt Name</td>
                <td>Last Name</td>
                <td>Email</td>
                <td>Age</td>
                <td>Phone</td>
                <td>Address</td>
                <td>Zip</td>
                <td>City</td>
                <td>Country</td>
                <td>Joined Date</td>
            </tr>

            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['first_name']; ?></td>
                <td><?php echo $row['last_name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['age']; ?></td>
                <td><?php echo $row['phone']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td><?php echo $row['zip_code']; ?></td>
                <td><?php echo $row['city']; ?></td>
                <td><?php echo $row['country']; ?></td>
                <td><?php echo $row['created_at']; ?></td>
            </tr>
        </table>

        <?php 
    }
  } else {
    echo "0 results";
  }