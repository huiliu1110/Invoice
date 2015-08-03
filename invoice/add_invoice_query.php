<!--Connect with database-->
<?php include"db_connection.php";?>

<!--Perform database query-->
<?php

	$accountname = $_POST["accountname"];
	$statementdate = $_POST["statementdate"];
	$duedate = $_POST["duedate"];
	$address1 = $_POST["address11"]." ".$_POST["address12"];
	$address2 = $_POST["address21"].",".$_POST["address22"]."-".$_POST["address23"];
	$productnames = $_POST["productnames"];
	$productprices = $_POST["productprices"];
	$taxes = $_POST["taxes"];
	$total = $_POST["total"];

	$query = "insert into saledetails ";
	$query.= "(accountname,statementdate,duedate,address1,address2,productnames,productprices,taxes,total) ";
	$query.= "values ";
	$query.= "('$accountname','$statementdate','$duedate','$address1','$address2',
				'$productnames','$productprices','$taxes','$total')";
	$result = mysqli_query($connection, $query);
	$last_id = mysqli_insert_id($connection);

	//Close database connection
  	mysqli_close($connection);
?>