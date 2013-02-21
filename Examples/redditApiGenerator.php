<?php

include_once __DIR__.'/../vendor/autoload.php';

use Jnonon\Tools\Apigee\Client\ApiGenerator;

$apigee = new ApiGenerator('reddit', 'RedditApi');
$endpoints = $apigee->getEndpoints();

//Write to a path, overriding if exists
//$apigee->generateClassForEndpoint($endpoints[0])->write('/desirable/path', true);

echo $apigee->generateClassForEndpoint($endpoints[0])->toString();
