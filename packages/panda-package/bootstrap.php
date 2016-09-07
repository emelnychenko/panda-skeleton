<?php

$app->load('Panda\\Package', __DIR__);

$app->view()->register([
    __DIR__ . '/view' => 'phtml',
]);

$app->router()->group(['namespace' => 'Panda\Package\Controller'], function($router) {
    $router->get([
        '/'             => 'Package::getIndex',
    ])->deny([
        '*'             => 'Package::notFound',
    ]);
});