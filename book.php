<?php
include 'db.php';
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
$sql = "INSERT INTO ajax( `name`, `email`, `message`) 
	VALUES ('$name','$email','$message')";
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		 die(mysqli_error($conn));
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>