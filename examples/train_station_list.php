<?php
require dirname(__DIR__) . '/vendor/autoload.php';
require_once __DIR__.'/../src/Rzd/Api.php'; 
require_once __DIR__.'/../src/Rzd/Config.php';
require_once __DIR__.'/../src/Rzd/Query.php';

$api = new Rzd\Api();

$start = new DateTime();
$date0 = $start->modify('+1 day');

$params = [
    'trainNumber' => '054Г',
    'depDate'     => $date0->format('d.m.Y'),
];

echo $api->trainStationList($params);
