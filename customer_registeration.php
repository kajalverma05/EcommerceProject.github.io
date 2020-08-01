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
				<a href="#">Shopping Cart Total Price: INR <?php totalPrice(); ?> ,Total Items <?php item(); ?> </a>
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
							<a href="index.php" class="active" style="color:darkblue">Home</a>
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
						<li class="">
							<a href="cart.php" style="color:darkblue">Shopping Cart</a>
						</li>
						
						
						
					</ul>
				</div><!--padding-nav ends here-->
				<a href="cart.php" class="btn btn-primary navbar-btn right" ><!--cart.php starts here-->
					<i class="fa fa-shopping-cart"></i>
					<span class=""><?php item(); ?>  items In cart</span>
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
						<a href="index.php">Home</a>
					</li>
					<li >
					  Registeration
					</li>
				</ul>
			</div><!-- col-md-12 ends here-->

			<div class="col-md-3"><!--col-md-3 start-->
				<?php
				include("includes/sidebar.php");
				?>
			</div><!--col-md-3 end-->

           <!-- Contact us form start-->
			<div class="col-md-9"><!--col-md-9 start-->
				<div class="box"><!-- box start-->
					<div class="box-header"><!-- box-header start-->
						<center><!-- center start-->
							<h2> Register A New Account</h2>
						</center><!-- center end-->
					</div><!-- box-header end-->
					<form action="customer_registeration.php" method="post" enctype="multipart/form-data"><!-- form start -->
						<div class="form-group"><!-- form-group start -->
							<label>Customer Name</label>
							<input type="text" name="c_name" required="" placeholder="Enter FullName" class="form-control">
						</div><!-- form-group end -->
						<div class="form-group"><!-- form-group start -->
							<label>Customer Email</label>
							<input type="text" name="c_email" class="form-control" placeholder="Enter Valid Email" required=""> 
						</div><!-- form-group end -->
						<div class="form-group"><!-- form-group start -->
							<label>Customer Password</label>
							<input type="password" name="c_password" class="form-control" placeholder="Enter Valid Password" required=""> 
						</div><!-- form-group end -->
						<div class="form-group"><!-- form-group start -->
							<label>Country</label>
							<input type="text" name="c_country" class="form-control" placeholder="Enter Country Name" required=""> 
						</div><!-- form-group end -->
						<div class="form-group"><!-- form-group start -->
							<label>City</label>
							<input type="text" name="c_city" class="form-control" placeholder="Enter City Name" required=""> 
						</div><!-- form-group end -->
						<div class="form-group"><!-- form-group start -->
							<label>Contact Number</label>
							<input type="text" name="c_contact" class="form-control" placeholder="Enter Contact Number" required=""> 
						</div><!-- form-group end -->
						<div class="form-group"><!-- form-group start -->
							<label>Address</label>
							<input type="text" name="c_address" class="form-control" placeholder="Enter Address" required=""> 
						</div><!-- form-group end -->
						<div class="form-group"><!-- form-group start -->
							<label>Image</label>
							<input type="file" name="c_image" class="form-control" placeholder="Insert Image" required=""> 
						</div><!-- form-group end -->

					
						<div class="text-center"><!-- text-center start -->
							<button type="submit" name="submit" class="btn btn-primary">
								<i class="fa fa-user-md">Register</i>
							</button>
						</div><!-- text-center end -->
					</form><!-- form end -->
				</div><!-- box end-->
			</div><!--col-md-9 end-->

           <!-- Contact us form end-->







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
if(isset($_POST['submit'])){
	$c_name=$_POST['c_name'];
	$c_email=$_POST['c_email'];
	$c_password=$_POST['c_password'];
	$c_country=$_POST['c_country'];
	$c_city=$_POST['c_city'];
	$c_contact=$_POST['c_contact'];
	$c_address=$_POST['c_address'];
	$c_image=$_FILES['c_image']['name'];
	$c_tmp_image=$_FILES['c_image']['tmp_name'];
	$c_ip=getUserIP();

	//move_uploaded_file(filename,destination);

   move_uploaded_file($c_tmp_image,"customer/customer_images/$c_image");
   $insert_customer="insert into customers(customer_name,customer_email,customer_pass,customer_country,customer_city,customer_contact,customer_address,customer_image,customer_ip) values('$c_name','$c_email','$c_password','$c_country','$c_city','$c_contact','$c_address','$c_image','$c_ip')";

   $run_customer=mysqli_query($con,$insert_customer);

   $sel_cart="select * from cart where ip='$c_ip'"; 
   $run_cart=mysqli_query($con,$sel_cart);
   $check_cart=mysqli_num_rows($run_cart);
   if($check_cart>0)
   {
   	$_SESSION['customer_email']=$c_email;
   	echo "<script> alert('You have been registered successfully') </script>";
   	echo "<script> window.open('checkout.php','_self') </script>";
   }else{
   	$_SESSION['customer_email']=$c_email;
   	echo "<script> alert('You have  been registered successfully')</script>";
   	echo "<script> window.open('index.php','_self')</script>";
   }


}
?>