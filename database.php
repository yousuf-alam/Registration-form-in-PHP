<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "firoz";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$n=$_POST['name'];
$e=$_POST['email'];
$p=$_POST['psw'];

$sql = "INSERT INTO reg(name,email,password)  VALUES ('$n','$e','$p')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$conn->close();
?>