<?php
$con = mysqli_connect('localhost','root','','form3');
if(!$con)
{
echo "Can not connect to DB";
}	
if (isset($_POST['Submit'])) {
  $_SESSION['fname']=$_POST['fname'];
}
if (isset($_POST['submit'])){
	$_SESSION['lname']=$_POST['lname'];
}

if (isset($_POST['submit'])){
  $_SESSION['pwd']=$_POST['pwd'];
}
if (isset($_POST['submit'])) {
	$_SESSION['repwd']=$_POST['repwd'];
}
if(isset($_POST['submit'])){
  $_SESSION['email']=$_POST['email'];
}
if(isset($_POST['submit'])){
	$_SESSION['phone']=$_POST['phone'];
}
$query = "INSERT INTO form3(fname, lname, pwd,repwd, email,phone)
VALUES
('$_POST[fname]','$_POST[lname]','$_POST[pwd]','$_POST[repwd]','$_POST[email]','$_POST[phone]')";
//}
if (!mysqli_query($con,$query))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "Form successfully sent into the database";
header('Location: http://localhost/practice/error.php?$id=1');
mysqli_close($con);
//session_destroy();
//echo "data successfully sent..!"
?>
