<?php

$pixel_id = '4780674526184866';
$access_token = 'EAAIIZC75qRFkBAGPOx0cFqcKMbrLcA39ZBEIw5ZCH5m8EMd0CitTqGQL5A9TSiraUx7719TocrMcc02ZAhCVVFAHc2RUOuHc9WXLWlncpGFftoNz4ftkkr2ZBq9Bu5kIGM3Kw5ZAXDopytsSEt6RZC3cjZC9tHjPhZAGsyTHZB8bf1OLM2EBgGXxl7';

// rl
//$pixel_id = '1563479767204843';
//$access_token = 'EAAQBZAXHmTrwBAANElCLrrteJxvvKXKU5GtzAfw91m4zzeitCB86f6cdpDNwtYSaGC3sj1HEZCZAUmUbHZAnl5KXr0lVdJvPZCWsZBlmyiabv4rjC9o41XKUZC5IMFv1VtHhSF3vuq8gGTb8JpJeddq7eGFdAe8kAQwypFUFcJ6uGhISjF1sexHnAXGvW1ZCdxIZD';

if (!isset($access_token)  || !isset($pixel_id)) {
    $statusCode = '500';
    $message = 'You must set your access-token and pixel-id';
    echo json_encode(['status'=>$statusCode, 'message'=>$message]);
    exit;
}


$base_url = "https://graph.facebook.com/v13.0/";

$user_data = array(
            "em"=>[hash('sha256', 'juan@gmail.com')]
            );

/*
,
            "ph"=>[hash('sha256', '3107847047')],
            "fn"=>[hash('sha256', 'jeferson')],
            "ln"=>[hash('sha256', 'ramirez')]
*/

$custom_data = array(
                "size"=> "m",
                "color"=> "blue"          
);

$data = array(
            "event_name"=> "Contact",
            "event_time"=> time(),
            "event_id" => '99996',
            "action_source"=> "website",
            "event_source_url"=> "https://askmethod.com",
            "user_data"=> $user_data,
            "custom_data"=> $custom_data
);
//print_r("<pre>"); print_r($data); print_r("</pre>");  exit;

$payload = json_encode([ "data"=>[$data] ]);

$headers = [
	"Content-type: application/json; charset=UTF-8",
	"Accept-language: en",
    "Authorization: Bearer $access_token"
];


$ch = curl_init();

curl_setopt_array($ch, [
	CURLOPT_URL => $base_url.$pixel_id."/events",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_CUSTOMREQUEST => "POST",
	CURLOPT_POSTFIELDS => $payload,
	CURLOPT_HTTPHEADER => $headers,
	CURLOPT_HEADER => false
]);

$response = curl_exec($ch);
curl_close($ch);

$arrRes = json_decode($response, true);
if (array_key_exists('events_received', $arrRes)) {
    echo "todo ok";
}else{
    echo "algo mal<br>". $arrRes['error']['message'];
}


print_r("<pre>");
print_r($response);
print_r("</pre>");