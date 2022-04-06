<?php

$payload = json_encode([
	"title" => "updated by juan through curl"
]);

$headers = [
	"Content-type: application/json; charset=UTF-8",
	"Accept-language: en"
];


$ch = curl_init();

curl_setopt_array($ch, [
	CURLOPT_URL => "https://jsonplaceholder.typicode.com/albums/1",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_CUSTOMREQUEST => "PATCH",
	CURLOPT_POSTFIELDS => $payload,
	CURLOPT_HTTPHEADER => $headers,
	CURLOPT_HEADER => true
]);

$response = curl_exec($ch);

$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

curl_close($ch);

var_dump($status_code);

print_r("<pre>");
print_r($response);
print_r("</pre>");