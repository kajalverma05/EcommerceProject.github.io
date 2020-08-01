<?php
session_start();
if(!isset($_SESSION['customer_email'])){
	echo "<script> window.open('../checkout.php','_self')</script>";
}else{
include("includes/db.php");
include("functions/functions.php");

if(isset($_GET['order_id'])){
	$order_id=$_GET['order_id'];
}


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
    <title>Globe</title>

   



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
				<a href="#" class="btn btn-success btn-sm">Welcome Guest</a>
				<a href="#">Shopping Cart Total Price: INR 100,Total Items 2</a>
			</div><!--col-md-6 offer end-->
			<div class="col-md-6"><!--col-md-6 start-->
				<ul class="menu">
					<li>
						<a href="../customer_registeration.php">Register</a>
					</li>
					<li>
						<a href="my_account.php">My Account</a>
					</li>
					<li>
						<a href="../cart.php">Goto Cart</a>
					</li>
					<li>
						<a href="login.php">Login</a>
					</li>
				</ul>

			</div><!--col-md-6 end-->

		</div><!--containerr end-->

	</div><!--Top Bar end-->

	
	<div class="navbar navbar-default " id="navbar"><!--navbar navbar-default starts here-->
		<div class="container">
			<div class="navbar-header"><!--navbar-header  starts here-->
				<a  class="navbar-brand home"href="index.php" >
					<img src="images/logo1.jpeg" width="40%" height="100%" alt="REDSHOP" class="hidden-xs">
					<img src="images/logo-small.jpeg" width="40%" height="120%" alt="REDSHOP" class="visible-xs">
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
							<a href="../index.php">Home</a>
						</li>
						<li>
							<a href="../shop.php">Shop</a>
						</li>
						<li class="active">
							<a href="my_account.php">My Account</a>
						</li>
						<li class="">
							<a href="../cart.php">Shopping Cart</a>
						</li>
						<li class="">
							<a href="../about.php">About Us</a>
						</li>
						<li class="">
							<a href="../services.php">Services</a>
						</li>
						<li class="">
							<a href="../contactus.php">Contact Us</a>
						</li>
					</ul>
				</div><!--padding-nav ends here-->
				<a href="cart.php" class="btn btn-primary navbar-btn right"><!--cart.php starts here-->
					<i class="fa fa-shopping-cart"></i>
					<span class="">4 items In cart</span>
				</a><!--cart.php starts here-->
				<div class="navbar-collapse collapse right"><!--navbar-collapse collapse right starts here-->
					<button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse" data-target="#search">
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
					   My Account
					</li>
				</ul>
			</div><!-- col-md-12 ends here-->

			<div class="col-md-3"><!--col-md-3 start-->
				<!--Including sidebar.php page start-->
				<?php
				include("includes/sidebar.php");
				?>
				<!--Including sidebar.php page end-->
			</div><!--col-md-3 end-->
<!--payment confirmation page-->
			<div class="col-md-9"><!--col-md-9 start-->
				<div class="box"><!--box start-->
					<h1 align="center">Please confirm your payment</h1>
					<form action="confirm.php?update_id=<?php echo $order_id; ?>" method="post" enctype="multipart/form-data"><!--form start-->
						<div class="form-group"><!--form-group start-->
							<label>Invoice Number</label>
							<input type="text" class="form-control" name="invoice_number" required="">
				 		</div><!--form-group end-->
				 		<div class="form-group"><!--form-group start-->
							<label>Amount</label>
							<input type="text" class="form-control" name="amount" required="">
				 		</div><!--form-group end-->
				 		<div class="form-group"><!--form-group start-->
							<label>Select Payment Mode</label>
							<select class="form-control" name="payment_mode">
								<option>Bank Transfer</option>
								<option>Paypal</option>
								<option>PayuMoney</option>
								<option>PayTm</option>

							</select>
				 		</div><!--form-group end-->
				 		<div class="form-group"><!--form-group start-->
							<label>Transaction Number</label>
							<input type="text" class="form-control" name="trfr_number" required="">
				 		</div><!--form-group end-->
				 		<div class="form-group"><!--form-group start-->
							<label>Payment Date</label>
							<input type="text" class="form-control" name="date" required="">
				 		</div><!--form-group end-->

				 		<div class="text-center"><!--text-center starts-->
				 			<button type="submit" name="confirm_payment" class="btn btn-primary btn-lg">
				 				Confirm Payment
				 			</button>
				 		</div><!--text-center ends-->
				 	
					</form><!--form end-->

					<?php
					if(isset($_POST['confirm_payment'])){
						$update_id=$_GET['update_id'];
						$invoice_no=$_POST['invoice_number'];
						$amount=$_POST['amount'];
						$payment_mode=$_POST['payment_mode'];
						$trfr_number=$_POST['trfr_number'];
						$date=$_POST['date'];
						$complete="Complete";


						$insert="insert into payments(invoice_id,amount,payment_mode,ref_no,payment_date) values('$invoice_no','$amount','$payment_mode','$trfr_number','$date')";

						$run_insert=mysqli_query($con,$insert);


			 			$update_c="update customer_order set order_status ='$complete' where order_id='$update_id'";
						$run_update_c=mysqli_query($con,$update_c);


						//$update_p="update pending_order set order_status ='$complete' where order_id='$update_id'";
						//$run_update_p=mysqli_query($con,$update_p);

						echo "<script> alert('Your order has been received') </script>";
						echo "<script> window.open('my_account.php?my_order','_self') </script>";


					}
					?>

				</div><!--box end-->

			</div><!--col-md-9 end-->
	
		</div><!-- container ends here-->
	</div><!-- shop page content ends here-->

<!-- footer starts here-->
	<?php
	include("includes/footer.php");
	?>
	<!-- footer starts here-->


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

   <!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<body>
</html>

<?php
}
?>