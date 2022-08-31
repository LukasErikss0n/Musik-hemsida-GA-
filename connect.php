<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "test";

$con = new mysqli($servername, $username, $password, $db);

if ($con->connect_error) {
  die("connection failed:" . $con->connect_error);
}


$sql = "SELECT id, namn from martins_test";
$result = $con->query($sql);

echo $result->num_rows;

$con->close();
