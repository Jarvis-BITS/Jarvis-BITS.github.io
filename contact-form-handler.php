<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $email_from = 'javinben@gmail.com';

    if(empty($subject)){
        $subject = "New Contact submission";
    }

    $email_body = "User Name: $name.\n"
                    "User Email: $visitor_email.\n"
                        "Subject: $subject.\n"
                          "Message: $message.\n"

    $to = "bachani.javin@gmail.com";

    $headers = "From: $email_from \r\n";
     
    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$subject,$email_body,$headers);

    header("Location: index.html");

?>