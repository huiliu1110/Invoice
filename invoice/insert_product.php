<form method="post" action="insert_product_query.php" enctype="multipart/form-data">
	<div class="panel panel-default">
		<div class="panel-body">
			<br/>
			<div>
				<p>Product Name</p>
			</div>
			<div class="input-group col-sm-6">
				<span class="input-group-addon"></span>
				<input type="text" required="required" class="form-control" placeholder="Product Name" aria-describedby="basic-addon1" name="pname">
			</div>
			
			<br/>
			<div>
				<p>Product Price</p>
			</div>
			<div class="input-group col-sm-6">
				<span class="input-group-addon">$</span>
				<input type="text" required="required" class="form-control" placeholder="Product Price" aria-describedby="basic-addon1" name="pprice">
			</div>
			
			<br/>
			<div>
				<p>Product Color</p>
			</div>
			<div class="input-group col-sm-6">
				<span class="input-group-addon"></span>
				<input type="text" required="required" class="form-control" placeholder="Product Color" aria-describedby="basic-addon1" name="pcolor">
			</div>

			<br/>
			<div>
				<p>Product Image</p>
			</div>
			<div class="input-group col-sm-6">
				<span class="input-group-addon"></span>
				<input type="file" name="uploadfile" class="form-control" aria-describedby="basic-addon1">
			</div>
			
			<br/>
			<div>
				<button type="submit" class="btn btn-default">Confirm</button>
			</div>
		<!--end of panel body-->
		</div>
	<!--end of panel-->	
	</div>	
<!--end of form-->
</form>	