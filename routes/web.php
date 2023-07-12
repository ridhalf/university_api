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
$router->group(['prefix' => 'auth'], function () use ($router) {
    $router->post('login', 'AuthController@login');
});

$router->group(['prefix' => 'api', 'middleware' => 'checktoken'], function () use ($router) {
    $router->post('logout', 'AuthController@logout');
    $router->post('kelas/mata_pelajaran', 'KelasPelajaranController@getAllMataPelajaranByKelasId');
});


$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('provinsi', 'WilayahController@getAllProvinsi');
    $router->get('kota/{provinsi_id}', 'WilayahController@getKotaById');
});
