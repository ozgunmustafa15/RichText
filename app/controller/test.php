<?php
function sendMail($name, $email,$title, $message){
    $mail = new PHPMailer(true);

    try {
        /*
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'mustiozgun@gmail.com';                     // SMTP username
        $mail->Password   = '123123';                               // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
        $mail->Port       = 587;

         * */
        //Server settings
        //$mail->SMTPDebug = 2;
        $mail->isSMTP();
        $mail->Host       = setting('smtp_host') ;
        $mail->SMTPAuth   = true;
        $mail->Username   = setting('smtp_email');
        $mail->Password   = setting('smtp_password');
        $mail->CharSet   = 'UTF-8';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        //Recipients
        $mail->setFrom(setting('smtp_send_email'), setting('smtp_name'));
        $mail->addAddress($email, $name);     // Add a recipient

        // Gönderilecek dosyalar
        /*
        $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        */

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $title;
        $mail->Body    =$message;
        $mail->AltBody = $message;

        $mail->send();
        return true;
    } catch (Exception $e) {
       return false;
    }
}


