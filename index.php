<?php
require_once __DIR__.'/vendor/autoload.php';

use GuzzleHttp\client;
use Symfony\Component\HttpFoundation\Response;

$api_key =getenv('OPEN_WEATHER_API');

$app = new Silex\Application();

$app->get('/clima', function() use($app,$api_key) {
    
	$client = new client();
	$url = "http://api.openweathermap.org/data/2.5/weather?id=3530597&appid=$api_key&units=metric";
	$response = $client->get($url);
	$body = $response->getBody();
	
	return new Response($body,200,array('content-Type' => 'aplication/json'));

	
});

$app->run();
