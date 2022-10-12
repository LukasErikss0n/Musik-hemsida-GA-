<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index.php</title>
    <link rel="stylesheet" href="new-design.css">
    <script src="https://kit.fontawesome.com/62db96ebb4.js" crossorigin="anonymous"></script>
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
        </div>
    </div>
  
</body>

</html>