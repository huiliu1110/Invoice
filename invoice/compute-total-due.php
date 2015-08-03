

<?php
	$total_due = 0;
	$query  = "SELECT * ";
	$query .= "FROM PRODUCTS ";
	$query .= "WHERE pid in (".$chechvalue.")";
	$query .= "ORDER BY pid";	
	$result = mysqli_query($connection, $query);
	// Test if there was a query error
	if (!$result) 
	{
		echo $query;
		die("Database query failed.");
	}
?>

<?php
	while($products = mysqli_fetch_assoc($result)) 
	{		
		// output data from each row
		$total_due += $products['pprice'] * $products['pquantity'];
	}	
?>


