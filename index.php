<?php 
session_start();
include('header.php');
include_once("db_connect.php");
?>

<head>
    <title>Welcome!!</title>
    <style type="text/css">

        .navbar-collapse{
           background-color: #333;
			overflow: hidden;
        }
		.nav_item{
					
		}
		
			body{
			  background-image: url("img/bg3.jpg");
			  
			  margin :0;
			  min-height: 100vh;
			}

    </style>
</head>
<script type="text/javascript" src="script/ajax.js"></script>


<div class="container">
	<h2></h2>	
		
				
				
				
				<!--Slider  -->
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			  </ol>

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner">
				<div class="item active">
				  <img src="img/img5.jpg" alt="Los Angeles">
				</div>

				<div class="item">
				  <img src="img/img6.jpg" alt="Chicago">
				</div>
				
				
				<div class="item">
				  <img src="img/img2.jpg" alt="Chicago">
				</div>

				<div class="item">
				  <img src="img/img3.jpg" alt="New York">
				</div>
			  </div>

			  <!-- Left and right controls -->
			  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
				<span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#myCarousel" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
				<span class="sr-only">Next</span>
			  </a>
			</div>
				
				
		
		
		
		
		<div style="margin:50px 0px 0px 0px;">
			<a class="btn btn-default read-more" style="background:#3399ff;color:white" href="http://webdamn.com/login-and-registration-script-with-php-mysql" title="">Back to Tutorial</a>			
		</div>	
</div>	
<?php include('footer.php');?> 