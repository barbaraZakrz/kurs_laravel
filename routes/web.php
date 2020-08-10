<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|set syntax b
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', 'PagesController@contact');
Route::get('/about', 'PagesController@about');

Route::group(['middleware' => ['web']], function () {
/*Route::get('/videos', 'VideosController@index');
Route::get('/videos/create', 'VideosController@create');
Route::get('/videos/{id}', 'VideosController@show');*/
	Route::resource('videos','VideosController');
});



