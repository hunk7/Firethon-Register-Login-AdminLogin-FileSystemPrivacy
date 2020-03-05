<?php

session_start();

if (isset($_POST['submit'])){
	include 'dbh.php';
	 /* check connection */
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
    }

	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

	// error handlers
	// check if inputs are empty
	if ($uid == "" || $pwd == ""){
		
?>		
		<script language="javascript" type="text/javascript">
        alert('Login Empty Field');
        window.location = '../Firethon/index.php';
        </script>
<?php      

	}else{
		$sql = "SELECT * FROM users WHERE USER_uid = '$uid' or USER_email='$uid'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck < 1){
			header("Location: ../Firethon/index.php?login=User_Doesn't_Exists");
		    exit();
		}else{
			if ($row = mysqli_fetch_assoc($result)){
				// dehashing password
				$hashedPwdChecked = password_verify($pwd, $row['USER_pwd']);
				if ($hashedPwdChecked == false){
					header("Location: ../Firethon/index.php?login=Passwod_Incorrect");
		            exit();
				}elseif ($hashedPwdChecked == true){
					// log in the user here
					$_SESSION['u_id']= $row['USER_id'];
					$_SESSION['u_name']= $row['USER_name'];
					$_SESSION['u_email']= $row['USER_email'];
					$_SESSION['u_uid']= $row['USER_uid'];
					$_SESSION['u_num']= $row['USER_num'];
					header("Location: ../Firethon/index.php?login=success");
					exit();
				}
			}
		}
    }
} else{
	header("Location: ../Firethon/index.php?login=error");
	exit();
}

?>