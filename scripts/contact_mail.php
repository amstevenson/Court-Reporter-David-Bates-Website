<?php

//
// Check that all contact variables are set
//
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message']) && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])) {

    $message_to = 'BatesReport@gmail.com';
    $message_subject = 'Contact Form Submission - "Get In Touch" Section.';
    $message_username = $_POST['name'];
    $message_email = $_POST['email'];
    $message_headers = "MIME-Version: 1.0" . "\r\n";
    $message_headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $message_headers .= 'From: <webmaster@davidbates.com>' . "\r\n";
    $message_content =

    '

    <html>
    <head>
    <title>Contact Form Submission</title>
    </head>
    <body>
    <p> This has been sent from the "Get in Touch" section that can be found on most of the pages, except for the
    "schedule online" page.</p>
    <table>
    <br>
    <tr>
        <th style="text-align: left">Name: '.$message_username.'</th>
    </tr>
    <tr>
        <th style="text-align: left">Email: '.$message_email.'</th>
    </tr>
    <tr>
        <th style="text-align: left">Message: '.wordwrap($_POST['message'], 70).' </th>
    </tr>
    </table>
    </body>
    </html>

    ';

    //
    // Attempt to send message. If it's successful respond with success, otherwise failure.
    //
    if(mail($message_to, $message_subject, $message_content, $message_headers))
        echo "Message successfully sent! Your name, email address and message have been sent to my hotmail account. I will respond as quickly as possible.";
    else
        echo "Unfortunately there was an error sending the message, please contact this websites developer so we can resolve this issue (addstevenson@hotmail.com)";
}
    else
        echo "You are missing one or more pieces of information, please ensure you have submitted a name, email and message.";