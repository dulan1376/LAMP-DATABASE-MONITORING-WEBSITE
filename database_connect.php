<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "cruddatabase";

$conn = mysqli_connect($servername, $username, $password);
if ($conn->connect_error) {

  die("Connection failed: " . $conn->connect_error);
}