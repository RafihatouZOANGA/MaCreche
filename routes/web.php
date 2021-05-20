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

Route::get('/1', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'AccueilController@dashboard')->name('accueil');
Route::get('/dash_admin', 'AdminController@dashadmin')->name('dashboard');
Route::get('/ajout_membre', 'AdminController@ajoutmembre')->name('membre');

//ajouter un membre admin
Route::post('/ajout_membre', 'AdminController@inscription')->name('membre.store');

//inscription nounou
Route::post('/inscription_nounou', 'NounouController@inscription')->name('nounou.store');
//inscription nounou
Route::post('/inscription_parent', 'ParentController@inscription')->name('parent.store');





