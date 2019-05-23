<?php require_once "config.php";

if(isset($_SESSION['access_token'])){
	header('Location: index.php');
	exit();
}
	$loginURL = $gClient->createAuthUrl();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include('Components/head.php')?>
<link rel="stylesheet" type="text/css" href="stylesheets/stylel.css">  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<!-- Navbar -->
<?php include('Components/navbar.php')?>
<div class="container-fluid">
<div class="row">
<div class="col-xs-0 col-sm-2 col-md-3 col-lg-3">
	<span></span>
	</div>
	<div class="col-xs-12 col-sm-8 col-md-6 col-lg-6">
<div class="main">
  <!--<div class="header" style="margin-top:10px;">
  	<h1 style="border-bottom: solid 4px black; padding-bottom:15px; padding-left:20px;">Register</h1>
  </div>-->
	
  <form method="post" action="register.php" class="form-horizontal">
	<!--<div class="form-group">
		<div class="col-sm-offset-4 col-sm-4">
			<?php /*include('errors.php');*/ ?>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-xs-3 col-sm-4">Username</label>
		<div class="col-xs-8 col-sm-7">
			<input type="text" class="form-control" name="username" value="<?php /*echo $username;*/ ?>">
		</div>
  	</div>
	<div class="form-group">
		<label class="control-label col-xs-3 col-sm-4">Email</label>
		<div class="col-xs-8 col-sm-7">
			<input type="email" class="form-control" name="email" value="<?php/* echo $email; */?>">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-xs-3 col-sm-4">Password</label>
		<div class="col-xs-8 col-sm-7">
			<input type="password" class="form-control" name="password_1">
		</div>
  	</div>
	<div class="form-group">
		<label class="control-label col-xs-3 col-sm-4">Confirm password</label>
		<div class="col-xs-8 col-sm-7">
			<input type="password" class="form-control" name="password_2">
		</div>
		</div>
		<div class="form-group">
		<label class="control-label col-xs-3 col-sm-4">Mobile Number</label>
		<div class="col-xs-8 col-sm-7">
			<input type="tel" class="form-control" name="phone" pattern="[0-9]{4}-[0-9]{2}-[0-9]{4}" value="<?php /*echo $phone; */?>">
		</div>
		</div>
		<div class="form-group">
		<label class="control-label col-xs-3 col-sm-4">Address</label>
		<div class="col-xs-8 col-sm-7">
			<input type="text" class="form-control" name="address" value="<?php/* echo $address; */?>">
		</div>
  	</div>
	<div class="form-group" style="text-align:center;">
				<button type="submit" name="reg_user">
					<div class="button-header">
        	    <a>Register</a>
        	</div>
				</button>
  	</div>-->
		<div class="form-group" style="text-align:center;">
			<input type="button" onClick="window.location = '<?php echo $loginURL ?>'" value="Login with Google" class="btn btn-danger">
		</div>
		<!--
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-5">
  	<p>
  		<b>Already a member?</b> <a href="login.php"><b>Sign in</b></a>
  	</p>
		</div>
	</div>-->
  </form>
 </div>
</div>
<div class="col-xs-0 col-sm-2 col-md-3 col-lg-3">
<span></span>
	</div>
</div>
</div>
<!-- Footer -->
<?php/* include('Components/footer.php')*/?>
<!-- Footer -->

<?php 
  echo "<script>";
  if(isset($_SESSION['access_token'])){
    echo "document.getElementById('logout').style.display='inline-block';";
    echo "document.getElementById('register').style.display='none';";
  }
  else
  {
    echo "document.getElementById('register').style.display='inline-block';";
    echo "document.getElementById('logout').style.display='none';";
  }
  echo "</script>";

?>
</body>
</html>