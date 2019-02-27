<?php

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

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->group(['prefix' => 'v1'], function () use ($router) {
        $router->get('/fakers', ['as'=>'read','uses'=>'FakersController@index']);
        $router->post('/fakers',  ['as'=>'create','uses'=>'FakersController@store']);
        $router->put('/fakers',  ['as'=>'update','uses'=>'FakersController@update']);
        $router->delete('/fakers/{id}[/{type}]',  ['as'=>'delete','uses'=>'FakersController@destroy']);
    });
});
