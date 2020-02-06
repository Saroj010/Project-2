<?php

$conn = mysqli_connect("localhost","root","");
if ($conn) {
	echo "Connection Successfull";
} else {
	die("Error in connection");
}
<!DOCTYPE html>
<html>
<head>
	<title>Profile Management System</title>
</head>
<body>
<h2>Welcome to Profile Management System</h2>
<a href="create.php">Register </a>
<a href="login.php">Login </a>
</body>
</html>