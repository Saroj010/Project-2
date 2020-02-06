<?php 
include_once('../includes/connection.php');

if ($_SERVER['REQUEST_METHOD'] == "POST");{
    $username = $_POST['username'] ?? '';
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
 

    $query = "INSERT INTO userss(`username`, `name`, `email`) VALUES ('".$username."', '".$name."', '".$email."')";

    $result = mysqli_query($conn, $query);
    if($result) {
           header("Location: ../create.php?message=successfully created");
    }else {
         header("location: ../create.php?message=error in creating ");
    }
}
?>