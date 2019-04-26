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
////////////////////////////////////
Route::resource('technics', 'TechnicsController');
Route::post('/technics/save', 'TechnicsController@save');
Route::get('/technics/edit/{id}', 'TechnicsController@edit');
Route::post('/technics/postedit', 'TechnicsController@postedit');
Route::get('/technics/delete/{id}', 'TechnicsController@delete');
Route::post('/technics/postdelete', 'TechnicsController@postdelete');
///////////////////////////////////
Route::resource('cities', 'CityController');
Route::post('/city/save', 'CityController@save');
Route::get('/city/edit/{id}', 'CityController@edit');
Route::post('/city/postedit', 'CityController@postedit');
Route::get('/city/delete/{id}', 'CityController@delete');
Route::post('/city/postdelete', 'CityController@postdelete');
///////////////////////////////////
Route::resource('regions', 'RegionController');
Route::post('/region/save', 'RegionController@save');
Route::get('/region/edit/{id}', 'RegionController@edit');
Route::post('/region/postedit', 'RegionController@postedit');
Route::get('/region/delete/{id}', 'RegionController@delete');
Route::post('/region/postdelete', 'RegionController@postdelete');
//////////////////////////////////
Route::resource('armenia', 'ArmeniaController');
//////////////////////////////////////////////////
Route::get('/ajax', 'AjaxController@index');
Route::get('/region/save', 'AjaxController@save');