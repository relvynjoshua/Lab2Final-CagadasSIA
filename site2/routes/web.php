<?php

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
