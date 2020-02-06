<?php

include_once('../includes/connection.php');

$query = "UPDATE userss SET name='".$_POST['name']."',email='".$_POST['email']."' WHERE id=".$_POST['id'];

$result = mysqli_query($conn, $query);

if ($result) {
	 header("location: ../view.php?message=Successfully Updated");
} else {
	header("location: ../edit.php?message=Error Occured");
}
?>


