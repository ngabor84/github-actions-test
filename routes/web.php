<?php

/** @var \Laravel\Lumen\Routing\Router $router */

$router->get('/', function () use ($router) {
    return 'Hello World!';
});

$router->get('/healthcheck', 'HealthcheckController@check');
