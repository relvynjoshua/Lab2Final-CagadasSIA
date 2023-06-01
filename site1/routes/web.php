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

$router->group(['prefix' => 'api'], function ($router) {
    $router->get('/users',['uses' => 'UserController@getUsers']);
    $router->get('/GETusers',['uses' => 'UserController@getUsers']);
    $router->get('/SEARCHusers/{id}',['uses' => 'UserController@searchUsers']);
    $router->post('/ADDusers',['uses' => 'UserController@addUsers']);
    $router->patch('/UPDATEusers/{id}',['uses' => 'UserController@updateUser']);
    $router->delete('/DELETEusers/{id}',['uses' => 'UserController@deleteUser']);
});
