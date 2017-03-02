<?php

require_once __DIR__.'/vendor/autoload.php';

$app = new Silex\Application();

$app->get('/clima', function() use($app) {
    return 'Marlene Elsa Arellano Dominguez  cuenta 415044949';
	
});

$app->run();