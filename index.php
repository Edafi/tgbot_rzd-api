<?php
/*
require dirname(__DIR__) . '/rzd-api/vendor/autoload.php';
require_once __DIR__.'/src/Rzd/Api.php'; 
require_once __DIR__.'/src/Rzd/Config.php';
require_once __DIR__.'/src/Rzd/Query.php';

    $json = file_get_contents('data.json');
    $jsonData = json_decode($json, true);

    $start = new DateTime();
    $date0 = $start->modify('+1 day');
    
    $params = [
        'dir'        => $jsonData["dir"],
        'tfl'        => $jsonData["tfl"],
        'checkSeats' => $jsonData["checkSeats"],
        'code0'      => (string) $jsonData["code0"],
        'code1'      => (string) $jsonData["code1"],
        'dt0'        => $date0->format( (string) $jsonData["dt0"])
    ];
    

    $api = new Rzd\Api();
    
    echo $api->trainRoutes($params);
    print_r ($params);
    */

    require dirname(__DIR__) . '/rzd-api/vendor/autoload.php';
    require_once __DIR__.'/src/Rzd/Api.php'; 
    require_once __DIR__.'/src/Rzd/Config.php';
    require_once __DIR__.'/src/Rzd/Query.php';

    $start = new DateTime();
    $date0 = $start->modify('+1 day');
    
    $json = file_get_contents('data.json');
    $jsonData = json_decode($json, true);

    $code1 = "{$jsonData['code1']}";

    $params = [
        'dir'        => $jsonData["dir"],
        'tfl'        => $jsonData["tfl"],
        'checkSeats' => $jsonData["checkSeats"],
        'code0'      => (string) $jsonData["code0"],
        'code1'      => (string) $jsonData["code1"],
        'dt0'        => $date0->format('06.04.2024'),
    ];
    
    $api = new Rzd\Api();
    
    echo $api->trainRoutes($params);
    file_put_contents('output.json', $api->trainRoutes($params));
?>