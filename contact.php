<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_form = 'cmatos5001@gmail.com';

$email_subject = "New Form Submission";

$email_body = "User Name: $name. \n".
                             "User Email: $visitor_email. \n".
                               "user Message: $message. \n.";


$to = "cmatos5001@gmail.com";

$headers = "From: $email_form \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: form.html")


?>
