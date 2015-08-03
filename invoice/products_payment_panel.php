
<?php include "products_quantity_input.php";?>


<div id="panel3">
	<div class="panel panel-default">
 		<div class="panel-heading">
    		<h3 class="panel-title">Products Detail</h3>
  		</div>
  		<div class="panel-body">

  			<?php 
  				$checkbox = $_POST['checkbox']; 
  				$chechvalue = "";
  				for($i=0;$i<count($checkbox);$i++) 
				{ 
					if(!is_null($checkbox[$i])) 
					{
						$chechvalue.=$checkbox[$i].",";
					} 
				} 				
				$chechvalue = substr($chechvalue,0,strlen($chechvalue)-1);
  			?>

  			<!--Perform database query-->
			<?php
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
				$productnames = "";
				$productprices = "";
				while($products = mysqli_fetch_assoc($result)) 
				{
					$productnames .= $products["pname"].",";
					$productprices .= $products["pprice"]*$products["pquantity"].",";
				// output data from each row
			?>	  
			
			<div class="panel panel-default">
	  			<div class="panel-body">
	  				  			
	  				<div class="col-sm-8">	
		  				
		  				<div class="panel panel-default col-xs-4 noborderpanel" style="border:0">
							<div class="panel-body">
								<span class="label label-default">Product IDNo</span>
									<?php echo $products["pid"]; ?>
							</div>
						</div>	

		  				<div class="panel panel-default col-xs-4 noborderpanel" style="border:0">
							<div class="panel-body">
								<span class="label label-default">Product Name</span>
									<?php echo $products["pname"]; ?>
							</div>
						</div>	

						<div class="panel panel-default col-xs-4 noborderpanel" style="border:0">
							<div class="panel-body">
								<span class="label label-default">Product Price</span>
									<?php echo $products["pprice"]; ?>					
							</div>
						</div>

						<div class="panel panel-default col-xs-4 noborderpanel" style="border:0">
							<div class="panel-body">
								<span class="label label-default">Product Color</span>
									<?php echo $products["pcolor"]; ?>
							</div>
						</div>

						<div class="panel panel-default col-xs-4 noborderpanel" style="border:0">
							<div class="panel-body">
								<span class="label label-default">Product Quantity</span>
									<?php echo $products["pquantity"];?>								
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
			$productnames = substr($productnames,0,strlen($productnames)-1);
			$productprices = substr($productprices,0,strlen($productprices)-1);
			?>			
			<input type="text" name="productnames" value=<?php echo $productnames;?> style="display:none">
			<input type="text" name="productprices" value=<?php echo $productprices;?> style="display:none">
  		</div>
	</div>

</div>