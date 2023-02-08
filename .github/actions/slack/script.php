<?php

require_once 'vendor/autoload.php';
Requests::register_autoloader();

var_dump($argv);
var_dump($_ENV);

// $response = Requests::post(
//     "https://hooks.slack.com/services/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",
//     array(
//        "content-type" => "application/json"
//     ),
//     json_encode (array(
//          'text' => 'some Message'
//     ))
//  );
//
// var_dump($response);
//
// if(!$response->success) {
//    echo 'error';
// }
