<?php

/** @var \Laravel\Lumen\Routing\Router $router */

$router->get('/', static function () use ($router) {
    return $router->app->version();
});

$router->get('/healthcheck', 'HealthcheckController@check');
