<?php
require 'PHPMailer/class.phpmailer.php';
require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer();
$mail->isSMTP(true); // telling the class to use SMTP
$mail->SMTPOptions = array(
'ssl' => array(
'verify_peer' => false,
'verify_peer_name' => false,
'allow_self_signed' => true
)
);
$mail->SMTPSecure = 'tls';
$mail->Host = 'tls://smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = 'akshaysagar.g23@gmail.com';          // SMTP username
$mail->Password = 'asagarg0323'; // SMTP password


//$mail->Username = "your Email address"; // SMTP username
//$mail->Password = "your Email password here"; // SMTP password
// TCP port to connect to
// $mail->SMTPDebug = 1;


$mail->setFrom('akshaysagar.g23@gmail.com', 'CRM');
$mail->addAddress("ganeshprasadn1959@gmail.com");   // Add a recipient
//$mail->setFrom('your Email address');
//$mail->AddAddress("user/client email address");
$mail->Subject = "some text, what ever you want";
$mail->Body = "Email info/message here. ";
$mail->WordWrap = 70;
if($mail->Send())
{
    echo "mail sent";
}
else
{
    echo "mail not sent".$mail->ErrorInfo;
}

?>