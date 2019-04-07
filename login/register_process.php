<?php

session_start();
$_SESSION['active'] = false;

$input_email = strtolower($_POST['email']);
$input_password = md5($_POST['password']);

$query = 'SELECT * FROM users';

require('../includes/connect.php');

if($result = mysqli_query($con, $query)) {
	while($row = mysqli_fetch_assoc($result)) {
		$database_email = strtolower($row['email']);
		$database_password = $row['password'];
		
		if($input_email == $database_email && $input_password == $database_password) {
			header('Location: ../dashboard/dashboard.php');
		} else {
			header('Location: login.php?a=001');
			die();
		}
	}	
}

?>