<?php
$to = $_POST['email_to'];
$subject= $_POST['subject'];
$message = $_POST['message'];
$headers 'From: webmaster@example.com'. "\r\n" .
	'Reply-To: webmaster@example.com' . "\r\n". 
	'X-Mailer: PHP/'. phpversion();

mail($to, $subject, $message, $headers);

echo "Message sent at ";
echo date ("h:i:s");
?>