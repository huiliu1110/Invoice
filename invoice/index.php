<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initialscale=1.0">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet">
	<link href="css/bootstrap.journal.css" rel="stylesheet">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js"></script>
	<script type="text/javascript">swfobject.embedSWF("flash/bird.swf", "bird", "400", "300", "8.0.0");</script>
</head>
<body>
	<?php include"header.php";?>
	<div class="container">
		<div class="col-sm-7">
			<div id="bird"></div>
		</div>
		<div class="col-sm-5">
			<form method="post" action="login.php" enctype="multipart/form-data">
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<div class="col-sm-1">
			</div>
			<div class="input-group col-sm-8">
	  			<span class="input-group-addon" id="basic-addon1"></span>
	  			<input type="text" name="username" required="required" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
			</div>
			<br/>
			<div class="col-sm-1">
			</div>
			<div class="input-group col-sm-8">
	  			<span class="input-group-addon" id="basic-addon1"></span>
	  			<input type="password" name="password" required="required" class="form-control" placeholder="Password" aria-describedby="basic-addon1">
			</div>
			<br/>
			<div class="col-sm-1">
			</div>
			
	  		<button type="submit" class="btn btn-default">Submit</button>
	  		<button type="reset" class="btn btn-default">Reset</button>  
			
		</div>
	</div>	
</body>
</html>