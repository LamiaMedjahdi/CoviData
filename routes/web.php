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
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/acceuil', 'HomeStatsController@datacases');

Route::get('/publications', 'DisplayPublicationController@Publications');



Route::get('index', function () {
    return view('index');
});

Route::get('stats','StatController@index');
Route::get('stats/create', 'StatController@create');
Route::post('stats', 'StatController@store');
Route::get('stats/{id}/edit', 'StatController@edit');
Route::put('stats/update', 'StatController@update');
Route::delete('stats/{id}', 'StatController@delete');





Auth::routes();

Route::get('home', 'HomeController@index')->name('home');


