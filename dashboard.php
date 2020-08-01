<?php
if(!isset( $_SESSION['admin_email'])){
    echo "<script>window.open('login.php','_self');</script>";
}else{
?>

<div style='margin-left:250px;'>
	<div class='row'><!--  first Row start-->
	<div class='col-lg-12'>
		<h1 class='page-header'>Dashboard</h1>
		<ol class='breadcrumb'>
			<li class='active'>
				<i class='fa fa-dashboard'></i>Dashboard
			</li>
		</ol>
	</div>
</div><!--  first Row end-->

<div class='row'><!--  2nd Row start-->

	<div class='col-lg-3 col-md-6'><!-- col-lg-3 col-lg-6 start -->
		<div class='panel panel-primary'><!-- panel panel-primary start -->
			<div class='panel-heading'><!-- panel-heading start -->
				<div class='row'><!-- panel-heading row start -->
					<div class='col-xs-3'><!-- col-xs-3 start -->
						<i class='fa fa-tasks fa-5x'></i>
					</div><!-- col-xs-3 end-->
					<div class='col-xs-9 text-right'><!-- col-xs-9 text-right start-->
						<div class='huge'> <?php echo $count_pro; ?> </div>
						<div>Products </div>
					</div><!-- col-xs-9 text-right end-->
				</div><!-- panel-heading row end -->
			</div><!-- panel-heading end -->

			<a href='index.php?view_product'>

				<div class='panel-footer'><!-- panel-footer start -->
					<span class='pull-left'>View Details </span>
					<span class='pull-right'> <i class='fa fa-arrow-circle-right'></i> </span>

					<div class='clearfix'></div>
				</div><!-- panel-footer end -->

			</a>

		</div><!-- panel panel-primary end -->
	</div><!-- col-lg-3 col-lg-6 end -->


	<div class='col-lg-3 col-md-6'><!-- col-lg-3 col-lg-6 start -->
		<div class='panel panel-green'><!-- panel panel-green start -->
			<div class='panel-heading'><!-- panel-heading start -->
				<div class='row'><!-- panel-heading row start -->
					<div class='col-xs-3'><!-- col-xs-3 start -->
						<i class='fa fa-comments fa-5x'></i>
					</div><!-- col-xs-3 end-->
					<div class='col-xs-9 text-right'><!-- col-xs-9 text-right start-->
						<div class='huge'> <?php echo $count_cust; ?>  </div>
						<div>Customers</div>
					</div><!-- col-xs-9 text-right end-->
				</div><!-- panel-heading row end -->
			</div><!-- panel-heading end -->

			<a href='index.php?view_customer'>

				<div class='panel-footer'><!-- panel-footer start -->
					<span class='pull-left'>View Details </span>
					<span class='pull-right'> <i class='fa fa-arrow-circle-right'></i> </span>

					<div class='clearfix'></div>
				</div><!-- panel-footer end -->

			</a>

		</div><!-- panel panel-green end -->
	</div><!-- col-lg-3 col-lg-6 end -->


	<div class='col-lg-3 col-md-6'><!-- col-lg-3 col-lg-6 start -->
		<div class='panel panel-yellow'><!-- panel panel-yellow start -->
			<div class='panel-heading'><!-- panel-heading start -->
				<div class='row'><!-- panel-heading row start -->
					<div class='col-xs-3'><!-- col-xs-3 start -->
						<i class='fa fa-shopping-cart fa-5x'></i>
					</div><!-- col-xs-3 end-->
					<div class='col-xs-9 text-right'><!-- col-xs-9 text-right start-->
						<div class='huge'> <?php echo $count_p_cat; ?>  </div>
						<div>Products Categories</div>
					</div><!-- col-xs-9 text-right end-->
				</div><!-- panel-heading row end -->
			</div><!-- panel-heading end -->

			<a href='index.php?view_product_cat'>
				<div class='panel-footer'><!-- panel-footer start -->
					<span class='pull-left'>View Details </span>
					<span class='pull-right'> <i class='fa fa-arrow-circle-right'></i> </span>

					<div class='clearfix'></div>
				</div><!-- panel-footer end -->

			</a>
		</div><!-- panel panel-yellow end -->
	</div><!-- col-lg-3 col-lg-6 end -->


	<div class='col-lg-3 col-md-6'><!-- col-lg-3 col-lg-6 start -->
		<div class='panel panel-red'><!-- panel panel-red start -->
			<div class='panel-heading'><!-- panel-heading start -->
				<div class='row'><!-- panel-heading row start -->
					<div class='col-xs-3'><!-- col-xs-3 start -->
						<i class='fa fa-support fa-5x'></i>
					</div><!-- col-xs-3 end-->
					<div class='col-xs-9 text-right'><!-- col-xs-9 text-right start-->
						<div class='huge'> <?php echo $count_order; ?>  </div>
						<div>Orders</div>
					</div><!-- col-xs-9 text-right end-->
				</div><!-- panel-heading row end -->
			</div><!-- panel-heading end -->

			<a href='index.php?view_customer'>

				<div class='panel-footer'><!-- panel-footer start -->
					<span class='pull-left'>View Details </span>
					<span class='pull-right'> <i class='fa fa-arrow-circle-right'></i> </span>

					<div class='clearfix'></div>
				</div><!-- panel-footer end -->

			</a>

		</div><!-- panel panel-red end -->
	</div><!-- col-lg-3 col-lg-6 end -->


</div><!--  2nd  Row end-->

<div class='row'><!--  3rd  Row start-->
	<div class='col-lg-8'><!--  col-lg-8 start-->
		<div class='panel panel-primary'><!--panel panel-primary  start-->
			<div class='panel-heading'><!--panel-heading  start-->
				<h3 class='panel-title'><!--panel-title  start-->
					<i class='fa fa-money fa-fw'></i>New Orders
				</h3><!--panel-title  end-->
			</div><!--panel-heading  end-->

			<div class='panel-body'><!--panel-body  start-->
				<div class='table-responsive'><!--table-responsive start-->

					<table class='table table-bordered table-hover table-striped'><!--table table-bordered table-hover table-striped starts-->
						<thead><!-- thead starts-->
							<tr>
								<th> Order No: </th>
								<th> Customer Email: </th>
								<th> Invoice No: </th>
								<th> Product ID: </th>
								<th> Total: </th>
								<th> Date: </th>
								<th> Status: </th>

							</tr>
						</thead><!--thead end-->

						<tbody><!--tbody start-->
							<?php
							 $i=0;
							 $get_order="select * from customer_order order by 1 DESC LIMIT 0,5";
							 $run_order=mysqli_query($con,$get_order);
							 while($row_order=mysqli_fetch_array($run_order)){
							 	$order_id=$row_order['order_id'];
							 	$customer_id=$row_order['customer_id'];
							 	$product_id=$row_order['product_id'];
							 	$invoice_no=$row_order['invoice_no'];
							 	$qty=$row_order['qty'];
							 	$size=$row_order['size'];
							 	$status=$row_order['order_status'];

							 	$i++;




							?>
							<tr>
								<td><?php echo $i ; ?></td>
								<td>
									<?php
									$get_cust="select * from customers where customer_id='$customer_id'";
									$run_cust=mysqli_query($con,$get_cust);
									$row_customer=mysqli_fetch_array($run_cust);
									$customer_email=$row_customer['customer_email'];
									echo $customer_email;
									?>
								</td>
								<td> <?php echo $invoice_no ; ?></td>
								<td> <?php echo $product_id ; ?></td>
								<td> <?php echo $qty ; ?> </td>
								<td> <?php echo $size ; ?> </td>
								<td> <?php echo $status ; ?> </td>
							</tr>
							<?php
						}
							?>
						
						</tbody><!--tbody end-->

					</table><!--table table-bordered table-hover table-striped ends-->

				</div><!--table-responsive end-->

				<div class='text-right'><!--text-right starts -->
					<a href='index.php?view_orders'>
						View All Orders <i class fa fa-arrow-circle-right'></i>
					</a>
				</div><!--text-right ends-->
			</div><!--panel-body  end-->
			
		</div><!--panel panel-primary  end-->
	</div><!--  col-lg-8 end-->



	<div class='col-md-4'><!--  col-mg-4 start-->
		<div class='panel '><!--panel   start-->
			<div class='panel-body'><!--panel-body start-->
				<div class='thumb-info mb-md'><!--thumb-info mb-md start--> 

					<img src='admin_images/<?php echo $admin_image; ?>' class='rounded img-responsive'>

					<div class='thumb-info-title'><!--thumb-info-title start-->
						<span class='thumb-info-inner'><?php echo $admin_name; ?></span>
						<span class='thumb-info-type'><?php echo $admin_job; ?></span>
					</div><!--thumb-info-title end-->
					</div><!--thumb-info mb-md end --> 

					<div class='mb-md'><!-- mb-md start-->
						<div class='widget-content-expanded'><!-- widget-content-expanded start -->
							<i class='fa fa-user'></i><span>Email: </span><?php echo $admin_email; ?><br>
							<i class='fa fa-user'></i><span>Country: </span><?php echo $admin_country; ?> <br>
							<i class='fa fa-user'></i><span>Contact: </span><?php echo $admin_contact; ?><br>
						</div><!-- widget-content-expanded end -->

						<hr class='dotted short'>

						<h5 class='text muted'>About</h5>

						<p>
							<?php echo $admin_about; ?>
						</p>
					</div><!-- mb-md end-->
											
			</div><!--panel-body end-->
			
		</div><!--panel end-->
	</div><!--  col-md-4 end-->
</div><!--  3rd  Row end-->

</div>
<?php
}
?>
