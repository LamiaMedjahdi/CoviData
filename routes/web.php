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

  //  Route::get('/results', function () {
  //      return view('noresult');
  //  });

Route::get('/signal-par-categorie/{cat}/{id}', 'SignalsController@signalbycat');



Route::get('/acceuil', 'HomeStatsController@datacases');


Route::get('/publications', 'DisplayPublicationController@Publications');

Route::get('/publication/{id}', 'DisplayPublicationController@Publication_detail');

Route::get('/pubstag/{id}', 'DisplayPublicationController@Publication_by_tags');

Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::get('logout', 'SessionsController@destroy');


Route::get('index', 'HomeStatsController@indexinfosadmin');

// Route::get('index2', 'HomeStatsController@indexinfos');

Route::get('idees', 'IdeesController@idees');
Route::get('idee/{id}', 'IdeesController@idee');
Route::post('idees/store', 'IdeesController@store');
Route::get('idees-par-categorie/{cat}/{id}', 'IdeesController@ideesbycat');
Route::get('like/{id}', 'IdeesController@like');
Route::get('dislike/{id}', 'IdeesController@dislike');

Route::get('signals', 'SignalsController@signals');
Route::get('signal/{id}', 'SignalsController@signal');
Route::get('contributions/{nom}/{id}', 'SignalsController@contributions');
Route::post('signals/store', 'SignalsController@store');
// Route::get('signal-par-categorie', 'SignalsController@signalbycat');
Route::get('GetCommuneEdit/{id}', 'SignalsController@GetCommuneEdit');



Route::get('stats','StatController@index');
Route::get('stats/create', 'StatController@create');
Route::post('stats', 'StatController@store');
Route::get('stats/{id}/edit', 'StatController@edit');
Route::put('stats/update', 'StatController@update');
Route::delete('stats/{id}', 'StatController@delete');

//searchs routes
Route::post('Idea-search', 'IdeesController@searchidea');
Route::post('Signal-search', 'SignalsController@searchsignal');
Route::post('information-search', 'DisplayPublicationController@searchinformation');
Route::post('informations-search', 'DisplayPublicationController@searchinformations');






// Auth::routes();

Route::get('home', 'HomeController@index')->name('home');


