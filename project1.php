<?php

$name=$_POST["name"];
$age=$_POST["age"];
$email=$_POST["email"];
$sickness=$_POST["sickness"];
$symptoms=$_POST["symptoms"];

echo ($name."</br>".$age."</br>".$email."</br>".$sickness."</br>".$symptoms);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project1";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO ecform (name, age, email, sickness,symptoms)
VALUES ('$name', '$age', '$email' , '$sickness', '$symptoms' )";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);









?>