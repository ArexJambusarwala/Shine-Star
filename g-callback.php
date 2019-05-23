<?php
    require_once "config.php";
    $email    = "";
    $firstname    = "";
    $lastname   = "";
    $db = mysqli_connect('localhost', 'root', '', 'registration');
    if(isset($_SESSION['access_token']))
        $gClient->setAccessToken($_SESSION['access_token']);
    else if(isset($_GET['code'])) {
        $token = $gClient->fetchAccessTokenWithAuthCode($_GET['code']);
        $_SESSION['access_token']= $token;
    }
    else {
        header('Location: register.php');
        exit();
    }
    
    $oAuth = new Google_Service_Oauth2($gClient);
    $userData = $oAuth->userinfo_v2_me->get();

    echo "<pre>";
    var_dump($userData);

    $_SESSION['email'] = $userData['email'];
    $_SESSION['gender'] = $userData['gender'];
    $_SESSION['picture'] = $userData['picture'];
    $_SESSION['familyName'] = $userData['familyName'];
    $_SESSION['givenName'] = $userData['givenName'];

    $firstname = mysqli_real_escape_string($db, $_SESSION['givenName']);
    $lastname = mysqli_real_escape_string($db, $_SESSION['familyName']);
    $email = mysqli_real_escape_string($db, $_SESSION['email']);
    $query = "INSERT INTO users (firstname, lastname, email) 
  			  VALUES('$firstname', '$lastname', '$email')";
  	mysqli_query($db, $query);

    header('Location: index.php');
    exit();
?>