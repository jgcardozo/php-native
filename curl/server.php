<?php
// https://www.youtube.com/watch?v=vPs8rI0NuB4

/*
get get user by id
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://reqres.in/api/users/2');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

if (curl_errno($ch))  echo curl_error($ch);
else $decoded =  json_decode($response, true);  // transform json to array

print_r("<pre>");
print_r($decoded);
print_r("</pre>");

curl_close($ch);
 */

/*
// post create
$ch =  curl_init();

$params = [
'name' => 'Juan Cardozo',
'job' => 'developer'
];

$queryString = http_build_query($params);

curl_setopt($ch, CURLOPT_URL, 'https://reqres.in/api/users');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $queryString);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

if (curl_errno($ch)) {
echo curl_error($ch);
} else {
$decoded = json_decode($response, true);
}

foreach($decoded as $key => $value) {
echo "$key = $value <br>";
}

curl_close($ch);
 */



/* // get list of all users
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://reqres.in/api/users?page=2');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

if (curl_errno($ch)) {
    echo curl_error($ch);
} else {
    $decoded = json_decode($response, true);
}


// foreach ($decoded['data'] as $key => $value) {} 

print_r("<pre>");
print_r($decoded['data']);
print_r("</pre>"); 

*/


$ch = curl_init();
$id = 2;

$params = [
    'name' => 'Juan Cardozo',
    'job' => 'developer',
];

$queryString = http_build_query($params);

curl_setopt($ch, CURLOPT_URL, "https://reqres.in/api/users/2");
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PATCH");
curl_setopt($ch, CURLOPT_POSTFIELDS, $queryString);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);


$response = curl_exec($ch);

if (curl_errno($ch)) {
    echo curl_error($ch);
} else {
    $decoded = json_decode($response, true);
}
curl_close($ch);
// foreach ($decoded['data'] as $key => $value) {}

print_r("<pre>");
print_r($decoded);
print_r("</pre>");


