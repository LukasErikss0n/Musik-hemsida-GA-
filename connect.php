<?php

include "server-connect.php";
include "upload.php";



$grabTitle = "SELECT id, name_audio, file_name from audio_detailes";
$result = $con->query($grabTitle);


$sound = [];
if (mysqli_num_rows($result) > 0) {
  while ($obj = mysqli_fetch_assoc($result)) {
    $name = $obj['name_audio'];
    $id = $obj['id'];
    $fileName = $obj['file_name'];

    $sound = [$fileName => $name];
    
    foreach ($sound as $files => $nameOfAudio) {
      $src = "audios/" . $files;
      echo "<p class ='display-name'>$nameOfAudio</p>";
      echo "<audio controls muted class='music'>";
      echo "<source src='$src' class='music' type='audio/mpeg'>";
      echo "</audio>";
    }
  }
}
$result->free_result();



$con->close();
