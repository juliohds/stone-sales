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

//categories
$router->get('categories',  ['uses' => 'CategoryController@showAll']);
$router->get('categories/{id}',  ['uses' => 'CategoryController@show']);
$router->post('categories',  ['uses' => 'CategoryController@create']);

//customers
$router->get('customers',  ['uses' => 'CustomerController@showAll']);
$router->get('customers/{id}',  ['uses' => 'CustomerController@show']);
$router->post('customers',  ['uses' => 'CustomerController@create']);

//sales
$router->get('sales',  ['uses' => 'SalesController@showAll']);
$router->get('sales/{id}',  ['uses' => 'SalesController@show']);
$router->post('sales',  ['uses' => 'SalesController@create']);

//Freights
$router->get('novo-freight',  ['uses' => 'FreightController@novo']);
