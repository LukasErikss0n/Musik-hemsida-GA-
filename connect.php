<?php

include "server-connect.php";
include "upload.php";



$grabTitle = "SELECT id, file_name, name_audio from audio_detailes";
$result = $con->query($grabTitle);


$sound = [];
if (mysqli_num_rows($result) > 0) {
  while ($obj = mysqli_fetch_assoc($result)) {
    $name = $obj['name_audio'];
    $id = $obj['id'];
    $fileName = $obj['file_name'];

    $sound = [$fileName => $name];

    foreach ($sound as $files => $nameOfAudio) {
      echo $nameOfAudio;
      echo "<audio controls  muted class = 'music'>";
      echo "<source src='$soundUrl' class = 'music' type ='audio/mp3' ><br>";
      echo "</audio>";
    }
  }
}
$result->free_result();



$con->close();
