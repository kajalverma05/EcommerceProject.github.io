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
					<img src="images/cart.jpeg" width="40%" height="83%" alt="REDSHOP" class="hidden-xs"><span style="color:darkblue"><b>BigBasket</b></span>
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
						<li class="">
							<a href="cart.php" style="color:darkblue">Shopping Cart</a>
						</li>
						
						<li class="active">
							<a href="contactus.php" style="color:darkblue">Contact Us</a>
						</li>
					</ul>
				</div><!--padding-nav ends here-->
				<a href="cart.php" class="btn btn-primary navbar-btn right" style="background-color:darkblue"><!--cart.php starts here-->
					<i class="fa fa-shopping-cart"></i>
					<span class=""><?php item(); ?> items In cart</span>
				</a><!--cart.php starts here-->
				<div class="navbar-collapse collapse right"><!--navbar-collapse collapse right starts here-->
					<button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse" data-target="#search" style="background-color:darkblue">
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
					   Contact Us
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
							<h2>Contact To Us</h2>
							<p class="text-muted"><!-- text-muted start-->
								If you have any question, please feel free to contact us, our customer service center is working for you 24/7.
							</p><!-- text-muted end-->
						</center><!-- center end-->
					</div><!-- box-header end-->
					<form action="contactus.php" method="post"><!-- form start -->
						<div class="form-group"><!-- form-group start -->
							<label>Name</label>
							<input type="text" name="name" required="" placeholder="FullName" class="form-control">
						</div><!-- form-group end -->
						<div class="form-group"><!-- form-group start -->
							<label>Email</label>
							<input type="text" name="email" class="form-control" placeholder="Valid Email" required=""> 
						</div><!-- form-group end -->
						<div class="form-group"><!-- form-group start -->
							<label>Subject</label>
							<input type="text" name="subject" class="form-control" placeholder="Write Subject" required="">
						</div><!-- form-group end -->
						<div class="form-group"><!-- form-group start -->
							<label>Message</label>
							<textarea class="form-control" name="message"></textarea>
						</div><!-- form-group end -->
						<div class="text-center"><!-- text-center start -->
							<button type="submit" name="submit" class="btn btn-primary">
								<i class="fa fa-user-md">Send Message</i>
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

<!-- when click on send msg button then data is stored in database start-->

<?php
//Admin mail
if(isset($_POST['submit'])){
$senderName=$_POST['name'];
$senderEmail=$_POST['email'];
$senderSubject=$_POST['subject'];
$senderMessage=$_POST['message'];
$receiverEmail="kv97134@gmail.com";
mail($receiverEmail,$senderName,$senderSubject,$senderMessage,$senderEmail);

//Customer mail
$email=$_POST['email'];
$subject="Welcome to our website";
$msg="I shall get you soon, thanks for sending email";
$from="kv97134@gmail.com";
//mail(to,subject,message);
mail($email,$subjcet,$msg,$from);
echo "<h2 align='center'>Your mail sent</h2>";
}

?>
<!-- when click on send msg button then data is stored in database end-->
