<?php
// DELETE
require_once "vendor/autoload.php";

use GuzzleHttp\Client;

$client = new Client([
    // Base URI is used with relative requests
    'base_uri' => 'https://reqres.in',
]);

$response = $client->request('DELETE', '/api/users/2');

echo $response->getStatusCode(); //should gives 204

$body = $response->getBody();
$bodyDecode = json_decode($body, true);
echo "<pre>";
print_r($bodyDecode);
echo "</pre>";