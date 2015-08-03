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
	<style type="text/css">
		.noborderpanel{
			border: 0;
		}
	</style>
	<script type="text/javascript" src="js/jquery-1.11.3.js"></script>
	<script type="text/javascript" src="js/script.js"></script>

</head>
<body>
	<?php include"header.php";?>

	<div class="container">	
			
				<div class="col-sm-9">
					<div class="searchpanel">
						<?php include "search_bar.php";?>
					</div>

					<div id="viewproductspanel">
						<?php include "show_products.php";?>
					</div>	
					<div id="addproductpanel"  class="dynamicshow">
						<?php include "insert_product.php";?>	
					</div>
										
				</div>
			
				<div class="col-sm-3" id="btngroup">
					<div class="panel panel-default">
						<div class="panel-body">							
							<div><button type="button" class="btn btn-default" id="viewproducts">View All Products</button></div>	
							<br/>
							<div><button type="button" class="btn btn-default" id="addproduct">Add a New Product</button></div>								
						</div>
					</div>
				</div>
				
	</div>
</body>
</html>