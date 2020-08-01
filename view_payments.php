<?php

if(!isset( $_SESSION['admin_email'])){
    echo "<script> window.open('login.php','_self');</script>";
}else{

?>

<div style='margin-left: 240px; margin-top: 50px'>
<div class='row'><!-- Row 1 Start-->
	<div class='col-lg-12'>
		<ol class='breadcrumb'>
			<li class='active'>
				<i class='fa fa-dashboard'></i>Dasboard /View Payments
			</li>
		</ol>
	</div>
	</div><!-- Row 1 close-->

	<div class='row'>
		<div class='col-lg-12'>
			<div class='panel panel-default'>
				<div class='panel-heading'>
					<h3 class='panel-title'>
						<i class='fa fa-money fa-fw'></i> View Payments
					</h3>
				</div>

				
					<div class='panel-body'>
						<div class='table-responsive'>
							<table class='table table-bordered table-hover table-striped'>
								<thead>
									<tr>
										<th> Payment No: </th>
										<th>  Invoice No: </th>
										<th>  Amount Paid: </th>
										<th>  Payment Method: </th>
										<th>  Reference No: </th>								
															
							        	<th>  Payment Date: </th>
										<th>  Delete Payment: </th>
										
										

									</tr>
								</thead>

								<tbody>
									<?php
									$i=0;
									$get_payments="select * from payments";
									$run_payments=mysqli_query($con,$get_payments);
									while($row_pay=mysqli_fetch_array($run_payments)){
										$payment_id=$row_pay['payment_id'];
										$invoice_no=$row_pay['invoice_id'];
										$amount=$row_pay['amount'];
										$payment_mode=$row_pay['payment_mode'];
										$ref_no=$row_pay['ref_no'];
										$payment_date=$row_pay['payment_date'];

										
																	
										
										$i++;
										?>
									
							
									<tr>
										<td> <?php echo $i; ?> </td>
										<td bgcolor='yellow' > <?php echo $invoice_no; ?> </td>
										<td> <?php echo $amount; ?> </td>
										
										
										<td> <?php echo $payment_mode; ?> </td>
										<td> <?php echo $ref_no; ?> </td>
										<td> <?php echo $payment_date; ?> </td>

										

										<td>
											<a href='index.php?payment_delete=<?php echo $payment_id; ?>'>
												<i class='fa fa-trash-o'></i>Delete
											</a>
										</td>

										
											

									</tr>
									<?php
								    }
									?>
								</tbody>
							</table>
						</div>
					</div>


				</div>
			</div>

		</div>
	</div><!-- Row 2 close-->
</div>



<?php
}
?>
					




