<?php
require dirname(__DIR__) . '/vendor/autoload.php';
require_once __DIR__.'/../src/Rzd/Api.php'; 
require_once __DIR__.'/../src/Rzd/Config.php';
require_once __DIR__.'/../src/Rzd/Query.php';

$api  = new Rzd\Api();

$params = [
    'stationNamePart' => 'ОМСК',
    'compactMode'     => 'y',
];

$stations = $api->stationCode($params);

if ($stations) {
    echo $stations;
} else {
    echo 'Не найдено совпадений!';
}
