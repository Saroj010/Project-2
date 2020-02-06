<?php
define("HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "hotel");
$conn = mysqli_connect(HOST, DB_USER, DB_PASS, DB_NAME);
if (!$conn){
    die("Error in connection");
}
?>