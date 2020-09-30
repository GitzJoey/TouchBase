<?php
require_once 'vendor/autoload.php';

function sendMailViaMailjet($mailFrom, $mailTo, $mailFromName, $mailToName, $subject, $message, $messageHTML) {
    $apiKey = '';
    $apiSecret = '';

    $mj = new \Mailjet\Client($apiKey, $apiSecret,true,['version' => 'v3.1']);

    $body = [
        'Messages' => [
            [
                'From' => [
                    'Email' => $mailFrom,
                    'Name' => $mailFromName
                ],
                'To' => [
                    [
                        'Email' => $mailTo,
                        'Name' => $mailToName
                    ]
                ],
                'Subject' => $subject,
                'TextPart' => $message,
                'HTMLPart' => $messageHTML
            ]
        ]
    ];

    try {
        $response = $mj->post(\Mailjet\Resources::$Email, ['body' => $body]);
        $response->success() && var_dump($response->getData());

        return true;
    } catch (Exception $e) {
        return false;
    }
}