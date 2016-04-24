<?php

// Required to return the status code and response message
header('Content-Type: application/json');

// Multiple forms appear on one single page (services) and therefore multiple
// message identifiers have been used.
// Cycle through those and if we have a match, ignore the stipulation below to print
// out an error, since normally we would only be looking for 'message'.
// Param: $messageSetNotEmpty keeps track of all of this.
$messageSetNotEmpty = false;

// Determine missing parameters
// Possible combinations = name, email, message, messageConference, messageHearings, messageStatements, messageDepositions
$missingParams = array();

if(empty($_POST['name']))
    array_push($missingParams, "name");

if(empty($_POST['email']))
    array_push($missingParams, "email");

if(empty($_POST['message']))
    array_push($missingParams, "message");
else {
    $messageSetNotEmpty = true;
}

if(empty($_POST['messageConference']) && !isset($_POST['messageConference']) && !$messageSetNotEmpty)
    array_push($missingParams, "messageConference");
else {
    $messageSetNotEmpty = true;
}

if(empty($_POST['messageHearings']) && !isset($_POST['messageHearings']) && !$messageSetNotEmpty)
    array_push($missingParams, "messageHearings");
else {
    $messageSetNotEmpty = true;
}

if(empty($_POST['messageStatements']) && !isset($_POST['messageStatements']) && !$messageSetNotEmpty)
    array_push($missingParams, "messageStatements");
else {
    $messageSetNotEmpty = true;
}

if(empty($_POST['messageDepositions']) && !isset($_POST['messageDepositions']) && !$messageSetNotEmpty)
    array_push($missingParams, "or message depositions inquiry ");
else {
    $messageSetNotEmpty = true;
}

// Default response, with included errors (if any).
$response = array('status_code' => '422', 'response_message' => 'Missing one or more required pieces of information: name, email and/or message.', 'response_errors' => $missingParams);

// Check that all contact variables are set and that they are not empty
if(isset($_POST['name']) && isset($_POST['email']) && !empty($_POST['name']) && !empty($_POST['email']) && $messageSetNotEmpty) {

    $message_to = 'BatesReport@gmail.com';
    //$message_to = 'addstevenson@hotmail.com'; // TEST EMAIL 
    $message_subject = 'Contact Form Submission - "Get In Touch" Section.';
    $message_username = $_POST['name'];
    $message_email = $_POST['email'];
    $message_headers = "MIME-Version: 1.0" . "\r\n";
    $message_headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $message_headers .= 'From: <webmaster@davidbates.com>' . "\r\n";

    // Get the value for the $_POST message.
    $messageTag = '';

    if(!empty($_POST['message'])) $messageTag = 'message';
    if(!empty($_POST['messageConference'])) $messageTag = 'messageConference';
    if(!empty($_POST['messageHearings'])) $messageTag = 'messageHearings';
    if(!empty($_POST['messageStatements'])) $messageTag = 'messageStatements';
    if(!empty($_POST['messageDepositions'])) $messageTag = 'messageDepositions';

    // Comprise the returned message for the email, with stylings etc.
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
        <th style="text-align: left">Message: '.wordwrap($_POST[$messageTag], 70).' </th>
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