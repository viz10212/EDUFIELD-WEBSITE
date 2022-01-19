<?php
$name = $_POST['name']
$visitor_email = $_POST['email']
$subject = $_POST['subject']
$message = $_POST['message']

$email_form = 'vg780538@gmail.com';
$email_subject = 'New from submission';
$email_body = "user Name: $name.\n".
               "user Email: $visitor_email.\n".
                "subject: $subject.\n".
                 "user message: $message.\n";

$to = 'vishal@gmail.com';                 

$headers = "from: $email_from \r\n";
$headers .="reply-to: $visitor_email\r\n";

mail($to,$email_subject,$email_body,$headers);

header("location: contact.html");
?>