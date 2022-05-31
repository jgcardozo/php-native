<?php

require __DIR__ . "/vendor/autoload.php";


$pixel_id = '780674526184866';
$access_token = 'EAAIIZC75qRFkBAGPOx0cFqcKMbrLcA39ZBEIw5ZCH5m8EMd0CitTqGQL5A9TSiraUx7719TocrMcc02ZAhCVVFAHc2RUOuHc9WXLWlncpGFftoNz4ftkkr2ZBq9Bu5kIGM3Kw5ZAXDopytsSEt6RZC3cjZC9tHjPhZAGsyTHZB8bf1OLM2EBgGXxl7';
$base_url = "https://graph.facebook.com/v13.0/";


$user_data = array(
            "em"=>[hash('sha256', 'juan@gmail.com')],
            );

$custom_data = array(
                "size"=> "m",
                "color"=> "blue"          
);

$data = array(
            "event_name"=> "guzzle",
            "event_time"=> time(),
            "event_id" => 654,
            "action_source"=> "website",
            "event_source_url"=> "http://www.google.com",
            "user_data"=> $user_data,
            "custom_data"=> $custom_data
);
//print_r("<pre>"); print_r($data); print_r("</pre>");  exit;

$payload = json_encode([ "data"=>[$data] ]);
//print_r("<pre>"); print_r($payload); print_r("</pre>");  exit;


$headers = [
    'Authorization' => 'Bearer ' . $access_token,        
    'Accept'        => 'application/json',
];


$client = new GuzzleHttp\Client();
   //$response = $client->post($base_url.$pixel_id."/events",[
       $response = $client->request('POST', $base_url.$pixel_id."/events", [
				"headers" => $headers,
				"body" => $payload
			]);

     $output = $response->getBody()->getContents();
     echo $output;       
  //  print_r("<pre>"); print_r($response); print_r("</pre>"); 
//print "<pre> {$response->getBody()} </pre>";




/*
echo "status_code:". $response->getStatusCode() . "<br/>";
print "<pre> {$response->getHeader('content-type')[0]} </pre>";
print "<pre> {$response->getBody()} </pre>";
*/