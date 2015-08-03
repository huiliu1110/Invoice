<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initialscale=1.0">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet">
	<link href="css/bootstrap.journal.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/show.css">
	<script type="text/javascript" src="js/jquery-1.11.3.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</head>
<body>
	<?php include"header.php";?>
	<div class="container">
		
		<div class="col-sm-9">
			<form method="post" action="invoice.php" enctype="multipart/form-data">	
				<!--Connect with database-->
				<?php include"db_connection.php";?>			
				
				<?php include"account_information_panel.php";?>		
				<?php include"billing_address_panel.php";?>	
				<?php include"products_payment_panel.php";?>	
				<?php include"total_confirm_panel.php";?>	

				<?php
				//Release returned data
				mysqli_free_result($result);
				//Close database connection
				mysqli_close($connection);
				?>
				<div class="panel panel-default">
  					<div class="panel-body">
   						
						<button type="submit" class="btn btn-default">Confirm</button>			
						<br/>
						
  					</div>
				</div>
				
			</form>			
		</div>

		<div class="col-sm-3" id="btngroup">
			<div class="panel panel-default">
  				<div class="panel-body">
  					<div>
  						<a href="#panel1">
  							<button type="button" class="btn btn-default" id="btn1">Account Information</button>
  						</a>
  					</div>
  					<br/>
  					
  					<div>
  						<a href="#panel2">
  							<button type="button" class="btn btn-default" id="btn2">Billing Address</button>
  						</a>
  					</div>
  					<br/>
  					
  					<div>
  						<a href="#panel3">
  							<button type="button" class="btn btn-default" id="btn3">Service Payment</button>
  						</a>
  					</div>
  					<br/>
  					
  					<div>
  						<a href="#panel4">
  							<button type="button" class="btn btn-default" id="btn4">Total and Confirm</button>
  						</a>
					</div>
					<br/>

					<div>
						<a href="products.php?condition=">
  							<button type="button" class="btn btn-default" id="btn5">Back To Products Page</button>
  						</a>
					</div>
					<br/>

    			</div>
			</div>
		</div>
	</div>
	
	
	
</body>
</html>