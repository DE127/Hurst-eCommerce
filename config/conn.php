<?php
// connect to database
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'hurst_ecm';

$conn = new mysqli($host, $username, $password, $dbname);
// connect to database

mysqli_set_charset($conn, 'UTF8');
// Check connection
if ($conn->connect_errno) {
  echo "Error connection conn" . $conn->connect_error;
  exit();
}
?>
