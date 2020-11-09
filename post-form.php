<?php
include "post.php";
if(!isset($_SESSION['fname'])){
   header('Location: post.php');
}
?>
<!doctype html>
<html>
    <head></head>
    <body>
        <h1>Homepage</h1>
        <br>
        <a href="logout.php">Logout</a>
    </body>
</html>