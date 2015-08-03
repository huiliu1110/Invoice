<!--Connect with database-->
<?php include"db_connection.php";?>

<!--Perform database query-->
<?php
	$query  = "SELECT * ";
	$query .= "FROM PRODUCTS ";
	$query .= "ORDER BY pid DESC";	
	$result = mysqli_query($connection, $query);
	// Test if there was a query error
	if (!$result) {
		die("Database query failed.");
	}

?>
<?php
	while($products = mysqli_fetch_assoc($result)) 
	{
		$query = "";
		$query .= "UPDATE products SET ";
		$query .= "pquantity = 1";

		$reset_result = mysqli_query($connection, $query);
		// Test if there was a query error
		if (!$reset_result) 
		{
			echo $query;
			die("Database query failed.");
		}	
	}
?>

<?php
	$condition = $_GET["condition"];
	$query  = "SELECT * ";
	$query .= "FROM PRODUCTS ";
	if(!($condition == ''))
	{
		$query .= "WHERE pname like '%".$condition."%' ";
	}
	$query .= "ORDER BY pid DESC";	
	$result = mysqli_query($connection, $query);
	// Test if there was a query error
	if (!$result) {
		die("Database query failed.");
	}

?>

<form method="post" action="add_invoice.php" enctype="multipart/form-data">
<!--Use returned database query result(if any)-->
<?php
	while($products = mysqli_fetch_assoc($result)) 
	{
		// output data from each row
		
	?>	  
		<div class="panel panel-default">
	  		<div class="panel-body">
	  			
	  			
	  			<div class="col-sm-1">
	  				<br/>
	  				<input type="checkbox" value=<?php echo $products["pid"]; ?> name="checkbox[]">
	  			</div>
	  			
	  			
	  			<div class="col-sm-8">	
		  			
		  			<div class="panel panel-default col-xs-6 noborderpanel">
						<div class="panel-body">
							<span class="label label-default">Product IDNo</span>
			  					<?php echo $products["pid"]; ?>
						</div>
					</div>

					<div class="panel panel-default col-xs-6 noborderpanel">
						<div class="panel-body">
							<span class="label label-primary">Product Name</span>
								<?php echo $products["pname"]; ?>
						</div>
					</div>

					<div class="panel panel-default col-xs-6 noborderpanel">
						<div class="panel-body">
							<span class="label label-warning">Product Price</span>
								<?php echo $products["pprice"]; ?>					
						</div>
					</div>

					<div class="panel panel-default col-xs-6 noborderpanel">
						<div class="panel-body">
							<span class="label label-info">Product Color</span>
								<?php echo $products["pcolor"]; ?>
						</div>
					</div>

					<div class="panel panel-default col-xs-9 noborderpanel">
						<div class="panel-body">
							<span class="label label-success">Product Quantity</span>
							<input type="text" name=<?php echo $products["pid"];?> size="5" style="text-align:right" value=<?php echo $products["pquantity"]; ?> >
						</div>
					</div>
				<!--end of col-sm-9 (left) panel-->		
				</div>
				
				<div class="col-sm-3">
					<div>
						<img width="100%" height="100%" src="products_images/<?php echo $products['pimage'];?>" alt="image" />				
					</div>
				</div>    
		  	</div>
		</div>

	<?php
	}	
	?>
	<div class="panel panel-default">
  		<div class="panel-body">
  			<input type="submit" value="Process a New Invoice"class="btn btn-success">
  		</div>
	</div>
	
</form>

<?php
	//Release returned data
	mysqli_free_result($result);
	//Close database connection
	mysqli_close($connection);
?>
