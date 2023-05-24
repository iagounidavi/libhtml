<?php
Route::get('/', 'HomeController@index')->name('home');

Route::get('/filmes', 'HomeController@filmes')->name('filmes');

Route::get('/contato', 'HomeController@contato')->name('contato');
Route::post('/contato', 'HomeController@enviarContato')->name('enviarContato');

 ?>
