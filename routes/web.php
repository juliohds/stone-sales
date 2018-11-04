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


//products
$router->get('products',  ['uses' => 'ProductController@showAll']);
$router->get('products/{id}',  ['uses' => 'ProductController@show']);
$router->post('products',  ['uses' => 'ProductController@create']);
$router->put('products/{id}',  ['uses' => 'ProductController@update']);
$router->delete('products/{id}',  ['uses' => 'ProductController@destroy']);
