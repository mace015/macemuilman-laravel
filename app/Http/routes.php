<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PagesController@index');

Route::get('/over', 'PagesController@over');

Route::get('/portfolio', 'PagesController@portfolio');

Route::get('/contact', 'PagesController@contact');

Route::post('/contact', array('as' => 'contact', 'uses' => 'ContactController@send'));
