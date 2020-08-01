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
    <title>slider</title>

    <!--<style type="text/css">

   #maycarousel .carousel-inner .item span .box{
        width:100px;
        height:100px;
    }
 </style>
-->

   
<!-- link for using text editor(tinymce.com)-->
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>tinymce.init({selector:'textarea'});</script>

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="styles/style.css"><!--external css file-->

<!--fontawesome link-->
 <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

 

</head>
<body>
    <div class="container"><!--container start-->
        <div class="row"><!--row start-->
            <div class="col-md-3"><!--col-md-3 start-->

            </div><!--col-md-3 end-->

            <div class="col-md-3"><!--col-md-4 start-->
           <div class="carousel slide" id="mycarousl" data-ride="carousel"><!--carousel slide start-->
            <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-carousel="#myCarousel" data-slide-to="2"></li>
                    <li  data-carousel="#myCarousel" data-slide-to="3"></li>
                    <li data-carousel="#myCarousel" data-slide-to="4"></li>
                    <li  data-carousel="#myCarousel" data-slide-to="5 "></li>

                </ol>
            <div class="carousel-inner"><!--carousel inner start-->
          <div class="item active">
            <span class="box">1 </span>
            <span class="box">2 </span>
            <span class="box">3 </span>
        </div>
         <div class="item">
            <span class="box">4</span>
            <span class="box">5</span>
            <span class="box">6</span>
        </div>
    </div><!--carousel inner end-->
    <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
              </a>
                <a href="#myCarousel" class="right carousel-control" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div><!--carousel slide ends here-->
</div><!--carousel slide end-->
</div><!--col-md-4 end-->

</div><!--row end-->
</div><!--container end-->



    <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

   <!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>
</html>