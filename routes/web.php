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

/* Route::get('users', 'ProvaController@index');
Route::post('posts', 'ProvaController@store');
Route::get('posts/create', 'ProvaController@create'); */
// resource route/controller
Route::resource('posts', 'PostController'); // questo controllo è l'equivalnte di tutte le route con i metodi scritti sopra.

Route::get('/', function () {
    return view('welcome');
});
