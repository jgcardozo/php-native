<?php

$api_key = "sk_test_51JR2N6JpQCfGgXTRTJFGPCT7pyz6gkTPYB2IyGvtClAQEdnokzxhrFLGwhqvRodUs7m0wYMiNT62rZI9YLxSegfn008u3bDEpr";

$data = [
	"name" => "Antonio Banderas",
	"email" => "antonio.elbandera@company.com",
];


require __DIR__ . "/vendor/autoload.php";


$stripe = new  \Stripe\StripeClient($api_key);
$customer = $stripe->customers->create($data);

print_r("<pre>");
print_r($customer);
print_r("</pre>");