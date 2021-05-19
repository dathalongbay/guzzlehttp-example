<?php
// Upload
require_once "vendor/autoload.php";

use GuzzleHttp\Client;

try {
    $client = new Client([
        // Base URI is used with relative requests
        'base_uri' => 'http://api.resmush.it',
    ]);

    $response = $client->request('POST', "?qlty=92", [
        'multipart' => [
            [
                'name'     => 'files', // name value requires by endpoint
                'contents' => fopen(getcwd().'/blog.jpg', 'r'),
                'filename' => 'blog.jpg',
                'headers'  => array('Content-Type' => mime_content_type(getcwd().'/blog.jpg'))
            ]
        ]
    ]);

    if (200 == $response->getStatusCode()) {
        $response = $response->getBody();
        $arr_result = json_decode($response, true);
        print_r($arr_result);
    }
} catch (\Exception $e) {
    echo $e->getMessage();
}