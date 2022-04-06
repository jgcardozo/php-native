<?php

require_once('autoload.php');

use App\Classes\Curl;

$curl = new Curl('https://reqres.in/api/users');

$params = [
    'name' => 'antonio banderas',
    'job' => 'web developer'
];

$result = $curl->init()->setOption()
                       ->setOption(CURLOPT_RETURNTRANSFER, true)
                       ->setOption(CURLOPT_POST, true)
                       ->buildQuery($params)
                       ->decode()
                       ->fetch();

                       //print_r($result);

echo "id:$result->id<br>  name:$result->name<br> job:$result->job<br>";

