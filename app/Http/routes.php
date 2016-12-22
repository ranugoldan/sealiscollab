<?php

$router->bind('wilayah', function($id)
{
	return App\Wilayah::whereId($id)->firstOrFail();
});
$router->bind('info', function($id)
{
	return App\Info::whereId($id)->firstOrFail();
});
$router->bind('prediksi', function($id)
{
	return App\Prediksi::where('id',$id)->firstOrFail();
});


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

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

get('/', ['as'=> 'admin', 'uses'=> 'AdminController@index']);
get('/admin', ['as'=> 'admin', 'uses'=> 'AdminController@index']);
get('/admin/login', ['as'=> 'admin_login', 'uses'=> 'AdminController@login']);
get('/admin/wilayah', ['as'=> 'admin_posts', 'uses'=> 'AdminController@wilayah']);
get('/admin/wilayah/create', ['as'=> 'admin_create', 'uses'=> 'AdminController@create']);
get('/admin/wilayah/{wilayah}/edit', ['as'=> 'admin_edit', 'uses'=> 'AdminController@edit']);
get('/admin/wilayah/{wilayah}/delete', ['as'=> 'admin_delete', 'uses'=> 'AdminController@delete']);
get('/admin/wilayah/{wilayah}/destroy', ['as'=> 'admin_destroy', 'uses'=> 'AdminController@destroy']);
get('/admin/wilayah/{wilayah}/info', ['as'=> 'admin_info', 'uses'=> 'AdminController@info']);
get('/admin/wilayah/{wilayah}/prediksi', ['as'=> 'admin_prediksi', 'uses'=> 'AdminController@prediksi']);

post('/admin/post', ['as'=>'admin_store', 'uses'=>'AdminController@store']);
patch('/{wilayah}', ['as'=>'admin_update', 'uses'=> 'AdminController@update']);
patch('/updateinfo/{info}', ['as'=>'admin_update_info', 'uses'=> 'AdminController@updateInfo']);
patch('/updateprediksi/{prediksi}', ['as'=>'admin_update_prediksi', 'uses'=> 'AdminController@updatePrediksi']);

