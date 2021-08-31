<?php

use PHPMailer\PHPMailer\PHPMailer;


class PHPMailerLibrary {

    public function __construct() {
        
    }

    public function load() {
        //PHPMailer
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->SMTPDebug = 0;
        $mail->Host = "smtp.gmail.com"; //host name
        $mail->SMTPAuth = TRUE;
        $mail->isHTML(TRUE);
        $mail->Username = "olyviah.amwoma@strathmore.edu";   //put your smtp username
        $mail->Password = "Admin2020";  // your smtp password
        $mail->Port = 2525;
        $mail->CharSet="utf-8";
        $mail->From = "olyviah.amwoma@strathmore.edu";   // from email you can replace 
        $mail->FromName = "QrContact and Screening";  // from name may be your company 
        return $mail;
    }

}