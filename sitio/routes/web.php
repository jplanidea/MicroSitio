<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Google;

Route::get('/merchantid/{idcliente}', 'MainController@index');


Route::get('/installplugingtm','MainController@installPlugingtm');
Route::get('/installplugingtm2','MainController@installPlugingtm2');
Route::post('/installplugingtm3','MainController@installPlugingtm3');

Route::get('/installpluginga','MainController@installPluginga');
Route::post('/installpluginga2','MainController@installPluginga2');
Route::get('/installpluginga3','MainController@installPluginga3');
Route::get('/testga','MainController@testGa');


Route::get('/installplugincallbackgtm', 'MainController@callbackPlugingtm');
Route::get('/installplugincallbackga', 'MainController@callbackPluginga');



Route::get('/dashboard/merchantid/{idcliente}/type/{type}', 'DashboardController@selectType');

Route::get('/test/merchantid/{idcliente}', 'DashboardController@test');






Route::get('getgtmaccountbyid/{merchantid}', function ($merchantid) {

    $arr = json_encode(array('Hello World','otro'));
    return response($arr, 200)
        ->header('Content-Type', 'application/json')
        ;
});
