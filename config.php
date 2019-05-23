<?php 
    session_start();
    require_once "GoogleApi/vendor/autoload.php";
    require_once "Facebook/autoload.php";
    $gClient = new Google_Client();
    $gClient->setClientId("651252483483-mfup2pjloqpgv2ihjddncv7og8c0mr5u.apps.googleusercontent.com");
    $gClient->setClientSecret("uwDgwmnfpAa_Y7QopOfhOs2a");
    $gClient->setApplicationName("Shine Foods");
    $gClient->setRedirectUri("http://localhost/shinestar/g-callback.php");
    $gClient->setScopes(array("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email"));
?>