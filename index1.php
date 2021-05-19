<?php
require_once "vendor/autoload.php";
use GuzzleHttp\Client;
$client = new Client(['base_uri' => 'https://reqres.in/']);

$response = $client->request('GET', '/api/users?page=1');

echo "<pre>";
print_r($response);
echo "</pre>";

$body = $response->getBody();
$bodyDecode = json_decode($body, true);
echo "<pre>";
print_r($bodyDecode);
echo "</pre>";
var_dump($body);
echo "<pre>";
print_r($body);
echo "</pre>";
echo "<br>" . $body;
