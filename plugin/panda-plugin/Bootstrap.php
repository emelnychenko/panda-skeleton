<?php

namespace Panda\Plugin;

use Panda\BootstrapInterface;
use Panda\SupportInterface;

class Bootstrap implements BootstrapInterface
{
    public function __construct(SupportInterface $support)
    {
        $support->get('ladder')->add(
            __NAMESPACE__, __DIR__ . '/source'
        );

        $support->get('swift')->append([
            __DIR__ . '/swift' => 'phtml' 
        ]);

        $support->get('router')->group(['namespace' => 'Panda\Plugin\Controller'], function($router) {
            $router->get([
                '/'             => 'PluginController@getIndex',
            ])->deny([
                '*'             => 'PluginController@notFound',
            ]);
        });
    }
}
