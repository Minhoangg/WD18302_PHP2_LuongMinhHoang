<?php

namespace app\src\Phpmailer;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Mailer
{
    public function sendEmail($subject_content, $body_content, $email_address)
    {

        $mail = new PHPMailer();

        $mail->IsSMTP(); // enable SMTP

        $mail->SMTPAuth = true; // authentication enabled
        $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 465; // or 587
        $mail->IsHTML(true);
        $mail->Username = "lmhoang698@gmail.com";
        $mail->Password = "txha jogq qoee qeib";

        $emailSetfrom = 'lmhoang698@gmail.com';

        $name = 'Lương Minh Hoàng';
        $encoded_subject = mb_encode_mimeheader($name, 'UTF-8');


        $mail->SetFrom($emailSetfrom, $encoded_subject);

        $subject = $subject_content;
        $encoded_subject = mb_encode_mimeheader($subject, 'UTF-8');

        $mail->Subject = $encoded_subject;
        $mail->Body = $body_content;

        $mail->AddAddress($email_address);

        if (!$mail->Send()) {
            echo 'thất bại';
        } else {
            echo 'ok';
        }
    }
}