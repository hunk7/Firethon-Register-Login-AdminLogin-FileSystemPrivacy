<?php
session_start();
if (isset($_SESSION['u_id'])){
	session_unset();
	session_destroy();
	header("Location: ../Firethon/index.php?logout=success");
	exit();
}else{
	header("Location: ../Firethon/index.php?logout=error");
	exit();
}