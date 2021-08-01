<?php
session_start();
include('dbconn.php');

if (isset($_POST['register_btn'])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $phoneno = $_POST["phoneno"];
    $password = $_POST["password"];

    $userProperties = [
        'email' => $email,
        'emailVerified' => false,
        'phoneNumber' => '+254' . $phoneno,
        'password' => $password,
        'displayName' => $username,

    ];
    var_dump($userProperties);
    $createdUser = $auth->createUser($userProperties);

    if ($createdUser) {
        $_SESSION['status'] = "User Created and Registered Successfuly";
        header('Location:register.php');
        exit();
    } else {
        $_SESSION['status'] = "User Not Registered Successfuly";
        header('Location:register.php');
        exit();
    }
}