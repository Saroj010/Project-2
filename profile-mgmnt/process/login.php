<?php
session_start();

$username = "nishal";
$password = "admin";

if ($_POST['username'] == $username && $password == $_POST['password']) {
	setcookie('username', $username, time() + (86400 * 30), "/");
	$_SESSION['username'] = $username;
	header('location: ../view.php');
 } else {
 	header('location: ../login.php?message=Wrong Credential');
 }