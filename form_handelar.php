<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_form = 'info@yourwebsite.com';

$email_subject = 'New Form Submisson';

$email_body = "User Name : $name.\n".
               "User Email : $visitor_email.\n".
               "User Subject : $subject.\n".
               "User Message : $message.\n";

$to = 'shakil.hossain450s@gmail.com';
$headers = "Form : $email_form \r\n";
$headers .= "Reply_To : $visitor_email \r\n";

mail ($to, $email_subject, $email_body, $headers);
mail ("Location : contact.html");

?>