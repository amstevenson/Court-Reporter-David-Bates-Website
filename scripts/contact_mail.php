<?php

// Required to return the status code and response message
header('Content-Type: application/json');

// Determine missing parameters
$missingParams = array();

if(empty($_POST['name']))
    array_push($missingParams, "name");

if(empty($_POST['email']))
    array_push($missingParams, "email");

if(empty($_POST['message']))
    array_push($missingParams, "message");

// Default response, with included errors (if any).
$response = array('status_code' => '422', 'response_message' => 'Missing one or more required pieces of information: name, email and/or message.', 'response_errors' => $missingParams);

// Check that all contact variables are set and that they are not empty
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message']) && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])) {

    //$message_to = 'BatesReport@gmail.com';
    $message_to = 'addstevenson@hotmail.com';
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
    if(mail($message_to, $message_subject, $message_content, $message_headers)) {
        $response = array('status_code' => '200', 'response_message' => 'Your Inquiry has been emailed successfully, I will endeavour to get back to you shortly.' ,
                                                                        'response_errors' => $missingParams);
        echo json_encode($response);
    }
    else {
        $response = array('status_code' => '400', 'response_message' => 'Unfortunately, a technical error has occurred.
                                                                         Please contact addstevenson@hotmail.com for more
                                                                          information, or try again.',
                                                                          'response_errors' => $missingParams);

        echo json_encode($response);


    }
}
    else
        echo json_encode($response);