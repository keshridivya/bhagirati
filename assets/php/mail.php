<?php

    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
        $name = strip_tags(trim($_POST["name"]));
            $name = str_replace(array("\r","\n"),array(" "," "),$name);
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $phone = strip_tags(trim($_POST["phone"]));
        $message = trim($_POST["message"]);

        // Check that data was sent to the mailer.
        if ( empty($name)  OR empty($phone) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Please complete the form and try again.";
            exit;
        }

        // Set the recipient email address.
        $recipient = "info@bhagirati.com";

        // Set the email subject.
        $subject = "New contact from $name";

        // Build the email content.
        $email_content = "Name: $name\n";
        $email_content .= "Phone Number: $phone\n";
        $email_content .= "Email: $email\n\n";
        $email_content .= "Message:\n$message\n";

        // Build the email headers.
        $email_headers .= 'MIME-Version: 1.0' . "\n";
        $email_headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $email_headers = "From: $name <$email>" ;
        $email_headers='X-Mailer: php/'.phpversion();
        // $returnpath = '-f dkeshari094@gmail.com';

        // Send the email.
        if (mail($recipient, $subject, $email_content, $email_headers,"-fwebmaster@{$_SERVER['SERVER_NAME']}")) {
            // Set a 200 (okay) response code.
            http_response_code(200);
            echo "Thank You! Your message has been sent.";
        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "Oops! Something went wrong and we couldn't send your message.";
        }

    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "There was a problem with your submission, please try again.";
    }

//     $to = "xxx@yyyy.com";

// $subject = "Test email sent on ".date('M d, Y, h:i:sp', time());

// $message = "Hi, This is a test mail";

// $headers = 'From: Multirater Surveys <info@multiratersurveys.com>' . "\n";
// $headers .= 'MIME-Version: 1.0' . "\n";
// $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// $returnpath = '-f info@multiratersurveys.com';

// if(mail($to,$subject,$message,

// $headers, $returnpath)) echo "Success"; else echo "Failed";

?>