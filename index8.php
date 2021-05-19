<?php
// PUT
require_once "vendor/autoload.php";

use GuzzleHttp\Client;

$client = new Client([
    // Base URI is used with relative requests
    'base_uri' => 'https://reqres.in',
]);

$response = $client->request('PUT', '/api/users/2', [
    'json' => [
        'name' => 'Sam',
        'job' => 'Developer'
    ]
]);

//get status code using $response->getStatusCode();

$body = $response->getBody();
$arr_body = json_decode($body, true);
print_r($arr_body);
