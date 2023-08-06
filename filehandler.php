<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];


$email_form='prajeethprajee2@gmail.com';

$email_subject ='new form submission'

$email_body = "user name: $name.\".
"user email:$visitor_email.\n".
"subject:$subject.\n".
"user message:$message.\n";

$to='prajeethprajee2@gmail';
$headers="form:$email_form\r\n";
$headers=" reply-to :$visitor_email  \r\n";

mail($to,$email_subject,$email_body,$headers);
header("location:contact.html");
?>
