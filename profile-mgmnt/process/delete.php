<?php
include_once('../includes/connection.php');


$id = $_GET['id'];
$query="delete from users where id='".$id."'";
$result = mysqli_query($conn, $query);

if ($result) {
    header("location: ../view.php?message=Successfully Deleted");
} else {
    header("location: ../edit.php?message=Error Occured");
}


?>