<?php


use PHPMailer\PHPMailer\PHPMailer;

include './vendor/autoload.php';

class SMTPMailer {

    public function load(){
        //PHPMailer
        // $mail = new PHPMailer();
        // $mail->isSMTP();
        // $mail->SMTPDebug =0;
        // $mail->Host ="smtp.gmail.com";
        // $mail->SMTPAuth = TRUE;
        // $mail->isHTML(TRUE);
        // $mail->Username="olyviah.amwoma@strathmore.edu";
        // $mail->Password="Admin2020";
        // $mail->Port=2525;
        // $mail->CharSet ="utf-8";
        // $mail->From="olyviah.amwoma@gmail.com";
        // $mail->FromName="Qrcode Contacts";
        $phpmailer = new PHPMailer();
$phpmailer->isSMTP();
$phpmailer->Host = 'smtp.mailtrap.io';
$phpmailer->SMTPAuth = true;
$phpmailer->Port = 2525;
$phpmailer->Username = '34c8277f707db4';
$phpmailer->Password = '81c20153154124';
$phpmailer->From="gichukicynthia1@gmail.com";
        return $phpmailer;

       

    

    }
}