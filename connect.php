<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "test";

$con = new mysqli($servername, $username, $password, $db);

if ($con->connect_error) {
  die("connection failed:" . $con->connect_error);
}


//$sql = "SELECT id, namn from martins_test";
//$result = $con->query($sql);

$grapName = "SELECT id, name_audio from audio_detailes";
$result = $con->query($grapName);

if ($result) {
  while ($row = $result->fetch_row()) {
    printf("%s (%s)\n", $row[0], $row[1]);
  }
  $result->free_result();
}


//echo $result->num_rows;

$con->close();
