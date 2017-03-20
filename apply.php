<?php

$server = "localhost";
$user = "root";
$pass = "";
$dbname = "maindb";

//Creating connection

$conn = new mysqli($server,$user,$pass,$dbname);

//Checking connection

if($conn->connect_error) {
  die("Connection failed:" .$conn->connect_error);
}

$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$message = mysqli_real_escape_string($conn, $_POST['message']);

$sql = "INSERT INTO applications (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";

if ($conn->query($sql) === TRUE) {
  echo "Your application has been submitted.<br>You should expect a response within 14 days.";
echo "<br>Back to <a href='index.php'>homepage</a>";
}

else {
  echo "Error" .$sql . "<br>". $conn->error;
}
$conn->close();
 ?>
