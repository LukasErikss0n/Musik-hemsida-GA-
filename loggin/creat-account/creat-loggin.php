<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulär</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="return-wrapper">
        <a href="../index.php" class="go-back">Go back</a>
    </div>
    <div class="wrapper">
        <h1>Sign up</h1>
        <form action="upload-new-account.php" method="POST" enctype="multipart/form-data">
            <label for="creatusername">User name</label>
            <input type="text" name="creatusername" >
           <label for="creatpassword">Password</label>
           <input type="password" name="creatpassword" >
           <?php 
            if(isset($_GET["error"])) {
                if($_GET["error"] === "empty"){
                 echo "<p class = 'error'>*Please fill in username or password</p>";
                }
                else if($_GET["error"] === "invalid"){
                    echo "<p class = 'error'>*Invalid username or password</p>";
                }
            } 
        ?>
           <input name="submit" type="submit" value="Submit">
        </form>
      
    </div>
</body>
</html>