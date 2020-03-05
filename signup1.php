<?php
session_start();

if (isset($_POST['submit'])) {
	include_once 'dbh.php';

	$name= mysqli_real_escape_string($conn, $_POST['name']);
	$uid= mysqli_real_escape_string($conn, $_POST['uid']);
	$email= mysqli_real_escape_string($conn, $_POST['email']);
	$pwd= mysqli_real_escape_string($conn, $_POST['pwd']);
	$num= mysqli_real_escape_string($conn, $_POST['num']);

	// error handlers
	// check for empty fields

	if (empty($name) || empty($uid) || empty($email) || empty($pwd) || empty($num)){
		header("Location: ../Firethon/index.php?signup=empty-field");
		exit();
	}else{
		// password validate
		if (strlen($pwd) < 5) {
			header("Location: ../Firethon/index.php?password=To-Short");
			exit();
		} else {
		// check if input characters are valid
		if (!preg_match("/^[a-z A-Z]*$/",$name)) {
			header("Location: ../Firethon/index.php?signup=invalidCharacter");
		    exit();
		}else{
			// check if email is valid
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
				header("Location: ../Firethon/index.php?signup=invalidEmail");
		        exit();
			}else{
				$sql = "SELECT * FROM users WHERE user_uid='$uid'";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0){
					header("Location: ../Firethon/index.php?signup=usertaken");
		            exit();
				}else{
					// Number Lenght validate
					if (strlen($num) <= 9) {
						header("Location: ../Firethon/index.php?Number-lenght=To-Short");
						exit();
					} else {
						// hashing the password
					$hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);
					// insert the user into the database
					$sql = "INSERT INTO users(USER_name,USER_email,USER_uid,USER_pwd,USER_num) VALUES ('$name','$email','$uid','$hashedpwd','$num');";
					$result = mysqli_query($conn, $sql);
					header("Location: ../Firethon/index.php?signup=success:user-registered");
					exit();
					}
		        }
			}
		}
	  }
	}

}else{
	header("Location: ../Firethon/index.php?Submission=Error");
	exit();
}

