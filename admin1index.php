<?php
session_start();
include('includes/db.php');
if(!isset( $_SESSION['admin_email'])){
    echo "<script> window.open('login.php','_self');</script>";
}else{
?>

<?php
$admin_session=$_SESSION['admin_email'];
$get_admin="select * from admins where admin_email='$admin_session'";
$run_admin=mysqli_query($con,$get_admin);
$row_admin=mysqli_fetch_array($run_admin);
$admin_id=$row_admin['admin_id'];
$admin_name=$row_admin['admin_name'];
$admin_email=$row_admin['admin_email'];
$admin_image=$row_admin['admin_image'];
$admin_country=$row_admin['admin_country'];
$admin_job=$row_admin['admin_job'];
$admin_contact=$row_admin['admin_contact'];
$admin_about=$row_admin['admin_about'];



$get_pro="select * from products";
$run_pro=mysqli_query($con,$get_pro);
$count_pro=mysqli_num_rows($run_pro);

$get_cust="select * from customers";
$run_cust=mysqli_query($con,$get_cust);
$count_cust=mysqli_num_rows($run_cust);

$get_p_cat="select * from product_category";
$run_p_cat=mysqli_query($con,$get_p_cat);
$count_p_cat=mysqli_num_rows($run_p_cat);

$get_p_cat="select * from customer_order";
$run_order=mysqli_query($con,$get_p_cat);
$count_order=mysqli_num_rows($run_order);

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
    <title>Admin Panel</title> 

    <link rel="stylesheet" href="css/style.css"><!--external css file-->

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


<!--fontawesome link-->
 <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>
<body>

    <div id="wrapper"><!-- wrapper class start-->
        <?php 
        include("includes/sidebar.php");
        ?>
        <div id="page-wrapper"><!-- page-wrapper class start-->
            <div class="container-fluid"><!-- container-fluid start-->

                <?php
                if(isset($_GET['dashboard1'])){
                    include('dashboard.php');
                }

                if(isset($_GET['insert_product'])){
                    include('insert_product.php');
                }

                if(isset($_GET['view_product'])){
                    include('view_product.php');
                }

                 if(isset($_GET['delete_product'])){
                    include('delete_product.php');
                }

                  if(isset($_GET['edit_product'])){
                    include('edit_product.php');
                }

                 if(isset($_GET['insert_product_cat'])){
                    include('insert_p_cat.php');
                }

                if(isset($_GET['view_product_cat'])){
                    include('view_p_cat.php');
                }

                  if(isset($_GET['delete_p_cat'])){
                    include('delete_p_cat.php');
                }

                  if(isset($_GET['view_customer'])){
                    include('view_customer.php');
                }
             if(isset($_GET['customer_delete'])){
                    include('customer_delete.php');
                }

                 if(isset($_GET['view_payments'])){
                    include('view_payments.php');
                }
                 if(isset($_GET['payment_delete'])){
                    include('payment_delete.php');
                }
                if(isset($_GET['user_profile'])){
                    include('user_profile.php');
                }





                ?>
            </div><!-- container-fluid end-->

        </div><!-- page-wrapper class end-->
    </div><!-- wrapper class end-->






<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

   <!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>
</html>
<?php
}
?>