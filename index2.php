<?php 
  $db = mysqli_connect('localhost', 'root', '', 'form3');
  $username = "";
  $email = "";
    if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
  	$email = $_POST['email'];
  	$password = $_POST['password'];
    $query=mysqli_query("SELECT username FROM users WHERE username=$username ", $con);
       if(mysqli_num_rows($query)!=0)
       {
        echo "already exist";
       } else{
        echo "one two";
       }
  	}
?>