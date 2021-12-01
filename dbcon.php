<?php
$conn = mysqli_connect('remotemysql.com','3CTjHrjUyS','gNOmy0VgtE','3CTjHrjUyS');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";
  ?>
?>