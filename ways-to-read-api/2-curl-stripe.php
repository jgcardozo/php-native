<?php

//this is the stripe secretKey
$api_key = "sk_test_51JR2N6JpQCfGgXTRTJFGPCT7pyz6gkTPYB2IyGvtClAQEdnokzxhrFLGwhqvRodUs7m0wYMiNT62rZI9YLxSegfn008u3bDEpr";

$data = [
	"name" => "Gabi Amariles",
	"email" => "gabi.amariles.prima@company.com",
];

$ch = curl_init();

curl_setopt_array($ch, [
	CURLOPT_URL => "https://api.stripe.com/v1/customers",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_POSTFIELDS => http_build_query($data),
	CURLOPT_USERPWD => $api_key  // CURLOPT_USERPWD  for basic authentication

]);

$response = curl_exec($ch);

$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

curl_close($ch);

var_dump($status_code);

print_r("<pre>");
print_r($response);
print_r("</pre>");