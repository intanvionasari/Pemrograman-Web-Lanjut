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

Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//tugasbesar

Route::get('/salmon', 'SalmonController@salmon');
Route::get('/sotolamongan', 'SotoController@sotolamongan');
Route::get('/resep','ResepController@index')->name('resep');
Route::get('/resep/add','ResepController@add');
Route::post('/resep/create','ResepController@create');
Route::get('/resep/edit/{id}', 'ResepController@edit');
Route::get('/resep/delete/{id}', 'ResepController@delete');
Route::post('/resep/update/{id}','ResepController@update');
Route::post('/daftarmasak','DaftarMasakController@daftarmasak');
Route::get('/pizza', 'PizzaController@pizza');
Route::get('/miejapan', 'MieJepangController@miejapan');