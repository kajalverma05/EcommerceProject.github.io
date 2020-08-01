<?php
session_start();
include("includes/db.php");
include("functions/functions.php");
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
				<a  class="navbar-brand home" href="index.php" >
					<img src="images/cart.jpeg" width="40%" height="83%" alt="EASYCART" class="hidden-xs"> <span style="color:darkblue"><b>BigBasket</b></span>
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
				<div class="padding-nav" ><!--padding-nav starts here-->
					<ul class="nav navbar-nav navbar-left" style="color:darkblue">
						
						<li class="active">
							<a href="index.php" style="color:darkblue">Home</a>
						</li>
						<li class="">
							<a href="shop.php" style="color:darkblue">Shop</a>
						</li>
						<li class="">
							<?php
						if(!isset($_SESSION['customer_email'])){
							echo "<a href='checkout.php'> My Account  </a>";
						}else{
							echo "<a href='customer/my_account.php?my_order'>My Account</a>";
						}
						?>
						</li>
						<li class="">
							<a href="cart.php" style="color:darkblue">Shopping Cart</a>
						</li>
						<li class="">
							<a href="contactus.php" style="color:darkblue">Contact Us</a>
						</li>
						
						
						
						
					</ul>
				</div><!--padding-nav ends here-->
				<a href="cart.php" class="btn btn-primary navbar-btn right" "><!--cart.php starts here-->
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

	<!-- Slider starts here-->

	<div class="container" id="slider"><!--container starts here-->
		<div class="col-md-12"><!--col-md-12 starts here-->
			<div class="carousel slide" id="myCarousel" data-ride="carousel"><!--carousel slide starts here-->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-carousel="#myCarousel" data-slide-to="2"></li>
					<li  data-carousel="#myCarousel" data-slide-to="3"></li>
					<li data-carousel="#myCarousel" data-slide-to="4"></li>
					<li  data-carousel="#myCarousel" data-slide-to="5 "></li>

				</ol>
				<div class="carousel-inner "><!-- carousel-inner starts here-->

					<!--for Ist item 
					 writing php code for making carousel dynamic start-->
					<?php 
					$get_slider="select * from slider LIMIT 0,1";
					$run_slider=mysqli_query($con,$get_slider);
					while($row=mysqli_fetch_array($run_slider)){
						$slider_name=$row['slider_name'];
						$slider_image=$row['slider_image'];
						echo "
						<div class='item active'>
						<img src='admin_area/slider_images/$slider_image'>
						</div>
						";		
					}
					?>
					<!--for Ist item 
						writing php code for making carousel dynamic end-->


                   <!--for rest of items item 
					 writing php code for making carousel dynamic start-->
					<?php
					$get_slider="select * from slider LIMIT 1,5";
					$run_slider=mysqli_query($con,$get_slider);
					while($row=mysqli_fetch_array($run_slider)){
						$slider_name=$row['slider_name'];
						$slider_image=$row['slider_image'];
						echo "
						<div class='item'>
						<img src='admin_area/slider_images/$slider_image'>
						</div>
						";
					}
					?>
					  <!--for rest of items item 
					 writing php code for making carousel dynamic end-->

				</div><!-- carousel-inner ends here-->
				<a href="#myCarousel" class="left carousel-control" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a href="#myCarousel" class="right carousel-control" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
					<span class="sr-only">Next</span>
				</a>
			</div><!--carousel slide ends here-->
		</div><!--col-md-12 ends here-->
	</div><!-- container ends here-->

	<div id="advantage"><!--div with id="advantage" starts here-->
		<div class="container"><!--container starts here-->
			<div class="same-height-row"><!-- same-height-row starts here-->
				<div class="col-sm-4"><!--col-sm-4 starts 1 here-->
					<div class="box same-height"><!-- box same-height starts here-->
						<div class="icon"><!--icon starts here-->
							<i class="fa fa-heart"></i>
						</div><!-- icon ends here-->
						<h3>
							<a href="#">BEST PRICES</a>
						</h3>
						<p>You can check on all other sites about the prices and than compare with us.</p>
					</div><!-- box same-height ends here-->
				</div><!--col-sm-4 ends here-->

				<div class="col-sm-4"><!--col-sm-4 starts 2 here-->
					<div class="box same-height"><!-- box same-height starts here-->
						<div class="icon"><!--icon starts here-->
							<i class="fa fa-heart"></i>
						</div><!-- icon ends here-->
						<h3>
							<a href="#">100% SATISFACTION GUARANTEED FROM US</a>
						</h3>
						<p>Free returns on everything for 3 months.</p>
					</div><!-- box same-height ends here-->
				</div><!--col-sm-4 ends here-->

				<div class="col-sm-4"><!--col-sm-4 starts 3 here-->
					<div class="box same-height"><!-- box same-height starts here-->
						<div class="icon"><!--icon starts here-->
							<i class="fa fa-heart"></i>
						</div><!-- icon ends here-->
						<h3>
							<a href="#">WE LOVE OUR CUSTOMERS</a>
						</h3>
						<p>We are known to provide best possible services forever.</p>
					</div><!-- box same-height ends here-->
				</div><!--col-sm-4 ends here-->

			</div><!-- same-height-row ends here-->
		</div><!--container end here-->
	</div><!--div with id="advantage" ends here-->


	<div id="hot"><!--  hotbox starts here-->
		<div class="box"><!--  box starts here-->
			<div class="container"><!--  container starts here-->
				<div class="col-md-12"><!--  col-md-12 starts here-->
					<h2>Latest this week</h2>

				</div><!--  col-md-12 ends here-->
			</div><!--  container ends here-->
		</div><!-- box ends here-->
	</div><!--  hotbox ends here-->

	<!-- Product insert code starts here-->

	<div class="container" id="content"><!-- content id container starts here-->
		<div class="row"><!-- row starts here-->
			  <!--getproduct on index page dynamically(from database) by calling function getPro() start-->
			<?php
			getPro();
			?>
			 <!--get product on index page dynamically(from database) by calling function getPro() end-->

		</div><!-- row ends here-->
	</div><!-- content id container ends here-->

	<!-- Product insert code ends here-->

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