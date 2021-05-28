<?php 
include_once("db_connect.php"); 

?>

<?php 
$record_details = @$_GET['details'];
echo $record_details;

$query = "select * from artworks where id ='$record_details'";
$result = mysqli_query($conn,$query); 
?> 



<!DOCTYPE html> 
<html> 
	<head> 
		<title> Information </title> 
		<style>
						*{
			  box-sizing: border-box;
			}


			body{
			  background-image: url("img/bg12.jpg");
			  
			  margin :0;
			  min-height: 100vh;
			}
			.container{
			  display :flex;
			  align-items: center;
			  justify-content:center;
			 
			}

			.display{
			  display: flex;
			  align-items: center;
			  justify-content:center;
			  background-image: linear-gradient(-90deg, rgb(0, 0, 0), rgb(13, 239, 66));
			   box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
			  flex-wrap: wrap;
			  border-radius : 30px;
			  width : 600px;
			  padding: 20px;;
			}
			.display h1{
			  display:block;
			  color: #ffffff;
			  width: 100%;
			  align-items: center;
			  display :flex;
			  align-items: center;
			  justify-content:center;
			 font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; 
			}
			
		

			.box:active{
			  opacity: 0.7;
			 
			  transform: scale(1.2) rotate(20deg);

			}
			h1{
			  font-family: Verdana, Geneva, Tahoma, sans-serif;
			  color: #ffffff;
			  display :flex;
			  align-items: center;
			  justify-content:center;
			}
				
			h2{
			  font-family: Verdana, Geneva, Tahoma, sans-serif;
			  color: #ffffff;
			  display :flex;
			  align-items: center;
			  justify-content:center;
			}

			h3,h4{
			  font-family: Verdana, Geneva, Tahoma, sans-serif;
			  color: #ffffff;
			  display :flex;
			  align-items: center;
			  justify-content:center;
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
			  width:30%;
			  color: white;
			  text-decoration: none;
			}
       </style>
	</head> 
	<body> 
		<div id="wrapper">
      <h1></h1>
    <div id="drum-machine" class="container">
    <div id="display" class="display">
         
   
	  
	  <?php while($rows=mysqli_fetch_array($result)) 
		{ 
		?> 
		
		<h1><?php echo $rows['artwork_name']; ?></h1><br>
		<h2>Artist Name: <?php echo $rows['artist_name']; ?></h2><br>
		<h3>Description: <?php echo $rows['description']; ?></h3> <br>
		<h1>Amount: $<?php echo $rows['amount']; ?></h1> <br>
		<?php 
               } 
          ?> 
          <button id="button1" type="button" class="button button1" style="color: #fff"> <a href='payment.php?details=<?php echo 1; ?>' style="text-decoration: none">BUY</button> 
      </div>
      </div>
      </div>
	</body> 
	</html>