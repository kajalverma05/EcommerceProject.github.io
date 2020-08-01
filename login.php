<?php
session_start();
include("includes/db.php");

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
    <title>Admin Login</title>

   



	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="css/login.css"><!--external css file-->

<!--fontawesome link-->
 <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>
<body>

    <div class='container'><!-- container starts -->
        <form class='form-login' action='' method='post'><!-- form-login starts -->
            <h2 class='form-login-heading'>Admin Login</h2>
            <input type='text' class='form-control' name='admin_email' placeholder='Email Address' required="">

            <input type='password' class='form-control' name='admin_pass' placeholder='Password' required="">

            <button class='btn btn-lg btn-primary btn-block' type='submit' name='admin login'>
                Log In
            </button>

            


        </form><!-- form-login ends -->
    </div><!-- container ends -->


    <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

   <!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<body>
</html>

<?php
if(isset($_POST['admin_login'])){
$admin_email= mysqli_real_escape_string($con,$_POST['admin_email']);
$admin_pass= mysqli_real_escape_string($con,$_POST['admin_pass']);

$get_admin="select * from admins where admin_email='$admin_email' AND admin_pass='$admin_pass'";

$run_admin=mysqli_query($con,$get_admin);
$count=mysqli_num_rows($run_admin);

if($count==1){
    $_SESSION['admin_email']=$admin_email;
    echo "<script>alert('You are loggged in');</script>";
     echo "<script>window.open('index.php?dashboard1','_self');</script>";

}
else{
    echo "<script>alert('Email/Password Wrong');</script>";
}

    
}
?>