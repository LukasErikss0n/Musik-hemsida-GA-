<?php
    include "check-if-session.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index.php</title>
    <link rel="stylesheet" href="new-design.css">
    <link rel="stylesheet" href="upload.css">
    <script src="https://kit.fontawesome.com/62db96ebb4.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="content">
        <?php
        include "nav-bar.php";
        ?>
        <div class="upload">
            <form action="upload.php" method="POST" enctype="multipart/form-data">
                <label for="file" class ="label-file">Välj file</label>
                <input type="file" name="file" class="ghost">
                <label for="text" class ="label-file ">Sound name:</label>
                <input type="text" name="sound-name" placeholder = "T.ex Piano Music">
                <button type="submit" name="submit" class="label-file">Uppload</button>
                <?php
                 if(isset($_GET["error"])) {
                    if($_GET["error"] === "wrongType"){
                     echo "<p class = 'error'>*Incorrect file type</p>";
                    }
                    else if($_GET["error"] === "error"){
                    echo "<p class = 'error'>*Error occured, please try again</p>";
                    }else if($_GET["error"] === " fileToBig"){
                    echo "<p class = 'error'>*Error occured, please try again</p>";
                    }   
                 }                 
                ?>
            </form>
        </div>
    </div>
  
</body>

</html>