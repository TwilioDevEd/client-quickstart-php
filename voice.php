<?php
require __DIR__ . '/vendor/autoload.php';

use Twilio\TwiML\VoiceResponse;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

function get_voice_response($to) {
    $response = new VoiceResponse();

    if (!empty($to) && strlen($to) > 0) {
        $number = htmlspecialchars($to);
        $dial = $response->dial('', ['callerId' => getenv('TWILIO_CALLER_ID')]);
        
        // wrap the phone number or client name in the appropriate TwiML verb
        // by checking if the number given has only digits and format symbols
        if (preg_match("/^[\d\+\-\(\) ]+$/", $number)) {
            $dial->number($number);
        } else {
            $dial->client($number);
        }
    } else {
        $response->say("Thanks for calling!");
    }
    return (string)$response;
}


// get the phone number from the page request parameters, if given
header('Content-Type: text/xml');
echo get_voice_response($_REQUEST['To'] ?? null);
