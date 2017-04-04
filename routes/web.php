<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@show');

Route::get('/home', 'HomeController@show');

// Route::controller('datatables', 'DatatablesController',[
//     'anydata'    => 'datatables.data',
//     'getIndex'   => 'datatables',
// ]);
 Route::get('datatables',        'DatatablesController@getIndex');
 Route::get('datatables/data',   'DatatablesController@anydata');
 
 Route::get('data-response', 'DatatablesController@dataResponse');
 Route::post('data-response', 'DatatablesController@dataResponse');

