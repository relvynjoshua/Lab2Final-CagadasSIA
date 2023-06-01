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

$router->group(['prefix' => 'site1'], function ($router) {
    $router->get('/users',['uses' => 'site1Controller@getUsers']);
    $router->get('/GETusers',['uses' => 'site1Controller@getUsers']);
    $router->get('/SEARCHusers/{id}',['uses' => 'site1Controller@searchUsers']);
    $router->post('/ADDusers',['uses' => 'site1Controller@addUsers']);
    $router->patch('/UPDATEusers/{id}',['uses' => 'site1Controller@updateUser']);
    $router->delete('/DELETEusers/{id}',['uses' => 'site1Controller@deleteUser']);
});

$router->group(['prefix' => 'site2'], function ($router) {
    $router->get('/users',['uses' => 'site2Controller@getUsers']);
    $router->get('/GETusers',['uses' => 'site2Controller@getUsers']);
    $router->get('/SEARCHusers/{id}',['uses' => 'site2Controller@searchUsers']);
    $router->post('/ADDusers',['uses' => 'site2Controller@addUsers']);
    $router->patch('/UPDATEusers/{id}',['uses' => 'site2Controller@updateUser']);
    $router->delete('/DELETEusers/{id}',['uses' => 'site2Controller@deleteUser']);
});