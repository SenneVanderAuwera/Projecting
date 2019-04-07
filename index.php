<?php
session_start();

if($_SESSION['active'] == true) {
   // header('Location: dashboard/dashboard.php');
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Home | Projecting</title>
</head>

<body>
	<a href="login/login.php">Login</a>
</body>
</html>