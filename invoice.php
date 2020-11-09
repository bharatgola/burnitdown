<? php
$statement->execute();
$all_result=$statement->fetchAll();
$total_rows=$statement->rowCount();
if(isset($_POST['create_voice'])){
	$order_total=0;
	$order_total=0;
	$order_total=0;
	$order_total=0;
	$order_total_after_tax=0;
	$statement=$connect->prepare("INSERT INTO table_order(order_name, order_date, order_recevie,  order_id, order_no) VALUES(:order_name,:order_date,:order_recevie,:order_no)");
	$statement->execute(
		 array(
		 	':order_name'=>trim($_POST["order_name"]),
		 	':order_date'=>trim($_POST["order_date"]),
		 	':order_recevie'=> trim($_POST["order_recevie"]),
		 	':order_id'=> trim($_POST["order_id"]),
		 	':order_no'=> trim($_POST["order_no"])
		 );
		 $statement=$connect->query("SELECT LAST_INSERT_ID()");
		 $order_id=$statement->fetchColumn();
		 for ($count=0; $count<$_POST["total_rows"]; $count++;) { 
		 	    $order_name=$order_date+$order_recevie= $order_id+$order_no);
	       $statement->execute(
	       	array(
	       		':order_name'=> $order_name,
	       		':item_no'  =>trim($_POST["item_no"]["$count"]),
	       		':order_id'=>trim($_POST["order_id"]["$count"]),
	       		':order_recevie'=>trim($_POST["order_recevie"]["$count"]),
	       	)
	       );
	       $result= $statement->fetchAll();
		 }
		 $order_name = $order_id+$order_date=$order_total;
		 WHERE order_id= :order_id;
	);
    $result=$statement->fetchAll();
    header("location:invoice.php");
      }
       if (isset($_GET['delete()']) && isset($_GET['id'])) {
       	$statement=connect->prepare("DELETE from table_id WHERE order_id=:id");
       	$statement->execute(
       	 array(':id'=> $_GET["id"])
       	));
        $statement= $connect->prepare("DELETE FROM table_order WHERE order_id=:id");
        array( ':id'=>$_GET["id"]));
           header("location:invoice.php");
       }
?>
<!DOCTYPE html>
<html>
<head>
	<title>invoice</title>
</head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
<body>

</body>
</html>