<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index.php</title>
    <link rel="stylesheet" href="new-design.css">
</head>

<body>
    <div class="content">
        
        <?php
        include "nav-bar.php";
        ?>
        <div class="main-wrapper">
            <div class="onside-menu">
                <?php include "onside.php"; ?>
            </div>
            <div id="galary">
                <?php
                include "connect.php";
                ?>
            </div>
            <div class="upload">
                <form action="upload.php" method="POST" enctype="multipart/form-data">
                <label for="file" class ="label-file side">Välj file</label>
                <input type="file" name="file" class="ghost">
                <label for="text" class ="label-file margin">Sound name:</label>
                <input type="text" name="sound-name" placeholder = "T.ex Piano Music">
                <button type="submit" name="submit" class="label-file">Uppload</button>
        </form>

    </div>
        </div>
    </div>
  
</body>

</html>