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
Route::get('/home', 'HomeController@home');
Route::get('/about', 'AboutController@about');
Route::get('/article/{id}', 'ArticleController@id');

//Route Tempalte
Route::get('/homeboot', 'HomeController@homeboot');

Route::get('/blog/{id}', 'ArticleController@article');
// Tugas
Route::get('/homeboot', 'HomeController@homeboot');

Route::get('/blog/{id}', 'ArticleController@articles');

Route::get('/about', 'AboutController@full');
Route::get('/h', 'HomeController@index');
Route::get('/contact', 'ContactController@index');
Route::get('/article/{id}', 'ArticleController@index');
Route::get('/manage', 'ArticleController@manage')->name('manage');
Route::get('/manage/add', 'ArticleController@add');
Route::post('/article/create','ArticleController@create');
Route::get('/article/edit/{id}','ArticleController@edit');
Route::post('/article/update/{id}','ArticleController@update');
Route::get('/article/delete/{id}','ArticleController@delete');
Route::get('/article/cetak_pdf', 'ArticleController@cetak_pdf');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//user manage
Route::get('/manageuser', 'UserController@manageuser')->name('manageuser');
Route::get('/manageuser/add','UserController@add');
Route::post('/createuser','UserController@create');
Route::get('/user/edit/{id}','UserController@edit');
Route::post('/user/update/{id}','UserController@update');
Route::get('/user/delete/{id}','UserController@delete');
Route::get('/user/cetak_pdf', 'UserController@cetak_pdf');