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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/{name?}/{lastname?}/{age?}', function ($name = 'Elias', $lastname = 'Aboutaharan', $age = 23) {
    return "<h1>Salut, je suis " .$name." ".$lastname. " et j'ai ".$age." ans</h1>";
})->where([
    'name' => '[a-zA-Z]+',
    'lastname' => '[a-zA-Z]+',
    'age' => '[0-9]{0,2}'
]); 

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
