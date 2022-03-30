<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];


    $email_from = 'info@fenceandhomeimprovement.com';

    $email_subject = "New Lead - Fence Home Improvement";
    
    $email_body =   "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                    "User Phone: $phone.\n".
                    "Subject: $subject.\n".
                    "User Message: $message.\n";


    $to = "jcromualdo24@gmail.com";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: contact.html");


?>