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


Route::get('/','User\IndexController@index');
Route::get('/contact','User\ContactController@index');
Route::post('/contacts','User\ContactController@store');
Route::get('/buscategory/{id}','User\CategoryController@business');
Route::resource('/listing','User\BusinessController');
Route::post('/review','User\ReviewController@store');
Route::resource('/properties','User\PropertyController');
Route::get('/offer','User\OfferController@index');
   
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
//admin

Route::delete('/admin/busmulimage/{id}','Admin\BusMulimageController@destroy');
Route::resource('/admin/buscat','Admin\BusCatController');
Route::resource('/admin/business','Admin\BusinessController');
Route::resource('/admin/contact','Admin\ContactController');
Route::resource('/admin/propcat','Admin\PropCatController');
Route::resource('/admin/slider','Admin\SliderController');
Route::get('/admin/dash', 'Admin\DashboardController@index');
Route::resource('/admin/offers','Admin\OfferController'); 

//search
Route::get('/buscatsrch','Admin\SearchController@buscat');
Route::get('/bussrch','Admin\SearchController@bus');
Route::get('/offersrch','Admin\SearchController@offer');