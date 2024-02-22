<?php



namespace app\src\Phpmailer;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Mailer
{
    public function sendEmail($to, $subject, $body) {
        $mail = new PHPMailer(true);

        try {
            // Cài đặt thông tin SMTP
            $mail->isSMTP();
            $mail->Host = 'smtp.example.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'your@example.com';
            $mail->Password = 'yourpassword';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            // Thiết lập thông tin email
            $mail->setFrom('your@example.com', 'Your Name');
            $mail->addAddress($to);

            // Thiết lập tiêu đề và nội dung email
            $mail->Subject = $subject;
            $mail->Body    = $body;

            // Gửi email
            $mail->send();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
}
