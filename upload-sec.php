<?php
session_start();
// Include the database configuration file
include 'dbh.php';

$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $file = $_FILES['file'];
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];
    $check = getimagesize($_FILES["file"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        $uploadOk = 0;
        header("Location: ../run/upload.php?upload=File-is-not-an-image.");
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    $uploadOk = 0;
    header("Location: ../run/upload.php?upload=Sorry-file-already-exists.");
}
// Check file size
if ($_FILES["file"]["size"] > 500000) {
    $uploadOk = 0;
    header("Location: ../run/upload.php?upload=Sorry-your-file-is-too-large..");
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        // Insert image file name into database
        $insert = $conn->query("INSERT into files (file_name, uploaded_on) VALUES ('".$fileName."', NOW())");
        if($insert){
            $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
        }else{
            $statusMsg = "File upload failed, please try again.";
        }
        header("Location: ../run/index.php?uploaded=successfully.");
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>