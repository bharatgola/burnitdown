<?php
$con = mysqli_connect('localhost','root','','form3');
if(!$con)
{
echo "Can not connect to DB";
}   

$query = "INSERT INTO form4(fname, password)
VALUES
('$_POST[fname]','$_POST[password]')";
//}

echo "Form successfully sent into the database";
 header('Location: http://localhost/practice/jquery.html');
if($fname == localStorage.getItem("email") && $password== localStorage.getItem("pwd")){
    header('Location: http://localhost/practice/error.php');
}
//}
if (!mysqli_query($con,$query))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "Form successfully sent into the database";
 header('Location: http://localhost/practice/jquery.html');
mysqli_close($con);
//session_destroy();
//echo "data successfully sent..!"
?>
