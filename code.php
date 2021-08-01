<?php
session_start();
include('dbconn.php');


if (isset($_POST['enable_disable_ac'])) {

    $disable_enable = $_POST['select_enable_disable'];
    $userid = $_POST['userid'];

    var_dump($userid);

    if ($disable_enable == 'disable') {

        $updatedUser = $auth->disableUser($userid);
        $msg = 'Account Disabled';
    } else {
        $updatedUser = $auth->enableUser($userid);
        $msg = 'Account Enabled';
    }
    if ($updatedUser) {
        $_SESSION['status'] = $msg;
        header("Location:list_users.php");
        exit();
    } else {
        $_SESSION['status'] = "Something Went Wrong";
        header("Location:list_users.php");
        exit();
    }
}


if (isset($_POST['delete_user'])) {

    $uid = $_POST['delete_user'];
    var_dump($uid);

    try {
        //code...
        $auth->deleteUser($uid);

        $_SESSION['status'] = "user  deleted
        successfully";
        header("Location:list_users.php");
        exit();
    } catch (Exception $e) {
        //throw $th;
        $_SESSION['status'] = "No id Found";
        header("Location:list_users.php");
        exit();
    }
}












if (isset($_POST['user_edit'])) {

    $fullname = $_POST["dname"];
    $mobile = $_POST["phone"];

    $uid = $_POST['userid'];

    $properties = [
        'displayName' => $fullname,
        'phoneNumber' => $mobile,

    ];
    $updateUser = $auth->updateUser($uid, $properties);
    if ($updateUser) {
        $_SESSION['status'] = "user  edited successfully";
        header("Location:list_users.php");
        exit();
    } else {
        $_SESSION['status'] = "user  edited successfully";
        header("Location:list_users.php");
        exit();
    }
}
if (isset($_POST['edit'])) {
    $key = $_POST['key'];
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $phonenumber = $_POST["phonenumber"];


    $updateData = [
        'email' => $email,
        'phoneNumber' =>  $phonenumber,
        'fullname' => $fullname,

    ];
    $ref_table = 'Users/' . $key;
    $database->getReference($ref_table)->update($updateData);
    $updatequery = $database->getReference($ref_table)->update($updateData);

    if ($updatequery) {
        $_SESSION['status'] = "contact edited successfully";
        header("Location:dashboard.php");
    } else {
        $_SESSION['status'] = "contact not edited ";
        header("Location:dashboard.php");
    }
}