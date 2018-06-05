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

Route::get('res',[
    'as'=>'res',
    'uses'=>'PagesController@res'
]);

Route::get('com',[
    'as'=>'com',
    'uses'=>'PagesController@com'
]);

Route::get('kitchen',[
    'as'=>'kitchen',
    'uses'=>'PagesController@kitchen'
]);

Route::get('flooring',[
    'as'=>'flooring',
    'uses'=>'PagesController@flooring'
]);

Route::get('deck',[
    'as'=>'deck',
    'uses'=>'PagesController@deck'
]);
