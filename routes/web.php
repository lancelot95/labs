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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/welcome','WelcomeController');
Route::resource('/service','ServiceController');
Route::resource('/blog','BlogController');
Route::resource('/blog-post','BlogpostController');
Route::resource('/contact','ContactController');
Route::resource('/carousel','CarouselController');
Route::resource('/acceuil','AcceuilController');

Route::get('/mail',function () {
    return view('mailform'); 
})->name('mail');
Route::post('/mail/send','ContactController@mail')->name('form');