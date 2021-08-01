<?php
session_start();
include('dbconn.php');


if (isset($_POST['login_btn'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    try {

        $user = $auth->getUserByEmail("$email");
        try {
            $signInResult = $auth->signInWithEmailAndPassword($email, $password);
            $idtoken = $signInResult->idToken();





            try {
                $verifiedIdToken = $auth->verifyIdToken($idtoken);
                $uid = $verifiedIdToken->claims()->get('sub');
                $_SESSION['verified_user_id'] = $uid;
                $_SESSION['idtoken'] = $idtoken;


                $_SESSION['status'] = "Logged in Successfully";
                header('Location:dashboard.php');
                exit();
            } catch (InvalidToken $e) {
                echo 'The token is invalid: ' . $e->getMessage();
            } catch (\InvalidArgumentException $e) {
                echo 'The token could not be parsed: ' . $e->getMessage();
            }
        } catch (Exception $e) {
            $_SESSION['status'] = "Wrong Password";
            header('Location:login.php');
            exit();
        }
    } catch (\Kreait\Firebase\Exception\Auth\UserNotFound $e) {
        $_SESSION['status'] = "Invalid Email Address";
        header('Location:login.php');
        exit();
    }
} else {
    $_SESSION['status'] = "not allowed";
    header('Location:login.php');
    exit();
}