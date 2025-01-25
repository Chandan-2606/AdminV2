<?php
session_start();

$userEmail = $_SESSION['adminEmail'];

$targetDir = "../../uploadsFile/";
$targetFile = $targetDir . basename($_FILES["fileToUpload"]["name"]);

$uploadOk = 1;
$imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));


if (basename($_FILES["fileToUpload"]["name"]) == "") {
    echo "pleace choose image.";
    header("location:profile.php");
    // $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
        echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
        include_once("../../config/conn.php");
        $setPathQ = "UPDATE registration SET imagePath = '$targetFile' WHERE email='$userEmail'";
        $result = mysqli_query($conn, $setPathQ);
        if (!$result) {
            echo ("could not set path in db: " . mysqli_error($conn));
        }
        header("location:profile.php");
    } else {
        echo "Sorry, there was an error uploading your file.";
        header("location:profile.php");
    }
}
