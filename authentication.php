<?php
session_start();
include('dbconn.php');
if(isset($_SESSION['verified_user_id'])){
    $uid= $_SESSION['verified_user_id'];
    $idTokenString = $_SESSION['idtoken'];



    try {
        $verifiedIdToken = $auth->verifyIdToken($idTokenString);
       // echo "Working";
    } catch (InvalidToken $e) {
        echo 'The token is invalid: ' . $e->getMessage();
        $_SESSION['expiry_status'] = "Token Expired";
        header('Location:logout.php');
        exit(); 
        

    } catch (\InvalidArgumentException $e) {
        echo 'The token could not be parsed: ' . $e->getMessage();
        $_SESSION['expiry_status'] = "Token Expired/Invalid Login";
        header('Location:logout.php');
        exit(); 
    }

}
else{
    $_SESSION['status'] = "Login to Access this page";
    header('Location:dashboard.php');
    exit(); 
}
