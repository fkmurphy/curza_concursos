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

// login and register routes
$router->post('/api/v1/register', 'AuthController@register');
$router->post('/api/v1/login', 'AuthController@login');

$router->group([
    'prefix' => 'api/v1',
    'middleware' => 'auth'
], function () use ($router) {
    // logout and refresh token
    $router->post('/logout', 'AuthController@logout');
    $router->post('/refresh', 'AuthController@refresh');
    // user info
    $router->post('/me', 'AuthController@userProfile');

    $router->get('/', function () use ($router) {
        return $router->app->version();
    });

    $router->get('/ping', function () use ($router) {
        return response()->json([
            'message' => 'pong',
        ]);
    });

    $router->group(['prefix' => '/postulations'], function () use ($router) {
        $controller = 'PostulationsController';
        $router->get('/', $controller . '@list');
        $router->post('/create', $controller . '@store');
        $router->put('/{code}/update', $controller . '@update');
        $router->get('/{code}/view', $controller . '@view');
    });

    $router->group(['prefix' => '/enrollments'], function () use ($router) {
        $controller = 'EnrollmentController';
        $router->get('/', $controller . '@list');
        $router->post('/create', $controller . '@store');
        $router->put('/{code}/update', $controller . '@update');
        $router->get('/{code}/view', $controller . '@view');
    });

    $router->group(['prefix' => '/categories'], function () use ($router) {
        $controller = 'CategoryController';
        $router->get('/', $controller . '@list');
        $router->post('/create', $controller . '@store');
        $router->put('/{code}/update', $controller . '@update');
        $router->get('/{code}/view', $controller . '@view');
    });
    
    $router->group(['prefix' => '/areas'], function () use ($router) {
        $controller = 'AreaController';
        $router->get('/', $controller . '@list');
        $router->post('/create', $controller . '@store');
        $router->put('/{code}/update', $controller . '@update');
        $router->get('/{code}/view', $controller . '@view');
    });

    $router->group(['prefix' => '/countries'], function () use ($router) {
        $controller = 'CountryController';
        $router->get('/', $controller . '@list');
        $router->post('/create', $controller . '@store');
        $router->put('/{code}/update', $controller . '@update');
        $router->get('/{code}/view', $controller . '@view');
    });

    $router->group(['prefix' => '/working-day-type'], function () use ($router) {
        $controller = 'WorkingDayTypeController';
        $router->get('/', $controller . '@list');
        $router->post('/create', $controller . '@store');
        $router->put('/{code}/update', $controller . '@update');
        $router->get('/{code}/view', $controller . '@view');
    });

    $router->group(['prefix' => '/departaments'], function () use ($router) {
        $controller = 'DepartamentController';
        $router->get('/', $controller . '@list');
        $router->post('/create', $controller . '@store');
        $router->put('/{code}/update', $controller . '@update');
        $router->get('/{code}/view', $controller . '@view');
    });

    $router->group(['prefix' => '/courses'], function () use ($router) {
        $controller = 'CourseController';
        $router->get('/', $controller . '@list');
        $router->post('/create', $controller . '@store');
        $router->put('/{code}/update', $controller . '@update');
        $router->get('/{code}/view', $controller . '@view');
    });
    $router->group(['prefix' => '/contests'], function () use ($router) {
        $router->get('/', 'ContestController@list');
    });
});
