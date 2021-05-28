<?php 
ob_start();
include('header.php');
include_once("db_connect.php");
session_start();
if(isset($_SESSION['user_id'])) {
	header("Location: index.php");
}
$error = false;
if (isset($_POST['signup'])) {
	$full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
	$address = mysqli_real_escape_string($conn, $_POST['address']);
	$mobno = mysqli_real_escape_string($conn, $_POST['mobno']);
	
	$card_no = mysqli_real_escape_string($conn, $_POST['card_no']);	
	
	
		if(mysqli_query($conn, "INSERT INTO payment(full_name, address, mobno, card_no) VALUES('" . $full_name . "', '" . $address . "', '" . $mobno . "','" . $card_no . "')")) {
			$success_message = "Successfully Registered! <a href='success.php'></a>";
		} else {
			$error_message = "Error in registering...Please try again later!";
		}
	
}
?>
<head>
 <title>Sign Up</title>
 <script type="text/javascript" src="script/ajax.js"></script>
 <style>
			body{
			  background-image: url("img/bg3.jpg");
			  
			  margin :0;
			  min-height: 100vh;
			}
			
</style>
</head>


<div class="container">
<h2></h2>	
	<div class="row">
		<div class="col-md-4 col-md-offset-4 well">
			<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="signupform">
				<fieldset>
					<legend>Sign Up</legend>

					<div class="form-group">
						<label for="name">Full Name</label>
						<input type="text" name="fullname" placeholder="Enter Full Name" required value="<?php if($error) echo $full_name; ?>" class="form-control" />
						<span class="text-danger"><?php if (isset($uname_error)) echo $uname_error; ?></span>
					</div>
					
					<div class="form-group">
						<label for="name">Adress</label>
						<input type="text" name="address" placeholder="address" required value="<?php if($error) echo $address; ?>" class="form-control" />
						<span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
					</div>

					<div class="form-group">
						<label for="name">mobno</label>
						<input type="text" name="mobno" placeholder="mobno" required class="form-control" />
						<span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
					</div>

					
					
					<div class="form-group">
						<label for="name">card_no</label>
						<input type="text" name="card_no" placeholder="card_no" required class="form-control" />
						<span class="text-danger"><?php if (isset($cpassword_error)) echo $cpassword_error; ?></span>
					</div>
					
					<div class="form-group">
						<input type="submit" name="signup" value="Make Payment" class="btn btn-primary"  ><a href='success.php'></input>
					</div>
				</fieldset>
			</form>
			<span class="text-success"><?php if (isset($success_message)) { echo $success_message; } ?></span>
			<span class="text-danger"><?php if (isset($error_message)) { echo $error_message; } ?></span>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-md-offset-4 text-center">	
		Already Registered? <a href="login.php">Login Here</a>
		</div>
	</div>	
	
</div>
<?php include('footer.php');?> 