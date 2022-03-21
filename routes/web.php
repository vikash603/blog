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
Route::get("/about",["uses"=>"frontend\HomeController@about","middleware"=>"checkType"]);
Route::get('/', 'frontend\HomeController@index');
Route::get('/about', 'frontend\HomeController@about');
Route::get('/big', 'frontend\HomeController@big');
Route::get('/search', 'frontend\HomeController@search');
Route::get('/even', 'frontend\HomeController@even');
Route::get('/contact', 'frontend\HomeController@contact');
Route::post('/contact', 'frontend\HomeController@store');
Route::get('/terms', 'frontend\HomeController@terms');
Route::get('/student', 'frontend\HomeController@student');
Route::get('/view/{id}', 'frontend\HomeController@view');
Route::post('/contact', 'frontend\HomeController@store');
Route::get('/news-details/{slug}', 'frontend\HomeController@news_details');
Route::post('/news-details', 'frontend\HomeController@storr');
Route::get('/news-category', 'frontend\HomeController@news_category');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'HomeController@admin');
Route::resource('/category', 'CategoryController');
Route::resource('/subcategory', 'SubcategoryController');


Route::resource('/newstype', 'NewstypeController');

Route::get('/logo', 'LogoController@index');
Route::get('/logo/create', 'LogoController@create');
Route::post('/logo/create', 'LogoController@store');
Route::get('/logo/edit/{id}', 'LogoController@edit');
Route::post('/logo/update', 'LogoController@update');

Route::get('/user-logout', 'HomeController@logout');

Route::resource('/news', 'NewsController');
Route::resource('/tem', 'TemController');

Route::resource('/user', 'UserController');

Route::get('news/gallery/{id}', 'NewsController@gallery');

Route::post('/gallery/store', 'NewsController@storer');

Route::get('/delete/{id}', 'NewsController@delete');

Route::get('/adbanner', 'AdbannerController@index');
Route::get('/adbanner/create', 'AdbannerController@create');
Route::post('/adbanner', 'AdbannerController@store');
Route::get('/adbanner/edit/{id}', 'AdbannerController@edit');
Route::post('/adbanner/update', 'AdbannerController@update');

Route::get('/sliderads', 'SlideradsController@index');
Route::get('/sliderads/create', 'SlideradsController@create');
Route::post('/sliderads', 'SlideradsController@store');
Route::get('/sliderads/edit/{id}', 'SlideradsController@edit');
Route::post('/sliderads/update', 'SlideradsController@update');
Route::get('/sliderads/delete/{id}', 'SlideradsController@delete');


Route::get('/about/index', 'AboutController@index');
Route::get('/about/create', 'AboutController@create');
Route::post('/about/create', 'AboutController@store');
Route::get('/about/edit/{id}', 'AboutController@edit');
Route::post('/about/update', 'AboutController@update');

