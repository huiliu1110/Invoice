<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/invoice.css">
</head>
<body>
	<?php include "add_invoice_query.php";?>
	<div>
		<div class="header">
			<div class="logo">
				<img src="imgs/aws.jpg" width="30%">
			</div>			
		</div>

		<div class="content">
			<div class="brief">
				<p><b>Greetings from Amazon Web Services,</b><br/>
					We're writing to provide you with an electronic invoice for your use of
					AWS services. Your account will be changed $<?php echo $total;?>. Additional 
					information regarding your bill, individual service change details, and your account history are
					available on the Account Summary Page.
				</p>
			</div>
			<div class="account">

				<table width="100%" border="1">
					<tr>
						<th width="25%">Account ID</th>
						<th width="25%">Invoice No</th>
						<th width="25%">Statement Date</th>
						<th width="25%">Payment Due Date</th>
					</tr>
					<tr>
						<td><?php echo $last_id;?></td>
						<td><?php echo $last_id;?></td>
						<td><?php echo $statementdate;?></td>
						<td><?php echo $duedate;?></td>
					</tr>
				</table>
			</div>
			<br/>
			<div class="shipaddress">
				<table style="border:0">
					<tr>
						<td width="30%">
							<table border="1">
								<tr>
									<th>Bill To
									</th>
								</tr>					
								<tr>
									<td><?php echo $accountname;?>
										<br/>
										<?php echo $address1;?>
										<br/>
										<?php echo $address2;?>
									</td>
								</tr>
							</table>
						</td>
						<td width="40%"></td>
						<td  width="30%">
							<table border="1" >
								<tr>
									<th>Service Provider</th>
								</tr>
								<tr>
									<td>Hui Liu
										<br/>
										4699 Old Ironsides Drive, Suite#470
										<br/>
										Santa Clara,CA-95054
									</td>
								</tr>
							</table>
						</td>
					</tr>				
				</table>
			</div>
			<br/>
			<div class="detial">
				<table width="100%" border="1">
					<tr>
						<td colspan="2"><b>Billing Period:</b>
						</td>
					</tr>
					<tr>
						<td width="60%"><b>Service Name</b></td>
						<th width="40%">Amount Due</th>
					</tr>
					
						<?php 
							$names = explode(",",$productnames);
							$prices = explode(",",$productprices);
							for($i = 0; $i < count($names); $i++)
							{
						?>	
								<tr>
									<td>
										<?php echo $names[$i];?>
									</td>
									<td style="text-align:right">
										<?php echo $prices[$i];?>
									</td>
								</tr>
						<?php
							}
						?>
					
					<tr>
						<td>Taxes*:</td>
						<td style="text-align:right"><?php echo $taxes;?></td>
					</tr>
					<tr>
						<td><b>Total due in US Dollars</b></td>
						<td style="text-align:right"><?php echo $total;?></td>
					</tr>
				</table>
			</div>

			<div>
				<ul>
					<li>This is not a VAT invoice.</li>
				</ul>
				<p>
					All web services are sold by Amazon Web Services LLC.<br/>
					The above charges include charges incurred by your account
					as well as by all accounts you are responsible for through
					Consolidated Billing.<br/>
					For customers who need to remit consumption tax in Japan,
					the Account Summary Page provides details of services from
					Japan.
				</p>
				<p>
					Thank you for using Amazon Web Services.<br/>
					Sincerely,<br/>
					The Amazon Web Services Team
				</p>
				<p>
					This message was produced and distributed by Amazon Web Services LLC, 410 Terry Avenue North,Seattle, Washington 98109-5210
				</p>
			</div>
		</div>
	</div>

</body>
</html>