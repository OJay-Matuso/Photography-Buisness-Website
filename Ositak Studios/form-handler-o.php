<?php
$name = $_POST['name'];
$vistitor_email = $_POST['email'];
$subject = $_POST['desired deal package'];
$messasge = $_POST['message'];

$email_from = 'OsitikStudios.com';

$email_subjecet =  'New Form Submission';

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                    "Subject: $subject.\n".
                        "User Message: $message.\n";

$to = 'Katisokasane@gmail.com';

$headers = "From: $email_from \r\n";

$headers .="Reply-To: $visitor_email \r\n";

mail($to,$email_subjet,$email_body,$headers);

header("Location: contact.html");


?>