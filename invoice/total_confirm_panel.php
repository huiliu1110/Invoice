<?php include "compute-total-due.php";?>

<div id="panel4">
	<div class="panel panel-default">
		
		<div class="panel-heading">
	    	<h3 class="panel-title">Total Payment and Confirm</h3>
	  	</div>
	  	
	  	<div class="panel-body">
	  		<br/>	
	  		<div>
	  			<p>Taxes*</p>
	  		</div>  				
			<div class="input-group col-sm-6">
				<span class="input-group-addon" id="basic-addon1">$</span>
				<input type="text" name="taxes" value=<?php echo $total_due*0.08;?> class="form-control" placeholder="Taxes*" aria-describedby="basic-addon1">
			</div>
			
			<br/>
			<div>
	  			<p>Total due in US Dollars</p>
	  		</div>
			<div class="input-group col-sm-6">
				<span class="input-group-addon" id="basic-addon1">$</span>
				<input type="text" name="total" value=<?php echo $total_due*1.08;?> class="form-control" placeholder="Total due in US Dollars" aria-describedby="basic-addon1">
			</div>
			
			
			    
	  	</div>
	</div>	
</div>