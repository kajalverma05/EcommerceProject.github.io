<?php
session_start();
include('includes/db.php');
include('functions/functions.php');
?>
<!DOCTYPE html>
<html>
<head>
	<!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes, user-scalable=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.png">
    <!-- Author Meta -->
    <meta name="author" content="Globe">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>E-Commerce Website</title>

   



	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="styles/style.css"><!--external css file-->

<!--fontawesome link-->
 <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>
<body>
	<div id="top"><!--Top Bar Start-->
		<div class="container"><!--containerr Start-->
			<div class="col-md-6 offer"><!--col-md-6 offer start-->
				<a href="#" class="btn btn-success btn-sm">
					<?php
					if(!isset($_SESSION['customer_email'])){
						echo "Welcome Guest";
					}else{
						echo "Welcome: " .$_SESSION['customer_email'] . "";
					}
					?>
				</a>
				<a href="#">Shopping Cart Total Price: INR <?php totalPrice(); ?> ,Total Items <?php item(); ?></a>
			</div><!--col-md-6 offer end-->
			<div class="col-md-6"><!--col-md-6 start-->
				<ul class="menu">
					<li>
						<a href="customer_registeration.php">Register</a>
					</li>
					<li>
						<?php
						if(!isset($_SESSION['customer_email'])){
							echo "<a href='checkout.php'> My Account  </a>";
						}else{
							echo "<a href='customer/my_account.php?my_order'> My Account </a>";
						}
						?>
					</li>
					<li>
						<a href="cart.php">Goto Cart</a>
					</li>
					<li>
						<?php
							if(!isset($_SESSION['customer_email']))
							{
								echo "<a href='checkout.php'>Login</a>";
							}else{
								echo "<a href='logout.php'>Logout</a>";
							}
							?>
					</li>
				</ul>

			</div><!--col-md-6 end-->

		</div><!--containerr end-->

	</div><!--Top Bar end-->

	
	<div class="navbar navbar-default " id="navbar"><!--navbar navbar-default starts here-->
		<div class="container">
			<div class="navbar-header"><!--navbar-header  starts here-->
				<a  class="navbar-brand home"href="index.php" >
					<img src="images/cart.jpeg" width="30%" height="83%" alt="EASYCART" class="hidden-xs"><span style="color:darkblue"><b>BigBasket</b></span>
					<img src="images/logo-small.jpeg" width="40%" height="120%" alt="EASYCART" class="visible-xs">
				</a>
				<button type="button"  class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
					<span class="sr-only">Toggle Navigation</span>
					<i class="fa fa-align-justify"></i>
				</button>
				<!-- for mobile view-->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
					<span class="sr-only"></span>
					<i class="fa fa-search"></i>
				</button><!-- for mobile end view--> 

			</div><!--navbar-header ends here-->

			<div class="navbar-collapse collapse" id="navigation"><!--navbar-collapse collapse starts here-->
				<div class="padding-nav"><!--padding-nav starts here-->
					<ul class="nav navbar-nav navbar-left">
						<li>
							<a href="index.php" style="color:darkblue">Home</a>
						</li>
						<li >
							<a href="shop.php" style="color:darkblue">Shop</a>
						</li>
						<li class="">
							<?php
						if(!isset($_SESSION['customer_email'])){
							echo "<a href='checkout.php'> My Account  </a>";
						}else{
							echo "<a href='customer/my_account.php?my_order'> My Account </a>";
						}
						?>
						</li>
						<li class="active">
							<a href="cart.php" style="color:darkblue">Shopping Cart</a>
						</li>
						
						
					</ul>
				</div><!--padding-nav ends here-->
				<a href="cart.php" class="btn btn-primary navbar-btn right" ><!--cart.php starts here-->
					<i class="fa fa-shopping-cart"></i>
					<span class=""><?php item(); ?> items In cart</span>
				</a><!--cart.php starts here-->
				<div class="navbar-collapse collapse right"><!--navbar-collapse collapse right starts here-->
					<button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse" data-target="#search" >
						<span class="sr-only">Toggle Search</span>
						<i class="fa fa-search"></i>
					</button>
				</div><!--navbar-collapse collapse right ends here-->
				<div class="collapse clearfix" id="search">
					<form class="navbar-form" method="get" action="result.php">
						<div class="input-group">
							<input type="text" name="user_query" placeholder="Search" class="form-control" required="">
							<span class="input-group-btn">
							<button type="submit" name="search" value="Search" class="btn btn-primary">
								<i class="fa fa-search"></i>
							</button>
						</span>
						</div>
					</form>
				</div>

			</div><!--navbar-collapse collapse ends here-->

		</div>
	</div><!--navbar navbar-default ends here-->
	<!--header ends-->
	<div id="content"><!-- shop page content starts here-->
		<div class="container"><!-- container starts here-->
			<div class="col-md-12"><!-- col-md-12 starts here-->
				<ul class="breadcrumb">
					<li>
						<a href="home.php">Home</a>
					</li>
					<li >
					   Cart
					</li>
				</ul>
			</div><!-- col-md-12 ends here-->

			<div class="col-md-9" id="cart"><!--col-md-9 cart starts-->
				<div class="box"><!--box starts-->
					<form method="post" action="cart.php" enctype="multipart/form-data"><!--form starts-->
						<h1>Shopping Cart</h1>
                       <!-- code for making shopping cart page dynamic start-->  
						<?php
						$ip_add=getUserIP();
						$select_cart="select * from cart where ip_add='$ip_add'";
						$run_cart=mysqli_query($con,$select_cart);
						$count=mysqli_num_rows($run_cart);			
						?>
						<!-- code for making shopping cart page dynamic end-->  
						<p class="text-muted">Currently you have <?php echo $count; ?> items in your cart</p>
						<div class="table-responsive"><!--table-responsive start-->
							<table class="table"><!--table start-->
								<thead>
									<tr>
										<th colspan="2">Product</th>
										<th>Quantity</th>
										<th>Unit Price</th>
										<th>Size</th>
										<th colspan="1">Delete</th>
										<th colspan="1">Sub Total</th>
									</tr>
								</thead>

								<tbody><!--tbody starts-->
									<?php
									$total=0;
									while($row=mysqli_fetch_array($run_cart)){

                                       $pro_id=$row['p_id'];                                 
                                       $pro_size=$row['size'];
                                        $pro_qty=$row['qty'];

                                      $get_product="select * from products where product_id='$pro_id'";
                                      $run_pro=mysqli_query($con,$get_product);
                                while($row=mysqli_fetch_array($run_pro)){
                                	   
                                         $p_title=$row['product_title'];
                                         $p_img1=$row['product_img1'] ;
                                         $p_price=$row['product_price'];
                                           $sub_total=$row['product_price']*$pro_qty;
                                         $total += $sub_total;    //$total= $total+$sub_total;                      
                    									?>

									
									<tr><!--tr starts-->	
										<td><img src="admin_area/product_images/<?php echo $p_img1; ?>"></td>
										<td><?php echo $p_title; ?></td>
										<td><?php echo $pro_qty; ?></td>
										<td><?php echo $p_price; ?></td>
										<td><?php echo $pro_size; ?></td>
										<td>
											<input type="checkbox" name="remove[]" value="<?php  echo $pro_id; ?>">
										</td>
										<td><?php echo $sub_total; ?> </td>
									</tr><!--tr end -->
									<?php
								     }
								 }
								?>
											
								</tfoot><!--tfoot ends-->
						</table><!--table end-->

						</div><!--table-responsive end-->

						<div class="box-footer"><!--box-footer starts-->
                          	<div class="pull-left"><!--pull-left starts-->
                          		<h4>Total Price</h4> 
                          	</div><!--pull-left ends-->	
                          	<div class="pull-right"><!--pull-right starts-->
                          		<h4>INR<?php  echo $total; ?></h4>
                          		
                          	</div><!--pull-right ends-->
                          </div><!--box-footer ends-->


                          <div class="box-footer"><!--box-footer starts-->
                          	<div class="pull-left"><!--pull-left starts-->
                          		<a href="index.php" class="btn btn-default">
                          			<i class="fa fa-chevron-left"></i>Continue Shopping
                          		</a>
                          	</div><!--pull-left ends-->	
                          	<div class="pull-right"><!--pull-right starts-->
                          		<button type="submit" class="btn btn-default" name="update" value="Update Cart">
                          			<i class="fa fa-refresh">Update Cart</i>
                          		</button>
                          		<a href="checkout.php" class="btn btn-primary">
                          		Proceed to checkout <i class="fa fa-chevron-right"></i>
                          	</a>
                          	</div><!--pull-right ends-->

                          </div><!--box-footer ends-->

					</form><!--form ends-->

				</div><!--box ends-->

				<?php
				function update_cart(){
					global $con;
					if(isset($_POST['update'])){
						foreach($_POST['remove'] as $remove_id){
							$delete_product="delete from cart where p_id='$remove_id'";
							$run_del=mysqli_query($con,$delete_product);
							if($run_del){
								echo "<script> window.open('cart.php','_self') </script>";
							}

						}

					}
				}
				echo @$up_cart=update_cart();

				?>

				<div id="row same-height-row"><!-- row same-height-row starts-->
                    	<div class="col-md-3 col-sm-6"><!-- col-md-3 col-sm-6 starts-->
                    	  <div class="box same-height headline"><!-- box same-height headline starts-->
                    	  	<h3 class="text-center">
                    	  		You Also Like These Products
                    	  	</h3>
                    	  </div><!-- box same-height headline ends-->
                    	</div><!-- col-md-3 col-sm-6 ends-->

                    	<div class="center-responsive col-md-3"><!-- center-responsive col-md-3 starts-->
                    		<div class="product same-height"><!-- product same-height starts-->
                    		<a href="#">
                    			<img src="admin_area/product_images/tshirt3.jpeg" class="img-responsive">
                    		</a>
                    		<div class="text"><!-- text starts-->
                    			<h3>
                    				<a href="details.php">
                    					Mardaz Pack of 5 - Multicolor Coton V-Neck T-Shirts 
                    				</a>
                    			</h3>
                    			<p class="price"><?php echo $total; ?></p>	    
                    
                    		</div><!-- text ends-->
                    		</div><!-- product same-height ends-->
                    	</div><!-- center-responsive col-md-3 ends-->

                    	<div class="center-responsive col-md-3"><!-- center-responsive col-md-3 starts-->
                    		<div class="product same-height"><!-- product same-height starts-->
                    		<a href="#">
                    			<img src="admin_area/product_images/pair tshirt1.jpeg" class="img-responsive">
                    		</a>
                    		<div class="text"><!-- text starts-->
                    			<h3>
                    				<a href="details.php">
                    					Mardaz Pack of 5 - Multicolor Coton V-Neck T-Shirts
                    				</a>
                    			</h3>
                    			<p class="price">INR 200</p>	    
                    
                    		</div><!-- text ends-->
                    		</div><!-- product same-height ends-->
                    	</div><!-- center-responsive col-md-3 ends-->

                    	<div class="center-responsive col-md-3"><!-- center-responsive col-md-3 starts-->
                    		<div class="product same-height"><!-- product same-height starts-->
                    		<a href="#">
                    			<img src="admin_area/product_images/watch1.jpeg" class="img-responsive">
                    		</a>
                    		<div class="text"><!-- text starts-->
                    			<h3>
                    				<a href="details.php">
                    					Stylish Watch
                    				</a>
                    			</h3>
                    			<p class="price">INR 500</p>	                   
                    		</div><!-- text ends-->
                    		</div><!-- product same-height ends-->
                    	</div><!-- center-responsive col-md-3 ends-->
                    </div><!-- row same-height-row starts-->
		</div><!--col-md-9 cart ends-->

           
          <div class="col-md-3"><!--col-md-3 starts-->
          	<div class="box" id="order-summary"><!--box order-summary starts-->
          		<div class="box-header"><!-- box-header starts-->
                    <h3>Order Summary</h3>
          		</div><!-- box-header ends-->
          		<p class="text-muted"><!-- text-muted starts-->
          			Shipping and additional costs are calculated based on the values you have entered
          		</p><!-- text-muted ends-->	
          		<div class="table-responsive"><!-- table-responsive starts-->
          			<table class="table"><!-- table starts-->
          				<tbody><!-- tbody starts-->
          					<tr><!-- tr starts-->
          						<td><!-- td starts-->
          							Order Subtotal
          						</td><!-- td ends-->
          						<th>INR <?php echo $total; ?></th>
          					</tr><!-- tr ends-->

          					<tr><!-- tr starts-->
          						<td>Shipping and Handling</td>
          						<td>INR 0</td>
          					</tr><!-- tr ends-->

          					<tr><!-- tr starts-->
          						<td>Tax</td>
          						<td>INR 0</td>
          					</tr><!-- tr ends-->

          					<tr class="total"><!-- tr starts-->
          						<td>Total</td>
          						<th>INR <?php echo $total; ?></th>
          					</tr><!-- tr ends-->
          				</tbody><!-- tbody ends -->
          			</table><!-- table ends-->
          		</div><!-- table-responsive ends-->
          	</div><!--box order-summary ends-->

          </div><!--col-md-3 ends-->
			




		</div><!-- container ends here-->
	</div><!-- shop page content ends here-->

<!-- footer starts here-->
	<?php
	include("includes/footer.php");
	?>
	<!-- footer ends here-->
	



<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

   <!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<body>
</html>
				
