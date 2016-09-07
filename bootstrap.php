<?php

use Panda\Deploy\Applique;
use Panda\Deploy\Packager;

$app = Applique::init(__DIR__ . '/', 'config/*.local.php');

$app->register([
    'router' => Panda\Http\Router::class,
    'view'   =>  Panda\Swift\View::class
]);

$pkg = Packager::init('packages/', [
    'panda-package', 
])->unpack($app);

Applique::send($app);