<?php
$conn = mysqli_connect('remotemysql.com','3CTjHrjUyS','','gNOmy0VgtE');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";
  ?>
?>