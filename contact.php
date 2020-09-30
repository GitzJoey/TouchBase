<?php
include 'mail.php';

session_start();

if($_POST) {
    $visitor_name = "";
    $visitor_email = "";
    $visitor_message = "";
    $email_title= "Contact from ";

    if (isset($_POST['captcha_text']) && strtoupper($_POST['captcha_text']) == $_SESSION['captcha_text']) {
        if (isset($_POST['contact_name'])) {
            $visitor_name = filter_var($_POST['contact_name'], FILTER_SANITIZE_STRING);
        }

        if (isset($_POST['contact_email'])) {
            $visitor_email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['contact_email']);
            $visitor_email = filter_var($visitor_email, FILTER_VALIDATE_EMAIL);

            if (!$visitor_email) {
                echo json_encode(array('return' => 'Invalid Email'));
                return;
            }
        }

        if (isset($_POST['contact_message'])) {
            $visitor_message = htmlspecialchars($_POST['contact_message']);
        }

        $email_title = $email_title.$visitor_name.'('.$visitor_email.')';

        $headers = 'MIME-Version: 1.0' . "\r\n"
            . 'Content-type: text/html; charset=utf-8' . "\r\n"
            . 'From: ' . $visitor_email . "\r\n";

        $mailTo = 'gitzjoey@gmail.com';
        $mailToName = 'GitzJoey';

        $messageHTML = '<pre>'.$visitor_message.'</pre>';

        if (mail('gitzjoey@gmail.com', $email_title . $visitor_name . '(' . $visitor_email . ')', $visitor_message, $headers)) {
            echo json_encode(array('return' => 'Thank you for contacting us. You will get a reply within 24 hours.'));
        } else {
            echo json_encode(array('return' => 'We are sorry but the email did not go through.'));
        }
    } else {
        echo json_encode(array('return' => 'Invalid Captcha'));
    }
}
