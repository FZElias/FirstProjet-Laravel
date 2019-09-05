<?php


Route::get('/', 'CodingController@index' );

Route::get('/coding', 'CodingController@code' );



// Route::get('/{name?}/{lastname?}/{age?}', function ($name = 'Elias', $lastname = 'Aboutaharan', $age = 23) {
//     return "<h1>Salut, je suis " .$name." ".$lastname. " et j'ai ".$age." ans</h1>";
// })->where([
//     'name' => '[a-zA-Z]+',
//     'lastname' => '[a-zA-Z]+',
//     'age' => '[0-9]{0,2}'
// ]); 

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
