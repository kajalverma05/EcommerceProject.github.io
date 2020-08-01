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
					<img src="images/cart.jpeg" width="30%" height="83%" alt="easycart" class="hidden-xs"><span style="color:darkblue"><b>BigBasket</b></span>
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
						<li class="active">
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
					   Shop
					</li>
				</ul>
			</div><!-- col-md-12 ends here-->

			<div class="col-md-3"><!--col-md-3 start-->
				<?php
				include("includes/sidebar.php");
				?>
			</div><!--col-md-3 end-->

			<div class="col-md-9"><!--col-md-9 start-->
				<!-- writin php code when we click on shop.php start-->
				<?php
				if(!isset($_GET['p_cat_id'])){
					if(!isset($_GET['cat_id'])){
						echo "
						<div class='box'>
						<h1>Shop</h1>
						<p>If you want domain name and shared hosting plan in low price then please visit www.teehosting.com or shared/reseller hosting with cPanel</p>
						</div>
						";
					}
				}
				?>
				<!-- writing php code when we click on shop.php end-->
                       
			
				<div class="row"><!-- row start-->

					<!-- display product on shop page with pagination start-->
					<?php
					if(!isset($_GET['p_cat_id'])){
						if(!isset($_GET['cat_id'])){
							$per_page=9;
							if(isset($_GET['page'])){
								$page=$_GET['page'];
							}else{
								$page=1;
							  
							  }
							$start_from=($page-1)*$per_page;
							$get_product="select * from products order by 1 DESC LIMIT $start_from,$per_page";
							$run_product=mysqli_query($con,$get_product);
							while($row=mysqli_fetch_array($run_product)){
								$pro_id=$row['product_id'];
								$pro_title=$row['product_title'];
								$pro_price=$row['product_price'];
								$pro_img1=$row['product_img1'];
								//$pro_img2=$row['product_img2'];
								//$pro_img3=$row['product_img3'];

								echo "
								<div class='col-md-4 col-sm-6 center-responsive'>
								<div class='product' style='width:240px;height:370px'>
								<a href='details.php?product_id=$pro_id'>
								  <img src='admin_area/product_images/$pro_img1' class='img-responsive' style='height:220px;width:240px'  >
							   </a>
								 <div class='text' >
								 <h3> <a href='details.php?product_id=$pro_id'> $pro_title </a></h3>
								 <p class='price'> $pro_price </p>
								 <p class='buttons' style='margin:0px -25px'>
								 <a href='details.php?product_id=$pro_id' class='btn btn-default btn-sm'>View Details</a>
								 <a href='details.php?product_id=$pro_id' class='btn btn-primary btn-sm'> <i class='fa fa-shopping-cart'></i> Add To Cart</a>
								 </p>
								 </div>

								</div>

								</div>

								";
							}
					?>
				</div><!--row end-->

				<center>
					<ul class="pagination">
						<?php
                             $query="select * from products";
                             $result=mysqli_query($con,$query);
                             $total_record=mysqli_num_rows($result);
                             $total_pages=ceil($total_record/$per_page);
                             echo "
                             <li>
                             <a href='shop.php?page=1'>
                             ".'First Page'."
                             </a>
                             </li>";
                             for($i=2;$i<$total_pages;$i++){
                             	echo "
                             	<li>
                             	<a href='shop.php?page=$i'>
                             	".$i."
                             	</a>
                             	</li>
                             	";
                             }
                             echo "
                             <li>
                             <a href='shop.php?page=$total_pages'>
                             ".'Last Page'."
                             </a>
                             </li>
                             ";

				           }
					       }
						?>
<!-- display product on shop page with pagination end-->

					</ul>
				</center>

				
					<!-- including getPcatPro() for displaying products category wise start-->
					<?php
					getPcatPro();
					getCatPro();
					?>
					<!-- including getPcatPro() for displaying products category wise end-->
			

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