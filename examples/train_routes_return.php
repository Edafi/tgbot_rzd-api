<?php

require dirname(__DIR__) . '/vendor/autoload.php';
require_once __DIR__.'/../src/Rzd/Api.php'; 
require_once __DIR__.'/../src/Rzd/Config.php';
require_once __DIR__.'/../src/Rzd/Query.php';

$start = new DateTime();
$date0 = $start->modify('+1 day');
$date1 = $start->modify('+5 day');

$params = [
    'dir'        => 1,
    'tfl'        => 3,
    'checkSeats' => 1,
    'code0'      => '2004000',
    'code1'      => '2000000',
    'dt0'        => $date0->format('d.m.Y'),
    'dt1'        => $date1->format('d.m.Y'),
];

$api = new Rzd\Api();

echo $api->trainRoutesReturn($params);
