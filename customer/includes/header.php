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
				<a href="#" class="btn btn-success btn-sm">Welcome Guest</a>
				<a href="#">Shopping Cart Total Price: INR 100,Total Items 2</a>
			</div><!--col-md-6 offer end-->
			<div class="col-md-6"><!--col-md-6 start-->
				<ul class="menu">
					<li>
						<a href="customer_registeration.php">Register</a>
					</li>
					<li>
						<a href="checkout.php">My Account</a>
					</li>
					<li>
						<a href="cart.php">Goto Cart</a>
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
			<img src="images/cart.jpeg" width="30%" height="83%" alt="EASYCART" class="hidden-xs"> <span style="color:darkblue"><b>BigBasket</b></span>
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
						<li class="active">
							<a href="index.php">Home</a>
						</li>
						<li class="">
							<a href="shop.php">Shop</a>
						</li>
						<li class="">
							<a href="checkout.php">My Account</a>
						</li>
						<li class="">
							<a href="cart.php">Shopping Cart</a>
						</li>
						<li class="">
							<a href="about.php">About Us</a>
						</li>
						<li class="">
							<a href="services.php">Services</a>
						</li>
						<li class="">
							<a href="contactus.php">Contact Us</a>
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
