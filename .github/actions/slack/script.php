<?php

require_once 'vendor/autoload.php';
Requests::register_autoloader();

$response = Requests::post(
    $_ENV['INPUT_SLACK_WEBHOOK'],
    array(
       "content-type" => "application/json"
    ),
    json_encode (array(
         'text' => $_ENV['INPUT_MESSAGE']
    ))
 );

var_dump($response);

if(!$response->success) {
   echo $response->body;
}
