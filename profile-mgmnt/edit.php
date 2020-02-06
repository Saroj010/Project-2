<?php
session_start();

if(!isset($_SESSION['username'])) {
    header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register User</title>
</head>
<body>
<?php
 if(isset($_GET['message'])){
     echo "<p style='color:red;'>".$_GET['message']."<p>";
        }
        if(isset($_GET['id'])) {
        include_once('includes/connection.php');
        $query = "SELECT * FROM userss WHERE id=".$_GET['id'];

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
    } else {
            header('location: view.php');
}
?>
    <form action="process/update.php" method="POST">
    <form action="process/delete.php" method="POST">
    <input type="hidden" value="<?= $row['id'] ?>" name="id">
    <label for="username">Username :</label>
    <input type="text"  id="username" value="<?= $row['username'] ?>" required disabled/>
    <br />

    <label for="name">Full Name</label>    
    <input type="text" name="name" id="name" value="<?= $row['name'] ?>" />
    <br>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required value="<?= $row['email'] ?>"  />
    <br />

    <input type="submit" value="Update" />
    </form>
</body>
</html>