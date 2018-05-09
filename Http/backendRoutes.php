<?php

use Illuminate\Routing\Router;

/** @var Router $router */
$router->get('/', [
    'as' => 'dashboard.index',
    'uses' => 'DashboardController@index',
    'middleware' => 'can:dashboard.index',
]);

$router->group(['prefix' => '/dashboard'], function (Router $router) {
    $router->post('grid', [
        'as' => 'dashboard.grid.save',
        'uses' => 'DashboardController@save',
        'middleware' => 'can:dashboard.update',
    ]);
    $router->get('grid', [
        'as' => 'dashboard.grid.reset',
        'uses' => 'DashboardController@reset',
        'middleware' => 'can:dashboard.reset',
    ]);
    $router->get('clear', [
        'as' => 'dashboard.cache.clear',
        'uses' => 'DashboardController@cacheClear',
        'middleware' => 'can:dashboard.clear',
    ]);
});
