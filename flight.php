<?php
include 'database.php';
$month=$_POST['month'];
$start=$_POST['start'];
$day=$_POST['day'];
$guest=$_POST['guest'];
$room=$_POST['room'];
$name=$_POST['name'];
$street=$_POST['street'];
$city=$_POST['city'];
$state=$_POST['state'];
$zip = $_POST['zip'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$sql = "INSERT INTO book( `month`,`start`,`day`,`guest`,`room`,`name`,`street`,`city`,`state`,`zip`, `email`, `phone`) 
	VALUES ('$month','$start','$day','$guest','$room','$name','$street','$city','$state','zip','$email','$phone')";
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		 die(mysqli_error($conn));
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>
