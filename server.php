<?php
session_start();

$firstname = "";
$lastname = "";
$email    = "";
$phone = "";
$address = "";
$date = "";
$chapati = "";
$rice = "";
$errors = array(); 

$db = mysqli_connect('localhost', 'root', '', 'registration');

if (isset($_POST['reg_user'])) {
  $phone = mysqli_real_escape_string($db, $_POST['phone']);
  $address = mysqli_real_escape_string($db, $_POST['address']);
  $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
  $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
  date_default_timezone_set('Asia/Kolkata');
  $date = date('d/m/Y h:i:s a', time());
  $date = mysqli_real_escape_string($db, $date);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $chapati = mysqli_real_escape_string($db, $_POST['chapati']);
  $rice = mysqli_real_escape_string($db, $_POST['rice']);
  

  if (count($errors) == 0) {

  	$query = "INSERT INTO orders (firstname, lastname, email, phone, address, date, chapati, rice) 
  			  VALUES('$firstname', '$lastname', '$email', '$phone', '$address', '$date', '$chapati', '$rice')";
    mysqli_query($db, $query);
    header('Location: index.php');
  }
}

?>