<?php
session_start();

//Google API PHP Library includes
require_once 'vendor/autoload.php';

// Set config params to acces Google API
 $client_id = 'XXXXXXX;
 $client_secret = 'XXXXXXXXX';
 $redirect_uri = 'https://phpflow.com/google-oauth-php';
 
//Create and Request to access Google API
$client = new Google_Client();
$client->setApplicationName("Google OAuth Login With PHP");
$client->setClientId($client_id);
$client->setClientSecret($client_secret);
$client->setRedirectUri($redirect_uri);

$objRes = new Google_Service_Oauth2($client);

//Add access token to php session after successfully authenticate
if (isset($_GET['code'])) {
  $client->authenticate($_GET['code']);
  $_SESSION['access_token'] = $client->getAccessToken();
  header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
}

//set token
if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
  $client->setAccessToken($_SESSION['access_token']);
}

//store with user data
if ($client->getAccessToken()) {
  $userData = $objRes->userinfo->get();
  if(!empty($userData)) {
	//insert data into database
  }
  $_SESSION['access_token'] = $client->getAccessToken();
} else {
  $googleAuthUrl  =  $client->createAuthUrl();
}
?>