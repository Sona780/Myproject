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


  Route::get('/', 'ProjectController@home');
  //Route::get('about', 'PagesController@about');
//Route::get('forms', 'PagesController@forms');
  //Route::get('cards','CardsController@index');
//  Route::get('cards/{id}','CardsController@show');
Route::get('/projects','ProjectController@home');
Route::get('project/{project}','ProjectController@show');
Route::get('createproject','ProjectController@index');
Route::post('newproject','ProjectController@storeproject');
