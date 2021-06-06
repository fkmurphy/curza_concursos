<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->group(['prefix' => 'api/v1'], function () use ($router) {
    $router->get('/', function () use ($router) {
        return $router->app->version();
    });

    $router->get('/ping', function () use ($router) {
        return response()->json([
            'message' => 'pong',
        ]);
    });

    $router->group(['prefix' => '/postulations'], function () use ($router) {
        $router->get('/', 'PostulationsController@get');
        $router->get('/{id}/view', 'PostulationsController@view');
    });

    $router->group(['prefix' => '/enrollments'], function () use ($router) {
        $router->get('/', 'Enrollment@get');
        $router->post('/{postulation}/register', 'Enrollment@register');
    });
    
});