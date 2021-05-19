<?php
// File upload using Guzzle
require_once "vendor/autoload.php";

use GuzzleHttp\Client;

$client = new Client([
    // Base URI is used with relative requests
    'base_uri' => 'BASE_URL_HERE',
]);

$client->request('POST', '/endpoint_here', [
    'multipart' => [
        [
            'name' => 'files', // name value requires by endpoint
            'contents' => fopen('/path/to/file', 'r'),
            'filename' => 'custom_image.jpg'
        ],
    ]
]);