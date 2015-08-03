
<!--Perform database query-->
<?php 
	$checkbox = $_POST['checkbox'];

	for($i=0;$i<count($checkbox);$i++) 
	{ 
		$query = "";
		if(!is_null($checkbox[$i])) 
		{
			$query .= "UPDATE products SET ";
			$query .= "pquantity = ".$_POST[$checkbox[$i]];
			$query .= " WHERE pid = ".$checkbox[$i];

			$result = mysqli_query($connection, $query);
			// Test if there was a query error
			if (!$result) 
			{
				echo $query;
				die("Database query failed.");
			}						
		} 
	} 				
	
?>




