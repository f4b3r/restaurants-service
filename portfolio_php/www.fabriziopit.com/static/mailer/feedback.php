<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';
require 'POP3.php';
require 'form_setting.php';

if(isset($_POST)){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $messages  = "<h3>New message from the site " .$fromName. "</h3> \r\n";
    $messages .= "<ul>";
    $messages .= "<li><strong>Name: </strong>" .$name."</li>";
    $messages .= "<li><strong>Email: </strong>" .$email."</li>";
    $messages .= "<li><strong>Message: </strong>" .$message."</li>";
    $messages .= "</ul> \r\n";

    // Replace sender@example.com with your "From" address.
// This address must be verified with Amazon SES.
    $sender = 'pfabri1983@msn.com';
    $senderName = 'Fabrizio Pititto';

// Replace recipient@example.com with a "To" address. If your account
// is still in the sandbox, this address must be verified.
    $recipient = 'pititto.fabrizio@gmail.com';

// Replace smtp_username with your Amazon SES SMTP user name.
    $usernameSmtp = 'AKIA6DNO6GQYEUCRY7WS';

// Replace smtp_password with your Amazon SES SMTP password.
    $passwordSmtp = 'BGCDPpw43Gwm8M1nlHvmU+fzbS+BQ/KSQFEKgzRnzyP3';

// Specify a configuration set. If you do not want to use a configuration
// set, comment or remove the next line.
   // $configurationSet = 'ConfigSet';

// If you're using Amazon SES in a region other than US West (Oregon),
// replace email-smtp.us-west-2.amazonaws.com with the Amazon SES SMTP
// endpoint in the appropriate region.
    $host = 'email-smtp.us-west-2.amazonaws.com';
    $port = 587;

// The subject line of the email
    $subject = 'Amazon SES test (SMTP interface accessed using PHP)';

// The plain-text body of the email
    $bodyText =  "Email Test\r\nThis email was sent through the
    Amazon SES SMTP interface using the PHPMailer class.";

// The HTML-formatted body of the email
    $bodyHtml = '<h1>Email Test</h1>
    <p>This email was sent through the
    <a href="https://aws.amazon.com/ses">Amazon SES</a> SMTP
    interface using the <a href="https://github.com/PHPMailer/PHPMailer">
    PHPMailer</a> class.</p>';

    $mail = new PHPMailer(true);

    try {
        // Specify the SMTP settings.
        $mail->isSMTP();
        $mail->setFrom($sender, $senderName);
        $mail->Username   = $usernameSmtp;
        $mail->Password   = $passwordSmtp;
        $mail->Host       = $host;
        $mail->Port       = $port;
        $mail->SMTPAuth   = true;
        $mail->SMTPSecure = 'tls';
        //$mail->addCustomHeader('X-SES-CONFIGURATION-SET', $configurationSet);

        // Specify the message recipients.
        $mail->addAddress($recipient);
        // You can also add CC, BCC, and additional To recipients here.

        // Specify the content of the message.
        $mail->isHTML(true);
        $mail->Subject    = $subject;
        $mail->Body       = $bodyHtml;
        $mail->AltBody    = $bodyText;
        $mail->Send();
        print json_encode(array('status'=>0));
        echo "Email sent!" , PHP_EOL;
    } catch (phpmailerException $e) {
        print json_encode(array('status'=>1));
        echo "An error occurred. {$e->errorMessage()}", PHP_EOL; //Catch errors from PHPMailer.
    } catch (Exception $e) {
        print json_encode(array('status'=>1));
        echo "Email not sent. {$mail->ErrorInfo}", PHP_EOL; //Catch errors from Amazon SES.
    }












    /*

    $mail->isSMTP();                        // Set mailer to use SMTP
    $mail->Host       = 'email-smtp.us-west-2.amazonaws.com';    // Specify main SMTP server
    $mail->SMTPAuth   = true;               // Enable SMTP authentication
    $mail->Username   = 'AKIA6DNO6GQYEUCRY7WS';     // SMTP username
    $mail->Password   = 'BGCDPpw43Gwm8M1nlHvmU+fzbS+BQ/KSQFEKgzRnzyP3';         // SMTP password
    $mail->SMTPSecure = 'tls';              // Enable TLS encryption, 'ssl' also accepted
    $mail->Port       = 587;                // TCP port to connect to


    if(!$mail->send()) {
        print json_encode(array('status'=>0));
    } else {
        print json_encode(array('status'=>1));
    }
*/
}

?>