<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<!-- jQuery -->
<script type="text/javascript" src="script/ajax.js"></script>
<head>
    
    <style type="text/css">

        
		

    </style>
</head>

<div class="container">
	<h2></h2>	
		
				<nav class="navbar navbar-inverse">
				  <div class="container-fluid">
					<div class="navbar-header">
					  <a class="navbar-brand" href="index.php">ARTSS</a>
					</div>
					<ul class="nav navbar-nav">
					  <li><a href="index.php">Home</a></li>
					  <li><a href="Artworks.php">Artworks</a></li>
					  <li><a href="Artist.php">Artist</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<?php if (isset($_SESSION['user_id'])) { ?>
					<li class="nav_item"><p class="navbar-text"><strong>Welcome!</strong> You're signed in as <strong><?php echo $_SESSION['user_name']; ?></strong></p></li>
					<li class="nav_item"><a href="logout.php">Log Out</a></li>
					<?php } else { ?>
					<li class="nav_item"><a href="login.php"><span class="glyphicon glyphicon-user"></span>Login</a></li>
					<li class="nav_item"><a href="register.php"><span class="glyphicon glyphicon-log-in"></span>Sign Up</a></li>
					<?php } ?>
							
					  
					</ul>
				  </div>
				</nav>
</div>