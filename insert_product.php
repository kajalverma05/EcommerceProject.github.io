<?php
if(!isset($_SESSION['admin_email'])){
	echo "<script>window.open('login.php','_self');</script>";
}else{
?>
<!DOCTYPE html>
<html>
<head>
	 
    <title>Insert Product</title>        
   
<!-- link for using text editor(tinymce.com)-->
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>tinymce.init({selector:'textarea'});</script>

</head>
<body>
   <div style='margin-left: 240px; margin-top: 50px'>
	<div class="row"><!-- row breadcrumb start-->
		<div class="col-lg-12"><!--col-lg-12 start-->
			<div class="breadcrumb"><!-- breadcrumb start-->
				<li class="active">
					<i class="fa fa-dashboard"></i>
					Dashboadrd/ Insert Product
				</li>
			</div><!--breadcrumb end-->
			

			<div class="row"><!--row start-->
				<div class="col-lg-3">

			  </div>
				<div class="col-lg-6"><!--col-lg-6 start-->
					<div class="panel panel-default"><!--panel panel-default start-->
						<div class="panel-heading"><!--panel-heading start-->
							<h3 class="panel-title">
								<i class="fa fa-money fa-w"></i>Insert Product
							</h3>
						</div><!--panel-heading start-->
						<div class="panel-body"><!--panel-body start-->
							<form class="form-horizontal" method="post" action="" enctype="multipart/form-data"><!--form start-->
								<div class="form-group"><!--form-group start-->
									<label class="col-md-3 contorl-label">Product Title</label>
									<input type="text" class="form-control" name="product_title" required="">
								</div><!--form-group end-->
								<div class="form-group"><!--form-group start-->
									<label class="col-md-3 contorl-label">Product Category</label>
									<select class="form-control" name="product_cat">
										<option>Select A product category</option>
										<?php
										  $get_p_cats="select * from product_category";
										  $run_p_cats=mysqli_query($con,$get_p_cats);
										  while($row=mysqli_fetch_array($run_p_cats)){
										  	$id=$row['p_cat_id'];
										  	$cat_title=$row['p_cat_title'];
										  	echo "
										  	     <option value='$id'> $cat_title </option>
										  	      ";
										  }
										?>
									</select>
								</div><!--form-group end-->
								<div class="form-group"><!--form-group start-->
									<label class="col-md-3 contorl-label">Categories</label>
									<select class="form-control" name="cat">
										<option>Select Categories</option>
										<?php
										/* to retrieve data from tables stored in database
										or to view them on browser using php we use select query  */
										 $get_cats="select * from categories";
										  $run_cats=mysqli_query($con,$get_cats);
										  while($row=mysqli_fetch_array($run_cats)){
										  	$id=$row['cat_id'];
										  	$cat_title=$row['cat_title'];
										  	echo "
										  	     <option value='$id'> $cat_title </option>
										  	      ";
										  }
										?>
									</select>
								</div><!--form-group end-->
								<div class="form-group"><!--form-group start-->
									<label class="col-md-3 contorl-label">Product Image 1</label>
									<input type="file" class="form-control" name="product_img1" required="">
								</div><!--form-group end-->
								<div class="form-group"><!--form-group start-->
									<label class="col-md-3 contorl-label">Product Image 2</label>
									<input type="file" class="form-control" name="product_img2" >
								</div><!--form-group end-->
								<div class="form-group"><!--form-group start-->
									<label class="col-md-3 contorl-label">Product Image 3</label>
									<input type="file" class="form-control" name="product_img3" >
								</div><!--form-group end-->
								<div class="form-group"><!--form-group start-->
									<label class="col-md-3 contorl-label">Product Price</label>
									<input type="text" class="form-control" name="product_price" required="">
								</div><!--form-group end-->
								<div class="form-group"><!--form-group start-->
									<label class="col-md-3 contorl-label">Product Description</label>
									<textarea name="product_desc" class="form-control" rows="6" cols="19"></textarea>
								</div><!--form-group end-->
								<div class="form-group"><!--form-group start-->
									<label class="col-md-3 contorl-label">Product Keywords</label>
									<input type="text" class="form-control" name="product_keywords" required="">
								</div><!--form-group end-->
								

								<div class="form-group"><!--form-group start-->
									<input type="submit" name="submit" value="Insert Product" class="btn btn-primary form-control">
								</div><!--form-group end-->
							</form><!--form end-->
						</div><!--panel-body end-->
					</div><!--panel panel-default end-->
				</div><!--col-lg-6 end-->
				
				<div class="col-lg-3">

				</div>
			</div><!--row end-->

		</div><!--col-lg-12 end-->
	</div><!-- row breadcrumb end-->

</div>


</body>
</html>

<?php
  if(isset($_POST['submit'])){

$product_title=$_POST['product_title'];
$product_cat=$_POST['product_cat'];
$cat=$_POST['cat'];
$product_price=$_POST['product_price'];
$product_keywords=$_POST['product_keywords'];
$product_desc=$_POST['product_desc'];

$product_img1=$_FILES['product_img1']['name'];
$product_img2=$_FILES['product_img2']['name'];
$product_img3=$_FILES['product_img3']['name'];

$temp_name1=$_FILES['product_img1']['tmp_name'];
$temp_name2=$_FILES['product_img2']['tmp_name'];
$temp_name3=$_FILES['product_img3']['tmp_name'];

//move_uploaded_file(filename,destination);

move_uploaded_file($temp_name1,"product_images/$product_img1");
move_uploaded_file($temp_name2,"product_images/$product_img2");
move_uploaded_file($temp_name3,"product_images/$product_img3");

$insert_product="insert into products(p_cat_id,cat_id,date,product_title,product_img1,product_img2,product_img3,product_price,product_desc,product_keywords) values ('$product_cat','$cat',NOW(),'$product_title','$product_img1','$product_img2','$product_img3','$product_price','$product_desc','$product_keywords')";

$run_product=mysqli_query($con,$insert_product);

if($run_product){
  echo "<script> alert('Product Inserted Successfully'); </script>";
  echo "<script> window.open('index.php?view_product','_self'); </script>";
}


}
?>

<?php
}
?>