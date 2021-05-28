<?php include("header.php");?>

<!DOCTYPE html>
 <html>
 <head>
 <title>Artist</title>
 <style>
		* {
	  box-sizing: border-box;
	}
	
		body
		{
			background-image: url("img/bg.jpg");
			 margin :0;
			  min-height: 100vh;
		}

	.column {
	  float: left;
	  width: 30.33%;
	  padding: 30px;
	  
	  
	}
	.row{
	  content: "";
	  clear: both;
	  display: table;
	  padding-left: 100px;
	  padding-right: 100px;
	}
	/* Clearfix (clear floats) */
	.row::after {
	  
	}
		
	.info-container {
				width:100%;
				display: flex;
				align-items: center;
				justify-content:center;
					  
				background-color: #D3D3D3;
				box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
				flex-wrap: wrap;
				border-radius : 10px;
				padding: 5px;		  
	}

		
	.column{
		box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
	}	
		
</style>
 </head>
             
<div class="row">
  <div class="column">
    <img src="img/leonardo.jpg" name="img1" alt="Snow" style="width:100%">  
	<div class="info-container">
				Leonardo Da Vinci
	<br> 15 April 1452 – 2 May 1519 </br>
	</div>
  </div>
  <div class="column">
    <img src="img/pablo.jpg" alt="Forest" style="width:100%">
	<div class="info-container">
				Pablo Picasso
	<br> 25 October 1881 - 8 April 1973 </br>
  </div>
  </div>
  
  
  <div class="column">
    <img src="img/rembrandt.jpg" alt="Mountains" style="width:100%">
	<div class="info-container">
				Andrew Wyeth
	<br> July 12, 1917 – January 16, 2009 </br>
  </div>
  </div>
  
  <div class="column">
    <img src="img/andrew.jpg" alt="Mountains" style="width:100%">
	<div class="info-container">
				Rembrandt van Rijn
	<br>  15 July 1606[1] – 4 October 1669 </br>
  </div>
  </div>
  <div class="column">
    <img src="img/johannes.jpg" alt="Snow" style="width:100%">
	<div class="info-container">
				Johannes Vermeer
	<br>  October 1632 – December 1675 </br>
  </div>
  </div>
  <div class="column">
    <img src="img/mfhussain.jpg" alt="Forest" style="width:100%">
	<div class="info-container">
				M. F. Hussain
	<br>17 September 1915 – 9 June 2011 </br>
  </div>
  </div>
  <div class="column">
    <img src="img/monet.jpg" alt="Mountains" style="width:100%">
	<div class="info-container">
				Claude Monet
	<br> 14 November 1840 – 5 December 1926 </br>
  </div>
  </div>
  <div class="column">
    <img src="img/vincentvan.jpg" alt="Mountains" style="width:100%">
	<div class="info-container">
				Vincent van Gogh
	<br> 30 March 1853 – 29 July 1890 </br>
  </div>
  </div>
</div>

                