<?php

    if (!empty($_POST["name"]) && !empty($_POST["phone"]) 
        && !empty($_POST["email"]) && !empty($_POST["message"])) 
    {

        //echo "Yes, mail is set";    
        $name = $_POST["name"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $message = $_POST["message"];

    } 
    else 
    {  
        echo "No, mail is not set";
    }

    $to = 'jordizeus93@gmail.com';

    $subject = 'Website free quote request';

    $headers = "From: " . $email . "\r\n";
    $headers .= "Name: " . $name . "\r\n";
    $headers .= "Phone: " . $phone . "\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo(" Message successfully sent!");
     } else {
        echo("Message delivery failed...");
     }

?>