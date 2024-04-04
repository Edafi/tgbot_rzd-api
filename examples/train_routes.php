<?php

require dirname(__DIR__) . '/vendor/autoload.php';
require_once __DIR__.'/../src/Rzd/Api.php'; 
require_once __DIR__.'/../src/Rzd/Config.php';
require_once __DIR__.'/../src/Rzd/Query.php';

    $start = new DateTime();
    $date0 = $start->modify('+1 day');
    
    $params = [
        'dir'        => 0,
        'tfl'        => 3,
        'checkSeats' => 1,
        'code0'      => '2054001',
        'code1'      => '2044001',
        'dt0'        => $date0->format('06.04.2024'),
    ];
    
    $api = new Rzd\Api();
    
    echo $api->trainRoutes($params);

?>