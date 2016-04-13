<?php

//
// Collect and concatenate variables into a message string.
//
$required = 0; // Needs to be three; one for each required parameter.

if(isset($_POST['name']) && !empty($_POST['name']))
    $required ++;

if(isset($_POST['email']) && !empty($_POST['email']))
    $required ++;

if(isset($_POST['phone']) && !empty($_POST['phone']))
    $required ++;

if($required == 3) {

    $message_username = $_POST['name'];
    $message_email = $_POST['email'];
    $message_phone = $_POST['phone'];
    $message_to = 'BatesReport@gmail.com';
    $message_subject = 'Schedule Online Form Submission - David L. Bates';
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
        <p>An online scheduling form has been submitted via your website. The details of which are listed below:</p>
        <table>
        <tr style="height: 20px; text-align: center">
            <th>Client Name</th>
        </tr>
        <tr>
            <td style = "text-align: center">'.$message_username.'</td>
        </tr>

        ';

    //
    // Go through each of the form sections, appending the results to the $message_content variable if they were included
    // in the submission.
    //
    $message_content .=

        '
            <tr style="height: 20px; text-align: center">
                <th>Phone Number</th>
            </tr>
            <tr>
                <td style="text-align: center">'.$message_phone.'</td>
            </tr>

        ';

    $message_content .=

        '
            <tr style="height: 20px; text-align: center">
                <th>Email Address</th>
            </tr>
            <tr>
                <td style="text-align: center">'.$message_email.'</td>
            </tr>

        ';

    if (isset($_POST['altPhone']) && !empty($_POST['altPhone']))
    {
        $message_content .=
            '

            <tr style="height: 20px; text-align: center">
                <th>Alternate Phone Number</th>
            </tr>
            <tr>
                <td style="text-align: center">'.$_POST["altPhone"].'</td>
            </tr>

            ';
    }

    if (isset($_POST['address']) && !empty($_POST['address']))
    {
        $message_content .=
            '

            <tr style="height: 20px; text-align: center">
                <th>Address</th>
            </tr>
            <tr>
                <td style="text-align: center">'.wordwrap($_POST["address"]).'</td>
            </tr>

            ';
    }

    if (isset($_POST['city']) && !empty($_POST['city']))
    {
        $message_content .=
            '

            <tr style="height: 20px; text-align: center">
                <th>City</th>
            </tr>
            <tr>
                <td style="text-align: center">'.$_POST["city"].'</td>
            </tr>

            ';
    }

    if (isset($_POST['state']) && !empty($_POST['state']))
    {
        $message_content .=
            '

            <tr style="height: 20px; text-align: center">
                <th>State</th>
            </tr>
            <tr>
                <td style="text-align: center">'.$_POST["state"].'</td>
            </tr>

            ';
    }

    if (isset($_POST['service']) && !empty($_POST['service']))
    {
        $message_service = 'No service selected.';

        switch($_POST['service']){
            case 0: break;
            case 1: $message_service = 'Depositions'; break;
            case 2: $message_service = 'Sworn Statements'; break;
            case 3: $message_service = 'Hearings & Arbitrations'; break;
            case 4: $message_service = 'Conference Room'; break;
            case 5: $message_service = 'Legal Videography'; break;
            default: break;
        }

        $message_content .=
            '

            <tr style="height: 20px; text-align: center">
                <th>Service Selected</th>
            </tr>
            <tr>
                <td style="text-align: center">'.$message_service.'</td>
            </tr>

            ';
    }

    if (isset($_POST['attorneyName']) && !empty($_POST['attorneyName']))
    {
        $message_content .=
            '

            <tr style="height: 20px; text-align: center">
                <th>Attorney Name</th>
            </tr>
            <tr>
                <td style="text-align: center">'.$_POST["attorneyName"].'</td>
            </tr>

            ';
    }

    if (isset($_POST['lawFirmName']) && !empty($_POST['lawFirmName']))
    {
        $message_content .=
            '

            <tr style="height: 20px; text-align: center">
                <th>Law Firm</th>
            </tr>
            <tr>
                <td style="text-align: center">'.$_POST["lawFirmName"].'</td>
            </tr>

            ';
    }

    if (isset($_POST['caseName']) && !empty($_POST['caseName']))
    {
        $message_content .=
            '

            <tr style="height: 20px; text-align: center">
                <th>Case Name</th>
            </tr>
            <tr>
                <td style="text-align: center">'.$_POST["caseName"].'</td>
            </tr>

            ';
    }

    if (isset($_POST['depOne']) && !empty($_POST['depOne']))
    {
        $message_content .=
            '

            <tr style="height: 20px; text-align: center">
                <th>Deponent One</th>
            </tr>
            <tr>
                <td style="text-align: center">'.$_POST["depOne"].'</td>
            </tr>

            ';
    }

    if (isset($_POST['depOneTime']) && !empty($_POST['depOneTime']))
    {
        $message_content .=
            '

            <tr style="height: 20px; text-align: center">
                <th>Deponent One Time</th>
            </tr>
            <tr>
                <td style="text-align: center">'.$_POST["depOneTime"].'</td>
            </tr>

            ';
    }

    if (isset($_POST['depTwo']) && !empty($_POST['depTwo']))
    {
        $message_content .=
            '

            <tr style="height: 20px; text-align: center">
                <th>Deponent Two</th>
            </tr>
            <tr>
                <td style="text-align: center">'.$_POST["depTwo"].'</td>
            </tr>

            ';
    }

    if (isset($_POST['depTwoTime']) && !empty($_POST['depTwoTime']))
    {
        $message_content .=
            '

            <tr style="height: 20px; text-align: center">
                <th>Deponent Two Time</th>
            </tr>
            <tr>
                <td style="text-align: center">'.$_POST["depTwoTime"].'</td>
            </tr>

            ';
    }

    if (isset($_POST['depThree']) && !empty($_POST['depThree']))
    {
        $message_content .=
            '

            <tr style="height: 20px; text-align: center">
                <th>Deponent Three</th>
            </tr>
            <tr>
                <td style="text-align: center">'.$_POST["depThree"].'</td>
            </tr>

            ';
    }

    if (isset($_POST['depThreeTime']) && !empty($_POST['depThreeTime']))
    {
        $message_content .=
            '

            <tr style="height: 20px; text-align: center">
                <th>Deponent Three Time</th>
            </tr>
            <tr>
                <td style="text-align: center">'.$_POST["depThreeTime"].'</td>
            </tr>

            ';
    }

    if (isset($_POST['depFour']) && !empty($_POST['depFour']))
    {
        $message_content .=
            '

            <tr style="height: 20px; text-align: center">
                <th>Deponent Four</th>
            </tr>
            <tr>
                <td style="text-align: center">'.$_POST["depFour"].'</td>
            </tr>

            ';
    }

    if (isset($_POST['depFourTime']) && !empty($_POST['depFourTime']))
    {
        $message_content .=
            '

            <tr style="height: 20px; text-align: center">
                <th>Deponent Four Time</th>
            </tr>
            <tr>
                <td style="text-align: center">'.$_POST["depFourTime"].'</td>
            </tr>

            ';
    }

    if (isset($_POST['comments']) && !empty($_POST['comments']))
    {
        $message_content .=
            '

            <tr style="height: 20px; text-align: center">
                <th>Comments</th>
            </tr>
            <tr>
                <td style="text-align: center">'.wordwrap($_POST["comments"], 70).'</td>
            </tr>

            ';
    }

    if (isset($_POST['dateOfService']) && !empty($_POST['dateOfService']))
    {
        $message_content .=
            '

            <tr style="height: 20px; text-align: center">
                <th>Date of Service</th>
            </tr>
            <tr>
                <td style="text-align: center">'.$_POST["dateOfService"].'</td>
            </tr>

            ';
    }

    if (isset($_POST['dateOfTrial']) && !empty($_POST['dateOfTrial']))
    {
        $message_content .=
            '

            <tr style="height: 20px; text-align: center">
                <th>Date of Trial</th>
            </tr>
            <tr>
                <td style="text-align: center">'.$_POST["dateOfTrial"].'</td>
            </tr>

            ';
    }

    if (isset($_POST['videographerNeeded']) && !empty($_POST['videographerNeeded']))
    {
        $comment_videographer_needed = 'No.';

        switch($_POST['videographerNeeded']){

            case 0: break;
            case 1: $comment_videographer_needed = 'Yes.'; break;
            default: break;
        }

        $message_content .=
            '

            <tr style="height: 20px; text-align: center">
                <th>Videographer Needed</th>
            </tr>
            <tr>
                <td style="text-align: center">'.$comment_videographer_needed.'</td>
            </tr>

            ';
    }

    // Complete the message for the form, by closing the HTML tags.
    $message_content .=
        '
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