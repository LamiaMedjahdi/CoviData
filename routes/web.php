<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

     Route::get('/contact', function () {
         return view('contact');
     });

Route::get('/signal-par-categorie/{cat}/{id}', 'SignalsController@signalbycat');



Route::get('/acceuil', 'HomeStatsController@datacases');


Route::get('/publications', 'DisplayPublicationController@Publications');

Route::get('/publication/{id}', 'DisplayPublicationController@Publication_detail');

Route::get('/favoris/{id}/{userid}', 'DisplayPublicationController@favoris');

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
Route::post('users-search', 'UsersController@searchusers');


//make admins - users 
Route::get('make-admin/{id}', 'UsersController@makeadmin');
Route::get('remove-admin/{id}', 'UsersController@makeuser');
//users list
Route::get('users', 'UsersController@displayusers');
//modifier compte 
Route::get('/mon-compte', function () {
         return view('account');
     });


Route::get('/envoyer-message', 'MessagesController@showform');
Route::post('modifier-compte', 'UsersController@modifyuser');
Route::post('contact-admin', 'MessagesController@sendmessagetoadmin');
Route::post('send-message', 'MessagesController@sendmessagetouser');
// Route::post('envoyer-message', 'MessagesController@sendmessagetouser');
Route::get('messages', 'MessagesController@displaymessage');
Route::get('message/{id}', 'MessagesController@displaymessagebyid');

//admin - signalements
Route::get('/signalements', 'SignalsController@displaysignals');
Route::get('/signalements-en-attente', 'SignalsController@displaysignalsenattente');
Route::get('/signalement/{id}', 'SignalsController@displaysignal');
Route::get('/refuser-signal/{id}', 'SignalsController@refuser_signal');
Route::get('/approuver-signal/{id}', 'SignalsController@approuver_signal');

//admin - idees
Route::get('/idees-admin', 'IdeesController@displayidees');
Route::get('/idees-en-attente', 'IdeesController@displayideesenattente');
Route::get('/idee-admin/{id}', 'IdeesController@displayidee');
Route::get('/refuser-idee/{id}', 'IdeesController@refuser_idee');
Route::get('/approuver-idee/{id}', 'IdeesController@approuver_idee');
Route::post('/modifier-idee', 'IdeesController@modifier_idee');
Route::post('/modifier-signal', 'SignalsController@modifier_signal');

// admin publications

Route::get('/publications-admin', 'DisplayPublicationController@publicationsadmin');
// Route::get('/publication-admin/{$id}', 'DisplayPublicationController@publicationbyid');
Route::post('/modifier-publication', 'DisplayPublicationController@publicationbyid');
Route::post('/modif-pub', 'DisplayPublicationController@modifier_pub');
Route::post('/supprimer-pub', 'DisplayPublicationController@supprimer_pub');
Route::post('/ajouter-pub', 'DisplayPublicationController@ajouter_pub');
Route::post('/ajouter-tag', 'DisplayPublicationController@ajouter_tag');
Route::post('/ajouter-profession', 'DisplayPublicationController@ajouter_profession');
Route::post('/ajouter-source', 'DisplayPublicationController@ajouter_source');

Route::get('/map', 'HomeStatsController@map');

//  Route::get('/map', function ()
//   {
//    return view('map');
//  });


Route::get('/ajouter-publication', function()
 {
   if (Auth::check() AND Auth::user()->roles==1 )
  return view('ajouter-publication');
   elseif(Auth::check() and Auth::user()->roles == 0)
  return redirect("/index");
  elseif(!Auth::check())
  return redirect("/login");
   
 });


Route::get('/ajouter-statistiques', function () {
  if (Auth::check() and Auth::user()->roles == 1)
  return view('ajouter-statistiques');
  elseif (Auth::check() and Auth::user()->roles == 0)
  return redirect("/index");
  elseif (!Auth::check())
  return redirect("/login");
});

Route::get('/statistiques', 'StatController@statistiquestoday');

Route::post('/ajouter-stat', 'StatController@ajouter_stat');


//modifier statistiques 

Route::post('/modifier-statistique', 'StatController@statistiquebyid');
Route::post('/supprimer-statistique', 'StatController@supprimer_stat');
Route::post('/modifstat', 'StatController@modifier_stat');


// Auth::routes();

Route::get('home', 'HomeController@index')->name('home');


