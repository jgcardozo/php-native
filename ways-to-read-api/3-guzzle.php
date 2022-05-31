<?php

require __DIR__ . "/vendor/autoload.php";


$client = new GuzzleHttp\Client();

// simplest way
//$response = $client->request('GET', "https://jsonplaceholder.typicode.com/albums");

$payload = json_encode([
	"title" => "updated by juan through guzzle"
]);

$headers = [
	"Content-type: application/json; charset=UTF-8",
];


$response = //$client->get("https://jsonplaceholder.typicode.com/posts/101",[
	$client->post("https://jsonplaceholder.typicode.com/posts",[
				"headers" => $headers,
				"body" => $payload,
	]);


echo "status_code:". $response->getStatusCode() . "<br/>";
print "<pre> {$response->getHeader('content-type')[0]} </pre>";
print "<pre> {$response->getBody()} </pre>";