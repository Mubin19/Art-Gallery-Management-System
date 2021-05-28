<?php include("header.php");?>

<!DOCTYPE html>
 <html>
 <head>
 <title>Artist</title>
 <style>
 
		* {
	  box-sizing: border-box;
	}
	
			body{
			  background-image: url("img/bg.jpg");
			  
			  margin :0;
			  min-height: 100vh;
			}
	.column {
	  float: left;
	  width: 33.33%;
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
	
		
.button {
  background-color: #D3D3D3; /* Green */
 
  border: none;
  color: #fff;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  border-radius: 5px;
}

.button1 {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
  color: #fff;
  width:100%;
  color: white;
  text-decoration: none;
}
		
	.column{
		box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
	}	
			

</style>
 </head>
             
<div class="row">
  <div class="column">
    <img src="img/monalisa2.jpg" name="img1" alt="Snow" style="width:100%">  
	<button id="button1" type="button" class="button button1" style="color: #fff"> <a href='fetch_artworks.php?details=<?php echo 1; ?>' style="text-decoration: none">Click Here!</button>
  </div>
  <div class="column">
    <img src="img/Guernica.jpeg" alt="Forest" style="width:100%">
	<button type="button" class="button button1" > <a href='fetch_artworks.php?details=<?php echo 2; ?>' style="text-decoration: none">Click Here!</button>
  </div>
  <div class="column">
    <img src="img/Christina_World.jpg" alt="Mountains" style="width:100%">
	<button type="button" class="button button1"> <a href='fetch_artworks.php?details=<?php echo 3; ?>' style="text-decoration: none">Click Here!</button>
  </div>
  <div class="column">
    <img src="img/Christ.jpg" alt="Mountains" style="width:100%">
	<button type="button" class="button button1"> <a href='fetch_artworks.php?details=<?php echo 4; ?>' style="text-decoration: none">Click Here!</button>
  </div>
  <div class="column">
    <img src="img/Girl.jpg" alt="Snow" style="width:100%">
	<button type="button" class="button button1"> <a href='fetch_artworks.php?details=<?php echo 5; ?>' style="text-decoration: none">Click Here!</button>
  </div>
  <div class="column">
    <img src="img/lostprincess.jpg" alt="Forest" style="width:100%">
    <button type="button" class="button button1"> <a href='fetch_artworks.php?details=<?php echo 6; ?>' style="text-decoration: none">Click Here!</button>
  </div>
  <div class="column">
    <img src="img/magpie.jpg" alt="Mountains" style="width:100%">
	<button type="button" class="button button1"> <a href='fetch_artworks.php?details=<?php echo 7; ?>' style="text-decoration: none">Click Here!</button>
  </div>
  <div class="column">
    <img src="img/starrynight.jpg" alt="Mountains" style="width:100%">
	<button type="button" class="button button1"> <a href='fetch_artworks.php?details=<?php echo 8; ?>' style="text-decoration: none">Click Here!</button>
  </div>
</div>

                
