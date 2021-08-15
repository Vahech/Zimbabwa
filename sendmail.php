<?php 
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$message = $_POST['message'];
$from = $email;
$to      = 'vahe.chobanyan@gmail.com';
$cc      = 'gagiksarg@gmail.com';
$subject = 'e-mail from luckystar';

//$headers = 'From: '.$from . "\r\n" .'Reply-To: '.$from. "\r\n" .'X-Mailer: PHP/' . phpversion();
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
$headers .= 'From: '.$from . "\r\n";
$headers .= 'Cc: '.$cc .  "\r\n";
$headers .= 'Reply-To: '.$from. "\r\n";
$headers .= 'X-Mailer: PHP/' . phpversion();

if(!mail($to, $subject, $message, $headers)) {
    $msg= 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
$msg='Your '.$fullname.' message has been sent';

 }
?>
<html>
<head>
 <meta http-equiv="refresh" content="5;url=http://www.luckystarmodels.com">
</head>

<body>

<h2 align="center" style="margin-top:200px"><?php echo($msg); ?></h2>

</body>

</html>

