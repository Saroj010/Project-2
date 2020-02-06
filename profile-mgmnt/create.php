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

?>
    <form action="process/Register.php" method="POST">
    <label for="username">Username :</label>
    <input type="text" name="username" id="username" required />
    <br />

    <label for="name">Full Name</label>    
    <input type="text" name="name" id="name" />
    <br>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required />
    <br />

    <input type="submit" value="Register" />
    </form>
</body>
</html>