<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '/var/www/mvlandscape.net/PHPMailer-master/PHPMailer-master/src/Exception.php';
require '/var/www/mvlandscape.net/PHPMailer-master/PHPMailer-master/src/PHPMailer.php';
require '/var/www/mvlandscape.net/PHPMailer-master/PHPMailer-master/src/SMTP.php';

// Instantiation and passing [ICODE]true[/ICODE] enables exceptions
$mail = new PHPMailer(true);

if(isset($_POST['submit'])) {
    $subject = $_POST['subject'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];
    $ipaddress = $_SERVER['REMOTE_ADDR'];

    // Message to me
    //$mailTo = "alfredoeb96@gmail.com":
    $headers = "From: ".$mailFrom;
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; carset=iso-8859-1\n";
    $txt = "You have received an e-mail from IPADDRESS: ".$ipaddress." \r\n Email: ".$mailFrom.".\r\n Subject: ".$subject."\r\n Message:".$message;

    //try {
            //Server settings
        $mail->SMTPDebug = 2;                                       // Enable verbose debug output
        $mail->isSMTP();                                            // Set mailer to use SMTP
        $mail->Host       = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = $_ENV["EMAIL_HANDLE"];                  // SMTP username use getenv() to get the value in production
        $mail->Password   = $_ENV["EMAIL_PWD"].;                    // SMTP password use getenv() to get the value in production
        $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, [ICODE]ssl[/ICODE] also accepted
        $mail->Port       = $_ENV["EMAIL_PORT"];                    // TCP port to connect to use getenv() to get the value in production

        //Recipients
        $mail->setFrom("support@mvlandscape.net", 'Mvlandscape');
        $mail->addAddress($mailFrom);
        $mail->addReplyTo('support@mvlandscape.net', 'Information');
        $mail->addCC('support@mvlandscape.net');                             // This is needed for production
        //$mail->addBCC('bcc@example.com');

        // Attachments
        //$mail->addAttachment('/home/cpanelusername/attachment.txt');         // Add attachments
        //$mail->addAttachment('/home/cpanelusername/image.jpg', 'new.jpg');    // Optional name

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = $txt;

        if ($mail->send()) {
          header("Location: /");
        } else {
          echo "Message could not be sent. Mailer Error";
        }
    //}
    //} catch (Exception $e) {
      //  echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    //}
}
?>