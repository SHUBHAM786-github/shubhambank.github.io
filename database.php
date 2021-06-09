<?php

 $conn =new mysqli('localhost', 'root', '', 'bank');
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$email=$_POST['email'];
$customername=$_POST['customername'];
$amount=$_POST['amount'];

  $sql = "INSERT INTO emp(email,customername,amount) VALUES ('$email','$customername','$amount')";

if ($conn->query($sql) == TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>