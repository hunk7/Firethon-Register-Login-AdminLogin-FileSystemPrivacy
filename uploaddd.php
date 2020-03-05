<?php 
session_start();
// Include the database configuration file
include 'dbh.php';
$statusMsg = "";


if (isset($_POST['submit'])){
	$file = $_FILES['file'];
	$fileName = $_FILES['file']['name'];
	$fileTmpName = $_FILES['file']['tmp_name'];
	$fileSize = $_FILES['file']['size'];
	$fileError = $_FILES['file']['error'];
	$fileType = $_FILES['file']['type'];
	$target_dir = "upload/";
	$target_file = $target_dir . basename($_FILES["file"]["name"]);

	$fileExt = explode('.',$fileName);
	$fileActualExt = strtolower(end($fileExt));

	$allowed = array('jpg','jpeg','png','pdf','php','txt','xlsx','xls','py','csv');

	// Check if file already exists
	if (file_exists($fileName)) {
	    echo "Sorry, file already exists.";
	    header("Location: ../upload.html?upload=file-already-exists");	
	}


	if (in_array($fileActualExt, $allowed)){
		if ($fileError === 0){
			if ($fileSize < 1000000){
				$fileNameNew = uniqid('',true).".".$fileActualExt;
				$fileDestination = 'upload/'.$fileNameNew;
				move_uploaded_file($fileTmpName, $fileDestination);
				// Insert file into database
				 $insert = $conn->query("INSERT into files (file_name, uploaded_on) VALUES ('".$fileName."', NOW())");
	            if($insert){
	                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
	            }else{
	                $statusMsg = "File upload failed, please try again.";
	            } 
	            echo "File Uploaded ".$fileName;

				// header("Location: ../up/index.html?upload=success");
			}else {
				echo "you're file is too big !!!";
			}
		}else{
			echo "there was an error uploading your file";
		}
	}else{
		echo "you cannot upload file";
	}
}




