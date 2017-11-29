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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/prestation', 'PrestationController@show')->name('prestation');
Route::post('/addprestation', 'PrestationController@AddPrestation');

Route::get('/deletelist/{id}', 'PrestationController@DeletePrestation')->where('id', '[0-9]+');
Route::get('/prestation/{id}', 'PrestationController@ShowPrestation')->where('id', '[0-9]+')->name('listeprestation');

Route::post('/addpresta/{idlist}', 'PrestationController@AddPresta')->where('idlist', '[0-9]+');
Route::get('/deletepresta/{idpresta}/{idlist}', 'PrestationController@DeletePresta')->where(['idpresta' => '[0-9]+', 'idlist' => '[0-9]+']);

Route::get('/profile/{idprofile}', 'PrestationController@ShowProfile')->name('profile')->where('idprofile', '[0-9]+');
Route::post('/changeprofile/{idprofile}', 'PrestationController@ChangeProfile')->where('idprofile', '[0-9]+');

Route::get('/facture', 'PrestationController@ShowFacture')->name('facture');
Route::get('/pdf', 'PrestationController@GeneratePDF')->name('PDF');

Route::get('/test', 'PrestationController@test')->name('test');