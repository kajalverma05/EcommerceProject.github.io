<div id="footer" class="container-fluid"><!--footer section container starts-->
	<div class="row"><!-- row starts-->
		<div class="col-md-3 col-sm-6"><!-- col-md-3 col-sm-6 starts 1-->
			<h4>Pages</h4>
			<ul>
				<li>
					<a href="cart.php">Shopping Cart</a>
				</li>
				<li>
					<a href="contact.php">Contact Us</a>
				</li>
				<li>
					<a href="shop.php">Shop</a>
				</li>
				<li>
					<a href="chckout.php">My Account</a>
				</li>
			</ul>
			<hr>
			<h4>User Section</h4>
			<ul>
				<li>
					<a href="checkout.php">Login</a>
				</li>
				<li>
					<a href="customer_registeration.php">Register</a>
				</li>
			</ul>
			<hr class="hidden-md hidden-lg hidden-sm">

		</div><!-- col-md-3 col-sm-6 ends 1-->
            
         <div class="col-md-3 col-sm-6"><!-- col-md-3 col-sm-6 starts 2-->
         	<h4>Top Product Categories</h4>
         	<ul>

               <!-- making product categories code dynamic start using php-->
               <?php
               $get_p_cats="select * from product_category";
               $run_p_cats=mysqli_query($con,$get_p_cats);
               while($row_p_cat=mysqli_fetch_array($run_p_cats)){
                 $p_cat_id=$row_p_cat['p_cat_id'];
                 $p_cat_title=$row_p_cat['p_cat_title'];

                 echo "
                 <li> <a href='shop.php?p_cat_id=$p_cat_id'>$p_cat_title</a> </li>
                 ";
               }
               ?>
               <!-- making product categories code dynamic end using php-->
         		
         	</ul>
         	<hr class="hidden-md hidden-lg">
         </div><!-- col-md-3 col-sm-6  ends 2-->

         <div class="col-md-3 col-sm-6"><!-- col-md-3 col-sm-6  starts 3-->
         	<h4>where to find us</h4>
         	<p>
         		<strong>Teehosting.com</strong>
         		<br>Haryana
         		<br>Uttar pradesh
         		<br>kv97134@gmail.com
         		<br>+91 8168091950
         	</p>
         	<a href="contact.php">Goto contact us page</a>
         	<hr class="hidden-md hidden-lg">
         </div><!-- col-md-3 col-sm-6  ends 3-->

         <div class="col-md-3 col-sm-6"><!-- col-md-3 col-sm-6  starts 4-->
         	<h4>Get the news</h4>
         	<p class="text-muted">
         		subscribe here for getting news of icscrlab ayodhya
         	</p>
         	<form method="post" action="">
         		<div class="input-group">
         			<input type="text" name="email" class="form-control">
         			<span class="input-group-btn">
         				<input type="submit" class="btn btn-default" value="subscribe">
         			</span>
         		</div>
         	</form>
         	<hr>
         	<h4>Stay In Touch</h4>
         	<p class="social">
         		<a href="#"><i class="fa fa-facebook"></i></a>
         		<a href="#"><i class="fa fa-twitter"></i></a>
         		<a href="#"><i class="fa fa-instagram"></i></a>
         		<a href="#"><i class="fa fa-google-plus"></i></a>
         		<a href="#"><i class="fa fa-envelope"></i></a>
         	</p>

         </div><!-- col-md-3 col-sm-6  ends 4-->

	</div><!-- row ends-->
</div><!--footer section container ends-->

<div id="copyright"><!-- copyright section start-->
	<div class="container"><!-- container start-->
		<div class="col-md-6"><!-- col-md-6 start 1-->
			<p class="pull-left">
				&copy; 2020  Kajal Verma
			</p>
		</div><!-- col-md-6 end 1-->
		<div class="col-md-6"><!-- col-md-6 start 2-->
			<p class="pull-right">
               Tampalte By: <a href="www.easycart.com">BigBasket.com</a>
			</p>
		</div><!-- col-md-6 end 2-->
	</div><!-- container end-->
</div><!-- copyright section end-->
