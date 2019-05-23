<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include('Components/head.php')?>
<link rel="stylesheet" type="text/css" href="stylesheets/stylel.css">  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php include('Components/navbar.php')?>
<!--Login System -->
<div class="container-fluid">
	<div class="row">
	<div class="col-xs-0 col-sm-2 col-md-3 col-lg-3">
	<span></span>
	</div>
	<div class="col-xs-12 col-sm-8 col-md-6 col-lg-6">
<div class="main">
  <div class="header" style="margin-top:10px;">
  	<h2 style="border-bottom: solid 2px grey; padding-bottom:15px; padding-left:20px;">Login</h2>
  </div>
	 
  <form method="post" action="login.php" class="form-horizontal">
  <div class="form-group">
		<div class="col-sm-offset-4 col-sm-4">
			<?php include('errors.php'); ?>
		</div>
	</div>
	<div class="form-group">
  		<label class="control-label col-xs-3 col-sm-4" id="label">Username</label>
		<div class="col-xs-8 col-sm-7">
  		<input type="text" class="form-control" name="username" >
		</div>
  	</div>
	<div class="form-group">
  		<label class="control-label col-xs-3 col-sm-4" id="label">Password</label>
		<div class="col-xs-8 col-sm-7">
  		<input type="password" class="form-control" name="password">
		</div>
  	</div>
	<div class="form-group" style="text-align:center;">
		<div class="button-header">
            <a>Login</a>
        </div>
  	</div>
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-4">
  	<p>
  		<b>Not yet a member? <a href="register.php">Sign up</a></b>
  	</p>
	</div>
	</div>
  </form>
  </div>
</div>
<div class="col-xs-0 col-sm-2 col-md-3 col-lg-3">
<span></span>
	</div>
</div>
 </div>
 <!--Footer -->
 <?php include('Components/footer.php')?>
</body>
</html>