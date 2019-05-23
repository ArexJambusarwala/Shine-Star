<?php 
  include('server.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('Components/head.php')?>
    <link rel="stylesheet" type="text/css" href="Stylesheets/orderstyles.css">
    <!--Font-->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <?php  include('./Components/navbar.php')?>
    <!-- Navbar -->
    
    <!-- Not LoggedIn -->
    <div id="not-login-wrapper"> 
      <br><br>
      <h1 id="not-login">You have to Login to continue</h1><br><br><br><br>
      <div class="button-wrapper" style="text-align: center;">
        <div class="button-header" style="display: inline-block;">
          <a href="register.php">Login Now</a>
        </div>
      </div><br><br><br><br>
    </div>
    <!-- Not LoggedIn -->

    <!-- Logged in -->
    <div id="login-wrapper">
      <!-- Number of orders -->
      <h1 id="no-of-packets">Please select the number of packets</h1>
      <div class="container-fluid">
        <div class="row" style="border:3px solid #2c3e50; border-radius:15px">
          <div class="col-xs-0 col-sm-0 col-md-1 col-lg-2">
            <span></span>
          </div>
          <div class="col-xs-12 col-sm-7 col-md-6 col-lg-5" style="text-align:left;">
            <h2>Chapati Packets</h2>
            <h3>Paneer Curry</h3>
            <h3>Brinjal Curry</h3>
          </div>
          <div class="col-xs-12 col-sm-5 col-md-4 col-lg-3 no-input">
            <div class="button-header" style="display: inline-block;">
              <a id="remove-chapati" onClick="removeChapati();"><i class="fa fa-minus" aria-hidden="true"></i></a>
            </div>
            <div id="chapati-no" style="display: inline">
              <input type="number" value="0" placeholder="0" style="width:64.575px; height:48.4px; border-radius:25px; text-align:center;
              border:1px solid #4ca1af; margin-left:-10px;" id="chapati-number"></input>
            </div>  
            <div class="button-header" style="display: inline-block;">
              <a id="add-chapati" onClick="addChapati();"><i class="fa fa-plus" aria-hidden="true"></i></a>
            </div>
          </div>
          <div class="col-xs-0 col-sm-0 col-md-1 col-lg-2">
            <span></span>
          </div>
        </div><br>
        <div class="row" style="border:3px solid #2c3e50; border-radius:15px">
          <div class="col-xs-0 col-sm-0 col-md-1 col-lg-2">
            <span></span>
          </div>
          <div class="col-xs-12 col-sm-7 col-md-6 col-lg-5" style="text-align:left;">
            <h2>Pulihora</h2>
            <h3>Peanut Powder Rice</h3>
            <h3>Brinjal Curry</h3>
          </div>
          <div class="col-xs-12 col-sm-5 col-md-4 col-lg-3 no-input">
            <div class="button-header" style="display: inline-block;">
              <a onClick="removeRice();"><i class="fa fa-minus" aria-hidden="true"></i></a>
            </div>
            <div id="rice-no" style="display: inline">
              <input type="number" value="0" placeholder="0" style="width:64.575px; height:48.4px; border-radius:25px; text-align:center;
              border:1px solid #4ca1af; margin-left:-10px;" id="rice-number"></input>
            </div>  
            <div class="button-header" style="display: inline-block;">
              <a id="add-rice" onClick="addRice();"><i class="fa fa-plus" aria-hidden="true"></i></a>
            </div>
          </div>
          <div class="col-xs-0 col-sm-0 col-md-1 col-lg-2">
            <span></span>
          </div>
        </div><br>
      </div>
      <!-- Number of orders -->

      <!-- Address and Phone -->
      <h2 id="address-phone">Please enter your delivery address and phone number</h2><br><br>
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-0 col-sm-2 col-md-3 col-lg-3">
	          <span></span>
	        </div>
	        <div class="col-xs-12 col-sm-8 col-md-6 col-lg-6">
            <form method="post" action="placeorder.php" class="form-horizontal">
              <div class="form-group">
		            <label class="control-label col-xs-3 col-sm-4">Phone</label>
		            <div class="col-xs-8 col-sm-7">
			            <input type="tel" class="form-control" name="phone" value="" id="order-phone"></input>
		            </div>
  	          </div>
              <div class="form-group">
		            <label class="control-label col-xs-3 col-sm-4">Address</label>
		            <div class="col-xs-8 col-sm-7">
		            	<textarea rows="4" class="form-control" name="address" value="" id="order-address"></textarea>
		            </div>
  	          </div>
              <div class="form-group" style="display:none;">
		            <label class="control-label col-xs-3 col-sm-4">Chapati</label>
		            <div class="col-xs-8 col-sm-7">
		            	<input type="number" class="form-control" name="chapati" value="0" id="final-chapati"></input>
		            </div>
  	          </div>
              <div class="form-group" style="display:none;">
		            <label class="control-label col-xs-3 col-sm-4">Rice</label>
		            <div class="col-xs-8 col-sm-7">
		            	<input type="number" class="form-control" name="rice" value="0" id="final-rice"></input>
		            </div>
  	          </div>
              <div class="form-group" style="display:none;">
		            <label class="control-label col-xs-3 col-sm-4">First Name</label>
		            <div class="col-xs-8 col-sm-7">
		            	<input type="text" class="form-control" name="firstname" value="<?php echo $_SESSION['givenName']?>"></input>
		            </div>
  	          </div>
              <div class="form-group" style="display:none;">
		            <label class="control-label col-xs-3 col-sm-4">Last Name</label>
		            <div class="col-xs-8 col-sm-7">
		            	<input type="text" class="form-control" name="lastname" value="<?php echo $_SESSION['familyName']?>"></input>
		            </div>
  	          </div>
              <div class="form-group" style="display:none;">
		            <label class="control-label col-xs-3 col-sm-4">Email</label>
		            <div class="col-xs-8 col-sm-7">
		            	<input type="text" class="form-control" name="email" value="<?php echo $_SESSION['email']?>"></input>
		            </div>
  	          </div>
              <div class="form-group" style="display:none;">
		            <label class="control-label col-xs-3 col-sm-4">Date</label>
		            <div class="col-xs-8 col-sm-7">
                  <input type="text" class="form-control" name="date" value="<?php 
                  date_default_timezone_set('Asia/Kolkata');
                  $date = date('d/m/Y h:i:s a', time());
                  ?>"></input>
		            </div>
  	          </div>
              <div class="form-group" style="text-align:center;">
		            <button type="submit" class="btn btn-primary" name="reg_user">Place Order</button>
  	          </div>
            </form>
          </div>
          <div class="col-xs-0 col-sm-2 col-md-3 col-lg-3">
	          <span></span>
	        </div>
        </div>
      </div>
      <!-- Address and Phone -->
    </div>
    <!-- Logged in -->


    <!--Footer-->
		<?php include('./Components/footer.php')?>
    <!--Footer -->
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
      echo "<script>";
      if(isset($_SESSION['access_token'])){
        echo "document.getElementById('login-wrapper').style.display='block';";
        echo "document.getElementById('not-login-wrapper').style.display='none';";
      }
      else
      {
        echo "document.getElementById('not-login-wrapper').style.display='block';";
        echo "document.getElementById('login-wrapper').style.display='none';";
      }
      echo "</script>";
    ?>
    <!-- Number -->
    <script>
      function removeChapati(){
        var v=document.getElementById('chapati-number').value;
        if(v==0)
        {
          ;
        }
        else
        {
          v--;
          document.getElementById('chapati-number').value=v;
          document.getElementById('chapati-number').innerHTML=v;
          document.getElementById('final-chapati').value = document.getElementById('chapati-number').value;
        }
      }
      function addChapati(){
        var v=document.getElementById('chapati-number').value;
        v++;
        document.getElementById('chapati-number').value=v;
        document.getElementById('chapati-number').innerHTML=v;
        document.getElementById('final-chapati').value = document.getElementById('chapati-number').value;
      }
      function removeRice(){
        var v=document.getElementById('rice-number').value;
        if(v==0)
        {
          ;
        }
        else
        {
          v--;
          document.getElementById('rice-number').value=v;
          document.getElementById('rice-number').innerHTML=v;
          document.getElementById('final-rice').value = document.getElementById('rice-number').value;
        }
      }
      function addRice(){
        var v=document.getElementById('rice-number').value;
        v++;
        document.getElementById('rice-number').value=v;
        document.getElementById('rice-number').innerHTML=v;
        document.getElementById('final-rice').value = document.getElementById('rice-number').value;
      }
    </script>

</body>
</html>