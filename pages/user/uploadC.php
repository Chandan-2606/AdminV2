<?php
session_start();
$userEmail = $_SESSION['userEmail'];

$targetDir = "../../uploadsFile/";
$targetFile = $targetDir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));



// if (isset($_POST["btnUpload"])) {
//     $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

//     if ($check !== false) {
//         echo "File is an image - " . $check["mime"] . ".<br>";
//         echo $_FILES["fileToUpload"]["tmp_name"];
//         $uploadOk = 1;
//     } else {
//         echo "File is not an image.";
//         $uploadOk = 0;
//     }
// }

// Check if file already exists
// if (file_exists($targetFile)) {
//     echo "Sorry, file already exists.";
//     $uploadOk = 0;
// }

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
