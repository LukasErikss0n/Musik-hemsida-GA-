<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include "server-connect.php";
    if(isset($_SESSION['username'])){
        
    if (isset($_POST['submit'])) {
        $file = $_FILES['file'];
        $title = $_POST['sound-name'];


        $fileName = $_FILES['file']['name'];
        $fileTempName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];

        $fileExtensionUpper = explode('.', $fileName);
        $fileActualExtensionLower = strtolower(end($fileExtensionUpper));

        $allowed = array('mp3'); //en array ifallat flera alt ska läggas till 

        if (in_array($fileActualExtensionLower, $allowed)) {
            if ($fileError === 0) {
                if ($fileSize < 50000000) {
                   $fileId = uniqid('', true) . "." . $fileActualExtensionLower;
                   //$fileId = $title . "." . $fileActualExtensionLower;
                    $fileDestination = 'audios/' . $fileId;
                    move_uploaded_file($fileTempName, $fileDestination);
                    header("location: home.php?upploadsuccess");
                    
                    $insertTitle = "insert into audio_detailes (name_audio, file_name) values('$title', '$fileId')";
                    $appendTitle = mysqli_query($con, $insertTitle);
                } else {
                    echo "your file is to big";
                }
            } else {
                echo "there was an error uploading your file";
            }
        } else {
            echo "you cannot upload files of this type";
        }

    }
    }
    else{
        header("location: ../loggin/index.php?error=noAccountFaund");
    }
    ?>
</body>
</html>