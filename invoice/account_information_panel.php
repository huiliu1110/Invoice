<div id="panel1">
	<div class="panel panel-default">
		
		<div class="panel-heading">
			<h3 class="panel-title">Account Information</h3>
		</div>

		<div class="panel-body">
			<br/>
			<div>
				<p>AccountName</p>
			</div>
			<div class="input-group col-sm-6">
				<span class="input-group-addon" id="basic-addon1"></span> 
				<input type="text" name="accountname" class="form-control" placeholder="AccountID" aria-describedby="basic-addon1">
			</div>
			
			<!--					
			<br/>	
			<div>
				<p>Invoice No</p>
			</div>
			<div class="input-group col-sm-6">
				<span class="input-group-addon" id="basic-addon1"></span>
				<input type="text" class="form-control" placeholder="Invoice No" aria-describedby="basic-addon1">
			</div>	
			-->
			
			<br/>
			<div>
				<p>Statement Date</p>
			</div>
			<div class="input-group col-sm-6">
				<span class="input-group-addon" id="basic-addon1"></span>
				<input type="text" name="statementdate" class="form-control" placeholder="Statement Date" aria-describedby="basic-addon1" value=<?php echo date("Y-m-d");?> readonly="true">
			</div>	

			<br/>					
			<div>
	  			<p>Payment Due Date</p>
	  		</div>
			<div class="input-group col-sm-6">
			  	<span class="input-group-addon" id="basic-addon1"></span>
			  	<input type="date" name="duedate" class="form-control" placeholder="Payment Due Date" aria-describedby="basic-addon1" value=<?php echo date("Y-m-d");?>>
			</div>	

			<br/>		    
	  	</div>
	</div>
</div>