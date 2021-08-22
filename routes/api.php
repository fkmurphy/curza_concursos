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

// login and register routes without auth
$router->group([
    'prefix' => 'api/v1',
], function() use($router) {
    $router->post('/register', 'AuthController@register');
    $router->post('/login', 'AuthController@login');

    $router->get('/ping', function () use ($router) {
        return response()->json([
            'message' => 'pong',
        ]);
    });

    $router->get('/', function () use ($router) {
        return response()->json([
            'server' => $router->app->version(),
            'api' => '1.0.0a',
        ]);
    });

    $router->get('/public', '\App\Http\Controllers\ContestController@publicList');

    //register user
    $router->post('/person-register', '\App\Http\Controllers\RegisterPersonController@store');

    $router->get('/countries', '\App\Http\Controllers\CountryController@list');
    $router->get('/cities', '\App\Http\Controllers\CityController@list');
    $router->get('/provinces', '\App\Http\Controllers\ProvinceController@list');

});

// routes group with auth
$router->group([
    'prefix' => 'api/v1',
    'middleware' => 'auth'
], function () use ($router) {
    // logout and refresh token
    $router->post('/logout', 'AuthController@logout');
    $router->post('/refresh', 'AuthController@refresh');
    // user info
    $router->post('/me', 'AuthController@userProfile');

    $router->group(['prefix' => '/postulations'], function () use ($router) {
        $controller = 'PostulationsController';
        $router->get('/', $controller . '@list');
        $router->post('/create', $controller . '@store');
        $router->put('/{code}/update', $controller . '@update');
        $router->get('/{code}/view', $controller . '@view');
    });

    $router->group(['prefix' => '/remuneration-types'], function () use ($router) {
        $controller = 'RemunerationTypeController';
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

    $router->group(['prefix' => '/category-types'], function () use ($router) {
        $controller = 'CategoryTypeController';
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
        $router->post('/create', $controller . '@store');
        $router->put('/{code}/update', $controller . '@update');
        $router->get('/{code}/view', $controller . '@view');
    });

    $router->group(['prefix' => '/working-day-types'], function () use ($router) {
        $controller = 'WorkingDayTypeController';
        $router->get('/', $controller . '@list');
        $router->post('/create', $controller . '@store');
        $router->put('/{code}/update', $controller . '@update');
        $router->get('/{code}/view', $controller . '@view');
    });

    $router->group(['prefix' => '/departaments'], function () use ($router) {
        $controller = 'DepartamentController';
        $router->get('/', $controller . '@list');
        $router->get('/{code}/view', $controller . '@view');
    });

    $router->group(['prefix' => '/courses'], function () use ($router) {
        $controller = 'CourseController';
        $router->get('/', $controller . '@list');
        $router->get('/{code}/view', $controller . '@view');
        $router->get('/career/{careerId}', $controller . '@getByCareer');
    });

    $router->group(['prefix' => '/careers'], function () use ($router) {
        $controller = 'CareerController';
        $router->get('/', $controller . '@list');
        $router->put('/{code}/update', $controller . '@update');
        $router->get('/{code}/view', $controller . '@view');
        $router->get('/departament/{departamentId}', $controller . '@getByDepartament');
    });

    $router->group(['prefix' => '/contests'], function () use ($router) {
        $router->get('/', 'ContestController@list');
        $router->post('/create', 'ContestController@store');
    });
});
