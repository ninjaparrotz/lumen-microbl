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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/posts', 'PostController@index');
$router->get('/post/{id}', 'PostController@show');
$router->post('/post', 'PostController@store');
$router->put('post', 'PostController@store');
$router->delete('/post/{id}', 'PostController@destroy');


