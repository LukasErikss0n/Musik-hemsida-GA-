<?php
include "connect.php";
include "upload.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index.php</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="file">
        <button type="submit" name="submit">Uppload</button>
    </form>

    <div id="galary">

        <?php
        foreach (glob("uploads/*.mp3") as $image) {
            echo "<audio controls  muted class = 'music'>";
            echo "<source src='$image' class = 'music' type ='audio/mp3' ><br>";
            echo "</audio>";
        }
        ?>
    </div>

</body>

</html>