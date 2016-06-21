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

Route::get('/', function () {
    return view('welcome');
});

Route::controllers([
    'auth'=>'Auth\AuthController',
    'password'=>'Auth\PasswordController'
]);

Route::get('/aboutme','PagesController@aboutme')->middleware('Admin');
Route::get('/contact','PagesController@contact');

Route::resource('/articles','ArticlesController');


Route::get('/chitiet-{id}','HomeController@detail');
Route::auth();
Route::get('test',function(){
	abort(403);
});
Route::get('/home', 'HomeController@index');

Route::group(['middleware' => 'web'], function () {
    
    Route::get('/articles','ArticlesController@index');

}
   );